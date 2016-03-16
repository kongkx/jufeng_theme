<?php

/**
 * @file
 * Radix theme implementation to display a node.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 *
 * @ingroup themeable
 */
?>
<article class="<?php print $classes; ?> cover clearfix"<?php print $attributes; ?>>
  <?php
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
  ?>
    <div class="content-wrap clearfix">

      <a href="<?php print $node_url; ?>"<?php print $content_attributes; ?>>
        <div class="thumb">
          <?php print render($content['field_image']);?>
        </div>
        <div class="content">
          <?php print render($title_prefix); ?>
          <?php if (!$page && !empty($title)): ?>
            <h2<?php print $title_attributes; ?> class="title"><?php print $title; ?></h2>
          <?php endif; ?>
          <?php print render($title_suffix); ?>
          <?php print render($content); ?>
        </div>
        <?php print render($content['links']); ?>
      </a>
    </div>

</article>
