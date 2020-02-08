<?php
/**
 * Templates render the content of your pages.
 * They contain the markup together with some control structures like loops or if-statements.
 * The `$page` variable always refers to the currently active page.
 * To fetch the content from each field we call the field name as a method on the `$page` object, e.g. `$page->title()`.
 * This example templates only echos the field values from the content file and doesn't need any special logic from a controller.
 * Snippets like the header, footer and intro contain markup used in multiple templates. They also help to keep templates clean.
 * More about templates: https://getkirby.com/docs/guide/templates/basics
 */
?>

<?php snippet('header') ?>

<main>

  <div class="layout">
      <header class="intro">
        <h3> Impressum </h3>
          <?= $page->address()->kt() ?>

        <h3> Kontakt </h3>
          <!-- since this doesn't come from a textarea,
            we need to manually wrap it into a paragraph -->
          <p>
            <?= html::email($page->email()) ?>
            <br>
            <?= html::tel($page->phone()) ?>
          </p>

        <h3> Redaktionelle Verantwortung </h3>
          <?= $page->text()->kt() ?>

        <h3> Haftungshinweis </h3>
          <?= $page->haftungshinweis()->kt() ?>

      </header>

  </div>
</main>

<?php snippet('footer') ?>
