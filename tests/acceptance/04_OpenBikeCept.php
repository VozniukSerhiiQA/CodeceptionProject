<?php 
use Objects\Top as TOP;
use Objects\ButtonsAndLinks as BtnLink;
use Objects\Url as URL;
use Objects\Verification as VERIFY;
use CollapsedSteps\PDPsize as COLLAPSED_STEPS_SIZE;
use Objects\Inputs as INPUT;

//################ Check Mega Menu ###############################
$I = new AcceptanceTester($scenario);
$I->wantTo('Test Opening PDP');
$I->amOnPage('/');
$I->maximizeWindow();
$I->seeInCurrentUrl(URL::$PL);

//*************************** B I K E S **********************
$I->see('Bikes');
$I->moveMouseOver(TOP::MenuName('Bikes'));

//Open PLP and work with 1st bike in selected menu
//Check breadcrumbs
$I->click(BtnLink::SubCategory('Mountain', 'Cross Country'));
$I->seeInCurrentUrl(URL::$CountryMountainPLP);
$I->seeElementInDOM(BtnLink::Breadcrumbs('shop','0)'));
$I->seeElementInDOM(BtnLink::Breadcrumbs('Bikes','1)'));
$I->seeElementInDOM(BtnLink::Breadcrumbs('Mountain Bikes','2)'));

$I->scrollTo(VERIFY::ItemIndexNumberOnPLP('1'));
$I->scrollTo(VERIFY::PriceItemIndexNumberOnPLP('1'));

//PLP getting price and name of 1st bike
$PriceValue = $I->grabTextFrom(VERIFY::PriceItemIndexNumberOnPLP('1'));
$I->comment(">>>> \n \tThe price is equal to " .$PriceValue);
$BikeNamePLP = $I->grabTextFrom(VERIFY::NameItemIndexNumberOnPLP('1'));
$I->comment(">>>> \n \tBike name on PLP is " .$BikeNamePLP);

//PLP checking swatches
$PLPSwatchQty = $I->grabMultiple(VERIFY::$GetQtySwatches1stBike);
$sumSwatchesPLP = count($PLPSwatchQty);
$I->comment(">>>> \n \tOn PLP swatches: ".$sumSwatchesPLP);

//Open 1st bike in PDP
//Verify Bike's name the same on PDP as on PLP
$I->click(VERIFY::ItemIndexNumberOnPLP('1'));
$BikeNamePDP = $I->grabTextFrom(VERIFY::$GetNameBikePDP);
$I->comment(">>>> \n \tBike name on PDP is " .$BikeNamePDP);
$I->comment(">>>> \n \tName should be the same = " .($BikeNamePDP==$BikeNamePLP ? '"\t True - Names are equal: $BikeNamePDP==$BikeNamePLP"' : 'false'));

//Check float element is not displayed till page is not scrolled
$I->dontSeeElement(BtnLink::PDPNavMenu('Overview'));
$I->dontSeeElement(BtnLink::PDPNavMenu('Technical Specifications'));
$I->dontSeeElement(BtnLink::PDPNavMenu('Geometry'));

//Float element is present after scrolling
$I->scrollTo(VERIFY::PDPTopics('Technical Specifications'));
$I->seeElement(BtnLink::PDPNavMenu('Overview'));
$I->seeElement(BtnLink::PDPNavMenu('Technical Specifications'));
$I->seeElement(BtnLink::PDPNavMenu('Geometry'));

$I->click(BtnLink::PDPNavMenu('Geometry'));
$I->seeElement(VERIFY::PDPTopics('Geometry'));

//Verificatin of table data
$I->seeElement(VERIFY::GeometryCheck('Crank Length', '170mm','175mm','175mm','175mm'));
$I->seeElement(VERIFY::GeometryCheck('Stem Length', '60mm','75mm','75mm','75mm'));
$I->seeElement(VERIFY::GeometryCheck('Seatpost Length', '361MM','441MM','441MM','441MM'));
$I->seeElement(VERIFY::GeometryCheck('Saddle Width', '143mm','143mm','143mm','143mm'));
$I->seeElement(VERIFY::GeometryCheck('Handlebar Width', '750mm','750mm','750mm','750mm'));
$I->seeElement(VERIFY::GeometryCheck('Reach', '398mm','423mm','446mm','465mm'));
$I->seeElement(VERIFY::GeometryCheck('Top Tube Length, Horizontal', '571mm','599mm','626mm','650mm'));
$I->seeElement(VERIFY::GeometryCheck('Stack', '595mm','605mm','619mm','638mm'));

//Compare, do we see the same qty of swatches on PLP as on PDP
$I->seeNumberOfElements(VERIFY::$QtyPDPColor, $sumSwatchesPLP);
$I->comment(">>>> \n \tOn PLP swatches: ".$sumSwatchesPLP);

//Testing Sizes from PDP
COLLAPSED_STEPS_SIZE::Sizes($I);

$I->click(TOP::$Logo);
$I->amOnPage('/');

//--------------------SEARCH Bike from PDP by Name via Search box----------
$I->click(BtnLink::$SearchIcon);
$I->seeElement(BtnLink::$SearchBox);
$I->seeElement(['xpath' => BtnLink::$SearchBtn]);
$I->click(BtnLink::$SearchBox);
$I->fillField(INPUT::$SearchInputBox, $BikeNamePDP);
$I->click(['xpath' => BtnLink::$SearchBtn]);
$I->amOnPage(URL::SearchValue($BikeNamePDP));

$PriceValueSRP = $I->grabTextFrom(VERIFY::PriceItemIndexNumberOnSRP('1'));
$I->comment(">>>> \n \tBikes's price on SRP is " .$PriceValueSRP);
$BikeNameSRP = $I->grabTextFrom(VERIFY::NameItemIndexNumberOnSRP('1'));
$I->comment(">>>> \n \tBike's name on SRP is " .$BikeNameSRP);
$I->comment(">>>> \n \tName should be the same = " .($BikeNameSRP==$BikeNamePLP ? "\t True - Names are equal: $BikeNameSRP=$BikeNamePLP " : 'FALSE - Names are NOT equal'));
$I->comment(">>>> \n \tPrices should be the same = " .($PriceValueSRP==$PriceValue ? "\t True - Prices are equal: $PriceValueSRP=$PriceValue  " : 'FALSE - Prices are NOT equal'));
$I->seeElementInDOM(BtnLink::Breadcrumbs($BikeNameSRP,'0)'));
