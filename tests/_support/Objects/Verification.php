<?php
namespace Objects;

class Verification
{
//----------------------------- P L P ------------------------------------------
	public static $Bike1st = "//div[1][@class='product-list__item col-sm-12 col-md-6 col-lg-4']";
	public static $GetPrice1stBike = "//div[1][@class='product-list__item col-sm-12 col-md-6 col-lg-4']//span[@class='js-plp-price']";
	public static $GetName1stBike  = "//div[1][@class='product-list__item col-sm-12 col-md-6 col-lg-4']//a[@class='product-list__name']";
	public static $GetQtySwatches1stBike  = "//div[1][@class='product-list__item col-sm-12 col-md-6 col-lg-4']//div[contains(@class, 'swatches')]/ul/li";
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
	// public function PDPSizeName ($get_pdp_size_name)
	// {
	// 	   $pdp_size_text = "//h3[text()='".$get_pdp_size."']";
	// 	   return $pdp_size_text;	
	// }

	public static $PDPGetSizes = "//select/option[not(text()='SIZE')]";
//----------------------------------------------------
		
}
