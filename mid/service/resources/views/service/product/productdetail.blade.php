@extends('layouts.app')
@section('content')
<br><br>


<table class="table table-border">
    <tr>
        <th>id</th>
        <th>order id</th>
        <th>customer id</th>
        <th>unitprice</th>
        <th>totalprice </th>
        <th>servicetype </th>
        <th>orderstatus </th>
        <th>providername </th>
        <th>date</th>
      <!--  <th>status </th> -->
        
    </tr>
    @foreach($orderdetaillist as $orderdetaillist)
    <tr>
        <td>{{$orderdetaillist->id}}</td>
        <td>{{$orderdetaillist->orderid}}</td>
        <td>{{$orderdetaillist->customerid}}</td>
        <td>{{$orderdetaillist->unitprice}}</td>
        <td>{{$orderdetaillist->totalprice}}</td>
        <td>{{$orderdetaillist->servicetype}}</td>
        <td>{{$orderdetaillist->orderstatus}}</td>
        <td>{{$orderdetaillist->providername}}</td>
        <td>{{$orderdetaillist->date}}</td>

       
        
    
</tr>
@endforeach

</table>
@endsection