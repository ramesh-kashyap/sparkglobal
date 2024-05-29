<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Investment;
use App\Models\Income;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Log;
use Redirect;
use Hash;
use Helper;
class Invest extends Controller
{

  private $downline = "";

    public function index()
    {
        $user=Auth::user();
        $invest_check=Investment::where('user_id',$user->id)->where('status','!=','Decline')->orderBy('id','desc')->limit(1)->first();

        $this->data['last_package'] = ($invest_check)?$invest_check->amount:0;
        $this->data['page'] = 'user.invest.Deposit';
        return $this->dashboard_layout();
    }  
    
    public function deposit()
    {
        $user=Auth::user();
        $invest_check=Investment::where('user_id',$user->id)->where('status','!=','Decline')->orderBy('id','desc')->limit(1)->first();

        $this->data['last_package'] = ($invest_check)?$invest_check->amount:0;
        $this->data['page'] = 'user.invest.Deposit2';
        return $this->dashboard_layout();
    }



public function cancel_payment($id)

{
    
         Investment::where('orderId',$id)->update(['status' => 'Decline']);
     
        $notify[] = ['success','Deposit canceled successfully'];
        return redirect()->route('user.invest')->withNotify($notify);
    
}

    public function confirmDeposit(Request $request)
    {
   try{
     $validation =  Validator::make($request->all(), [
        'amount' => 'required|numeric|min:10',
        'currency' => 'required',
        'payment' => 'required',
        'username' => 'required|exists:users,username'
     ]);


    //  dd($request->all());
    if($validation->fails()) {
        Log::info($validation->getMessageBag()->first());

        return redirect()->route('user.invest')->withErrors($validation->getMessageBag()->first())->withInput();
    }




    $user=Auth::user();
    
    
    $userDetail=User::where('username',$request->username)->first();
    
    $invest_check=Investment::where('user_id',$userDetail->id)->where('status','Pending')->first();

    if ($invest_check) 
    {
      return redirect()->route('user.DepositHistory')->withErrors(array('your deposit already pending please cancel it if you dont want to pay this transaction'));
    }
       
   
      
    $plan ='BEGINNER';

    $invest_check=Investment::where('user_id',$userDetail->id)->where('status','!=','Decline')->orderBy('id','desc')->limit(1)->first();
    $last_package=($invest_check)?$invest_check->amount:0;
      if($request->amount<=$last_package)
      {

            return Redirect::back()->withErrors(array('you have already chosen this plan choose another plan'));

      }
    


    if ($request->payment=="crypto") 
    {
    
    

    $amountTotal= $request->amount;
    $amount= $request->amount;
  
    $paymentMode = $request->currency;
 

    
       $invoice = substr(str_shuffle("0123456789"), 0, 7);
       $apiURL = 'https://plisio.net/api/v1/invoices/new';
        $postInput = [
        'source_currency' => 'USD',
        'source_amount' => $amountTotal,
        'order_number' => $invoice,
        'currency' => $paymentMode,
        'email' => $userDetail->email,
        'order_name' =>$userDetail->username,
        'callback_url' => 'https://sparkglobal.ai/dynamicupicallback?json=true',
        'api_key' => '9Fy-MNwEURzyN473jIkvxTxT03vDDwTby_k6JKDSiLXfxhPnFJgmJJJdy7KilG2T',
        ];
  
        $headers = [
            'Content-Type' => 'application/json'
        ];
  
        $response = Http::withHeaders($headers)->get($apiURL, $postInput);
  
        $statusCode = $response->status();
        $resultAarray = json_decode($response->getBody(), true);
        

        if($resultAarray['status']=="success")
        {

          $data = [
                'plan' => $plan,
                'orderId' => $invoice,
                'transaction_id' =>$resultAarray['data']['txn_id'],
                'user_id' => $userDetail->id,
                'user_id_fk' => $userDetail->username,
                'amount' => $amountTotal,
                'token' => $amountTotal/tokenPrice(),
                'payment_mode' =>$paymentMode,
                'status' => 'Pending',
                'sdate' => Date("Y-m-d"),
                'active_from' => $user->username,
            ];
            $payment =  Investment::insert($data);
                    
        $this->data['walletAddress'] =$resultAarray['data']['wallet_hash'];
        $this->data['paymentMode'] =$paymentMode;
        $this->data['transaction_id'] =$resultAarray['data']['txn_id'];
        $this->data['qr_code'] =$resultAarray['data']['qr_code'];
        $this->data['orderId'] =$invoice;
        $this->data['amount'] =$amount;
        $this->data['invoice_total_sum'] =$resultAarray['data']['invoice_total_sum'];
        $this->data['page'] = 'user.invest.confirmDeposit';
        return $this->dashboard_layout();




      }
      else
      {
        return Redirect::back()->withErrors(array('try again'));
      }


      # code...
    }
    else
    {

      $amountTotal= $request->amount;
      $amount= $request->amount;
    
      $paymentMode = $request->currency;
      $invoice = substr(str_shuffle("0123456789"), 0, 7);

      

      $this->data['paymentMode'] =$paymentMode;
      $this->data['orderId'] =$invoice;
      $this->data['amount'] =$amount;
      $this->data['payment'] =$request->payment;
      $this->data['username'] =$request->username;
      $this->data['page'] = 'user.invest.confirm-deposit';
      return $this->dashboard_layout();



    }


  }
   catch(\Exception $e){
    Log::info('error here');
    Log::info($e->getMessage());
    print_r($e->getMessage());
    die("hi");
    return  redirect()->route('user.invest')->withErrors('error', $e->getMessage())->withInput();
      }

 }



