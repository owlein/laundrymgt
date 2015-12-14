<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/custom.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <br>
                <li class="sidebar-brand">
                    <a href="home.html"><img src="../img/logo1.png" class="img-responsive"></a>
                </li>
                <li>
                    <br>
                </li>
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search Orders">
                    <button type="submit" class="btn btn-default" style="background-color: #4E9CD0; color: #09457A;"><span class="glyphicon glyphicon-search" ></span></button>
                    </div>
                </form>
                </br>
                </li>
                <li>
                    <br>
                </li>
                <li>
                    <a href="{{ route('order.create') }}">Create Order</a>
                </li>
                
                <li>
                    <a href="{{ route('order.index') }}">View Orders</a>
                </li>
                <li>
                    <a href="{{ route('customer.create') }}">Create User</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
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
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/custom.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>