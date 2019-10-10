<?php
namespace Germania\OpeningTimes;

interface OpeningTimesInterface extends \IteratorAggregate
{

	public function getDay( string $day ) : ?string;
	public function setDay( string $day, string $times = null );

	public function getMonday() : ?string;
	public function getTuesday() : ?string;
	public function getWednesday() : ?string;
	public function getThursday() : ?string;
	public function getFriday() : ?string;
	public function getSaturday() : ?string;
	public function getSunday() : ?string;
}