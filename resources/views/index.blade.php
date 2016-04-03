
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Open Sourcing Mental Illness - Changing how we talk about mental health in the tech community - Stronger Than Fear</title>

    <meta property="og:url" content="http://osmihelp.org/" />
    <meta property="og:title" content="Open Sourcing Mental Illness - Changing how we talk about mental health in the tech community - Stronger Than Fear" />
    <meta property="og:description" content="Changing how we talk about mental health in the tech community" />
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
    <link href="./css/style.css" rel="stylesheet">
</head>
<body id="app">
<div id="logo" class="abs-img-container hidden-xs"><img src="./img/osmi-logo-big.png" class="img-responsive"></div>
<div id="logo-translucent" class="abs-img-container"><img src="./img/osmi-logo-translucent.png" class="img-responsive"></div>
<nav class="navbar navbar-inverse">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand btn btn-link navbar-btn" href="/">
                <img src="./img/osmi-logo-white-horiz-brand.png" class="img-responsive">
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

<div class="container hero-container">
    <div class="row hero-row">
        <div id="hero-image-container" class="hidden-xs">
            <img src="./img/ed-banner-greyscale.jpg" class="img-responsive">
            <div class="abs-box" id="hero-image-box-left"></div>
            <div class="abs-box" id="hero-image-box-bottom"></div>
            <div class="abs-box" id="hero-image-box-subtitle">
                Changing how we talk about<br>
                mental health in the tech community
            </div>
        </div>
        <div id="logo-container-xs" class="visible-xs-block col-xs-12">
            <img src="./img/osmi-logo-big.png" class="img-responsive">
        </div>
        <div class="col-xs-12" id="hero-bottom">
            <p class="text-center visible-xs-block">Changing how we talk about<br>
                mental health in the tech community</p>
        </div>
    </div>
</div>

<div class="container content-container">
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="col-sm-4">
                <div class="panel panel-default panel-osmi">
                    <div class="panel-body">
                        <h2 class="header-osmi-box text-center">Awareness</h2>
                        <p class="text-center"><i class="fa fa-heart fa-fw fa-4x"></i></p>
                        <p>We <strong>fight the harmful stigma</strong> around mental health disorders by
                            <strong>speaking openly</strong> about our experiences. Shame and silence are countered
                            with honest, straightforward explainations of how mental illness affects us.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-default panel-osmi">
                    <div class="panel-body">
                        <h2 class="header-osmi-box text-center">Education</h2>
                        <p class="text-center"><i class="fa fa-graduation-cap fa-fw fa-4x"></i></p>
                        <p>We educate the tech community on both the <strong>economic impact</strong> of mental disorders, and how
                            they affect worker <strong>productivity</strong>. We collect and share important data
                            on tech workers' expectations about how they'll be treated.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-default panel-osmi">
                    <div class="panel-body">
                        <h2 class="header-osmi-box text-center">Resources</h2>
                        <p class="text-center"><i class="fa fa-cogs fa-fw fa-4x"></i></p>
                        <p>We help workplaces identify <strong>the best resources</strong> to support their employees, and we create
                            detailed guides on how to make the workplace <strong>safe and supportive</strong> for those with mental health
                            issues.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<template id="presentation-player-tpl">
    <div v-if="video_url" class="video-box">
        <div class="embed-responsive embed-responsive-16by9">
            <iframe src="//www.youtube-nocookie.com/embed/${ ytid }" class="embed-responsive-item" allowfullscreen></iframe>
        </div>
        <h3 class="talk-event"><a href="${ video_url }" target="_blank">${ event_name }</a></h3>
        <div class="talk-date">${ event_date }</div>
        <div class="talk-links">
            <a class="btn btn-primary" href="${ video_url }" target="_blank"><i class="fa fa-youtube-square"></i> Video</a>
            <a class="btn btn-primary" href="${ slides_url }" target="_blank"><i class="fa fa-paperclip"></i> Slides</a>
        </div>
    </div>
    <div v-if="audio_url" class="audio-box">
        <audio v-bind:src="audio_url"></audio>
        <h3 class="talk-event"><a href="${ audio_url }">${ event_name }</a></h3>
        <div class="talk-date">${ event_date }</div>
        <div class="talk-links">
            <a class="btn btn-primary" href="${ audio_url }"><i class="fa fa-file-sound-o"></i> Audio</a>
            <a class="btn btn-primary" href="${ slides_url }"><i class="fa fa-paperclip"></i> Slides</a>
        </div>
    </div>
