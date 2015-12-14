<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Order;
use App\Customer;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$search = \Request::get('search'); //<-- we use global request to get the param of URI
//  
    	$orders = Order::where('id','like','%'.$search.'%')
        ->orderBy('id')
        ->paginate(20);
        
//         $orders = Order::with('customer');

//         return Order::make('order.show', compact('orders'));
        
//  $orders = Order::all();
    	return view('order.list',array('orders' => $orders));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
		$customers = Customer::all();
//     	return view('order.create',compact('customers', $customers));
    	return view('order.create',array('customers' => $customers));
//         return view('order.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
	    $input = $request->all();

    	Order::create($input);

	    return redirect()->route('order.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    	$order = Order::find($id);
    	return view('order.show', array('order' => $order));     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
	    $order = Order::find($id);
    	return view('order.edit', array('order' => $order));
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
        $order = Order::find($id);

//     	$this->validate($request, [
//         	'name' => 'required',
// 	        'address' => 'required',
// 	        'contact_no' => 'required'
//     	]);

	    $input = $request->all();

    	$order->fill($input)->save();

	    return redirect()->route('order.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::find($id);
		$order->delete();
    	return redirect()->route('order.index');
    }
}
