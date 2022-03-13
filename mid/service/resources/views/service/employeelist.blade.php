@extends('layouts.app')
@section('content')
<table class="table table-border">
{{csrf_field()}}

    
    @foreach($users as $user)
    <tr>
        <th>id</th>
        <td>{{$user->id}}</td>
    </tr>
    <tr>
        <th>name</th>
        <td>{{$user->name}}</td>
    </tr>
    <tr>
        <th>nid</th>
        <td>{{$user->nid}}</td>
    </tr>
    <tr>
        <th>phone</th>
        <td>{{$user->phone}}</td>
    </tr>
    <tr>
        <th>username</th>
        <td>{{$user->username}}</td>
    </tr>
    <tr>
        <th>password</th>
        <td>{{$user->password}}</td>
    </tr>
    <tr>
        <th>status</th>
        <td>{{$user->status}}</td>
</tr>
    <tr>
        <td><a href="/employeeupdate/{{$user->id}}/{{$user->name}}">update</a></td>
</tr>

</tr>
@endforeach

</table>
@endsection
