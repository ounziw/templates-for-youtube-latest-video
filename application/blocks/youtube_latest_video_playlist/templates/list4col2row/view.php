<?php
defined('C5_EXECUTE') or die("Access Denied.");
$number_of_videos = 8;
$video_css = 'col-xs-6 small-6 col-sm-3 large-3';
?>

<?php
$this->inc('listtemplate.php', array(
    'number_of_videos' => $number_of_videos,
    'video_css' => $video_css,
)); ?> 