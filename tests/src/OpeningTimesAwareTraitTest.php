<?php
namespace tests;

use Germania\OpeningTimes\OpeningTimesInterface;
use Germania\OpeningTimes\OpeningTimesAwareTrait;


class OpeningTimesAwareTraitTest extends \PHPUnit\Framework\TestCase
{

	public function testSimple( )
	{
		$sut = $this->getMockForTrait(OpeningTimesAwareTrait::class);
		$ot_result = $sut->getOpeningTimes();
		$this->assertInstanceOf( OpeningTimesInterface::class, $ot_result );

		$ot = $this->prophesize(OpeningTimesInterface::class);
		$sut->setOpeningTimes( $ot->reveal() );

		$ot_result = $sut->getOpeningTimes();
		$this->assertInstanceOf( OpeningTimesInterface::class, $ot_result );
	}

}