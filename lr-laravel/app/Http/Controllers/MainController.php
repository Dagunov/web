<?php

namespace App\Http\Controllers;

use App\Main;

use Illuminate\Http\Request;

class Catalogue{
	public static $arr = [
			-1 => 4,
			0 => ['name' => 'Table', 'descr' => 'This is a basic table.', 'price' => '1000UAH'],
			['name' => 'Chair', 'descr' => 'This is a basic chair.', 'price' => '299UAH'],
			['name' => 'Bed', 'descr' => 'This is a basic bed.', 'price' => '4999UAH'],
			['name' => 'Lamp', 'descr' => 'This is a basic lamp.', 'price' => '299UAH']
		];
}

class MainController extends Controller
{
    function laravel(){
    	return view('welcome');
    }

    function index(){
    	return view('index');
    }

    function getobj($id = -1){
    	$object = new Main($id);
    	return view('item', ['obj' => $object]);
    }

    function items(){
    	return view('items');
    }

    function getbyid(Request $r){
    	return $this->getobj(intval($r->input('id')));
    }

    function findbyprice(Request $r){
    	$p = intval($r->input('val'));
    	$arr = Catalogue::$arr;
    	$res1 = [];
    	foreach ($arr as $k => $v) {
    		if($k != -1){
    			if(intval($v['price']) === $p){
    				$res1[] = $k;
    			}
    		}
    	}
    	$res = [];
    	foreach($res1 as $v){
    		$res[] = new Main($v);
    	}
    	return view('selection', ['obj' => $res]);
    }
}
