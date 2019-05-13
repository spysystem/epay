<?php
namespace EPay;


/**
 * Class ArrayOfTransactionInformationType
 */
class ArrayOfTransactionInformationType implements ArrayAccess, Iterator, Countable
{

	/**
	 * @var null|TransactionInformationType[] $TransactionInformationType
	 */
	protected $TransactionInformationType;

	
	public function __construct()
	{
	
	}

	/**
	 * @return null|TransactionInformationType[]
	 */
	public function getTransactionInformationType(): ?array
	{
		return $this->TransactionInformationType;
	}

	/**
	 * @param null|TransactionInformationType[] $TransactionInformationType
	 * @return ArrayOfTransactionInformationType
	 */
	public function setTransactionInformationType(?array $TransactionInformationType = null): ArrayOfTransactionInformationType
	{
		$this->TransactionInformationType = $TransactionInformationType;
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
		return isset($this->TransactionInformationType[$offset]);
	}

	/**
	 * ArrayAccess implementation
	 *
	 * @param mixed $offset The offset to retrieve
	 * @return TransactionInformationType
	 */
	public function offsetGet($offset)
	{
		return $this->TransactionInformationType[$offset];
	}

	/**
	 * ArrayAccess implementation
	 *
	 * @param mixed $offset The offset to assign the value to
	 * @param TransactionInformationType $value The value to set
	 * @return void
	 */
	public function offsetSet($offset, $value): void
	{
		if (!isset($offset))
		{
			$this->TransactionInformationType[]		= $value;
		}
		else
		{
			$this->TransactionInformationType[$offset]	= $value;
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
		unset($this->TransactionInformationType[$offset]);
	}

	/**
	 * Iterator implementation
	 *
	 * @return TransactionInformationType Return the current element
	 */
	public function current()
	{
		return current($this->TransactionInformationType);
	}

	/**
	 * Iterator implementation
	 * Move forward to next element
	 *
	 * @return void
	 */
	public function next(): void
	{
		next($this->TransactionInformationType);
	}

	/**
	 * Iterator implementation
	 *
	 * @return string|null Return the key of the current element or null
	 */
	public function key()
	{
		return key($this->TransactionInformationType);
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
		reset($this->TransactionInformationType);
	}

	/**
	 * Countable implementation
	 *
	 * @return TransactionInformationType Return count of elements
	 */
	public function count()
	{
		return count($this->TransactionInformationType);
	}

}
