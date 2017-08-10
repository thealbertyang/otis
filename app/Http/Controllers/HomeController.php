<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function trainingObject($action = NULL){
        $pages = [];

        $pages[1] = "Welcome to the Sales Account Manager Training Program";      
        $pages[2] = "The Program At a Glance";  
        $pages[3] = "Program Timeline";
        $pages[4] = "Stage 1: Learning &amp; Observation";  
        $pages[5] = "Stage 2: Action Learning";  
        $pages[6] = "Training Conferences: Skills Training and Sales Boot Camp";  
        $pages[7] = "Training and Feedback Set The Path";  
        $pages[8] = "Feedback at a Glance";  
        $pages[9] = "Being a Success in Sales at Otis";  
        $pages[10] = "Sales On-Boarding: 30, 60, 90 Day Plan";  
        $pages[11] = "First Day on the New Job";  
        $pages[12] = "Otis Support Network";
        $pages[13] = "Your Personal Otis Support Network";
        $pages[14] = "Who Is In Your Otis Personal Office Support Network?";
        $pages[15] = "Otis Presentations";

        if($action == 'getLinks'){
            return $pages;
        }
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $trainingLinks = $this->trainingObject('getLinks');

        return view('pages.home', compact('trainingLinks'));
    }

    public function profile()
    {
        return view('pages.profile');
    }

    public function profile2()
    {
        return view('pages.profile2');
    }

    public function training($id = 1, $test = NULL)
    {

        $data = request()->all();

        if(request()['form_type'] == "regional_list"){

            //Grab current data and replace
            $user = Auth::User(); 
            $userAwards = json_decode($user->awards, TRUE);    
            $userAwards['regional-list'] = $data;

            $userId = $user->id; 

            $user = User::findOrNew($userId);  // if exist then update else insert
            
            $user->awards = json_encode($userAwards);
            $user->save();
        }

        if(request()['form_type'] == "office_list"){

            //Grab current data and replace
            $user = Auth::User(); 
            $userAwards = json_decode($user->awards, TRUE);    
            $userAwards['office-list'] = $data;

            $userId = $user->id; 

            $user = User::findOrNew($userId);  // if exist then update else insert
            
            $user->awards = json_encode($userAwards);
            $user->save();
        }

        if(request()['form_type'] == "office_org_chart"){

            //Grab current data and replace
            $user = Auth::User(); 
            $userAwards = json_decode($user->awards, TRUE);    
            $userAwards['office-org-chart'] = $data;

            $userId = $user->id; 

            $user = User::findOrNew($userId);  // if exist then update else insert
            
            $user->awards = json_encode($userAwards);
            $user->save();
        }

        if(request()['form_type'] == "regional_org_chart"){

            //Grab current data and replace
            $user = Auth::User(); 
            $userAwards = json_decode($user->awards, TRUE);    
            $userAwards['regional-org-chart'] = $data;

            $userId = $user->id; 

            $user = User::findOrNew($userId);  // if exist then update else insert
            
            $user->awards = json_encode($userAwards);
            $user->save();
        }

        $currentID = $id;
        $paginationNextID = ($id+1);
        $paginationPrevID = ($id-1);
        $nextDisabled = (view()->exists('training.'.$paginationNextID)) ? false : true;
        $prevDisabled = (view()->exists('training.'.$paginationPrevID)) ? false : true;

        $title = $this->trainingObject('getLinks');

        return view('training.'.$id, compact('currentID', 'paginationNextID', 'paginationPrevID', 'nextDisabled', 'prevDisabled', 'title'));

    }

    public function training2(Request $request, $id = 1)
    {
        

        $currentID = $id;
        $paginationNextID = ($id+1);
        $paginationPrevID = ($id-1);
        $nextDisabled = (view()->exists('training.'.$paginationNextID)) ? false : true;
        $prevDisabled = (view()->exists('training.'.$paginationPrevID)) ? false : true;

        $title = $this->trainingObject('getLinks');
        $forms = true;

        return view('training.'.$id, compact('currentID', 'paginationNextID', 'paginationPrevID', 'nextDisabled', 'prevDisabled', 'title', 'forms'));
    }
 
}
