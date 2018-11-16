@extends('main/main')
@section('content')

<div class="container text-center">
  <h3>THE BAND</h3>
  <p><em>We love music!</em></p>
  <p>We have created a fictional band website. Lorem ipsum..</p>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <p><strong>Name</strong></p><br>
      <img src="bandmember.jpg" alt="Random Name" width="255" height="255">
    </div>
    <div class="col-sm-4">
      <p><strong>Name</strong></p><br>
      <img src="bandmember.jpg" alt="Random Name" width="255" height="255">
    </div>
    <div class="col-sm-4">
      <p><strong>Name</strong></p><br>
      <img src="bandmember.jpg" alt="Random Name" width="255" height="255">
    </div>
  </div>
</div>

@endsection()