* userModel
    * userName String
    * firstName String
    * lastName String
    * consoles StringArr[PS3, PS4, PSVita, PS5]  
    * ownedGames List<gameModel>
    * playedGames List <gameModel>
    * finishedGames List <gameModel>
    * gamesPlaying List<List<gameModel>gamePlaying> 
    * achievements List<achievementModel>
    * currentGame gameModel
    * currentAchievementHunt achievementModel
    
* gameModel
    * gameName String
    * console String
    * owned Bool
    * played Bool
    * finished Bool
    * ownedSince Date
    * gamePlaying Bool
    * startedPlaying
    * currentGame Bool
    * achievementsThis achievementModel
    * userParent userModel
    * purchasePrice Decimal
    * currentValue Decimal
    * sellPrice Decimal
    
* achievementModel
    * gameParent gameModel
    * userParent userModel
    * percentage Int
    * platinum Bool
    
    
    