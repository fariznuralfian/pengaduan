
<html>
    <head>
    <title>Pengaduan Masyarakat</title>
    <link href="/vendor/assets/images/Logopengeduan.png" rel="icon">
    <link rel="stylesheet" href="/vendor/css/newsplash.css">
    <link rel="stylesheet" href="/vendor/css/bootstrap.min.css">
    <script src="/vendor/js/jquery.min.js"></script>
    <script src="/vendor/js/popper.min.js"></script>
    <script src="/vendor/js/bootstrap.min.js"></script>
    <link  src="/css/costum.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    </style>
    </head>
    <body>
        <div class="splashleft">
            <img src="/vendor/assets/images/Logopengeduan.png" alt="Web Logo" width="auto">
        </div>
        <div class="splashright" >
            <div class="splashtext">
                <h1>Pengaduan<span style="color: #0091EA">Masyarakat</span></h1>
                <h5>APLIKASI PELAYANAN PENGANDUAN MASYARAKAT</h5>
                <div class="desc">
                    Selamat Datang di PENGADUAN ONLINE MASYARAKAT disini anda bisa, <p>melaporkan keluh kesah anda</p>
                    Silahkan Register, belum punya akun? silahkan 
                    <a href="{{ route('getLogin') }}" >
                        Login
                    </a>
                </div>
            </div>
            <div class="splashlogin">
                <div class="splashform">

                    <form action="{{route('postRegister')}}" method="post">
                        @csrf
                        @include('alert')
                       
                        <span class="txt1 p-b-11">
                        Nomor Induk Kependudukan
                        </span>
                            <div class="wrap-input100 validate-input m-b-36 ">
                            <input class="input100 @error('nik') is-invalid @enderror" type="nik" name="nik"  id="nik"  value="{{ old('nik') }}" autocomplete="nik"  autofocus>
                            <span class="focus-input100"></span>
                        </div>

                        <span class="txt1 p-b-11">
                        Nama
                        </span>
                            <div class="wrap-input100 validate-input m-b-36 ">
                            <input class="input100 @error('nama') is-invalid @enderror" type="nama" name="nama"  id="nama"  value="{{ old('nama') }}" autocomplete="nama"  autofocus>
                            <span class="focus-input100"></span>
                        </div>

                        <span class="txt1 p-b-11">
                        No.Telp
                        </span>
                            <div class="wrap-input100 validate-input m-b-36 ">
                            <input class="input100 @error('telp') is-invalid @enderror" type="telp" name="telp"  id="telp"  value="{{ old('telp') }}" autocomplete="telp"  autofocus>
                            <span class="focus-input100"></span>
                        </div>

                        <span class="txt1 p-b-11">
                        Username
                        </span>
                            <div class="wrap-input100 validate-input m-b-36 ">
                            <input class="input100 @error('username') is-invalid @enderror" type="username" name="username"  id="username"  value="{{ old('username') }}" autocomplete="username"  autofocus>
                            <span class="focus-input100"></span>
                        </div>

                        <span class="txt1 p-b-11">
                        Password
                        </span>
                            <div class="wrap-input100 validate-input m-b-36 ">
                            <input class="input100 @error('password') is-invalid @enderror" type="password" name="password"  id="password" autocomplete="username"  autofocus>
                            <span class="focus-input100"></span>
                        </div>

                        <span class="txt1 p-b-11">
                        Konfirmasi Password
                        </span>
                            <div class="wrap-input100 validate-input m-b-36" >
                            <input class="input100" type="password" id="password" name="password_confirmation" autocomplete="password" autofocus>
                            <span class="focus-input100"></span>
                        </div>
                        

                        <br>
                        <button style="margin-left: 265px" type="submit" class="btn btn-primary">Daftar</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>