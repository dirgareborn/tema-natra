<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<div class="teks-berjalan">

	<?php foreach ($teks_berjalan AS $teks): ?>
		<span class="teks-berjalan" style="font-family: Oswald; padding-right: 50px;">
			<?= $teks['teks']?>
			<?php if ($teks['tautan']): ?>
				<a href="<?= $teks['tautan'] ?>" rel="noopener noreferrer" title="Baca Selengkapnya"><?= $teks['judul_tautan']?></a>
				<?php endif; ?>
			</span>
			<?php endforeach; ?>
		</div>
