<?

  $products = $pages->find('products')->children()->visible();
  $libs     = $pages->find('librarianship')->children()->visible();
  $events   = $pages->find('blog')->children()->visible()->filterBy('template', 'event')->sortby('date');

  // check for optional variables passed from template
  if(isset($alignment)): $alignment = $alignment; else: $alignment = 'u-left'; endif;
  if(isset($layout)): $layout = $layout; else: $layout = 'g-4'; endif;

  // page template
  if($page->template() == 'webinar'):
  $category = 'webinar';
  
  elseif($page->template() == 'podcast'):
  $category = 'podcast';
  
  else:
  $category = 'article';

  endif;

  // twitter hashtag
  if($page->hashtag() != ''):
    $hashtag = $page->hashtag();
    $hashtag = preg_replace('/\s+/', '', $hashtag);
    $hashtag = preg_replace('/#+/', '', $hashtag);

  // backup category as hashtag
  else:
    $hashtag = $page->category();
    $hashtag = preg_replace('/\s+/', '', $hashtag);
    $hashtag = preg_replace('/#+/', '', $hashtag);

  endif;
  
?>

 </article> <!-- end opening article -->

    <aside class="sidebar column <?= $alignment . ' ' . $layout ?>">


      <? if ($events->count() > 0): ?>
      <h2 class="delta">Upcoming events:</h2>

      <nav class="sidebar__nav">
        <ul class="u-unbullet">

          <? foreach($events as $event): ?>
          <li class="sidebar__item">
            <a class="milli<? if ($page->slug() == $event->slug()): ?> is-active_pg<? endif ?>" href="<?= $event->url() ?>">
              <?= $event->title() ?>
            </a>
          </li>
          <? endforeach ?>

        </ul>
      </nav>
      <? endif ?>


      <h2 class="gamma">Share this <?= $category ?></h2>

      <ul class="share milli u-unbullet">

        <li class="share__item">
          <a class="share__link share__link--facebook" target="_blank"
            href="https://www.facebook.com/sharer.php?u=<?= $page->url() ?>">
            <? snippet('icon--facebook') ?>Facebook</a>
          </li>

          <li class="share__item">
            <a class="share__link share__link--twitter" target="_blank"
            href="https://twitter.com/share?url=<?= $page->url() ?>&text=<?= excerpt($page->title(), 60) ?>&via=<?= $pages->find('contact')->twitter()
            ?>&hashtags=<?= $hashtag ?>">
            <? snippet('icon--twitter') ?>Twitter</a>
          </li>

          <li class="share__item">
            <a class="share__link share__link--linkedin" target="_blank"
            href="http://www.linkedin.com/shareArticle?url=<?= $page->url() ?>&title=<?= $page->title() ?>">
            <? snippet('icon--linkedin') ?>LinkedIn</a>
          </li>


      </ul>

    </aside>

  </div> <!-- end opening div.columns -->
</section> <!-- end opening section -->
