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
                    <div class="row">
                        <div class="span8">
                            <div class="widget widget-table">
                                <div class="widget-header"> <i class="icon-list-alt"></i>
                                    <h3> Daftar Matakuliah</h3>
                                </div>
                                <!-- /widget-header -->
                                <div class="widget-content">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th> Kode </th>
                                                <th> Nama Matakuliah </th>
                                                <th> Jumlah Peserta</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                if($mkdosen){
                                                    foreach ($mkdosen as $mk){
                                            ?>
                                            <tr>
                                                <td> <?php echo $mk['kode_mk'];?> </td>
                                                <td> <?php echo ucwords($mk['nm_mk']);?> </td>
                                                <td> <?php echo $mk['jml'];?> </td>
                                            </tr>
                                            <?php
                                                    }
                                                }
                                            ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /widget-content --> 
                            </div>
                        </div>
                        <div class="span4">
                            <div class="widget widget-nopad">
                                <div class="widget-header"> <i class="icon-list-alt"></i>
                                    <h3> Kalender</h3>
                                </div>
                                <div class="widget-content">
                                    
                                </div>
                            </div>
                            
                            <div class="widget widget-nopad">
                                <div class="widget-header"> <i class="icon-list-alt"></i>
                                    <h3> User Online</h3>
                                </div>
                                <div class="widget-content">
                                    
                                </div>
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
