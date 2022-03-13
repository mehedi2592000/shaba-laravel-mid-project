<?php

namespace App\Http\Controllers;

use App\Models\employee;
use App\Http\Requests\StoreemployeeRequest;
use App\Http\Requests\UpdateemployeeRequest;
use Illuminate\Support\Facades\Cookie;

use Illuminate\Http\Request;

use Session;

class EmployeeController extends Controller
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
     * @param  \App\Http\Requests\StoreemployeeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreemployeeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateemployeeRequest  $request
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateemployeeRequest $request, employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(employee $employee)
    {
        //
    }
/*
    public function employeelist()
    {
        

        $employeelist=employee::all();

        return view('service.employeelist')->with('employeelist',$employeelist);
    }
*/
    public function employeelist()
    {
        $id=Session::get('user');
        
        $users=employee::all()->where('id',$id);
        
        return view('service.employeelist')->with('users',$users);

    }

    public function employeeupdate(Request $request)
    {
        $cu=employee::where('id', $request->id)->first();

    return view('service.employee.employeeupdate')->with('cu',$cu);
    }   

    public function submitemployeeupdate(Request $request)
    {
        
        $provider=employee::where('id', $request->id)->first();
            $provider->name=$request->name;
            
            $provider->phone=$request->phone;

            $provider->nid=$request->nid;
            $provider->username=$request->username;
            $provider->password=$request->password;
            $provider->status=$request->status;
            $provider->save();

        return redirect()->route('employeelist');

    }
    
    public function Dashboard()
    {
        return view('Dashboard');
    }

    
}