</template>

<template id="presentation-item-tpl">
    <a class="list-group-item" v-if="video_url" v-on:click.prevent="viewPresentation" href="${video_url}" target="_blank">
        <i class="fa fa-eye fa-fw pull-right"></i>
        <div class="watch-list-event">${event_name}</div>
        <div class="watch-list-date">${event_date}</div>
    </a>
    <a class="list-group-item" v-if="audio_url" v-on:click.prevent="viewPresentation" href="${audio_url}" target="_blank">
        <i class="fa fa-volume-up fa-fw pull-right"></i>
        <div class="watch-list-event">${event_name}</div>
        <div class="watch-list-date">${event_date}</div>
    </a>
</template>

<template id="upcoming-presentation-item-tpl">
    <a class="list-group-item" href="${ event_url }" target="_blank">
        <i class="fa fa-calendar fa-fw pull-right"></i>
        <div class="upcoming-list-event">${ event_name }</div>
        <div class="upcoming-list-date">${ event_date }</div>
        <div class="upcoming-list-location">${ event_location }</div>
    </a>
</template>

<div class="container-fluid content-container talks-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="content-header" id="talks">Talks</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <presentation-player
                        v-ref:selected-presentation-component
                        :event_name='selectedPresentation.event_name'
                        :event_date='selectedPresentation.event_date'
                        :slides_url='selectedPresentation.slides_url'
                        :video_url='selectedPresentation.video_url'
                        :ytid='selectedPresentation.ytid'
                        :audio_url='selectedPresentation.audio_url'
                ></presentation-player>
            </div>
            <div class="col-sm-6 col-xs-12">
                <h3>Watch</h3>
                <div class="watch-list list-group">
                    <presentation-item
                            v-ref:presentation-item-components
                            v-for="presentation in presentations"
                            :event_name='presentation.event_name'
                            :event_date='presentation.event_date'
                            :slides_url='presentation.slides_url'
                            :video_url='presentation.video_url'
                            :ytid='presentation.ytid'
                            :audio_url='presentation.audio_url'
                            :index="$index"
                    ></presentation-item>
                </div>
            </div>
            <div class="col-sm-6 col-xs-12">
                <h3>Upcoming</h3>
                <div class="upcoming-list list-group">
                    <upcoming-presentation-item
                            v-ref:upcoming-presentation-item-components
                            v-for="presentation in upcomingPresentations"
                            :event_url='presentation.event_url'
                            :event_name='presentation.event_name'
                            :event_date='presentation.event_date'
                            :event_location='presentation.event_location'
                            :index="$index"
                    ></upcoming-presentation-item>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-offset-1 col-sm-10 text-center">
                <hr>
                <i class="fa fa-info-circle"></i>
                These works are licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/deed.en_US">Creative Commons Attribution-ShareAlike 3.0 Unported License</a>.
            </div>
        </div>
    </div>
</div>


<div class="container content-container">
    <div class="row">
        <div class="col-xs-12">
            <h2 class="content-header" id="about">About OSMI</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4 col-quote">
            Ed's talk is practically subversive for acknowledging mental health issues out in the open, which is exactly what we all need to be doing.<br>
            &mdash; Jacqui Cheng
        </div>
        <div class="col-sm-8 col-xs-12 col-content">
            <p><strong>Open Sourcing Mental Illness</strong> is a campaign founded by Ed Finkler to change how we deal with
                mental health in the tech community. In 2013, Ed started <a href="#talks">speaking at tech conferences</a> about his
                personal experiences as a web developer and open source advocate with a mental health disorder.
                The response was overwhelming, and Ed has continued to speak, gather data, and organize efforts
                to change experiences of those with mental health disorders in the tech workplace. This includes
                <strong>speaking at conferences and companies</strong>, <strong>conducting research</strong>, and
                <strong>creating documentation</strong> to assist
                companies in making supportive environments for those impacted by mental health disorders.  He is
                assisted in these efforts by selfless volunteers who bring their time and expertise to bear on this
                important issue.
            </p>

            <h3>About Ed Finkler</h3>

            <p>Ed Finkler, also known as <a href="http://funkatron.com">Funkatron</a>, started making web sites before browsers had frames. He does
                front-end and server-side work in Python, PHP, and JavaScript. Ed is the Senior Software Architect
                and Head of Developer Culture at <a href="http://graphstory.com">Graph Story</a>. He has suffered
                from mental health disorders for his entire life, and believes strongly in open, fearless discussion
                of mental health issues to combat shame and stigma.</p>
        </div>
    </div>
