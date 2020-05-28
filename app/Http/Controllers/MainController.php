<?php

namespace App\Http\Controllers;

use App\Main;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    function catalog(){
        $q = DB::select('select * from items');

        return view('catalog', ['obj' => $q]);
    }

    function send_message(Request $r){
    	$data = $r->all();
    	DB::insert('insert into messages (name, email, message) values (?, ?, ?)', [$data['name'], $data['email'], $data['message']]);
    	return response()->json(['success' => 'Operation successful.']);
    }

    function search(Request $r){
    	$data = $r->search;
    	$text = '%'.$data.'%';
    	$q = DB::select('select * from items where name like ? or model like ?', [$text, $text]);
    	return view('catalog', ['obj' => $q]);
    }

    function order(Request $r){
    	$id = $r->id;
    	$q = DB::select('select * from items where id = ?', [$id]);
    	return view('purchase', ['obj' => $q[0]]);
    }

    function purchase(Request $r){
    	$data = $r->all();
    	$q = DB::select('select id from items where model = ?', [$data['model']]);
    	DB::insert('insert into orders (name, phone, adress, total, item_id, amount) values (?, ?, ?, ?, ?, ?)',
    	[
    		$data['name'],
    		$data['phone'],
    		$data['home_adress'],
    		$data['price'],
    		$q[0]->id,
    		$data['amount']
    	]);
    	return response()->json(['success' => 'Operation successful.']);
    }
}