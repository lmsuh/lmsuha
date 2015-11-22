<div class="span3">
    <div class="widget">
        <div class="widget-header"> <i class="icon-list-alt"></i>
            <h3> Menu</h3>
        </div>
        <div class="widget-content">
            <div class="shortcuts"> 
                <?php
                    echo anchor(
                            'dosen/dmk/mhs', 
                            '<i class="shortcut-icon icon-list-alt"></i><span class="shortcut-label">Mahasiswa</span>',
                            'class="shortcut"'
                        );
                    
                    echo anchor(
                            'dosen/dmk/group', 
                            '<i class="shortcut-icon icon-list-alt"></i><span class="shortcut-label">Group</span>',
                            'class="shortcut"'
                        );
                    
                    echo anchor(
                            'dosen/dmk/tugas', 
                            '<i class="shortcut-icon icon-bookmark"></i><span class="shortcut-label">Daftar Tugas</span>',
                            'class="shortcut"'
                        );
                    
                    echo anchor(
                            'dosen/dmk/materi', 
                            '<i class="shortcut-icon icon-comment"></i><span class="shortcut-label">Materi</span>',
                            'class="shortcut"'
                        );
                ?>
            </div>
        </div>
    </div>
</div>