<?php
namespace Objects;

class Verification
{
//----------------------------- P L P ------------------------------------------
	//public static $Bike1st = "//div[1][@class='product-list__item col-sm-12 col-md-6 col-lg-4']";
	//public static $GetPrice1stBike = "//div[1][@class='product-list__item col-sm-12 col-md-6 col-lg-4']//span[@class='js-plp-price']";
	//public static $GetName1stBike  = "//div[1][@class='product-list__item col-sm-12 col-md-6 col-lg-4']//a[@class='product-list__name']";
	
	public function ItemIndexNumberOnPLP ($get_index_number_of_item)
	{
		   $plp_index_number = "//div[".$get_index_number_of_item."][@class='product-list__item col-sm-12 col-md-6 col-lg-4']";
		   return $plp_index_number;	
	}
	public function PriceItemIndexNumberOnPLP ($get_index_number_of_item_for_price)
	{
		   $plp_index_number_price = "//div[".$get_index_number_of_item_for_price."][@class='product-list__item col-sm-12 col-md-6 col-lg-4']//span[@class='js-plp-price']";
		   return $plp_index_number_price;	
	}
	public function NameItemIndexNumberOnPLP ($get_index_number_of_item_for_name)
	{
		   $plp_index_number_name = "//div[".$get_index_number_of_item_for_name."][@class='product-list__item col-sm-12 col-md-6 col-lg-4']//a[@class='product-list__name']";
		   return $plp_index_number_name;	
	}
	


	public static $GetQtySwatches1stBike  = "//div[1][@class='product-list__item col-sm-12 col-md-6 col-lg-4']//div[contains(@class, 'swatches')]/ul/li";

//----------------------------- S R P (search result page) --------------------------------------------
	public function ItemIndexNumberOnSRP ($get_index_number_of_item)
	{
		   $srp_index_number = "//div[".$get_index_number_of_item."][@class='product-list__item col-lg-4 col-md-6 col-sm-6']";
		   return $srp_index_number;
	}	

	public function PriceItemIndexNumberOnSRP ($get_index_number_of_item_for_price)
	{
		   $srp_index_number_price = "//div[".$get_index_number_of_item_for_price."][@class='product-list__item col-lg-4 col-md-6 col-sm-6']//span[@class='js-plp-price']";
		   return $srp_index_number_price;	
	}
	public function NameItemIndexNumberOnSRP ($get_index_number_of_item_for_name)
	{
		   $srp_index_number_name = "//div[".$get_index_number_of_item_for_name."][@class='product-list__item col-lg-4 col-md-6 col-sm-6']//a[@class='product-list__name']";
		   return $srp_index_number_name;	
	}



//------------------------------------------------------------------------------
	


	
//----------------------------- P D P ------------------------------------------	
	public static $QtyPDPColor = "//div[@class='product__swatches']/ul/li";	
	public static $GetNameBikePDP  = "//h1[@itemprop='name']";


	public function PDPTopics ($get_pdp_topic)
	{
		   $pdp_topic = "//h3[text()='".$get_pdp_topic."']";
		   return $pdp_topic;	
	}

	//Check table with Geometry on PDP
	public function GeometryCheck ($get_tb_row_name, $get_tb_row_1st_element, $get_tb_row_2nd_element, $get_tb_row_3rd_element, $get_tb_row_4th_element)
	{
		   $pdp_geometry_check = "//tbody/tr[@class='geometry-section__row-hover']/td[text()='".$get_tb_row_name."']|/td[text()='".$get_tb_row_1st_element."']|/../td[text()='".$get_tb_row_2nd_element."']|/../td[text()='".$get_tb_row_3rd_element."']|/../td[text()='".$get_tb_row_4th_element."']";
		   return $pdp_geometry_check;	
	}

		//Verify Size name from froduct
	public function PDPSizeName ($get_pdp_size_name)
	{
		   $pdp_size_text = "//select/option[(text()='".$get_pdp_size_name."')]";
		   return $pdp_size_text;	
	}
	public static $PDPGetSizes = "//select/option[not(text()='SIZE')]";
//----------------------------------------------------
}
