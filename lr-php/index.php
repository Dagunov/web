<?php

$eol = "<br/>\n";

$code_1 = [
	'a' => '%%%',
	'o' => 'a',
	'p' => 'o',
	't' => 'p',
	'%%%' => 't'
];

$code_2 = [
	'w' => '%%%',
	'n' => 'w',
	'k' => 'n',
	'z' => 'k',
	'%%%' => 'z'
];

class StringCoder{

	private static $instance = null;
	private static $times = 0;

	public static function Get(){
		if(static::$instance == null){
			static::$instance = new StringCoder;
		}

		return static::$instance;
	}

	function encode($str='Default string', $dict_1=['a' => 'b'], $dict_2=['k' => 'm']){
		$t = static::$times;
		echo "Coder function was called $t times." . "<br/>\n";
		static::$times++;
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

	function decode($str, $dict_1, $dict_2){
		$t = static::$times;
		echo "Coder function was called $t times." . "<br/>\n";
		static::$times++;
		$str = strtolower($str);
		$dict_1 = array_flip($dict_1);
		$dict_1 = array_reverse($dict_1);
		$dict_2 = array_flip($dict_2);
		$dict_2 = array_reverse($dict_2);
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

		return $str;
	}

	private function __construct(){}
	private function __clone(){}
	private function __wakeup(){}
}

$res = StringCoder::Get()->encode('Happy town trip!', $code_1, $code_2);
echo "$res" . $eol;
$res = StringCoder::Get()->decode($res, $code_1, $code_2);
echo "$res" . $eol;

// Part 2

abstract class SomeSolver{
	private $res;

	function __construct(){
		echo "Using Base Class constructor." . "<br/>\n";
		$res = null;
	}

	abstract public function solve();
	abstract public function print();
}

class QuadraticSolver extends SomeSolver{
	private $a;
	private $b;
	private $c;

	function __construct($a, $b, $c){
		parent::__construct();
		echo "Using Child Class constructor." . "<br/>\n";
		$this->a = $a;
		$this->b = $b;
		$this->c = $c;
	}

	public function solve(){
		$a = $this->a;
		$b = $this->b;
		$c = $this->c;
		$d = pow($b, 2) - 4*$a*$c;
		if ($d > 0) {
			$this->res = [(-$b - sqrt($d))/(2*$a), (-$b + sqrt($d))/(2*$a)];
		} elseif ($d == 0) {
			$this->res = [-$b / (2*$a)];
		}
	}

	public function print(){
		$res = $this->res;
		if($res == null){
			echo "Equasion has zero answers or was not solved yet." . "<br/>\n";
		} elseif(count($res) == 1){
			echo "Equasion has one answer: x = $res[0]." . "<br/>\n";
		} else{
			echo "Equasion has two answers: x1 = $res[0]; x2 = $res[1]." . "<br/>\n";
		}
	}
}

$eq1 = new QuadraticSolver(2, 5, -3);
$eq2 = new QuadraticSolver(1, 6, 9);
$eq3 = new QuadraticSolver(5, 3, 7);
$eq1->solve();
$eq2->solve();
$eq3->solve();
$eq1->print();
$eq2->print();
$eq3->print();

?>