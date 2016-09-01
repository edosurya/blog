<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@section('title') Impuls @show</title>
    @section('meta_keywords')
        <meta name="keywords" content="your, awesome, keywords, here"/>
    @show @section('meta_author')
        <meta name="author" content="Jon Doe"/>
    @show @section('meta_description')
        <meta name="description"
              content="Lorem ipsum dolor sit amet, nihil fabulas et sea, nam posse menandri scripserit no, mei."/>
    @show


	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ ('/img/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ ('/img/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ ('/img/ico/apple-touch-icon-72-precomposed.png')  }}">
    <link rel="apple-touch-icon-precomposed" href="{{ ('/img/ico/apple-touch-icon-57-precomposed.png') }}">
    <link rel="shortcut icon" href="{{ ('/img/ico/favicon.png') }}">
    
    
    <!-- CSS -->
       
    <!-- Bootstrap & FontAwesome & Entypo CSS -->
    {!! HTML::style ('/css/bootstrap.min.css') !!}
    {!! HTML::style ('/css/font-awesome.min.css') !!}
    <!--[if IE 7]><link type="text/css" rel="stylesheet" href="css/font-awesome-ie7.min.css"><![endif]-->
    {!! HTML::style ('/css/font-entypo.css') !!}    

    <!-- Fonts CSS -->
    {!! HTML::style ('/css/fonts.css') !!}
               
    <!-- Plugin CSS -->
    {!! HTML::style ('/plugins/jquery-ui/jquery-ui.custom.min.css') !!}    
    {!! HTML::style ('/plugins/prettyPhoto-plugin/css/prettyPhoto.css') !!}
    {!! HTML::style ('/plugins/isotope/css/isotope.css') !!}
    {!! HTML::style ('/plugins/pnotify/css/jquery.pnotify.css') !!}   
    {!! HTML::style ('/plugins/google-code-prettify/prettify.css') !!} 
   
         
    {!! HTML::style ('/plugins/mCustomScrollbar/jquery.mCustomScrollbar.css') !!}
    {!! HTML::style ('/plugins/tagsInput/jquery.tagsinput.css') !!}
    {!! HTML::style ('/plugins/bootstrap-switch/bootstrap-switch.css') !!}    
    {!! HTML::style ('/plugins/daterangepicker/daterangepicker-bs3.css') !!}    
    {!! HTML::style ('/plugins/bootstrap-timepicker/bootstrap-timepicker.min.css')  !!}
    {!! HTML::style ('/plugins/colorpicker/css/colorpicker.css') !!}            

  <!-- Specific CSS -->
      
     
    <!-- Theme CSS -->
    {!! HTML::style ('/css/theme.min.css') !!}
    <!--[if IE]> <link href="css/ie.css" rel="stylesheet" > <![endif]-->
    {!! HTML::style ('/css/chrome.css') !!} <!-- chrome only css -->    


        
    <!-- Responsive CSS -->
    {!! HTML::style ('/css/theme-responsive.min.css') !!} 

    
 
 
    <!-- for specific page in style css -->
        
    <!-- for specific page responsive in style css -->
        
    
    <!-- Custom CSS -->
    {!! HTML::style ('/custom/custom.css') !!}



    <!-- Head SCRIPTS -->
    {!! HTML::script ('/js/modernizr.js') !!} 
    {!! HTML::script ('/js/mobile-detect.min.js') !!} 
    {!! HTML::script ('/js/mobile-detect-modernizr.js') !!} 
 
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script type="text/javascript" src="js/html5shiv.js"></script>
      <script type="text/javascript" src="js/respond.min.js"></script>     
    <![endif]-->
    <!-- js placed at the end of the document so the pages load faster -->


        <!--BACKSTRETCH-->
        <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->

    <!-- Javascript =============================================== --> 
    <!-- Placed at the end of the document so the pages load faster --> 
    {!! HTML::script ('/js/jquery.js') !!} 
    <!--[if lt IE 9]>
      {!! HTML::script ('/js/excanvas.js') !!}      
    <![endif]-->
    {!! HTML::script ('/js/bootstrap.min.js') !!} 
    {!! HTML::script ('/plugins/jquery-ui/jquery-ui.custom.min.js') !!}
    {!! HTML::script ('/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') !!}

    {!! HTML::script ('/js/caroufredsel.js') !!} 
    {!! HTML::script ('/js/plugins.js') !!}

    {!! HTML::script ('/plugins/breakpoints/breakpoints.js') !!}
    {!! HTML::script ('/plugins/dataTables/jquery.dataTables.min.js') !!}
    {!! HTML::script ('/plugins/prettyPhoto-plugin/js/jquery.prettyPhoto.js') !!} 

    {!! HTML::script ('/plugins/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js') !!}
    {!! HTML::script ('/plugins/tagsInput/jquery.tagsinput.min.js') !!}
    {!! HTML::script ('/plugins/bootstrap-switch/bootstrap-switch.min.js') !!}
    {!! HTML::script ('/plugins/blockUI/jquery.blockUI.js') !!}
    {!! HTML::script ('/plugins/pnotify/js/jquery.pnotify.min.js') !!}

    {!! HTML::script ('/js/theme.js') !!}
    {!! HTML::script ('/custom/custom.js') !!}
    


	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body id="pages" class="full-layout no-nav-left no-nav-right  nav-top-fixed background-login responsive remove-navbar login-layout   clearfix" data-active="pages "  data-smooth-scrolling="1">   
<div class="vd_body">
<!-- Header Start -->


<!-- Header Ends --> 
<div class="content">
  <div class="container"> 

	@yield('content')

  </div>
  <!-- .container --> 
</div>
<!-- .content -->

</div>
</body>
</html>
