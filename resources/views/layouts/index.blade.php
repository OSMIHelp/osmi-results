
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Open Sourcing Mental Illness - @yield('title')</title>

    <meta property="og:url" content="https://survey.osmihelp.org/" />
    <meta property="og:title" content="Open Sourcing Mental Illness - Survey" />
    <meta property="og:description" content="Mental Health in Tech Survey and Results" />
    <meta property="og:image" content="http://osmihelp.org/img/osmi-logo-medium.png" />

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@osmihelp">
    <meta name="twitter:title" content="Open Sourcing Mental Illness - Changing how we talk about mental health in the tech community">
    <meta name="twitter:description" content="Changing how we talk about mental health in the tech community">
    <meta name="twitter:image" content="http://osmihelp.org/img/osmi-logo-medium.png">

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="./img/icons/Icon-72@2x.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="./img/icons/Icon@2x.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="./img/icons/Icon-72.png">
    <link rel="apple-touch-icon-precomposed" href="./img/icons/Icon.png">
    <link rel="shortcut icon" href="./img/icons/favIcon_48x48.ico">

    <link href='https://fonts.googleapis.com/css?family=Oswald|Merriweather:400,300italic,700,300' rel='stylesheet' type='text/css'>
    <link href="/css/app.css" rel="stylesheet">
</head>
<body id="app">
{{--<div id="logo" class="abs-img-container hidden-xs">--}}
{{--<img src="/img/osmi-logo-big.png" class="img-responsive">--}}
{{--</div>--}}
<div id="logo-translucent" class="abs-img-container">
    <img src="/img/osmi-logo-translucent.png" class="img-responsive">
</div>
<nav class="navbar navbar-inverse">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand btn btn-link navbar-btn" href="/">
                <img src="/img/osmi-logo-white-horiz-brand.png" class="img-responsive">
            </a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topmenu-navbar" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="topmenu-navbar">
            <ul class="nav nvbar-nav navbar-right">

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a class="btn btn-link navbar-btn" href="https://survey.osmihelp.org">Survey</a></li>
                <li><a class="btn btn-link navbar-btn" href="#talks">Talks</a></li>
                <li><a class="btn btn-link navbar-btn" href="#about">About OSMI</a></li>
                <li><a class="btn btn-link navbar-btn" href="#resources">Resources</a></li>
                <li><a class="btn btn-link navbar-btn" href="http://blog.osmihelp.org">Blog</a></li>
                <li><a class="btn btn-link navbar-btn" href="#sponsors">Sponsors</a></li>
                <li><a class="btn btn-link navbar-btn" href="#contact">Contact</a></li>
                <li><a class="btn btn-primary navbar-btn" href="http://j.mp/osmi2015campaign">Donate</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav>


<div class="container content-container">
    @yield('content')
</div>


{{--<script src="/bower_components/jquery/dist/jquery.min.js"></script>--}}
{{--<script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>--}}
{{--<script src="/bower_components/vue/dist/vue.min.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-strap/1.0.3/vue-strap.js"></script>--}}
{{--<script type="text/javascript" src="/js/audio.min.js"></script>--}}
{{--<script type="text/javascript" src="/js/app.js"></script>--}}

</body>
</html>