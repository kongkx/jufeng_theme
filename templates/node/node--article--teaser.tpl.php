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
<article class="<?php print $classes; ?> item clearfix"<?php print $attributes; ?>>
  <?php
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
  ?>

    <div class="date">
      <?php // todo use publication date for output ?>
      <span class="day"><?php print date('d', $created);?></span>
      <span class="year-month"><?php print date('Y-m', $created); ?></span>
    </div>
    <div class="content-wrap clearfix">
      <div class="thumb">
        <?php print render($content['field_image']);?>
      </div>
      <a href="<?php print $node_url; ?>"<?php print $content_attributes; ?>>
        <div class="content">
          <?php print render($title_prefix); ?>
          <?php if (!$page && !empty($title)): ?>
            <h2<?php print $title_attributes; ?>><?php print $title; ?></h2>
          <?php endif; ?>
          <?php print render($title_suffix); ?>
          <?php print render($content); ?>
        </div>
      </a>
      <?php print render($content['links']); ?>
    </div>

</article>
