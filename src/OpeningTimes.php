<?php
namespace Germania\OpeningTimes;

class OpeningTimes implements OpeningTimesInterface
{
	protected $days = array();



	/**
	 * @inheritDoc
	 */
	public function getIterator()
	{
		return new \ArrayIterator( $this->days, \ArrayIterator::ARRAY_AS_PROPS );
	}


	/**
	 * @inheritDoc
	 */
	public function jsonSerialize()
	{
		return $this->days;
	}


	/**
	 * @param  string $day   Day name, e.g. "monday", "tuesday"
	 * @return string|null   Opening times as text
	 */
	public function getDay( string $day ) : ?string
	{
		return ($this->days[ $day ] ?? null) ?: null;	
	}


	/**
	 * @param  string $day   Day name, e.g. "monday", "tuesday"
	 * @param string $times|null  Opening times as text
	 */
	public function setDay( string $day, string $times = null ) : self
	{
		$this->days[ $day ] = $times;
		return $this;	
	}





	/**
	 * @inheritDoc
	 * @return string|null
	 */
	public function getMonday() : ?string
	{
		return $this->getDay("monday");
	}


	/**
	 * @param string|null $times Opening times as text
	 */
	public function setMonday( string $times = null )
	{
		return $this->setDay("monday", $times);
	}





	/**
	 * @inheritDoc
	 * @return string|null
	 */		
	public function getTuesday() : ?string
	{
		return $this->getDay("tuesday");
	}


	/**
	 * @param string|null $times Opening times as text
	 */
	public function setTuesday( string $times = null )
	{
		return $this->setDay("tuesday", $times);
	}





	/**
	 * @inheritDoc
	 * @return string|null
	 */		
	public function getWednesday() : ?string
	{
		return $this->getDay("wednesday");
	}


	/**
	 * @param string|null $times Opening times as text
	 */
	public function setWednesday( string $times = null )
	{
		return $this->setDay("wednesday", $times);
	}





	/**
	 * @inheritDoc
	 * @return string|null
	 */		
	public function getThursday() : ?string
	{
		return $this->getDay("thursday");
	}


	/**
	 * @param string|null $times Opening times as text
	 */
	public function setThursday( string $times = null )
	{
		return $this->setDay("thursday", $times);
	}








	/**
	 * @inheritDoc
	 * @return string|null
	 */		
	public function getFriday() : ?string
	{
		return $this->getDay("friday");
	}



	/**
	 * @param string|null $times Opening times as text
	 */
	public function setFriday( string $times = null )
	{
		return $this->setDay("friday", $times);
	}






	/**
	 * @inheritDoc
	 * @return string|null
	 */		
	public function getSaturday() : ?string
	{
		return $this->getDay("saturday");
	}




	/**
	 * @param string|null $times Opening times as text
	 */
	public function setSaturday( string $times = null )
	{
		return $this->setDay("saturday", $times);
	}




	/**
	 * @inheritDoc
	 * @return string|null
	 */		
	public function getSunday() : ?string
	{
		return $this->getDay("sunday");
	}





	/**
	 * @param string|null $times Opening times as text
	 */
	public function setSunday( string $times = null )
	{
		return $this->setDay("sunday", $times);
	}


}