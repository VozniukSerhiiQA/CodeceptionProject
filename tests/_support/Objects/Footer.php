<?php
namespace Objects;

class Footer
{
	public static $Retailer = '//footer//a[contains(text(),\'Find a Retailer\')]';
	 
	public static $ContactUs = '//footer//div/a[contains(text(),\'Contact Us\')]';
	public static $About = '//footer//div/a[contains(text(),\'About Specialized\')]';
	public static $BicycleRegistration = '//footer//div/a[contains(text(),\'Bicycle Registration\')]';
	public static $SafetyNotifications = '//footer//div/a[contains(text(),\'Safety Notifications\')]';
	public static $SuspensionCalculator = '//footer//div/a[contains(text(),\'Suspension calculator\')]';

	public static $instagram = '//div/a[contains(@href, \'https://www.instagram.com/iamspecialized/\')]';
	public static $facebook = '//div/a[contains(@href, \'https://www.facebook.com/specializedbicycles\')]';
	public static $youtube = '//div/a[contains(@href, \'https://www.youtube.com/user/specialized411\')]';
	public static $twitter = '//div/a[contains(@href, \'https://twitter.com/iamspecialized\')]';

}