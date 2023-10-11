<?

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
  <span class="affiliate-content column<? e($imgURL != null, " g-10") ?>">

    <span class="affiliate-title heading delta"><?= $title ?></span>

    <? if($meta != null): ?>
      <span class="affiliate-meta"><?= $meta ?></span>
    <? endif ?>

    <? if($choiceMeta != null): ?>
      <span class="affiliate-choice-meta epsilon"><?= $choiceMeta ?></span>
    <? endif ?>

    <? if($link != null): ?>
      <a class="affiliate-link milli" href="<?= $link ?>">
        View on Amazon
      </a>
    <? else: ?>
      <span class="affiliate-link milli">Missing IBN or Seller ID</span>
    <? endif ?>
  </span>

  <!-- optional img -->
  <? if($imgURL != null): ?>
    <div class="affiliate-figure column g-2">
      <img className="affiliate-img" src="<?= $page->image($imgURL)->url() ?>" />
    </div>
  <? endif ?>

</li>
