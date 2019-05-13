<?php
namespace EPay;


/**
 * Class credit
 */
class credit
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
	 * @var int $amount
	 */
	protected $amount;

	/**
	 * @var null|string $group
	 */
	protected $group;

	/**
	 * @var null|string $invoice
	 */
	protected $invoice;

	/**
	 * @var null|string $pwd
	 */
	protected $pwd;

	/**
	 * @var null|string $orderid
	 */
	protected $orderid;

	/**
	 * @var int $pbsresponse
	 */
	protected $pbsresponse;

	/**
	 * @var int $epayresponse
	 */
	protected $epayresponse;

	/**
	 * @param int $merchantnumber
	 * @param int $transactionid
	 * @param int $amount
	 * @param int $pbsresponse
	 * @param int $epayresponse
	 */
	public function __construct(int $merchantnumber, int $transactionid, int $amount, int $pbsresponse, int $epayresponse)
	{
		$this->merchantnumber = $merchantnumber;
		$this->transactionid = $transactionid;
		$this->amount = $amount;
		$this->pbsresponse = $pbsresponse;
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
	 * @return credit
	 */
	public function setMerchantnumber(int $merchantnumber): credit
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
	 * @return credit
	 */
	public function setTransactionid(int $transactionid): credit
	{
		$this->transactionid = $transactionid;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getAmount(): ?int
	{
		return $this->amount;
	}

	/**
	 * @param int $amount
	 * @return credit
	 */
	public function setAmount(int $amount): credit
	{
		$this->amount = $amount;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getGroup(): ?string
	{
		return $this->group;
	}

	/**
	 * @param null|string $group
	 * @return credit
	 */
	public function setGroup(?string $group = null): credit
	{
		$this->group = $group;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getInvoice(): ?string
	{
		return $this->invoice;
	}

	/**
	 * @param null|string $invoice
	 * @return credit
	 */
	public function setInvoice(?string $invoice = null): credit
	{
		$this->invoice = $invoice;
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
	 * @return credit
	 */
	public function setPwd(?string $pwd = null): credit
	{
		$this->pwd = $pwd;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getOrderid(): ?string
	{
		return $this->orderid;
	}

	/**
	 * @param null|string $orderid
	 * @return credit
	 */
	public function setOrderid(?string $orderid = null): credit
	{
		$this->orderid = $orderid;
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
	 * @return credit
	 */
	public function setPbsresponse(int $pbsresponse): credit
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
	 * @return credit
	 */
	public function setEpayresponse(int $epayresponse): credit
	{
		$this->epayresponse = $epayresponse;
		return $this;
	}

}
