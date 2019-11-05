<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wallet;
use Exception;

use App\Card;
use App\User;
use App\mojo_payment_details;
use App\WalletPassbook;
use App\UserRequests;
use App\UserRequestPayment;
use App\Http\Controllers\SendPushNotification;
use Illuminate\Support\Facades\Log;

class WalletController extends Controller
{
    public function addMoney(Request $request)
    {	

    	$this->validate($request, [
                'user_id' => ['required'],
                'amount' => ['required'],
            ]);

    	try{
            $input['user_id'] = $request->user_id;
            $input['amount'] = $request->amount;
            $input['total_amount'] = $request->amount;
            $wallet = Wallet::where('user_id', $input['user_id'])->first();
            // dd($wallet);
            if(isset($wallet) && $wallet != null) {
            	$input['total_amount'] = $wallet->total_amount + $input['amount'];
            	$findWallet = Wallet::find($wallet->id);
            	$findWallet->update($input);
            } else {
            	$findWallet = Wallet::create($input);
            }

            return $findWallet;

        } catch (Exception $e) {
             return response()->json(['error' => trans('api.something_went_wrong')], 500);
        }
    }

    public function userWallet($id)
    {
    	try{
            $wallet = Wallet::where('user_id', $id)->first();
            return $wallet;

        } catch (Exception $e) {
             return response()->json(['error' => trans('api.something_went_wrong')], 500);
        }
    }
    
    public function deductMoney(Request $request)
    {
    	$this->validate($request, [
                'user_id' => ['required'],
                'amount' => ['required'],
            ]);

    	try{
            $input['user_id'] = $request->user_id;
            $input['amount'] = $request->amount;
            $input['total_amount'] = $request->amount;
            $wallet = Wallet::where('user_id', $input['user_id'])->first();
            // dd($wallet);
            if(isset($wallet) && $wallet != null) {
            	$input['total_amount'] = $wallet->total_amount - $input['amount'];
            	$findWallet = Wallet::find($wallet->id);
            	$findWallet->update($input);
            } else {
            	return response()->json(['error' => 'please add wallet']);
            }

            return $findWallet;

        } catch (Exception $e) {
             return response()->json(['error' => trans('api.something_went_wrong')], 500);
        }
    }
    
    public function payment(Request $request)
    {
        $this->validate($request, [
                'request_id' => 'required',
                'wallet_id'    => 'required'
            ]);

        $wallet_id = $request->wallet_id;

        $UserRequest = UserRequests::find($request->request_id);


            $RequestPayment = UserRequestPayment::where('request_id',$request->request_id)->first(); 

            

            try {
                $RequestPayment->payment_mode = 'CARD';
                $RequestPayment->save();

                $UserRequest->paid = 1;
                $UserRequest->status = 'COMPLETED';
                $UserRequest->save();
                
                $provider_id = $UserRequest->provider_id;
                
                if($provider_id) {
                    
                $paymentMessage = 'payment is successfully done by wallet.';
               
                (new SendPushNotification)->sendPushToProvider($provider_id, $paymentMessage);
    
                }
                
                if($request->ajax()) {
                   return response()->json(['message' => trans('api.paid')]); 
                } else {
                    return response()->json(['message' => trans('api.paid')]); 
                }

            }  catch(Exception $e) {
                if($request->ajax()){
                    return response()->json(['error' => "payment not successed"], 500);
                } else {
                    return back()->with('flash_error', $e->getMessage());
                }
            }
        
    }

    public function handleWebhook()
    {	
    try{
    Log::info('payment is on processing:');
    $data = $_POST;
        $mac_provided = $data['mac'];
        unset($data['mac']);
        $ver = explode('.', phpversion());
        $major = (int) $ver[0];
        $minor = (int) $ver[1];
        if ($major >= 5 && $minor >= 4) {
            ksort($data, SORT_STRING | SORT_FLAG_CASE);
        } else {
            uksort($data, 'strcasecmp');
        }
        
        $mac_calculated = hash_hmac("sha1", implode("|", $data), '1781c48b81224f9a8c960f7aa4de5f4d');
        if ($mac_provided == $mac_calculated) {
            if ($data['status'] == "Credit") {
                $this->updateDB($data);
            } else {
                $this->updateDB($data);
            }
        } else {
            echo "MAC mismatch";
        }
    } catch(\Exception $e) {
    	Log::info('instamojo'.$e->getmessage());
    }	   
    }
    public function updateDB($data)
    {
        $user_id = 1;
        mojo_payment_details::create(['user_id' => $user_id,
                                   'buyer_email' => $data['buyer'],
                                   'buyer_name' => $data['buyer_name'],
                                   'buyer_phone' => $data['buyer_phone'],
                                   'currency' => $data['currency'],
                                   'amount' => $data['amount'],
                                   'fees' => $data['fees'],
                                   'longurl' => $data['longurl'],
                                   'payment_id' => $data['payment_id'],
                                   'payment_request_id' => $data['payment_request_id'],
                                   'purpose' => $data['purpose'],
                                   'shorturl' => $data['shorturl'],
                                   'request_status' => 'completed',
                                   'payment_status' => $data['status'],
                                 ]);
    }
    
    public function paymentForm()
    {
        return view('test_payment_form');
    }
    
    public function submitPayment(Request $request)
    {
     	
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:test_738a22aff60a369be1669fa5fac",
                  "X-Auth-Token:test_af94615ee4b0dc9435fa3e6a4bf"));
        $payload = Array(
    'purpose' => $request->purpose,
    'amount' => $request->amount,
    'phone' => $request->phone,
    'buyer_name' => $request->buyer_name,
    'redirect_url' => url('/').'/api/user/test-payment/',
    'send_email' => false,
    'webhook' => url('/').'/api/user/webhook/',
    'send_sms' => true,
    'email' => $request->email,
    'allow_repeated_payments' => false
    );
     curl_setopt($ch, CURLOPT_POST, true);
     curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
     $response = curl_exec($ch);
     
     curl_close($ch); 
    $data = json_decode($response, true);
    return redirect($data['payment_request']['longurl']);
     //echo $response;
    
    }
    
    
}
