<?php
	// This is the file for the Child class
	// game that im into
	class ChildClass extends ParentClass 
	{
		private $inputGameName;
    	private $inputGameRating;
    	private $inputGameType;
		private $consoleOrHandheld;
		private $hardware;
		private $yearPlayed;

    	public function __construct($inputGameName, $inputGameRating, $inputGameType, $consoleOrHandheld, $hardware, $yearPlayed) 
		{
      		$this->name = $inputGameName;
      		$this->rating    = $inputGameRating;
      		$this->type = $inputGameType;
			$this->consoleOrHandheld = $consoleOrHandheld;
      		$this->hardware    = $hardware;
      		$this->yearPlayed = $yearPlayed;
    	}
  		public function getOldName() 
		{
        	return parent::getName();
   		}
    	public function setGameType($consoleOrHandheld, $hardware, $yearPlayed) 
		{
			$this->consoleOrHandheld = $consoleOrHandheld;
      		$this->hardware    = $hardware;
      		$this->yearPlayed = $yearPlayed;
    	}
		public function __toString() 
		{
      		$gameName =  $this->getName() . " is a game I really enjoy playing in my free time.";
      		$gameRating = "I would give it a rating of: " . $this->getRating() . " out of five." ;
      		$hobbieType = "I would probably classify it as a " . $this->getType() ." type of hobbie";
			$consoleOrHandheldType = "The type of machine this is played on is " . $this->consoleOrHandheld;
			$hardwareType = "I specificly play this on " . $this->hardware;
			$yearPlayedType = "I played this in the year " . $this->yearPlayed;
      		return $gameName . "<br>" . $gameRating . "<br>" . $hobbieType . "<br>" . $consoleOrHandheldType . "<br>" . $hardwareType . "<br>" . $yearPlayedType . "<br>";
    	}
	}


