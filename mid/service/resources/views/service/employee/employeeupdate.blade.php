
@extends('layouts.app')
@section('content')

<h2>my profile update</h2>

<form action="{{route('employeeupdate')}}" class="form-group" method="post">
    {{csrf_field()}}

    <lable for="" >id</lable>
        <input type="text" name="id"value="{{$cu->id}}"class="form-control"> 
        
    <br>
    

    <lable for="" >Name</lable>
        <input type="text" name="name"value="{{$cu->name}}"class="form-control"> 
        @error('name')
        <span class="text-danger">{{$message}}</span>
        @enderror
    <br>
    
    <lable for="" >phone</lable>
        <input type="text" name="phone"value="{{$cu->phone}}"class="form-control"> 
        @error('phone')
        <span class="text-danger">{{$message}}</span>
        @enderror
    <br>
    <lable for="" >nid</lable>
        <input type="text" name="nid"value="{{$cu->nid}}"class="form-control"> 
        @error('nid')
        <span class="text-danger">{{$message}}</span>
        @enderror
    <br>
    <lable for="" >username</lable>
        <input type="text" name="username"value="{{$cu->username}}"class="form-control"> 
        @error('username')
        <span class="text-danger">{{$message}}</span>
        @enderror
    <br>
    <lable for="" >password</lable>
        <input type="text" name="password"value="{{$cu->password}}"class="form-control"> 
        @error('password')
        <span class="text-danger">{{$message}}</span>
        @enderror
    <br>

    <lable for="" >status</lable>
        <input type="text" name="status"value="{{$cu->status}}"class="form-control"> 
        
    <br>


    <input type="submit" class="btn btn-primary" value="Add update">
</form>

@endsection