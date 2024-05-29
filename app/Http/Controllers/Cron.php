<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Investment;
use App\Models\Income;
use App\Models\User;
use App\Models\User_trade;
use App\Models\BuyFund;
use App\Models\Reward;
use App\Models\Withdraw;
use App\Models\Transaction;
use Illuminate\Support\Facades\URL;
use App\Models\Trade;
use Illuminate\Support\Facades\Http;
use DateTime;
use DateInterval;
use DatePeriod;
use Carbon\Carbon;
use Helper;

class Cron extends Controller
{
    
    
    private  $final_business;
    
public function __construct()
{
date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)
}
public function tradeAmt()
{
  User::where('id','>=',0)->update(['tradeAmt' => 0]);
}




public function releasefund()
{


   $response = file_get_contents('php://input');
          date_default_timezone_set('Asia/Kolkata');
          $day=date('l');
          $todays=date("Y-m-d");
         $result = json_decode($response, true);
           
         \DB::table('activities')->insert(['data' =>$response]);  
         if(!empty($result))
         {
             
             if($result['status']=="completed")
             {
                 
              $orderId= $result['order_number'];
              $username= $result['order_name'];
              $amount= $result['source_amount'];
              $updateTrue = BuyFund::where('orderId',$orderId)->where('status','Pending')->update(['status' => 'Approved']);
    
                 
             }
             else
             {
                if($result['status']=="mismatch" && $result['amount'] >= $result['invoice_total_sum']) 
                {
                    
                         
              $orderId= $result['order_number'];
              $username= $result['order_name'];
              $amount= $result['source_amount'];
              $updateTrue = BuyFund::where('orderId',$orderId)->where('status','Pending')->update(['status' => 'Approved']);
        
           
                    
                }
             }
             
         }
        


}




 public function globaly_community()
    {  

    $allResult=User::where('active_status','Active')->cursor();
// print_r($allResult);die;
    if ($allResult) 
    {
     foreach ($allResult as $key => $value) 
     {
      
      $user_id=$value->id;
      $username=$value->username;
      
      
      
      
         $direct_list=User::where('sponsor',$user_id)->get(); 
    
	            $vicker_leg=0;
	        $power_leg=0;
	           $arrayabc = array();
	           if($direct_list!="")
	           {
	               foreach($direct_list as $key=>$value)
	               {
	                   $id_value=$value->id;
	                   $user_id_value=$value->username;
	                
	               //   $this->a=0;
	               $this->final_business=0;  
	                 $this->my_level_team_countBusiness($id_value);
	             
	                   $total=Investment::where('user_id',$id_value)->where('status','Active')->orderBy('id', 'DESC')->sum('amount');
	                  $this->final_business +=$total;
	                 $abc = $this->final_business;  
	               //  echo $abc; die;
	                 $arrayabc[$user_id_value] = $abc;
	                    
	                 //print_r($total_business)."<br>".$user_id_value;echo "<br>";
	               }
	             
	              if(!empty($arrayabc))
	              {
	               
	               
	               //  echo "<pre>";
	               ////  print_r($maxValue);
	               //print_r($arrayabc);die;
	               
	               $maxValue = max(@$arrayabc);
                  $maxIndex = array_search(max($arrayabc), $arrayabc);
                   $vicker_leg=array_sum($arrayabc);  
	                 
	       	        $power_leg=$maxValue;
	       $vicker_leg=$vicker_leg-$power_leg;
	       
	              }else
	              {
	                    $vicker_leg=0;
	        $power_leg=0;
	              }
	              
	             
	       //echo $username."<br>";
	       // echo "<pre>";print_r($power_leg)."<br>";
	       // echo "<pre>";print_r($vicker_leg);die;
	  
	    }
	    else
	    {
	        $vicker_leg=0;
	        $power_leg=0;
	    }
	    
             
               echo "<br>";
                 echo "ID : ".$username."<br>";
                 echo "Power : ".$power_leg."<br>";
          echo "Vicker : ".$vicker_leg;
             
        User::where('id', $user_id)
      ->update([
          'power_leg' => $power_leg,
          'vicker_leg' => $vicker_leg
        ]); 
     
     }
    } 

}


  public function my_level_team_countBusiness($userid){
        $arrin=array($userid);
        $ret=array();

        $i=1;
        while(!empty($arrin)){
            $alldown=User::select('id')->whereIn('sponsor',$arrin)->get()->toArray();    
            $alldown2=User::select('id')->whereIn('sponsor',$arrin)->where('active_status','Active')->get()->toArray(); 
            if(!empty($alldown)){
                $arrin = array_column($alldown,'id');
                $arrin2 = array_column($alldown2,'id');
                   
                $total=Investment::whereIn('user_id',$arrin2)->where('status','Active')->sum('amount');
                 $this->final_business += $total;
                $ret[$i]=$arrin;
                $i++;
              
            }else{
                $arrin = array();
            } 
        }   
       
        
    }
    




 public function reward_bonus()
    {  

    $allResult=User::where('active_status','Active')->where('power_leg','>',0)->where('vicker_leg','>',0)->cursor();
// print_r($allResult);die;
    if ($allResult) 
    {
     foreach ($allResult as $key => $value) 
     {
      
      $user_id=$value->id;
      $username=$value->username;
      $Power_leg=$value->power_leg;
      $Vicker_leg=$value->vicker_leg;
      $startDate=$value->adate;
      $endDate= date("Y-m-d H:i:s");
     $require_power_bunsess=array('0','1000','2500','5000','10000','20000','50000','100000','200000','500000','1000000','2000000','5000000','10000000','20000000','50000000','100000000','200000000','500000000');
     $require_vicker_bunsess=array('0','1000','2500','5000','10000','20000','50000','100000','200000','500000','1000000','2000000','5000000','10000000','20000000','50000000','100000000','200000000','500000000');
     $require_bonus=array('0','30','75','150','300','600','1500','3000','6000','15000','30000','60000','150000','300000','600000','1500000','3000000','6000000','15000000');
     $days = (strtotime($endDate) - strtotime($startDate)) / (60 * 60 * 24);
     
     for($p=1;$p<19;$p++)
      {
        $my_gen_busniess=$require_power_bunsess[$p];
        $my_vicker_busniess=$require_vicker_bunsess[$p];
        $bonus=$require_bonus[$p];
 
        
        $toatal_business=Reward::where('user_id',$user_id)->sum("total_business");
        $total_business=($toatal_business)?$toatal_business:0;
         $toatl60=$my_gen_busniess*60/100;
         $toatl40=$my_vicker_busniess*40/100;
        $power_leg=$Power_leg;
        $vicker_leg=$Vicker_leg;
        
        // $Require_power_leg=$my_gen_busniess*60/100;
        // $Require_vicker_leg=$my_gen_busniess*40/100;
        
        $check_level=Reward::where('user_id',$user_id)->where('level',$p)->count("id");
        // echo "<br>";
        //  echo $power_leg;
        //  echo "<br>";
        //  echo $vicker_leg;
        //  echo "<br>";
        //  echo $p;
        //  echo "<br>"; 
        //  echo "required p".$my_gen_busniess;
        //  echo "<br>"; 
        //  echo "required v".$my_vicker_busniess;
        //  echo "<br>";
        if($check_level<=0)
        {
            
         $goalstatus=($power_leg>=$my_gen_busniess  && $vicker_leg>=$my_vicker_busniess ? 'Achieved':'Pending');
         
           if ($goalstatus=='Achieved')
               {
               
              echo "<br>";
              echo "ID : ".$username."<br>";
              echo "Level : ".$p;
              
            $invoice = substr(str_shuffle("0123456789"), 0, 7);
            $data['remarks'] = 'Reward Profit';
            $data['amount'] = $bonus;
            $data['total_business'] = $my_gen_busniess;
            $data['level']=$p;
            $data['tdate'] = date("Y-m-d");
            $data['user_id_fk'] =$username;
            $data['user_id']=$user_id; 
            $data['status']='Approved'; 
            $income = Reward::firstOrCreate(['remarks' => 'Reward Profit','level'=>$p,'user_id'=>$user_id],$data);   
            
            User::where('id',$user_id)->update(['rank' =>$p]);
          
            $data['remarks'] = 'Reward Profit';
            $data['comm'] = $bonus;
            $data['amount'] = $bonus;
            $data['amt'] = $my_gen_busniess;
            $data['orderId'] = $invoice;
            $data['credit_type']=1;
            $data['level']=$p;
            $data['ttime'] = date("Y-m-d");
            $data['user_id_fk'] =$username;
            $data['user_id']=$user_id; 
          $income = Income::firstOrCreate(['remarks' => 'Reward Profit','level'=>$p,'user_id'=>$user_id],$data);   
    
    
    if($p==7)
    {
        $bonusOneTime = 2000;
        $data['remarks'] = 'Achievement Profit';
            $data['comm'] = $bonusOneTime;
            $data['amount'] = $bonusOneTime;
            $data['amt'] = $bonusOneTime;
            $data['orderId'] = $invoice;
            $data['credit_type']=1;
            $data['level']=$p;
            $data['ttime'] = date("Y-m-d");
            $data['user_id_fk'] =$username;
            $data['user_id']=$user_id; 
          $income = Income::firstOrCreate(['remarks' => 'Achievement Profit','level'=>$p,'user_id'=>$user_id],$data);   
    
               
    }
         
             }
          
    
    
               }
               
        }

          
      }
             
     
      
     
     }
    } 



