<?php

namespace Bolt\Extension\MaxMumford\YoutubeFilter;

use Bolt\Extension\SimpleExtension;

/**
 * YoutubeFilter extension class.
 *
 * @author Max Mumford <maxmumford@gmail.com>
 */
class YoutubeFilterExtension extends SimpleExtension
{
  protected function registerTwigFilters() {
    require_once __DIR__ . '/Filters.php';
    return [
        'youtube' => 'youtubeFilterFunc'
    ];
  }
}
