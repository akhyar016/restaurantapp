<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CustomerRequest;
use App\Model\Customers;
use Auth;
use Session;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customers::all();
        return view('customer_view')
            ->with(compact('customers'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreate(CustomerRequest $request)
    {
        //return "hello";
        $customer = new Customers;
        $customerName = ucfirst(strtolower($request->name)); 
        $customer->name = $customerName;
        $customer->phone = $request->caller_id;
        $customer->address = $request->address;

        $customer->save();

        Session:: flash('success', ' Customer Enrolled Successfully !!');

        return redirect()->route('customer');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customers::find($id);
        return view('customer_edit')
            ->with(compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CustomerRequest $request, $id)
    {
        $item = Customers::find($id);
        $itemName = ucfirst(strtolower($request->name));
        $item->name = $itemName;
        $item->phone = $request->caller_id;
        $item->address = $request->address;

        $item->save();
        
        Session:: flash('success', ' Customer Updated Successfully !!');

        return redirect()->route('customer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $customer = Customers::find($id);
        $customer->delete();

        Session:: flash('success', ' Customer Deleted Successfully !!');

        return redirect()->route('customer');
    }
}
