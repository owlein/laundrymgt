@extends('layout.master')

@section('content')
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Edit User</h1>
                        <h1><br></h1>
    
					    <div class="form-horizontal">
						{!! Form::model($customer, [ 'method' => 'PATCH', 'route' => ['customer.update', $customer->id]]) !!}

							<div class="form-group">
						    	{!! Form::label('name', 'Name :', ['class' => 'col-sm-2 control-label']) !!}
							    <div class="col-sm-8">
						    	{!! Form::text('name', $customer->name, ['class' => 'form-control']) !!}
						    	</div>
							</div>
						
							<div class="form-group">
							    {!! Form::label('address', 'Address :', ['class' => 'col-sm-2 control-label']) !!}
							    <div class="col-sm-8">
						    	{!! Form::text('address', $customer->address, ['class' => 'form-control']) !!}
						    	</div>
							</div>
	
							<div class="form-group">
							    {!! Form::label('contact_no', 'Contact Number :', ['class' => 'col-sm-2 control-label']) !!}
							    <div class="col-sm-8">
						    	{!! Form::text('contact_no', $customer->contact_no, ['class' => 'form-control']) !!}
						    	</div>
							</div>

							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
								{!! Form::submit('Update Customer', ['class' => 'btn btn-success']) !!}
							</div>
							</div>

							{!! Form::close() !!}

							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">							
						        {!! Form::open([ 'method' => 'DELETE', 'route' => ['customer.destroy', $customer->id] ]) !!}
					            {!! Form::submit('Delete Customer', ['class' => 'btn btn-danger']) !!}
						        {!! Form::close() !!}
							</div>
							</div>
	
						</div>
                    </div>
                </div>

@stop