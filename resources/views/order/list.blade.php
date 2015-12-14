@extends('layout.master')

@section('content')

                <div class="row">
                    <div class="col-lg-12">
                        <h1>View All Orders</h1>
                        <h1><br></h1>
                        <div class="col-lg-10">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Customer ID</th>
                                    <th>Customer Name</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Type</th>
                                    <th>Price</th>
                                    <th>Weight</th>
                                    <th>Receipt Number</th>
                                    <th>With Press</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>        
					       		@foreach($orders as $order)	    	
                            	    <tr>
                                	    <td>{{ $order->id }}</td>
                                   	 	<td>{{ $order->customer_id }}</td>
                                   	 	<td>Customer Name</td>
                                 		<td>{{ $order->start_date }}</td>
                            	        <td>{{ $order->delivery_date }}</td>
                                	    <td>{{ $order->type }}</td>
                                    	<td>{{ $order->price }}</td>
                                   		<td>{{ $order->weight }}</td>
                              		    <td>{{ $order->receipt_no }}</td>
                                	    <td>{{ $order->with_press }}</td>
                            	        <td>{{ $order->status }}</td>
                            	        <td><a href="{{ route('order.edit', $order->id) }}" >Update</a></td>
                        	        </tr>
								@endforeach
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>

@stop
