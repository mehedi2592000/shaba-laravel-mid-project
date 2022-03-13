<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Http\Requests\StoreproductRequest;
use App\Http\Requests\UpdateproductRequest;
use Illuminate\Http\Request;

use App\Models\orderdetail;

class ProductController extends Controller
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
     * @param  \App\Http\Requests\StoreproductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreproductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateproductRequest  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateproductRequest $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
    }

    public function productlist()
    {
         $productlist=product::all();
         return view('home')->with('productlist',$productlist);
         
    }

    public function productlistlist()
    {
        $productlist=product::all();
        return view('service.product.list')->with('productlist',$productlist);
       
    }
    
    public function productdetail(Request $request)
    {
        $t=product::where('id',$request->id)->first();

        $orderdetaillist= $t->assignedteacher();
            return view('service.product.productdetail')->with('orderdetaillist',$orderdetaillist);
    }
    
    public function productadd()
    {
        
        return view('service.product.productadd');
    }
    

    public function productaddsubmit(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $p = new product();
        $p->name=$request->name;
        $p->price=$request->price;
        $p->message=$request->message;
    
        if($request->hasFile('image')){
            $imageName = time()."_".$request->file('image')->getClientOriginalName();
            // return $imageName;
            $request->image->move(public_path('images'), $imageName);
            $p->image=$imageName;
            $p->save();
            return redirect(route('productlist'));
        }
        
        /* Store $imageName name in DATABASE from HERE */
        return "No file";
    }

}
