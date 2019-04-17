<?php 
use Objects\Top as TOP;
// use Objects\Banners as BANNER;
use Objects\ButtonsAndLinks as BtnLink;
// use Objects\Footer as FOOTER;

//################ Check Mega Menu ###############################
$I = new AcceptanceTester($scenario);
$I->wantTo('Test Home Page for PL region');
$I->amOnPage('/');
$I->maximizeWindow();
$I->seeInCurrentUrl(TOP::$PL);

//*************************** B I K E S **********************
$I->see('Bikes');
$I->moveMouseOver(TOP::MenuName('Bikes'));

$I->seeElement(BtnLink::BikesCategoryGroup('Mountain'));
$I->seeElement(BtnLink::BikesCategoryGroup('Road'));
$I->seeElement(BtnLink::BikesCategoryGroup('Electric'));
$I->seeElement(BtnLink::BikesCategoryGroup('Fitness'));
$I->seeElement(BtnLink::BikesCategoryGroup('Kids'));

$I->seeElement(BtnLink::SubCategory('Mountain', 'Cross Country'));
$I->seeElement(BtnLink::SubCategory('Mountain', 'Trail'));
$I->seeElement(BtnLink::SubCategory('Mountain', 'Electric'));
$I->seeElement(BtnLink::SubCategory('Mountain', 'Downhill'));
$I->seeElement(BtnLink::SubCategory('Mountain', 'Fatbike'));
$I->seeElement(BtnLink::SubCategory('Mountain', 'BMX / Dirt Jump'));
$I->seeElement(BtnLink::SubCategory('Mountain', 'Frames'));

$I->seeElement(BtnLink::SubCategory('Road', 'Performance'));
$I->seeElement(BtnLink::SubCategory('Road', 'Adventure & Gravel'));
$I->seeElement(BtnLink::SubCategory('Road', 'Cyclocross'));
$I->seeElement(BtnLink::SubCategory('Road', 'Triathlon'));
$I->seeElement(BtnLink::SubCategory('Road', 'Frames'));

$I->seeElement(BtnLink::SubCategory('Electric', 'Mountain'));
$I->seeElement(BtnLink::SubCategory('Electric', 'Pavement'));

//*************************** E q u i p m e n t **********************
$I->see('Equipment');
$I->moveMouseOver(TOP::MenuName('Equipment'));

$I->seeElement(BtnLink::EquipmentCategoryGroupApostrophe('Men'));
$I->seeElement(BtnLink::EquipmentCategoryGroup('Components'));
$I->seeElement(BtnLink::EquipmentCategoryGroup('Gear'));
$I->seeElement(BtnLink::EquipmentCategoryGroupApostrophe('Women'));

$I->seeElement(BtnLink::SubCategory('Men', 'Jerseys'));
$I->seeElement(BtnLink::SubCategory('Men', 'Bibs & Shorts'));
$I->seeElement(BtnLink::SubCategory('Men', 'Jackets & Vests'));
$I->seeElement(BtnLink::SubCategory('Men', 'Base Layers'));
$I->seeElement(BtnLink::SubCategory('Men', 'Warmers'));
$I->seeElement(BtnLink::SubCategory('Men', 'Gloves'));
$I->seeElement(BtnLink::SubCategory('Men', 'Shirts'));
$I->seeElement(BtnLink::SubCategory('Men', 'Hats'));
$I->seeElement(BtnLink::SubCategory('Men', 'Socks'));
$I->seeElement(BtnLink::SubCategory('Men', 'Hoodies'));

$I->seeElement(BtnLink::SubCategory('Women', 'Jerseys'));
$I->seeElement(BtnLink::SubCategory('Women', 'Bibs & Shorts'));
$I->seeElement(BtnLink::SubCategory('Women', 'Jackets & Vests'));
$I->seeElement(BtnLink::SubCategory('Women', 'Base Layers'));
$I->seeElement(BtnLink::SubCategory('Women', 'Warmers'));
$I->seeElement(BtnLink::SubCategory('Women', 'Gloves'));
$I->seeElement(BtnLink::SubCategory('Women', 'Shirts'));
$I->seeElement(BtnLink::SubCategory('Women', 'Hats'));
$I->seeElement(BtnLink::SubCategory('Women', 'Socks'));
$I->seeElement(BtnLink::SubCategory('Women', 'Hoodies'));

$I->seeElement(BtnLink::SubCategory('Components', 'Wheels'));
$I->seeElement(BtnLink::SubCategory('Components', 'Tyres & Tubes'));
$I->seeElement(BtnLink::SubCategory('Components', 'Saddles'));
$I->seeElement(BtnLink::SubCategory('Components', 'Power Meters'));
$I->seeElement(BtnLink::SubCategory('Components', 'Drivetrain'));
$I->seeElement(BtnLink::SubCategory('Components', 'Handlebars'));
$I->seeElement(BtnLink::SubCategory('Components', 'Pedals'));
$I->seeElement(BtnLink::SubCategory('Components', 'Seatposts'));
$I->seeElement(BtnLink::SubCategory('Components', 'Stems'));
$I->seeElement(BtnLink::SubCategory('Components', 'Suspension'));

$I->seeElement(BtnLink::SubCategory('Gear', 'Shoes'));
$I->seeElement(BtnLink::SubCategory('Gear', 'Helmets'));
$I->seeElement(BtnLink::SubCategory('Gear', 'Lights'));
$I->seeElement(BtnLink::SubCategory('Gear', 'Pumps'));
$I->seeElement(BtnLink::SubCategory('Gear', 'Tools'));
$I->seeElement(BtnLink::SubCategory('Gear', 'Grips & Tape'));
$I->seeElement(BtnLink::SubCategory('Gear', 'SWAT™ Storage'));
$I->seeElement(BtnLink::SubCategory('Gear', 'Bags & Storage'));
$I->seeElement(BtnLink::SubCategory('Gear', 'Bottle Cages'));
$I->seeElement(BtnLink::SubCategory('Gear', 'Waterbottles'));
$I->seeElement(BtnLink::SubCategory('Gear', 'Commute Gear'));
$I->seeElement(BtnLink::SubCategory('Gear', 'Turbo Extras'));