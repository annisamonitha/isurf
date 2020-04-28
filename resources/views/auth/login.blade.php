<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
        <!-- Site Metas -->
        <title>ISURF</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">
    
        <!-- Site Icons -->
        <link rel="shortcut icon" href="#" type="image/x-icon" />
        <link rel="apple-touch-icon" href="#" />
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Pogo Slider CSS -->
        <link rel="stylesheet" href="css/pogo-slider.min.css">
        <!-- Site CSS -->
        <link rel="stylesheet" href="css/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/custom.css">
    
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    
        </head>
        
    
    <!-- Start header -->
    <header class="top-header">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                    <li><a class="nav-link" href="/">Home</a></li>
                        <li><a class="nav-link" href="about.html">About us</a></li>
                        <li><a class="nav-link" href="/register">Register</a></li>
                        <li><a class="nav-link active" style="background:#fff;color:#000;" href="/login">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
    <body>
         <h1>     </h1>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

        @if(Session::has('flash_message_error'))
            <div class="alert alert-error alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{!! session('flash_message_error') !!}</strong>
            </div>
        @endif   
        @if(Session::has('flash_message_success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{!! session('flash_message_success') !!}</strong>
            </div>
        @endif       
         
            <form class="form-vertical" role="form" method="POST" action="{{ url('login') }}">{{ csrf_field() }}
                 <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            
                <div class="card-body">
                        <div class="form-group row">
                            <label for="name" class="col-md-5 col-form-label text-md-right">{{ __('Email') }}</label>
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span><input id="email" type="email" name="email" placeholder="Email" />
                        </div>
                    </div>
                </div>
</div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            
                        <div class="form-group row">
                            <label for="name" class="col-md-5 col-form-label text-md-right">{{ __('Password') }}</label>
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input id="password" type="password" name="password" placeholder="Password" />
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <span class="pull-right"><input type="submit" class="btn btn-success" value="Login" /></span>
                </div>
            </form>
            </div>
        
        <script src="{{ asset('js/backend_js/jquery.min.js') }}"></script>  
        <script src="{{ asset('js/backend_js/matrix.login.js') }}"></script> 
        <script src="{{ asset('js/backend_js/bootstrap.min.js') }}"></script>
    </body>

</html>
