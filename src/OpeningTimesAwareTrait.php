<?php
namespace Germania\OpeningTimes;

trait OpeningTimesAwareTrait
{

	use OpeningTimesProviderTrait;


	/**
	 * @param OpeningTimesInterface $opening_times
	 */
	public function setOpeningTimes( OpeningTimesInterface $opening_times)
	{
		$this->opening_times = $opening_times;
		return $this;
	}
}