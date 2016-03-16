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
    hide($content['field_phone']);
    hide($content['field_service_link']);
  ?>
  <div class="avatar">
    <?php print render($content['field_avatar']);?>
  </div>
  <div class="content-wrap clearfix">
    <div class="content">
      <?php print render($title_prefix); ?>
      <?php if (!$page && !empty($title)): ?>
        <h2<?php print $title_attributes; ?>><?php print $title; ?></h2>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php
        print render($content['field_download_link']);
      ?>
      <h2 class="title">
        <?php print render($content['field_name']); ?>
        <small class="em">
          (<?php print render($content['field_nickname']); ?>)&nbsp;&nbsp;&nbsp;
          <?php print render($content['field_position']); ?>
        </small>
      </h2>
      <?php print render($content); ?>
    </div>
    <div class="footer">
      <div class="footer-left">
        <?php print render($content['field_phone']); ?>
      </div>
      <div class="footer-right">
        <?php print render($content['field_service_link']); ?>
      </div>
    </div>
  </div>

</article>
