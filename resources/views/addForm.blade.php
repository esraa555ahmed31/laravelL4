
@extends('temp')
@section ('about')
<div style='margin-top:40px'>
<form class='container my-2 p-3 border' action="/save" method="post">
   @csrf
  <div class="form-group">
    <label for="exampleInput1">Tiltle</label>
    <input type="text" class="form-control" id="exampleInput1"  name='title' placeholder="Enter title">
    
  </div>
  <div class="form-group">
    <label for="exampleInput2">Body</label>
    <input type="text" class="form-control" name='body' id="exampleInput2" placeholder="Enter Body Of Blog">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection