<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ $title ?? 'Login' }} - LPH Doa Bangsa Sukabumi</title>

<!-- Favicon -->
<link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}" sizes="16x16">

<!-- Remix Icon CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css">

<!-- Iconify -->
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<!-- Custom Auth Styles -->
<style>
    :root {
        --primary-600: #166F61;
        --primary-700: #125950;
        --primary-light: #E0F2F1;
        --primary-50: #E8F5F3;
        --neutral-50: #F9FAFB;
        --neutral-100: #F3F4F6;
        --neutral-300: #D1D5DB;
        --neutral-700: #374151;
        --neutral-900: #111827;
        --text-secondary-light: #6B7280;
        --border-neutral-300: #D1D5DB;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        background-color: #ffffff;
        color: var(--neutral-900);
        line-height: 1.6;
    }

    .auth {
        min-height: 100vh;
        display: flex;
    }

    .auth-left {
        flex: 0 0 40%;
        background: linear-gradient(135deg, var(--primary-600) 0%, var(--primary-700) 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 60px;
        position: relative;
        overflow: hidden;
    }

    .auth-left::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
        animation: rotate 30s linear infinite;
    }

    @keyframes rotate {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }

    .auth-left img {
        max-width: 100%;
        height: auto;
        position: relative;
        z-index: 1;
        filter: drop-shadow(0 20px 60px rgba(0, 0, 0, 0.3));
    }

    .auth-right {
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 32px 24px;
        background-color: #ffffff;
    }

    .max-w-464-px {
        max-width: 464px;
    }

    .max-w-290-px {
        max-width: 290px;
        display: inline-block;
    }

    .mx-auto {
        margin-left: auto;
        margin-right: auto;
    }

    .w-100 {
        width: 100%;
    }

    .h-56-px {
        height: 56px;
    }

    .bg-neutral-50 {
        background-color: var(--neutral-50);
    }

    .radius-12 {
        border-radius: 12px;
    }

    .icon-field {
        position: relative;
    }

    .icon-field .icon {
        position: absolute;
        left: 16px;
        top: 50%;
        transform: translateY(-50%);
        color: var(--text-secondary-light);
        font-size: 20px;
        pointer-events: none;
    }

    .icon-field .form-control {
        padding-left: 48px;
        border: 1px solid var(--border-neutral-300);
        transition: all 0.3s ease;
    }

    .icon-field .form-control:focus {
        border-color: var(--primary-600);
        box-shadow: 0 0 0 3px var(--primary-50);
        background-color: #ffffff;
    }

    .toggle-password {
        font-size: 20px;
        z-index: 10;
        padding: 8px;
    }

    .toggle-password:hover {
        color: var(--primary-600) !important;
    }

    .btn-primary {
        background-color: var(--primary-600);
        border-color: var(--primary-600);
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background-color: var(--primary-700);
        border-color: var(--primary-700);
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(22, 111, 97, 0.3);
    }

    .text-primary-600 {
        color: var(--primary-600);
    }

    .text-primary-600:hover {
        color: var(--primary-700);
        text-decoration: underline;
    }

    .text-secondary-light {
        color: var(--text-secondary-light);
    }

    .text-lg {
        font-size: 1rem;
    }

    .text-sm {
        font-size: 0.875rem;
    }

    .text-md {
        font-size: 0.9375rem;
    }

    .fw-medium {
        font-weight: 500;
    }

    .fw-semibold {
        font-weight: 600;
    }

    .center-border-horizontal {
        position: relative;
        display: flex;
        align-items: center;
    }

    .center-border-horizontal::before,
    .center-border-horizontal::after {
        content: '';
        flex: 1;
        height: 1px;
        background-color: var(--neutral-300);
    }

    .center-border-horizontal span {
        padding: 0 16px;
        color: var(--text-secondary-light);
        font-size: 0.875rem;
        position: relative;
        background-color: #ffffff;
    }

    .bg-hover-primary-50:hover {
        background-color: var(--primary-50);
        border-color: var(--primary-600) !important;
    }

    .border {
        border: 1px solid var(--neutral-300) !important;
    }

    .form-check-input:checked {
        background-color: var(--primary-600);
        border-color: var(--primary-600);
    }

    .form-check-input:focus {
        box-shadow: 0 0 0 0.25rem var(--primary-50);
        border-color: var(--primary-600);
    }

    .alert {
        border-radius: 8px;
        padding: 12px 16px;
        margin-bottom: 20px;
        border-left: 4px solid;
    }

    .alert-danger {
        background-color: #FEE2E2;
        border-color: #DC2626;
        color: #991B1B;
    }

    .alert-success {
        background-color: #D1FAE5;
        border-color: #10B981;
        color: #065F46;
    }

    /* Responsive */
    @media (max-width: 991.98px) {
        .auth-left {
            display: none;
        }

        .auth-right {
            padding: 24px;
        }
    }

    @media (max-width: 575.98px) {
        .auth-right {
            padding: 20px 16px;
        }

        h4 {
            font-size: 1.25rem;
        }
    }
</style>
