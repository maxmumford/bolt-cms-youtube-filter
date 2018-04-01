<?php

/**
 * Regex credit: https://stackoverflow.com/a/6382259/939543
 */
function youtubeFilterFunc($url) {
  if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match)) {
    return "https://www.youtube.com/embed/" . $match[1];
  }
  return $url;
}
