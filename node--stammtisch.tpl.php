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
      hide($content['comments']);
      hide($content['links']);
      hide($content['field_ort_url']);
      hide($content['field_geo']);
      print render($content);
    ?>

    <div style="clear: both;"></div>

    <?php
      if ($content['field_geo'])
        print render($content['field_geo']);
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
