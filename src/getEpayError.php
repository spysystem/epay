<?php
namespace EPay;


/**
 * Class getEpayError
 */
class getEpayError
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
	 * @var int $epayresponsecode
	 */
	protected $epayresponsecode;

	/**
	 * @var null|string $pwd
	 */
	protected $pwd;

	/**
	 * @var null|string $epayresponsestring
	 */
	protected $epayresponsestring;

	/**
	 * @var int $epayresponse
	 */
	protected $epayresponse;

	/**
	 * @param int $merchantnumber
	 * @param int $language
	 * @param int $epayresponsecode
	 * @param int $epayresponse
	 */
	public function __construct(int $merchantnumber, int $language, int $epayresponsecode, int $epayresponse)
	{
		$this->merchantnumber = $merchantnumber;
		$this->language = $language;
		$this->epayresponsecode = $epayresponsecode;
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
	 * @return getEpayError
	 */
	public function setMerchantnumber(int $merchantnumber): getEpayError
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
	 * @return getEpayError
	 */
	public function setLanguage(int $language): getEpayError
	{
		$this->language = $language;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getEpayresponsecode(): ?int
	{
		return $this->epayresponsecode;
	}

	/**
	 * @param int $epayresponsecode
	 * @return getEpayError
	 */
	public function setEpayresponsecode(int $epayresponsecode): getEpayError
	{
		$this->epayresponsecode = $epayresponsecode;
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
	 * @return getEpayError
	 */
	public function setPwd(?string $pwd = null): getEpayError
	{
		$this->pwd = $pwd;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getEpayresponsestring(): ?string
	{
		return $this->epayresponsestring;
	}

	/**
	 * @param null|string $epayresponsestring
	 * @return getEpayError
	 */
	public function setEpayresponsestring(?string $epayresponsestring = null): getEpayError
	{
		$this->epayresponsestring = $epayresponsestring;
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
	 * @return getEpayError
	 */
	public function setEpayresponse(int $epayresponse): getEpayError
	{
		$this->epayresponse = $epayresponse;
		return $this;
	}

}
