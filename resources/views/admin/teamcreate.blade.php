@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Shto Pjestar Ne Ekip</h1>
  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

      <!-- Project Card Example -->
      <div class="card shadow mb-4 border-left-primary">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Shto Nje Pjestar Te Ekipit</h6>
        </div>
        <div class="card-body">
          <div class=" mb-4 font-weight-bold">

            <form action="{{ route('team.store') }}" method="post" enctype="multipart/form-data">
            @csrf
              <div class="form-group">
                <label for="exampleFormControlInput1">Emri</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Blerim Iseni">
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Roli</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="role" placeholder="Drejtor Ekzekutiv">
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Pershkrimi</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
              </div>
              
              <div class="form-group">
                <label for="exampleFormControlInput1">Linku i Facebookut</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="facebook" placeholder="www.facebook.com/filanfisteku">
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Linku i Instagramit</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="instagram" placeholder="www.instagram.com/filanfisteku">
              </div>
              <div class="form-group">
                <label for="exampleFormControlFile1">Fotografia</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
              </div>
              <button type="submit" class="btn btn-primary mt-2 "><span class="px-2">Krijo</span></button>
            </form>
          </div>
          
        </div>
      </div>

      

    </div>

    
  </div>

</div>
@endsection('content')