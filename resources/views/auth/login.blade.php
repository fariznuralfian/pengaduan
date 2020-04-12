
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
    <link  href="{{asset('css/app.css')}}">
    <link  href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">


      </head>
    <body>
        <div class="splashleft">
            <img src="/vendor/assets/images/Logopengeduan.png" alt="Web Logo" width="auto">
        </div>
        <div class="splashright" >
            <div class="splashtext">
                <h1>Pengaduan<span style="color: #0091EA">Masyarakat</span></h1>
                <!-- <form action="" method="" > -->
                <h5>APLIKASI PELAYANAN PENGANDUAN MASYARAKAT</h5>
                <div class="desc">
                    Selamat Datang di PENGADUAN ONLINE MASYARAKAT disini anda bisa, <p>melaporkan keluh kesah anda</p>
                    Silahkan Login, Belum punya akun? silahkan 
                    <a href="{{ url('/register') }}" >
                        Register
                    </a>
                </div>
            </div>
            <div class="splashlogin">
                <div class="splashform">
                    <form action="{{ route('postLogin') }}" method="POST">

                        @csrf
                        @method('POST')
                        @include('alert')

                    <span class="txt1 p-b-11">
                        Username
                    </span>
                        <div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required" required>
                        <input class="input100" type="text" name="username"  id="username">
                        <span class="focus-input100"></span>
                    </div>
                    <span class="txt1 p-b-11">
                        Password
                    </span>
                    <div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required" required>
                        <input class="input100" type="password" name="password" id="pass" >
                        <span class="focus-input100"></span>
                    </div>
                        <button style="margin-left: 270px" type="submit" class="btn btn-primary">Masuk</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>