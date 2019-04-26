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



$I->scrollTo(VERIFY::$Bike1st);
$I->scrollTo(VERIFY::$GetPrice1stBike);
