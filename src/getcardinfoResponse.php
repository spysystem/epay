<?php
namespace EPay;


/**
 * Class getcardinfoResponse
 */
class getcardinfoResponse
{

	/**
	 * @var bool $getcardinfoResult
	 */
	protected $getcardinfoResult;

	/**
	 * @var int $acquirer
	 */
	protected $acquirer;

	/**
	 * @var int $fee
	 */
	protected $fee;

	/**
	 * @var string|CardType $cardtype
	 */
	protected $cardtype;

	/**
	 * @var null|string $cardtypetext
	 */
	protected $cardtypetext;

	/**
	 * @var int $epayresponse
	 */
	protected $epayresponse;

	/**
	 * @param bool $getcardinfoResult
	 * @param int $acquirer
	 * @param int $fee
	 * @param string|CardType $cardtype
	 * @param int $epayresponse
	 */
	public function __construct(bool $getcardinfoResult, int $acquirer, int $fee, $cardtype, int $epayresponse)
	{
		$this->getcardinfoResult = $getcardinfoResult;
		$this->acquirer = $acquirer;
		$this->fee = $fee;
		$this->cardtype = $cardtype;
		$this->epayresponse = $epayresponse;
	}

	/**
	 * @return bool
	 */
	public function getGetcardinfoResult(): ?bool
	{
		return $this->getcardinfoResult;
	}

	/**
	 * @param bool $getcardinfoResult
	 * @return getcardinfoResponse
	 */
	public function setGetcardinfoResult(bool $getcardinfoResult): getcardinfoResponse
	{
		$this->getcardinfoResult = $getcardinfoResult;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getAcquirer(): ?int
	{
		return $this->acquirer;
	}

	/**
	 * @param int $acquirer
	 * @return getcardinfoResponse
	 */
	public function setAcquirer(int $acquirer): getcardinfoResponse
	{
		$this->acquirer = $acquirer;
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
	 * @return getcardinfoResponse
	 */
	public function setFee(int $fee): getcardinfoResponse
	{
		$this->fee = $fee;
		return $this;
	}

	/**
	 * @return string|CardType
	 */
	public function getCardtype()
	{
		return $this->cardtype;
	}

	/**
	 * @param string|CardType $cardtype
	 * @return getcardinfoResponse
	 */
	public function setCardtype($cardtype): getcardinfoResponse
	{
		$this->cardtype = $cardtype;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getCardtypetext(): ?string
	{
		return $this->cardtypetext;
	}

	/**
	 * @param null|string $cardtypetext
	 * @return getcardinfoResponse
	 */
	public function setCardtypetext(?string $cardtypetext = null): getcardinfoResponse
	{
		$this->cardtypetext = $cardtypetext;
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
	 * @return getcardinfoResponse
	 */
	public function setEpayresponse(int $epayresponse): getcardinfoResponse
	{
		$this->epayresponse = $epayresponse;
		return $this;
	}

}
