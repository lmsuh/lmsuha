<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <title>Dashboard - Bootstrap Admin Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="<?php echo base_url();?>asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>asset/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
            rel="stylesheet">
    <link href="<?php echo base_url();?>asset/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url();?>asset/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>asset/css/pages/dashboard.css" rel="stylesheet">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <?php 
            $this->load->view('dosen/theme/header');
            $this->load->view('dosen/theme/topmenu');
        ?>
        <div class="main">
            <div class="main-inner">
                <div class="container">
                    <?php $this->load->view('dosen/theme/breadcumb');?>
                    <div class="row">
                        <?php
                            $this->load->view('dosen/theme/sidemenu');
                        ?>
                        <div class="span9">
                            <div class="widget">
                                <div class="widget-header"> <i class="icon-list-alt"></i>
                                    <h3> Topik</h3>
                                </div>
                                <!-- /widget-header -->
                                <div class="widget-content">
                                    <p>This is our web design and development news series where we share our favorite design/development related articles, resources, tutorials and awesome freebies. </p>
                                    <ul class="messages_layout">
                                        <li class="from_user left"> <a href="#" class="avatar"><img src="img/message_avatar1.png"/></a>
                                            <div class="message_wrap"> <span class="arrow"></span>
                                                <div class="info"> <a class="name">John Smith</a> <span class="time">1 hour ago</span>
                                                    <div class="options_arrow">
                                                        <div class="dropdown pull-right"> <a class="dropdown-toggle " id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="#"> <i class=" icon-caret-down"></i> </a>
                                                            <ul class="dropdown-menu " role="menu" aria-labelledby="dLabel">
                                                                <li><a href="#"><i class=" icon-share-alt icon-large"></i> Reply</a></li>
                                                                <li><a href="#"><i class=" icon-trash icon-large"></i> Delete</a></li>
                                                                <li><a href="#"><i class=" icon-share icon-large"></i> Share</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text"> As an interesting side note, as a head without a body, I envy the dead. There's one way and only one way to determine if an animal is intelligent. Dissect its brain! Man, I'm sore all over. I feel like I just went ten rounds with mighty Thor. </div>
                                            </div>
                                        </li>
                                        <li class="by_myself right"> <a href="#" class="avatar"><img src="img/message_avatar2.png"/></a>
                                            <div class="message_wrap"> <span class="arrow"></span>
                                                <div class="info"> <a class="name">Bender (myself) </a> <span class="time">4 hours ago</span>
                                                    <div class="options_arrow">
                                                        <div class="dropdown pull-right"> <a class="dropdown-toggle " id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="#"> <i class=" icon-caret-down"></i> </a>
                                                            <ul class="dropdown-menu " role="menu" aria-labelledby="dLabel">
                                                                <li><a href="#"><i class=" icon-share-alt icon-large"></i> Reply</a></li>
                                                                <li><a href="#"><i class=" icon-trash icon-large"></i> Delete</a></li>
                                                                <li><a href="#"><i class=" icon-share icon-large"></i> Share</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text"> All I want is to be a monkey of moderate intelligence who wears a suit… that's why I'm transferring to business school! I had more, but you go ahead. Man, I'm sore all over. I feel like I just went ten rounds with mighty Thor. File not found. </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /widget-content --> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    <!-- /main -->
    
    <?php
        $this->load->view('dosen/theme/footer');
    ?>
    <!-- Le javascript
    ================================================== --> 
    <!-- Placed at the end of the document so the pages load faster --> 
    <script src="<?php echo base_url();?>asset/js/jquery-1.7.2.min.js"></script> 
    <script src="<?php echo base_url();?>asset/js/excanvas.min.js"></script> 
    <script src="<?php echo base_url();?>asset/js/chart.min.js" type="text/javascript"></script> 
    <script src="<?php echo base_url();?>asset/js/bootstrap.js"></script>
    <script language="javascript" type="text/javascript" src="<?php echo base_url();?>asset/js/full-calendar/fullcalendar.min.js"></script>

    <script src="<?php echo base_url();?>asset/js/base.js"></script> 
    
    </body>
</html>
