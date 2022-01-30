<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class PaymentController extends Controller
{

    public function CreditCardMidtrans(Request $request)
    {
        $client = new Client();
        $token = $request->token_id;
        $datenow = Carbon::now()->toDateTimeString();
        $response = $client->post('https://api.sandbox.midtrans.com/v2/charge',
            [
                'headers' => [
                    'Accept' => 'application/json',
                    'Authorization' => 'Basic '.env('MIDTRANS_SERVER_KEY'),
                    'Content-Type' => 'application/json'
                ],
                'body' => json_encode([
                    'payment_type' => 'credit_card',
                    'transaction_details' => [
                        'order_id' => $datenow,
                        'gross_amount' => '10000'
                    ],
                    'credit_card' => [
                        'token_id' => $token,
                        'authentication' => 'true'
                    ]
                ])
            ]
        );
        $data = json_decode($response->getBody());
        $result = $data->redirect_url;
        return view('payment.main', [
            'title' => 'Payment',
            'result' => $result
        ]);
    }

    public function BankTransferMidtrans(Request $request)
    {
        $client = new Client();
        $datenow = Carbon::now()->toDateTimeString();

        $bank = $request->bank_name;
        if($bank == 'bca' || $bank == 'bni' || $bank == 'bri'){
            $response = $client->post('https://api.sandbox.midtrans.com/v2/charge',
                [
                    'headers' => [
                        'Accept' => 'application/json',
                        'Authorization' => 'Basic '.env('MIDTRANS_SERVER_KEY'),
                        'Content-Type' => 'application/json'
                    ], 
                    'body' => json_encode([
                        'payment_type' => 'bank_transfer',
                        'transaction_details' => [
                            'order_id' => $datenow,
                            'gross_amount' => '50000'
                        ], 
                        'bank_transfer' => [
                            'bank' => $bank
                        ]
                    ])
                ]
            );
        } if($bank == 'mandiri'){
            $response = $client->post('https://api.sandbox.midtrans.com/v2/charge',
                [
                    'headers' => [
                        'Accept' => 'application/json',
                        'Authorization' => 'Basic '.env('MIDTRANS_SERVER_KEY'),
                        'Content-Type' => 'application/json'
                    ], 
                    'body' => json_encode([
                        'payment_type' => 'echannel',
                        'transaction_details' => [
                            'order_id' => $datenow,
                            'gross_amount' => $request->harga
                        ], 
                        'echannel' => [
                            'bill_info1' => 'Payment',
                            'bill_info2' => 'Online purchase'
                        ]
                    ])
                ]
            );
        } if($bank == 'permata') {
            $response = $client->post('https://api.sandbox.midtrans.com/v2/charge',
                [
                    'headers' => [
                        'Accept' => 'application/json',
                        'Authorization' => 'Basic '.env('MIDTRANS_SERVER_KEY'),
                        'Content-Type' => 'application/json'
                    ], 
                    'body' => json_encode([
                        'payment_type' => 'echannel',
                        'transaction_details' => [
                            'order_id' => $datenow,
                            'gross_amount' => $request->harga
                        ]
                    ])
                ]
            );
        }
        
        $data = json_decode($response->getBody());
        $va_number = $data->va_numbers[0]->va_number;
        return view('payment.main', [
            'title' => 'Payment',
            'va_number' => $va_number,
            'amount' => $data->gross_amount
        ]);
    }
    public function transferBank(Request $request)
    {
        $client = new Client();
        $datenow = Carbon::now()->toDateTimeString();

        $bank = $request->bank_name;
        if($bank == 'bca' || $bank == 'bni' || $bank == 'bri'){
            $response = $client->post('https://api.sandbox.midtrans.com/v2/charge',
                [
                    'headers' => [
                        'Accept' => 'application/json',
                        'Authorization' => 'Basic '.env('MIDTRANS_SERVER_KEY'),
                        'Content-Type' => 'application/json'
                    ], 
                    'body' => json_encode([
                        'payment_type' => 'bank_transfer',
                        'transaction_details' => [
                            'order_id' => $datenow,
                            'gross_amount' => '50000'
                        ], 
                        'bank_transfer' => [
                            'bank' => $bank
                        ]
                    ])
                ]
            );
        } if($bank == 'mandiri'){
            $response = $client->post('https://api.sandbox.midtrans.com/v2/charge',
                [
                    'headers' => [
                        'Accept' => 'application/json',
                        'Authorization' => 'Basic '.env('MIDTRANS_SERVER_KEY'),
                        'Content-Type' => 'application/json'
                    ], 
                    'body' => json_encode([
                        'payment_type' => 'echannel',
                        'transaction_details' => [
                            'order_id' => $datenow,
                            'gross_amount' => $request->harga
                        ], 
                        'echannel' => [
                            'bill_info1' => 'Payment',
                            'bill_info2' => 'Online purchase'
                        ]
                    ])
                ]
            );
        } if($bank == 'permata') {
            $response = $client->post('https://api.sandbox.midtrans.com/v2/charge',
                [
                    'headers' => [
                        'Accept' => 'application/json',
                        'Authorization' => 'Basic '.env('MIDTRANS_SERVER_KEY'),
                        'Content-Type' => 'application/json'
                    ], 
                    'body' => json_encode([
                        'payment_type' => 'echannel',
                        'transaction_details' => [
                            'order_id' => $datenow,
                            'gross_amount' => $request->harga
                        ]
                    ])
                ]
            );
        }
        
        $data = json_decode($response->getBody());
        return $data;
    }

}