</div>

<div class="container content-container">
    <div class="row">
        <div class="col-xs-12">
            <h2 class="content-header" id="helpus">Help Us</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4 col-quote">
            Inspired by the amount of courage Ed had to share this talk with us. It was eye-opening
            to see how the way we interact with people affects them.<br>
            &mdash; Matt Frost
        </div>
        <div class="col-sm-8 col-xs-12 col-content">
            <h3 class="no-lead-padding">Sign up for the mailing list</h3>

            <p>Sign up for the OSMI Mailing list to get notifications of new events, resources, and campaigns</p>

            <!-- Begin MailChimp Signup Form -->
            <div id="mc_embed_signup">
                <form action="//funkatron.us10.list-manage.com/subscribe/post?u=a26d1ce652ced40c2e73fd2e7&amp;id=e342ef9329" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                    <div class="input-group">
                        <input type="email" value="" name="EMAIL" class="form-control" id="mce-EMAIL" placeholder="email address" required>
                            <span class="input-group-btn">
                                <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary">
                            </span>
                    </div><!-- /input-group -->

                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;"><input type="text" name="b_a26d1ce652ced40c2e73fd2e7_e342ef9329" tabindex="-1" value=""></div>
                    <div class="clear"></div>
                </form>
            </div>

            <h3>Donate</h3>

            <p>Donations to the OSMI campaign allow Ed to speak at conferences and user groups that don’t provide financial support for travel and lodging. The also fund
                development of resources and materials to guide the creation of supportive workplaces.</p>

            <a href="http://j.mp/osmi2015campaign" class="btn btn-primary btn-lg"><strong>Donate Now!</strong></a></p>
        </div>
    </div>
</div>


