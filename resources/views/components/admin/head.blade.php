<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ $title ?? 'Dashboard' }} - LPH Doa Bangsa Sukabumi</title>

<!-- Favicon -->
<link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}" sizes="16x16">

<!-- Tabler CSS -->
<link href="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/css/tabler.min.css" rel="stylesheet"/>
<link href="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/css/tabler-flags.min.css" rel="stylesheet"/>
<link href="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/css/tabler-payments.min.css" rel="stylesheet"/>
<link href="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/css/tabler-vendors.min.css" rel="stylesheet"/>

<!-- Tabler Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">

<!-- ApexCharts CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.45.0/dist/apexcharts.css">

<!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">

<!-- Custom Styles for LPH -->
<style>
    :root {
        /* LPH Brand Colors */
        --tblr-primary: #166F61;
        --tblr-primary-rgb: 22, 111, 97;
        --tblr-primary-darken: #125950;
        --tblr-primary-lighten: #e0f2f1;
    }

    /* Custom sidebar brand color */
    .navbar-brand {
        color: var(--tblr-primary) !important;
        font-weight: 700;
    }

    /* Active menu item */
    .nav-link.active {
        background-color: var(--tblr-primary) !important;
        color: white !important;
    }

    /* Buttons primary color */
    .btn-primary {
        background-color: var(--tblr-primary) !important;
        border-color: var(--tblr-primary) !important;
    }

    .btn-primary:hover {
        background-color: var(--tblr-primary-darken) !important;
        border-color: var(--tblr-primary-darken) !important;
    }

    /* Links */
    .text-primary, a.text-primary {
        color: var(--tblr-primary) !important;
    }

    /* Badges */
    .badge.bg-primary {
        background-color: var(--tblr-primary) !important;
    }

    /* Card hover effect */
    .card-hover:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
    }

    /* Stat cards */
    .stats-card {
        border-left: 3px solid var(--tblr-primary);
    }

    /* Smooth transitions */
    .card, .btn, .nav-link {
        transition: all 0.2s ease-in-out;
    }

    /* Custom scrollbar for sidebar */
    .navbar-vertical::-webkit-scrollbar {
        width: 6px;
    }

    .navbar-vertical::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    .navbar-vertical::-webkit-scrollbar-thumb {
        background: #888;
        border-radius: 3px;
    }

    .navbar-vertical::-webkit-scrollbar-thumb:hover {
        background: #555;
    }
</style>

{{ $slot ?? '' }}
