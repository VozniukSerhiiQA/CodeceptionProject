<?php 
use Objects\Top as TOP;
use Objects\Url as URL;
use Objects\Footer as FOOTER;
use Objects\ButtonsAndLinks as BtnLink;
use Objects\Inputs as INPUT;
use Objects\ModalsPopups as MODAL;

//################ Home page verification #####################################################
$I = new AcceptanceTester($scenario);
$I->wantTo('Check Links on Home Page');
$I->amOnPage('/');
$I->maximizeWindow();

$I->waitForElementClickable(TOP::$Logo, 10);

// ********************************* T O P
$I->click('Find a Retailer');
$I->amOnPage(URL::$StoreFinder);
$I->moveBack();

$I->click('Sign in');
$I->amOnPage(URL::$Login);
$I->moveBack();

$I->click('Bikes');
$I->amOnPage(URL::$Bikes);

$I->click('Equipment');
$I->amOnPage(URL::$Equipment);

// ******************************* S E A R C H
$I->click(BtnLink::$SearchIcon);
$I->seeElement(BtnLink::$SearchBox);
$I->seeElement(['xpath' => BtnLink::$SearchBtn]);
$I->click(BtnLink::$SearchBox);
$I->fillField(INPUT::$SearchInputBox, 'Test');
$I->click(['xpath' => BtnLink::$SearchBtn]);
$I->amOnPage(URL::$SearchValue);

$I->click(TOP::$Logo);
$I->amOnPage('/');

// ******************************* B A N N E R
$I->click(BtnLink::$ViewRoubaix);
$I->amOnPage(URL::$Roubaix);
$I->moveBack();
$I->seeElement(BtnLink::$ViewRoubaix);
$I->click(BtnLink::$NextBanner); //skipping 2nd banner - this banner has issue for PL region(1st it shows as Сzech not as PL, 2nd issue - button does not have text)
$I->seeElement(BtnLink::$NextBanner);
$I->click(BtnLink::$NextBanner);
$I->waitForElement(BtnLink::$SeeTheCollection);
$I->seeElement(BtnLink::$SeeTheCollection);
$I->click(BtnLink::$SeeTheCollection);
$I->amOnPage(URL::$SeeTheCollection);
$I->moveBack();
$I->click(BtnLink::$NextBanner); //skipping 2nd banner - this banner has issue for PL region(1st it shows as Сzech not as PL, 2nd issue - button does not have text)
$I->waitForElement(BtnLink::$NextBanner);
$I->click(BtnLink::$NextBanner);
$I->waitForElement(BtnLink::$WatchVideo);
$I->seeElement(BtnLink::$WatchVideo);
$I->clickWithLeftButton([ 'xpath' => BtnLink::$WatchVideo]);
$I->seeElement(MODAL::$WatchVideoIframe);
$I->seeElement(BtnLink::$WatchVideoCloseFrame);
$I->click(BtnLink::$WatchVideoCloseFrame);

// ******************************* F O O T E R
$I->scrollTo(FOOTER::$ContactUs);
$I->click(['link' => 'Contact Us']);
$I->amOnPage(URL::$ContactUs);

$I->scrollTo(FOOTER::$About);
$I->click(['link' => 'About Specialized']);
$I->amOnPage(URL::$AboutSpecialized);

$I->scrollTo(FOOTER::$BicycleRegistration);
$I->click(['link' => 'Bicycle Registration']);
$I->amOnPage(URL::$BicycleRegistration);

$I->scrollTo(FOOTER::$SafetyNotifications);
$I->click(['link' => 'Safety Notifications']);
$I->amOnPage(URL::$SafetyNotifications);

$I->scrollTo(FOOTER::$SuspensionCalculator);
$I->click(['link' => 'Suspension calculator']);
$I->amOnPage(URL::$SuspensionCalculator);


