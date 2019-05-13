<?php
namespace EPay;


/**
 * Class capture
 */
class capture
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
	 * @var null|string $pwd
	 */
	protected $pwd;

	/**
	 * @var null|string $invoice
	 */
	protected $invoice;

	/**
	 * @var null|string $orderid
	 */
	protected $orderid;

	/**
	 * @var int $pbsResponse
	 */
	protected $pbsResponse;

	/**
	 * @var int $epayresponse
	 */
	protected $epayresponse;

	/**
	 * @param int $merchantnumber
	 * @param int $transactionid
	 * @param int $amount
	 * @param int $pbsResponse
	 * @param int $epayresponse
	 */
	public function __construct(int $merchantnumber, int $transactionid, int $amount, int $pbsResponse, int $epayresponse)
	{
		$this->merchantnumber = $merchantnumber;
		$this->transactionid = $transactionid;
		$this->amount = $amount;
		$this->pbsResponse = $pbsResponse;
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
	 * @return capture
	 */
	public function setMerchantnumber(int $merchantnumber): capture
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
	 * @return capture
	 */
	public function setTransactionid(int $transactionid): capture
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
	 * @return capture
	 */
	public function setAmount(int $amount): capture
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
	 * @return capture
	 */
	public function setGroup(?string $group = null): capture
	{
		$this->group = $group;
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
	 * @return capture
	 */
	public function setPwd(?string $pwd = null): capture
	{
		$this->pwd = $pwd;
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
	 * @return capture
	 */
	public function setInvoice(?string $invoice = null): capture
	{
		$this->invoice = $invoice;
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
	 * @return capture
	 */
	public function setOrderid(?string $orderid = null): capture
	{
		$this->orderid = $orderid;
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
	 * @return capture
	 */
	public function setPbsResponse(int $pbsResponse): capture
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
	 * @return capture
	 */
	public function setEpayresponse(int $epayresponse): capture
	{
		$this->epayresponse = $epayresponse;
		return $this;
	}

}
