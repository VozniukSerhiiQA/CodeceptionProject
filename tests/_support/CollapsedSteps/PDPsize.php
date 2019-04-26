<?php
namespace CollapsedSteps;
use Objects\Verification as VERIFY;

class PDPsize
{
	public static function Sizes (\AcceptanceTester $I)
    {
		//Test regarding Bike's sizes:
		//		getting data from dropdown into array, then working with this array depending of result,
		//		could be just 1 size and condition of verification should be proper. This test has conditions becaouse of
		//		we are not working with direcly product, we are taking 1st from PLP and not shure about this product
		$ArraySizesPDP = $I->grabMultiple(VERIFY::$PDPGetSizes);
			print_r($ArraySizesPDP);
		$QtySizesPDP = count($ArraySizesPDP);
		$I->comment(">>>>\n \tI see " .$QtySizesPDP. " element(s) in drop-down");
		$minus = round(($QtySizesPDP - 01),2); //here we have 4 elements but array has digits as [0],[1],[2],[3] that's why we should do subtraction (-) 
			print $minus;
		$I->comment(">>>>\n \tLast array number is: " .$minus);
			if ($minus==0) { //Verification if we have only 1 size in drop-down
				$var= $ArraySizesPDP[0];
				$I->comment(">>>>\n \tI see next value:\n"."- ".$var);
				$I->moveMouseOver(VERIFY::PDPSizeName('SIZE'));
				$I->clickWithLeftButton(VERIFY::PDPSizeName('SIZE'));
				$I->see($var);
			}elseif ($minus==1){
				$var= array($ArraySizesPDP[0], $ArraySizesPDP[1]);
				$I->comment(">>>>\n \tI see next values:\n"."- ".$var[0]."\n"."- ".$var[1]);
				$I->moveMouseOver(VERIFY::PDPSizeName('SIZE'));
				$I->clickWithLeftButton(VERIFY::PDPSizeName('SIZE'));
				$I->see($var[0]);
				$I->see($var[1]);
			}elseif ($minus==2){
				$var= array($ArraySizesPDP[0], $ArraySizesPDP[1], $ArraySizesPDP[2]);
				$I->comment(">>>>\n \tI see next values:\n"."- ".$var[0]."\n"."- ".$var[1]."\n"."- ".$var[2]);
				$I->moveMouseOver(VERIFY::PDPSizeName('SIZE'));
				$I->clickWithLeftButton(VERIFY::PDPSizeName('SIZE'));
				$I->see($var[0]);
				$I->see($var[1]);
				$I->see($var[2]);
			}elseif ($minus==3){
				$var= array($ArraySizesPDP[0], $ArraySizesPDP[1], $ArraySizesPDP[2], $ArraySizesPDP[3]);
				$I->comment(">>>>\n \tI see next values:\n"."- ".$var[0]."\n"."- ".$var[1]."\n"."- ".$var[2]."\n"."- ".$var[3]);
				$I->moveMouseOver(VERIFY::PDPSizeName('SIZE'));
				$I->clickWithLeftButton(VERIFY::PDPSizeName('SIZE'));
				$I->see($var[0]);
				$I->see($var[1]);
				$I->see($var[2]);
				$I->see($var[3]);

			}elseif ($minus==4){
				$var= array($ArraySizesPDP[0], $ArraySizesPDP[1], $ArraySizesPDP[2], $ArraySizesPDP[3], $ArraySizesPDP[3]);
				$I->comment("I see next values:\n"."- ".$var[0]."\n"."- ".$var[1]."\n"."- ".$var[2]."\n"."- ".$var[3]."\n"."- ".$var[4]);
				$I->moveMouseOver(VERIFY::PDPSizeName('SIZE'));
				$I->clickWithLeftButton(VERIFY::PDPSizeName('SIZE'));
				$I->see($var[0]);
				$I->see($var[1]);
				$I->see($var[2]);
				$I->see($var[3]);
				$I->see($var[4]);
			}
    }
		
}
