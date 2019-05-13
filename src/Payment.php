<?php
namespace EPay;

use Exception;
use SoapClient;
use SoapFault;

/**
 * Class Payment
 *
 * @package EPay
 */
class Payment extends SoapClient
{
	public const WsdlUrl = 'https://ssl.ditonlinebetalingssystem.dk/remote/payment.asmx?WSDL';


	/**
	 * @var array $arrClassMap The defined classes
	 */
	private static $arrClassMap = [
		'getPbsError'						=> getPbsError::class,
		'getPbsErrorResponse'				=> getPbsErrorResponse::class,
		'getEpayError'						=> getEpayError::class,
		'getEpayErrorResponse'				=> getEpayErrorResponse::class,
		'capture'							=> capture::class,
		'captureResponse'					=> captureResponse::class,
		'move_as_captured'					=> move_as_captured::class,
		'move_as_capturedResponse'			=> move_as_capturedResponse::class,
		'delete'							=> delete::class,
		'deleteResponse'					=> deleteResponse::class,
		'credit'							=> credit::class,
		'creditResponse'					=> creditResponse::class,
		'getcardtype'						=> getcardtype::class,
		'getcardtypeResponse'				=> getcardtypeResponse::class,
		'gettransaction'					=> gettransaction::class,
		'TransactionInformationType'		=> TransactionInformationType::class,
		'ArrayOfTransactionHistoryInfo'		=> ArrayOfTransactionHistoryInfo::class,
		'TransactionHistoryInfo'			=> TransactionHistoryInfo::class,
		'gettransactionResponse'			=> gettransactionResponse::class,
		'gettransactionlist'				=> gettransactionlist::class,
		'ArrayOfTransactionInformationType'	=> ArrayOfTransactionInformationType::class,
		'gettransactionlistResponse'		=> gettransactionlistResponse::class,
		'getcardinfo'						=> getcardinfo::class,
		'getcardinfoResponse'				=> getcardinfoResponse::class,
		'renew'								=> renew::class,
		'renewResponse'						=> renewResponse::class,
		'movetransactiontogroup'			=> movetransactiontogroup::class,
		'movetransactiontogroupResponse'	=> movetransactiontogroupResponse::class,
		'ping'								=> ping::class,
		'pingResponse'						=> pingResponse::class,
	];

	/**
	 * @var string $request Last request made
	 */
	private  $request = '';

	/**
	 * @param string $strURL URL or path for WSDL file
	 * @throws Exception
	 * @return Payment
	 */
	public static function CreateService(string $strURL = self::WsdlUrl): Payment
	{
		return new static([
			'trace'			=> true,
			'exceptions'	=> true,
			'soap_version'	=> 2,
			'encoding'		=> 'UTF-8',
			'features'		=> 1,
		], $strURL);
	}

	/**
	 * @param string $strWsdl The wsdl file to use
	 * @param array $arrOptions A array of config values
	 * @throws Exception
	 */
	public function __construct(array $arrOptions = [], string $strWsdl = self::WsdlUrl)
	{
		if ($strWsdl === '')
		{
			throw new Exception('Missing WSDL!');
		}
		foreach (self::$arrClassMap as $strKey => $mValue)
		{
			if (!isset($arrOptions['classmap'][$strKey]))
			{
				$arrOptions['classmap'][$strKey]	= $mValue;
			}
		}
		parent::__construct($strWsdl, $arrOptions);
	}

	/**
	 * @param string $request
	 * @param string $location
	 * @param string $action
	 * @param int $version
	 * @param int $one_way
	 * @return string|null
	 */
	public function __doRequest($request, $location, $action, $version, $one_way = 0): ?string
	{
		$this->request	= $request;
		
		return parent::__doRequest($request, $location, $action, $version, $one_way);
	}

	/**
	 * @return string
	 */
	public function __getLastRequest(): string
	{
			return $this->request ?? '';
	}

	/**
	 * Converts an error from PBS to a string description. If the returning value is false check for error codes in the pbsresponse and epayresponse reference attributes for information about errors from ePay or PBS.
	 *
	 * @param getPbsError $parameters
	 * @throws SoapFault
	 * @return getPbsErrorResponse|null
	 */
	public function getPbsError(getPbsError $parameters): ?getPbsErrorResponse
	{
		return $this->__soapCall('getPbsError', [$parameters]);
	}

	/**
	 * Converts an errorcode from ePay to a string. If the returning value is false check for error codes in the pbsresponse and epayresponse reference attributes for information about errors from ePay or PBS.
	 *
	 * @param getEpayError $parameters
	 * @throws SoapFault
	 * @return getEpayErrorResponse|null
	 */
	public function getEpayError(getEpayError $parameters): ?getEpayErrorResponse
	{
		return $this->__soapCall('getEpayError', [$parameters]);
	}

