
@extends('layouts.app')
@section('content')
<h2>create service provider</h2>

<form action="{{route('addServicprovider')}}" class="form-group" method="post">
    {{csrf_field()}}
    

    <lable for="" >Name</lable>
        <input type="text" name="name"value="{{old('name')}}"class="form-control"> 
        @error('name')
        <span class="text-danger">{{$message}}</span>
        @enderror
    <br>
    <lable for="" >NID</lable>
        <input type="text" name="nid"value="{{old('nid')}}"class="form-control"> 
        @error('nid')
        <span class="text-danger">{{$message}}</span>
        @enderror
    <br>
    <lable for="" >phone</lable>
        <input type="text" name="phone"value="{{old('phone')}}"class="form-control"> 
        @error('phone')
        <span class="text-danger">{{$message}}</span>
        @enderror
    <br>
    <lable for="" >email</lable>
        <input type="text" name="email"value="{{old('email')}}"class="form-control"> 
        @error('email')
        <span class="text-danger">{{$message}}</span>
        @enderror
    <br>
    <lable for="" >username</lable>
        <input type="text" name="username"value="{{old('username')}}"class="form-control"> 
        @error('username')
        <span class="text-danger">{{$message}}</span>
        @enderror
    <br>
    <lable for="" >password</lable>
        <input type="text" name="password"value="{{old('password')}}"class="form-control"> 
        @error('password')
        <span class="text-danger">{{$message}}</span>
        @enderror
    <br>



    <input type="submit" class="btn btn-primary" value="Add service provider">
</form>

@endsection