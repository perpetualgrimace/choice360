<?php

  // check for optional variables passed from template
  if(isset($alignment)): $alignment = $alignment; else: $alignment = 'u-left'; endif;
  if(isset($layout)): $layout = $layout; else: $layout = 'g-4'; endif;

 ?>
    </article> <!-- end opening article -->

    <aside class="sidebar column <?= $alignment . ' ' . $layout ?>">

      <dl class="contact_links u-list--links u-list--vertical">

        <h3 class="contact_links__heading">Choice</h3>

          <dt class="contact_links__subheading heading milli">Address:</dt>
          <dd class="contact_links__caption milli">
            <a class="contact_links__link" href="<?= $page->gmaps_url() ?>" target="_blank">
              <?= $page->address1() ?><br>
              <?= $page->address2() ?>
            </a>
          </dd>

          <dt class="contact_links__subheading heading milli">Telephone:</dt>
          <dd class="contact_links__caption milli">
            <a class="contact_links__link" href="tel:+01-<?= $page->telephone() ?>" target="_blank"><?= $page->telephone() ?></a>
          </dd>

          <dt class="contact_links__subheading heading milli">Fax:</dt>
          <dd class="contact_links__caption milli"><?= $page->fax() ?></dd>


        <h4 class="contact_links__heading">Editorial &amp; Advertising</h4>

          <dt class="contact_links__subheading heading milli">Editorial:</dt>
          <dd class="contact_links__caption milli">
            <a class="contact_links__link" href="mailto:<?= $page->editorial() ?>" target="_blank"><?= $page->editorial() ?></a>
          </dd>

          <dt class="contact_links__subheading heading milli">Advertising:</dt>
          <dd class="contact_links__caption milli">
            <a class="contact_links__link" href="mailto:<?= $page->advertising() ?>" target="_blank"><?= $page->advertising() ?></a>
          </dd>

          <dt class="contact_links__subheading heading milli">Permissions:</dt>
          <dd class="contact_links__caption milli">
            <a class="contact_links__link" href="mailto:<?= $page->permissions() ?>" target="_blank"><?= $page->permissions() ?></a>
          </dd>

          <dt class="contact_links__subheading heading milli">Suggestions:</dt>
          <dd class="contact_links__caption milli">
            <a class="contact_links__link" href="mailto:<?= $page->suggestions() ?>" target="_blank"><?= $page->suggestions() ?></a>
          </dd>


        <h4 class="contact_links__heading">Subscriptions</h4>

          <dt class="contact_links__subheading heading milli">Support:</dt>
          <dd class="contact_links__caption milli">
            <a class="contact_links__link" href="mailto:<?= $page->support() ?>" target="_blank"><?= $page->support() ?></a>
          </dd>

          <dt class="contact_links__subheading heading milli">Subscriptions:</dt>
          <dd class="contact_links__caption milli">
            <a class="contact_links__link" href="mailto:<?= $page->subscriptions() ?>" target="_blank"><?= $page->subscriptions() ?></a>
          </dd>


        <h4 class="contact_links__heading">General Inquiries</h4>

          <dt class="contact_links__subheading heading milli">Information:</dt>
          <dd class="contact_links__caption milli">
            <a class="contact_links__link" href="mailto:<?= $page->email() ?>" target="_blank"><?= $page->email() ?></a>
          </dd>

      </dl>

    </aside>

  </div> <!-- end opening div.columns -->
</section> <!-- end opening section -->
