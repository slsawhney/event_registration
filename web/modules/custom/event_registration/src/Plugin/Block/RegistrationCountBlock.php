<?php

namespace Drupal\event_registration\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Registration Count block' Block.
 *
 * @Block(
 *   id = "registration_count_block",
 *   admin_label = @Translation("Registration Count block"),
 *   category = @Translation("Registration Count block"),
 * )
 */
class RegistrationCountBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    //--Event Registration Count--
    $eventRegService = \Drupal::service('event_registration.service');
    $registrationCount = $eventRegService->getEventRegistrationCount();

    return [
      '#theme' => 'event_registration_count',
      '#data' => ['registrationCount' => $registrationCount]
    ];
  }
}
