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
    <link href="{{ URL::asset('/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ URL::asset('/css/custom.css') }}" rel="stylesheet">

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
                    <a href="home.html"><img src="{{ URL::asset('/img/logo1.png') }}" class="img-responsive"></a>
                </li>
                <li>
                    <br>
                </li>
				{!! Form::open(['method'=>'GET','url'=>'order','class'=>'navbar-form navbar-left','role'=>'search'])  !!}
                    <div class="form-group">
                        <input type="text" name="search" class="form-control" placeholder="Search Orders">
                    <button type="submit" class="btn btn-default" style="background-color: #4E9CD0; color: #09457A;"><span class="glyphicon glyphicon-search" ></span></button>
                    </div>
				{!! Form::close() !!}
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
            @yield('content')
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{ URL::asset('/js/jquery.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ URL::asset('/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('/js/custom.js') }}"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
