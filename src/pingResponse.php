<?php
namespace EPay;


/**
 * Class pingResponse
 */
class pingResponse
{

	/**
	 * @var bool $pingResult
	 */
	protected $pingResult;

	/**
	 * @param bool $pingResult
	 */
	public function __construct(bool $pingResult)
	{
		$this->pingResult = $pingResult;
	}

	/**
	 * @return bool
	 */
	public function getPingResult(): ?bool
	{
		return $this->pingResult;
	}

	/**
	 * @param bool $pingResult
	 * @return pingResponse
	 */
	public function setPingResult(bool $pingResult): pingResponse
	{
		$this->pingResult = $pingResult;
		return $this;
	}

}
