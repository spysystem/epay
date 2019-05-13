<?php

 function autoload_31112b92faaa36565d3190041443aefe($class)
{
    $classes = array(
        'EPay\Payment' => __DIR__ .'/Payment.php',
        'EPay\getPbsError' => __DIR__ .'/getPbsError.php',
        'EPay\getPbsErrorResponse' => __DIR__ .'/getPbsErrorResponse.php',
        'EPay\getEpayError' => __DIR__ .'/getEpayError.php',
        'EPay\getEpayErrorResponse' => __DIR__ .'/getEpayErrorResponse.php',
        'EPay\capture' => __DIR__ .'/capture.php',
        'EPay\captureResponse' => __DIR__ .'/captureResponse.php',
        'EPay\move_as_captured' => __DIR__ .'/move_as_captured.php',
        'EPay\move_as_capturedResponse' => __DIR__ .'/move_as_capturedResponse.php',
        'EPay\delete' => __DIR__ .'/delete.php',
        'EPay\deleteResponse' => __DIR__ .'/deleteResponse.php',
        'EPay\credit' => __DIR__ .'/credit.php',
        'EPay\creditResponse' => __DIR__ .'/creditResponse.php',
        'EPay\getcardtype' => __DIR__ .'/getcardtype.php',
        'EPay\getcardtypeResponse' => __DIR__ .'/getcardtypeResponse.php',
        'EPay\gettransaction' => __DIR__ .'/gettransaction.php',
        'EPay\TransactionInformationType' => __DIR__ .'/TransactionInformationType.php',
        'EPay\TransactionStatus' => __DIR__ .'/TransactionStatus.php',
        'EPay\ArrayOfTransactionHistoryInfo' => __DIR__ .'/ArrayOfTransactionHistoryInfo.php',
        'EPay\TransactionHistoryInfo' => __DIR__ .'/TransactionHistoryInfo.php',
        'EPay\PayMode' => __DIR__ .'/PayMode.php',
        'EPay\AcquirerType' => __DIR__ .'/AcquirerType.php',
        'EPay\gettransactionResponse' => __DIR__ .'/gettransactionResponse.php',
        'EPay\gettransactionlist' => __DIR__ .'/gettransactionlist.php',
        'EPay\ArrayOfTransactionInformationType' => __DIR__ .'/ArrayOfTransactionInformationType.php',
        'EPay\gettransactionlistResponse' => __DIR__ .'/gettransactionlistResponse.php',
        'EPay\getcardinfo' => __DIR__ .'/getcardinfo.php',
        'EPay\CardType' => __DIR__ .'/CardType.php',
        'EPay\getcardinfoResponse' => __DIR__ .'/getcardinfoResponse.php',
        'EPay\renew' => __DIR__ .'/renew.php',
        'EPay\renewResponse' => __DIR__ .'/renewResponse.php',
        'EPay\movetransactiontogroup' => __DIR__ .'/movetransactiontogroup.php',
        'EPay\movetransactiontogroupResponse' => __DIR__ .'/movetransactiontogroupResponse.php',
        'EPay\ping' => __DIR__ .'/ping.php',
        'EPay\pingResponse' => __DIR__ .'/pingResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_31112b92faaa36565d3190041443aefe');

// Do nothing. The rest is just leftovers from the code generation.
{
}
