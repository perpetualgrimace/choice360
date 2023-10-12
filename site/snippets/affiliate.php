<?php

  // title
  if ($affiliate->title() != "") {
    $title = $affiliate->title();
  } else {
    $title = "missing title";
  }

  // meta
  if ($affiliate->meta() != "") {
    $meta = $affiliate->meta();
  } else {
    $meta = null;
  }

  // create the link from isbn & seller id
  if ($affiliate->isbn() != "" && $affiliate->sellerID() != "") {
    $link = "https://www.amazon.com/dp/" . $affiliate->isbn() . "?tag=" . $affiliate->sellerID();
  } else {
    $link = null;
  }

  // Reviews meta
  if ($affiliate->choiceMeta() != "") {
    $choiceMeta = $affiliate->choiceMeta();
  } else {
    $choiceMeta = null;
  }

  if ($affiliate->imgURL() != "") {
    $imgURL = $affiliate->imgURL();
  } else {
    $imgURL = null;
  }


?>

<li class="affiliate-item columns">

  <!-- main column -->
  <span class="affiliate-content column<?php e($imgURL != null, " g-10") ?>">

    <span class="affiliate-title heading delta"><?= $title ?></span>

    <?php if($meta != null): ?>
      <span class="affiliate-meta"><?= $meta ?></span>
    <?php endif ?>

    <?php if($choiceMeta != null): ?>
      <span class="affiliate-choice-meta epsilon"><?= $choiceMeta ?></span>
    <?php endif ?>

    <?php if($link != null): ?>
      <a class="affiliate-link milli" href="<?= $link ?>">
        View on Amazon
      </a>
    <?php else: ?>
      <span class="affiliate-link milli">Missing IBN or Seller ID</span>
    <?php endif ?>
  </span>

  <!-- optional img -->
  <?php if($imgURL != null): ?>
    <div class="affiliate-figure column g-2">
      <img className="affiliate-img" src="<?= $page->image($imgURL)->url() ?>" />
    </div>
  <?php endif ?>

</li>
