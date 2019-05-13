<?php
namespace EPay;


/**
 * Class ArrayOfTransactionHistoryInfo
 */
class ArrayOfTransactionHistoryInfo implements ArrayAccess, Iterator, Countable
{

	/**
	 * @var null|TransactionHistoryInfo[] $TransactionHistoryInfo
	 */
	protected $TransactionHistoryInfo;

	
	public function __construct()
	{
	
	}

	/**
	 * @return null|TransactionHistoryInfo[]
	 */
	public function getTransactionHistoryInfo(): ?array
	{
		return $this->TransactionHistoryInfo;
	}

	/**
	 * @param null|TransactionHistoryInfo[] $TransactionHistoryInfo
	 * @return ArrayOfTransactionHistoryInfo
	 */
	public function setTransactionHistoryInfo(?array $TransactionHistoryInfo = null): ArrayOfTransactionHistoryInfo
	{
		$this->TransactionHistoryInfo = $TransactionHistoryInfo;
		return $this;
	}

	/**
	 * ArrayAccess implementation
	 *
	 * @param mixed $offset An offset to check for
	 * @return boolean true on success or false on failure
	 */
	public function offsetExists($offset): bool
	{
		return isset($this->TransactionHistoryInfo[$offset]);
	}

	/**
	 * ArrayAccess implementation
	 *
	 * @param mixed $offset The offset to retrieve
	 * @return TransactionHistoryInfo
	 */
	public function offsetGet($offset)
	{
		return $this->TransactionHistoryInfo[$offset];
	}

	/**
	 * ArrayAccess implementation
	 *
	 * @param mixed $offset The offset to assign the value to
	 * @param TransactionHistoryInfo $value The value to set
	 * @return void
	 */
	public function offsetSet($offset, $value): void
	{
		if (!isset($offset))
		{
			$this->TransactionHistoryInfo[]		= $value;
		}
		else
		{
			$this->TransactionHistoryInfo[$offset]	= $value;
		}
	}

	/**
	 * ArrayAccess implementation
	 *
	 * @param mixed $offset The offset to unset
	 * @return void
	 */
	public function offsetUnset($offset): void
	{
		unset($this->TransactionHistoryInfo[$offset]);
	}

	/**
	 * Iterator implementation
	 *
	 * @return TransactionHistoryInfo Return the current element
	 */
	public function current()
	{
		return current($this->TransactionHistoryInfo);
	}

	/**
	 * Iterator implementation
	 * Move forward to next element
	 *
	 * @return void
	 */
	public function next(): void
	{
		next($this->TransactionHistoryInfo);
	}

	/**
	 * Iterator implementation
	 *
	 * @return string|null Return the key of the current element or null
	 */
	public function key()
	{
		return key($this->TransactionHistoryInfo);
	}

	/**
	 * Iterator implementation
	 *
	 * @return boolean Return the validity of the current position
	 */
	public function valid(): bool
	{
		return $this->key() !== null;
	}

	/**
	 * Iterator implementation
	 * Rewind the Iterator to the first element
	 *
	 * @return void
	 */
	public function rewind(): void
	{
		reset($this->TransactionHistoryInfo);
	}

	/**
	 * Countable implementation
	 *
	 * @return TransactionHistoryInfo Return count of elements
	 */
	public function count()
	{
		return count($this->TransactionHistoryInfo);
	}

}
