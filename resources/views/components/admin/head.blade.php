<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ $title ?? 'Dashboard' }} - LPH Doa Bangsa Sukabumi</title>

<!-- Favicon -->
<link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}" sizes="16x16">

<!-- Remix Icon CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- ApexCharts CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.45.0/dist/apexcharts.css">

<!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">

<!-- Custom Admin Styles -->
<style>
    :root {
        /* Primary Colors */
        --primary-50: #e8f5e9;
        --primary-100: #c8e6c9;
        --primary-200: #a5d6a7;
        --primary-300: #81c784;
        --primary-400: #66bb6a;
        --primary-500: #4caf50;
        --primary-600: #166F61;
        --primary-700: #125950;
        --primary-light: #e0f2f1;
        --primary-dark: #0d4a42;

        /* Success Colors */
        --success-main: #10b981;
        --success-light: #d1fae5;
        --success-dark: #065f46;

        /* Warning Colors */
        --warning-main: #f59e0b;
        --warning-light: #fef3c7;
        --warning-dark: #92400e;

        /* Info Colors */
        --info-main: #3b82f6;
        --info-light: #dbeafe;
        --info-dark: #1e40af;

        /* Danger Colors */
        --danger-main: #ef4444;
        --danger-light: #fee2e2;
        --danger-dark: #991b1b;

        /* Purple Colors */
        --purple-main: #7c3aed;
        --purple-light: #ede9fe;
        --purple-dark: #5b21b6;

        /* Neutral Colors */
        --neutral-50: #f9fafb;
        --neutral-100: #f3f4f6;
        --neutral-200: #e5e7eb;
        --neutral-300: #d1d5db;
        --neutral-400: #9ca3af;
        --neutral-500: #6b7280;
        --neutral-600: #4b5563;
        --neutral-700: #374151;
        --neutral-800: #1f2937;
        --neutral-900: #111827;

        /* Text Colors */
        --text-primary: #111827;
        --text-secondary-light: #6b7280;

        /* Spacing */
        --spacing-4: 0.25rem;
        --spacing-8: 0.5rem;
        --spacing-12: 0.75rem;
        --spacing-16: 1rem;
        --spacing-20: 1.25rem;
        --spacing-24: 1.5rem;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: var(--neutral-50);
        color: var(--text-primary);
    }

    /* Sidebar Styles */
    .sidebar {
        position: fixed;
        top: 0;
        left: 0;
        width: 280px;
        height: 100vh;
        background: white;
        border-right: 1px solid var(--neutral-200);
        overflow-y: auto;
        transition: all 0.3s ease;
        z-index: 1000;
    }

    .sidebar-header {
        padding: 1.5rem;
        border-bottom: 1px solid var(--neutral-200);
    }

    .sidebar-logo {
        font-size: 1.5rem;
        font-weight: 700;
        color: var(--primary-600);
        text-decoration: none;
    }

    .sidebar-menu {
        padding: 1rem;
        list-style: none;
    }

    .sidebar-menu-item {
        margin-bottom: 0.5rem;
    }

    .sidebar-menu-link {
        display: flex;
        align-items: center;
        padding: 0.75rem 1rem;
        color: var(--neutral-700);
        text-decoration: none;
        border-radius: 8px;
        transition: all 0.2s;
        gap: 0.75rem;
    }

    .sidebar-menu-link:hover,
    .sidebar-menu-link.active {
        background-color: var(--primary-light);
        color: var(--primary-600);
    }

    .sidebar-menu-link i {
        font-size: 1.25rem;
        width: 24px;
    }

    .sidebar-submenu {
        list-style: none;
        padding-left: 2.5rem;
        margin-top: 0.5rem;
        display: none;
    }

    .sidebar-submenu.show {
        display: block;
    }

    .sidebar-submenu-link {
        display: flex;
        align-items: center;
        padding: 0.5rem 1rem;
        color: var(--neutral-600);
        text-decoration: none;
        border-radius: 6px;
        transition: all 0.2s;
        font-size: 0.9rem;
    }

    .sidebar-submenu-link:hover {
        background-color: var(--neutral-100);
        color: var(--primary-600);
    }

    /* Navbar Styles */
    .navbar-custom {
        position: sticky;
        top: 0;
        left: 280px;
        right: 0;
        background: white;
        border-bottom: 1px solid var(--neutral-200);
        padding: 1rem 2rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
        z-index: 999;
    }

    .navbar-search {
        flex: 1;
        max-width: 400px;
    }

    .navbar-search input {
        width: 100%;
        padding: 0.5rem 1rem 0.5rem 2.5rem;
        border: 1px solid var(--neutral-300);
        border-radius: 8px;
        font-size: 0.9rem;
    }

    .navbar-actions {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .navbar-icon-btn {
        position: relative;
        background: none;
        border: none;
        color: var(--neutral-600);
        font-size: 1.25rem;
        cursor: pointer;
        padding: 0.5rem;
        border-radius: 50%;
        transition: all 0.2s;
    }

    .navbar-icon-btn:hover {
        background-color: var(--neutral-100);
    }

    .navbar-badge {
        position: absolute;
        top: 0;
        right: 0;
        background-color: var(--danger-main);
        color: white;
        font-size: 0.7rem;
        padding: 0.15rem 0.4rem;
        border-radius: 10px;
        font-weight: 600;
    }

    .navbar-profile {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        cursor: pointer;
    }

    .navbar-profile img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        object-fit: cover;
    }

    /* Main Content */
    .dashboard-main {
        margin-left: 280px;
        min-height: 100vh;
        background-color: var(--neutral-50);
    }

    .dashboard-content {
        padding: 2rem;
    }

    /* Card Styles */
    .card-custom {
        background: white;
        border-radius: 12px;
        padding: 1.5rem;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        margin-bottom: 1.5rem;
    }

    .card-header-custom {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 1.5rem;
    }

    .card-title {
        font-size: 1.25rem;
        font-weight: 600;
        color: var(--neutral-800);
    }

    /* Stat Cards */
    .stat-card {
        background: white;
        border-radius: 12px;
        padding: 1.5rem;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .stat-icon {
        width: 60px;
        height: 60px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.75rem;
        color: white;
    }

    .stat-icon.primary { background: linear-gradient(135deg, var(--primary-600) 0%, var(--primary-500) 100%); }
    .stat-icon.success { background: linear-gradient(135deg, var(--success-main) 0%, var(--success-dark) 100%); }
    .stat-icon.warning { background: linear-gradient(135deg, var(--warning-main) 0%, var(--warning-dark) 100%); }
    .stat-icon.info { background: linear-gradient(135deg, var(--info-main) 0%, var(--info-dark) 100%); }
    .stat-icon.danger { background: linear-gradient(135deg, var(--danger-main) 0%, var(--danger-dark) 100%); }
    .stat-icon.purple { background: linear-gradient(135deg, var(--purple-main) 0%, var(--purple-dark) 100%); }

    .stat-content {
        flex: 1;
    }

    .stat-label {
        font-size: 0.875rem;
        color: var(--text-secondary-light);
        margin-bottom: 0.25rem;
    }

    .stat-value {
        font-size: 1.75rem;
        font-weight: 700;
        color: var(--neutral-800);
    }

    .stat-trend {
        display: inline-flex;
        align-items: center;
        gap: 0.25rem;
        font-size: 0.75rem;
        padding: 0.25rem 0.5rem;
        border-radius: 4px;
        margin-top: 0.5rem;
    }

    .stat-trend.up {
        background-color: var(--success-light);
        color: var(--success-dark);
    }

    .stat-trend.down {
        background-color: var(--danger-light);
        color: var(--danger-dark);
    }

    /* Badge Styles */
    .badge-custom {
        padding: 0.375rem 0.75rem;
        border-radius: 6px;
        font-size: 0.75rem;
        font-weight: 600;
    }

    .badge-primary { background-color: var(--primary-light); color: var(--primary-600); }
    .badge-success { background-color: var(--success-light); color: var(--success-dark); }
    .badge-warning { background-color: var(--warning-light); color: var(--warning-dark); }
    .badge-danger { background-color: var(--danger-light); color: var(--danger-dark); }
    .badge-info { background-color: var(--info-light); color: var(--info-dark); }

    /* Responsive */
    @media (max-width: 1024px) {
        .sidebar {
            transform: translateX(-100%);
        }

        .sidebar.show {
            transform: translateX(0);
        }

        .dashboard-main {
            margin-left: 0;
        }

        .navbar-custom {
            left: 0;
        }
    }

    /* Utility Classes */
    .text-primary-600 { color: var(--primary-600); }
    .text-secondary-light { color: var(--text-secondary-light); }
    .text-success { color: var(--success-main); }
    .text-warning { color: var(--warning-main); }
    .text-danger { color: var(--danger-main); }
    .text-info { color: var(--info-main); }

    .bg-primary { background-color: var(--primary-600); }
    .bg-success { background-color: var(--success-main); }
    .bg-warning { background-color: var(--warning-main); }
    .bg-danger { background-color: var(--danger-main); }
    .bg-info { background-color: var(--info-main); }

    .p-20 { padding: var(--spacing-20); }
    .px-16 { padding-left: var(--spacing-16); padding-right: var(--spacing-16); }
    .py-12 { padding-top: var(--spacing-12); padding-bottom: var(--spacing-12); }
</style>

{{ $slot ?? '' }}
