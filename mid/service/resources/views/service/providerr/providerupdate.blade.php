

<h2>create service provider</h2>

<form action="{{route('Servicproviderupdate')}}" class="form-group" method="post">
    {{csrf_field()}}

    <lable for="" >id</lable>
        <input type="text" name="id"value="{{$customer->id}}"class="form-control"> 
        
    <br>
    

    <lable for="" >Name</lable>
        <input type="text" name="name"value="{{$customer->name}}"class="form-control"> 
        @error('name')
        <span class="text-danger">{{$message}}</span>
        @enderror
    <br>
    <lable for="" >nid</lable>
        <input type="text" name="nid"value="{{$customer->nid}}"class="form-control"> 
        @error('nid')
        <span class="text-danger">{{$message}}</span>
        @enderror
    <br>
    
    <lable for="" >phone</lable>
        <input type="text" name="phone"value="{{$customer->phone}}"class="form-control"> 
        @error('phone')
        <span class="text-danger">{{$message}}</span>
        @enderror
    <br>
    <lable for="" >email</lable>
        <input type="text" name="email"value="{{$customer->email}}"class="form-control"> 
        @error('email')
        <span class="text-danger">{{$message}}</span>
        @enderror
    <br>
    <lable for="" >username</lable>
        <input type="text" name="username"value="{{$customer->username}}"class="form-control"> 
        @error('username')
        <span class="text-danger">{{$message}}</span>
        @enderror
    <br>
    <lable for="" >password</lable>
        <input type="text" name="password"value="{{$customer->password}}"class="form-control"> 
        @error('password')
        <span class="text-danger">{{$message}}</span>
        @enderror
    <br>

    <lable for="" >status</lable>
        <input type="text" name="status"value="{{$customer->status}}"class="form-control"> 
        
    <br>


    <input type="submit" class="btn btn-primary" value="Add service provider">
</form>

