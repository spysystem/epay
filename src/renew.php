<?php
namespace EPay;


/**
 * Class renew
 */
class renew
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
	 * @param int $pbsResponse
	 * @param int $epayresponse
	 */
	public function __construct(int $merchantnumber, int $transactionid, int $pbsResponse, int $epayresponse)
	{
		$this->merchantnumber = $merchantnumber;
		$this->transactionid = $transactionid;
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
	 * @return renew
	 */
	public function setMerchantnumber(int $merchantnumber): renew
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
	 * @return renew
	 */
	public function setTransactionid(int $transactionid): renew
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
	 * @return renew
	 */
	public function setGroup(?string $group = null): renew
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
	 * @return renew
	 */
	public function setPwd(?string $pwd = null): renew
	{
		$this->pwd = $pwd;
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
	 * @return renew
	 */
	public function setPbsResponse(int $pbsResponse): renew
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
	 * @return renew
	 */
	public function setEpayresponse(int $epayresponse): renew
	{
		$this->epayresponse = $epayresponse;
		return $this;
	}

}
