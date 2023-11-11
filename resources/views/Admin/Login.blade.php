<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Admin</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap-icons.min.css">
    <style>
        #main .card {
            max-width: 400px;
        }
    </style>
</head>

<body>
    <div id="main" class="d-flex vh-100 align-items-center text-bg-primary">
        <div class="container-fluid">
            <div class="card mx-auto text-bg-primary border-0">
                <div class="card-body">
                    <h1 class="h1">SMK BINA KERJA PURWAKARTA !!</h1>
                    <h3 class="h4 mb-4 ">Selamat Datang Kembali</h3>
                    <form action="{{ url('IndexAdmin') }}" method="get" class="mt-5">
                        @csrf
                        <div class="mb-3">
                            <input type="text" id="username" name="username" class="form-control py-2"
                                placeholder="Username">
                        </div>
                        <div class="mb-3">
                            <input type="password" id="password" name="password" class="form-control py-2"
                                placeholder="Password">
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-outline-light form-control">Sign in</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
