<?php
namespace Germania\OpeningTimes;

interface OpeningTimesProviderInterface
{
	public function getOpeningTimes() : OpeningTimesInterface;
}