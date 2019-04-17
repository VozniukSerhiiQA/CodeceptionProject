<?php 
use Objects\Top as TOP;
use Objects\ButtonsAndLinks as BtnLink;

//################ Check Mega Menu ###############################
$I = new AcceptanceTester($scenario);
$I->wantTo('Test Home Page for PL region');
$I->amOnPage('/');
$I->maximizeWindow();
$I->seeInCurrentUrl(TOP::$PL);

//*************************** B I K E S **********************
$I->see('Bikes');
$I->moveMouseOver(TOP::MenuName('Bikes'));

$I->click(BtnLink::SubCategory('Mountain', 'Cross Country'));

