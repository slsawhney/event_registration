<?php

namespace Drupal\event_registration\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * An example controller.
 */
class EventRegistrationController extends ControllerBase {

  public function registration($department) {

    $values = ['type' => 'event_registration', 'field_department' => strtolower($department)];
    $node = \Drupal::entityTypeManager()
      ->getStorage('node')
      ->create($values);

    $form = \Drupal::entityTypeManager()
      ->getFormObject('node', 'default')
      ->setEntity($node);
    return \Drupal::formBuilder()->getForm($form);
  }

}
