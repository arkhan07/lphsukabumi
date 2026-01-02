@extends('layouts.admin')

@section('title', 'Manajemen Pengguna')

@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <div class="page-pretitle">Manajemen Sistem</div>
                <h2 class="page-title">Daftar Pengguna</h2>
            </div>
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    <a href="{{ route('admin.users.roles') }}" class="btn btn-outline-primary d-none d-sm-inline-block">
                        <i class="ti ti-shield icon me-2"></i>
                        Kelola Role & Permission
                    </a>
                    <a href="{{ route('admin.users.create') }}" class="btn btn-primary d-none d-sm-inline-block">
                        <i class="ti ti-plus icon me-2"></i>
                        Tambah Pengguna
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-body">
    <div class="container-xl">
        <!-- Statistics Cards -->
        <div class="row row-cards mb-3">
            <div class="col-sm-6 col-lg">
                <div class="card">
                    <div class="card-body">
                        <div class="subheader">Total Pengguna</div>
                        <div class="h1 mb-0 mt-1">{{ $stats['total'] ?? 0 }}</div>
                        <div class="text-secondary small mt-1">Semua pengguna</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg">
                <div class="card">
                    <div class="card-body">
                        <div class="subheader">Admin LPH</div>
                        <div class="h1 mb-0 mt-1">{{ $stats['admin_lph'] ?? 0 }}</div>
                        <span class="badge bg-red-lt mt-1">Administrator</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg">
                <div class="card">
                    <div class="card-body">
                        <div class="subheader">Auditor Halal</div>
                        <div class="h1 mb-0 mt-1">{{ $stats['auditor'] ?? 0 }}</div>
                        <span class="badge bg-green-lt mt-1">Auditor</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg">
                <div class="card">
                    <div class="card-body">
                        <div class="subheader">PHR</div>
                        <div class="h1 mb-0 mt-1">{{ $stats['phr'] ?? 0 }}</div>
                        <span class="badge bg-info-lt mt-1">Pendamping</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg">
                <div class="card">
                    <div class="card-body">
                        <div class="subheader">Pelaku Usaha</div>
                        <div class="h1 mb-0 mt-1">{{ $stats['pelaku_usaha'] ?? 0 }}</div>
                        <span class="badge bg-blue-lt mt-1">PU</span>
                    </div>
                </div>
            </div>
        </div>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <!-- Users Table -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar Pengguna</h3>
            </div>
            <div class="card-body border-bottom py-3">
                <div class="row g-2">
                    <div class="col-md-6">
                        <div class="input-icon">
                            <span class="input-icon-addon">
                                <i class="ti ti-search"></i>
                            </span>
                            <input type="text" id="searchInput" class="form-control" placeholder="Cari nama, email, atau telepon...">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select" id="roleFilter">
                            <option value="">Semua Role</option>
                            <option value="admin_lph">Admin LPH</option>
                            <option value="manajer_teknis">Manajer Teknis</option>
                            <option value="auditor_halal">Auditor Halal</option>
                            <option value="pendamping_halal_reguler">PHR</option>
                            <option value="pelaku_usaha">Pelaku Usaha</option>
                            <option value="penyedia_halal">Penyedia Halal</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select" id="statusFilter">
                            <option value="">Semua Status</option>
                            <option value="active">Aktif</option>
                            <option value="inactive">Nonaktif</option>
                            <option value="pending">Pending</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-vcenter card-table" id="usersTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Pengguna</th>
                            <th>Email</th>
                            <th>Telepon</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Terdaftar</th>
                            <th class="w-1"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($users ?? [] as $index => $user)
                        <tr>
                            <td><span class="text-secondary">{{ $index + 1 }}</span></td>
                            <td>
                                <div class="d-flex py-1 align-items-center">
                                    <span class="avatar avatar-sm me-2" style="background-image: url(https://ui-avatars.com/api/?name={{ urlencode($user->name) }}&background=random)"></span>
                                    <div class="flex-fill">
                                        <div class="font-weight-medium">{{ $user->name }}</div>
                                        <div class="text-secondary small">ID: {{ $user->id }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-secondary">{{ $user->email }}</td>
                            <td class="text-secondary">{{ $user->phone ?? '-' }}</td>
                            <td>
                                @if($user->roles && $user->roles->count() > 0)
                                    @foreach($user->roles as $role)
                                        <span class="badge
                                            @if($role->name === 'admin_lph') bg-red-lt
                                            @elseif($role->name === 'auditor_halal') bg-green-lt
                                            @elseif($role->name === 'manajer_teknis') bg-yellow-lt
                                            @elseif($role->name === 'pendamping_halal_reguler') bg-info-lt
                                            @elseif($role->name === 'pelaku_usaha') bg-blue-lt
                                            @else bg-cyan-lt
                                            @endif
                                        ">{{ ucwords(str_replace('_', ' ', $role->name)) }}</span>
                                    @endforeach
                                @else
                                    <span class="badge bg-secondary-lt">No Role</span>
                                @endif
                            </td>
                            <td>
                                @if($user->status === 'active')
                                    <span class="badge bg-success-lt">Aktif</span>
                                @elseif($user->status === 'inactive')
                                    <span class="badge bg-danger-lt">Nonaktif</span>
                                @else
                                    <span class="badge bg-warning-lt">Pending</span>
                                @endif
                            </td>
                            <td class="text-secondary">{{ $user->created_at ? $user->created_at->format('d M Y') : '-' }}</td>
                            <td>
                                <div class="btn-list flex-nowrap">
                                    <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-sm btn-icon btn-ghost-primary" title="Edit">
                                        <i class="ti ti-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pengguna {{ $user->name }}?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-icon btn-ghost-danger" title="Hapus">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8" class="text-center text-secondary py-5">
                                <i class="ti ti-users icon mb-3" style="font-size: 3rem; opacity: 0.3;"></i>
                                <div>Belum ada pengguna</div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            @if($users && $users->hasPages())
            <div class="card-footer">
                {{ $users->links() }}
            </div>
            @endif
        </div>
    </div>
</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const roleFilter = document.getElementById('roleFilter');
    const statusFilter = document.getElementById('statusFilter');
    const table = document.getElementById('usersTable');
    const rows = table.getElementsByTagName('tbody')[0].getElementsByTagName('tr');

    function filterTable() {
        const searchTerm = searchInput.value.toLowerCase();
        const roleValue = roleFilter.value.toLowerCase();
        const statusValue = statusFilter.value.toLowerCase();

        for (let row of rows) {
            if (row.children.length === 1) continue; // Skip empty row

            const name = row.children[1].textContent.toLowerCase();
            const email = row.children[2].textContent.toLowerCase();
            const phone = row.children[3].textContent.toLowerCase();
            const role = row.children[4].textContent.toLowerCase();
            const status = row.children[5].textContent.toLowerCase();

            const matchesSearch = !searchTerm ||
                name.includes(searchTerm) ||
                email.includes(searchTerm) ||
                phone.includes(searchTerm);

            const matchesRole = !roleValue || role.includes(roleValue.replace('_', ' '));
            const matchesStatus = !statusValue || status.includes(statusValue);

            row.style.display = (matchesSearch && matchesRole && matchesStatus) ? '' : 'none';
        }
    }

    searchInput.addEventListener('keyup', filterTable);
    roleFilter.addEventListener('change', filterTable);
    statusFilter.addEventListener('change', filterTable);
});
</script>
@endpush
@endsection
