@extends('admin/layout')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
	  	<div class="row mb-2">
	    	<div class="col-sm-6">
	      		<h1 class="m-0">Index</h1>
	    	</div>
	    	
	    	<div class="col-sm-6">
	      		<ol class="breadcrumb float-sm-right">
	        		<li class="breadcrumb-item"><a href="/home">Home</a></li>
	        		<li class="breadcrumb-item active">Index</li>
	      		</ol>
	    	</div>
	  	</div>
	  	<hr/>
	</div>
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
	<div class="container-fluid">
		<div class="row">
		    <div class="col-12">
		    	@if(session()->has('message'))
				    <div class="alert alert-info">
				        {{ session()->get('message') }}
				    </div>
				@endif

				@if(session()->has('message_error'))
				    <div class="alert alert-danger">
				        {{ session()->get('message_error') }}
				    </div>
				@endif

		        <div class="card">
		            <div class="card-header">
		            	<div style="float:right;padding-bottom: 20px;"><a href="/berat/add"> + Tambah Data Berat Baru</a></div>
		            </div>

		            <div class="card-body table-responsive p-0">
		                <table id="example1" class="table table-striped table-bordered">
							<tr>
								<th>Tanggal</th>
								<th>Max</th>
								<th>Min</th>
								<th>Perbedaan</th>
								<th>Action</th>
							</tr>
							@foreach($berat_data as $p)
							<tr>
								<td>{{ $p->tanggal }}</td>
								<td>{{ $p->max }}</td>
								<td>{{ $p->min }}</td>
								<td>{{ $p->max - $p->min }}</td>
								<td>
									<a href="/berat/edit/{{ $p->id }}">Edit</a>
									|
									<a href="/berat/show/{{ $p->id }}">Lihat</a>
								</td>
							</tr>
							@endforeach
							<tr>
								<td><b>Rata-rata</b></td>
								<td><b>{{ round($rata_rata->avg_max,2) }}</b></td>
								<td><b>{{ round($rata_rata->avg_min,2) }}</b></td>
								<td><b>{{ round($rata_rata->avg_perbedaan,2) }}</b></td>
								<td></td>
							</tr>
						</table>
		            </div>
		        </div>
		    </div>
		</div>
	</div>
</div>
@endsection