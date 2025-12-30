<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <x-admin.head>
        <title>{{ $title ?? 'Dashboard' }} - LPH Doa Bangsa Sukabumi</title>
    </x-admin.head>
</head>
<body>
    <div class="page">
        <!-- Sidebar -->
        <x-admin.sidebar />

        <!-- Main Wrapper -->
        <div class="page-wrapper">
            <!-- Navbar -->
            <x-admin.navbar />

            <!-- Page Content -->
            <div class="page-body">
                <div class="container-xl">
                    <!-- Page Header -->
                    @if(isset($header))
                    <div class="page-header d-print-none mb-3">
                        {{ $header }}
                    </div>
                    @endif

                    <!-- Session Status -->
                    @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <div class="d-flex">
                                <div>
                                    <i class="ti ti-check"></i>
                                </div>
                                <div class="ms-2">
                                    {{ session('status') }}
                                </div>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <!-- Session Success -->
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <div class="d-flex">
                                <div>
                                    <i class="ti ti-check"></i>
                                </div>
                                <div class="ms-2">
                                    <strong>Berhasil!</strong> {{ session('success') }}
                                </div>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <!-- Session Error -->
                    @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <div class="d-flex">
                                <div>
                                    <i class="ti ti-alert-triangle"></i>
                                </div>
                                <div class="ms-2">
                                    <strong>Error!</strong> {{ session('error') }}
                                </div>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <!-- Validation Errors -->
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <div class="d-flex">
                                <div>
                                    <i class="ti ti-alert-circle"></i>
                                </div>
                                <div class="ms-2">
                                    <h4 class="alert-title">Terdapat {{ $errors->count() }} kesalahan:</h4>
                                    <div class="text-secondary">
                                        <ul class="mb-0">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <!-- Main Content -->
                    {{ $slot }}
                </div>
            </div>

            <!-- Footer -->
            <footer class="footer footer-transparent d-print-none">
                <div class="container-xl">
                    <div class="row text-center align-items-center">
                        <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                            <ul class="list-inline list-inline-dots mb-0">
                                <li class="list-inline-item">
                                    @php
                                        $siteName = App\Models\Setting::get('site_name', 'LPH Doa Bangsa Sukabumi');
                                    @endphp
                                    Copyright &copy; {{ date('Y') }}
                                    <a href="{{ route('home') }}" class="link-secondary">{{ $siteName }}</a>.
                                    All rights reserved.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- Tabler Core JS -->
    <script src="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/js/tabler.min.js"></script>

    <!-- jQuery (for DataTables compatibility) -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- ApexCharts -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.45.0/dist/apexcharts.min.js"></script>

    <!-- DataTables -->
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

        // Auto-hide alerts after 5 seconds
        setTimeout(function() {
            $('.alert').fadeOut('slow');
        }, 5000);
    </script>

    @stack('scripts')
</body>
</html>
