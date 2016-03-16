<?php
/**
 * @file
 * Template for o2opz index
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="panel-display clearfix <?php if (!empty($classes)) {
  print $classes;
} ?><?php if (!empty($class)) {
  print $class;
} ?>" <?php if (!empty($css_id)) {
  print "id=\"$css_id\"";
} ?>>
  <div class="section">
    <div class="container">
      <?php print $content['section1']; ?>
    </div>
  </div>
  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <?php print $content['section2_1']; ?>
        </div>
        <div class="col-md-6">
          <?php print $content['section2_2']; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="section style-2">
    <div class="container">
      <div class="row">
        <div class="compo">
          <?php print $content['section3_1']; ?>
        </div>
        <div class="compo">
          <?php print $content['section3_2']; ?>
        </div>
      </div>
    </div>
  </div>

  <?php if (!empty($content['section4_2']) || !empty($content['section4_1'])): ?>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <?php print $content['section4_1']; ?>
          </div>
          <div class="col-md-6">
            <?php print $content['section4_2']; ?>
          </div>
        </div>
      </div>
    </div>

  <?php endif; ?>

</div><!-- /.bryant-flipped -->