	/**
	 * To capture a payment. If the returning value is false check for error codes in the pbsresponse and epayresponse reference attributes for information about errors from ePay or PBS.
	 *
	 * @param capture $parameters
	 * @throws SoapFault
	 * @return captureResponse|null
	 */
	public function capture(capture $parameters): ?captureResponse
	{
		return $this->__soapCall('capture', [$parameters]);
	}

	/**
	 * @param move_as_captured $parameters
	 * @throws SoapFault
	 * @return move_as_capturedResponse|null
	 */
	public function move_as_captured(move_as_captured $parameters): ?move_as_capturedResponse
	{
		return $this->__soapCall('move_as_captured', [$parameters]);
	}

	/**
	 * To delete a payment. If the returning value is false check for error codes in the epayresponse reference attribute for information about errors from ePay or PBS.
	 *
	 * @param delete $parameters
	 * @throws SoapFault
	 * @return deleteResponse|null
	 */
	public function delete(delete $parameters): ?deleteResponse
	{
		return $this->__soapCall('delete', [$parameters]);
	}

	/**
	 * To credit a payment. If the returning value is false check for error codes in the pbsresponse and epayresponse reference attributes for information about errors from ePay or PBS.
	 *
	 * @param credit $parameters
	 * @throws SoapFault
	 * @return creditResponse|null
	 */
	public function credit(credit $parameters): ?creditResponse
	{
		return $this->__soapCall('credit', [$parameters]);
	}

	/**
	 * To calculate a card type. If the returning value is false check for error code in the epayresponse reference attribute for information about errors from ePay. The cardtype returned are defined when logged on to the www.epay.dk website.
	 *
	 * @param getcardtype $parameters
	 * @throws SoapFault
	 * @return getcardtypeResponse|null
	 */
	public function getcardtype(getcardtype $parameters): ?getcardtypeResponse
	{
		return $this->__soapCall('getcardtype', [$parameters]);
	}

	/**
	 * Returns information about a transaction by its transactionid. If the returning value is false check for error code in the epayresponse reference attribute for information about errors from ePay.
	 *
	 * @param gettransaction $parameters
	 * @throws SoapFault
	 * @return gettransactionResponse|null
	 */
	public function gettransaction(gettransaction $parameters): ?gettransactionResponse
	{
		return $this->__soapCall('gettransaction', [$parameters]);
	}

	/**
	 * Returns a list of TransactionInformationType objects with information of transactions. If the returning value is false check for error code in the epayresponse reference attribute for information about errors from ePay.
	 *
	 * @param gettransactionlist $parameters
	 * @throws SoapFault
	 * @return gettransactionlistResponse|null
	 */
	public function gettransactionlist(gettransactionlist $parameters): ?gettransactionlistResponse
	{
		return $this->__soapCall('gettransactionlist', [$parameters]);
	}

	/**
	 * Returns a list of TransactionInformationType objects with information of transactions. If the returning value is false check for error code in the epayresponse reference attribute for information about errors from ePay.
	 *
	 * @param getcardinfo $parameters
	 * @throws SoapFault
	 * @return getcardinfoResponse|null
	 */
	public function getcardinfo(getcardinfo $parameters): ?getcardinfoResponse
	{
		return $this->__soapCall('getcardinfo', [$parameters]);
	}

	/**
	 * To renew an EWIRE payment. If the returning value is false check for error codes in the pbsresponse (EWIRE result) and epayresponse reference attributes for information about errors from ePay or EWIRE.
	 *
	 * @param renew $parameters
	 * @throws SoapFault
	 * @return renewResponse|null
	 */
	public function renew(renew $parameters): ?renewResponse
	{
		return $this->__soapCall('renew', [$parameters]);
	}

	/**
	 * Use this function to move a transaction to a specific group. If the function returns true then the transaction was successfully moved to the group. If the function returns false then look at the parameter 'epayresponse' in order to determine why the transaction could not be moved to the Group.
	 *
	 * @param movetransactiontogroup $parameters
	 * @throws SoapFault
	 * @return movetransactiontogroupResponse|null
	 */
	public function movetransactiontogroup(movetransactiontogroup $parameters): ?movetransactiontogroupResponse
	{
		return $this->__soapCall('movetransactiontogroup', [$parameters]);
	}

	/**
	 * Use this method to ping the service
	 *
	 * @param ping $parameters
	 * @throws SoapFault
	 * @return pingResponse|null
	 */
	public function ping(ping $parameters): ?pingResponse
	{
		return $this->__soapCall('ping', [$parameters]);
	}

}
