<?php
include 'ClassLibrary/Achievement.php';
include 'ClassLibrary/Game.php';
include 'ClassLibrary/User.php';

$achievementData = file_get_contents('Data/achievementData.json');
$achievementData = json_decode($achievementData, true);
$gameData = file_get_contents('Data/gameData.json');
$gameData = json_decode($gameData, true);
$userData = file_get_contents('Data/userData.json');
$userData = json_decode($userData, true);






