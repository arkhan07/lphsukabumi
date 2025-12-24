<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
<head>
    <x-admin.head>
        <title>{{ $title ?? 'Dashboard' }} - LPH Doa Bangsa Sukabumi</title>
    </x-admin.head>
</head>
<body>
    <div class="dashboard-wrapper">
        <!-- Sidebar -->
        <x-admin.sidebar />

        <!-- Main Content Area -->
        <div class="dashboard-main">
            <!-- Navbar -->
            <x-admin.navbar />

            <!-- Page Content -->
            <div class="dashboard-content">
                <!-- Page Header -->
                @if(isset($header))
                <div class="mb-4">
                    {{ $header }}
                </div>
                @endif

                <!-- Session Status -->
                @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('status') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                <!-- Validation Errors -->
                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Terdapat {{ $errors->count() }} kesalahan:</strong>
                        <ul class="mb-0 mt-2">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                <!-- Main Content -->
                {{ $slot }}
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.45.0/dist/apexcharts.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

    <!-- Custom Scripts -->
    <script>
        // Initialize DataTables
        $(document).ready(function() {
            if ($.fn.DataTable) {
                $('.data-table').DataTable({
                    language: {
                        url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/id.json'
                    }
                });
            }
        });

        // Sidebar submenu toggle
        document.querySelectorAll('[data-bs-toggle="collapse"]').forEach(element => {
            element.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('data-bs-target'));
                if (target) {
                    target.classList.toggle('show');
                }
            });
        });
    </script>

    @stack('scripts')
</body>
</html>
