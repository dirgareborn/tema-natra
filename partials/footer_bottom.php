  <div class="footer_bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="footer_bottom_left">
              <?php if (file_exists('mitra')): ?>
              Hosting didukung <a href="https://my.idcloudhost.com/aff.php?aff=3172" rel="noopener noreferrer" target="_blank">
                  <img src="<?= base_url('/assets/images/Logo-IDcloudhost.png')?>" height='15px' alt="Logo-IDCloudHost" title="Logo-IDCloudHost"></a>
              <?php endif; ?>
          </div>
        </div>
        <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
          <div class="footer_bottom_right" style="text-align:center;">
		    <a href="#" rel="noopener noreferrer" target="_blank"> &copy; 2020 Pemerintah <?=  ucwords($this->setting->sebutan_desa). (($desa['nama_desa']) ? ' ' . $desa['nama_desa'] : ''); ?></a>
		   <!-- <i class="fa fa-circle" style="font-size: smaller;"></i> --><br>
		   <a href="https://github.com/OpenSID/OpenSID" rel="noopener noreferrer" target="_blank">OpenSID <?= AmbilVersi()?></a>
		   <a href="<?= site_url(); ?>siteman" rel="noopener noreferrer" target="_blank"> | Natra 4.2.1 </a>
          </div>
        </div>
      </div>
    </div>
  </div>
<script type="text/javascript">
function printDiv(divName) {
	var printContents = document.getElementById(divName).innerHTML;
	var originalContents = document.body.innerHTML;
	document.body.innerHTML = printContents;
	window.print();
	document.body.innerHTML = originalContents;
} </script>
