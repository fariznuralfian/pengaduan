@extends('partials.master',[$titlePage = 'Laporan', $activePage ='laporan'])
@section('content')
  <div class="content-wrapper">


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <h1>Data Laporan</h1>
	      <div class="row">
	        <div class="col-12">
	          <div class="card">
	            <div class="card-header">
	              <h3 class="card-title"></h3>
	            </div>
	            <div class="card-body">
	              <table id="example2" class="table table-bordered table-hover">
	                <thead>
	                <tr>
	                  <th>No</th>
	                  <th>Judul</th>
	                  <th>Kategori Laporan</th>
	                  <th>Keluhan</th>
	                  <th>Lampiran Foto</th>
	                  <th>Tanggal Pengaduan</th>
	                  <th>Status</th>
	                  <th>Aksi</th>
	                </tr>
	                </thead>
	                <tbody>
	                	@php
	                		$i = 1;
	                	@endphp
	 					@foreach ($data as $d)
	 						<tr>
	 							<td>{{ $i }}</td>
	 							<td>{{ $d->judul }}</td>
	 							<td>{{ $d->kategori_laporan }}</td>
	 							<td>{{ $d->isi_laporan }}</td>
	 							<td>{{ $d->foto }}</td>
	 							<td>{{ $d->tgl_pengaduan }}</td>
	 							<td>{{ $d->status }}</td>
	 							<td>
	 								<div class="btn-group">
	 									<button class="btn btn-info">Edit</button>
										<button class="btn btn-danger">Hapus</button>
	 									{{-- <a href="javascript:viod(0)" onclick="($this).find('form').submit() " class="btn btn-danger"></a>
	 									<span class="fa fa_trash"></span>
	 									<form action="{{ route('aporan.destroy',$d->id)}}" method="POST">
	 										@csrf
	 										@method('DELETE')
	 									</form> --}}
	 								</div>
	 							</td>
	 						</tr>
	 						@php
	                		$i++;
	                	@endphp
	 					@endforeach
	                </tbody>
	              </table>
	            </div>
	          </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
@endsection  

	

