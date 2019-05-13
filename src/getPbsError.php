<?php
namespace EPay;


/**
 * Class getPbsError
 */
class getPbsError
{

	/**
	 * @var int $merchantnumber
	 */
	protected $merchantnumber;

	/**
	 * @var int $language
	 */
	protected $language;

	/**
	 * @var int $pbsresponsecode
	 */
	protected $pbsresponsecode;

	/**
	 * @var null|string $pwd
	 */
	protected $pwd;

	/**
	 * @var null|string $pbsresponsestring
	 */
	protected $pbsresponsestring;

	/**
	 * @var int $epayresponse
	 */
	protected $epayresponse;

	/**
	 * @param int $merchantnumber
	 * @param int $language
	 * @param int $pbsresponsecode
	 * @param int $epayresponse
	 */
	public function __construct(int $merchantnumber, int $language, int $pbsresponsecode, int $epayresponse)
	{
		$this->merchantnumber = $merchantnumber;
		$this->language = $language;
		$this->pbsresponsecode = $pbsresponsecode;
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
	 * @return getPbsError
	 */
	public function setMerchantnumber(int $merchantnumber): getPbsError
	{
		$this->merchantnumber = $merchantnumber;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getLanguage(): ?int
	{
		return $this->language;
	}

	/**
	 * @param int $language
	 * @return getPbsError
	 */
	public function setLanguage(int $language): getPbsError
	{
		$this->language = $language;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getPbsresponsecode(): ?int
	{
		return $this->pbsresponsecode;
	}

	/**
	 * @param int $pbsresponsecode
	 * @return getPbsError
	 */
	public function setPbsresponsecode(int $pbsresponsecode): getPbsError
	{
		$this->pbsresponsecode = $pbsresponsecode;
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
	 * @return getPbsError
	 */
	public function setPwd(?string $pwd = null): getPbsError
	{
		$this->pwd = $pwd;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getPbsresponsestring(): ?string
	{
		return $this->pbsresponsestring;
	}

	/**
	 * @param null|string $pbsresponsestring
	 * @return getPbsError
	 */
	public function setPbsresponsestring(?string $pbsresponsestring = null): getPbsError
	{
		$this->pbsresponsestring = $pbsresponsestring;
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
	 * @return getPbsError
	 */
	public function setEpayresponse(int $epayresponse): getPbsError
	{
		$this->epayresponse = $epayresponse;
		return $this;
	}

}
