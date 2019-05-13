<?php
namespace EPay;

use DateTime;
use Exception;

/**
 * Class TransactionInformationType
 */
class TransactionInformationType
{

	/**
	 * @var null|string $group
	 */
	protected $group;

	/**
	 * @var int $authamount
	 */
	protected $authamount;

	/**
	 * @var int $currency
	 */
	protected $currency;

	/**
	 * @var int $cardtypeid
	 */
	protected $cardtypeid;

	/**
	 * @var int $capturedamount
	 */
	protected $capturedamount;

	/**
	 * @var int $creditedamount
	 */
	protected $creditedamount;

	/**
	 * @var null|string $orderid
	 */
	protected $orderid;

	/**
	 * @var null|string $description
	 */
	protected $description;

	/**
	 * @var DateTime $authdate
	 */
	protected $authdate;

	/**
	 * @var DateTime $captureddate
	 */
	protected $captureddate;

	/**
	 * @var DateTime $deleteddate
	 */
	protected $deleteddate;

	/**
	 * @var DateTime $crediteddate
	 */
	protected $crediteddate;

	/**
	 * @var string|TransactionStatus $status
	 */
	protected $status;

	/**
	 * @var null|ArrayOfTransactionHistoryInfo $history
	 */
	protected $history;

	/**
	 * @var int $transactionid
	 */
	protected $transactionid;

	/**
	 * @var null|string $cardholder
	 */
	protected $cardholder;

	/**
	 * @var string|PayMode $mode
	 */
	protected $mode;

	/**
	 * @var bool $msc
	 */
	protected $msc;

	/**
	 * @var int $fraudStatus
	 */
	protected $fraudStatus;

	/**
	 * @var null|string $FraudMessage
	 */
	protected $FraudMessage;

	/**
	 * @var null|string $payerCountryCode
	 */
	protected $payerCountryCode;

	/**
	 * @var null|string $issuedCountryCode
	 */
	protected $issuedCountryCode;

	/**
	 * @var int $fee
	 */
	protected $fee;

	/**
	 * @var bool $splitpayment
	 */
	protected $splitpayment;

	/**
	 * @var string|AcquirerType $acquirer
	 */
	protected $acquirer;

	/**
	 * @var null|string $tcardno
	 */
	protected $tcardno;

	/**
	 * @var int $expmonth
	 */
	protected $expmonth;

	/**
	 * @var int $expyear
	 */
	protected $expyear;

