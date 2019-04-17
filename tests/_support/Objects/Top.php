<?php
namespace Objects;

class Top
{
	
	public static $Logo = '//a[@class=\'branding icon-gor-logo\']';
	public static $Wishlist = '//span[@class=\'icon-wishlist\']';

	public function MenuName ($get_mega_menu_name)
	{
	   $get_mega_menu_name = "//nav[@id='navigation']/ul/li//a[@title='".$get_mega_menu_name."']";
	   return $get_mega_menu_name;	
	}

	// public static $Bikes = '//nav[@id=\'navigation\']/ul/li//a[@title=\'Bikes\']';
	// public static $Equipment = "//nav[@id='navigation']/ul/li//a[@title='Equipment']";
}