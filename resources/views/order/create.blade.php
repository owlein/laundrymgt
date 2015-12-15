@extends('layout.master')

@section('content')

	<div class="row">
		<div class="col-lg-12">
			<h1>Create New Order</h1>
            <h1><br></h1>
                        
            {!! Form::open(['route' => 'order.store', 'class'=>'form-horizontal']) !!}
            
			<div class="form-group">
			    {!! Form::label('status', 'Status :', ['class' => 'col-sm-2 control-label']) !!}
				<div class="col-sm-8">
				{!! Form::select('status', ['accepted' => 'Accepted', 'processing' => 'Processing', 'for_pickup' => 'For Pickup', 'done' => 'Done'], 'accepted', ['class' => 'form-control']) !!}
				</div>
			</div>

			<div class="form-group">
	    		{!! Form::label('customer_name', 'Customer Name :', ['class' => 'col-sm-2 control-label']) !!}
			    <div class="col-sm-8">
                <select class="form-control" id="customerNameSelect" onchange="checkForOther(this)">
				@foreach($customers as $customer)
                <option value='{{ $customer->id }}'>  {{ $customer->name }} </option>
				@endforeach
				</select>
				</div>
			</div>
			
			<script> 
			function checkForOther(obj) { 
			var x = document.getElementById("customerNameSelect").value;
		    document.getElementById("customer_id").value = x;
			} 
			</script> 
	          
			<div class="form-group">
				{!! Form::label('customer_id', 'Customer ID :', ['class' => 'col-sm-2 control-label']) !!}
				<div class="col-sm-8">
				{!! Form::text('customer_id', '1', ['class' => 'form-control', 'readonly' => 'true']) !!}
				</div>
			</div>
	
			<div class="form-group">
	    		{!! Form::label('wash_dates', 'Wash Dates', ['class' => 'col-sm-2 control-label']) !!}
			    <div class="col-sm-8" id="sandbox-container">
        	    	<div class="input-daterange input-group" id="datepicker">
		    		{!! Form::text('start_date', '', ['class' => 'input-sm form-control', 'placeholder' => 'Start Date']) !!}            
		            <span class="input-group-addon">to</span>
			    	{!! Form::text('delivery_date', '', ['class' => 'input-sm form-control', 'placeholder' => 'Delivery Date']) !!}            
        		    </div>
		    	</div>
			</div>

			<div class="form-group">
	    		{!! Form::label('type', 'Type :', ['class' => 'col-sm-2 control-label']) !!}
			    <div class="col-sm-8">
				{!! Form::select('type', ['machine_wash' => 'Machine Wash', 'hand_wash' => 'Hand Wash', 'dry_clean' => 'Dry Clean'], 'machine_wash', ['class' => 'form-control']) !!}    	</div>
			</div>
                            
			<div class="form-group">
	    		{!! Form::label('price', 'Price :', ['class' => 'col-sm-2 control-label']) !!}
			    <div class="col-sm-8">
    			{!! Form::text('price', '0.00', ['class' => 'form-control']) !!}
		    	</div>
			</div>
                            
			<div class="form-group">
	    		{!! Form::label('weight', 'Weight (kgs):', ['class' => 'col-sm-2 control-label']) !!}
			    <div class="col-sm-8">
    			{!! Form::text('weight', '', ['class' => 'form-control']) !!}
		    	</div>
			</div>
                            
			<div class="form-group">
	    		{!! Form::label('receipt_no', 'Receipt Number :', ['class' => 'col-sm-2 control-label']) !!}
			    <div class="col-sm-8">
    			{!! Form::text('receipt_no', '', ['class' => 'form-control']) !!}
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
				{!! Form::submit('Create Order', ['class' => 'btn btn-success']) !!}
            	</div>
        	</div>


			{!! Form::close() !!}
        </div>
    </div>

@stop

