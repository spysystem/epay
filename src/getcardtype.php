<?php
namespace EPay;


/**
 * Class getcardtype
 */
class getcardtype
{

	/**
	 * @var int $merchantnumber
	 */
	protected $merchantnumber;

	/**
	 * @var null|string $cardnumber
	 */
	protected $cardnumber;

	/**
	 * @var int $cardtypeid
	 */
	protected $cardtypeid;

	/**
	 * @var null|string $cardname
	 */
	protected $cardname;

	/**
	 * @var int $epayresponse
	 */
	protected $epayresponse;

	/**
	 * @param int $merchantnumber
	 * @param int $cardtypeid
	 * @param int $epayresponse
	 */
	public function __construct(int $merchantnumber, int $cardtypeid, int $epayresponse)
	{
		$this->merchantnumber = $merchantnumber;
		$this->cardtypeid = $cardtypeid;
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
	 * @return getcardtype
	 */
	public function setMerchantnumber(int $merchantnumber): getcardtype
	{
		$this->merchantnumber = $merchantnumber;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getCardnumber(): ?string
	{
		return $this->cardnumber;
	}

	/**
	 * @param null|string $cardnumber
	 * @return getcardtype
	 */
	public function setCardnumber(?string $cardnumber = null): getcardtype
	{
		$this->cardnumber = $cardnumber;
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
	 * @return getcardtype
	 */
	public function setCardtypeid(int $cardtypeid): getcardtype
	{
		$this->cardtypeid = $cardtypeid;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getCardname(): ?string
	{
		return $this->cardname;
	}

	/**
	 * @param null|string $cardname
	 * @return getcardtype
	 */
	public function setCardname(?string $cardname = null): getcardtype
	{
		$this->cardname = $cardname;
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
	 * @return getcardtype
	 */
	public function setEpayresponse(int $epayresponse): getcardtype
	{
		$this->epayresponse = $epayresponse;
		return $this;
	}

}
