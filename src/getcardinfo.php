<?php
namespace EPay;


/**
 * Class getcardinfo
 */
class getcardinfo
{

	/**
	 * @var int $merchantnumber
	 */
	protected $merchantnumber;

	/**
	 * @var null|string $cardno_prefix
	 */
	protected $cardno_prefix;

	/**
	 * @var int $amount
	 */
	protected $amount;

	/**
	 * @var int $currency
	 */
	protected $currency;

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
	 * @param int $merchantnumber
	 * @param int $amount
	 * @param int $currency
	 * @param int $acquirer
	 * @param int $fee
	 * @param string|CardType $cardtype
	 * @param int $epayresponse
	 */
	public function __construct(int $merchantnumber, int $amount, int $currency, int $acquirer, int $fee, $cardtype, int $epayresponse)
	{
		$this->merchantnumber = $merchantnumber;
		$this->amount = $amount;
		$this->currency = $currency;
		$this->acquirer = $acquirer;
		$this->fee = $fee;
		$this->cardtype = $cardtype;
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
	 * @return getcardinfo
	 */
	public function setMerchantnumber(int $merchantnumber): getcardinfo
	{
		$this->merchantnumber = $merchantnumber;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getCardno_prefix(): ?string
	{
		return $this->cardno_prefix;
	}

	/**
	 * @param null|string $cardno_prefix
	 * @return getcardinfo
	 */
	public function setCardno_prefix(?string $cardno_prefix = null): getcardinfo
	{
		$this->cardno_prefix = $cardno_prefix;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getAmount(): ?int
	{
		return $this->amount;
	}

	/**
	 * @param int $amount
	 * @return getcardinfo
	 */
	public function setAmount(int $amount): getcardinfo
	{
		$this->amount = $amount;
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
	 * @return getcardinfo
	 */
	public function setCurrency(int $currency): getcardinfo
	{
		$this->currency = $currency;
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
	 * @return getcardinfo
	 */
	public function setAcquirer(int $acquirer): getcardinfo
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
	 * @return getcardinfo
	 */
	public function setFee(int $fee): getcardinfo
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
	 * @return getcardinfo
	 */
	public function setCardtype($cardtype): getcardinfo
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
	 * @return getcardinfo
	 */
	public function setCardtypetext(?string $cardtypetext = null): getcardinfo
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
	 * @return getcardinfo
	 */
	public function setEpayresponse(int $epayresponse): getcardinfo
	{
		$this->epayresponse = $epayresponse;
		return $this;
	}

}
