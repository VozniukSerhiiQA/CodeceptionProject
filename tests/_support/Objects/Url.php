<?php
namespace Objects;

class Url
{
	public static $PL = '/pl/en';
	public static $StoreFinder = '/pl/en/store-finder';
	public static $Login = '/pl/en/account/login';
	public static $Bikes = '/pl/en/shop/bikes/c/bikes';
	public static $Equipment = '/pl/en/shop/equipment/c/equipment';
	public static $Roubaix = '/pl/en/roubaix';


	public static $ContactUs = '/pl/en/contact-us';
	public static $AboutSpecialized = '/pl/en/about-us';
	public static $BicycleRegistration = '/pl/en/bike';
	public static $SafetyNotifications = '/pl/en/safety-notices';
	public static $SuspensionCalculator = '/pl/en/suspension-calculator';
	public static $SeeTheCollection = '/pl/en/sagan-collection-3';
	public static $CountryMountainPLP = '/pl/en/shop/bikes/mountain-bikes/cross-country-mountain-bikes/c/mountaincrosscountry';

	public function SearchValue ($get_value_from_user)
	{
		   $searc_value = "/pl/en/search/?text='".$get_value_from_user."'";
		   return $searc_value;	
	}
	 
}