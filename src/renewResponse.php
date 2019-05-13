<?php
namespace EPay;


/**
 * Class renewResponse
 */
class renewResponse
{

	/**
	 * @var bool $renewResult
	 */
	protected $renewResult;

	/**
	 * @var int $pbsResponse
	 */
	protected $pbsResponse;

	/**
	 * @var int $epayresponse
	 */
	protected $epayresponse;

	/**
	 * @param bool $renewResult
	 * @param int $pbsResponse
	 * @param int $epayresponse
	 */
	public function __construct(bool $renewResult, int $pbsResponse, int $epayresponse)
	{
		$this->renewResult = $renewResult;
		$this->pbsResponse = $pbsResponse;
		$this->epayresponse = $epayresponse;
	}

	/**
	 * @return bool
	 */
	public function getRenewResult(): ?bool
	{
		return $this->renewResult;
	}

	/**
	 * @param bool $renewResult
	 * @return renewResponse
	 */
	public function setRenewResult(bool $renewResult): renewResponse
	{
		$this->renewResult = $renewResult;
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
	 * @return renewResponse
	 */
	public function setPbsResponse(int $pbsResponse): renewResponse
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
	 * @return renewResponse
	 */
	public function setEpayresponse(int $epayresponse): renewResponse
	{
		$this->epayresponse = $epayresponse;
		return $this;
	}

}
