<?php
/**
 * @file
 * Theme functions
 */

// Include all files from the includes directory.
$includes_path = dirname(__FILE__) . '/includes/*.inc';
foreach (glob($includes_path) as $filename) {
  require_once dirname(__FILE__) . '/includes/' . basename($filename);
}

/**
 * Implements template_preprocess_page().
 */
function jufeng_preprocess_page(&$variables) {
  // Add copyright to theme.
  if ($copyright = theme_get_setting('copyright')) {
    $variables['copyright'] = check_markup($copyright['value'], $copyright['format']);
  }
  // Add social network to theme
  if ($social_option = theme_get_setting('social_option')) {
    $social_settings = [];
    foreach($social_option as $key => $value) {
      if (!empty($value)) {
        $tmp = theme_get_setting($key);
        $social_settings[$key] = check_markup($tmp['value'], $tmp['format']);
      }
    }
    $variables['social_settings'] = $social_settings;
  }

  // Add templates suggestions
  if (isset($variables['node']->type)) {
    $variables['theme_hook_suggestions'][] = 'page__node__' . $variables['node']->type;
  }
}

/**
 * Implements template_preprocess_node().
 */
function jufeng_preprocess_node(&$variables) {
  // Custom display templates will be called node--[type]--[viewmode].tpl.php
  // If entity_view_mode module is enabled, comment this suggestions out;
  //  $variables['theme_hook_suggestions'][] = 'node__' . $variables['type'] . '__' . $variables['view_mode'];

//  dpm($variables);
  //  dpm($variables['theme_hook_suggestions']);
}

function jufeng_preprocess_views_view(&$variables) {

}


/**
 * Implements template_preprocess_panels_pane().
 */
function jufeng_preprocess_panels_pane(&$variables) {
  $pane = $variables['pane'];
  if (isset($pane->css['css_class'])) {
    // Check for Bootstrap extra panel classes.
    $css_classes = explode(" ", $pane->css['css_class']);
    // Custom panel class
    $bootstrap_panel_classes_extra = array(
      'panel-blank',
    );
    $panel_classes = array_intersect($css_classes, $bootstrap_panel_classes_extra);
    if (count($panel_classes)) {
      if ($panel_classes[0] == "panel-list-group") {
        $variables['theme_hook_suggestions'][] = 'panels_pane__bootstrap_panel_list_group';
      } else {
        // Use a different template.
        $variables['theme_hook_suggestions'][] = 'panels_pane__bootstrap_panel';
      }

      // Add default classes to panel.
      $variables['classes_array'][] = 'panel';
      $variables['classes_array'] += $panel_classes;

      // Add default classes to pane title.
      $variables['title_attributes_array']['class'][] = 'panel-title';
    }
  }
}