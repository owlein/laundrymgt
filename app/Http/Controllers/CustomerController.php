<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//         return view('customer.show');

	$search = \Request::get('search'); //<-- we use global request to get the param of URI
 
    $customers = Customer::where('name','like','%'.$search.'%')
        ->orderBy('name')
        ->paginate(20);
 
    return view('customer.list',array('customers' => $customers));
    
    //     $customers = Customer::all();
//       return view('customer.list', array('customers' => $customers));
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//         dd($request->all());
        
	    $input = $request->all();

    	Customer::create($input);

	    return redirect()->route('customer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    	$customer = Customer::find($id);
    	return view('customer.show', array('customer' => $customer));      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
	    $customer = Customer::find($id);
    	return view('customer.edit', array('customer' => $customer));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);

    	$this->validate($request, [
        	'name' => 'required',
	        'address' => 'required',
	        'contact_no' => 'required'
    	]);

    $input = $request->all();

    $customer->fill($input)->save();

    return redirect()->route('customer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::find($id);
		$customer->delete();
    	return redirect()->route('customer.index');
    }
}
