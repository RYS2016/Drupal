<?php

namespace Drupal\custom_quotes\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Implements the QuoteForm form controller.
 */
class QuoteForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'custom_quotes_quote_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['quote'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Quote'),
      '#required' => TRUE,
    ];

    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Submit'),
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    // Validation logic goes here if needed.
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Form submission logic goes here.
    $quote = $form_state->getValue('quote');
    // Save the quote to the database or perform any other necessary actions.
    // Example: $this->saveQuote($quote);
    drupal_set_message($this->t('Quote submitted: @quote', ['@quote' => $quote]));
  }

}
