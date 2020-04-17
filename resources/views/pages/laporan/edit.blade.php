@extends('partials.master',[$titlePage = 'Laporan', $activePage ='laporan'])
@section('content')
  <div class="content-wrapper">
  	<div class="col-md-6 offset-md-3">
  		@if($message = Session::get('danger'))
  			<div class="alert alert-danger">
  				<strong>{{$message}}</strong>
  			</div>
  		@endif
  		@foreach($pengaduans as $post)
  			<form action="{{ action('LaporanController@update', $pengaduan->id)}}" method="post">
  				@csrf
  				@method('PUT')
  				 <div class="form-group">
                  <input type="text" class="form-control form-control-user {{$errors->has('judul') ? 'is-invalid' : ''}}" id="judul" name="judul" placeholder="Judul" value="{{old('judul')}}" required>
                </div>
                <div class="form-group">
                  <select name="kategori_laporan" id='kategori_laporan' class="form-control form-control-user">
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
  			</form>
  	</div>	
  	

@endsection  

	

