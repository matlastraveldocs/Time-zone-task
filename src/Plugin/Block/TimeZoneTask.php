<?php

namespace Drupal\time_zone_task\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'TimeZoneTask' block.
 *
 * @Block(
 *   id = "time_zone_task_block",
 *   admin_label = @Translation("Time Zone Task Block"),
 *   category = @Translation("TimeZoneTask Form block")
 * )
 */
class TimeZoneTask extends BlockBase
{

  /**
   * {@inheritdoc}
   */
  public function build()
  {
    $data = \Drupal::service('time_zone_task.time_zone_task')->getData();
    $renderable = [
      '#theme' => 'time_zone_task',
      '#data' => $data,
    ];

    return $renderable;
    //$rendered = \Drupal::service('renderer')->renderPlain($renderable);
  }
  public function getCacheMaxAge()
  {
    return 0;
  }
}