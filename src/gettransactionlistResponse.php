<?php
namespace EPay;


/**
 * Class gettransactionlistResponse
 */
class gettransactionlistResponse
{

	/**
	 * @var bool $gettransactionlistResult
	 */
	protected $gettransactionlistResult;

	/**
	 * @var null|ArrayOfTransactionInformationType $transactionInformationAry
	 */
	protected $transactionInformationAry;

	/**
	 * @var int $epayresponse
	 */
	protected $epayresponse;

	/**
	 * @param bool $gettransactionlistResult
	 * @param int $epayresponse
	 */
	public function __construct(bool $gettransactionlistResult, int $epayresponse)
	{
		$this->gettransactionlistResult = $gettransactionlistResult;
		$this->epayresponse = $epayresponse;
	}

	/**
	 * @return bool
	 */
	public function getGettransactionlistResult(): ?bool
	{
		return $this->gettransactionlistResult;
	}

	/**
	 * @param bool $gettransactionlistResult
	 * @return gettransactionlistResponse
	 */
	public function setGettransactionlistResult(bool $gettransactionlistResult): gettransactionlistResponse
	{
		$this->gettransactionlistResult = $gettransactionlistResult;
		return $this;
	}

	/**
	 * @return null|ArrayOfTransactionInformationType
	 */
	public function getTransactionInformationAry(): ?ArrayOfTransactionInformationType
	{
		return $this->transactionInformationAry;
	}

	/**
	 * @param null|ArrayOfTransactionInformationType $transactionInformationAry
	 * @return gettransactionlistResponse
	 */
	public function setTransactionInformationAry(?ArrayOfTransactionInformationType $transactionInformationAry = null): gettransactionlistResponse
	{
		$this->transactionInformationAry = $transactionInformationAry;
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
	 * @return gettransactionlistResponse
	 */
	public function setEpayresponse(int $epayresponse): gettransactionlistResponse
	{
		$this->epayresponse = $epayresponse;
		return $this;
	}

}
