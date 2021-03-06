<?php
namespace EPay;


/**
 * Class TransactionStatus
 */
class TransactionStatus
{
	public const __default = 'PAYMENT_UNDEFINED';
	public const PAYMENT_UNDEFINED = 'PAYMENT_UNDEFINED';
	public const PAYMENT_NEW = 'PAYMENT_NEW';
	public const PAYMENT_CAPTURED = 'PAYMENT_CAPTURED';
	public const PAYMENT_DELETED = 'PAYMENT_DELETED';
	public const PAYMENT_INSTANT_CAPTURE_FAILED = 'PAYMENT_INSTANT_CAPTURE_FAILED';
	public const PAYMENT_SUBSCRIPTION_INI = 'PAYMENT_SUBSCRIPTION_INI';
	public const PAYMENT_RENEW = 'PAYMENT_RENEW';
	public const PAYMENT_EUROLINE_WAIT_CAPTURE = 'PAYMENT_EUROLINE_WAIT_CAPTURE';
	public const PAYMENT_EUROLINE_WAIT_CREDIT = 'PAYMENT_EUROLINE_WAIT_CREDIT';
	public const PARTLY_TRANSACTION_HIDDEN = 'PARTLY_TRANSACTION_HIDDEN';


}
