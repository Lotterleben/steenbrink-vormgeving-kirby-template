<?php
/**
 * Templates render the content of your pages.
 * They contain the markup together with some control structures like loops or if-statements.
 * The `$page` variable always refers to the currently active page.
 * To fetch the content from each field we call the field name as a method on the `$page` object, e.g. `$page->title()`.
 * This example template makes use of the `$gallery` variable defined in the `album.php` controller
 * and the `cover()` method defined in the `album.php` page model.
 * Snippets like the header and footer contain markup used in multiple templates. They also help to keep templates clean.
 * More about templates: https://getkirby.com/docs/guide/templates/basics
 */
?>
<?php snippet('header') ?>

<main class="album">
<?php snippet('intro') ?>

<article>

    <ul class="album-gallery"<?= attr(['data-even' => $gallery->isEven(), 'data-count' => $gallery->count()], ' ') ?>>
      <?php foreach ($gallery as $image): ?>
      <li>
        <figure>
          <a href="<?= $image->link()->or($image->url()) ?>">
            <?= $image->crop(500, 700) ?>
          </a>
          <figcaption><?= $image->caption() ?></figcaption>
        </figure>
      </li>
      <?php endforeach ?>
    </ul>
  </article>
</main>

<?php snippet('footer') ?>
