<?php
namespace EPay;


/**
 * Class movetransactiontogroupResponse
 */
class movetransactiontogroupResponse
{

	/**
	 * @var bool $movetransactiontogroupResult
	 */
	protected $movetransactiontogroupResult;

	/**
	 * @var int $epayresponse
	 */
	protected $epayresponse;

	/**
	 * @param bool $movetransactiontogroupResult
	 * @param int $epayresponse
	 */
	public function __construct(bool $movetransactiontogroupResult, int $epayresponse)
	{
		$this->movetransactiontogroupResult = $movetransactiontogroupResult;
		$this->epayresponse = $epayresponse;
	}

	/**
	 * @return bool
	 */
	public function getMovetransactiontogroupResult(): ?bool
	{
		return $this->movetransactiontogroupResult;
	}

	/**
	 * @param bool $movetransactiontogroupResult
	 * @return movetransactiontogroupResponse
	 */
	public function setMovetransactiontogroupResult(bool $movetransactiontogroupResult): movetransactiontogroupResponse
	{
		$this->movetransactiontogroupResult = $movetransactiontogroupResult;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getEpayresponse(): ?int
	{
		return $this->epayresponse;
	}

	/**
	 * @param int $epayresponse
	 * @return movetransactiontogroupResponse
	 */
	public function setEpayresponse(int $epayresponse): movetransactiontogroupResponse
	{
		$this->epayresponse = $epayresponse;
		return $this;
	}

}
