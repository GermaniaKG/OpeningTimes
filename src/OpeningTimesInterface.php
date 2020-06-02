<?php
namespace Germania\OpeningTimes;

interface OpeningTimesInterface extends \IteratorAggregate, \JsonSerializable
{

	public function getDay( string $day ) : ?string;
	public function setDay( string $day, string $times = null );


	/**
	 * Gets a text hint regarding opening times
	 * @return string|null
	 */
	public function getDescription() : ?string;

	/**
	 * Sets a text hint regarding opening times
	 * @param string|null Text notice
	 */
	public function setDescription( string $text = null);

	public function getMonday() : ?string;
	public function getTuesday() : ?string;
	public function getWednesday() : ?string;
	public function getThursday() : ?string;
	public function getFriday() : ?string;
	public function getSaturday() : ?string;
	public function getSunday() : ?string;
}