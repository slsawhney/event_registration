<?php

namespace Drupal\event_registration;

class EventRegistrationService {

  public function getEventRegistrationCount() {
    $nodeQuery = \Drupal::entityTypeManager()->getStorage('node')->getQuery();
    $nodeQuery->condition('type', 'event_registration')
      ->condition('status', '1');
    return $nodeQuery->count()->execute();
  }
}
