<?php 
    $uri_cek = $this->uri->segment(2, 0);
?>
<div class="subnavbar">
    <div class="subnavbar-inner">
        <div class="container">
            <ul class="mainnav">
                <li <?php echo $uri_cek == 'home' ? 'class="active"':'';?> >
                    <?php
                        echo anchor(
                                'dosen/home', 
                                '<i class="icon-dashboard"></i><span>Beranda</span>'
                            );
                    ?>
                </li>
                <li <?php echo $uri_cek == 'mk' ? 'class="active"':'';?> >
                    <?php
                        echo anchor(
                                'dosen/mk', 
                                '<i class="icon-list-alt"></i><span>Daftar Matakuliah</span>'
                            );
                    ?>
                </li>
                <li <?php echo $uri_cek == 'kelas' || $uri_cek == 'dmk' ? 'class="active"':'';?> >
                    <?php
                        echo anchor(
                                'dosen/kelas', 
                                '<i class="icon-facetime-video"></i><span>Kelas LMS</span>'
                            );
                    ?>
                </li>
                <li></li>
            </ul>
        </div>
    </div>
</div>