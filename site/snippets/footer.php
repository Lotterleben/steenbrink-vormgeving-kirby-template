<?php
/**
 * Snippets are a great way to store code snippets for reuse or to keep your templates clean.
 * in loops or simply to keep your templates clean.
 * This footer snippet is reused in all templates. In fetches information from the `site.txt` content file
 * and from the `about` page.
 * More about snippets: https://getkirby.com/docs/guide/templates/snippets
 */
?>

  </div>

  <footer>
    <!--don't fail silently -->
    <?php $about = page('kontakt') ?>

    <a href="mailto:<?= $about->email() ?>"><?= $about->email() ?></a>

    <nav class="legal">
      <ul>
        <li><a href="tel:"<?= $about->phone() ?>><?= $about->phone() ?></a></li>
        <li><a href="<?= url() ?>">&copy; <?= date('Y') ?> / <?= $site->title() ?></a></li>
        <li><a href="<?=  $about->url() ?>">Impressum</a></li>
      </ul>
    </nav>
  </footer>

</body>
</html>
