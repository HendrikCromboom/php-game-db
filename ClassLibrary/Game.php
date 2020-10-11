<?php
Class Game{
    public string $name;
    public string $console;
    public bool $owned;
    public bool $physical;
    public bool $played;
    public bool $finished;
    public bool $platinum;
    public string $ownedSince;
    public bool $playing;
    public string $startedPlaying;
    public string $achievementChild;
    public string $userParent;
    public float $purchasePrice;
    public float $currentValue;
    public float $sellPrice;
}
$thisGame = new Game();