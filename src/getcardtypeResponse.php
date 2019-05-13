<?php
namespace EPay;


/**
 * Class getcardtypeResponse
 */
class getcardtypeResponse
{

	/**
	 * @var bool $getcardtypeResult
	 */
	protected $getcardtypeResult;

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
	 * @param bool $getcardtypeResult
	 * @param int $cardtypeid
	 * @param int $epayresponse
	 */
	public function __construct(bool $getcardtypeResult, int $cardtypeid, int $epayresponse)
	{
		$this->getcardtypeResult = $getcardtypeResult;
		$this->cardtypeid = $cardtypeid;
		$this->epayresponse = $epayresponse;
	}

	/**
	 * @return bool
	 */
	public function getGetcardtypeResult(): ?bool
	{
		return $this->getcardtypeResult;
	}

	/**
	 * @param bool $getcardtypeResult
	 * @return getcardtypeResponse
	 */
	public function setGetcardtypeResult(bool $getcardtypeResult): getcardtypeResponse
	{
		$this->getcardtypeResult = $getcardtypeResult;
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
	 * @return getcardtypeResponse
	 */
	public function setCardtypeid(int $cardtypeid): getcardtypeResponse
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
	 * @return getcardtypeResponse
	 */
	public function setCardname(?string $cardname = null): getcardtypeResponse
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
	 * @return getcardtypeResponse
	 */
	public function setEpayresponse(int $epayresponse): getcardtypeResponse
	{
		$this->epayresponse = $epayresponse;
		return $this;
	}

}
