<?php
namespace EPay;


/**
 * Class gettransaction
 */
class gettransaction
{

	/**
	 * @var int $merchantnumber
	 */
	protected $merchantnumber;

	/**
	 * @var int $transactionid
	 */
	protected $transactionid;

	/**
	 * @var null|string $pwd
	 */
	protected $pwd;

	/**
	 * @var null|TransactionInformationType $transactionInformation
	 */
	protected $transactionInformation;

	/**
	 * @var int $epayresponse
	 */
	protected $epayresponse;

	/**
	 * @param int $merchantnumber
	 * @param int $transactionid
	 * @param int $epayresponse
	 */
	public function __construct(int $merchantnumber, int $transactionid, int $epayresponse)
	{
		$this->merchantnumber = $merchantnumber;
		$this->transactionid = $transactionid;
		$this->epayresponse = $epayresponse;
	}

	/**
	 * @return int
	 */
	public function getMerchantnumber(): ?int
	{
		return $this->merchantnumber;
	}

	/**
	 * @param int $merchantnumber
	 * @return gettransaction
	 */
	public function setMerchantnumber(int $merchantnumber): gettransaction
	{
		$this->merchantnumber = $merchantnumber;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getTransactionid(): ?int
	{
		return $this->transactionid;
	}

	/**
	 * @param int $transactionid
	 * @return gettransaction
	 */
	public function setTransactionid(int $transactionid): gettransaction
	{
		$this->transactionid = $transactionid;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getPwd(): ?string
	{
		return $this->pwd;
	}

	/**
	 * @param null|string $pwd
	 * @return gettransaction
	 */
	public function setPwd(?string $pwd = null): gettransaction
	{
		$this->pwd = $pwd;
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
	 * @return gettransaction
	 */
	public function setTransactionInformation(?TransactionInformationType $transactionInformation = null): gettransaction
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
	 * @return gettransaction
	 */
	public function setEpayresponse(int $epayresponse): gettransaction
	{
		$this->epayresponse = $epayresponse;
		return $this;
	}

}
