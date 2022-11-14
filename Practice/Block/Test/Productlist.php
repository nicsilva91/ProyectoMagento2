<?php
namespace NttData\Practice\Block\Test;
class Productlist extends \Magento\Framework\View\Element\Template
{

	public function sayHello()
	{
		echo '<h3>' . get_class($this) . '</h3>' ;
    }

}