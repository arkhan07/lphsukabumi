<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ $title ?? 'Login' }} - LPH Doa Bangsa Sukabumi</title>

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<!-- Remix Icon CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Iconify -->
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

<style>
    :root {
        /* Primary Colors */
        --primary-600: #487FFF;
        --primary-700: #486CEA;
        --primary-50: #E4F1FF;

        /* Neutral Colors */
        --neutral-50: #F5F6FA;
        --neutral-100: #F3F4F6;
        --neutral-200: #EBECEF;
        --neutral-300: #D1D5DB;
        --neutral-400: #9CA3AF;
        --neutral-500: #6B7280;
        --neutral-600: #4B5563;
        --neutral-700: #374151;
        --neutral-800: #1F2937;
        --neutral-900: #111827;

        /* Text Colors */
        --text-primary-light: var(--neutral-900);
        --text-secondary-light: var(--neutral-600);

        /* Base */
        --base: #ffffff;
        --bg-color: var(--neutral-50);

        /* Border */
        --border-neutral-300: var(--neutral-300);

        /* Sizes */
        --h-56-px: 3.5rem;
        --rounded-12: 0.75rem;
        --font-sm: 0.875rem;
        --font-md: 1rem;
        --font-lg: 1.125rem;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        background-color: var(--bg-color);
        color: var(--text-primary-light);
        font-size: 1rem;
        line-height: 1.7;
        font-weight: 400;
    }

    /* Auth Layout */
    .auth {
        min-height: 100vh;
        display: flex;
        flex-wrap: wrap;
        background-color: var(--base);
    }

    .bg-base {
        background-color: var(--base);
    }

    .auth-left {
        flex: 0 0 40%;
        background: linear-gradient(135deg, var(--primary-600) 0%, var(--primary-700) 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 3.75rem;
    }

    .auth-left img {
        max-width: 100%;
        height: auto;
    }

    .auth-right {
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 2rem 1.5rem;
        background-color: var(--base);
    }

    /* Typography */
    h4 {
        font-size: 1.75rem;
        font-weight: 600;
        color: var(--text-primary-light);
        line-height: 1.3;
        margin: 0;
    }

    p {
        margin: 0;
    }

    /* Utilities */
    .max-w-464-px {
        max-width: 464px;
    }

    .max-w-290-px {
        max-width: 290px;
        display: inline-block;
    }

    .mx-auto {
        margin-left: auto !important;
        margin-right: auto !important;
    }

    .w-100 {
        width: 100% !important;
    }

    .h-56-px {
        height: var(--h-56-px) !important;
    }

    .bg-neutral-50 {
        background-color: var(--neutral-50) !important;
    }

    .radius-12 {
        border-radius: var(--rounded-12) !important;
    }

    .text-secondary-light {
        color: var(--text-secondary-light) !important;
    }

    .text-lg {
        font-size: var(--font-lg) !important;
    }

    .text-sm {
        font-size: var(--font-sm) !important;
    }

    .text-md {
        font-size: var(--font-md) !important;
    }

    .fw-medium {
        font-weight: 500 !important;
    }

    .fw-semibold {
        font-weight: 600 !important;
    }

    .fw-bold {
        font-weight: 700 !important;
    }

    /* Form Controls */
    .form-control {
        display: block;
        width: 100%;
        padding: 0.75rem 1rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: var(--text-primary-light);
        background-color: var(--neutral-50);
        background-clip: padding-box;
        border: 1px solid var(--border-neutral-300);
        appearance: none;
        border-radius: var(--rounded-12);
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .form-control:focus {
        color: var(--text-primary-light);
        background-color: var(--base);
        border-color: var(--primary-600);
        outline: 0;
        box-shadow: 0 0 0 0.25rem rgba(72, 127, 255, 0.15);
    }

    .form-control::placeholder {
        color: var(--neutral-400);
        opacity: 1;
    }

    .form-select {
        padding-left: 1rem;
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: right 0.75rem center;
        background-size: 16px 12px;
    }

    /* Icon Field */
    .icon-field {
        position: relative;
        display: block;
    }

    .icon-field .icon {
        position: absolute;
        left: 1rem;
        top: 50%;
        transform: translateY(-50%);
        color: var(--text-secondary-light);
        font-size: 1.25rem;
        pointer-events: none;
        z-index: 2;
    }

    .icon-field .form-control {
        padding-left: 3rem;
    }

    /* Toggle Password */
    .toggle-password {
        font-size: 1.25rem;
        z-index: 10;
        padding: 0.5rem;
        cursor: pointer;
        color: var(--text-secondary-light);
        transition: color 0.2s;
    }

    .toggle-password:hover {
        color: var(--primary-600) !important;
    }

    /* Buttons */
    .btn {
        display: inline-block;
        font-weight: 600;
        line-height: 1.5;
        color: #212529;
        text-align: center;
        text-decoration: none;
        vertical-align: middle;
        cursor: pointer;
        user-select: none;
        background-color: transparent;
        border: 1px solid transparent;
        padding: 1rem 0.75rem;
        font-size: var(--font-sm);
        border-radius: var(--rounded-12);
        transition: all 0.3s ease;
    }

    .btn-primary {
        color: #ffffff;
        background-color: var(--primary-600);
        border-color: var(--primary-600);
    }

    .btn-primary:hover {
        color: #ffffff;
        background-color: var(--primary-700);
        border-color: var(--primary-700);
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(72, 127, 255, 0.3);
    }

    .btn-primary:focus {
        color: #ffffff;
        background-color: var(--primary-700);
        border-color: var(--primary-700);
        box-shadow: 0 0 0 0.25rem rgba(72, 127, 255, 0.25);
    }

    .btn-sm {
        padding: 1rem 0.75rem;
    }

    /* Links */
    .text-primary-600 {
        color: var(--primary-600) !important;
        text-decoration: none;
    }

    .text-primary-600:hover {
        color: var(--primary-700) !important;
        text-decoration: underline;
    }

    /* Form Check */
    .form-check {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        min-height: 1.5rem;
        padding-left: 0;
    }

    .form-check-input {
        width: 1.125rem;
        height: 1.125rem;
        margin: 0;
        vertical-align: top;
        background-color: var(--base);
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain;
        border: 1px solid var(--border-neutral-300);
        appearance: none;
        print-color-adjust: exact;
    }

    .form-check-input[type="checkbox"] {
        border-radius: 0.25em;
    }

    .form-check-input:checked {
        background-color: var(--primary-600);
        border-color: var(--primary-600);
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='m6 10 3 3 6-6'/%3e%3c/svg%3e");
    }

    .form-check-input:focus {
        border-color: var(--primary-600);
        outline: 0;
        box-shadow: 0 0 0 0.25rem rgba(72, 127, 255, 0.15);
    }

    .form-check-label {
        font-size: 0.875rem;
        cursor: pointer;
        user-select: none;
        margin-bottom: 0;
    }

    .style-check {
        padding-left: 0;
    }

    /* Form Label */
    .form-label {
        display: inline-block;
        margin-bottom: 0.5rem;
        font-weight: 500;
        font-size: 0.875rem;
        color: var(--neutral-700);
    }

    /* Alerts */
    .alert {
        position: relative;
        padding: 0.75rem 1rem;
        margin-bottom: 1.25rem;
        border: 1px solid transparent;
        border-radius: 0.5rem;
        font-size: 0.875rem;
    }

    .alert-success {
        color: #065F46;
        background-color: #D1FAE5;
        border-color: #16A34A;
        border-left: 4px solid #16A34A;
    }

    .alert-danger {
        color: #991B1B;
        background-color: #FEE2E2;
        border-color: #DC2626;
        border-left: 4px solid #DC2626;
    }

    .alert ul {
        margin: 0;
        padding-left: 1.25rem;
        list-style: disc;
    }

    /* Spacing */
    .mb-0 {
        margin-bottom: 0 !important;
    }

    .mb-12 {
        margin-bottom: 0.75rem !important;
    }

    .mb-16 {
        margin-bottom: 1rem !important;
    }

    .mb-20 {
        margin-bottom: 1.25rem !important;
    }

    .mb-24 {
        margin-bottom: 1.5rem !important;
    }

    .mb-32 {
        margin-bottom: 2rem !important;
    }

    .mb-40 {
        margin-bottom: 2.5rem !important;
    }

    .mt-24 {
        margin-top: 1.5rem !important;
    }

    .mt-32 {
        margin-top: 2rem !important;
    }

    .mt-120 {
        margin-top: 7.5rem !important;
    }

    .px-4 {
        padding-left: 1rem !important;
        padding-right: 1rem !important;
    }

    .px-12 {
        padding-left: 0.75rem !important;
        padding-right: 0.75rem !important;
    }

    .py-16 {
        padding-top: 1rem !important;
        padding-bottom: 1rem !important;
    }

    .py-32 {
        padding-top: 2rem !important;
        padding-bottom: 2rem !important;
    }

    .px-24 {
        padding-left: 1.5rem !important;
        padding-right: 1.5rem !important;
    }

    /* Display */
    .d-none {
        display: none !important;
    }

    .d-flex {
        display: flex !important;
    }

    .d-lg-block {
        display: none !important;
    }

    @media (min-width: 992px) {
        .d-lg-block {
            display: block !important;
        }
    }

    .flex-column {
        flex-direction: column !important;
    }

    .flex-wrap {
        flex-wrap: wrap !important;
    }

    .align-items-center {
        align-items: center !important;
    }

    .justify-content-center {
        justify-content: center !important;
    }

    .justify-content-between {
        justify-content: space-between !important;
    }

    .h-100 {
        height: 100% !important;
    }

    .text-center {
        text-align: center !important;
    }

    /* Responsive */
    @media (max-width: 991.98px) {
        .auth-left {
            display: none !important;
        }

        .auth-right {
            flex: 1 0 100%;
            padding: 1.5rem 1rem;
        }

        h4 {
            font-size: 1.5rem;
        }
    }

    @media (max-width: 575.98px) {
        .auth-right {
            padding: 1.25rem 1rem;
        }

        h4 {
            font-size: 1.25rem;
        }

        .text-lg {
            font-size: 1rem !important;
        }
    }

    /* Position Utilities */
    .position-relative {
        position: relative !important;
    }

    .position-absolute {
        position: absolute !important;
    }

    .end-0 {
        right: 0 !important;
    }

    .top-50 {
        top: 50% !important;
    }

    .translate-middle-y {
        transform: translateY(-50%) !important;
    }

    .me-16 {
        margin-right: 1rem !important;
    }

    .cursor-pointer {
        cursor: pointer !important;
    }

    /* Center Border Horizontal */
    .center-border-horizontal {
        position: relative;
        display: flex;
        align-items: center;
        margin: 2rem 0;
    }

    .center-border-horizontal::before,
    .center-border-horizontal::after {
        content: '';
        flex: 1;
        height: 1px;
        background-color: var(--neutral-300);
    }

    .center-border-horizontal span {
        padding: 0 1rem;
        color: var(--text-secondary-light);
        font-size: 0.875rem;
        background-color: var(--base);
        position: relative;
        z-index: 1;
    }

    /* Gap Utilities */
    .gap-2 {
        gap: 0.5rem !important;
    }

    .gap-3 {
        gap: 1rem !important;
    }

    .gap-12 {
        gap: 0.75rem !important;
    }

    /* Line Height */
    .line-height-1 {
        line-height: 1 !important;
    }

    /* Text Size */
    .text-xl {
        font-size: 1.25rem !important;
    }

    /* Border */
    .border {
        border: 1px solid var(--border-neutral-300) !important;
    }

    .border-neutral-300 {
        border-color: var(--border-neutral-300) !important;
    }

    /* Width */
    .w-50 {
        width: 50% !important;
    }

    /* Hover Effects */
    .bg-hover-primary-50:hover {
        background-color: var(--primary-50) !important;
        border-color: var(--primary-600) !important;
    }
</style>
