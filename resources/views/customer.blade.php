<!DOCTYPE html>
<html>
    <head>
        <title>Customer {{ $customer->id }}</title>

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
                <div class="title">Hello {{ $customer->name }} : )</div>
                <div class="content">Address : {{ $customer->address }}</div>
                <div class="content">Contact No : {{ $customer->contact_no }}</div>
            </div>
        </div>
        
    </body>
</html>