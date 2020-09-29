@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edito Postin</h1>
  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

      <!-- Project Card Example -->
      <div class="card shadow mb-4 border-left-primary">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Postimet</h6>
          @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
          @endif
        </div>
        <div class="card-body">
          <div class=" mb-4 font-weight-bold">
            <form action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
              <div class="form-group">
                <label for="exampleFormControlInput1">Titulli</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="title" placeholder="Ketu shkruhet titulli" value="{{$post->title}}">
              </div>
              
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Teksti</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="text" rows="3">{{ $post->text }}</textarea>
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Cfar po thumbon?</label>
                
                <select type="text" class="form-control" id="exampleFormControlSelect1" name="category">
                  @switch($post->category)
                      @case('Keqperdorimet')
                        <option value="4">E Pergjithshme</option>
                        <option selected value="1">Keqperdorimet</option>
                        <option value="2">Korrupsionin</option>
                        <option value="3">Partite Politike</option>
                          @break

                      @case('Korrupsionin')
                        <option value="4">E Pergjithshme</option>
                        <option value="1">Keqperdorimet</option>
                        <option selected value="2">Korrupsionin</option>
                        <option value="3">Partite Politike</option>
                          @break
                      
                      @case('Partite Politike')
                        <option value="4">E Pergjithshme</option>
                        <option value="1">Keqperdorimet</option>
                        <option value="2">Korrupsionin</option>
                        <option selected value="3">Partite Politike</option>
                          @break

                      @default
                        <option selected value="4">E Pergjithshme</option>
                        <option value="1">Keqperdorimet</option>
                        <option value="2">Korrupsionin</option>
                        <option value="3">Partite Politike</option>
                  @endswitch
                </select>
              </div>
              <div class="form-group">
                <label for="exampleFormControlFile1">Shto fotografi</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image" >
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="defaultCheck1" name="favorite" @if($post->favorite == 1) checked @endif>
                <label class="form-check-label" for="defaultCheck1">
                  Beje kete post favorite
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="defaultCheck2" name="firstpage" @if($post->firstpage == 1) checked @endif>
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