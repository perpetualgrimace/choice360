<?php

  // check for optional variables passed from template
  if(isset($alignment)): $alignment = $alignment; else: $alignment = 'u-left'; endif;
  if(isset($layout)): $layout = $layout; else: $layout = 'g-4'; endif;

?>

    <aside class="sidebar column <?= $alignment . ' ' . $layout ?>">

      <?php snippet('search.bar', array(
        'search_target' => 'podcasts',
        'search_placeholder' => 'Search episodes...'
      )) ?>

      <h2 class="delta">Never miss an episode:</h2>

	  <div>

      <nav class="sidebar__nav">
        <ul class="u-unbullet">

			<a href="https://itunes.apple.com/us/podcast/the-authority-file/id1339793198"> <img width="128" height="44" src="https://www.choice360.org/librarianship/podcast/app_store.png"> </a> <br></br>
			<a href="https://playmusic.app.goo.gl/?ibi=com.google.PlayMusic&isi=691797987&ius=googleplaymusic&link=https://play.google.com/music/m/Ie3wymnx2tdjbrjo2lz6qa5tlmu?t%3DAuthority_File%26pcampaignid%3DMKT-na-all-co-pr-mu-pod-16"> <img width="128" height="44" src="https://www.choice360.org/librarianship/podcast/google_play.png"> </a> <br></br>
			<a href="https://www.stitcher.com/s?fid=143778&refid=stpr"> <img source="https://www.stitcher.com/s?fid=143778&refid=stpr"><img width="120" height="90" src="https://www.choice360.org/librarianship/podcast/stitcher-banner-120x90.jpg"> </a>

        </ul>

	  </div>
      </nav>

    </aside>

  </div> <!-- end opening div.columns -->
</section> <!-- end opening section -->
