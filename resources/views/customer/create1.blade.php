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
        <div class="container"><h1>Add a New Customer</h1>
			
			{!! Form::open([ 'route' => 'customer.store' ]) !!}

	<div>
	    {!! Form::label('name', 'Name :', ['class' => 'control-label']) !!}
    	{!! Form::text('name', null, ['class' => 'form-control']) !!}
	</div>

	<div>
    	{!! Form::label('address', 'Address:', ['class' => 'control-label']) !!}
	    {!! Form::text('address', null, ['class' => 'form-control']) !!}
	</div>

	<div>
    	{!! Form::label('contact_no', 'Contact Number :', ['class' => 'control-label']) !!}
	    {!! Form::text('contact_no', null, ['class' => 'form-control']) !!}
	</div>

	{!! Form::submit('Create New Customer', ['class' => 'btn btn-primary']) !!}

	{!! Form::close() !!}

        </div>
      
        
    </body>
</html>