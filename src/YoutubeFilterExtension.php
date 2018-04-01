<?php

namespace Bolt\Extension\MaxMumford\YouTubeFilter;

use Bolt\Extension\SimpleExtension;

/**
 * YouTubeFilter extension class.
 *
 * @author Max Mumford <maxmumford@gmail.com>
 */
class YouTubeFilterExtension extends SimpleExtension
{
  protected function registerTwigFilters() {
    require_once __DIR__ . '/Filters.php';
    return [
        'youtube' => 'youtubeFilterFunc'
    ];
  }
}
