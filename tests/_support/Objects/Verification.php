<?php
namespace Objects;

class Verification
{

	public static $Bike1st = "//div[1][@class='product-list__item col-sm-12 col-md-6 col-lg-4']";

	public static $GetPrice1stBike = "//div[1][@class='product-list__item col-sm-12 col-md-6 col-lg-4']//span[@class='js-plp-price']";
	public static $GetName1stBike  = "//div[1][@class='product-list__item col-sm-12 col-md-6 col-lg-4']//a[@class='product-list__name']";

	public static $GetNameBikePDP  = "//h1[@itemprop='name']";

	public function PDPTopics ($get_pdp_topic)
	{
		   $pdp_topic = "//h3[text()='".$get_pdp_topic."']";
		   return $pdp_topic;	
	}

	public function GeometryCheck ($get_tb_row_name, $get_tb_row_1st_element, $get_tb_row_2nd_element, $get_tb_row_3rd_element, $get_tb_row_4th_element)
	{
		   $pdp_geometry_check = "//tbody/tr[@class='geometry-section__row-hover']/td[text()='".$get_tb_row_name."']|/td[text()='".$get_tb_row_1st_element."']|/../td[text()='".$get_tb_row_2nd_element."']|/../td[text()='".$get_tb_row_3rd_element."']|/../td[text()='".$get_tb_row_4th_element."']";
		   return $pdp_geometry_check;	
	}
}