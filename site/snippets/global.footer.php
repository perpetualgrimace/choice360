<?php
  // check for optional variables passed from template
  if(isset($depth)): $depth = $depth; else: $depth = 'u-back'; endif;
  if(isset($theme)): $theme = $theme; else: $theme = 't-dark'; endif;
  if(isset($alignment)): $alignment = $alignment; else: $alignment = 'u-center'; endif;
  $contact = $pages->find('contact');
?>

</main>

<footer class="footer section <?= $depth . ' ' . $theme ?>" role="contentinfo">
  <div class="container u-center">
    <div class="columns">
      <div class="column g-4">

        <h2 class="delta">Follow Choice</h2>

        <ul class="inline_list">
          <li><a class="milli" href="http://facebook.com/<?= $pages->find('contact')->facebook() ?>"><?php snippet('icon--facebook') ?> Facebook</a></li>
          <li><a class="milli" href="http://twitter.com/<?= $pages->find('contact')->twitter() ?>"><?php snippet('icon--twitter') ?> Twitter</a></li>
          <li><a class="milli" href="https://youtube.com/channel/UC4AQ1G-u32Y9OX5hRzxdXrQ/<?= $pages->find('contact')->youtube() ?>"><?php snippet('icon--youtube') ?> YouTube</a></li>
        </ul>

      </div>
      <div class="column g-4">

        <h2 class="delta">Site map</h2>

        <ul class="sitemap">
          <?php foreach($pages->published() as $page): ?>
            <?php if($page->depth() == 1): ?>
              <li class="sitemap__item">
                <a class="sitemap__link milli" href="<?= $site->url() . '/' . $page->slug() ?>">
                  <?= $page->title() ?>
                </a>
              </li>
            <?php endif ?>
          <?php endforeach ?>

          <li class="sitemap__item">
            <a class="sitemap__link milli" href="<?= $site->url() . '/copyright' ?>">Copyright</a>
          </li>

          <li class="sitemap__item">
            <a class="sitemap__link milli" href="<?= $site->url() . '/privacy' ?>">Privacy Policy</a>
          </li>

        </ul>

      </div>
      <div class="column g-4">

        <h2 class="delta">Search</h2>

        <?php snippet('search.bar') ?>

      </div>
    </div>
    <div class="columns subsidiaries g-center">

      <div class="subsidiary u-right">
        <a href="http://www.ala.org">
          <img class="subsidiary__img" src="<?= $site->url() ?>/assets/img/ala.png" alt="">
        </a>
      </div>

      <div class="subsidiary u-left">
        <a href="http://www.ala.org/acrl/">
          <img class="subsidiary__img" src="<?= $site->url() ?>/assets/img/acrl.png" alt="">
        </a>
      </div>

    </div>



    <div class="columns copyright milli">
      <p>Choice is a publishing unit of the <abbr title="Association of College and Research Libraries">ACRL</abbr></p>
      <p><?= $site->copyright()->kirbytext() ?></p>
    </div>
  </div>
</footer>

<script>
(function(d) {
    var config = {
      kitId: 'rsg5lvu',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
<script src="<?= $site->url() ?>/assets/build/js/main.min.js"></script>
<link rel="stylesheet" href="<?= $site->url() ?>/assets/build/css/motion.min.css">

</body>
</html>
