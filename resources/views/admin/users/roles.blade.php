@extends('layouts.admin')

@section('title', 'Role & Permission')

@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <div class="page-pretitle">Manajemen Sistem</div>
                <h2 class="page-title">Role & Permission</h2>
            </div>
        </div>
    </div>
</div>

<div class="page-body">
    <div class="container-xl">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <!-- Role Cards -->
        <div class="row row-cards mb-3">
            @php
                $roleConfig = [
                    'admin_lph' => [
                        'label' => 'Admin LPH',
                        'icon' => 'shield-star',
                        'color' => 'red',
                        'desc' => 'Full access ke semua fitur sistem'
                    ],
                    'manajer_teknis' => [
                        'label' => 'Manajer Teknis',
                        'icon' => 'settings',
                        'color' => 'yellow',
                        'desc' => 'Mengelola operasional teknis dan audit'
                    ],
                    'auditor_halal' => [
                        'label' => 'Auditor Halal',
                        'icon' => 'shield-check',
                        'color' => 'green',
                        'desc' => 'Melakukan audit dan verifikasi halal'
                    ],
                    'pendamping_halal_reguler' => [
                        'label' => 'PHR',
                        'icon' => 'user-star',
                        'color' => 'info',
                        'desc' => 'Pendamping Halal Reguler - Recruitment & Referral'
                    ],
                    'pelaku_usaha' => [
                        'label' => 'Pelaku Usaha',
                        'icon' => 'building',
                        'color' => 'blue',
                        'desc' => 'Mengajukan permohonan sertifikasi'
                    ],
                    'penyedia_halal' => [
                        'label' => 'Penyedia Halal',
                        'icon' => 'shopping-bag',
                        'color' => 'cyan',
                        'desc' => 'Menyediakan bahan baku halal'
                    ]
                ];
            @endphp

            @foreach($roles ?? [] as $role)
                @php
                    $config = $roleConfig[$role->name] ?? [
                        'label' => $role->display_name ?? ucwords(str_replace('_', ' ', $role->name)),
                        'icon' => 'user',
                        'color' => 'secondary',
                        'desc' => $role->description ?? ''
                    ];
                @endphp
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="me-3">
                                    <i class="ti ti-{{ $config['icon'] }} icon bg-{{ $config['color'] }}-lt p-2 rounded-circle" style="font-size: 1.5rem;"></i>
                                </div>
                                <div class="flex-fill">
                                    <h3 class="card-title mb-1">{{ $config['label'] }}</h3>
                                    <div class="text-secondary small">{{ $config['desc'] }}</div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center pt-3 border-top">
                                <span class="text-secondary">
                                    <i class="ti ti-users me-1"></i>{{ $role->users_count ?? 0 }} pengguna
                                </span>
                                <span class="badge bg-{{ $config['color'] }}-lt">{{ ucfirst($role->name) }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Permission Matrix -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="ti ti-lock-check me-2"></i>Permission Matrix
                </h3>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered card-table">
                    <thead>
                        <tr>
                            <th>Module / Permission</th>
                            <th class="text-center">
                                <i class="ti ti-shield-star d-block mb-1"></i>
                                <small>Admin LPH</small>
                            </th>
                            <th class="text-center">
                                <i class="ti ti-settings d-block mb-1"></i>
                                <small>Manajer</small>
                            </th>
                            <th class="text-center">
                                <i class="ti ti-shield-check d-block mb-1"></i>
                                <small>Auditor</small>
                            </th>
                            <th class="text-center">
                                <i class="ti ti-user-star d-block mb-1"></i>
                                <small>PHR</small>
                            </th>
                            <th class="text-center">
                                <i class="ti ti-building d-block mb-1"></i>
                                <small>Pelaku Usaha</small>
                            </th>
                            <th class="text-center">
                                <i class="ti ti-shopping-bag d-block mb-1"></i>
                                <small>Penyedia</small>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $permissions = [
                                // Dashboard & Reports
                                ['module' => 'Dashboard & Laporan', 'permissions' => [
                                    ['name' => 'View Dashboard', 'icon' => 'home', 'admin' => true, 'manajer' => true, 'auditor' => true, 'phr' => true, 'pelaku' => true, 'penyedia' => true],
                                    ['name' => 'View Reports', 'icon' => 'chart-bar', 'admin' => true, 'manajer' => true, 'auditor' => true, 'phr' => true, 'pelaku' => true, 'penyedia' => true],
                                    ['name' => 'Export Reports', 'icon' => 'download', 'admin' => true, 'manajer' => true, 'auditor' => false, 'phr' => false, 'pelaku' => false, 'penyedia' => false],
                                ]],

                                // Permohonan (Submissions)
                                ['module' => 'Permohonan Sertifikasi', 'permissions' => [
                                    ['name' => 'View Submissions', 'icon' => 'eye', 'admin' => true, 'manajer' => true, 'auditor' => true, 'phr' => true, 'pelaku' => true, 'penyedia' => false],
                                    ['name' => 'Create Submissions', 'icon' => 'file-plus', 'admin' => true, 'manajer' => true, 'auditor' => false, 'phr' => true, 'pelaku' => true, 'penyedia' => false],
                                    ['name' => 'Edit Submissions', 'icon' => 'edit', 'admin' => true, 'manajer' => true, 'auditor' => false, 'phr' => false, 'pelaku' => true, 'penyedia' => false],
                                    ['name' => 'Approve/Reject Submissions', 'icon' => 'check', 'admin' => true, 'manajer' => true, 'auditor' => false, 'phr' => false, 'pelaku' => false, 'penyedia' => false],
                                ]],

                                // Audit
                                ['module' => 'Audit Halal', 'permissions' => [
                                    ['name' => 'View Audits', 'icon' => 'clipboard-check', 'admin' => true, 'manajer' => true, 'auditor' => true, 'phr' => false, 'pelaku' => true, 'penyedia' => false],
                                    ['name' => 'Manage Audits', 'icon' => 'clipboard-list', 'admin' => true, 'manajer' => true, 'auditor' => false, 'phr' => false, 'pelaku' => false, 'penyedia' => false],
                                    ['name' => 'Conduct Audits', 'icon' => 'clipboard-check', 'admin' => true, 'manajer' => false, 'auditor' => true, 'phr' => false, 'pelaku' => false, 'penyedia' => false],
                                    ['name' => 'Create Audit Reports', 'icon' => 'file-report', 'admin' => true, 'manajer' => false, 'auditor' => true, 'phr' => false, 'pelaku' => false, 'penyedia' => false],
                                ]],

                                // Keuangan (Finance)
                                ['module' => 'Keuangan', 'permissions' => [
                                    ['name' => 'View Invoices', 'icon' => 'file-invoice', 'admin' => true, 'manajer' => true, 'auditor' => false, 'phr' => false, 'pelaku' => true, 'penyedia' => false],
                                    ['name' => 'Create Invoices', 'icon' => 'file-plus', 'admin' => true, 'manajer' => false, 'auditor' => false, 'phr' => false, 'pelaku' => false, 'penyedia' => false],
                                    ['name' => 'Manage Payments', 'icon' => 'cash', 'admin' => true, 'manajer' => true, 'auditor' => false, 'phr' => false, 'pelaku' => false, 'penyedia' => false],
                                    ['name' => 'Approve Auditor Fees', 'icon' => 'currency-dollar', 'admin' => true, 'manajer' => true, 'auditor' => false, 'phr' => false, 'pelaku' => false, 'penyedia' => false],
                                    ['name' => 'View Auditor Fees', 'icon' => 'eye', 'admin' => true, 'manajer' => true, 'auditor' => true, 'phr' => false, 'pelaku' => false, 'penyedia' => false],
                                ]],

                                // PHR Management
                                ['module' => 'PHR Management', 'permissions' => [
                                    ['name' => 'View PHR List', 'icon' => 'users', 'admin' => true, 'manajer' => false, 'auditor' => false, 'phr' => false, 'pelaku' => false, 'penyedia' => false],
                                    ['name' => 'Manage PHR', 'icon' => 'user-edit', 'admin' => true, 'manajer' => false, 'auditor' => false, 'phr' => false, 'pelaku' => false, 'penyedia' => false],
                                    ['name' => 'Approve PHR Promotions', 'icon' => 'star', 'admin' => true, 'manajer' => false, 'auditor' => false, 'phr' => false, 'pelaku' => false, 'penyedia' => false],
                                    ['name' => 'Manage PHR Fees', 'icon' => 'cash', 'admin' => true, 'manajer' => false, 'auditor' => false, 'phr' => false, 'pelaku' => false, 'penyedia' => false],
                                    ['name' => 'Recruit PHR', 'icon' => 'user-plus', 'admin' => false, 'manajer' => false, 'auditor' => false, 'phr' => true, 'pelaku' => false, 'penyedia' => false],
                                    ['name' => 'View Own Downlines', 'icon' => 'sitemap', 'admin' => false, 'manajer' => false, 'auditor' => false, 'phr' => true, 'pelaku' => false, 'penyedia' => false],
                                    ['name' => 'View Own Fees', 'icon' => 'eye', 'admin' => false, 'manajer' => false, 'auditor' => false, 'phr' => true, 'pelaku' => false, 'penyedia' => false],
                                ]],

                                // User Management
                                ['module' => 'User Management', 'permissions' => [
                                    ['name' => 'View Users', 'icon' => 'users', 'admin' => true, 'manajer' => false, 'auditor' => false, 'phr' => false, 'pelaku' => false, 'penyedia' => false],
                                    ['name' => 'Create Users', 'icon' => 'user-plus', 'admin' => true, 'manajer' => false, 'auditor' => false, 'phr' => false, 'pelaku' => false, 'penyedia' => false],
                                    ['name' => 'Edit Users', 'icon' => 'user-edit', 'admin' => true, 'manajer' => false, 'auditor' => false, 'phr' => false, 'pelaku' => false, 'penyedia' => false],
                                    ['name' => 'Delete Users', 'icon' => 'user-x', 'admin' => true, 'manajer' => false, 'auditor' => false, 'phr' => false, 'pelaku' => false, 'penyedia' => false],
                                    ['name' => 'Manage Roles', 'icon' => 'shield', 'admin' => true, 'manajer' => false, 'auditor' => false, 'phr' => false, 'pelaku' => false, 'penyedia' => false],
                                ]],

                                // Settings
                                ['module' => 'System Settings', 'permissions' => [
                                    ['name' => 'View Settings', 'icon' => 'settings', 'admin' => true, 'manajer' => false, 'auditor' => false, 'phr' => false, 'pelaku' => false, 'penyedia' => false],
                                    ['name' => 'Update Settings', 'icon' => 'settings-automation', 'admin' => true, 'manajer' => false, 'auditor' => false, 'phr' => false, 'pelaku' => false, 'penyedia' => false],
                                    ['name' => 'Manage Master Data', 'icon' => 'database', 'admin' => true, 'manajer' => false, 'auditor' => false, 'phr' => false, 'pelaku' => false, 'penyedia' => false],
                                ]],
                            ];
                        @endphp

                        @foreach($permissions as $group)
                            <tr class="table-active">
                                <td colspan="7" class="font-weight-bold">
                                    <i class="ti ti-folder me-2"></i>{{ $group['module'] }}
                                </td>
                            </tr>
                            @foreach($group['permissions'] as $permission)
                            <tr>
                                <td>
                                    <i class="ti ti-{{ $permission['icon'] }} me-2 text-secondary"></i>
                                    {{ $permission['name'] }}
                                </td>
                                <td class="text-center">
                                    @if($permission['admin'])
                                        <i class="ti ti-check text-success" style="font-size: 1.25rem;"></i>
                                    @else
                                        <i class="ti ti-x text-danger opacity-50"></i>
                                    @endif
                                </td>
                                <td class="text-center">
                                    @if($permission['manajer'])
                                        <i class="ti ti-check text-success" style="font-size: 1.25rem;"></i>
                                    @else
                                        <i class="ti ti-x text-danger opacity-50"></i>
                                    @endif
                                </td>
                                <td class="text-center">
                                    @if($permission['auditor'])
                                        <i class="ti ti-check text-success" style="font-size: 1.25rem;"></i>
                                    @else
                                        <i class="ti ti-x text-danger opacity-50"></i>
                                    @endif
                                </td>
                                <td class="text-center">
                                    @if($permission['phr'])
                                        <i class="ti ti-check text-success" style="font-size: 1.25rem;"></i>
                                    @else
                                        <i class="ti ti-x text-danger opacity-50"></i>
                                    @endif
                                </td>
                                <td class="text-center">
                                    @if($permission['pelaku'])
                                        <i class="ti ti-check text-success" style="font-size: 1.25rem;"></i>
                                    @else
                                        <i class="ti ti-x text-danger opacity-50"></i>
                                    @endif
                                </td>
                                <td class="text-center">
                                    @if($permission['penyedia'])
                                        <i class="ti ti-check text-success" style="font-size: 1.25rem;"></i>
                                    @else
                                        <i class="ti ti-x text-danger opacity-50"></i>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Legend -->
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Legend</h3>
                        <div class="row">
                            <div class="col-6">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="ti ti-check text-success me-2"></i>
                                    <span>Memiliki akses</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="ti ti-x text-danger opacity-50 me-2"></i>
                                    <span>Tidak ada akses</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Updated Rules</h3>
                        <ul class="list-unstyled mb-0">
                            <li><i class="ti ti-check text-success me-2"></i>PHR role dengan 7 permission khusus</li>
                            <li><i class="ti ti-check text-success me-2"></i>PHR Management module (4 permissions)</li>
                            <li><i class="ti ti-check text-success me-2"></i>PHR dapat recruit & view fees sendiri</li>
                            <li><i class="ti ti-check text-success me-2"></i>Admin full control atas PHR system</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
