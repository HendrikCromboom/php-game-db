<?php
Class Achievement{
    public string $gameParent;
    public string $userParent;
    public int $percentage;
    public bool $platinum;

    public function __construct(string $gameParent, string $userParent, int $percentage, bool $platinum)
    {
        $this->gameParent = $gameParent;
        $this->userParent = $userParent;
        $this->percentage = $percentage;
        $this->platinum = $platinum;
    }

    public function getGameParent()
    {
        return $this->gameParent;
    }

    public function setGameParent($gameParent)
    {
        $this->gameParent = $gameParent;
    }

    public function getUserParent()
    {
        return $this->userParent;
    }

    public function setUserParent($userParent)
    {
        $this->userParent = $userParent;
    }

    public function getPercentage()
    {
        return $this->percentage;
    }

    public function setPercentage($percentage)
    {
        $this->percentage = $percentage;
    }

    public function isPlatinum()
    {
        return $this->platinum;
    }

    public function setPlatinum($platinum)
    {
        $this->platinum = $platinum;
    }

}
function createAchievement($gameParent, $userParent, $percentage, $platinum){
    $thisAchievement = new Achievement($gameParent, $userParent, $percentage, $platinum );
    array_push($achievementData, $thisAchievement);
}
