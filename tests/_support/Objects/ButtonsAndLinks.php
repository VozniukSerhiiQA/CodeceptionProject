<?php
namespace Objects;

class ButtonsAndLinks
{
	public static $NextBanner = '//div[@class=\'owl-nav\']/div[@class=\'owl-next\']';
	public static $SearchIcon = '//div[@class=\'nav-icon\']';
	public static $SearchBox = '//div[@class=\'search-input-container\']';
	public static $SearchBtn = '//button[contains(text(), \'Search\')]';
	public static $ViewRoubaix = '//div[@class=\'owl-item active\']//a[@title=\'View Roubaix\']';
	public static $SeeTheCollection =   '//div[@class=\'owl-item active\']//a[@title=\'See the Collection\']';
	public static $WatchVideo = 		'//div[@class=\'owl-item active\']//a[@title=\'Watch Video\']';
	public static $WatchVideoCloseFrame = '//div[contains(@class, \'gor-active\')]/div/button[@class=\'modal-close\']';
	
	public function CategoryGroup ($get_category_group_name)
	{
	   $category_group_name = "//li[@class='level1 category-links mt-nav-shop-by-category mt-bikes-list']/ul/li/div/a[@title='".$get_category_group_name."']";
	   return $category_group_name;	
	}

	public function SubCategory2 ($get_category_group, $get_sub_category_name)
	{
	   $check_category = "//li//div[contains(@data-promotion-ic, '".$get_category_group."')]/..//a[@title='".$get_sub_category_name."']";
	   return $check_category;	
	}
}