<div class="container content-container">
    <div class="row">
        <div class="col-xs-12">
            <h2 class="content-header" id="resources">Resources</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4 col-quote">
            We invite Ed to speak every year as his message is pure and useful to everyone in attendance. Our
            attendees constantly tell us how much they enjoyed it, and more importantly how it helped them.<br>
            &mdash; <a href="http://pytennessee.org" target="_blank">PyTennessee</a> Organizers
        </div>
        <div class="col-sm-8 col-xs-12 col-content">
            <div class="list-group">
                <a class="list-group-item" href="https://www.imalive.org/" target="_blank">
                    <h4 class="resource-title"><i class="fa fa-chevron-circle-right fa-fw"></i> IMAlive</h4>
                    <p class="resource-description">An Online Crisis Network. The first online network with 100% of its volunteers trained and certified in crisis intervention.</p>
                </a>
                <a class="list-group-item" href="http://www.crisistextline.org/" target="_blank">
                    <h4 class="resource-title"><i class="fa fa-chevron-circle-right fa-fw"></i> Crisis Text Line</h4>
                    <p class="resource-description">An anonymous service to provide live, trained counselors when you are in need. <strong>Text 741-741 when in crisis</strong>.</p>
                </a>
                <a class="list-group-item" href="http://www.mentalhealthfirstaid.org/" target="_blank">
                    <h4 class="resource-title"><i class="fa fa-chevron-circle-right fa-fw"></i> Mental Health First Aid</h4>
                    <p class="resource-description">An in-person training that teaches you how to help people developing a mental illness or in a crisis</p>
                </a>
                <a class="list-group-item" href="http://zerosuicide.sprc.org/" target="_blank">
                    <h4 class="resource-title"><i class="fa fa-chevron-circle-right fa-fw"></i> Zero Suicide</h4>
                    <p class="resource-description">Zero Suicide is a commitment to suicide prevention in health and behavioral health care systems and is also a specific set of strategies and tools</p>
                </a>
                <a class="list-group-item" href="http://www.if-me.org/" target="_blank">
                    <h4 class="resource-title"><i class="fa fa-chevron-circle-right fa-fw"></i> If Me</h4>
                    <p class="resource-description">A community for mental health experiences</p>
                </a>
                <a class="list-group-item" href="http://helpguide.org/" target="_blank">
                    <h4 class="resource-title"><i class="fa fa-chevron-circle-right fa-fw"></i> HelpGuide.org</h4>
                    <p class="resource-description">A trusted non-profit guide to mental health and well-being</p>
                </a>
                <a class="list-group-item" href="http://www.devpressed.com/" target="_blank">
                    <h4 class="resource-title"><i class="fa fa-chevron-circle-right fa-fw"></i> DevPressed</h4>
                    <p class="resource-description">An online support group for developers</p>
                </a>
                <a class="list-group-item" href="http://nami.org" target="_blank">
                    <h4 class="resource-title"><i class="fa fa-chevron-circle-right fa-fw"></i> National Alliance on Mental Illness</h4>
                    <p class="resource-description">The nation’s largest grassroots mental health organization dedicated to building better lives for the millions of Americans affected by mental illness</p>
                </a>
                <a class="list-group-item" href="http://bit.ly/namilocal" target="_blank">
                    <h4 class="resource-title"><i class="fa fa-chevron-circle-right fa-fw"></i> NAMI Local Chapters</h4>
                    <p class="resource-description">Find your local chapter of NAMI</p>
                </a>
                <a class="list-group-item" href="http://www.mentalhealthamerica.net/" target="_blank">
                    <h4 class="resource-title"> <i class="fa fa-chevron-circle-right fa-fw"></i> Mental Health America</h4>
                    <p class="resource-description">The nation's leading community-based nonprofit dedicated to addressing the needs of those living with mental illness and to promoting the overall mental health of all Americans</p>
                </a>
                <a class="list-group-item" href="http://www.mentalhealthamerica.net/" target="_blank">
                    <h4 class="resource-title"> <i class="fa fa-chevron-circle-right fa-fw"></i> MHA - Find an affiliate</h4>
                    <p class="resource-description">Find a local affiliate of Mental Health America</p>
                </a>
                <a class="list-group-item" href="http://www.nimh.nih.gov" target="_blank">
                    <h4 class="resource-title"><i class="fa fa-chevron-circle-right fa-fw"></i> National Institute of Mental Health</h4>
                    <p class="resource-description">The National Institute of Mental Health (NIMH) is the lead federal agency for research on mental disorders</p>
                </a>
                <a class="list-group-item" href="http://BlueHackers.org" target="_blank">
                    <h4 class="resource-title"><i class="fa fa-chevron-circle-right fa-fw"></i> BlueHackers</h4>
                    <p class="resource-description">A mental health advocacy and awareness group for geeks and hackers</p>
                </a>
                <a class="list-group-item" href="http://mentalpod.com" target="_blank">
                    <h4 class="resource-title"><i class="fa fa-chevron-circle-right fa-fw"></i> Mental Illness Happy Hour</h4>
                    <p class="resource-description">An amazing podcast, forum, and set of resources</p>
                </a>
                <a class="list-group-item" href="http://www.onlinecolleges.net/for-students/mental-health-resources/" target="_blank">
                    <h4 class="resource-title"><i class="fa fa-chevron-circle-right fa-fw"></i> Critical Mental Health Resources For College Students</h4>
                    <p class="resource-description">A great collection of self-assessments, advice, and resources. Aimed at college students, but most of it is useful to everyone</p>
                </a> 
                <a class="list-group-item" href="http://www.crisistextline.org/trends/" target="_blank">
                    <h4 class="resource-title"><i class="fa fa-chevron-circle-right fa-fw"></i> Crisis Trends</h4>
                    <p class="resource-description">Crisis Trends aims to empower journalists, researchers, and citizens to understand the crises Americans face so we can work together to prevent future crises from happening</p>
                </a> 
            </div>
        </div>
    </div>
</div>

