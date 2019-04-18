<?php 
use Objects\Top as TOP;
use Objects\ButtonsAndLinks as BtnLink;
use Objects\Url as URL;
use Objects\Verification as VERIFY;

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
$I->scrollTo(VERIFY::$Bike1st);
//$I->pauseExecution();
$I->scrollTo(VERIFY::$GetPrice1stBike);
$PriceValue = $I->grabTextFrom(VERIFY::$GetPrice1stBike);
$I->comment("The price is equal to " .$PriceValue);
$BikeNamePLP = $I->grabTextFrom(VERIFY::$GetName1stBike);
$I->comment("Bike name on PLP is " .$BikeNamePLP);
$I->click(VERIFY::$Bike1st);
$BikeNamePDP = $I->grabTextFrom(VERIFY::$GetNameBikePDP);
$I->comment("Bike name on PDP is " .$BikeNamePDP);
$I->comment("Name should be the same = " .($BikeNamePDP==$BikeNamePLP ? 'true' : 'false'));
$I->dontSeeElement(BtnLink::PDPNavMenu('Overview'));
$I->dontSeeElement(BtnLink::PDPNavMenu('Technical Specifications'));
$I->dontSeeElement(BtnLink::PDPNavMenu('Geometry'));
$I->scrollTo(VERIFY::PDPTopics('Technical Specifications'));
$I->seeElement(BtnLink::PDPNavMenu('Overview'));
$I->seeElement(BtnLink::PDPNavMenu('Technical Specifications'));
$I->seeElement(BtnLink::PDPNavMenu('Geometry'));
$I->click(BtnLink::PDPNavMenu('Geometry'));
$I->seeElement(VERIFY::PDPTopics('Geometry'));

$I->seeElement(VERIFY::GeometryCheck('Crank Length', '170mm','175mm','175mm','175mm'));
$I->seeElement(VERIFY::GeometryCheck('Stem Length', '60mm','75mm','75mm','75mm'));
$I->seeElement(VERIFY::GeometryCheck('Seatpost Length', '361MM','441MM','441MM','441MM'));
$I->seeElement(VERIFY::GeometryCheck('Saddle Width', '143mm','143mm','143mm','143mm'));
$I->seeElement(VERIFY::GeometryCheck('Handlebar Width', '750mm','750mm','750mm','750mm'));
$I->seeElement(VERIFY::GeometryCheck('Reach', '398mm','423mm','446mm','465mm'));
$I->seeElement(VERIFY::GeometryCheck('Top Tube Length, Horizontal', '571mm','599mm','626mm','650mm'));
$I->seeElement(VERIFY::GeometryCheck('Stack', '595mm','605mm','619mm','638mm'));
