<?php
namespace EPay;


/**
 * Class getPbsErrorResponse
 */
class getPbsErrorResponse
{

	/**
	 * @var bool $getPbsErrorResult
	 */
	protected $getPbsErrorResult;

	/**
	 * @var null|string $pbsresponsestring
	 */
	protected $pbsresponsestring;

	/**
	 * @var int $epayresponse
	 */
	protected $epayresponse;

	/**
	 * @param bool $getPbsErrorResult
	 * @param int $epayresponse
	 */
	public function __construct(bool $getPbsErrorResult, int $epayresponse)
	{
		$this->getPbsErrorResult = $getPbsErrorResult;
		$this->epayresponse = $epayresponse;
	}

	/**
	 * @return bool
	 */
	public function getGetPbsErrorResult(): ?bool
	{
		return $this->getPbsErrorResult;
	}

	/**
	 * @param bool $getPbsErrorResult
	 * @return getPbsErrorResponse
	 */
	public function setGetPbsErrorResult(bool $getPbsErrorResult): getPbsErrorResponse
	{
		$this->getPbsErrorResult = $getPbsErrorResult;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getPbsresponsestring(): ?string
	{
		return $this->pbsresponsestring;
	}

	/**
	 * @param null|string $pbsresponsestring
	 * @return getPbsErrorResponse
	 */
	public function setPbsresponsestring(?string $pbsresponsestring = null): getPbsErrorResponse
	{
		$this->pbsresponsestring = $pbsresponsestring;
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
	 * @return getPbsErrorResponse
	 */
	public function setEpayresponse(int $epayresponse): getPbsErrorResponse
	{
		$this->epayresponse = $epayresponse;
		return $this;
	}

}
