@extends('admin/layout')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
	  	<div class="row mb-2">
	    	<div class="col-sm-6">
	      		<h1 class="m-0">Add Berat</h1>
	    	</div>
	    	
	    	<div class="col-sm-6">
	      		<ol class="breadcrumb float-sm-right">
	        		<li class="breadcrumb-item"><a href="/home">Home</a></li>
	        		<li class="breadcrumb-item">Berat</li>
	        		<li class="breadcrumb-item active">Add</li>
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
                		<form action="/berat/save" method="POST" enctype="multipart/form-data">
	                		{{ csrf_field() }}
						  	<div class="form-group">
						    	<label>Tanggal :</label>
						    	<input type="date" class="form-control" name="tanggal" required="required">
						  	</div>

						  	<div class="form-group">
						    	<label>Berat Min :</label>
						    	<input type="number" min="0" class="form-control" name="berat_min" required="required">
						  	</div>
						  
						  	<div class="form-group">
						    	<label>Berat Max :</label>
						    	<input type="number" min="0" class="form-control" name="berat_max" required="required">
						  	</div>
						  
						  	<input type="submit" value="Simpan" class="btn btn-success pull-right">
						  	<a href="{{ URL::to('index') }}" class="btn btn-primary">Kembali</a>
						</form>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection