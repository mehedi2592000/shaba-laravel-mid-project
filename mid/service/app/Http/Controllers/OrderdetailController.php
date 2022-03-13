<?php

namespace App\Http\Controllers;

use App\Models\orderdetail;
use App\Http\Requests\StoreorderdetailRequest;
use App\Http\Requests\UpdateorderdetailRequest;
use Illuminate\Http\Request;


class OrderdetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreorderdetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreorderdetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\orderdetail  $orderdetail
     * @return \Illuminate\Http\Response
     */
    public function show(orderdetail $orderdetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\orderdetail  $orderdetail
     * @return \Illuminate\Http\Response
     */
    public function edit(orderdetail $orderdetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateorderdetailRequest  $request
     * @param  \App\Models\orderdetail  $orderdetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateorderdetailRequest $request, orderdetail $orderdetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\orderdetail  $orderdetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(orderdetail $orderdetail)
    {
        //
    }

    public function orderdetaillist(Request $request)
    {
        $searche=$request['search'] ?? "";
        if($searche!= ""){
            $orderdetaillist=orderdetail::all()->where('id',$searche);
            
        }
        else
        {

        $orderdetaillist=orderdetail::all();
        }
        return view('service.orderdetails.list')->with('orderdetaillist',$orderdetaillist);
    }

    public function orderdetailupdate(Request $request)
    {
        $orderlist=orderdetail::where('id', $request->id)->first();

    return view('service.orderdetails.orderdetailupdate')->with('orderlist',$orderlist);
    }   

    public function submitorderdetailupdateupdate(Request $request)
    {
        
        $provider=orderdetail::where('id', $request->id)->first();
            $provider->orderid=$request->orderid;
            
            $provider->unitprice=$request->unitprice;

            $provider->totalprice=$request->totalprice;
            $provider->servicetype=$request->servicetype;
            $provider->orderstatus=$request->orderstatus;
            $provider->providername=$request->providername;
            $provider->date=$request->date;
            $provider->customerid=$request->customerid;
            $provider->save();

        return redirect()->route('orderdetaillist');

    }

    public function customerDelete(Request $request){
        $provider=orderdetail::where('id', $request->id)->first();
        $provider->delete();

        return redirect()->route('orderdetaillist');

    }

    
}
