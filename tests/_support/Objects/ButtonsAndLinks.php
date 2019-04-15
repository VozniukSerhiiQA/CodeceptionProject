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

}