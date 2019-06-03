<?php
namespace Drupal\react_sub\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Configure example settings for this site.
 */
class ModuleConfigurationForm extends ConfigFormBase {
  /** @var string Config settings */
  const SETTINGS = 'react_sub.settings';

  /** 
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'react_sub_admin_settings';
  }

  /** 
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      static::SETTINGS,
    ];
  }

  /** 
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config(static::SETTINGS);

    //setting for enabling react globally on every page
    $form['react_sub_global_react'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Enable React Globally'),
      '#default_value' => $config->get('global_react'),
    ];  
    $form['react_sub_app_script'] = [
      '#type' => 'textfield',
      '#title' => $this->t('React App Script'),
      '#default_value' => $config->get('app_script'),
    ];  
    

    return parent::buildForm($form, $form_state);
  }

  /** 
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
      // Retrieve the configuration
       $this->configFactory->getEditable(static::SETTINGS)
      // Set the submitted configuration setting
      ->set('global_react', $form_state->getValue('react_sub_global_react'))
      ->set('app_script', $form_state->getValue('react_sub_app_script'))
      ->save();

    parent::submitForm($form, $form_state);
  }
}