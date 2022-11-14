<?php

namespace NttData\Practice\Block\Test\Productlist;
use NttData\Practice\Block\Test\Productlist;
class Header extends Productlist

{
	public function sayHello()
	 {
		echo '<h3>' . get_class($this) . '</h3>';
	 }
}