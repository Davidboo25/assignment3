<?php
	// This is the file for the parent class
	// Thing that im into.
	// name, rating, physical mental
	class ParentClass 
	{
		private $inputName;
    	private $inputRating;
		// Mental or physical
    	private $inputType;

    	public function __construct($inputName, $inputRating, $inputType) 
		{
      		$this->name = $inputName;
      		$this->rating = $inputRating;
      		$this->type = $inputType;
    	}
		public function getName() 
		{
     		return $this->name;
    	}
    	public function getRating() 
		{
      		return $this->rating;
    	}
    	public function getType() 
		{
        	return $this->type;
    	}
		public function __toString() 
		{
      		$hobbieName =  $this->getName() . " is somthing I really enjoy doing in my free time.";
      		$hobbieRating = "I would give it a rating of: " . $this->getRating() . " out of five." ;
      		$hobbieType = "I would probably classify it as a " . $this->getType() ." type of hobbie";
      		return $hobbieName . "<br>" . $hobbieRating . "<br>" . $hobbieType . "<br>";
    	}
	}


