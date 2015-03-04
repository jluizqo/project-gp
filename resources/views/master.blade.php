<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MAIN</title>
        <link href="{{url('css/bootstrap-3.3.2/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{url('css/font-awesome-4.3.0/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{url('css/custom.css')}}" rel="stylesheet">        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container-fluid">
            @include('header')            
        </div>
        <div class="container-fluid">
            <div class="row padd-top-fixed">
                @include('sidebar')  
                @include('content')                           
            </div>
        </div>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="{{url('css/bootstrap-3.3.2/js/bootstrap.min.js')}}"></script>
        <script src="{{url('js/custom.js')}}"></script>
    </body>
</html>
