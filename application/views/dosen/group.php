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
                            <div class="widget widget-nopad">
                                <div class="widget-header"> <i class="icon-list-alt"></i>
                                    <h3> Group</h3>
                                    <div class="pull-right" style="margin-right: 10px;">
                                        <a href="#myModal" role="button" class="btn btn-success" data-toggle="modal">Buat Group</a>
                                    </div>
                                </div>
                                <!-- /widget-header -->
                                <div class="widget-content">
                                    <ul class="news-items">
                                        <li>
                                            <div class="news-item-date"> <span class="news-item-day">29</span> <span class="news-item-month">Aug</span> </div>
                                            <div class="news-item-detail"> <a href="http://www.egrappler.com/thursday-roundup-40/" class="news-item-title" target="_blank">Thursday Roundup # 40</a>
                                                <p class="news-item-preview"> This is our web design and development news series where we share our favorite design/development related articles, resources, tutorials and awesome freebies. </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="news-item-date"> <span class="news-item-day">15</span> <span class="news-item-month">Jun</span> </div>
                                            <div class="news-item-detail"> <a href="http://www.egrappler.com/retina-ready-responsive-app-landing-page-website-template-app-landing/" class="news-item-title" target="_blank">Retina Ready Responsive App Landing Page Website Template – App Landing</a>
                                                <p class="news-item-preview"> App Landing is a retina ready responsive app landing page website template perfect for software and application developers and small business owners looking to promote their iPhone, iPad, Android Apps and software products.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="news-item-date"> <span class="news-item-day">29</span> <span class="news-item-month">Oct</span> </div>
                                            <div class="news-item-detail"> <a href="http://www.egrappler.com/open-source-jquery-php-ajax-contact-form-templates-with-captcha-formify/" class="news-item-title" target="_blank">Open Source jQuery PHP Ajax Contact Form Templates With Captcha: Formify</a>
                                                <p class="news-item-preview"> Formify is a contribution to lessen the pain of creating contact forms. The collection contains six different forms that are commonly used. These open source contact forms can be customized as well to suit the need for your website/application.</p>
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