public function generate_roi()
{

$allResult=Investment::where('status','Active')->where('roiCandition',0)->get();
$todays=Date("Y-m-d");
$day=Date("l");

if ($allResult)
{

 foreach ($allResult as $key => $value)
 {

  $userID=$value->user_id;
   $joining_amt = $value->amount;
   $plan = $value->plan;
   $startDate = $value->sdate;

  $userDetails=User::where('id',$userID)->where('active_status','Active')->first();
  $today=date("Y-m-d");
   $previous_date =date('Y-m-d',(strtotime ( '-1 day' , strtotime ( $today) ) ));

  if ($userDetails)
  {
     
     
        $total_get=$joining_amt*200/100;
        $total_profit_b = Income::where('user_id', $userID)->sum('comm');
        $total_profit=($total_profit_b)?$total_profit_b:0;
   
          $percent= 3;
        
          if ($joining_amt>=100 && $joining_amt<=500) 
           {
            $percent= 3;
           }
           elseif($joining_amt>=501 && $joining_amt<=1000)
           {
            $percent= 4;
           }
           elseif($joining_amt>=1001 && $joining_amt<=5000)
           {
            $percent= 5;
           }
           elseif($joining_amt>=5001 && $joining_amt<=15000)
           {
            $percent= 6;
           }
           elseif($joining_amt>=15001 && $joining_amt<=45000)
           {
            $percent= 7;
           }
         
           
       
       $roi = ($joining_amt*$percent/100);

       $max_income=$total_get;
       $n_m_t = $max_income - $total_profit;
       // dd($total_received);
        //  if($roi >= $n_m_t)
        //  {
        //      $roi = $n_m_t;
        //  }  
             $invoice = substr(str_shuffle("0123456789"), 0, 7);
      if ($roi>0)
      {

        echo "ID:".$userDetails->username." Package:".$joining_amt." Roi:".$roi."<br>";
         $data['remarks'] = 'Algorithmic Profit';
        $data['comm'] = $roi;
        $data['orderId'] = $invoice;
        $data['amt'] = $joining_amt;
        $data['invest_id']=$value->id;
        $data['level']=0;
        $data['credit_type']=1;
        $data['ttime'] = date("Y-m-d");
        $data['user_id_fk'] = $userDetails->username;
        $data['user_id']=$userDetails->id;
       $income = Income::firstOrCreate(['remarks' => 'Algorithmic Profit','ttime'=>date("Y-m-d"),'user_id'=>$userID,'invest_id'=>$value->id],$data);
       add_leadership_bonus($userDetails->id,$joining_amt);
      }
      else
      {
      Investment::where('id',$value->id)->update(['roiCandition' => 1]);
      }
      

  }

 }
 
}




}






  public function managePayout()

    {  

    date_default_timezone_set("Asia/Kolkata"); 
     Income::where('credit_type',1)->update(['credit_type' =>0]);


  $allResult=User::where('active_status','Active')->get();
    $todays=Date("Y-m-d");


    if ($allResult)
    {
        foreach ($allResult as $key => $value)
        {
        $userID=$value->id;
        $userName = $value->username;
        $userRank = $value->rank;
        
        
         $month= date('m', strtotime("-1 month"));
         
        $ttime ="2024-".$month."-22";
        $roi_bonus = Income::where('user_id',$userID)->where('remarks','Algorithmic Profit')->where('ttime',$ttime)->sum("comm");
        $farming_profit = Income::where('user_id',$userID)->where('remarks','Farming Profit')->where('ttime',$ttime)->sum("comm");
        $reward_profit = Income::where('user_id',$userID)->where('remarks','Reward Profit')->where('ttime',$ttime)->sum("comm");
        $achievement_profit = Income::where('user_id',$userID)->where('remarks','Achievement Profit')->where('ttime',$ttime)->sum("comm");
        $total = Income::where('user_id',$userID)->where('ttime',$ttime)->sum("comm");
        
        if($roi_bonus>0)
        {
            
            $invoice = substr(str_shuffle("0123456789"), 0, 7);
            $data['orderId'] = $invoice;
            $data['roi_bonus'] = $roi_bonus;
            $data['farming_profit'] = $farming_profit;
            $data['reward_profit'] = $reward_profit;
            $data['achievement_profit'] = $achievement_profit;
            $data['total'] = $total;
            $data['ttime'] = Date("Y-m-d");
            $data['created_at'] = date("Y-m-d H:i:s");
            $data['user_id_fk'] = $userName;
            $data['user_id']=$userID; 
          $income = Transaction::firstOrCreate(['ttime'=>Date("Y-m-d"),'user_id'=>$userID],$data);
           
        }
        
        
   


        }
    }
    

}







