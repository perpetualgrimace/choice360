<?php
  // check for optional variables passed from template
  if(isset($alignment)): $alignment = $alignment; else: $alignment = 'u-left'; endif;
?>


<div class="columns scale--normal">
  <div class="column">

    <h3>ACRL-Choice Webinars</h3>
    <?= $page->webinars()->kirbytext() ?>

    <h3>Bibliographic Essays</h3>
    <?= $page->essays()->kirbytext() ?>

	<h3>Authority File</h3>
    <?= $page->podcast()->kirbytext() ?>

    <h3><?= $pages->find('blog')->headline() ?></h3>
    <?= $page->blog()->kirbytext() ?>

    <h3>Outstanding Academic Titles</h3>
    <?= $page->oat()->kirbytext() ?>

	<h3>Choice Research</h3>
	<?= $page->whitepaper()->kirbytext() ?>

  </div>
</div>
