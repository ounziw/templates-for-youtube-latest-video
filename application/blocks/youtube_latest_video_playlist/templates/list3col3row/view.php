<?php
defined('C5_EXECUTE') or die("Access Denied.");
$number_of_videos = 9;
$video_css = 'col-xs-4 small-4';

$this->inc('listtemplate.php', array(
    'number_of_videos' => $number_of_videos,
    'video_css' => $video_css,
));