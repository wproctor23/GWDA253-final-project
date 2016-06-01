<!doctype html>
<html class="no-js" lang="eng">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory delete this -->

        <!-- <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css"> -->
        <!-- <link rel="stylesheet" href="compass/stylesheets/screen.css"> -->
        <!-- <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css"> -->
        <!-- <link rel="stylesheet" href="css/style.css"> -->
    <?php wp_head(); ?>
    </head>

    <body>
    <a id="love" href="#" class="junk" title="none" data-id="123" data-time="1:1:1" data-love="true">Yo</a>
        <div class="container">
            <div class="content-container clearfix">
                <div class="main-content">
                    <header>
                        <div class="misc-items">
                            <ul class="top-nav">
                                <li><a href="index.html">Home</a> <span> | </span> </li>
                                <li><a href="about-us.html">About Us</a> <span> | </span> </li>
                                <li><a href="faq.html">FAQ</a> <span> | </span> </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                            <!-- END .top-nav -->
                            <a href="#" class="facebook-icon"><img class="facebook-button" src="<?php bloginfo('template_url'); ?>/images/facebook-btn.png" alt="facebook button"></a>
                            <div class="search-container">
                                <form class="search-form" method="get" action="#">
                                    <input class="search-input" type="text" onFocus="this.value=(this.value=='Search...')? '' : this.value ;" value="Search..." name="search">
                                    <input class="search-submit" type="image" value="Search" src="<?php bloginfo('template_url'); ?>/images/search-btn.gif">
                                </form>
                                <!-- END .search-form -->
                            </div>
                            <!-- END .search-container -->
                            <a href="#" class="donate" target="_blank">
                                <img src="<?php bloginfo('template_url'); ?>/images/donate-btn.png" alt="donate button">
                            </a>
                            <!-- END .donate -->
                        </div>
                        <!-- END .misc-items -->
                        <nav class="navbar navbar-default" role="navigation">
                          <div class="container-fluid">
                            <div class="navbar-header">
                              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>
                              <a href="#">
                                  <img class="logo" src="<?php bloginfo('template_url'); ?>/images/bhs-logo.png" alt="bhs logo">
                              </a>
                            </div>
                            <!-- END .navbar-header -->
                            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                              <ul class="nav navbar-nav">
                                <li class="active"><a href="#">HOME</a></li>
                                <li><a href="#">ABOUT US</a></li>
                                <li><a href="#">SERVICES</a></li>
                                <li><a href="#">ADDICTION</a></li>
                                <li><a href="#">APPOINTMENT</a></li>
                                <li><a href="#">CONTACT</a></li>
                              </ul>
                            </div>
                            <!-- END .navbar-collapse -->
                          </div>
                          <!-- END .container-fluid -->
                        </nav>
                        <!-- END nav -->
                    </header>
                    <!-- END header -->



