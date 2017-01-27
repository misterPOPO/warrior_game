<?php

require_once __DIR__ . "/../base/localWarrior.php";


$GLOBALS['warriorID'] = 'RoxPOneyBaobab';//Modifiez la variable globale warriorID dans le fichier students/warrior.php

// Définissez vos class de combattants
abstract class Warrior extends LocalWarrior {

	public $id;
	public $name;
	public $speed;
	public $life;
	public $shield;//La classe Warrior doit avoir les attributs $id, $name, $speed, $life et $shield, $imageUrl et $weapon
	public $imageUrl;
	public $weapon;

	public function __construct($id){//Les classes Warrior, StartrekWarrior, MarvelWarrior et PokemonWarrior doivent avoir des constructeurs
		$this->id= $id;//8/ Le constructeur de Warrior doit prendre en paramètre un $id et initialiser l'id, speed=30, life=100, shield=20
		$this->speed = 30;
		$this->life = 100;
		$this->shield = 20;
	}

	public function SetWeapon($weapon){ //La classe Warrior doit avoir une méthode SetWeapon() qui prend comme argument un Weapon
		$this->weapon=$weapon;
		}
	public function SetImageUrl($url)
	{
			$this->imageUrl=$url;
	}
};


class StartrekWarrior extends Warrior{//Les classes StartrekWarrior, MarvelWarrior et PokemonWarrior doivent être crées
	//Les classes StartrekWarrior, MarvelWarrior et PokemonWarrior doivent hériter de Warrior
	public $mentalPower;
	//Les classe StartrekWarrior, MarvelWarrior et PokemonWarrior doivent avoir respectivement les attributs $mentalPower, $superPower et $level
	

	public function __construct($id){
			parent::__construct($id);
		  	$this->mentalPower=8;
		 	
			
	}	

	function power()//6/ Les classes StartrekWarrior, MarvelWarrior et PokemonWarrior doivent avoir un méthode power qui retournent respectivement $mentalPower, $superPower et $level
  	{
   		return $this->mentalPower;
  	}

}


class MarvelWarrior extends Warrior{//Les classes StartrekWarrior, MarvelWarrior et PokemonWarrior doivent être crées
	//Les classes StartrekWarrior, MarvelWarrior et PokemonWarrior doivent hériter de Warrior 
	
	public $superPower ;
	

	public function __construct($id){
			
			parent::__construct($id);
		 	$this->superPower=100;
		 	
		 
	}
   		
	function power()//6/ Les classes StartrekWarrior, MarvelWarrior et PokemonWarrior doivent avoir un méthode power qui retournent respectivement $mentalPower, $superPower et $level
  	{
    		return $this->superPower;
  	}
}

class PokemonWarrior extends Warrior{//Les classes StartrekWarrior, MarvelWarrior et PokemonWarrior doivent être crées
	//Les classes StartrekWarrior, MarvelWarrior et PokemonWarrior doivent hériter de Warrior
	
	public $level;

	public function __construct($id){//Les constructeurs des sous classes de warrior doivent appeler le constructeur de Warrior et affecter $mentalPower = 8, $superPower = 100, $level = 1
			//appel du parametre de la function __construct de la class Warrior  .
			parent::__construct($id);
		 	$this->level =1;
		 	

	}
   		
	function power()//6/ Les classes StartrekWarrior, MarvelWarrior et PokemonWarrior doivent avoir un méthode power qui retournent respectivement $mentalPower, $superPower et $level
  	{
    return $this->level;
  	}
}


class Weapon {

	public $id;
	public $strength;  
	public $imageUrl;


	public function __construct($id, $strength){


		$this->id=$id;
		$this->strength=$strength;
	}	

	public function SetImageUrl($url)
	{   //14/ Warrior et Weapon doivent avoir une méthode SetImageUrl($url)
			$this->imageUrl=$url;
	}
}
