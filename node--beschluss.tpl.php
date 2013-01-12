<div id="node-<?php print $node->nid; ?>" class="post <?php print $classes; ?>"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <div class="post-title">
      <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    </div>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <?php //print_r($content); ?>

  <div class="post-entry"<?php print $content_attributes; ?>>
    <?php print render($content['field_status']); ?>

    <div class="field beschlussnummer">
      <strong>Beschlussnummer:</strong><br />
      <?php print $content['field_beschlussdatum'][0]['#markup'] . '/' . sprintf('%03d', $content['field_fortlaufende_nummer'][0]['#markup']) ?>
    </div>

    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['field_beschlussdatum']);
      hide($content['field_fortlaufende_nummer']);
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
  </div>

  <div class="post-meta">
    <?php if (!empty($content['links'])): ?>
      <div class="links"><?php print render($content['links']); ?></div>
    <?php endif; ?>
  </div>
</div>
