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
<article class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

    <div class="content-wrap clearfix">
      <a href="<?php print $node_url; ?>"<?php print $content_attributes; ?>>
        <div class="thumb">
          <?php print render($content['field_image']);?>
        </div>
        <div class="content">
          <?php
            hide($content['links']);
            print render($content);
          ?>
        </div>
      </a>
      <?php print render($content['links']); ?>
    </div>
</article>
