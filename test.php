<?php
require_once('src/TicTacToeChecker.php');

use Cyddalupan\TicTacToeChecker\TicTacToeChecker as TicTacToeChecker;

$tiles = array(
	0 => 0,		1 => 0,		2 => 0,
	3 => 1,		4 => 1,		5 => 1,
	6 => 0,		7 => 0,		8 => 0, 
);

echo TicTacToeChecker::checker($tiles);