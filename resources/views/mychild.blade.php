@extends('mymain/mymain')
@section('content')


@foreach($arsalan as $value)
  <div class="col-sm-3">
      <p>{{$value->title}}<small>{{$value->created_at}}</small></p>

      <p>{{$value->body}}<small>{{$value->created_at}}</small></p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
@endforeach    
    <div class="col-sm-3"> 
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
  </div>
</div><br>


<div class="container-fluid bg-3 text-center">    
 </div><br><br>
@endsection