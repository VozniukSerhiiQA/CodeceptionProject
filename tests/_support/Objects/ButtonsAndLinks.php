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
	

	//--------------------------------   M E N U   ----------------------------------------------------------

		//This function related to grab custom value and validate Group names for Sub-Categories under Bike mega menu
		public function BikesCategoryGroup ($get_category_group_name)
		{
		   $category_group_name = "//li[@class='level1 category-links mt-nav-shop-by-category mt-bikes-list']/ul/li/div/a[@title='".$get_category_group_name."']";
		   return $category_group_name;	
		}

		//This function related to grab custom value and validate Group names for Sub-Categories under Equipment mega menu
		//e.g. EquipmentCategoryGroup('Components')
		public function EquipmentCategoryGroup ($get_category_group_name)
		{
		   $category_group_name = "//li[@class='level1 category-links mt-nav-shop-equip-type mt-equipment-list']/ul/li/div/a[@title='".$get_category_group_name."']";
		   return $category_group_name;	
		}

		//This function related to grab custom value and validate Group names for Sub-Categories under Equipment mega menu (This function has logic to check the first part of compatible title)
		//That's why here we are using starts-with method of XPath and when we should find e.g. Men's value we are looking to Men value and skipping 's
		//e.g. EquipmentCategoryGroupApostrophe('Men')
		public function EquipmentCategoryGroupApostrophe ($get_category_group_name)
		{
		   $category_group_name = "//li[@class='level1 category-links mt-nav-shop-equip-type mt-equipment-list']/ul/li/div/a[starts-with(@title,'".$get_category_group_name."')]";
		   return $category_group_name;	
		}
		
		//Grab custom information about Category Group and Sub-Category
		//e.g. SubCategory('Gear', 'Shoes') where Gear is Category Group and Shoes is a sub-category
		public function SubCategory ($get_category_group, $get_sub_category_name)
		{
		   $check_category = "//li//div[contains(@data-promotion-ic, '".$get_category_group."')]/..//a[@title='".$get_sub_category_name."']";
		   return $check_category;	
		}
	//---------------------------------------------------------------------------------------------------------
		public function Breadcrumbs ($get_breadcrumb_name, $get_breadcrumb_number)
		{
		   $breadcrumb = "//span[contains(text(), '".$get_breadcrumb_name."')]/../../meta[@content='".$get_breadcrumb_number."']";
		   return $breadcrumb;	
		}


}