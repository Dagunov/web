<?php

namespace App\Http\Controllers;

use App\Main;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminpageController extends Controller
{
    function getname(Request $r){
    	$data = $r->all();
    	$q = DB::select('select name from items where id = '.$data['id']);
    	if(!count($q))
    		return response()->json(['success' => 'Operation successful.', 'name' => 'Deleted item.']);

    	return response()->json(['success' => 'Operation successful.', 'name' => $q[0]->name]);
    }

    function deleteitem(Request $r){
    	$data = $r->all();
    	DB::table('items')->where('id', '=', $data['id'])->delete();

    	return response()->json(['success' => 'Operation successful.']);
    }

    function update(Request $r){
    	$data = $r->all();
    	if($data['id'] == -1){
    		// new
    		DB::insert('insert into items(
    			name,
    			model,
    			price,
    			about1,
    			about2,
    			functions,
    			netto,
    			brutto,
    			box,
    			volume,
    			box_size,
    			box_weight,
    			box_volume,
    			bottle_size,
    			img_src
    			) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)',
    		[
    			$data['name'],
    			$data['model'],
    			$data['price'],
    			$data['about1'],
    			$data['about2'],
    			$data['functions'],
    			$data['netto'],
    			$data['brutto'],
    			$data['box'],
    			$data['volume'],
    			$data['box_size'],
    			$data['box_weight'],
    			$data['box_volume'],
    			$data['bottle_size'],
    			$data['img_src']
    		]);
    		}else{
    			DB::update('update items set
    			name = ?,
    			model = ?,
    			price = ?,
    			about1 = ?,
    			about2 = ?,
    			functions = ?,
    			netto = ?,
    			brutto = ?,
    			box = ?,
    			volume = ?,
    			box_size = ?,
    			box_weight = ?,
    			box_volume = ?,
    			bottle_size = ?,
    			img_src = ?
    			where id = '.$data['id'],
    		[
    			$data['name'],
    			$data['model'],
    			$data['price'],
    			$data['about1'],
    			$data['about2'],
    			$data['functions'],
    			$data['netto'],
    			$data['brutto'],
    			$data['box'],
    			$data['volume'],
    			$data['box_size'],
    			$data['box_weight'],
    			$data['box_volume'],
    			$data['bottle_size'],
    			$data['img_src']
    		]);
    	}
    	return response()->json(['success' => 'Operation successful.']);
    }

    function get(Request $r){
    	$data = $r->all();
    	$q = DB::select('select * from items where id = '.$data['id']);
    	return response()->json(['success' => 'Operation successful.', 'q' => $q]);
    }

    function admin(){
    	return view('admin', ['error' => false]);
    }

    function admin_login(Request $r){
    	$q = DB::select('select id from admins where login = ? and password = ?', [$r->login, $this->code($r->password)]);
    	if(!count($q))
    		return view('admin', ['error' => true]);
    	$orders = DB::select('select * from orders');
    	$messages = DB::select('select * from messages');
    	$items = DB::select('select * from items order by id');

    	return view('adminpage', ['orders'=>$orders, 'messages'=>$messages, 'items'=>$items]);
    }

    function code($str){
    	$dict_1 = [
			'a' => '%%%',
			'o' => 'a',
			'p' => 'o',
			't' => 'p',
			'%%%' => 't'
		];

		$dict_2 = [
			'w' => '%%%',
			'n' => 'w',
			'k' => 'n',
			'z' => 'k',
			'%%%' => 'z'
		];
		$str = strtolower($str);
		$arr = explode(' ', $str);
		for ($i = 0; $i <= intval(count($arr) / 2); $i++) {
			$one = $arr[$i * 2];
			foreach ($dict_1 as $old => $new) {
				$one = str_replace($old, $new, $one);
			}
			$arr[$i * 2] = $one;
			if($i == intval(count($arr) / 2)){
				if(intval(count($arr) / 2) == count($arr) / 2){
					$two = $arr[$i*2 + 1];
					foreach ($dict_2 as $old => $new) {
						$two = str_replace($old, $new, $two);
					}
					$arr[$i*2 + 1] = $two;
				}
			}else{
				$two = $arr[$i*2 + 1];
				foreach ($dict_2 as $old => $new) {
					$two = str_replace($old, $new, $two);
				}
				$arr[$i*2 + 1] = $two;
			}
		}
		$str = implode(' ', $arr);
		

		return $str;
	}

	function deleter(Request $r){
		$data = $r->all();
		$msg = '';
		if($data['table'] == 'orders'){
			$q = DB::select('select phone from orders where id = ?', [$data['id']]);
			$msg = 'Ви видалили замовлення! Якщо це було випадковістю, зателефонуйте замовнику: '.$q[0]->phone;
		}else{
			$q = DB::select('select email from messages where id = ?', [$data['id']]);
			$msg = 'Ви видалили коментар! Якщо це було випадковістю, напишіть відправнику: '.$q[0]->email;
		}

		DB::table($data['table'])->where('id', '=', $data['id'])->delete();

		return response()->json(['success' => 'Operation successful.', 'msg'=>$msg]);
	}
}