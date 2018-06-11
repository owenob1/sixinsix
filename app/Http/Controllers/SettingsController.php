<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Stripe_Customer;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index() {
        $user = \Auth::user();
        if($user->subscribed('main')){
            echo "sdfsdf";
        }else {
           echo "sdfsdfsdfsdfsf";
        }
//        if ($user->subscription('main')->onTrial()) {
//            echo "sdfsdf";
//        }else{
//            echo "exit";
//        }
//        exit;

            return view('platform.pages.settings.index')->with(['user' => $user]);
    }
    public function subscription(Request $request){
        $user = \Auth::user();
        $plan = env('STRIPE_PLAN');
        $user->newSubscription('main',$plan)->create($request->token);
        if ($user->subscribed('main')) {

/****** Stripe trial ends date set ***************/
//            $current = Carbon::now();
//            $trial = env('STRIPE_TRIAL');
//            $trialExpires = Carbon::now()->subMonths($trial);
//            $subscription = $user->subscription('main');
//            $subscription->trial_ends_at = $trialExpires;
//            $subscription->ends_at = $trialExpires->timestamp;
//            $subscription->save();
//
//            $user->trial_ends_at = $trialExpires;
//            $user->save();

/****** Stripe trial ends date set ***************/
            return response()->json(['msg'=>'Successfully subscribed']);
        }
        return response()->json(['msg'=>'Oops there is something error with your input']);

    }
    public  function cancelSubscription(){
        $user = \Auth::user();
        $user->subscription('main')->cancel();
        return redirect()->route('platform.settings')->with('success_cancel', 'Your subscription has been cancelled successfully.');
    }

    public function resumeSubscription(){
        $user = \Auth::user();
        $user->subscription('main')->resume();
        return redirect()->route('platform.settings')->with('success_cancel', 'Your subscription has been resumed successfully.');

    }


}
