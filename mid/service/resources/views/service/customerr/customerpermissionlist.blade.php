@extends('layouts.app')
@section('content')
<br><br>
<div class="container">
    <div class="row-m-2">
        <form action="" class="col-9">
        <div class="form-group">
          <input type="search" name="search" id="" class="form-control" placeholder="input the id"/>
          
          <button class="btn btn-primary">search</button>
</div>
</form>
</div>
</div>

<table class="table table-border">
    <tr>
        <th>id</th>
        <th>name</th>

        <th>email </th>
        <th>phone </th>
        <th>username </th>
        <th>password </th>
        <th>status </th> 
        
    </tr>
    @foreach($customerlist as $customerlist)
    <tr>
        <td>{{$customerlist->id}}</td>
        <td>{{$customerlist->name}}</td>
       
        <td>{{$customerlist->email}}</td>
        <td>{{$customerlist->phone}}</td>
        <td>{{$customerlist->username}}</td>
        <td>{{$customerlist->password}}</td>
    <td>{{$customerlist->status}}</td>
        
        <td><a href="/customerupdatepermission/{{$customerlist->id}}/{{$customerlist->name}}">permission</a></td>

        

</tr>
@endforeach

</table>
@endsection