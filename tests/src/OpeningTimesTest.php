<?php
namespace tests;

use Germania\OpeningTimes\OpeningTimes;
use Germania\OpeningTimes\OpeningTimesInterface;

class OpeningTimesTest extends \PHPUnit\Framework\TestCase
{
	public function testInstantiation()
	{
		$sut = new OpeningTimes;
		$this->assertInstanceOf( OpeningTimesInterface::class, $sut);
		$this->assertIsIterable( $sut);

		$this->assertNull( $sut->getDay("invalid_day"));

		return $sut;
	}



	/**
	 * @dataProvider provideDaysAndTimes
	 * @depends testInstantiation
	 */
	public function testSettersAndGetters($day, $times, $sut )
	{
		$fluent = $sut->setDay($day, $times);

		$this->assertInstanceOf( OpeningTimesInterface::class, $fluent);
		$this->assertEquals( $fluent->getDay($day), $times);

		switch($day):
			case "monday": 
				$this->assertEquals( $fluent->getMonday(), $times);
				$this->assertEquals( $fluent->setMonday( $day )->getMonday(), $day);
				break;
			case "tuesday": 
				$this->assertEquals( $fluent->getTuesday(), $times);
				$this->assertEquals( $fluent->setTuesday( $day )->getTuesday(), $day);
				break;
			case "wednesday": 
				$this->assertEquals( $fluent->getWednesday(), $times);
				$this->assertEquals( $fluent->setWednesday( $day )->getWednesday(), $day);
				break;
			case "thursday": 
				$this->assertEquals( $fluent->getThursday(), $times);
				$this->assertEquals( $fluent->setThursday( $day )->getThursday(), $day);
				break;
			case "friday": 
				$this->assertEquals( $fluent->getFriday(), $times);
				$this->assertEquals( $fluent->setFriday( $day )->getFriday(), $day);
				break;
			case "saturday": 
				$this->assertEquals( $fluent->getSaturday(), $times);
				$this->assertEquals( $fluent->setSaturday( $day )->getSaturday(), $day);
				break;
			case "sunday": 
				$this->assertEquals( $fluent->getSunday(), $times);
				$this->assertEquals( $fluent->setSunday( $day )->getSunday(), $day);
				break;
		endswitch;
	}

	public function provideDaysAndTimes()
	{
		return array(
			[ "monday",    "01 to 18" ],
			[ "tuesday",   "02 to 18" ],
			[ "wednesday", "03 to 18" ],
			[ "thursday",  "04 to 18" ],
			[ "friday",    "05 to 18" ],
			[ "saturday",  "06 to 18" ],
			[ "sunday",    "07 to 18" ],

			[ "monday",    null ],
			[ "tuesday",   null ],
			[ "wednesday", null ],
			[ "thursday",  null ],
			[ "friday",    null ],
			[ "saturday",  null ],
			[ "sunday",    null ],
		);
	}


}