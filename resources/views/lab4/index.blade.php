@extends('temp')

@section ('about')

<table class="table table-striped container" style='margin-top:50px;text-align:center'>


 <tr>
 <th>Title</th>
 <th>Body</th>
 <th>Version</th>
 <th>Action<th>
 
 </tr>

      @foreach ($blogs as $row)
      <tr> 
     <td> {{$row['title']}}</td>
      
       <td>{{$row['body']}}</td>
       <td>{{$row['version']}}</td>
       <td>
       <a  class='btn btn-primary' href='{{route("blg.show",$row)}}'>Display</a>
       </td>
       </tr>
       @endforeach
       </table>
       <a style='margin-left:100px' class='btn btn-primary' href='{{route("blg.create")}}'>add Blog</a>
       @endsection