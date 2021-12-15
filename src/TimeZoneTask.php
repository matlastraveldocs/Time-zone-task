<?php

namespace Drupal\time_zone_task;

/**
 * Class TimeZoneTask
 * @package Drupal\time_zone_task\Services
 */
class TimeZoneTask
{

  protected $current_user;

  public function getData()
  {
    $config = \Drupal::config('time_zone_task.settings');
    $time_zone_country = $config->get('time_zone_country');
    $time_zone_city = $config->get('time_zone_city');
    $time_zone_timezone = $config->get('time_zone_timezone');

    date_default_timezone_set($time_zone_timezone);
    $current_time = \Drupal::time()->getCurrentTime();
    $request_time = date('jS M Y - h:i A', $current_time);

    return array('time_zone_country' => $time_zone_country, 'time_zone_city' => $time_zone_city, 'time_zone_timezone' => $time_zone_timezone, 'time_zone_time' => $request_time);
  }
}