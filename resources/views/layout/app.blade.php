<!doctype html>
<html lang="en">

<head>
    <title>Admin Panel</title>
    <link rel="shortcut icon" href="{{ $favicon }}">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom built theme - This already includes Bootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('vendor/maileclipse/css/maileclipse-app.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/notie/dist/notie.min.css">
    <!-- Bootstrap & jquery & lodash & popper & lozad -->
    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.11/lodash.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
    <!-- Notie Library -->
    <script src="https://unpkg.com/notie"></script>
    <!-- Axios Library -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    @if ( request()->route()->getName() === 'newTemplate' ||
          request()->route()->getName() === 'editMailable' || 
          request()->route()->getName() === 'viewTemplate')
<!-- Editor Markdown/Html/Text -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
<link rel="stylesheet" data="{{ url('/')}}" href="{{ url('./vendor/qoraiche/laravel-mail-editor/public/css/common.css') }}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/5.13.4/codemirror.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/5.13.4/codemirror.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.0.0/tinymce.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/5.13.4/mode/xml/xml.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/5.13.4/mode/css/css.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/5.13.4/mode/javascript/javascript.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/5.13.4/mode/htmlmixed/htmlmixed.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/5.43.0/addon/display/placeholder.js"></script>
    @endif

    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="{{ asset('vendor/maileclipse/js/maileclipse-app.js') }}"></script>


<style>
    .main-header {
    position: relative;
    max-height: 100px;
    z-index: 1;
}
.skin-blue .main-header .logo {
    background-color: #367fa9;
    color: #ffffff;
    border-bottom: 0 solid transparent;
}
.back_view {
    text-align: right;
}
.main-header .logo {
    -webkit-transition: width 0.3s ease-in-out;
    -o-transition: width 0.3s ease-in-out;
    transition: width 0.3s ease-in-out;
    display: block;
    float: left;
    height: 50px;
    font-size: 20px;
    line-height: 50px;
    text-align: center;
    width: 230px;
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    padding: 0 15px;
    font-weight: 300;
    overflow: hidden;
}
.main-header .logo .logo-mini {
    display: none;
}
.main-header .logo .logo-lg {
    display: block;
}
.skin-blue .main-header .navbar {
    background-color: #3c8dbc;
    display: flex;
    /* flex-wrap: nowrap; */
    margin: 0;
    justify-content: flex-end;

}
.main-header > .navbar {
    -webkit-transition: margin-left 0.3s ease-in-out;
    -o-transition: margin-left 0.3s ease-in-out;
    transition: margin-left 0.3s ease-in-out;
    margin-bottom: 0;
    margin-left: 230px;
    border: none;
    min-height: 50px;
    border-radius: 0;
    padding: 0;
}
.navbar {
    position: relative;
    z-index: 1000;
   }
.skin-blue .main-header .navbar .sidebar-toggle{
    color: #fff;
}
.main-header .sidebar-toggle{
    float: left;
    background-color: transparent;
    background-image: none;
    padding: 15px 15px;
    font-family: fontAwesome;
}
.main-header .navbar-custom-menu{
    display: flex;
}
.main-header .navbar-custom-menu, .main-header .navbar-right{
    float: right;
}
.google-translate-element {
    display: flex;
    align-items: center;
    padding: 2px 0;
    float: left;
}
.google-translate-element .goog-logo-link, .google-translate-element .skiptranslate.goog-te-gadget {
    color: #fff !important;
    font-weight: 300 !important;
}
.google-translate-element .skiptranslate.goog-te-gadget {
    display: flex;
    align-items: center;
}
.goog-te-gadget {
    font-family: arial;
    font-size: 11px;
    color: #666;
    white-space: nowrap;
}
.google-translate-element .skiptranslate.goog-te-gadget > div {
    margin-right: 10px;
}
.google-translate-element .skiptranslate.goog-te-gadget .goog-te-combo {
    margin: 0;
    background: #fff;
    padding: 4px 7px;
    font-size: 13px;
    color: #000;
    width: 100%;
        font-family: arial;
            vertical-align: baseline;
}
.navbar-custom-menu > .navbar-nav > li {
    position: relative;
}
.navbar-nav>li>a {
    padding-top: 10px;
    padding-bottom: 10px;
    line-height: 20px;
    color: #ffffff;
}
.navbar-nav > .user-menu .user-image {
    float: left;
    width: 25px;
    height: 25px;
    border-radius: 50%;
    margin-right: 10px;
    margin-top: -2px;
}
.nav>li>a>img {
    max-width: none;
}
.navbar-nav > .user-menu > .dropdown-menu {
    border-top-right-radius: 0;
    border-top-left-radius: 0;
    padding: 1px 0 0 0;
    border-top-width: 0;
    width: 280px;
}
.navbar-nav > .user-menu > .dropdown-menu, .navbar-nav > .user-menu > .dropdown-menu > .user-body {
    border-bottom-right-radius: 4px;
    border-bottom-left-radius: 4px;
}
.navbar-custom-menu > .navbar-nav > li > .dropdown-menu {
    position: absolute;
    right: 0;
    left: auto;
}
.navbar-nav>li {
    float: left;
}
.nav>li>a {
    position: relative;
    display: block;
    padding: 10px 15px;
}
.google-translate-element .goog-logo-link img {
    width: 38px !important;
    height: 14px !important;
    background: #fff;
    padding: 3px 4px 0;
    border-radius: 4px;
    margin-right: 4px;
}
.navbar-custom-menu > .navbar-nav > li > .dropdown-menu {
    position: absolute;
    right: 0;
    left: auto;
}
.dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 160px;
    padding: 5px 0;
    margin: 2px 0 0;
    font-size: 14px;
    text-align: left;
    list-style: none;
    background-color: #fff;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    border: 1px solid #ccc;
    border: 1px solid rgba(0,0,0,.15);
    border-radius: 4px;
    -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
    box-shadow: 0 6px 12px rgba(0,0,0,.175);
}
.dropdown-menu {
    box-shadow: none;
    border-color: #eee;
}
.open>.dropdown-menu {
    display: block;
}

