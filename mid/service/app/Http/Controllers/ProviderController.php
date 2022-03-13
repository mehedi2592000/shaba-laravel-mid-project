<?php

namespace App\Http\Controllers;

use App\Models\provider;
use App\Http\Requests\StoreproviderRequest;
use App\Http\Requests\UpdateproviderRequest;

use Illuminate\Http\Request;

class ProviderController extends Controller
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
     * @param  \App\Http\Requests\StoreproviderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreproviderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function show(provider $provider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function edit(provider $provider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateproviderRequest  $request
     * @param  \App\Models\provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateproviderRequest $request, provider $provider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function destroy(provider $provider)
    {
        //
    }

    public function Servicprovider()
    {
        

        $Servicprovider=provider::all();

        return view('service.providerr.ServiceReges')->with('Servicprovider',$Servicprovider);
    }

    public function invalidServicprovider()
    {
        

        $Servicprovider=provider::all()->where('status',"inactive");

        return view('service.providerr.invalidServicprovider')->with('Servicprovider',$Servicprovider);
    }

    public function addServicprovider()
    {
        return view('service.providerr.providercreat');
    }

    
    

    public function submitedaddServicprovider(Request $request)
    {
        $validate=$request->validate([
            'name'=>'required',
            'nid'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'username'=>'required',
            'password'=>'required',

            
            
        ],
        [
            'name.required'=>'please name correctlay',
            'name.min'=>'4 chak must be'
        ],
        [
            'nid.required'=>'please give full nid number',
            'nid.min'=>'8 chak must be'
        ],
        [
            'phone.required'=>'please give phone correctlay',
            'phone.min'=>'11 chak must be'
        ],
        [
            'email.required'=>'please email correctlay',
            'name.min'=>'4 chak must be'
        ],
        [
            'username.required'=>'please give username correctlay',
            'username.min'=>'3 chak must be'
        ],
        [
            'password.required'=>'please give proper password correctlay',
            'password.min'=>'3 chak must be'
        ]
            
    );
            $provider=new provider();
            $provider->name=$request->name;
            $provider->nid=$request->nid;
            $provider->phone=$request->phone;

            $provider->email=$request->email;
            $provider->username=$request->username;
            $provider->password=$request->password;
            $provider->status='active';
            $provider->save();

            return $provider;

        return "ok";
       
    }
    

    public function Servicproviderupdate(Request $request)
    {
    $customer=provider::where('id', $request->id)->first();

    return view('service.providerr.providerupdate')->with('customer',$customer);
    }   

    public function submitServicproviderupdate(Request $request)
    {
  
            
        $customer=provider::where('id', $request->id)->first();
        
        
        $customer->name= $request->name;
        
        $customer->nid=$request->nid;

        $customer->email=$request->email;
        $customer->username=$request->username;
        $customer->password=$request->password;
        $customer->status=$request->status;
        $customer->phone=$request->phone;
        $customer->save();

        return redirect()->route('Servicprovider');

        
        
        

    }

    public function providerDelete(Request $request){
        $provider=provider::where('id', $request->id)->first();
        $provider->delete();

        return redirect()->route('Servicprovider');

    }


}
