<?php 
use Objects\Top as TOP;
use Objects\ButtonsAndLinks as BtnLink;
use Objects\Url as URL;
use Objects\Verification as VERIFY;
use CollapsedSteps\PDPsize as COLLAPSED_STEPS_SIZE;

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

$I->scrollTo(VERIFY::$Bike1st);
$I->scrollTo(VERIFY::$GetPrice1stBike);

//PLP getting price and name of 1st bike
$PriceValue = $I->grabTextFrom(VERIFY::$GetPrice1stBike);
$I->comment("The price is equal to " .$PriceValue);
$BikeNamePLP = $I->grabTextFrom(VERIFY::$GetName1stBike);
$I->comment("Bike name on PLP is " .$BikeNamePLP);

//PLP checking swatches
$PLPSwatchQty = $I->grabMultiple(VERIFY::$GetQtySwatches1stBike);
$sumSwatchesPLP = count($PLPSwatchQty);
$I->comment("On PLP swatches: $sumSwatchesPLP");

//Open 1st bike in PDP
//Verify Bike's name the same on PDP as on PLP
$I->click(VERIFY::$Bike1st);
$BikeNamePDP = $I->grabTextFrom(VERIFY::$GetNameBikePDP);
$I->comment("Bike name on PDP is " .$BikeNamePDP);
$I->comment("Name should be the same = " .($BikeNamePDP==$BikeNamePLP ? 'true' : 'false'));

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
$I->comment("On PLP swatches: $sumSwatchesPLP");
COLLAPSED_STEPS_SIZE::Sizes($I);

// //Test regarding Bike's sizes:
// //		getting data from dropdown into array, then working with this array depending of result,
// //		could be just 1 size and condition of verification should be proper. This test has conditions becaouse of
// //		we are not working with direcly product, we are taking 1st from PLP and not shure about this product
// $ArraySizesPDP = $I->grabMultiple(VERIFY::$PDPGetSizes);
// print_r($ArraySizesPDP);
// $QtySizesPDP = count($ArraySizesPDP);
// $I->comment("\nI see " .$QtySizesPDP. " element(s) in drop-down");
// $minus = round(($QtySizesPDP - 01),2); //here we have 4 elements but array has digits as [0],[1],[2],[3] that's why we should do subtraction (-) 
// print $minus;
// $I->comment("\nLast array number is: " .$minus);
// if ($minus==0) { //Verification if we have only 1 size in drop-down
// 	$var= $ArraySizesPDP[0];
// 	$I->comment("I see next value:\n"."- ".$var);
// 	$I->moveMouseOver(VERIFY::PDPSizeName('SIZE'));
// 	$I->clickWithLeftButton(VERIFY::PDPSizeName('SIZE'));
// 	$I->see($var);
// }elseif ($minus==1){
// 	$var= array($ArraySizesPDP[0], $ArraySizesPDP[1]);
// 	$I->comment("I see next values:\n"."- ".$var[0]."\n"."- ".$var[1]);
// 	$I->moveMouseOver(VERIFY::PDPSizeName('SIZE'));
// 	$I->clickWithLeftButton(VERIFY::PDPSizeName('SIZE'));
// 	$I->see($var[0]);
// 	$I->see($var[1]);
// }elseif ($minus==2){
// 	$var= array($ArraySizesPDP[0], $ArraySizesPDP[1], $ArraySizesPDP[2]);
// 	$I->comment("I see next values:\n"."- ".$var[0]."\n"."- ".$var[1]."\n"."- ".$var[2]);
// 	$I->moveMouseOver(VERIFY::PDPSizeName('SIZE'));
// 	$I->clickWithLeftButton(VERIFY::PDPSizeName('SIZE'));
// 	$I->see($var[0]);
// 	$I->see($var[1]);
// 	$I->see($var[2]);
// }elseif ($minus==3){
// 	$var= array($ArraySizesPDP[0], $ArraySizesPDP[1], $ArraySizesPDP[2], $ArraySizesPDP[3]);
// 	$I->comment("I see next values:\n"."- ".$var[0]."\n"."- ".$var[1]."\n"."- ".$var[2]."\n"."- ".$var[3]);
// 	$I->moveMouseOver(VERIFY::PDPSizeName('SIZE'));
// 	$I->clickWithLeftButton(VERIFY::PDPSizeName('SIZE'));
// 	$I->see($var[0]);
// 	$I->see($var[1]);
// 	$I->see($var[2]);
// 	$I->see($var[3]);

// }elseif ($minus==4){
// 	$var= array($ArraySizesPDP[0], $ArraySizesPDP[1], $ArraySizesPDP[2], $ArraySizesPDP[3], $ArraySizesPDP[3]);
// 	$I->comment("I see next values:\n"."- ".$var[0]."\n"."- ".$var[1]."\n"."- ".$var[2]."\n"."- ".$var[3]."\n"."- ".$var[4]);
// 	$I->moveMouseOver(VERIFY::PDPSizeName('SIZE'));
// 	$I->clickWithLeftButton(VERIFY::PDPSizeName('SIZE'));
// 	$I->see($var[0]);
// 	$I->see($var[1]);
// 	$I->see($var[2]);
// 	$I->see($var[3]);
// 	$I->see($var[4]);
// }
