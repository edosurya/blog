<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@section('title') Blog @show</title>
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
    {!! HTML::style ('/fonts/css/font-awesome.min.css') !!}
    <!--[if IE 7]><link type="text/css" rel="stylesheet" href="css/font-awesome-ie7.min.css"><![endif]-->
    {!! HTML::style ('/css/animate.min.css') !!}    
    {!! HTML::style ('/css/custom.css') !!}    
    {!! HTML::style ('/css/maps/jquery-jvectormap-2.0.3.css') !!} 
    {!! HTML::style ('/css/icheck/flat/green.css') !!}   
    {!! HTML::style ('/css/floatexamples.css') !!} 
        

    <!-- Head SCRIPTS -->
    {!! HTML::script ('/js/jquery.min.js') !!} 
    {!! HTML::script('/js/nprogress.js') !!} 

    <!-- select2 -->
    {!! HTML::style ('/css/select/select2.min.css') !!} 

  <!-- editor -->
  <link href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
  {!! HTML::style ('/css/editor/external/google-code-prettify/prettify.css') !!} 
  {!! HTML::style ('/css/editor/index.css') !!} 


</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">

      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
            @include('/layout/sidebar_menu')
        </div>
      </div>
    
      @include('/layout/top_menu')
      @yield('content')

  {!! HTML::script('/js/bootstrap.min.js') !!} 
  <!-- richtext editor -->
  {!! HTML::script('/js/editor/bootstrap-wysiwyg.js') !!}
  {!! HTML::script('/js/editor/external/jquery.hotkeys.js') !!}
  {!! HTML::script('/js/editor/external/google-code-prettify/prettify.js') !!}
    <!-- Autocomplete -->
  {!! HTML::script('/js/autocomplete/countries.js') !!}
  {!! HTML::script('/js/autocomplete/jquery.autocomplete.js') !!}

</body>

</html>

