@extends('admin/layout')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
	  	<div class="row mb-2">
	    	<div class="col-sm-6">
	      		<h1 class="m-0">Detail Berat</h1>
	    	</div>
	    	
	    	<div class="col-sm-6">
	      		<ol class="breadcrumb float-sm-right">
	        		<li class="breadcrumb-item"><a href="/home">Home</a></li>
	        		<li class="breadcrumb-item">Berat</li>
	        		<li class="breadcrumb-item active">Detail</li>
	      		</ol>
	    	</div>
	  	</div>
	  	<hr/>
	</div>
</div>
<!-- /.content-header -->

<div class="content">
	<div class="container-fluid">
		<div class="row">
		    <div class="col-12">
		        <div class="card">
		            <div class="card-header">
		                <table id="example1" class="table table-striped table-bordered">
							@foreach($berat_data as $p)
							<tr>
								<th>Tanggal</th>
								<th>{{ $p->tanggal }}</th>
							</tr>
							<tr>
								<td>Max</td>
								<td>{{ $p->max }}</td>
							</tr>
							<tr>
								<td>Min</td>
								<td>{{ $p->min }}</td>
							</tr>
							<tr>
								<td>Perbedaan</td>
								<td>{{ $p->max - $p->min }}</td>
							</tr>
							@endforeach
						</table>
					  	<a href="{{ URL::to('index') }}" class="btn btn-primary">Kembali</a>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection