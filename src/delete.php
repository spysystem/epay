<?php
namespace EPay;


/**
 * Class delete
 */
class delete
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
	 * @var null|string $group
	 */
	protected $group;

	/**
	 * @var null|string $pwd
	 */
	protected $pwd;

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
	 * @return delete
	 */
	public function setMerchantnumber(int $merchantnumber): delete
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
	 * @return delete
	 */
	public function setTransactionid(int $transactionid): delete
	{
		$this->transactionid = $transactionid;
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
	 * @return delete
	 */
	public function setGroup(?string $group = null): delete
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
	 * @return delete
	 */
	public function setPwd(?string $pwd = null): delete
	{
		$this->pwd = $pwd;
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
	 * @return delete
	 */
	public function setEpayresponse(int $epayresponse): delete
	{
		$this->epayresponse = $epayresponse;
		return $this;
	}

}
