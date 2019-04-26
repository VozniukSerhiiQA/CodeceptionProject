<?php 
use Objects\Top as TOP;
use Objects\Banners as BANNER;
use Objects\ButtonsAndLinks as BtnLink;
use Objects\Footer as FOOTER;
use Objects\Url as URL;

//################ Home page verification #####################################################
$I = new AcceptanceTester($scenario);
$I->wantTo('Test Home Page for PL region');
$I->amOnPage('/');
$I->maximizeWindow();
$I->seeInCurrentUrl(URL::$PL);

//********************* TOP Header ********************* 
$I->see('Find a Retailer');
$I->see('Sign in');

//********************* Header ********************* 
$I->seeElement(TOP::$Logo);
//$I->seeElement('//nav/ul/li/div/a[contains(.,\'Bikes\')]'); - detailed Xpath to 
$I->see('Bikes');
$I->see('Equipment');
$I->see('Inside Specialized');
$I->see('Search');
$I->seeElement(TOP::$Wishlist);


//********************* Banners ********************* 
$I->seeElement(BANNER::$Banner1);
$I->see('View Roubaix');
$I->click(BtnLink::$NextBanner);
$I->seeElement(BANNER::$Banner2);
$I->click(BtnLink::$NextBanner);
$I->seeElement(BANNER::$Banner3);
$I->see('See the Collection');
$I->see('Watch Video');

//********************* Footer ********************* 
//Different
$I->see('Join');
$I->seeElement(FOOTER::$Retailer);
//Contact Us
$I->seeElement(FOOTER::$ContactUs);
$I->seeElement(FOOTER::$About);
$I->seeElement(FOOTER::$BicycleRegistration);
$I->seeElement(FOOTER::$SafetyNotifications);
$I->seeElement(FOOTER::$SuspensionCalculator);
//Social links
$I->seeElement(FOOTER::$instagram);
$I->seeElement(FOOTER::$facebook);
$I->seeElement(FOOTER::$youtube);
$I->seeElement(FOOTER::$twitter);