<?php
namespace EPay;


/**
 * Class deleteResponse
 */
class deleteResponse
{

	/**
	 * @var bool $deleteResult
	 */
	protected $deleteResult;

	/**
	 * @var int $epayresponse
	 */
	protected $epayresponse;

	/**
	 * @param bool $deleteResult
	 * @param int $epayresponse
	 */
	public function __construct(bool $deleteResult, int $epayresponse)
	{
		$this->deleteResult = $deleteResult;
		$this->epayresponse = $epayresponse;
	}

	/**
	 * @return bool
	 */
	public function getDeleteResult(): ?bool
	{
		return $this->deleteResult;
	}

	/**
	 * @param bool $deleteResult
	 * @return deleteResponse
	 */
	public function setDeleteResult(bool $deleteResult): deleteResponse
	{
		$this->deleteResult = $deleteResult;
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
	 * @return deleteResponse
	 */
	public function setEpayresponse(int $epayresponse): deleteResponse
	{
		$this->epayresponse = $epayresponse;
		return $this;
	}

}
