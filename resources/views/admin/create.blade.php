@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Krijo Nje Post</h1>
  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

      <!-- Project Card Example -->
      <div class="card shadow mb-4 border-left-primary">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Postimet</h6>
        </div>
        <div class="card-body">
          <div class=" mb-4 font-weight-bold">

            <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
            @csrf
              <div class="form-group">
                <label for="exampleFormControlInput1">Titulli</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="title" placeholder="Ketu shkruhet titulli">
              </div>
              
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Teksti</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="text" rows="3"></textarea>
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Cfar po thumbon?</label>
                <select type="text" class="form-control" id="exampleFormControlSelect1" name="category">
                  <option selected>E Pergjithshme</option>
                  <option value="1">Keqperdorimet</option>
                  <option value="2">Korrupsionin</option>
                  <option value="3">Partite Politike</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleFormControlFile1">Shto fotografi</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="defaultCheck1" name="favorite">
                <label class="form-check-label" for="defaultCheck1">
                  Beje kete post favorite
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="defaultCheck2" name="firstpage">
                <label class="form-check-label" for="defaultCheck2">
                  Beje kete post te dal ne faqe te pare
                </label>
              </div>
              <button type="submit" class="btn btn-primary mt-2 "><span class="px-2">Postoje</span></button>
            </form>
          </div>
          
        </div>
      </div>

      

    </div>

    
  </div>

</div>
@endsection('content')