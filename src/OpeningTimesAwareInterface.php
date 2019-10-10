<?php
namespace Germania\OpeningTimes;

interface OpeningTimesAwareInterface extends OpeningTimesProviderInterface
{

	/**
	 * @param OpeningTimesInterface $opening_times
	 */
	public function setOpeningTimes( OpeningTimesInterface $opening_times);
}