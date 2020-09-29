@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Postimet e Faqes se Pare</h1>
 @if(Session::has('msg'))
  <p class="mb-4 alert alert-success">{!! Session::has('msg') ? Session::get("msg") : '' !!}</p>
 @endif

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tabela e Postimeve te Faqes se Pare</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Titulli</th>
              <th>Lloji</th>
              <th>Data e Postimit</th>
              <th>Ndrysho</th>
              <th>Fshije</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Titulli</th>
              <th>Lloji</th>
              <th>Data e Postimit</th>
              <th>Ndrysho</th>
              <th>Fshije</th>
            </tr>
          </tfoot>
          <tbody>
            @foreach($posts as $post)
              <tr>
                <td>{{ $post->title }}</td>
                <td>{{ $post->category }}</td>
                <td>{{ $post->created_at }}</td>
                <td><a href="{{ route('post.edit', $post->id) }}" class="btn btn-info btn-block">Edit</a></td>
                <form action="{{ route('post.delete' , [$post->id]) }}" method="post">
                  @method('DELETE')
                  @csrf
                <td><button class="btn btn-danger btn-block">Delete</button></td>
                </form>
              
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->
@endsection