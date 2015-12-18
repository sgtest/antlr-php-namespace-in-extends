<?php
// lexer should treat it as namespace declaration, not as constant
// (contrary to namespace\App)
namespace App;

require __DIR__ . '/vendor/autoload.php';

use \Lib\P as _Parent;
use \Lib\I as _Interface;
use \Lib\T as _Trait;

// should resolve where _Parent and _Inerface point
class Child extends _Parent implements _Interface {
	// should resolve where _Trait points
	use _Trait;

	function iFunc() {
	}
}