public function dailyIncentive()
{


    $allResult=User::where('active_status','Active')->get();
    $todays=Date("Y-m-d");


    if ($allResult)
    {
        foreach ($allResult as $key => $value)
        {
        $userID=$value->id;
        $userName = $value->username;
        $userRank = $value->rank;
        
        $rewardDetail = Reward::where('user_id',$userID)->orderBy('id','DESC')->limit(1)->first();
        
        if($rewardDetail)
        {
           
            $data['remarks'] = 'Royalty Bonus';
            $data['comm'] = $rewardDetail->amount;
            $data['level'] = $rewardDetail->level;
            $data['amt'] = $rewardDetail->amount;
            $data['invest_id']=$rewardDetail->id;
            $data['ttime'] = date("Y-m-d");
            $data['user_id_fk'] = $userName;
            $data['user_id']=$userID; 
          $income = Income::firstOrCreate(['remarks' => 'Royalty Bonus','ttime'=>date("Y-m-d"),'user_id'=>$userID],$data);
           
        }
        
        
   


        }
    }
}


public function transactionReport()
{


    $allResult=User::where('active_status','Active')->get();
    $todays=Date("Y-m-d");


    if ($allResult)
    {
        foreach ($allResult as $key => $value)
        {
        $userID=$value->id;
        $userName = $value->username;
        $userRank = $value->rank;
        
        
         $month= date('m', strtotime("-1 month"));
         
        $ttime ="2024-".$month."-21";
        $roi_bonus = Income::where('user_id',$userID)->where('remarks','Algorithmic Profit')->where('ttime',$ttime)->sum("comm");
        $farming_profit = Income::where('user_id',$userID)->where('remarks','Farming Profit')->where('ttime',$ttime)->sum("comm");
        $reward_profit = Income::where('user_id',$userID)->where('remarks','Reward Profit')->where('ttime',$ttime)->sum("comm");
        $total = Income::where('user_id',$userID)->where('ttime',$ttime)->sum("comm");
        
        if($roi_bonus>0)
        {
            
            $invoice = substr(str_shuffle("0123456789"), 0, 7);
            $data['orderId'] = $invoice;
            $data['roi_bonus'] = $roi_bonus;
            $data['farming_profit'] = $farming_profit;
            $data['reward_profit'] = $reward_profit;
            $data['total'] = $total;
            $data['ttime'] = Date("Y-m-d");
            $data['created_at'] = date("Y-m-d H:i:s");
            $data['user_id_fk'] = $userName;
            $data['user_id']=$userID; 
          $income = Transaction::firstOrCreate(['ttime'=>$ttime,'user_id'=>$userID],$data);
           
        }
        
        
   


        }
    }
}