.navbar-nav>li>.dropdown-menu{
        margin-top: 0;
}
.navbar-nav > .user-menu > .dropdown-menu {
    border-top-right-radius: 0;
    border-top-left-radius: 0;
    padding: 1px 0 0 0;
    border-top-width: 0;
    width: 280px;
}
.navbar-nav > .user-menu > .dropdown-menu, .navbar-nav > .user-menu > .dropdown-menu > .user-body {
    border-bottom-right-radius: 4px;
    border-bottom-left-radius: 4px;
}
.navbar-nav > .user-menu > .dropdown-menu > li.user-header {
    height: 175px;
    padding: 10px;
    text-align: center;
}
.skin-blue .main-header li.user-header {
    background-color: #3c8dbc;
}
.navbar-nav > .user-menu > .dropdown-menu > li.user-header > img {
    z-index: 5;
    height: 90px;
    width: 90px;
    border: 3px solid;
    border-color: transparent;
    border-color: rgba(255, 255, 255, 0.2);
}
.img-circle {
    border-radius: 50%;
}
.navbar-nav > .user-menu > .dropdown-menu > li.user-header > p {
    z-index: 5;
    color: #fff;
    color: rgba(255, 255, 255, 0.8);
    font-size: 17px;
    margin-top: 10px;
}
.navbar-nav > .user-menu > .dropdown-menu > .user-footer {
    background-color: #f9f9f9;
    padding: 10px;
}
.pull-right {
    float: right!important;
}
.navbar-nav > .user-menu > .dropdown-menu > .user-footer .btn-default {
    color: #666666;
    border: 1px solid #ccc;
}
.btn-default {
    background-color: #f4f4f4;
    color: #444;
    border-color: #ddd;
    border: 1px solid transparent;
}
.btn {
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
    transition: none;
}
.navbar-nav > .user-menu > .dropdown-menu > .user-footer {
    background-color: #f9f9f9;
    padding: 10px;
}
.navbar-nav > .user-menu > .dropdown-menu > li.user-header > p > small {
    display: block;
    font-size: 12px;
}
.navbar-nav > .user-menu > .dropdown-menu > .user-footer:before, .navbar-nav > .user-menu > .dropdown-menu > .user-footer:after {
    content: " ";
    display: table;
}
.navbar-nav > .user-menu > .dropdown-menu > .user-footer:after {
    clear: both;
}
.btn-default:hover, .btn-default:active, .btn-default.hover {
    background-color: #e7e7e7;
}
.btn.btn-flat {
    border-radius: 0;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    border-width: 1px;
}
footer{
    display: block;
    width: 100%;
}
.main-footer {
    background: #fff;
    padding: 15px;
    color: #444;
    border-top: 1px solid #d2d6de;
        font-size: 12px;
    text-align: center;
}
footer a {
    color: #3c8dbc;
}
.main-header .logo .logo-lg b{
    font-weight: bold;
}


@media (min-width: 768px){
.navbar-nav {
    float: left;
    margin: 0;
    /* display: block; */
    flex-direction: row;
    align-items: center;
}
.navbar-nav>li {
    float: left;
    display: block;
}
.navbar-nav>li>a {
    padding-top: 15px;
    padding-bottom: 15px;
}
}



@media (max-width: 768px){
.skin-blue .main-header .navbar{
    width: 100%;
}
.skin-blue .main-header .logo{
    width: 100%;
}
}

@media (max-width: 568px){
.main-header .navbar-custom-menu {
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-end;
}
.google-translate-element{
    display: flex;
    align-items: center;
    padding: 10px 10px !important;
    float: left;
    width: 100%;
    flex-wrap: wrap;
}
.google-translate-element .skiptranslate.goog-te-gadget {
    display: flex;
    align-items: center;
    width: 100%;
    flex-wrap: wrap;
    white-space: normal;
}
.navbar-nav{
    flex-direction: row;
    width: 100%;
    justify-content: flex-end;
        display: flex
}
}
</style>




</head>

<body class="hold-transition skin-blue sidebar-mini" ng-app="App">
   

    @include('maileclipse::layout.header')
         <div class="wrapper">    

    <div class="container mt-5">
        <div class="row">

            <div class="col-md-12 back_view mb-4">
                <a href="{{url('admin/')}}" class="btn btn-primary">Back</a>
            </div>

            @if ( request()->route()->getName() !== 'newTemplate' && 
                  request()->route()->getName() !== 'editMailable' &&
                  request()->route()->getName() !== 'viewTemplate'
                )

                {{--@include('maileclipse::layout.sidebar')--}}

            @endif

            @yield('content')
            

        </div>
       
    </div>
</div>
 @include('maileclipse::layout.footer')

</body>

</html>
