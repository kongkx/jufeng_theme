<?php
/**
 * @file
 * Theme and preprocess functions for menus
 */
function jufeng_menu_link__menu_footer_nav_menu(&$variables) {
  $element = $variables ['element'];
  $sub_menu = '';

  if ($element ['#below']) {
    unset($element['#below']['#theme_wrappers']);
    $sub_menu = '<ul class="secondary">' . drupal_render($element['#below']) . '</ul>';
  }
  $output = l($element ['#title'], $element ['#href'], $element ['#localized_options']);
  return '<li' . drupal_attributes($element ['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}