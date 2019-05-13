<?php
namespace EPay;


/**
 * Class movetransactiontogroup
 */
class movetransactiontogroup
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
	 * @return movetransactiontogroup
	 */
	public function setMerchantnumber(int $merchantnumber): movetransactiontogroup
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
	 * @return movetransactiontogroup
	 */
	public function setTransactionid(int $transactionid): movetransactiontogroup
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
	 * @return movetransactiontogroup
	 */
	public function setGroup(?string $group = null): movetransactiontogroup
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
	 * @return movetransactiontogroup
	 */
	public function setPwd(?string $pwd = null): movetransactiontogroup
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
	 * @return movetransactiontogroup
	 */
	public function setEpayresponse(int $epayresponse): movetransactiontogroup
	{
		$this->epayresponse = $epayresponse;
		return $this;
	}

}
