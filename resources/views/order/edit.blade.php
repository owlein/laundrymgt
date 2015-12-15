@extends('layout.master')

@section('content')

	<div class="row">
		<div class="col-lg-12">
			<h1>Edit Order</h1>
            <h1><br></h1>
                        
        	{!! Form::model($order, [ 'method' => 'PATCH', 'class'=>'form-horizontal', 'route' => ['order.update', $order->id]]) !!}
                            
			<div class="form-group">
			    {!! Form::label('status', 'Status :', ['class' => 'col-sm-2 control-label']) !!}
				<div class="col-sm-8">
				{!! Form::select('status', ['accepted' => 'Accepted', 'processing' => 'Processing', 'for_pickup' => 'For Pickup', 'done' => 'Done'], $order->status, ['class' => 'form-control']) !!}
				</div>
			</div>
                            
			<div class="form-group">
				{!! Form::label('customer_name', 'Customer :', ['class' => 'col-sm-2 control-label']) !!}
				<div class="col-sm-8">
				{!! Form::text('customer_name', $order->customer->name, ['class' => 'form-control', 'readonly' => 'true']) !!}
				</div>
			</div>
	          
			<div class="form-group">
				{!! Form::label('customer_address', 'Address :', ['class' => 'col-sm-2 control-label']) !!}
				<div class="col-sm-8">
				{!! Form::text('customer_address', $order->customer->address, ['class' => 'form-control', 'readonly' => 'true']) !!}
				</div>
			</div>
	          
			<div class="form-group">
				{!! Form::label('customer_contact_no', 'Contact Number :', ['class' => 'col-sm-2 control-label']) !!}
				<div class="col-sm-8">
				{!! Form::text('customer_contact_no', $order->customer->contact_no, ['class' => 'form-control', 'readonly' => 'true']) !!}
				</div>
			</div>
	
			<div class="form-group">
	    		{!! Form::label('wash_dates', 'Wash Dates', ['class' => 'col-sm-2 control-label']) !!}
			    <div class="col-sm-8" id="sandbox-container">
        	    	<div class="input-daterange input-group" id="datepicker">
		    		{!! Form::text('start_date', $order->start_date, ['class' => 'input-sm form-control', 'placeholder' => 'Start Date']) !!}            
		            <span class="input-group-addon">to</span>
			    	{!! Form::text('delivery_date', $order->delivery_date, ['class' => 'input-sm form-control', 'placeholder' => 'Delivery Date']) !!}            
        		    </div>
		    	</div>
			</div>

			<div class="form-group">
	    		{!! Form::label('type', 'Type :', ['class' => 'col-sm-2 control-label']) !!}
			    <div class="col-sm-8">
				{!! Form::select('type', ['machine_wash' => 'Machine Wash', 'hand_wash' => 'Hand Wash', 'dry_clean' => 'Dry Clean'], $order->type, ['class' => 'form-control']) !!}    	</div>
			</div>
                            
			<div class="form-group">
	    		{!! Form::label('price', 'Price :', ['class' => 'col-sm-2 control-label']) !!}
			    <div class="col-sm-8">
    			{!! Form::text('price', $order->price, ['class' => 'form-control']) !!}
		    	</div>
			</div>
                            
			<div class="form-group">
	    		{!! Form::label('weight', 'Weight :', ['class' => 'col-sm-2 control-label']) !!}
			    <div class="col-sm-8">
    			{!! Form::text('weight', $order->weight, ['class' => 'form-control']) !!}
		    	</div>
			</div>
                            
			<div class="form-group">
	    		{!! Form::label('receipt_no', 'Receipt Number :', ['class' => 'col-sm-2 control-label']) !!}
			    <div class="col-sm-8">
    			{!! Form::text('receipt_no', $order->receipt_no, ['class' => 'form-control']) !!}
		    	</div>	
			</div>

			<div class="form-group">
	    		{!! Form::label('with_press', 'With Press?', ['class' => 'col-sm-2 control-label']) !!}
			    <div class="col-sm-8">
	    		<label class="radio-inline">
		    	{!! Form::radio('with_press', 1, ['class' => 'form-control']) !!} Yes
    			</label>
		    	<label class="radio-inline">
    			{!! Form::radio('with_press', 0, ['class' => 'form-control']) !!} No
		    	</label>
    			</div>
			</div>

            <div class="form-group">
            	<div class="col-sm-offset-2 col-sm-10">
				{!! Form::submit('Update Order', ['class' => 'btn btn-success']) !!}
            	</div>
        	</div>


			{!! Form::close() !!}
        </div>
    </div>

@stop
