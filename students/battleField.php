<?php

  require_once __DIR__ . "/../base/baseBattleField.php";
  require_once "warrior.php";


class BattleField extends BaseBattleField
 {
  	public static function createMyWarrior(){

  	$monGuerrier= new StartrekWarrior($GLOBALS['warriorID']);
  	$monGuerrier->SetImageUrl("http://www.haterz.fr/degenerappeur/files/artiste/le-roi-heenok-2.jpg");
  	$armes=new Weapon("gourdin", 500);
  	$armes->SetImageUrl('http://m-y-d-s.com/en/weapons/cudgel/a.jpg');
  	$monGuerrier->SetWeapon($armes);
  	$monGuerrier->saveNew();

  	}

	public static function createOtherWarrior(){
	$maGuerriere= new MarvelWarrior ('lagertha');
	$maGuerriere-> SetImageUrl("https://pbs.twimg.com/profile_images/501477670778331136/5JP_CLSg_400x400.jpeg");
	$sword= new Weapon("sword",100); 
	$sword-> SetImageUrl("https://sitamnesty.files.wordpress.com/2010/07/valeur_sure_epee_viking-ulfberht_kult-of-athena.jpg?w=578&h=238");
	$maGuerriere->SetWeapon($sword);
	$maGuerriere->saveNew();
	}


}
