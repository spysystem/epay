<?php
namespace EPay;


/**
 * Class gettransactionResponse
 */
class gettransactionResponse
{

	/**
	 * @var bool $gettransactionResult
	 */
	protected $gettransactionResult;

	/**
	 * @var null|TransactionInformationType $transactionInformation
	 */
	protected $transactionInformation;

	/**
	 * @var int $epayresponse
	 */
	protected $epayresponse;

	/**
	 * @param bool $gettransactionResult
	 * @param int $epayresponse
	 */
	public function __construct(bool $gettransactionResult, int $epayresponse)
	{
		$this->gettransactionResult = $gettransactionResult;
		$this->epayresponse = $epayresponse;
	}

	/**
	 * @return bool
	 */
	public function getGettransactionResult(): ?bool
	{
		return $this->gettransactionResult;
	}

	/**
	 * @param bool $gettransactionResult
	 * @return gettransactionResponse
	 */
	public function setGettransactionResult(bool $gettransactionResult): gettransactionResponse
	{
		$this->gettransactionResult = $gettransactionResult;
		return $this;
	}

	/**
	 * @return null|TransactionInformationType
	 */
	public function getTransactionInformation(): ?TransactionInformationType
	{
		return $this->transactionInformation;
	}

	/**
	 * @param null|TransactionInformationType $transactionInformation
	 * @return gettransactionResponse
	 */
	public function setTransactionInformation(?TransactionInformationType $transactionInformation = null): gettransactionResponse
	{
		$this->transactionInformation = $transactionInformation;
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
	 * @return gettransactionResponse
	 */
	public function setEpayresponse(int $epayresponse): gettransactionResponse
	{
		$this->epayresponse = $epayresponse;
		return $this;
	}

}
