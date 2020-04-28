<?php

namespace App;

class Catalogue{
	public static $arr = [
			-1 => 4,
			0 => ['name' => 'Table', 'descr' => 'This is a basic table.', 'price' => '1000UAH'],
			['name' => 'Chair', 'descr' => 'This is a basic chair.', 'price' => '299UAH'],
			['name' => 'Bed', 'descr' => 'This is a basic bed.', 'price' => '4999UAH'],
			['name' => 'Lamp', 'descr' => 'This is a basic lamp.', 'price' => '299UAH']
		];
}

class Main{
	public $name;
	public $descr;
	public $price;
	public $bad_param = false;

	function __construct($id = -1){
		$arr = Catalogue::$arr;
		$id = intval($id);
		if($arr[-1] <= $id || $id < 0){
			$this->bad_param = true;
		}
		else{
			$this->name = $arr[$id]['name'];
			$this->descr = $arr[$id]['descr'];
			$this->price = $arr[$id]['price'];
		}
	}
}