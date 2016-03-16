<?php
/**
 * @file
 * Theme settings.
 */

/**
 * Implements theme_settings().
 */
function jufeng_form_system_theme_settings_alter(&$form, &$form_state) {
  // Ensure this include file is loaded when the form is rebuilt from the cache.
  $form_state['build_info']['files']['form'] = drupal_get_path('theme', 'default') . '/theme-settings.php';

  // Add theme settings here.
  $form['jufeng_theme_settings'] = array(
    '#title' => t('Theme Settings'),
    '#type' => 'fieldset',
  );

  // Copyright.
  $copyright = theme_get_setting('copyright');
  $form['jufeng_theme_settings']['copyright'] = array(
    '#title' => t('Copyright'),
    '#type' => 'text_format',
    '#format' => $copyright['format'],
    '#default_value' => $copyright['value'] ? $copyright['value'] : t('Drupal is a registered trademark of Dries Buytaert.'),
  );

  // Company info
  $form['company_info'] = array (
    '#title' => t('Company Info'),
    '#type' => 'fieldset',
    '#collapsible' => TRUE,
  );
  $form['company_info']['phone'] = array(
    '#title' => t('Phone'),
    '#type' => 'textfield',
    '#default_value' => theme_get_setting('phone'),
  );
  $form['company_info']['address'] = array(
    '#title' => t('Address'),
    '#type' => 'textfield',
    '#default_value' => theme_get_setting('address')
  );
  $form['company_info']['icp'] = array (
    '#title' => t('ICP Code'),
    '#type' => 'textfield',
    '#default_value' => theme_get_setting('icp'),
  );

  $form['social_network'] = array(
    '#title' => t('Social Network'),
    '#type' => 'fieldset',
    '#collapsible' => TRUE,
  );
  $form['social_network']['social_option'] = array(
    '#title' => t('Social Options'),
    '#type' => 'checkboxes',
    '#options' => array(
      'social_wechat' => t('wechat'),
      'social_weibo' => t('weibo'),
      'social_phone' => t('phone')
    ),
    '#default_value' => theme_get_setting('social_option')
  );
  $social_wechat = theme_get_setting('social_wechat');
  $form['social_network']['social_wechat'] = array(
    '#title' => t('Wechat'),
    '#type' => 'text_format',
    '#format' => $social_wechat['format'],
    '#default_value' => $social_wechat['value'] ? $social_wechat['value'] : t('Wechat Content'),
  );
  $social_weibo = theme_get_setting('social_weibo');
  $form['social_network']['social_weibo'] = array(
    '#title' => t('Weibo'),
    '#type' => 'text_format',
    '#format' => $social_weibo['format'],
    '#default_value' => $social_weibo['value'] ? $social_weibo['value'] : t('Weibo Content'),
  );
  $social_phone = theme_get_setting('social_phone');
  $form['social_network']['social_phone'] = array(
    '#title' => t('Phone'),
    '#type' => 'text_format',
    '#format' => $social_phone['format'],
    '#default_value' => $social_phone['value'] ? $social_phone['value'] : t('Phone Content'),
  );


  // Return the additional form widgets.
  return $form;
}
