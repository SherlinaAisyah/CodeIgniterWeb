<?php
 foreach ($tampil as $tm) {
?>
    <div class="col-md-4">
                    <a href="<?=base_url()?>index.php/admin/detail/<?=$tm->id_barang?>" data-toggle="modal" class="thumbnail">
                    <img src="<?php echo base_url()?>asset/gambar/<?= $tm->gambar?>" alt="...">
                     <div class="caption text-center"> 
                     	<p><?= $tm->nama_barang?></p>
                     	<p><?= $tm->harga?></p>
                        <p class="read"><b>READ MORE</b></p>
                    </div>
                    </a>
                    </div>
<?php
}
?>
 </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                    <ul class="pagination" style="align-center">
                      <li><a href="#">&laquo;</a></li>
                      <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li><a href="#">&raquo;</a></li>
                    </ul>
                    </div>
                    <div class="col-md-4"></div>