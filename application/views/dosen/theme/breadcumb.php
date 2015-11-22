<div class="row">
    <div class="span12">
        <div class="widget">
            <div class="widget-header"> <i class="icon-list-alt"></i>
                <h3> <?php echo ucwords(strtolower($mk->nm_mk)); ?></h3>
                <div class="pull-right" style="margin-right: 10px;">
                    <?php 
                        echo anchor(
                            'dosen/kelas', 
                            'Kembali',
                            'class="btn btn-success"'
                        );
                    ?>
                </div>
            </div>
            <!-- /widget-header -->
        </div>
    </div>
</div>