<?php

// defaults
if(!isset($descriptionExcerpt)) $descriptionExcerpt = true;

// send the right header
header('Content-type: text/xml; charset="utf-8"');

// echo the doctype
echo '<?xml version="1.0" encoding="utf-8"?>';

?>
<!-- generator="<?= c::get('feed.generator', 'Kirby') ?>" -->

<rss version="2.0" xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:wfw="http://wellformedweb.org/CommentAPI/" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:atom="http://www.w3.org/2005/Atom">

  <channel>
    <title><?= (isset($title)) ? xml($title) : xml($page->title()) ?></title>
    <link><?= (isset($link)) ? xml($link) : xml(url()) ?></link>
    <generator><?= c::get('feed.generator', 'Kirby') ?></generator>
    <lastBuildDate><?= (isset($modified)) ? date('r', $modified) : date('r', $site->modified()) ?></lastBuildDate>
    <atom:link href="<?= xml(thisURL()) ?>" rel="self" type="application/rss+xml" />

    <?php if($page->description() || isset($description)): ?>
    <description><?= (isset($description)) ? xml($description) : xml($page->description()) ?></description>
    <?php endif ?>

    <?php foreach($items as $item): ?>
    <item>
      <title><?= xml($item->title()) ?></title>
      <link><?= xml($item->url()) ?></link>
      <guid><?= xml($item->url()) ?></guid>
      <pubDate><?= ($item->date()->toDate()) ? date('r', $item->date()->toDate()) : date('r', $item->modified()) ?></pubDate>

      <?php if(isset($descriptionField)): ?>
        <?php if($item->description() != ''): ?>
        <description><![CDATA[<?= $item->description() ?>]]></description>
        <?php else: ?>
        <description><![CDATA[<?= $item->text()->chopper(150) ?>]]></description>
        <?php endif ?>
      <?php endif ?>

    </item>
    <?php endforeach ?>

  </channel>
</rss>
