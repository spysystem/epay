<?php
namespace EPay;


/**
 * Class move_as_capturedResponse
 */
class move_as_capturedResponse
{

	/**
	 * @var bool $move_as_capturedResult
	 */
	protected $move_as_capturedResult;

	/**
	 * @var int $epayresponse
	 */
	protected $epayresponse;

	/**
	 * @param bool $move_as_capturedResult
	 * @param int $epayresponse
	 */
	public function __construct(bool $move_as_capturedResult, int $epayresponse)
	{
		$this->move_as_capturedResult = $move_as_capturedResult;
		$this->epayresponse = $epayresponse;
	}

	/**
	 * @return bool
	 */
	public function getMove_as_capturedResult(): ?bool
	{
		return $this->move_as_capturedResult;
	}

	/**
	 * @param bool $move_as_capturedResult
	 * @return move_as_capturedResponse
	 */
	public function setMove_as_capturedResult(bool $move_as_capturedResult): move_as_capturedResponse
	{
		$this->move_as_capturedResult = $move_as_capturedResult;
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
	 * @return move_as_capturedResponse
	 */
	public function setEpayresponse(int $epayresponse): move_as_capturedResponse
	{
		$this->epayresponse = $epayresponse;
		return $this;
	}

}
