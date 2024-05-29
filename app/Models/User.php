<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name', 'email', 'password','phone','username','sponsor','ParentId','position','active_status','jdate','level','tpassword','adate','PSR','TPSR',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'sponsor');
    } 


    public function sponsor_detail()
    {
        return $this->belongsTo('App\Models\User', 'sponsor');
    } 


    public function FundBalance()
    {
    $balance = (Auth::user()->buy_fundAmt->sum('amount')+Auth::user()->fundtranfered())-(Auth::user()->cashInvest()+Auth::user()->fundtranfer());
    return $balance;
    } 

    public function buy_fundAmt(){
        return $this->hasMany('App\Models\BuyFund','user_id','id')->where('status','Approved');
    }


    public function fundtranfer(){
        return  \DB::table('fundtransfers')->where('transfer_id',Auth::user()->id)->sum('amount');
    }
    

    public function fundtranfered(){
        return  \DB::table('fundtransfers')->where('transfered_id',Auth::user()->id)->sum('amount');
    }
    

    public function buy_packageAmt(){
        $amt= Investment::where('user_id',Auth::user()->id)->where('walletType',2)->sum('amount');
        return $amt;
    }


    public function workingInvest(){
        $amt= Investment::where('active_from',Auth::user()->username)->where('walletType',2)->sum('working_amt');
        return $amt;
    }

    public function cashInvest(){
        $amt= Investment::where('active_from',Auth::user()->username)->where('walletType',2)->sum('cash_amt');
        return $amt;
    }


    public function dailyIncentive()
    {
        return $this->hasMany('App\Models\Income','user_id','id')->where('remarks','Algorithmic Profit');
    } 

    public function user_direct()
    {
        return $this->hasMany('App\Models\User','sponsor','id')->where('active_status','Active');
    } 


    
    public function leadership_bonus()
    {
        return $this->hasMany('App\Models\Income','user_id','id')->where('remarks','Farming Profit');
    } 
        
    public function level_bonus()
    {
        return $this->hasMany('App\Models\Income','user_id','id')->where('remarks','Farming Profit');
    } 
      
    public function trading_profit()
    {
        return $this->hasMany('App\Models\User_trade','user_id','id')->where('profitType',1);
    } 
       
    public function debit()
    {
        return $this->hasMany('App\Models\Debit','user_id','id');
    } 
   
    public function trading_lose()
    {
        return $this->hasMany('App\Models\User_trade','user_id','id')->where('profitType',2);
    } 

    public function sponsorship_bonus()
    {
        return $this->hasMany('App\Models\Income','user_id','id')->where('remarks','Direct Bonus');
    } 

     public function tradingBalance()
    {
    $balance = (Auth::user()->trading_profit->sum('comm')) - (Auth::user()->trading_lose->sum('comm'));
    return $balance;
    }      
          
    public function reward_bonus()
    {
        return $this->hasMany('App\Models\Income','user_id','id')->where('remarks','Reward Profit');
    } 

    public function booster_bonus()
    {
        return $this->hasMany('App\Models\Income','user_id','id')->where('remarks','Booster Income');
    } 
    
    public function club_bonus()
    {
        return $this->hasMany('App\Models\Income','user_id','id')->where('remarks','Club Income');
    } 
    
     
    public function totalIncome()
    {
        return $this->hasMany('App\Models\Income','user_id','id')->where('credit_type',0);
    } 
    
    
    public function workingIncome()
    {
        return $this->hasMany('App\Models\Income','user_id','id')->whereIn('remarks',['Farming Profit','Reward Profit','Achievement Profit'])->where('credit_type',0);
    } 
    

    public function stakingIncome()
    {
        return $this->hasMany('App\Models\Income','user_id','id')->where('remarks','Algorithmic Profit')->where('credit_type',0);
    } 
    


    
    public function available_balance()
    {
    $balance = (Auth::user()->users_incomes()) - (Auth::user()->withdraw());
    return $balance;
    } 

    public function workingBalance()
    {
    $balance = (Auth::user()->workingIncome->sum('comm')+Auth::user()->workingWithdraw())-(Auth::user()->workingInvest());
    return $balance;
    } 
 
    public function stakingBalance()
    {
    $balance = (Auth::user()->stakingIncome->sum('comm'))-(Auth::user()->stakigWithdraw()+Auth::user()->workingWithdraw());
    return $balance;
    } 
 


    public function users_incomes()
    {
        return  Income::where('user_id',Auth::user()->id)->sum('comm');
    } 
    

    public function withdraw()
    {
        return  Withdraw::where('user_id',Auth::user()->id)->where('status','!=','Failed')->sum('amount');
    } 
    public function stakigWithdraw()
    {
        return  Withdraw::where('user_id',Auth::user()->id)->where('status','!=','Failed')->where('walletType',2)->sum('amount');
    } 

    public function workingWithdraw()
    {
        return  Withdraw::where('user_id',Auth::user()->id)->where('status','!=','Failed')->where('walletType',1)->sum('netAmt');
    } 




    public function investment(){
        return $this->hasMany('App\Models\Investment','user_id','id')->where('status','Active');
    }


    public function withdrawal(){
        return $this->hasMany('App\Models\Withdraw','user_id','id')->where('walletType',1);
    }

  public function Priciplewithdrawal(){
        return $this->hasMany('App\Models\Withdraw','user_id','id')->where('walletType',2);
    }


  

    
}