    public function confirmDeposit_new(Request $request)
    {
   try{
     $validation =  Validator::make($request->all(), [
        'Sum' => 'required|numeric|min:2',
        'PSys' => 'required',
     ]);

    //  dd($request->all());
    if($validation->fails()) {
        Log::info($validation->getMessageBag()->first());

        return redirect()->route('user.invest')->withErrors($validation->getMessageBag()->first())->withInput();
    }




    $user=Auth::user();
    $invest_check=Investment::where('user_id',$user->id)->where('status','Pending')->first();

    if ($invest_check) 
    {
      return Redirect::back()->withErrors(array('your deposit already pending'));
    }
   

    $min_amount = $request->minimum_deposit;
    $max_amount = $request->maximum_deposit;
    $plan = $request->Plan;
    $paymentMode = $request->PSys;
    $amount = $request->Sum;

   
       
    if ($amount<$min_amount || $amount>$max_amount) 
    {
      return Redirect::back()->withErrors(array('minimum deposit is $ '.$min_amount.' and maximum is $ '.$max_amount));
    }
    
    
        $plan ='BEGINNER';
      if ($amount>=50 && $amount<=200) 
       {
        $plan ='BEGINNER';
       }
       elseif($amount>=400 && $amount<=800)
       {
        $plan ='STANDARD';
       }
       elseif($amount>=1000 && $amount<=2000)
       {
        $plan ='EXCLUSIVE';
       }
       elseif($amount>=2500 && $amount<=5000)
       {
        $plan ='ULTIMATE';
       }

       elseif($amount>=5000 && $amount<=10000)
       {
        $plan ='PREMIUM';
       }

       elseif($amount>=5000)
       {
        $plan ='PREMIUM';
       }
       
    $invest_check=Investment::where('user_id',$user->id)->where('plan',$plan)->where('status','!=','Decline')->orderBy('id','desc')->limit(1)->first();
    
    if($invest_check)
    {
          return Redirect::back()->withErrors(array('you have already chosen this plan choose another plan'));
    }
   
    $amountTotal= $request->Sum;
  
  
    if($paymentMode=="USDT.BEP20")
    {
       $paymentMode= "USDT_BSC"; 
    }
    else
    {
      $paymentMode= "USDT_TRX";    
    }
    
       $invoice = substr(str_shuffle("0123456789"), 0, 7);
       $apiURL = 'https://plisio.net/api/v1/invoices/new';
        $postInput = [
        'source_currency' => 'USD',
        'source_amount' => $amountTotal,
        'order_number' => $invoice,
        'currency' => $paymentMode,
        'email' => $user->email,
        'order_name' =>$user->username,
        'callback_url' => 'https://sparkglobal.ai/dynamicupicallback?json=true',
        'api_key' => '9Fy-MNwEURzyN473jIkvxTxT03vDDwTby_k6JKDSiLXfxhPnFJgmJJJdy7KilG2T',
        ];
  
        $headers = [
            'Content-Type' => 'application/json'
        ];
  
        $response = Http::withHeaders($headers)->get($apiURL, $postInput);
  
        $statusCode = $response->status();
        $resultAarray = json_decode($response->getBody(), true);
        

    if($resultAarray['status']=="success")
    {

       $data = [
            'plan' => $plan,
            'orderId' => $invoice,
            'transaction_id' =>$resultAarray['data']['txn_id'],
            'user_id' => $user->id,
            'user_id_fk' => $user->username,
            'amount' => $amountTotal,
            'token' => $request->amount/tokenPrice(),
            'payment_mode' =>$paymentMode,
            'status' => 'Pending',
            'sdate' => Date("Y-m-d"),
            'walletType' =>1,
            'active_from' => $user->username,
        ];
        $payment =  Investment::insert($data);
                
            
    
    $this->data['walletAddress'] =$resultAarray['data']['wallet_hash'];
    $this->data['paymentMode'] =$paymentMode;
    $this->data['transaction_id'] =$resultAarray['data']['txn_id'];
    $this->data['qr_code'] =$resultAarray['data']['qr_code'];
    $this->data['orderId'] =$invoice;
    $this->data['amount'] =$amount;
    $this->data['invoice_total_sum'] =$resultAarray['data']['invoice_total_sum'];
    $this->data['page'] = 'user.invest.confirmDeposit';
    return $this->dashboard_layout();

  }
  else
  {
    return Redirect::back()->withErrors(array('try again'));
  }

  }
   catch(\Exception $e){
    Log::info('error here');
    Log::info($e->getMessage());
    print_r($e->getMessage());
    die("hi");
    return  redirect()->route('user.invest')->withErrors('error', $e->getMessage())->withInput();
      }

 }





