<?php

function piratenkleiderlsa_form_system_theme_settings_alter (&$form, $form_state) {
  require(DRUPAL_ROOT . '/' . drupal_get_path('theme', 'piratenkleider') . '/inc/constants.php');

  for ($i = 1; $i <= 3; $i++) {
    $form['teaser' . $i] = array(
      '#type' => 'fieldset',
      '#title' => t('Teaserlink ' . $i),
    );

    $form['teaser' . $i]['piratenkleiderlsa_teaser' . $i . '_symbol'] = array(
      '#type' => 'select',
      '#title' => t('Symbol'),
      '#options' => $textsymbolliste_plain,
      '#default_value' => theme_get_setting('piratenkleiderlsa_teaser' . $i . '_symbol'),
    );

    $form['teaser' . $i]['piratenkleiderlsa_teaser' . $i . '_title'] = array(
      '#type' => 'textfield',
      '#title' => t('Titel'),
      '#default_value' => theme_get_setting('piratenkleiderlsa_teaser' . $i . '_title'),
    );

    $form['teaser' . $i]['piratenkleiderlsa_teaser' . $i . '_subtitle'] = array(
      '#type' => 'textfield',
      '#title' => t('Untertitel'),
      '#default_value' => theme_get_setting('piratenkleiderlsa_teaser' . $i . '_subtitle'),
    );

    $form['teaser' . $i]['piratenkleiderlsa_teaser' . $i . '_url'] = array(
      '#type' => 'textfield',
      '#title' => t('URL'),
      '#default_value' => theme_get_setting('piratenkleiderlsa_teaser' . $i . '_url'),
    );
  }

}

?>
