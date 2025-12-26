<x-layouts.admin.app>
    <x-slot name="title">Role & Permission</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Manajemen Role & Permission</h2>
            <p class="text-secondary-light mb-0">Kelola hak akses dan permission untuk setiap role</p>
        </div>
    </div>

    <!-- Role Overview Cards -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="row g-3">
                @php
                    $roleConfig = [
                        'admin_lph' => [
                            'icon' => 'ti-shield-star',
                            'color' => 'danger',
                            'badge' => 'Super Admin',
                            'description' => 'Full access ke semua fitur sistem'
                        ],
                        'manajer_teknis' => [
                            'icon' => 'ti-settings',
                            'color' => 'warning',
                            'badge' => 'Manager',
                            'description' => 'Mengelola operasional teknis dan audit'
                        ],
                        'auditor_halal' => [
                            'icon' => 'ti-shield-check',
                            'color' => 'success',
                            'badge' => 'Auditor',
                            'description' => 'Melakukan audit dan verifikasi halal'
                        ],
                        'pelaku_usaha' => [
                            'icon' => 'ti-building',
                            'color' => 'primary',
                            'badge' => 'Business',
                            'description' => 'Mengajukan permohonan sertifikasi'
                        ],
                        'penyedia_halal' => [
                            'icon' => 'ti-shopping-bag',
                            'color' => 'info',
                            'badge' => 'Provider',
                            'description' => 'Menyediakan bahan baku halal'
                        ]
                    ];
                @endphp

                @foreach($roles as $role)
                    @php
                        $config = $roleConfig[$role->name] ?? [
                            'icon' => 'ti-user',
                            'color' => 'secondary',
                            'badge' => 'User',
                            'description' => $role->description ?? 'Role pengguna'
                        ];
                    @endphp
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm border-0" style="border-radius: 12px; transition: all 0.3s;">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <div class="icon-wrapper d-flex align-items-center justify-content-center rounded-circle"
                                         style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--{{ $config['color'] }}-main), var(--{{ $config['color'] }}-600)); box-shadow: 0 4px 12px rgba(0,0,0,0.15);">
                                        <i class="ti {{ $config['icon'] }} text-white" style="font-size: 1.75rem;"></i>
                                    </div>
                                    <span class="badge rounded-pill" style="background-color: var(--{{ $config['color'] }}-main); padding: 0.5rem 1rem; font-size: 0.75rem; font-weight: 600;">
                                        {{ $config['badge'] }}
                                    </span>
                                </div>

                                <h5 class="card-title mb-2" style="font-weight: 700; color: var(--neutral-900);">
                                    {{ $role->display_name }}
                                </h5>

                                <p class="text-muted mb-3" style="font-size: 0.875rem; line-height: 1.5;">
                                    {{ $config['description'] }}
                                </p>

                                <div class="permissions-info mb-3 p-3 rounded" style="background-color: var(--neutral-50);">
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="ti ti-shield text-{{ $config['color'] }} me-2" style="font-size: 1.1rem;"></i>
                                        <small class="text-secondary fw-semibold">Permissions:</small>
                                    </div>
                                    <div class="d-flex flex-wrap gap-1">
                                        @if($role->name == 'admin_lph')
                                            <span class="badge bg-success-subtle text-success border border-success" style="font-size: 0.7rem; padding: 0.35rem 0.65rem;">
                                                <i class="ti ti-check me-1"></i>All Access
                                            </span>
                                        @else
                                            @php
                                                $permissionLabels = [
                                                    'manajer_teknis' => ['View Submissions', 'Manage Audits', 'View Reports'],
                                                    'auditor_halal' => ['View Audits', 'Create Reports', 'Upload Documents'],
                                                    'pelaku_usaha' => ['Create Submission', 'View Own Data', 'Upload Documents'],
                                                    'penyedia_halal' => ['Manage Products', 'View Certificates']
                                                ];
                                                $rolePermissions = $permissionLabels[$role->name] ?? [];
                                            @endphp
                                            @foreach($rolePermissions as $perm)
                                                <span class="badge bg-{{ $config['color'] }}-subtle text-{{ $config['color'] }} border border-{{ $config['color'] }}" style="font-size: 0.7rem; padding: 0.35rem 0.65rem;">
                                                    <i class="ti ti-check me-1"></i>{{ $perm }}
                                                </span>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between align-items-center pt-3 border-top">
                                    <div class="d-flex align-items-center">
                                        <i class="ti ti-users text-{{ $config['color'] }} me-2" style="font-size: 1.2rem;"></i>
                                        <span class="fw-bold" style="font-size: 1.1rem; color: var(--neutral-800);">
                                            {{ $role->users_count ?? 0 }}
                                        </span>
                                        <span class="text-muted ms-2" style="font-size: 0.85rem;">Pengguna</span>
                                    </div>
                                    <button class="btn btn-{{ $config['color'] }} btn-sm" style="padding: 0.5rem 1.25rem; border-radius: 8px; font-weight: 600;">
                                        <i class="ti ti-edit me-1"></i>Edit Role
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Permission Matrix -->
    <div class="card border-0 shadow-sm" style="border-radius: 12px;">
        <div class="card-header bg-white border-0 p-4">
            <div class="d-flex align-items-center">
                <i class="ti ti-lock-check text-primary me-3" style="font-size: 1.75rem;"></i>
                <div>
                    <h5 class="mb-1" style="font-weight: 700; color: var(--neutral-900);">Permission Matrix</h5>
                    <p class="mb-0 text-muted" style="font-size: 0.875rem;">Tabel lengkap hak akses untuk setiap role</p>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0" style="border-collapse: separate; border-spacing: 0;">
                    <thead style="background: linear-gradient(135deg, var(--primary-50), var(--primary-100));">
                        <tr>
                            <th class="border-0" style="padding: 1.25rem; font-weight: 700; color: var(--neutral-900); font-size: 0.95rem;">
                                <i class="ti ti-key me-2"></i>Module / Permission
                            </th>
                            <th class="border-0 text-center" style="padding: 1.25rem; font-weight: 700; color: var(--neutral-900); font-size: 0.875rem;">
                                <div class="d-flex flex-column align-items-center">
                                    <i class="ti ti-shield-star text-danger mb-1" style="font-size: 1.5rem;"></i>
                                    <span>Admin LPH</span>
                                </div>
                            </th>
                            <th class="border-0 text-center" style="padding: 1.25rem; font-weight: 700; color: var(--neutral-900); font-size: 0.875rem;">
                                <div class="d-flex flex-column align-items-center">
                                    <i class="ti ti-settings text-warning mb-1" style="font-size: 1.5rem;"></i>
                                    <span>Manajer</span>
                                </div>
                            </th>
                            <th class="border-0 text-center" style="padding: 1.25rem; font-weight: 700; color: var(--neutral-900); font-size: 0.875rem;">
                                <div class="d-flex flex-column align-items-center">
                                    <i class="ti ti-shield-check text-success mb-1" style="font-size: 1.5rem;"></i>
                                    <span>Auditor</span>
                                </div>
                            </th>
                            <th class="border-0 text-center" style="padding: 1.25rem; font-weight: 700; color: var(--neutral-900); font-size: 0.875rem;">
                                <div class="d-flex flex-column align-items-center">
                                    <i class="ti ti-building text-primary mb-1" style="font-size: 1.5rem;"></i>
                                    <span>Pelaku Usaha</span>
                                </div>
                            </th>
                            <th class="border-0 text-center" style="padding: 1.25rem; font-weight: 700; color: var(--neutral-900); font-size: 0.875rem;">
                                <div class="d-flex flex-column align-items-center">
                                    <i class="ti ti-shopping-bag text-info mb-1" style="font-size: 1.5rem;"></i>
                                    <span>Penyedia</span>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $permissions = [
                                ['name' => 'View Submissions', 'admin' => true, 'manajer' => true, 'auditor' => true, 'pelaku' => true, 'penyedia' => false, 'icon' => 'ti-eye'],
                                ['name' => 'Create Submissions', 'admin' => true, 'manajer' => true, 'auditor' => false, 'pelaku' => true, 'penyedia' => false, 'icon' => 'ti-file-plus'],
                                ['name' => 'Manage Audits', 'admin' => true, 'manajer' => true, 'auditor' => true, 'pelaku' => false, 'penyedia' => false, 'icon' => 'ti-clipboard-check'],
                                ['name' => 'Manage Users', 'admin' => true, 'manajer' => false, 'auditor' => false, 'pelaku' => false, 'penyedia' => false, 'icon' => 'ti-users'],
                                ['name' => 'View Reports', 'admin' => true, 'manajer' => true, 'auditor' => true, 'pelaku' => true, 'penyedia' => true, 'icon' => 'ti-chart-bar'],
                                ['name' => 'Manage Finance', 'admin' => true, 'manajer' => true, 'auditor' => false, 'pelaku' => false, 'penyedia' => false, 'icon' => 'ti-currency-dollar'],
                            ];
                        @endphp
                        @foreach($permissions as $index => $permission)
                            <tr style="background-color: {{ $index % 2 == 0 ? 'var(--neutral-25)' : '#ffffff' }};">
                                <td style="padding: 1.25rem; font-weight: 600; color: var(--neutral-800); font-size: 0.9rem;">
                                    <i class="ti {{ $permission['icon'] }} text-primary me-2" style="font-size: 1.2rem;"></i>
                                    {{ $permission['name'] }}
                                </td>
                                <td class="text-center" style="padding: 1.25rem;">
                                    @if($permission['admin'])
                                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 40px; height: 40px; background-color: var(--success-100);">
                                            <i class="ti ti-check text-success" style="font-size: 1.5rem; font-weight: bold;"></i>
                                        </div>
                                    @else
                                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 40px; height: 40px; background-color: var(--danger-100);">
                                            <i class="ti ti-x text-danger" style="font-size: 1.5rem; font-weight: bold;"></i>
                                        </div>
                                    @endif
                                </td>
                                <td class="text-center" style="padding: 1.25rem;">
                                    @if($permission['manajer'])
                                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 40px; height: 40px; background-color: var(--success-100);">
                                            <i class="ti ti-check text-success" style="font-size: 1.5rem; font-weight: bold;"></i>
                                        </div>
                                    @else
                                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 40px; height: 40px; background-color: var(--danger-100);">
                                            <i class="ti ti-x text-danger" style="font-size: 1.5rem; font-weight: bold;"></i>
                                        </div>
                                    @endif
                                </td>
                                <td class="text-center" style="padding: 1.25rem;">
                                    @if($permission['auditor'])
                                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 40px; height: 40px; background-color: var(--success-100);">
                                            <i class="ti ti-check text-success" style="font-size: 1.5rem; font-weight: bold;"></i>
                                        </div>
                                    @else
                                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 40px; height: 40px; background-color: var(--danger-100);">
                                            <i class="ti ti-x text-danger" style="font-size: 1.5rem; font-weight: bold;"></i>
                                        </div>
                                    @endif
                                </td>
                                <td class="text-center" style="padding: 1.25rem;">
                                    @if($permission['pelaku'])
                                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 40px; height: 40px; background-color: var(--success-100);">
                                            <i class="ti ti-check text-success" style="font-size: 1.5rem; font-weight: bold;"></i>
                                        </div>
                                    @else
                                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 40px; height: 40px; background-color: var(--danger-100);">
                                            <i class="ti ti-x text-danger" style="font-size: 1.5rem; font-weight: bold;"></i>
                                        </div>
                                    @endif
                                </td>
                                <td class="text-center" style="padding: 1.25rem;">
                                    @if($permission['penyedia'])
                                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 40px; height: 40px; background-color: var(--success-100);">
                                            <i class="ti ti-check text-success" style="font-size: 1.5rem; font-weight: bold;"></i>
                                        </div>
                                    @else
                                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 40px; height: 40px; background-color: var(--danger-100);">
                                            <i class="ti ti-x text-danger" style="font-size: 1.5rem; font-weight: bold;"></i>
                                        </div>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @push('styles')
    <style>
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12) !important;
        }

        .table tbody tr {
            transition: all 0.2s ease;
        }

        .table tbody tr:hover {
            background-color: var(--primary-50) !important;
            transform: scale(1.01);
        }

        .badge {
            letter-spacing: 0.5px;
        }

        .icon-wrapper {
            transition: all 0.3s ease;
        }

        .card:hover .icon-wrapper {
            transform: rotate(10deg) scale(1.1);
        }
    </style>
    @endpush
</x-layouts.admin.app>