<div class="container content-container">
    <div class="row">
        <div class="col-xs-12">
            <h2 class="content-header" id="sponsors">Sponsors</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <h3 class="content-header text-center">Ultra-Level</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1 col-flex">
            <a class="sponsor-logo-wrapper" href="http://www.mindfulware.com/" target="_blank"><img src="./img/sponsors/mindfulware.png" class="img-responsive"></a>
            <a class="sponsor-logo-wrapper" href="http://watchmecode.net/" target="_blank"><img src="./img/sponsors/watchmecode.png" class="img-responsive"></a>
            <a class="sponsor-logo-wrapper" href="http://cakephp.org/" target="_blank"><img src="./img/sponsors/cakesoftwarefoundation.png" class="img-responsive"></a>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <h3 class="content-header text-center">Mega-Level</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1 col-flex">
            <a class="sponsor-logo-wrapper" href="http://www.cakedc.com/" target="_blank"><img src="./img/sponsors/cakedc.png" class="img-responsive"></a>
            <a class="sponsor-logo-wrapper" href="http://dealnews.com/" target="_blank"><img src="./img/sponsors/dealnews.png" class="img-responsive"></a>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <h3 class="content-header text-center">Amaze-Level</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-10 col-sm-offset-1 col-flex">
            <a class="sponsor-logo-wrapper" href="http://brandingbrand.com/" target="_blank"><img src="./img/sponsors/brandingbrand.png" class="img-responsive"></a>
            <a class="sponsor-logo-wrapper" href="http://hock.in/" target="_blank"><img src="./img/sponsors/chris-hartjes-is-a-complete-jerk.png" class="img-responsive"></a>
        </div>
    </div>
</div>


<div class="container-fluid footer-container">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <h3 id="contact">Contact</h3>
                <ul class="contact-list fa-ul">
                    <li class="contact-list-item"><i class="fa-li fa fa-twitter-square"></i>
                        <a href="https://twitter.com/funkatron" target="_blank">Ed Finkler on Twitter</a></li>
                    <li class="contact-list-item"><i class="fa-li fa fa-twitter-square"></i>
                        <a href="https://twitter.com/OSMIhelp" target="_blank">OSMI on Twitter</a></li>
                    <li class="contact-list-item"><i class="fa-li fa fa-facebook-square"></i>
                        <a href="https://www.facebook.com/osmihelp" target="_blank">OSMI on Facebook</a></li>
                    <li class="contact-list-item"><i class="fa-li fa fa-tumblr-square"></i>
                        <a href="https://osmihelp.org" target="_blank">OSMI on Tumblr</a></li>
                    <li class="contact-list-item"><i class="fa-li fa fa-envelope-o"></i>
                        <a href="mailto:info@osmihelp.org">E-mail OSMI</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h3>Partners in Crime</h3>
                <ul class="contact-list fa-ul">
                    <li class="contact-list-item">
                        <i class="fa-li fa fa-chevron-circle-right"></i>
                        <a href="http://mhprompt.org/" target="_blank">Prompt</a>
                    </li>
                    <li class="contact-list-item">
                        <i class="fa-li fa fa-chevron-circle-right"></i>
                        <a href="http://baugues.com/depression" target="_blank">Greg Baugues</a>
                    </li>
                    <li class="contact-list-item">
                        <i class="fa-li fa fa-chevron-circle-right"></i>
                        <a href="http://www.devpressed.com/" target="_blank">DevPressed</a>
                    </li>
                    <li class="contact-list-item">
                        <i class="fa-li fa fa-chevron-circle-right"></i>
                        <a href="http://BlueHackers.org" target="_blank">BlueHackers</a>
                    </li>
                    <li class="contact-list-item">
                        <i class="fa-li fa fa-chevron-circle-right"></i>
                        <a href="http://burnout.io/" target="_blank">Burnout.io</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-6">
                <h3>Sign-up for the mailing list</h3>
                <form action="//funkatron.us10.list-manage.com/subscribe/post?u=a26d1ce652ced40c2e73fd2e7&amp;id=e342ef9329" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                    <div class="input-group">
                        <input type="email" value="" name="EMAIL" class="form-control" id="mce-EMAIL" placeholder="email address" required>
                                <span class="input-group-btn">
                                    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary">
                                </span>
                    </div><!-- /input-group -->

                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;"><input type="text" name="b_a26d1ce652ced40c2e73fd2e7_e342ef9329" tabindex="-1" value=""></div>
                    <div class="clear"></div>
                </form>
                <hr>
                <a class="btn btn-primary btn-lg btn-block" href="http://j.mp/osmi2015campaign">Donate Now!</a>

            </div>
        </div>
    </div>
</div>


<script src="./bower_components/jquery/dist/jquery.min.js"></script>
<script src="./bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="./bower_components/vue/dist/vue.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-strap/1.0.3/vue-strap.js"></script>
<script type="text/javascript" src="./js/audio.min.js"></script>
<script type="text/javascript" src="./js/app.js"></script>

</body>
</html>