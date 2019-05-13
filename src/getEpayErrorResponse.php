<?php
namespace EPay;


/**
 * Class getEpayErrorResponse
 */
class getEpayErrorResponse
{

	/**
	 * @var bool $getEpayErrorResult
	 */
	protected $getEpayErrorResult;

	/**
	 * @var null|string $epayresponsestring
	 */
	protected $epayresponsestring;

	/**
	 * @var int $epayresponse
	 */
	protected $epayresponse;

	/**
	 * @param bool $getEpayErrorResult
	 * @param int $epayresponse
	 */
	public function __construct(bool $getEpayErrorResult, int $epayresponse)
	{
		$this->getEpayErrorResult = $getEpayErrorResult;
		$this->epayresponse = $epayresponse;
	}

	/**
	 * @return bool
	 */
	public function getGetEpayErrorResult(): ?bool
	{
		return $this->getEpayErrorResult;
	}

	/**
	 * @param bool $getEpayErrorResult
	 * @return getEpayErrorResponse
	 */
	public function setGetEpayErrorResult(bool $getEpayErrorResult): getEpayErrorResponse
	{
		$this->getEpayErrorResult = $getEpayErrorResult;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getEpayresponsestring(): ?string
	{
		return $this->epayresponsestring;
	}

	/**
	 * @param null|string $epayresponsestring
	 * @return getEpayErrorResponse
	 */
	public function setEpayresponsestring(?string $epayresponsestring = null): getEpayErrorResponse
	{
		$this->epayresponsestring = $epayresponsestring;
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
	 * @return getEpayErrorResponse
	 */
	public function setEpayresponse(int $epayresponse): getEpayErrorResponse
	{
		$this->epayresponse = $epayresponse;
		return $this;
	}

}
