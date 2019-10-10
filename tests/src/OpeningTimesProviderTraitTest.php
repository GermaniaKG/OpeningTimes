<?php
namespace tests;

use Germania\OpeningTimes\OpeningTimesInterface;
use Germania\OpeningTimes\OpeningTimesProviderTrait;


class OpeningTimesProviderTraitTest extends \PHPUnit\Framework\TestCase
{

	public function testSimple( )
	{
		$sut = $this->getMockForTrait(OpeningTimesProviderTrait::class);
		$ot_result = $sut->getOpeningTimes();
		$this->assertInstanceOf( OpeningTimesInterface::class, $ot_result );
	}

}