@extends('layouts.app')

@section('content')
<div class="container-fluid">
	 <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
     </div>

     <div class="row">       

	    <!-- Earnings (Monthly) Card Example -->
	    <div class="col-xl-3 col-md-6 mb-4">
	      <div class="card border-left-info shadow h-100 py-2">
	        <div class="card-body">
	          <div class="row no-gutters align-items-center">
	            <div class="col mr-2">
	              <div class="row no-gutters align-items-center">
	                <div class="col-auto">
	                	<form action="/tcoverflow/public/pertanyaan/tambah" class="inline">
							<button class="float-left btn btn-success" >Tambah Pertanyaan</button>
						</form>
	                </div>
	              </div>
	            </div>
	            <div class="col-auto">
	              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
</div>

<div class="container">
	
</div>

<div class="container">
 <h2>Pertanyaanku</h2>
	@foreach($pertanyaan as $p)
		<a href="">{{ $p->judul }}</a>
		<br>
	@endforeach
</div>
@endsection
