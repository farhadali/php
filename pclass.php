<?php

Class Fruit{

	public $name;
	public $color;
	public $weight;

	function __construct($name,$color,$weight){
		$this->name = $name;
		$this->color= $color;
		$this->weight = $weight;

	}

	public function set_name($name){
		$this->name = $name;
	}

	public function set_color($color){
		$this->color= $color;
	}

	public function set_weight($weight){
		$this->weight = $weight;
	}


	public function get_name(){
		return $this->name;
	}
	public function get_color(){
		return $this->color;
	}
	public function get_weight(){
		return $this->weight;
	}
	public function fruit_full_des(){
		return $this->name." ".$this->color." ".$this->weight;
	}



}

Class Mango extends Fruit{
	public function message(){
		return "Am i fruit or else";
	}
}

//$fruit = new Fruit('amm','red','2kg');
$Mango = new Mango('amm','red','2kg');
//$fruit->set_name('Apple');
//$fruit->set_color('Red');
//$fruit->set_weight('250 gm');



?>