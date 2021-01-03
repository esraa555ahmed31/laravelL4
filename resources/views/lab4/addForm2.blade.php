
@extends('temp')
@section ('about')
<div style='margin-top:40px'>
<h3><center>Add New Blog</center><h3>
<form class='container my-2 p-3 border' action="{{route('blg.store')}}" method="post">
   @csrf
  <div class="form-group">
    <label for="exampleInput1">Tiltle</label>
    <input type="text" class="form-control" id="exampleInput1"  name='title' placeholder="Enter title">
    
  </div>
  <div class="form-group">
    <label for="exampleInput2">Body</label>
    <input type="text" class="form-control" name='body' id="exampleInput2" placeholder="Enter Body Of Blog">
  </div>
  <div class="form-group">
    <label for="exampleInput3">Version</label>
    <input type="number" class="form-control" name='version' id="exampleInput3" placeholder="Enter version Of Blog">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection