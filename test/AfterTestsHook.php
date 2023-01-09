<?php

namespace Cardpay\test;

use Cardpay\api\FileTokensStorageApi;
use PHPUnit\Runner\AfterLastTestHook;

class AfterTestsHook implements AfterLastTestHook
{
    private $terminalCodes;

    public function __construct()
    {
        $this->terminalCodes = [
            Config::$paymentpageTerminalCode,
            Config::$gatewayTerminalCode,
            Config::$gatewayPostponedTerminalCode
        ];
    }

    public function executeAfterLastTest(): void
    {
        foreach ($this->terminalCodes as $terminalCode) {
            $fileTokensStorageApi = new FileTokensStorageApi(Config::$cardpayApiUrl, $terminalCode);
            $fileTokensStorageApi->deleteApiTokens();
        }
    }
}
