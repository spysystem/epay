<?php
namespace EPay;

use DateTime;
use Exception;

/**
 * Class TransactionHistoryInfo
 */
class TransactionHistoryInfo
{

	/**
	 * @var int $transactionHistoryID
	 */
	protected $transactionHistoryID;

	/**
	 * @var int $logonID
	 */
	protected $logonID;

	/**
	 * @var null|string $username
	 */
	protected $username;

	/**
	 * @var null|string $eventMsg
	 */
	protected $eventMsg;

	/**
	 * @var DateTime $created
	 */
	protected $created;

	/**
	 * @param int $transactionHistoryID
	 * @param int $logonID
	 * @param DateTime $created
	 */
	public function __construct(int $transactionHistoryID, int $logonID, DateTime $created)
	{
		$this->transactionHistoryID = $transactionHistoryID;
		$this->logonID = $logonID;
		$this->created = $created->format(DateTime::ATOM);
	}

	/**
	 * @return int
	 */
	public function getTransactionHistoryID(): ?int
	{
		return $this->transactionHistoryID;
	}

	/**
	 * @param int $transactionHistoryID
	 * @return TransactionHistoryInfo
	 */
	public function setTransactionHistoryID(int $transactionHistoryID): TransactionHistoryInfo
	{
		$this->transactionHistoryID = $transactionHistoryID;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getLogonID(): ?int
	{
		return $this->logonID;
	}

	/**
	 * @param int $logonID
	 * @return TransactionHistoryInfo
	 */
	public function setLogonID(int $logonID): TransactionHistoryInfo
	{
		$this->logonID = $logonID;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getUsername(): ?string
	{
		return $this->username;
	}

	/**
	 * @param null|string $username
	 * @return TransactionHistoryInfo
	 */
	public function setUsername(?string $username = null): TransactionHistoryInfo
	{
		$this->username = $username;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getEventMsg(): ?string
	{
		return $this->eventMsg;
	}

	/**
	 * @param null|string $eventMsg
	 * @return TransactionHistoryInfo
	 */
	public function setEventMsg(?string $eventMsg = null): TransactionHistoryInfo
	{
		$this->eventMsg = $eventMsg;
		return $this;
	}

	/**
	 * @return DateTime
	 */
	public function getCreated(): ?DateTime
	{
		if ($this->created === null)
		{
			return null;
		}
		try
		{
			return new DateTime($this->created);
		}
		catch (Exception $oException)
		{
			return null;
		}
	}

	/**
	 * @param DateTime $created
	 * @return TransactionHistoryInfo
	 */
	public function setCreated(DateTime $created): TransactionHistoryInfo
	{
		$this->created = $created->format(DateTime::ATOM);
		return $this;
	}

}
