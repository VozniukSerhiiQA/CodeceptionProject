<?php 
use Objects\Top as TOP;
use Objects\ButtonsAndLinks as BtnLink;
use Objects\Url as URL;

//################ Check Mega Menu ###############################
$I = new AcceptanceTester($scenario);
$I->wantTo('Test Opening PDP');
$I->amOnPage('/');
$I->maximizeWindow();
$I->seeInCurrentUrl(URL::$PL);

//*************************** B I K E S **********************
$I->see('Bikes');
$I->moveMouseOver(TOP::MenuName('Bikes'));

$I->click(BtnLink::SubCategory('Mountain', 'Cross Country'));
$I->seeInCurrentUrl(URL::$CountryMountainPLP);
$I->seeElementInDOM(BtnLink::Breadcrumbs('shop','0)'));
$I->seeElementInDOM(BtnLink::Breadcrumbs('Bikes','1)'));
$I->seeElementInDOM(BtnLink::Breadcrumbs('Mountain Bikes','2)'));