    public function fundActivation(Request $request)
    {

  try{
    $validation =  Validator::make($request->all(), [
        'amount' => 'required',
        'paymentMode' => 'required',
        'orderId' => 'required',
        'payment' => 'required',
         'username' => 'required|exists:users,username'
    ]);
    // 

    if($validation->fails()) {
   

      // dd($request->all());
     
        Log::info($validation->getMessageBag()->first());
      
        return redirect()->route('user.invest')->withErrors($validation->getMessageBag()->first())->withInput();
    }

 

       $user=Auth::user();
       
       $plan="1";

       $working_amt = $request->working_wallet;
       $cash_amt = $request->cash_wallet;
      
       $total = $working_amt+$cash_amt;

       if ($request->amount!=$total) 
       {
        return redirect()->route('user.invest')->withErrors(array('invalid packages'));
       }
       


       $user_detail=User::where('username',$request->username)->orderBy('id','desc')->limit(1)->first();
       $invest_check=Investment::where('user_id',$user_detail->id)->where('status','!=','Decline')->orderBy('id','desc')->limit(1)->first();
       $invoice = substr(str_shuffle("0123456789"), 0, 7);
       $joining_amt =$request->amount*50/100;
        $plan ='BEGINNER';
    
        $workingBalance = round(Auth::user()->workingBalance(),2);
        $spotBalance = round(Auth::user()->FundBalance(),2);
        

     if ($workingBalance>=$working_amt && $spotBalance>=$cash_amt) 
     {
      $last_package = ($invest_check)?$invest_check->amount:0;
        
           $data = [
                'plan' => $plan,
                'orderId' =>$request->orderId,
                'transaction_id' =>md5(uniqid(rand(), true)),
                'user_id' => $user_detail->id,
                'user_id_fk' => $user_detail->username,
                'amount' => $request->amount,
                'working_amt' => $working_amt,
                'cash_amt' => $cash_amt,
                'token' => $request->amount/tokenPrice(),
                'payment_mode' =>$request->paymentMode,
                'status' => 'Active',
                'sdate' => Date("Y-m-d"),
                'active_from' => $user->username,
                'walletType' => 2,
            ];
            $payment =  Investment::insert($data);

            if ($user_detail->active_status=="Pending")
            {
             $user_update=array('active_status'=>'Active','adate'=>Date("Y-m-d H:i:s"),'package'=>$request->amount);
              User::where('id',$user_detail->id)->update($user_update);
            }
            else
            {
              $total = $user_detail->package+$request->amount;
              $user_update=array('active_status'=>'Active','package'=>$total);
              User::where('id',$user_detail->id)->update($user_update);
            }

        $notify[] = ['success','user activation successfully'];
        return redirect()->route('user.invest')->withNotify($notify);

   
      # code...
     }
     else
     {
      return redirect()->route('user.invest')->withErrors(array('insufficient balance in Wallet'));
     }


  }
   catch(\Exception $e){
    Log::info('error here');
    Log::info($e->getMessage());
    print_r($e->getMessage());
    die("hi");
    return  redirect()->route('user.invest')->withErrors('error', $e->getMessage())->withInput();
      }

 }



        public function invest_list(Request $request){

      $user=Auth::user();
      $limit = $request->limit ? $request->limit : paginationLimit();
        $status = $request->status ? $request->status : null;
        $search = $request->search ? $request->search : null;
        $notes = Investment::where('user_id',$user->id);
      if($search <> null && $request->reset!="Reset"){
        $notes = $notes->where(function($q) use($search){
          $q->Where('user_id_fk', 'LIKE', '%' . $search . '%')
          ->orWhere('txn_no', 'LIKE', '%' . $search . '%')
          ->orWhere('status', 'LIKE', '%' . $search . '%')
          ->orWhere('type', 'LIKE', '%' . $search . '%')
          ->orWhere('amount', 'LIKE', '%' . $search . '%');
        });

      }

        $notes = $notes->paginate($limit)->appends(['limit' => $limit ]);

      $this->data['search'] =$search;
      $this->data['deposit_list'] =$notes;
      $this->data['page'] = 'user.invest.DepositHistory';
      return $this->dashboard_layout();


        }
public function investment()
      {
        $this->data['page'] = 'user.invest.new_investment';
        return $this->dashboard_layout();

      }

}
