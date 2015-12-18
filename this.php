<?php

class Parent {
	public $parentProperty;
}

class Child extends Parent {
	public $childProperty;

	function foo() {
		// should correcly resolve refs to 
		// Parent::$parentProperty and Child::$childProperty
		$this->childProperty = $this->parentProperty;
	}
}

// should not die because $this was encountered outside of class definition
$this->foo = 5;