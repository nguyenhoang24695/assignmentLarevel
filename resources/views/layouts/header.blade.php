<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Funzone</title>
    <!-- Bootstrap Core CSS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link href="{{ asset('/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('/css/layout.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/ticket.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('/css/datepicker.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/bootstrap-timepicker.min.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('/css/dataTables.bootstrap.css') }}" rel="stylesheet">    
    <!-- Custom CSS -->  
    <link href="{{ asset('/css/admin.css') }}" rel="stylesheet"> --}}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery -->
    <script src="{{ asset('/js/jquery.min.js') }}"></script>    
  </head>

  <body id="page-top">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->        
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/"><img alt="Brand" src="{{asset('/images/logo.png')}}" class="img-brand"></a>
        </div>      
      </div>
    </nav>
    <div class="content-div">
      @yield('content')
    </div>
    <div class="clearfix"></div>  

    <!-- Bootstrap Core JavaScript -->
    {{-- <script src="{{ asset('/js/bootstrap.min.js') }}"></script> 
    <script src="{{ asset('/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('/js/bootstrap-timepicker.min.js') }}"></script> --}}
  </body>
</html>