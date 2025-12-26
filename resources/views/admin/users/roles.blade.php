<x-layouts.admin.app>
    <x-slot name="title">Role & Permission</x-slot>

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="mb-1" style="font-size: 1.75rem; font-weight: 600;">Manajemen Role & Permission</h2>
            <p class="text-secondary-light mb-0">Kelola hak akses dan permission untuk setiap role</p>
        </div>
    </div>

    <!-- Role Cards -->
    <div class="row g-3 mb-4">
        @php
            $roleConfig = [
                'admin_lph' => ['label' => 'Admin LPH', 'icon' => 'ti-shield-star', 'desc' => 'Full access ke semua fitur sistem'],
                'manajer_teknis' => ['label' => 'Manajer Teknis', 'icon' => 'ti-settings', 'desc' => 'Mengelola operasional teknis dan audit'],
                'auditor_halal' => ['label' => 'Auditor Halal', 'icon' => 'ti-shield-check', 'desc' => 'Melakukan audit dan verifikasi halal'],
                'pelaku_usaha' => ['label' => 'Pelaku Usaha', 'icon' => 'ti-building', 'desc' => 'Mengajukan permohonan sertifikasi'],
                'penyedia_halal' => ['label' => 'Penyedia Halal', 'icon' => 'ti-shopping-bag', 'desc' => 'Menyediakan bahan baku halal']
            ];
        @endphp

        @foreach($roles as $role)
            @php
                $config = $roleConfig[$role->name] ?? ['label' => $role->display_name, 'icon' => 'ti-user', 'desc' => $role->description ?? ''];
            @endphp
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card-custom h-100">
                    <div class="d-flex align-items-start mb-3">
                        <div style="width: 48px; height: 48px; background-color: var(--neutral-100); border-radius: 10px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <i class="ti {{ $config['icon'] }}" style="font-size: 1.5rem; color: var(--neutral-600);"></i>
                        </div>
                        <div class="ms-3 flex-grow-1">
                            <h5 class="mb-1" style="font-weight: 600; font-size: 1.1rem;">{{ $config['label'] }}</h5>
                            <p class="text-secondary-light mb-0" style="font-size: 0.875rem;">{{ $config['desc'] }}</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center pt-3 border-top">
                        <span class="text-secondary-light" style="font-size: 0.875rem;">
                            <i class="ti ti-users me-1"></i>{{ $role->users_count ?? 0 }} Pengguna
                        </span>
                        <button class="btn btn-sm btn-outline-primary" style="min-height: 34px;">
                            <i class="ti ti-edit me-1"></i>Edit
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Permission Matrix -->
    <div class="card-custom">
        <h5 class="mb-3" style="font-weight: 600;">
            <i class="ti ti-lock-check me-2"></i>Permission Matrix
        </h5>
        <div class="table-responsive">
            <table class="table table-bordered mb-0" style="border-color: var(--neutral-200);">
                <thead style="background-color: var(--neutral-50);">
                    <tr>
                        <th style="padding: 0.875rem; font-weight: 600; border-color: var(--neutral-200);">Module / Permission</th>
                        <th class="text-center" style="padding: 0.875rem; font-weight: 600; border-color: var(--neutral-200);">
                            <i class="ti ti-shield-star d-block mb-1" style="font-size: 1.25rem;"></i>
                            <small>Admin LPH</small>
                        </th>
                        <th class="text-center" style="padding: 0.875rem; font-weight: 600; border-color: var(--neutral-200);">
                            <i class="ti ti-settings d-block mb-1" style="font-size: 1.25rem;"></i>
                            <small>Manajer</small>
                        </th>
                        <th class="text-center" style="padding: 0.875rem; font-weight: 600; border-color: var(--neutral-200);">
                            <i class="ti ti-shield-check d-block mb-1" style="font-size: 1.25rem;"></i>
                            <small>Auditor</small>
                        </th>
                        <th class="text-center" style="padding: 0.875rem; font-weight: 600; border-color: var(--neutral-200);">
                            <i class="ti ti-building d-block mb-1" style="font-size: 1.25rem;"></i>
                            <small>Pelaku Usaha</small>
                        </th>
                        <th class="text-center" style="padding: 0.875rem; font-weight: 600; border-color: var(--neutral-200);">
                            <i class="ti ti-shopping-bag d-block mb-1" style="font-size: 1.25rem;"></i>
                            <small>Penyedia</small>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $permissions = [
                            ['name' => 'View Submissions', 'icon' => 'ti-eye', 'admin' => true, 'manajer' => true, 'auditor' => true, 'pelaku' => true, 'penyedia' => false],
                            ['name' => 'Create Submissions', 'icon' => 'ti-file-plus', 'admin' => true, 'manajer' => true, 'auditor' => false, 'pelaku' => true, 'penyedia' => false],
                            ['name' => 'Manage Audits', 'icon' => 'ti-clipboard-check', 'admin' => true, 'manajer' => true, 'auditor' => true, 'pelaku' => false, 'penyedia' => false],
                            ['name' => 'Manage Users', 'icon' => 'ti-users', 'admin' => true, 'manajer' => false, 'auditor' => false, 'pelaku' => false, 'penyedia' => false],
                            ['name' => 'View Reports', 'icon' => 'ti-chart-bar', 'admin' => true, 'manajer' => true, 'auditor' => true, 'pelaku' => true, 'penyedia' => true],
                            ['name' => 'Manage Finance', 'icon' => 'ti-currency-dollar', 'admin' => true, 'manajer' => true, 'auditor' => false, 'pelaku' => false, 'penyedia' => false],
                        ];
                    @endphp
                    @foreach($permissions as $permission)
                    <tr>
                        <td style="padding: 0.875rem; font-weight: 500; border-color: var(--neutral-200);">
                            <i class="ti {{ $permission['icon'] }} me-2" style="color: var(--neutral-600);"></i>
                            {{ $permission['name'] }}
                        </td>
                        <td class="text-center" style="padding: 0.875rem; border-color: var(--neutral-200);">
                            @if($permission['admin'])
                                <i class="ti ti-check text-success" style="font-size: 1.25rem;"></i>
                            @else
                                <i class="ti ti-x text-danger" style="font-size: 1.25rem;"></i>
                            @endif
                        </td>
                        <td class="text-center" style="padding: 0.875rem; border-color: var(--neutral-200);">
                            @if($permission['manajer'])
                                <i class="ti ti-check text-success" style="font-size: 1.25rem;"></i>
                            @else
                                <i class="ti ti-x text-danger" style="font-size: 1.25rem;"></i>
                            @endif
                        </td>
                        <td class="text-center" style="padding: 0.875rem; border-color: var(--neutral-200);">
                            @if($permission['auditor'])
                                <i class="ti ti-check text-success" style="font-size: 1.25rem;"></i>
                            @else
                                <i class="ti ti-x text-danger" style="font-size: 1.25rem;"></i>
                            @endif
                        </td>
                        <td class="text-center" style="padding: 0.875rem; border-color: var(--neutral-200);">
                            @if($permission['pelaku'])
                                <i class="ti ti-check text-success" style="font-size: 1.25rem;"></i>
                            @else
                                <i class="ti ti-x text-danger" style="font-size: 1.25rem;"></i>
                            @endif
                        </td>
                        <td class="text-center" style="padding: 0.875rem; border-color: var(--neutral-200);">
                            @if($permission['penyedia'])
                                <i class="ti ti-check text-success" style="font-size: 1.25rem;"></i>
                            @else
                                <i class="ti ti-x text-danger" style="font-size: 1.25rem;"></i>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @push('styles')
    <style>
        .card-custom {
            background: white;
            border: 1px solid var(--neutral-200);
            border-radius: 8px;
            padding: 1.25rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
            transition: all 0.2s ease;
        }

        .card-custom:hover {
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }

        .table {
            margin-bottom: 0;
        }

        .table thead th {
            vertical-align: middle;
        }

        .table tbody tr:hover {
            background-color: var(--neutral-25);
        }
    </style>
    @endpush
</x-layouts.admin.app>
