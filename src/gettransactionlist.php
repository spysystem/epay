<?php
namespace EPay;

use DateTime;
use Exception;

/**
 * Class gettransactionlist
 */
class gettransactionlist
{

	/**
	 * @var int $merchantnumber
	 */
	protected $merchantnumber;

	/**
	 * @var string|TransactionStatus $status
	 */
	protected $status;

	/**
	 * @var DateTime $searchdatestart
	 */
	protected $searchdatestart;

	/**
	 * @var DateTime $searchdateend
	 */
	protected $searchdateend;

	/**
	 * @var null|string $searchorderid
	 */
	protected $searchorderid;

	/**
	 * @var null|string $searchgroup
	 */
	protected $searchgroup;

	/**
	 * @var null|string $pwd
	 */
	protected $pwd;

	/**
	 * @var null|ArrayOfTransactionInformationType $transactionInformationAry
	 */
	protected $transactionInformationAry;

	/**
	 * @var int $epayresponse
	 */
	protected $epayresponse;

	/**
	 * @param int $merchantnumber
	 * @param string|TransactionStatus $status
	 * @param DateTime $searchdatestart
	 * @param DateTime $searchdateend
	 * @param int $epayresponse
	 */
	public function __construct(int $merchantnumber, $status, DateTime $searchdatestart, DateTime $searchdateend, int $epayresponse)
	{
		$this->merchantnumber = $merchantnumber;
		$this->status = $status;
		$this->searchdatestart = $searchdatestart->format(DateTime::ATOM);
		$this->searchdateend = $searchdateend->format(DateTime::ATOM);
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
	 * @return gettransactionlist
	 */
	public function setMerchantnumber(int $merchantnumber): gettransactionlist
	{
		$this->merchantnumber = $merchantnumber;
		return $this;
	}

	/**
	 * @return string|TransactionStatus
	 */
	public function getStatus()
	{
		return $this->status;
	}

	/**
	 * @param string|TransactionStatus $status
	 * @return gettransactionlist
	 */
	public function setStatus($status): gettransactionlist
	{
		$this->status = $status;
		return $this;
	}

	/**
	 * @return DateTime
	 */
	public function getSearchdatestart(): ?DateTime
	{
		if ($this->searchdatestart === null)
		{
			return null;
		}
		try
		{
			return new DateTime($this->searchdatestart);
		}
		catch (Exception $oException)
		{
			return null;
		}
	}

	/**
	 * @param DateTime $searchdatestart
	 * @return gettransactionlist
	 */
	public function setSearchdatestart(DateTime $searchdatestart): gettransactionlist
	{
		$this->searchdatestart = $searchdatestart->format(DateTime::ATOM);
		return $this;
	}

	/**
	 * @return DateTime
	 */
	public function getSearchdateend(): ?DateTime
	{
		if ($this->searchdateend === null)
		{
			return null;
		}
		try
		{
			return new DateTime($this->searchdateend);
		}
		catch (Exception $oException)
		{
			return null;
		}
	}

	/**
	 * @param DateTime $searchdateend
	 * @return gettransactionlist
	 */
	public function setSearchdateend(DateTime $searchdateend): gettransactionlist
	{
		$this->searchdateend = $searchdateend->format(DateTime::ATOM);
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getSearchorderid(): ?string
	{
		return $this->searchorderid;
	}

	/**
	 * @param null|string $searchorderid
	 * @return gettransactionlist
	 */
	public function setSearchorderid(?string $searchorderid = null): gettransactionlist
	{
		$this->searchorderid = $searchorderid;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getSearchgroup(): ?string
	{
		return $this->searchgroup;
	}

	/**
	 * @param null|string $searchgroup
	 * @return gettransactionlist
	 */
	public function setSearchgroup(?string $searchgroup = null): gettransactionlist
	{
		$this->searchgroup = $searchgroup;
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
	 * @return gettransactionlist
	 */
	public function setPwd(?string $pwd = null): gettransactionlist
	{
		$this->pwd = $pwd;
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
	 * @return gettransactionlist
	 */
	public function setTransactionInformationAry(?ArrayOfTransactionInformationType $transactionInformationAry = null): gettransactionlist
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
	 * @return gettransactionlist
	 */
	public function setEpayresponse(int $epayresponse): gettransactionlist
	{
		$this->epayresponse = $epayresponse;
		return $this;
	}

}