public function dynamicupicallback()
{
    
 
  
//   echo "Hello";
//   print_r($response);die();
         $response = file_get_contents('php://input');
          date_default_timezone_set('Asia/Kolkata');
          $day=date('l');
          $todays=date("Y-m-d");
         $result = json_decode($response, true);
           
         \DB::table('activities')->insert(['data' =>$response]);  
         if(!empty($result))
         {
             
             if($result['status']=="completed")
             {
                 
              $orderId= $result['order_number'];
              $username= $result['order_name'];
              $amount= $result['source_amount'];
              $updateTrue = Investment::where('orderId',$orderId)->where('status','Pending')->update(['status' => 'Active']);
           
           if($updateTrue)  
           {
            
             $user_detail=User::where('username',$username)->first();
              if ($user_detail->active_status=="Pending")
              {   
              $user_update=array('active_status'=>'Active','adate'=>Date("Y-m-d H:i:s"),'package'=>$amount);
              User::where('id',$user_detail->id)->update($user_update);
            \DB::table('general_settings')->where('id',1)->update(['people_online'=>generalDetail()->people_online+1]);
            \DB::table('general_settings')->where('id',1)->update(['our_investors'=>generalDetail()->our_investors+1]);
             }
             else
             {
               $total=$user_detail->package+$amount;
                $user_update=array('package'=>$total,'active_status'=>'Active');
              User::where('id',$user_detail->id)->update($user_update); 
             }
                
                  
             \DB::table('general_settings')->where('id',1)->update(['total_fund_invested'=>generalDetail()->total_fund_invested+$amount]);
                  $plan ='BEGINNER';
                if ($amount>=100 && $amount<=500) 
                   {
                    $plan ='BEGINNER';
                   }
                   elseif($amount>=501 && $amount<=1000)
                   {
                    $plan ='STANDARD';
                   }
                   elseif($amount>=1001 && $amount<=5000)
                   {
                    $plan ='EXCLUSIVE';
                   }
                   elseif($amount>=5001 && $amount<=15000)
                   {
                    $plan ='ULTIMATE';
                   }
            
                   elseif($amount>=15001 && $amount<=45000)
                   {
                    $plan ='PREMIUM';
                   }
            
                   elseif($amount>=45001)
                   {
                    $plan ='PREMIUM';
                   }
                   
                  sendEmail($user_detail->email, 'Account Activated -'.siteName(), [
                    'name' => $user_detail->name,
                    'username' => $user_detail->username,
                    'amount' => $amount,
                    'plan' => $plan,
                    'date' => date("D, d M Y h:i:s a", strtotime(Date("Y-m-d H:i:s"))),
                    'viewpage' => 'activation',
    
                 ]);
                     
            

                    
           }
           
                 
             }
             else
             {
                if($result['status']=="mismatch" && $result['amount'] >= $result['invoice_total_sum']) 
                {
                    
                         
              $orderId= $result['order_number'];
              $username= $result['order_name'];
              $amount= $result['source_amount'];
              $updateTrue = Investment::where('orderId',$orderId)->where('status','Pending')->update(['status' => 'Active']);
           
           if($updateTrue)  
           {
            
             $user_detail=User::where('username',$username)->first();
              if ($user_detail->active_status=="Pending")
              {   
              $user_update=array('active_status'=>'Active','adate'=>Date("Y-m-d H:i:s"),'package'=>$amount);
              User::where('id',$user_detail->id)->update($user_update);
            \DB::table('general_settings')->where('id',1)->update(['people_online'=>generalDetail()->people_online+1]);
            \DB::table('general_settings')->where('id',1)->update(['our_investors'=>generalDetail()->our_investors+1]);
             }
             else
             {
               $total=$user_detail->package+$value->amount;
                $user_update=array('package'=>$total,'active_status'=>'Active');
              User::where('id',$user_detail->id)->update($user_update); 
             }
                
                  
             \DB::table('general_settings')->where('id',1)->update(['total_fund_invested'=>generalDetail()->total_fund_invested+$amount]);
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
              
                  
                  
                  sendEmail($user_detail->email, 'Account Activated -'.siteName(), [
                    'name' => $user_detail->name,
                    'username' => $user_detail->username,
                    'amount' => $amount,
                    'plan' => $plan,
                    'date' => date("D, d M Y h:i:s a", strtotime(Date("Y-m-d H:i:s"))),
                    'viewpage' => 'activation',
    
                 ]);
                     
          

                    
           }
           
           
                    
                }
             }
             
         }
        
            
         
        
           
}


        public  function my_binary($userid){
        $arrin=array($userid);
        $ret=array();
        // print_r($arrin);die();
        while(!empty($arrin)){
         $alldown= User::select('id')->whereIn('Parentid',$arrin)->get()->toArray();
         if(!empty($alldown)){
                $arrin = array_column($alldown,'id');
                $ret[]=$arrin;
              
              
            }else{
                $arrin = array();
            } 
        }
        // continue;    
        $final = array();         
        if(!empty($ret)){
            array_walk_recursive($ret, function($item, $key) use (&$final){
                $final[] = $item;
            });
        }

        return $final;
        
    }  

        public  function team_by_position($userid,$position){
        $ret=array();
        $get_position_user=User::where('Parentid',$userid)->where('position',$position)->first();
        if($get_position_user){
        
            $ret=$this->my_binary($get_position_user->id);
            $ret[]=$get_position_user->id;
        }
       
        return $ret;
    }







   public function my_level_team_count($userid,$level=10){
        $arrin=array($userid);
        $ret=array();

        $i=1;
        while(!empty($arrin)){
            $alldown=User::select('id')->whereIn('sponsor',$arrin)->get()->toArray();
            if(!empty($alldown)){
                $arrin = array_column($alldown,'id');
                $ret[$i]=$arrin;
                $i++;


            }else{
                $arrin = array();
            }
        }

        $final = array();
        if(!empty($ret)){
            array_walk_recursive($ret, function($item, $key) use (&$final){
                $final[] = $item;
            });
        }


        return $final;

    }

}
