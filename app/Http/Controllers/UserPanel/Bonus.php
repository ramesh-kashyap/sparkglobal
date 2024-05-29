<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Income;
use App\Models\Reward;
use App\Models\Transaction;
use App\Models\Boost_direct;
use App\Models\User_trade;
use Illuminate\Support\Facades\DB;
use Auth;
use Log;
use DateTime;
use Redirect;
use Hash;
use Validator;

class Bonus extends Controller
{
    public function index(Request $request)
    {
       $user=Auth::user();

          $limit = $request->limit ? $request->limit : paginationLimit();
            $status = $request->status ? $request->status : null;
            $search = $request->search ? $request->search : null;
            $notes = Income::where('user_id',$user->id)->where('remarks','Farming Profit')->orderBy('id', 'DESC');
           if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('rname', 'LIKE', '%' . $search . '%')
              ->orWhere('ttime', 'LIKE', '%' . $search . '%')
              ->orWhere('level', 'LIKE', '%' . $search . '%')
              ->orWhere('amt', 'LIKE', '%' . $search . '%')
              ->orWhere('comm', 'LIKE', '%' . $search . '%');
            });

      }
            $notes = $notes->paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);
        $this->data['level_income'] =$notes;
        $this->data['search'] =$search;
        $this->data['page'] = 'user.bonus.level-income';
        return $this->dashboard_layout();


    }
    
   public function validateDate($date)
{
    $d = DateTime::createFromFormat('d/m/Y', $date);
    return $d && $d->format('d/m/Y') == $date;
}

   public function all_incomes(Request $request)
    {
       $user=Auth::user();

          $limit = $request->limit ? $request->limit : paginationLimit();
            $status = $request->status ? $request->status : null;
            $search = $request->search ? $request->search : null;
            
            
               $newsearch =date("Y-m-d", strtotime($search));;
           
    
            $notes = Transaction::where('user_id',$user->id)->orderBy('id', 'DESC');
           if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search,$newsearch){
              $q->Where('roi_bonus', 'LIKE', '%' . $search . '%')
              ->orWhere('ttime', 'LIKE', '%' . $newsearch . '%')
              ->orWhere('roi_bonus', 'LIKE', '%' . $search . '%')
              ->orWhere('farming_profit', 'LIKE', '%' . $search . '%')
              ->orWhere('reward_profit', 'LIKE', '%' . $search . '%');
            });

      }
            $notes = $notes->paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);
        $this->data['level_income'] =$notes;
        $this->data['search'] =$search;
        $this->data['page'] = 'user.bonus.all-income';
        return $this->dashboard_layout();


    }

    public function cashback_income(Request $request)
    {
       $user=Auth::user();

          $limit = $request->limit ? $request->limit : paginationLimit();
            $status = $request->status ? $request->status : null;
            $search = $request->search ? $request->search : null;
            $notes = Income::where('user_id',$user->id)->where('remarks','Sponsorship Bonus')->orderBy('id', 'DESC');
           if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('rname', 'LIKE', '%' . $search . '%')
              ->orWhere('ttime', 'LIKE', '%' . $search . '%')
              ->orWhere('level', 'LIKE', '%' . $search . '%')
              ->orWhere('amt', 'LIKE', '%' . $search . '%')
              ->orWhere('comm', 'LIKE', '%' . $search . '%');
            });

      }
            $notes = $notes->paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);
        $this->data['level_income'] =$notes;
        $this->data['search'] =$search;
        $this->data['page'] = 'user.bonus.cashback-income';
        return $this->dashboard_layout();


    }
    
    
      public function reward_status(Request $request)
    {
    $user=Auth::user();

    $this->data['first_lvl'] =  Reward::where('user_id',$user->id)->where('level',1)->count();
    $this->data['second_lvl'] = Reward::where('user_id',$user->id)->where('level',2)->count();
    $this->data['third_lvl'] =  Reward::where('user_id',$user->id)->where('level',3)->count();
    $this->data['four_lvl'] =   Reward::where('user_id',$user->id)->where('level',4)->count();
    $this->data['five_lvl'] =   Reward::where('user_id',$user->id)->where('level',5)->count();
    $this->data['six_lvl'] =    Reward::where('user_id',$user->id)->where('level',6)->count();
    $this->data['seven_lvl'] =  Reward::where('user_id',$user->id)->where('level',7)->count();
    $this->data['eight_lvl'] =  Reward::where('user_id',$user->id)->where('level',8)->count();
    $this->data['nine_lvl'] =   Reward::where('user_id',$user->id)->where('level',9)->count();
    $this->data['ten_lvl'] =    Reward::where('user_id',$user->id)->where('level',10)->count();
    $this->data['eleven_lvl'] = Reward::where('user_id',$user->id)->where('level',11)->count();
    $this->data['twel_lvl'] = Reward::where('user_id',$user->id)->where('level',12)->count();
    $this->data['thirteen_lvl'] = Reward::where('user_id',$user->id)->where('level',13)->count();
    $this->data['fourteen_lvl'] = Reward::where('user_id',$user->id)->where('level',14)->count();
    $this->data['fifteen_lvl'] = Reward::where('user_id',$user->id)->where('level',15)->count();
    $this->data['sixteen_lvl'] = Reward::where('user_id',$user->id)->where('level',16)->count();
    $this->data['seventeen_lvl'] = Reward::where('user_id',$user->id)->where('level',17)->count();
    $this->data['eighteen_lvl'] = Reward::where('user_id',$user->id)->where('level',18)->count();
    
    $this->data['page'] = 'user.bonus.reward-status';
    return $this->dashboard_layout();

    }


    public function activitiesBonus(Request $request)
    {
       $user=Auth::user();

          $limit = $request->limit ? $request->limit : paginationLimit();
            $status = $request->status ? $request->status : null;
            $search = $request->search ? $request->search : null;
            $notes = Income::where('user_id',$user->id)->where('remarks','Activities Bonus')->orderBy('id', 'DESC');
           if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('rname', 'LIKE', '%' . $search . '%')
              ->orWhere('ttime', 'LIKE', '%' . $search . '%')
              ->orWhere('level', 'LIKE', '%' . $search . '%')
              ->orWhere('amt', 'LIKE', '%' . $search . '%')
              ->orWhere('comm', 'LIKE', '%' . $search . '%');
            });

      }
            $notes = $notes->paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);
        $this->data['level_income'] =$notes;
        $this->data['search'] =$search;
        $this->data['page'] = 'user.bonus.activitiesBonus';
        return $this->dashboard_layout();


    }


    public function gap_margin_bonus(Request $request)
    {
       $user=Auth::user();

          $limit = $request->limit ? $request->limit : paginationLimit();
            $status = $request->status ? $request->status : null;
            $search = $request->search ? $request->search : null;
            $notes = Income::where('user_id',$user->id)->where('remarks','Gap Margin Bonus')->orderBy('id', 'DESC');
           if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('rname', 'LIKE', '%' . $search . '%')
              ->orWhere('ttime', 'LIKE', '%' . $search . '%')
              ->orWhere('level', 'LIKE', '%' . $search . '%')
              ->orWhere('amt', 'LIKE', '%' . $search . '%')
              ->orWhere('comm', 'LIKE', '%' . $search . '%');
            });

      }
            $notes = $notes->paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);
        $this->data['level_income'] =$notes;
        $this->data['search'] =$search;
        $this->data['page'] = 'user.bonus.gap-margin-bonus';
        return $this->dashboard_layout();


    }



    public function dailyIncentive(Request $request)
    {
       $user=Auth::user();

          $limit = $request->limit ? $request->limit : paginationLimit();
            $status = $request->status ? $request->status : null;
            $search = $request->search ? $request->search : null;
            $notes = Income::where('user_id',$user->id)->where('remarks','Leadership Bonus')->orderBy('id', 'DESC');
           if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('rname', 'LIKE', '%' . $search . '%')
              ->orWhere('ttime', 'LIKE', '%' . $search . '%')
              ->orWhere('level', 'LIKE', '%' . $search . '%')
              ->orWhere('amt', 'LIKE', '%' . $search . '%')
              ->orWhere('comm', 'LIKE', '%' . $search . '%');
            });

      }
            $notes = $notes->paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);
        $this->data['level_income'] =$notes;
        $this->data['search'] =$search;
        $this->data['page'] = 'user.bonus.daily-incentive';
        return $this->dashboard_layout();


    }



    public function reward_income(Request $request)
    {
           $user=Auth::user();


          $limit = $request->limit ? $request->limit : paginationLimit();
            $status = $request->status ? $request->status : null;
            $search = $request->search ? $request->search : null;
            $notes = Income::where('user_id',$user->id)->where('remarks','Reward Profit')->orderBy('id', 'DESC');

           if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('ttime', 'LIKE', '%' . $search . '%')
              ->orWhere('amt', 'LIKE', '%' . $search . '%')
              ->orWhere('rname', 'LIKE', '%' . $search . '%')
              ->orWhere('comm', 'LIKE', '%' . $search . '%');
            });

      }

            $notes = $notes->paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);

    $this->data['level_income'] =$notes;
    $this->data['search'] =$search;
    $this->data['page'] = 'user.bonus.reward-bonus';
    return $this->dashboard_layout();

    }

 

    public function roi_income(Request $request)
    {
           $user=Auth::user();


          $limit = $request->limit ? $request->limit :  paginationLimit();
            $status = $request->status ? $request->status : null;
            $search = $request->search ? $request->search : null;
            $notes = Income::where('user_id',$user->id)->where('remarks','Algorithmic Profit')->orderBy('id', 'DESC');
           if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('ttime', 'LIKE', '%' . $search . '%')
              ->orWhere('remarks', 'LIKE', '%' . $search . '%')
              ->orWhere('amt', 'LIKE', '%' . $search . '%')
              ->orWhere('rname', 'LIKE', '%' . $search . '%')
              ->orWhere('comm', 'LIKE', '%' . $search . '%');
            });

      }

            $notes = $notes->paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);

    $this->data['level_income'] =$notes;
    $this->data['search'] =$search;
    $this->data['page'] = 'user.bonus.roi-bonus';
    return $this->dashboard_layout();

    }


}
