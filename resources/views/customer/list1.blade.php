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
        <div class="container">
            <div class="content">
 
        @foreach($customers as $customer)
	    	<h3>{{ $customer->name }} : {{ $customer->address}}
		    <p>
    		    <a href="{{ route('customer.show', $customer->id) }}" >View</a>
    		    <a href="{{ route('customer.edit', $customer->id) }}" >Edit</a>
    		    
    <div class="col-md-6 text-right">
        {!! Form::open([ 'method' => 'DELETE', 'route' => ['customer.destroy', $customer->id] ]) !!}
            {!! Form::submit('Delete this task?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>
	    	</p>
	    	<hr>
		@endforeach
		
		

{!! Form::open(['method'=>'GET','url'=>'customer','class'=>'navbar-form navbar-left','role'=>'search'])  !!}

<div class="input-group custom-search-form">
    <input type="text" class="form-control" name="search" placeholder="Search...">
    <span class="input-group-btn">
        <button class="btn btn-default-sm" type="submit">
            </i class="fa fa-search"><!--<span class="hiddenGrammarError" pre="" data-mce-bogus="1"-->
        </button>
    </span>
</div>
{!! Form::close() !!}

    		    <a href="{{ route('customer.create') }}" >Add</a>


                
                </div>
        </div>
      
        
    </body>
</html>