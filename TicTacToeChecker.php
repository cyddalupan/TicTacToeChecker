<?php
namespace Cyddalupan\TicTacToeChecker;

/**
 * Check a Combination of array
 * if it matches a Tic Tac Toe Combination
 * if checker returns 0 means no win pattern found
 * if returns 1 to 8 means it Has a pattern
 * 
 * The Set of array required is 9 [0-8]
 * The tic tac toe  array pattern would look like 
 * this:
 * 	[0][1][2]
 * 	[3][4][5]
 * 	[6][7][8]
 */
Class TicTacToeChecker
{

	public $tiles = array();

	/**
	 * Check a Combination of array
	 * if it matches a Tic Tac Toe Combination
	 */
	public function checker($tiles)
	{
		//test before using this array
		TicTacToeChecker::test_tiles($tiles);

		//win 1
		if(
			$tiles[0] ==  1 &&
			$tiles[4] ==  1 &&
			$tiles[8] ==  1
		){
			return 1;
		}

		//win 2
		elseif (
			$tiles[0] ==  1 &&
			$tiles[3] ==  1 &&
			$tiles[6] ==  1
		) {
			return 2;
		}

		//win 3
		elseif (
			$tiles[1] ==  1 &&
			$tiles[4] ==  1 &&
			$tiles[7] ==  1
		) {
			return 3;
		}

		//win 4
		elseif (
			$tiles[2] ==  1 &&
			$tiles[5] ==  1 &&
			$tiles[8] ==  1
		) {
			return 4;
		}

		//win 5
		elseif (
			$tiles[2] ==  1 &&
			$tiles[4] ==  1 &&
			$tiles[6] ==  1
		) {
			return 5;
		}

		//win 6
		elseif (
			$tiles[0] ==  1 &&
			$tiles[1] ==  1 &&
			$tiles[2] ==  1
		) {
			return 6;
		}

		//win 7
		elseif (
			$tiles[3] ==  1 &&
			$tiles[4] ==  1 &&
			$tiles[5] ==  1
		) {
			return 7;
		}

		//win 8
		elseif (
			$tiles[6] ==  1 &&
			$tiles[7] ==  1 &&
			$tiles[8] ==  1
		) {
			return 8;
		}
		else{
			return 0;
		}
	}


	/**
	 * Test Tiles array if format is Correct
	 *
	 * The array must contain 9 key (0-8)
	 * key must be from 0 to 8
	 * the value must be 1 or 0 or X
	 * 1 is active and 0 is blank
	 */
	public function test_tiles($tiles)
	{
		if(!isset($tiles)){
			die("Tiles array not Set");
		}

		if(count($tiles) != 9){
			die("Tiles array now equal to 9");
		}

		foreach ($tiles as $key => $value) {
			if(!is_numeric($key)){
				die("Array key must be numeric");
			}

			if($key > 8){
				die("Array key must be from 0 to 8");
			}

			if($value == 1 || $value == 0){}else{
				die("Array Value must be 0 or 1 only");
			}
		}
	}
}