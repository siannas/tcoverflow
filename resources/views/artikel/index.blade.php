@extends('layouts.app')
@section('content')
 <div class="row">
    <div class="col">
      {{-- @if ($errors->any())
        @foreach ($errors->all() as $error)
          <div class="alert alert-danger" role="alert">
            {{ $error }}
          </div>
        @endforeach  
      @endif
      @if(session()->has('message'))
        <div class="alert alert-success" role="alert">
          <strong>Sukses!</strong> {{ session()->get('message') }}
        </div>
      @endif --}}
        <div class="card shadow">
          <div class="card-header border-0">
              <h3 class="mb-0">Artikel TC~OverFlow</h3>
          </div>
          <div class="container-fluid">
	 <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"></h1>
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
	                	<form action="" class="inline">
							<button class="float-left btn btn-success" >Buat Artikel </button>
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
          <div class="table-responsive col-md-12">
            
          </div>
        </div>
    </div>
  </div>
@endsection