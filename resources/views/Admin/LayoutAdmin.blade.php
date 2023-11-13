<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Bina Kerja Education Solution</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/layout/css/style.css">
</head>

<body>
    <div id="main" class="d-flex vh-100">
        <div id="sidebar" class="bg-light shadow">
            <nav class="navbar navbar-dark bg-primary bg-gradient px-3">
                <span class="navbar-brand fw-bold">
                    <i class="bi bi-phone-vibrate-fill"></i>
                    SMK Bina Kerja
                </span>
            </nav>
            <div id="menu" class="mt-4 ">
                <ul class="nav flex-column ">
                    <li class="nav-item mb-1">
                        <a href="{{ url('#') }}" class="nav-link active">
                            <i class="bi bi-house-fill"></i>
                            Dashboard
                        </a>
                        <li class="nav-item mb-1">
                            <a href="{{ url('jjk') }}" class="nav-link ">
                                <i class="bi bi-file-earmark-text-fill"></i>
                                Data Siswa
                            </a>
                            <li class="nav-item mb-1">
                                <a href="{{ url('#') }}" class="nav-link ">
                                    <i class="bi bi-file-earmark-text-fill"></i>
                                    Data Petugas
                                </a>
                                <li class="nav-item mb-1">
                                    <a href="{{ url('#') }}" class="nav-link ">
                                        <i class="bi bi-file-earmark-text-fill"></i>
                                        Data Kelas
                                    </a>
                                    <li class="nav-item mb-1">
                                        <a href="{{ url('#') }}" class="nav-link ">
                                            <i class="bi bi-file-earmark-text-fill"></i>
                                            Data SPP
                                        </a>
                                        <li class="nav-item mb-1">
                                            <a href="{{ url('pp') }}" class="nav-link ">
                                                <i class="bi bi-file-earmark-text-fill"></i>
                                                Entri Transaksi Pembayaran
                                            </a>
                    </li>
                    <li class="nav-item mb-1">
                        <a href="{{ url('#') }}" class="nav-link ">
                            <i class="bi bi-file-earmark-text-fill"></i>
                            Generate Laporan
                        </a>
                </ul>
            </div>
        </div>
        <div id="center">
            <nav class="navbar navbar-dark bg-primary bg-gradient shadow-sm">
                <div class="container-fluid">
                    <span class="navbar-brand">@yield('title')</span>
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="{{ url('admin') }}" class="btn btn-danger">
                                Sign Out
                                <i class="bi bi-box-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="container-fluid mt-4">
                @yield('content')
            </div>
        </div>
    </div>


    <script src="/js/bootstrap.bundle.min.js"></script>
</body>

</html>
