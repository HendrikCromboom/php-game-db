<?php
Class User{
    public string $userName;
    public string $firstName;
    public string $lastName;
    public array $consoles;
    public array $ownedGames;
    public array $playedGames;
    public array $finishedGames;
    public array $gamesPlaying;
    public array $achievements;
}
$thisUser = new User();