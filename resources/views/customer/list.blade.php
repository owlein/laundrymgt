@extends('layout.master')

@section('content')

                <div class="row">
                    <div class="col-lg-12">
                        <h1>View All Users</h1>
                        <h1><br></h1>
                        <div class="col-lg-10">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Contact Number</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>        
					       		@foreach($customers as $customer)	    	
                            	    <tr>
                                	    <td>{{ $customer->id }}</td>
                                   	 	<td>{{ $customer->name }}</td>
                                   	 	<td>{{ $customer->address }}</td>
                                 		<td>{{ $customer->contact_no }}</td>
                            	        <td><a href="{{ route('customer.edit', $customer->id) }}" >Update</a></td>
                        	        </tr>
								@endforeach
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>

@stop
