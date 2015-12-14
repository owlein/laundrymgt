@extends('layout.master')

@section('content')
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Create User</h1>
                        <h1><br></h1>
    
					    <div class="form-horizontal">
                    	    {!! Form::open(['route' => 'customer.store']) !!}

							<div class="form-group">
						    	{!! Form::label('name', 'Name :', ['class' => 'col-sm-2 control-label']) !!}
							    <div class="col-sm-8">
						    	{!! Form::text('name', null, ['class' => 'form-control']) !!}
						    	</div>
							</div>
						
							<div class="form-group">
							    {!! Form::label('address', 'Address :', ['class' => 'col-sm-2 control-label']) !!}
							    <div class="col-sm-8">
						    	{!! Form::text('address', null, ['class' => 'form-control']) !!}
						    	</div>
							</div>
	
							<div class="form-group">
							    {!! Form::label('contact_no', 'Contact Number :', ['class' => 'col-sm-2 control-label']) !!}
							    <div class="col-sm-8">
						    	{!! Form::text('contact_no', null, ['class' => 'form-control']) !!}
						    	</div>
							</div>

							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
								{!! Form::submit('Create New Customer', ['class' => 'btn btn-success']) !!}
								</div>
							</div>

							{!! Form::close() !!}
	
						</div>
                    </div>
                </div>

@stop