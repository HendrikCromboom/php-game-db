<?php
include 'ClassLibrary/Achievement.php';
include 'ClassLibrary/Game.php';
include 'ClassLibrary/User.php';

$achievementData = file_get_contents('achievementData.json');
echo $achievementData;

