<?php
namespace EPay;


/**
 * Class captureResponse
 */
class captureResponse
{

	/**
	 * @var bool $captureResult
	 */
	protected $captureResult;

	/**
	 * @var int $pbsResponse
	 */
	protected $pbsResponse;

	/**
	 * @var int $epayresponse
	 */
	protected $epayresponse;

	/**
	 * @param bool $captureResult
	 * @param int $pbsResponse
	 * @param int $epayresponse
	 */
	public function __construct(bool $captureResult, int $pbsResponse, int $epayresponse)
	{
		$this->captureResult = $captureResult;
		$this->pbsResponse = $pbsResponse;
		$this->epayresponse = $epayresponse;
	}

	/**
	 * @return bool
	 */
	public function getCaptureResult(): ?bool
	{
		return $this->captureResult;
	}

	/**
	 * @param bool $captureResult
	 * @return captureResponse
	 */
	public function setCaptureResult(bool $captureResult): captureResponse
	{
		$this->captureResult = $captureResult;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getPbsResponse(): ?int
	{
		return $this->pbsResponse;
	}

	/**
	 * @param int $pbsResponse
	 * @return captureResponse
	 */
	public function setPbsResponse(int $pbsResponse): captureResponse
	{
		$this->pbsResponse = $pbsResponse;
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
	 * @return captureResponse
	 */
	public function setEpayresponse(int $epayresponse): captureResponse
	{
		$this->epayresponse = $epayresponse;
		return $this;
	}

}
