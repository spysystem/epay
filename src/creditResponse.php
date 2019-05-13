<?php
namespace EPay;


/**
 * Class creditResponse
 */
class creditResponse
{

	/**
	 * @var bool $creditResult
	 */
	protected $creditResult;

	/**
	 * @var int $pbsresponse
	 */
	protected $pbsresponse;

	/**
	 * @var int $epayresponse
	 */
	protected $epayresponse;

	/**
	 * @param bool $creditResult
	 * @param int $pbsresponse
	 * @param int $epayresponse
	 */
	public function __construct(bool $creditResult, int $pbsresponse, int $epayresponse)
	{
		$this->creditResult = $creditResult;
		$this->pbsresponse = $pbsresponse;
		$this->epayresponse = $epayresponse;
	}

	/**
	 * @return bool
	 */
	public function getCreditResult(): ?bool
	{
		return $this->creditResult;
	}

	/**
	 * @param bool $creditResult
	 * @return creditResponse
	 */
	public function setCreditResult(bool $creditResult): creditResponse
	{
		$this->creditResult = $creditResult;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getPbsresponse(): ?int
	{
		return $this->pbsresponse;
	}

	/**
	 * @param int $pbsresponse
	 * @return creditResponse
	 */
	public function setPbsresponse(int $pbsresponse): creditResponse
	{
		$this->pbsresponse = $pbsresponse;
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
	 * @return creditResponse
	 */
	public function setEpayresponse(int $epayresponse): creditResponse
	{
		$this->epayresponse = $epayresponse;
		return $this;
	}

}
