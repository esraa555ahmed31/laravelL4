@extends('temp')

@section ('about')

<table class="table table-striped container" style='margin-top:50px;text-align:center'>


 <tr>
 <th>Title</th>
 <th>Body</th>
 <th>Version</th>
 
 </tr>

      <tr> 
     <td> {{$blog['title']}}</td>
      
       <td>{{$blog['body']}}</td>
       <td>{{$blog['version']}}</td>
       
       </tr>
      
       </table>
       
       @endsection