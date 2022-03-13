
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

        <th>comment </th>
        <th>money </th>
        <th>picture </th>
        
      <!--  <th>status </th> -->
        
    </tr>
    @foreach($productlist as $customerlist)
    <tr>
        <td>{{$customerlist->id}}</td>
        <td>{{$customerlist->name}}</td>
       
        <td>{{$customerlist->message}}</td>
        <td>{{$customerlist->price}}</td>
        <td>{{$customerlist->image}}</td>
        <td><a href="/productdetail/{{$customerlist->id}}/{{$customerlist->name}}">Details</a></td>
</tr>
@endforeach

</table>
@endsection