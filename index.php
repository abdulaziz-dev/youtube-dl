<?php
 echo('salomlar');
 define('YOUTUBE_DL', 'youtube-dl'); // find your youtube-dl path and replace with it
 $youtube_video = $_GET['link']; // replace with any youtube video
/**
 * Fetches direct URL of given youtube video
 */
function getDirectUrl($youtube_video) {
  // lets build command to get direct url via youtube-dl
  $video_json_command = YOUTUBE_DL.'.'bestvideo[height<=480]+bestaudio/best[height<=480].' -g '.$youtube_video;
 $clcmd = YOUTUBE_DL.' --no-cache-dir';
 shell_exec($clcmd);
  // get url
  $direct_url = shell_exec($video_json_command);
// remove any possible white spaces
  $direct_url = str_replace(array(' ',"\n"), '', $direct_url);
return $direct_url;
 }
echo(getDirectUrl($youtube_video));
