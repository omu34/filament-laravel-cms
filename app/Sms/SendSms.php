<?php

namespace App\Sms;

/**
 * Trait SendsSms
 * @package App\Sms
 */
trait SendSms
{
    /**
     * @param $phoneNumber
     * @param $message
     */
    public function sendSms($phoneNumber, $message)
    {

        $provider = new AfricasTalkingSMS();

        return $provider->sendSMS($phoneNumber, $message);
    }
}
