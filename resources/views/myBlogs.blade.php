@extends('temp')

@section ('about')

<table class="table table-striped container" style='margin-top:50px;text-align:center'>


 <tr>
 <th>Title</th>
 <th>Body</th>
 
 
 </tr>

      @foreach ($blog as $row)
      <tr> 
     <td> {{$row['title']}}</td>
      
       <td>{{$row['body']}}</td>
       
       </tr>
       @endforeach
       
</table>
<a style='margin-left:100px' class='btn btn-primary' href='{{route("Design")}}'>add Blog</a>
@endsection