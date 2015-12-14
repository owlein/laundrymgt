<!DOCTYPE html>
<html>
    <head>
        <title>Customer</title>

        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container"><h1>Update Customer {{ $customer->id }}</h1>
			
	{!! Form::model($customer, [ 'method' => 'PATCH', 'route' => ['customer.update', $customer->id]]) !!}

	<div>
	    {!! Form::label('name', 'Name :', ['class' => 'control-label']) !!}
    	{!! Form::text('name', $customer->name, ['class' => 'form-control']) !!}
	</div>

	<div>
    	{!! Form::label('address', 'Address:', ['class' => 'control-label']) !!}
	    {!! Form::text('address', $customer->address, ['class' => 'form-control']) !!}
	</div>

	<div>
    	{!! Form::label('contact_no', 'Contact Number :', ['class' => 'control-label']) !!}
	    {!! Form::text('contact_no', $customer->contact_no, ['class' => 'form-control']) !!}
	</div>

	{!! Form::submit('Update Customer', ['class' => 'btn btn-primary']) !!}

	{!! Form::close() !!}

        </div>
      
        
    </body>
</html>