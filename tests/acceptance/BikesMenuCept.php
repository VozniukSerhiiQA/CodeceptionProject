<?php 
use Objects\Top as TOP;
// use Objects\Banners as BANNER;
use Objects\ButtonsAndLinks as BtnLink;
// use Objects\Footer as FOOTER;

//################ Home page verification #####################################################
$I = new AcceptanceTester($scenario);
$I->wantTo('Test Home Page for PL region');
$I->amOnPage('/');
$I->maximizeWindow();
$I->seeInCurrentUrl(TOP::$PL);
$I->see('Bikes');
$I->moveMouseOver(TOP::$Bikes);

$I->seeElement(BtnLink::CategoryGroup('Mountain'));
$I->seeElement(BtnLink::CategoryGroup('Road'));
$I->seeElement(BtnLink::CategoryGroup('Electric'));
$I->seeElement(BtnLink::CategoryGroup('Fitness'));

$I->seeElement(BtnLink::SubCategory2('Mountain', 'Cross Country'));
$I->seeElement(BtnLink::SubCategory2('Mountain', 'Trail'));
$I->seeElement(BtnLink::SubCategory2('Mountain', 'Electric'));
$I->seeElement(BtnLink::SubCategory2('Mountain', 'Downhill'));
$I->seeElement(BtnLink::SubCategory2('Mountain', 'Fatbike'));
$I->seeElement(BtnLink::SubCategory2('Mountain', 'BMX / Dirt Jump'));
$I->seeElement(BtnLink::SubCategory2('Mountain', 'Frames'));

$I->seeElement(BtnLink::SubCategory2('Road', 'Performance'));
$I->seeElement(BtnLink::SubCategory2('Road', 'Adventure & Gravel'));
$I->seeElement(BtnLink::SubCategory2('Road', 'Cyclocross'));
$I->seeElement(BtnLink::SubCategory2('Road', 'Triathlon'));
$I->seeElement(BtnLink::SubCategory2('Road', 'Frames'));



// $I->seeElement(BtnLink::SubCategory('Cross Country'));
// $I->seeElement(BtnLink::SubCategory('Trail'));
// $I->seeElement(BtnLink::SubCategory('Electric'));
// $I->seeElement(BtnLink::SubCategory('Downhill'));
// $I->seeElement(BtnLink::SubCategory('Fatbike'));
// $I->seeElement(BtnLink::SubCategory('BMX / Dirt Jump'));
// $I->seeElement(BtnLink::SubCategory('Frames'));


