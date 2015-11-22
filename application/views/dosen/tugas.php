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
                            <div class="widget-table action-table">
                                <div class="widget-header"> <i class="icon-list-alt"></i>
                                    <h3> Tugas</h3>
                                    <div class="pull-right" style="margin-right: 10px;">
                                        <a href="#myModal" role="button" class="btn btn-success" data-toggle="modal">Buat Tugas</a>
                                    </div>
                                </div>
                                <!-- /widget-header -->
                                <div class="widget-content">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th> Tugas </th>
                                                <th> Batas Pengumpulan</th>
                                                <th> Tgs Terkumpul</th>
                                                <th class="td-actions"> </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                if($tugas){
                                                    foreach ($tugas as $tgs){
                                            ?>
                                            <tr>
                                                <td> <?php echo $tgs['nm_tugas']; ?> </td>
                                                <td> <?php echo $tgs['tgl_selesai']; ?> </td>
                                                <td> <?php echo $tgs['jml_kumpul'].'/'.$jmlMhs; ?> </td>
                                                <td class="td-actions">
                                                    <a href="javascript:;" class="btn btn-small btn-success"><i class="btn-icon-only icon-ok"> </i></a>
                                                    <a href="javascript:;" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a>
                                                </td>
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
