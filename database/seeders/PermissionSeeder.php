<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define all permissions by module
        $permissions = [
            // Dashboard Permissions
            ['name' => 'View Dashboard', 'slug' => 'dashboard.view', 'module' => 'Dashboard'],
            ['name' => 'View Statistics', 'slug' => 'dashboard.statistics', 'module' => 'Dashboard'],

            // Pengajuan (Submission) Permissions
            ['name' => 'View Pengajuan', 'slug' => 'pengajuan.view', 'module' => 'Pengajuan'],
            ['name' => 'Create Pengajuan', 'slug' => 'pengajuan.create', 'module' => 'Pengajuan'],
            ['name' => 'Edit Pengajuan', 'slug' => 'pengajuan.edit', 'module' => 'Pengajuan'],
            ['name' => 'Delete Pengajuan', 'slug' => 'pengajuan.delete', 'module' => 'Pengajuan'],
            ['name' => 'Submit Pengajuan', 'slug' => 'pengajuan.submit', 'module' => 'Pengajuan'],
            ['name' => 'Duplicate Pengajuan', 'slug' => 'pengajuan.duplicate', 'module' => 'Pengajuan'],

            // Document Management Permissions
            ['name' => 'View Documents', 'slug' => 'dokumen.view', 'module' => 'Dokumen'],
            ['name' => 'Upload Documents', 'slug' => 'dokumen.upload', 'module' => 'Dokumen'],
            ['name' => 'Download Documents', 'slug' => 'dokumen.download', 'module' => 'Dokumen'],
            ['name' => 'Delete Documents', 'slug' => 'dokumen.delete', 'module' => 'Dokumen'],
            ['name' => 'Verify Documents', 'slug' => 'dokumen.verify', 'module' => 'Dokumen'],
            ['name' => 'Lock Documents', 'slug' => 'dokumen.lock', 'module' => 'Dokumen'],
            ['name' => 'Unlock Documents', 'slug' => 'dokumen.unlock', 'module' => 'Dokumen'],

            // Verifikasi Penyedia Halal Permissions
            ['name' => 'View Verifikasi', 'slug' => 'verifikasi.view', 'module' => 'Verifikasi'],
            ['name' => 'Create Verifikasi', 'slug' => 'verifikasi.create', 'module' => 'Verifikasi'],
            ['name' => 'Edit Verifikasi', 'slug' => 'verifikasi.edit', 'module' => 'Verifikasi'],
            ['name' => 'Submit Verifikasi', 'slug' => 'verifikasi.submit', 'module' => 'Verifikasi'],
            ['name' => 'Lock Verifikasi', 'slug' => 'verifikasi.lock', 'module' => 'Verifikasi'],
            ['name' => 'Unlock Verifikasi', 'slug' => 'verifikasi.unlock', 'module' => 'Verifikasi'],
            ['name' => 'Request Revision', 'slug' => 'verifikasi.request_revision', 'module' => 'Verifikasi'],

            // Penugasan & Jadwal Audit Permissions
            ['name' => 'View Penugasan', 'slug' => 'penugasan.view', 'module' => 'Penugasan'],
            ['name' => 'Create Penugasan', 'slug' => 'penugasan.create', 'module' => 'Penugasan'],
            ['name' => 'Edit Penugasan', 'slug' => 'penugasan.edit', 'module' => 'Penugasan'],
            ['name' => 'Assign Auditor', 'slug' => 'penugasan.assign', 'module' => 'Penugasan'],
            ['name' => 'Lock Penugasan', 'slug' => 'penugasan.lock', 'module' => 'Penugasan'],
            ['name' => 'Unlock Penugasan', 'slug' => 'penugasan.unlock', 'module' => 'Penugasan'],
            ['name' => 'View Jadwal', 'slug' => 'jadwal.view', 'module' => 'Jadwal'],
            ['name' => 'Create Jadwal', 'slug' => 'jadwal.create', 'module' => 'Jadwal'],
            ['name' => 'Edit Jadwal', 'slug' => 'jadwal.edit', 'module' => 'Jadwal'],
            ['name' => 'Confirm Jadwal', 'slug' => 'jadwal.confirm', 'module' => 'Jadwal'],

            // Audit Eksternal Permissions
            ['name' => 'View Audit', 'slug' => 'audit.view', 'module' => 'Audit'],
            ['name' => 'Create Audit', 'slug' => 'audit.create', 'module' => 'Audit'],
            ['name' => 'Edit Audit', 'slug' => 'audit.edit', 'module' => 'Audit'],
            ['name' => 'Submit Audit', 'slug' => 'audit.submit', 'module' => 'Audit'],
            ['name' => 'View Temuan', 'slug' => 'audit.view_temuan', 'module' => 'Audit'],
            ['name' => 'Create Temuan', 'slug' => 'audit.create_temuan', 'module' => 'Audit'],
            ['name' => 'Upload Bukti Audit', 'slug' => 'audit.upload_bukti', 'module' => 'Audit'],

            // Laporan Audit Permissions
            ['name' => 'View Laporan', 'slug' => 'laporan.view', 'module' => 'Laporan'],
            ['name' => 'Create Laporan', 'slug' => 'laporan.create', 'module' => 'Laporan'],
            ['name' => 'Edit Laporan', 'slug' => 'laporan.edit', 'module' => 'Laporan'],
            ['name' => 'Submit Laporan', 'slug' => 'laporan.submit', 'module' => 'Laporan'],
            ['name' => 'Review Laporan', 'slug' => 'laporan.review', 'module' => 'Laporan'],
            ['name' => 'Accept Laporan', 'slug' => 'laporan.accept', 'module' => 'Laporan'],
            ['name' => 'Lock Laporan', 'slug' => 'laporan.lock', 'module' => 'Laporan'],
            ['name' => 'Unlock Laporan', 'slug' => 'laporan.unlock', 'module' => 'Laporan'],
            ['name' => 'Export Laporan', 'slug' => 'laporan.export', 'module' => 'Laporan'],

            // Invoice Pelaku Usaha Permissions
            ['name' => 'View Invoice Client', 'slug' => 'invoice_client.view', 'module' => 'Invoice'],
            ['name' => 'Create Invoice Client', 'slug' => 'invoice_client.create', 'module' => 'Invoice'],
            ['name' => 'Edit Invoice Client', 'slug' => 'invoice_client.edit', 'module' => 'Invoice'],
            ['name' => 'Issue Invoice Client', 'slug' => 'invoice_client.issue', 'module' => 'Invoice'],
            ['name' => 'Void Invoice Client', 'slug' => 'invoice_client.void', 'module' => 'Invoice'],
            ['name' => 'Upload Bukti Bayar', 'slug' => 'invoice_client.upload_payment', 'module' => 'Invoice'],
            ['name' => 'Verify Payment', 'slug' => 'invoice_client.verify_payment', 'module' => 'Invoice'],

            // Invoice Auditor Permissions
            ['name' => 'View Invoice Auditor', 'slug' => 'invoice_auditor.view', 'module' => 'Invoice'],
            ['name' => 'Create Invoice Auditor', 'slug' => 'invoice_auditor.create', 'module' => 'Invoice'],
            ['name' => 'Issue Invoice Auditor', 'slug' => 'invoice_auditor.issue', 'module' => 'Invoice'],
            ['name' => 'Pay Invoice Auditor', 'slug' => 'invoice_auditor.pay', 'module' => 'Invoice'],

            // Sharing Fee Permissions
            ['name' => 'View Sharing Fee', 'slug' => 'sharing_fee.view', 'module' => 'Finansial'],
            ['name' => 'Calculate Sharing Fee', 'slug' => 'sharing_fee.calculate', 'module' => 'Finansial'],
            ['name' => 'Approve Sharing Fee', 'slug' => 'sharing_fee.approve', 'module' => 'Finansial'],
            ['name' => 'Distribute Sharing Fee', 'slug' => 'sharing_fee.distribute', 'module' => 'Finansial'],
            ['name' => 'Configure Fee Percentage', 'slug' => 'sharing_fee.configure', 'module' => 'Finansial'],

            // Penerusan ke Komite Fatwa/BPJPH Permissions
            ['name' => 'View Penerusan', 'slug' => 'penerusan.view', 'module' => 'Penerusan'],
            ['name' => 'Submit to Fatwa', 'slug' => 'penerusan.submit_fatwa', 'module' => 'Penerusan'],
            ['name' => 'Submit to BPJPH', 'slug' => 'penerusan.submit_bpjph', 'module' => 'Penerusan'],

            // Screening & Administrasi Permissions
            ['name' => 'View Screening', 'slug' => 'screening.view', 'module' => 'Administrasi'],
            ['name' => 'Process Screening', 'slug' => 'screening.process', 'module' => 'Administrasi'],
            ['name' => 'Approve Screening', 'slug' => 'screening.approve', 'module' => 'Administrasi'],
            ['name' => 'Reject Screening', 'slug' => 'screening.reject', 'module' => 'Administrasi'],

            // Master Data Permissions
            ['name' => 'View Master Data', 'slug' => 'master.view', 'module' => 'Master Data'],
            ['name' => 'Create Master Data', 'slug' => 'master.create', 'module' => 'Master Data'],
            ['name' => 'Edit Master Data', 'slug' => 'master.edit', 'module' => 'Master Data'],
            ['name' => 'Delete Master Data', 'slug' => 'master.delete', 'module' => 'Master Data'],

            // Settings & RBAC Permissions
            ['name' => 'View Settings', 'slug' => 'settings.view', 'module' => 'Settings'],
            ['name' => 'Edit Settings', 'slug' => 'settings.edit', 'module' => 'Settings'],
            ['name' => 'Manage Roles', 'slug' => 'rbac.manage_roles', 'module' => 'RBAC'],
            ['name' => 'Manage Permissions', 'slug' => 'rbac.manage_permissions', 'module' => 'RBAC'],
            ['name' => 'Assign Roles', 'slug' => 'rbac.assign_roles', 'module' => 'RBAC'],

            // Monitoring & Laporan Permissions
            ['name' => 'View Monitoring', 'slug' => 'monitoring.view', 'module' => 'Monitoring'],
            ['name' => 'View Reports', 'slug' => 'monitoring.reports', 'module' => 'Monitoring'],
            ['name' => 'Export Reports', 'slug' => 'monitoring.export', 'module' => 'Monitoring'],

            // Communication Permissions
            ['name' => 'View Messages', 'slug' => 'komunikasi.view', 'module' => 'Komunikasi'],
            ['name' => 'Send Messages', 'slug' => 'komunikasi.send', 'module' => 'Komunikasi'],
            ['name' => 'Reply Messages', 'slug' => 'komunikasi.reply', 'module' => 'Komunikasi'],

            // Audit Trail Permissions
            ['name' => 'View Audit Trail', 'slug' => 'audit_trail.view', 'module' => 'Audit Trail'],
        ];

        // Create all permissions
        foreach ($permissions as $permission) {
            Permission::updateOrCreate(
                ['slug' => $permission['slug']],
                $permission
            );
        }

        // Assign permissions to roles
        $this->assignPermissionsToRoles();
    }

    /**
     * Assign permissions to each role based on requirements
     */
    private function assignPermissionsToRoles()
    {
        // Pelaku Usaha Permissions
        $pelakuUsaha = Role::where('slug', 'pelaku_usaha')->first();
        if ($pelakuUsaha) {
            $pelakuUsahaPermissions = [
                'dashboard.view',
                'pengajuan.view', 'pengajuan.create', 'pengajuan.edit', 'pengajuan.submit', 'pengajuan.duplicate',
                'dokumen.view', 'dokumen.upload', 'dokumen.download',
                'jadwal.view', 'jadwal.confirm',
                'invoice_client.view', 'invoice_client.upload_payment',
                'komunikasi.view', 'komunikasi.send', 'komunikasi.reply',
            ];
            $this->syncPermissions($pelakuUsaha, $pelakuUsahaPermissions);
        }

        // Penyedia Halal Permissions
        $penyediaHalal = Role::where('slug', 'penyedia_halal')->first();
        if ($penyediaHalal) {
            $penyediaHalalPermissions = [
                'dashboard.view',
                'pengajuan.view',
                'dokumen.view', 'dokumen.download', 'dokumen.verify',
                'verifikasi.view', 'verifikasi.create', 'verifikasi.edit', 'verifikasi.submit',
                'verifikasi.lock', 'verifikasi.request_revision',
                'audit.view',
                'laporan.view',
            ];
            $this->syncPermissions($penyediaHalal, $penyediaHalalPermissions);
        }

        // Admin LPH Permissions
        $adminLph = Role::where('slug', 'admin_lph')->first();
        if ($adminLph) {
            $adminLphPermissions = [
                'dashboard.view', 'dashboard.statistics',
                'pengajuan.view', 'pengajuan.edit',
                'dokumen.view', 'dokumen.upload', 'dokumen.download', 'dokumen.delete',
                'dokumen.verify', 'dokumen.lock', 'dokumen.unlock',
                'verifikasi.view', 'verifikasi.unlock',
                'penugasan.view',
                'jadwal.view',
                'audit.view',
                'laporan.view', 'laporan.review', 'laporan.accept', 'laporan.unlock',
                'invoice_client.view', 'invoice_client.create', 'invoice_client.edit',
                'invoice_client.issue', 'invoice_client.void', 'invoice_client.verify_payment',
                'invoice_auditor.view', 'invoice_auditor.create', 'invoice_auditor.issue', 'invoice_auditor.pay',
                'sharing_fee.view', 'sharing_fee.calculate', 'sharing_fee.approve', 'sharing_fee.distribute',
                'penerusan.view', 'penerusan.submit_fatwa', 'penerusan.submit_bpjph',
                'screening.view', 'screening.process', 'screening.approve', 'screening.reject',
                'master.view', 'master.create', 'master.edit', 'master.delete',
                'settings.view', 'settings.edit',
                'rbac.manage_roles', 'rbac.manage_permissions', 'rbac.assign_roles',
                'monitoring.view', 'monitoring.reports', 'monitoring.export',
                'komunikasi.view', 'komunikasi.send', 'komunikasi.reply',
                'audit_trail.view',
            ];
            $this->syncPermissions($adminLph, $adminLphPermissions);
        }

        // Manajer Teknis Permissions
        $manajerTeknis = Role::where('slug', 'manajer_teknis')->first();
        if ($manajerTeknis) {
            $manajerTeknisPermissions = [
                'dashboard.view',
                'pengajuan.view',
                'penugasan.view', 'penugasan.create', 'penugasan.edit', 'penugasan.assign',
                'penugasan.lock', 'penugasan.unlock',
                'jadwal.view', 'jadwal.create', 'jadwal.edit',
                'audit.view',
                'laporan.view',
                'monitoring.view',
            ];
            $this->syncPermissions($manajerTeknis, $manajerTeknisPermissions);
        }

        // Auditor Halal Permissions
        $auditorHalal = Role::where('slug', 'auditor_halal')->first();
        if ($auditorHalal) {
            $auditorHalalPermissions = [
                'dashboard.view',
                'pengajuan.view',
                'dokumen.view', 'dokumen.download',
                'penugasan.view',
                'jadwal.view', 'jadwal.create', 'jadwal.confirm',
                'audit.view', 'audit.create', 'audit.edit', 'audit.submit',
                'audit.view_temuan', 'audit.create_temuan', 'audit.upload_bukti',
                'laporan.view', 'laporan.create', 'laporan.edit', 'laporan.submit', 'laporan.export',
                'invoice_auditor.view',
            ];
            $this->syncPermissions($auditorHalal, $auditorHalalPermissions);
        }
    }

    /**
     * Sync permissions to role by slug
     */
    private function syncPermissions(Role $role, array $permissionSlugs)
    {
        $permissions = Permission::whereIn('slug', $permissionSlugs)->get();
        $role->permissions()->sync($permissions);
    }
}
