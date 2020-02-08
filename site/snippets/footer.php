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

  <footer class="footer">
    <nav class="legal">
      <ul>
        <li><a href="<?= url() ?>">&copy; <?= date('Y') ?> / <?= $site->title() ?></a></li>
        <li><a href="<?= url() ?>">TODO impressum</a></li>
      </ul>
    </nav>
    <?php if ($about = page('kontakt')): ?>
      <nav class="contact">
        <ul>
          <li><a href="<?= url() ?>"><?= $about->email() ?></a></li>
          <li><a href="<?= url() ?>"><?= $about->phone() ?></a></li>
        </ul>
    </nav>
    <?php endif ?>
  </footer>

</body>
</html>
