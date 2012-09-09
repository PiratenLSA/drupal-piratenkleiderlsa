<div id="node-<?php print $node->nid; ?>" class="post <?php print $classes; ?>"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <div class="post-title">
      <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    </div>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <div class="post-entry"<?php print $content_attributes; ?>>
    <?php
      print render($content['field_bilder']);
    ?>

    <?php
      if ($content['field_ort'])
        print render($content['field_ort']) . '<br />';
    ?>

    <?php
      if ($content['field_turnus'])
        print render($content['field_turnus']) . '<br />';
    ?>

    <?php
      if ($content['field_datum'])
        print render($content['field_datum']) . '<br />';
    ?>

    <?php
      if ($content['field_wiki_url'])
        print render($content['field_wiki_url']) . '<br />';
    ?>

    <div style="clear: both;"></div>

    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      hide($content['field_ort_url']);
      print render($content);
    ?>
  </div>

  <div class="post-meta">
    <?php if (!empty($content['links'])): ?>
      <div class="links"><?php print render($content['links']); ?></div>
    <?php endif; ?>
  </div>

  <hr />

  <div class="post-comments" id="comments">
    <?php print render($content['comments']); ?>
  </div>

</div>