	/**
	 * @param int $authamount
	 * @param int $currency
	 * @param int $cardtypeid
	 * @param int $capturedamount
	 * @param int $creditedamount
	 * @param DateTime $authdate
	 * @param DateTime $captureddate
	 * @param DateTime $deleteddate
	 * @param DateTime $crediteddate
	 * @param string|TransactionStatus $status
	 * @param int $transactionid
	 * @param string|PayMode $mode
	 * @param bool $msc
	 * @param int $fraudStatus
	 * @param int $fee
	 * @param bool $splitpayment
	 * @param string|AcquirerType $acquirer
	 * @param int $expmonth
	 * @param int $expyear
	 */
	public function __construct(int $authamount, int $currency, int $cardtypeid, int $capturedamount, int $creditedamount, DateTime $authdate, DateTime $captureddate, DateTime $deleteddate, DateTime $crediteddate, $status, int $transactionid, $mode, bool $msc, int $fraudStatus, int $fee, bool $splitpayment, $acquirer, int $expmonth, int $expyear)
	{
		$this->authamount = $authamount;
		$this->currency = $currency;
		$this->cardtypeid = $cardtypeid;
		$this->capturedamount = $capturedamount;
		$this->creditedamount = $creditedamount;
		$this->authdate = $authdate->format(DateTime::ATOM);
		$this->captureddate = $captureddate->format(DateTime::ATOM);
		$this->deleteddate = $deleteddate->format(DateTime::ATOM);
		$this->crediteddate = $crediteddate->format(DateTime::ATOM);
		$this->status = $status;
		$this->transactionid = $transactionid;
		$this->mode = $mode;
		$this->msc = $msc;
		$this->fraudStatus = $fraudStatus;
		$this->fee = $fee;
		$this->splitpayment = $splitpayment;
		$this->acquirer = $acquirer;
		$this->expmonth = $expmonth;
		$this->expyear = $expyear;
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
	 * @return TransactionInformationType
	 */
	public function setGroup(?string $group = null): TransactionInformationType
	{
		$this->group = $group;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getAuthamount(): ?int
	{
		return $this->authamount;
	}

	/**
	 * @param int $authamount
	 * @return TransactionInformationType
	 */
	public function setAuthamount(int $authamount): TransactionInformationType
	{
		$this->authamount = $authamount;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getCurrency(): ?int
	{
		return $this->currency;
	}

	/**
	 * @param int $currency
	 * @return TransactionInformationType
	 */
	public function setCurrency(int $currency): TransactionInformationType
	{
		$this->currency = $currency;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getCardtypeid(): ?int
	{
		return $this->cardtypeid;
	}

	/**
	 * @param int $cardtypeid
	 * @return TransactionInformationType
	 */
	public function setCardtypeid(int $cardtypeid): TransactionInformationType
	{
		$this->cardtypeid = $cardtypeid;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getCapturedamount(): ?int
	{
		return $this->capturedamount;
	}

	/**
	 * @param int $capturedamount
	 * @return TransactionInformationType
	 */
	public function setCapturedamount(int $capturedamount): TransactionInformationType
	{
		$this->capturedamount = $capturedamount;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getCreditedamount(): ?int
	{
		return $this->creditedamount;
	}

	/**
	 * @param int $creditedamount
	 * @return TransactionInformationType
	 */
	public function setCreditedamount(int $creditedamount): TransactionInformationType
	{
		$this->creditedamount = $creditedamount;
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
	 * @return TransactionInformationType
	 */
	public function setOrderid(?string $orderid = null): TransactionInformationType
	{
		$this->orderid = $orderid;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getDescription(): ?string
	{
		return $this->description;
	}

	/**
	 * @param null|string $description
	 * @return TransactionInformationType
	 */
	public function setDescription(?string $description = null): TransactionInformationType
	{
		$this->description = $description;
		return $this;
	}

	/**
	 * @return DateTime
	 */
	public function getAuthdate(): ?DateTime
	{
		if ($this->authdate === null)
		{
			return null;
		}
		try
		{
			return new DateTime($this->authdate);
		}
		catch (Exception $oException)
		{
			return null;
		}
	}

	/**
	 * @param DateTime $authdate
	 * @return TransactionInformationType
	 */
	public function setAuthdate(DateTime $authdate): TransactionInformationType
	{
		$this->authdate = $authdate->format(DateTime::ATOM);
		return $this;
	}

	/**
	 * @return DateTime
	 */
	public function getCaptureddate(): ?DateTime
	{
		if ($this->captureddate === null)
		{
			return null;
		}
		try
		{
			return new DateTime($this->captureddate);
		}
		catch (Exception $oException)
		{
			return null;
		}
	}

	/**
	 * @param DateTime $captureddate
	 * @return TransactionInformationType
	 */
	public function setCaptureddate(DateTime $captureddate): TransactionInformationType
	{
		$this->captureddate = $captureddate->format(DateTime::ATOM);
		return $this;
	}

	/**
	 * @return DateTime
	 */
	public function getDeleteddate(): ?DateTime
	{
		if ($this->deleteddate === null)
		{
			return null;
		}
		try
		{
			return new DateTime($this->deleteddate);
		}
		catch (Exception $oException)
		{
			return null;
		}
	}

	/**
	 * @param DateTime $deleteddate
	 * @return TransactionInformationType
	 */
	public function setDeleteddate(DateTime $deleteddate): TransactionInformationType
	{
		$this->deleteddate = $deleteddate->format(DateTime::ATOM);
		return $this;
	}

	/**
	 * @return DateTime
	 */
	public function getCrediteddate(): ?DateTime
	{
		if ($this->crediteddate === null)
		{
			return null;
		}
		try
		{
			return new DateTime($this->crediteddate);
		}
		catch (Exception $oException)
		{
			return null;
		}
	}

	/**
	 * @param DateTime $crediteddate
	 * @return TransactionInformationType
	 */
	public function setCrediteddate(DateTime $crediteddate): TransactionInformationType
	{
		$this->crediteddate = $crediteddate->format(DateTime::ATOM);
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
	 * @return TransactionInformationType
	 */
	public function setStatus($status): TransactionInformationType
	{
		$this->status = $status;
		return $this;
	}

	/**
	 * @return null|ArrayOfTransactionHistoryInfo
	 */
	public function getHistory(): ?ArrayOfTransactionHistoryInfo
	{
		return $this->history;
	}

	/**
	 * @param null|ArrayOfTransactionHistoryInfo $history
	 * @return TransactionInformationType
	 */
	public function setHistory(?ArrayOfTransactionHistoryInfo $history = null): TransactionInformationType
	{
		$this->history = $history;
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
	 * @return TransactionInformationType
	 */
	public function setTransactionid(int $transactionid): TransactionInformationType
	{
		$this->transactionid = $transactionid;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getCardholder(): ?string
	{
		return $this->cardholder;
	}

	/**
	 * @param null|string $cardholder
	 * @return TransactionInformationType
	 */
	public function setCardholder(?string $cardholder = null): TransactionInformationType
	{
		$this->cardholder = $cardholder;
		return $this;
	}

	/**
	 * @return string|PayMode
	 */
	public function getMode()
	{
		return $this->mode;
	}

	/**
	 * @param string|PayMode $mode
	 * @return TransactionInformationType
	 */
	public function setMode($mode): TransactionInformationType
	{
		$this->mode = $mode;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function getMsc(): ?bool
	{
		return $this->msc;
	}

	/**
	 * @param bool $msc
	 * @return TransactionInformationType
	 */
	public function setMsc(bool $msc): TransactionInformationType
	{
		$this->msc = $msc;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getFraudStatus(): ?int
	{
		return $this->fraudStatus;
	}

	/**
	 * @param int $fraudStatus
	 * @return TransactionInformationType
	 */
	public function setFraudStatus(int $fraudStatus): TransactionInformationType
	{
		$this->fraudStatus = $fraudStatus;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getFraudMessage(): ?string
	{
		return $this->FraudMessage;
	}

	/**
	 * @param null|string $FraudMessage
	 * @return TransactionInformationType
	 */
	public function setFraudMessage(?string $FraudMessage = null): TransactionInformationType
	{
		$this->FraudMessage = $FraudMessage;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getPayerCountryCode(): ?string
	{
		return $this->payerCountryCode;
	}

	/**
	 * @param null|string $payerCountryCode
	 * @return TransactionInformationType
	 */
	public function setPayerCountryCode(?string $payerCountryCode = null): TransactionInformationType
	{
		$this->payerCountryCode = $payerCountryCode;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getIssuedCountryCode(): ?string
	{
		return $this->issuedCountryCode;
	}

	/**
	 * @param null|string $issuedCountryCode
	 * @return TransactionInformationType
	 */
	public function setIssuedCountryCode(?string $issuedCountryCode = null): TransactionInformationType
	{
		$this->issuedCountryCode = $issuedCountryCode;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getFee(): ?int
	{
		return $this->fee;
	}

	/**
	 * @param int $fee
	 * @return TransactionInformationType
	 */
	public function setFee(int $fee): TransactionInformationType
	{
		$this->fee = $fee;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function getSplitpayment(): ?bool
	{
		return $this->splitpayment;
	}

	/**
	 * @param bool $splitpayment
	 * @return TransactionInformationType
	 */
	public function setSplitpayment(bool $splitpayment): TransactionInformationType
	{
		$this->splitpayment = $splitpayment;
		return $this;
	}

	/**
	 * @return string|AcquirerType
	 */
	public function getAcquirer()
	{
		return $this->acquirer;
	}

	/**
	 * @param string|AcquirerType $acquirer
	 * @return TransactionInformationType
	 */
	public function setAcquirer($acquirer): TransactionInformationType
	{
		$this->acquirer = $acquirer;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getTcardno(): ?string
	{
		return $this->tcardno;
	}

	/**
	 * @param null|string $tcardno
	 * @return TransactionInformationType
	 */
	public function setTcardno(?string $tcardno = null): TransactionInformationType
	{
		$this->tcardno = $tcardno;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getExpmonth(): ?int
	{
		return $this->expmonth;
	}

	/**
	 * @param int $expmonth
	 * @return TransactionInformationType
	 */
	public function setExpmonth(int $expmonth): TransactionInformationType
	{
		$this->expmonth = $expmonth;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getExpyear(): ?int
	{
		return $this->expyear;
	}

	/**
	 * @param int $expyear
	 * @return TransactionInformationType
	 */
	public function setExpyear(int $expyear): TransactionInformationType
	{
		$this->expyear = $expyear;
		return $this;
	}

}
