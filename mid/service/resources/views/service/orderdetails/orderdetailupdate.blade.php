

<h2>create service provider</h2>

<form action="{{route('orderdetailupdate')}}" class="form-group" method="post">
    {{csrf_field()}}

    <lable for="" >id</lable>
        <input type="text" name="id"value="{{$orderlist->id}}"class="form-control"> 
        
    <br>
    

    <lable for="" >orderid</lable>
        <input type="text" name="orderid"value="{{$orderlist->orderid}}"class="form-control"> 
        @error('name')
        <span class="text-danger">{{$message}}</span>
        @enderror
    <br>
    
    <lable for="" >unitprice</lable>
        <input type="text" name="unitprice"value="{{$orderlist->unitprice}}"class="form-control"> 
        @error('phone')
        <span class="text-danger">{{$message}}</span>
        @enderror
    <br>
    <lable for="" >totalprice</lable>
        <input type="text" name="totalprice"value="{{$orderlist->totalprice}}"class="form-control"> 
        @error('email')
        <span class="text-danger">{{$message}}</span>
        @enderror
    <br>
    <lable for="" >servicetype</lable>
        <input type="text" name="servicetype"value="{{$orderlist->servicetype}}"class="form-control"> 
        @error('username')
        <span class="text-danger">{{$message}}</span>
        @enderror
    <br>
    <lable for="" >orderstatus</lable>
        <input type="text" name="orderstatus"value="{{$orderlist->orderstatus}}"class="form-control"> 
        @error('password')
        <span class="text-danger">{{$message}}</span>
        @enderror
    <br>

    <lable for="" >providername</lable>
        <input type="text" name="providername"value="{{$orderlist->providername}}"class="form-control"> 
        
    <br>
    <lable for="" >date</lable>
        <input type="text" name="date"value="{{$orderlist->date}}"class="form-control"> 
        
    <br>
    <lable for="" >customerid</lable>
        <input type="text" name="customerid"value="{{$orderlist->customerid}}"class="form-control"> 
        
    <br>

    <input type="submit" class="btn btn-primary" value="Add service provider">
</form>

