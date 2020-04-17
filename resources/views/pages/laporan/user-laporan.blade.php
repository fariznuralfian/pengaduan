
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pengaduan Masyarakat</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body style="background-color:#0091EA;">
     
  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h4 class="h4 text-gray-900 mb-4">Pengaduan<span style="color: #0091EA">Masyarakat</span></h1>
                <h5 class="h5 text-gray-900 mb-4">APLIKASI PELAYANAN PENGANDUAN MASYARAKAT</h5>
                <div class="desc">
                    Selamat Datang di PENGADUAN ONLINE MASYARAKAT disini anda bisa, melaporkan keluh kesah anda
                </div>
                <br>
              <form action="{{ route('laporan.store')}}" method="POST">

                @csrf

                <div class="form-group">
                  <input type="text" class="form-control form-control-user {{$errors->has('judul') ? 'is-invalid' : ''}}" id="judul" name="judul" placeholder="Judul" value="{{old('judul')}}" required>
                </div>
                <div class="form-group">
                  <select name="kategori_laporan" id="kategori_laporan" class="form-control form-control-user">
                      <option value="kriminal">Kriminal </option>
                      <option value="teknologi">Teknologi</option>
                      <option value="lingkungan">Lingkungan</option>
                      <option value="sosial">Sosial</option>
                      <option value="politik">Politik</option>
                      <option value="ekonomi">Ekonomi</option>
                  </select>
                </div>
                <div class="form-group">
                  <textarea type="text" name="isi_laporan" class="form-control form-control-user" id="materialContactFormMessage" placeholder="Keluhan" value="{{old('isi_laporan')}}"></textarea>
                </div>
                <div class="form-group">
                  <input type="file" class="form-control form-control-user" id="foto" name="foto" required="" accept=".jpg, .jpeg, .png  " onchange="previewFile()" value="{{old('foto')}}">
                </div>
                <div class="form-group">
                  <img src="" alt="Image preview.." height="200" id="img">
                </div>
                <input class="btn btn-user btn-block" type="submit" style="background-color:#0091EA; color: white" value="Lapor">
                </input>
                <hr>
              </form>
              <hr>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>

