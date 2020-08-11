<?php
 echo('salom');
 define('YOUTUBE_DL', '/usr/local/bin/youtube-dl'); // find your youtube-dl path and replace with it
 $youtube_video = $_GET['link']; // replace with any youtube video
/**
 * Fetches direct URL of given youtube video
 */
function getDirectUrl($youtube_video) {
  // lets build command to get direct url via youtube-dl
  $video_json_command = YOUTUBE_DL.' -g '.$youtube_video;
  // get url
  $direct_url = shell_exec($video_json_command);
// remove any possible white spaces
  $direct_url = str_replace(array(' ',"\n"), '', $direct_url);
return $direct_url;
 }
