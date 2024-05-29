<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Investment;
use App\Models\Bank;
use App\Models\Withdraw;
use App\Models\Debit;
use Hexters\CoinPayment\CoinPayment;
use App\Models\CoinpaymentTransaction;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Log;
use Redirect;
use Hash;

class WithdrawRequest extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $bank = Bank::where("user_id", $user->id)
            ->orderBy("id", "desc")
            ->get();
        $this->data["bank"] = $bank;
        $this->data["page"] = "user.withdraw.WithdrawRequest";
        return $this->dashboard_layout();
    }

    public function withdrawPrinciple()
    {
        $user = Auth::user();
        $bank = Bank::where("user_id", $user->id)
            ->orderBy("id", "desc")
            ->get();
        $this->data["bank"] = $bank;
        $this->data["page"] = "user.withdraw.withdraw-principle";
        return $this->dashboard_layout();
    }

    public function WithdrawRequest(Request $request)
    {
        try {
            $validation = Validator::make($request->all(), [
                "amount" => "required|numeric|min:10",
                "currency" => "required",
                "payment" => "required|in:1,2",
                "wallet" => "required",
            ]);

            if ($validation->fails()) {
                Log::info($validation->getMessageBag()->first());

                return Redirect::back()
                    ->withErrors($validation->getMessageBag()->first())
                    ->withInput();
            }

            $user = Auth::user();
            $password = $request->transaction_password;
            $balance = Auth::user()->stakingBalance();
            
            // dd($request->currency);
            if ($request->currency == "USDT_BSC") {
                $account = $user->usdtBep20;
            } else {
                $account = $user->usdtTrc20;
            }

            if ($balance >= $request->amount) {
                if ($request->payment == 2) {
                    $user_detail = Withdraw::where("user_id", $user->id)
                        ->where("status", "Pending")
                        ->first();

                    if (!empty($user_detail)) {
                        return Redirect::back()->withErrors([
                            "Withdraw Request Already Exist !",
                        ]);
                    } else {
                        if ($request->currency == "USDT_BSC") {
                            $paymentMode = "USDT_BSC";
                        } else {
                            $paymentMode = "USDT_TRX";
                        }
                        
                        
                        $invoice = substr(str_shuffle("0123456789"), 0, 7);
                        if (!empty($account)) {
                            $data = [
                                "txn_id" => md5(time() . rand()),
                                "user_id" => $user->id,
                                'orderId'=>$invoice,
                                "user_id_fk" => $user->username,
                                "amount" => $request->amount,
                                "account" => $account,
                                "payment_mode" => $paymentMode,
                                "status" => "Pending",
                                'netAmt' =>$request->amount-$request->amount*10/100,
                                'charge' =>$request->amount*10/100,
                                "walletType" => $request->payment,
                                "wdate" => Date("Y-m-d"),
                            ];
                            $payment = Withdraw::Create($data);

                            $withdraw_id = $payment["id"];

                            $netAmt =$request->amount-($request->amount * 10)/100;
                            $apiURL =
                                "https://plisio.net/api/v1/operations/withdraw";
                            $postInput = [
                                "currency" => $paymentMode,
                                "amount" => $netAmt,
                                "type" => "cash_out",
                                "to" => $account,
                                "api_key" =>
                                    "9Fy-MNwEURzyN473jIkvxTxT03vDDwTby_k6JKDSiLXfxhPnFJgmJJJdy7KilG2T",
                            ];

                            $headers = [
                                "Content-Type" => "application/json",
                            ];

                            $response = Http::withHeaders($headers)->get(
                                $apiURL,
                                $postInput
                            );

                            $statusCode = $response->status();
                            $responseBody = json_decode(
                                $response->getBody(),
                                true
                            );
                            
                            // dd($responseBody);

                            if ($responseBody["status"] == "success") {
                                Withdraw::where("id", $withdraw_id)->update([
                                    "status" => "Approved",
                                    "txn_id" => $responseBody["data"]["txn_id"],
                                ]);

                                $notify[] = [
                                    "success",
                                    "Withdraw Request Submited successfully",
                                ];

                                return redirect()
                                    ->back()
                                    ->with("withdralId", $withdraw_id)
                                    ->withNotify($notify);
                            } else {
                                Withdraw::where("id", $withdraw_id)->update([
                                    "status" => "Failed",
                                ]);
                                return Redirect::back()->withErrors([
                                    "something went wrong",
                                ]);
                            }
                        } else {
                            return Redirect::back()->withErrors([
                                "Please Update Your " .
                                $request->paymentMode .
                                " Payment address",
                            ]);
                        }
                    }
                } else {
                    $user_detail = Withdraw::where("user_id", $user->id)
                        ->where("status", "Pending")
                        ->first();

                    if (!empty($user_detail)) {
                        return Redirect::back()->withErrors([
                            "Withdraw Request Already Exist !",
                        ]);
                    } else {
                        if ($request->currency == "USDT.BEP20") {
                            $paymentMode = "USDT_BSC";
                        } else {
                            $paymentMode = "USDT_TRX";
                        }
                        $invoice = substr(str_shuffle("0123456789"), 0, 7);
                        if (!empty($account)) {
                            $data = [
                                "txn_id" => md5(time() . rand()),
                                "user_id" => $user->id,
                                'orderId'=>$invoice,
                                "user_id_fk" => $user->username,
                                "amount" => $request->amount,
                                "account" => $account,
                                "payment_mode" => $paymentMode,
                                'netAmt' =>$request->amount-$request->amount*5/100,
                                'charge' =>$request->amount*5/100,
                                "status" => "Approved",
                                "walletType" => $request->payment,
                                "wdate" => Date("Y-m-d"),
                            ];
                            $payment = Withdraw::Create($data);

                            $notify[] = [
                                "success",
                                "Withdraw Request Submited successfully",
                            ];

                            return redirect()
                                ->back()
                                ->withNotify($notify);
                        } else {
                            return Redirect::back()->withErrors([
                                "Please Update Your " .
                                $request->paymentMode .
                                " Payment address",
                            ]);
                        }
                    }
                }
            } else {
                return Redirect::back()->withErrors([
                    "Insufficient balance in Your account",
                ]);
            }
        } catch (\Exception $e) {
            Log::info("error here");
            Log::info($e->getMessage());
            print_r($e->getMessage());
            die("hi");
            return redirect()
                ->route("user.WithdrawRequest")
                ->withErrors("error", $e->getMessage())
                ->withInput();
        }
    }

    public function WithdrawHistory(Request $request)
    {
        $user = Auth::user();
        $limit = $request->limit ? $request->limit : paginationLimit();
        $status = $request->status ? $request->status : null;
        $search = $request->search ? $request->search : null;
        $notes = Withdraw::where("user_id", $user->id)->orderBy(
            "wdate",
            "DESC"
        );
        if ($search != null && $request->reset != "Reset") {
            $notes = $notes->where(function ($q) use ($search) {
                $q->Where("wdate", "LIKE", "%" . $search . "%")
                    ->orWhere("amount", "LIKE", "%" . $search . "%")
                    ->orWhere("status", "LIKE", "%" . $search . "%")
                    ->orWhere("txn_id", "LIKE", "%" . $search . "%");
            });
        }

        $notes = $notes->paginate($limit)->appends(["limit" => $limit]);

        $this->data["search"] = $search;
        $this->data["withdraw_report"] = $notes;
        $this->data["page"] = "user.withdraw.WithdrawHistory";
        return $this->dashboard_layout();
    }

    public function debitReport(Request $request)
    {
        $user = Auth::user();
        $limit = $request->limit ? $request->limit : paginationLimit();
        $status = $request->status ? $request->status : null;
        $search = $request->search ? $request->search : null;
        $notes = Debit::where("user_id", $user->id);
        if ($search != null && $request->reset != "Reset") {
            $notes = $notes->where(function ($q) use ($search) {
                $q->Where("wdate", "LIKE", "%" . $search . "%")
                    ->orWhere("amount", "LIKE", "%" . $search . "%")
                    ->orWhere("status", "LIKE", "%" . $search . "%")
                    ->orWhere("txn_id", "LIKE", "%" . $search . "%");
            });
        }

        $notes = $notes->paginate($limit)->appends(["limit" => $limit]);

        $this->data["search"] = $search;
        $this->data["withdraw_report"] = $notes;
        $this->data["page"] = "user.withdraw.debit";
        return $this->dashboard_layout();
    }

    public function withdraw_request()
    {
        $this->data["page"] = "user.withdraw.withdraw_request";
        return $this->dashboard_layout();
    }
}
