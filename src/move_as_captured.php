<?php
namespace EPay;


/**
 * Class move_as_captured
 */
class move_as_captured
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
	 * @return move_as_captured
	 */
	public function setMerchantnumber(int $merchantnumber): move_as_captured
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
	 * @return move_as_captured
	 */
	public function setTransactionid(int $transactionid): move_as_captured
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
	 * @return move_as_captured
	 */
	public function setGroup(?string $group = null): move_as_captured
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
	 * @return move_as_captured
	 */
	public function setPwd(?string $pwd = null): move_as_captured
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
	 * @return move_as_captured
	 */
	public function setEpayresponse(int $epayresponse): move_as_captured
	{
		$this->epayresponse = $epayresponse;
		return $this;
	}

}
