<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UsersController extends Controller
{
    /**
     * Display a listing of users
     */
    public function index(Request $request)
    {
        $query = User::with('roles');

        // Filter by role
        if ($request->filled('role')) {
            $query->whereHas('roles', function($q) use ($request) {
                $q->where('name', $request->role);
            });
        }

        // Search
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%");
            });
        }

        $users = $query->latest()->paginate(15);
        $roles = Role::all();

        // Statistics
        $stats = [
            'total' => User::count(),
            'admin_lph' => User::whereHas('roles', function($q) {
                $q->where('name', 'admin_lph');
            })->count(),
            'auditor' => User::whereHas('roles', function($q) {
                $q->where('name', 'auditor_halal');
            })->count(),
            'pelaku_usaha' => User::whereHas('roles', function($q) {
                $q->where('name', 'pelaku_usaha');
            })->count(),
            'penyedia_halal' => User::whereHas('roles', function($q) {
                $q->where('name', 'penyedia_halal');
            })->count(),
        ];

        return view('admin.users.index', compact('users', 'roles', 'stats'));
    }

    /**
     * Show the form for creating a new user
     */
    public function create()
    {
        $roles = Role::all();

        return view('admin.users.create', compact('roles'));
    }

    /**
     * Store a newly created user
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'phone' => ['nullable', 'string', 'max:20'],
            'roles' => ['required', 'array'],
            'roles.*' => ['exists:roles,id'],
        ]);

        DB::beginTransaction();
        try {
            $user = User::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
                'phone' => $validated['phone'] ?? null,
            ]);

            // Attach roles
            $user->roles()->attach($validated['roles']);

            DB::commit();

            return redirect()->route('admin.users.index')
                           ->with('success', 'Pengguna berhasil ditambahkan');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withInput()->with('error', 'Gagal menambahkan pengguna: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified user
     */
    public function show(User $user)
    {
        $user->load(['roles', 'permissions']);

        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified user
     */
    public function edit(User $user)
    {
        $roles = Role::all();
        $user->load('roles');

        return view('admin.users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified user
     */
    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $user->id],
            'password' => ['nullable', 'confirmed', Rules\Password::defaults()],
            'phone' => ['nullable', 'string', 'max:20'],
            'roles' => ['required', 'array'],
            'roles.*' => ['exists:roles,id'],
        ]);

        DB::beginTransaction();
        try {
            $updateData = [
                'name' => $validated['name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'] ?? null,
            ];

            // Only update password if provided
            if (!empty($validated['password'])) {
                $updateData['password'] = Hash::make($validated['password']);
            }

            $user->update($updateData);

            // Sync roles
            $user->roles()->sync($validated['roles']);

            DB::commit();

            return redirect()->route('admin.users.index')
                           ->with('success', 'Pengguna berhasil diperbarui');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withInput()->with('error', 'Gagal memperbarui pengguna: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified user
     */
    public function destroy(User $user)
    {
        // Prevent deleting own account
        if ($user->id === auth()->id()) {
            return back()->with('error', 'Tidak dapat menghapus akun sendiri');
        }

        DB::beginTransaction();
        try {
            $user->roles()->detach();
            $user->delete();

            DB::commit();

            return redirect()->route('admin.users.index')
                           ->with('success', 'Pengguna berhasil dihapus');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Gagal menghapus pengguna: ' . $e->getMessage());
        }
    }

    /**
     * Display roles and permissions
     */
    public function rolesAndPermissions()
    {
        $roles = Role::withCount(['users', 'permissions'])->get();
        $permissions = Permission::all();

        return view('admin.users.roles', compact('roles', 'permissions'));
    }

    /**
     * Store new role
     */
    public function storeRole(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:roles,name',
            'display_name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Role::create($validated);

        return back()->with('success', 'Role berhasil ditambahkan');
    }

    /**
     * Update role
     */
    public function updateRole(Request $request, Role $role)
    {
        $validated = $request->validate([
            'display_name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $role->update($validated);

        return back()->with('success', 'Role berhasil diperbarui');
    }

    /**
     * Delete role
     */
    public function destroyRole(Role $role)
    {
        if ($role->users()->count() > 0) {
            return back()->with('error', 'Role tidak dapat dihapus karena masih memiliki pengguna');
        }

        $role->delete();

        return back()->with('success', 'Role berhasil dihapus');
    }

    /**
     * Attach permission to role
     */
    public function attachPermission(Request $request, Role $role)
    {
        $validated = $request->validate([
            'permission_id' => 'required|exists:permissions,id',
        ]);

        $role->permissions()->syncWithoutDetaching([$validated['permission_id']]);

        return back()->with('success', 'Permission berhasil ditambahkan ke role');
    }

    /**
     * Detach permission from role
     */
    public function detachPermission(Role $role, Permission $permission)
    {
        $role->permissions()->detach($permission->id);

        return back()->with('success', 'Permission berhasil dihapus dari role');
    }
}
