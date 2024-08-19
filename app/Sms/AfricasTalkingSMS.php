<?php

namespace App\Sms;

use Illuminate\Support\Str;
use App\Models\Forms\SmsLog;
use AfricasTalking\SDK\AfricasTalking;

class AfricasTalkingSMS
{

    protected $username = '';
    protected $apiKey = '';

    public function __construct()
    {
        $this->username = env('AT_USERNAME');

        $this->apiKey = env('AT_KEY');
    }

    public function sendSMS($phoneNumber, $message)
    {
        $AT = new AfricasTalking($this->username, $this->apiKey);

        // Get one of the services
        $sms = $AT->sms();

        // Use the service
        $smsData = [
            'to' => $this->cleanPhoneNumber($phoneNumber),
            'message' => $message
        ];

        if (!empty(env('AT_SENDER_ID'))) {
            $smsData['from'] = env('AT_SENDER_ID');
        }

        $result = $sms->send($smsData);

        $responseData = json_decode(json_encode($result), true);

        $this->logSMS($responseData, $message);

        return $responseData['status'];
    }

    private function logSMS($responseData, $message)
    {
        $data = $responseData['data']['SMSMessageData']['Recipients'][0];

        SmsLog::create([
            'phone_number' => $data['number'],
            'message' => $message,
            'provider_message_id' => $data['messageId'],
            'provider_status_text' => $data['status'],
            'provider_status_code' => $data['statusCode'],
            'sms_cost' => $data['cost'],
        ]);
    }

    /**
     * @param $number
     *
     * @return mixed
     */
    private function cleanPhoneNumber($number)
    {
        $number = trim($number);
        $number = str_replace(" ", "", $number);

        if (Str::startsWith($number, '+')) {
            $number = substr($number, 1);
        } elseif (Str::startsWith($number, '07')) {
            $number = '254' . substr($number, 1);
        } elseif (Str::startsWith($number, '7')) {
            $number = '254' . $number;
        }

        return $number;
    }
}
