<?php
namespace Germania\OpeningTimes;

trait OpeningTimesProviderTrait
{

	public $opening_times;


	/**
	 * @inheritDoc
	 * @return OpeningTimes
	 */
	public function getOpeningTimes() : OpeningTimesInterface
	{
		if (!$this->opening_times)		
			$this->opening_times = new OpeningTimes;

		return $this->opening_times;
	}


}