<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class frontEndController extends Controller
{
    public function homePage() {
        $a = 10;
        $b = 20;
        $c = $a+$b;
        $colours = ['orange','white','black','pink'];
        $users = User::all();       //select *from users;
        // $user = User::find(6);      //select *from users where user_id=1
        // $user = User::where('user_id','=',6)->get(); 
        //  $user = User::where('user_id','=',6)->first();
        // $user = User::WhereIn('user_id',[6,7])->get();
       return view('welcome',compact('c','colours','users'));


    }

    public function aboutUs() {
        $name = 'yadu';
        $newName = strtoupper($name);
        $age = 26;
        return view('aboutus',compact('newName','age'));

    }

    public function contactUs() {
        $colour = ['red'];
        $status = 1;
        return view('contactus',compact('colour','status'));
    }

    public function arrayOperations() {
        $colours = ['red','blue','yellow'];
        return view('arrays',compact('colours'));
    }

    public function createUser() {
        return view('users.create');
    }

    public function editUser($user_id) {
        $user = User::find($user_id);
        return view('users.edit',compact('user'));
    }

    public function saveUser() {
        $name = request('name');
        $email = request('email');
        $dob = request('dob');

        user::create([
            'name'=>$name,
            'email'=>$email,
            'dob'=>$dob,
        ]);

        return "form submitted";
    }

    public function updateUser() {
       $user_id = request('user_id');
        $user = User::find($user_id);
        $user->update([
            'name' => request('name'),
            'email' => request('email'),
            'dob' => date('Y-m-d',strtotime(request('dob'))),
                    
            'status' => request('status'), 
        ]);
        return "updated Successfully";
    }

    public function userfullDetail($user_id) {
        $user = User::find($user_id)->with('address');
        dd($user);
        return view('users.userFullDetail',compact('user'));
    }
    
    //Using Query Builder
    public function fetchUsers() {
        $users_query1= DB::table('users')->get(); //Fetch all the Data
        $users_query2 = DB::table('users')->where('name','SAVANNAH FAY')->first(); //Fetch a single data
        $email  = DB::table('users')->where('name','GREEN REICHEL')->value('email'); //Email only
        // $users_query4 = DB::table('users')->find(3); // To retrieve single record
        $users_query5 = User::find(3);
        $users_query6 = DB::table('users')->pluck('name','email');
        $users_query12 = DB::table('users')->orderBy('name','asc')->pluck('name');
        dd($users_query6);
    }

    /*
        When dealing with lots of data, 
        it is good practice to fetch in chunks from the database. 
        This reduces lag in the application.
        In this shot, we will learn how to fetch data from our database in chunks 
        using the chunk() method.
        
        The chunk() method is part of the query builder that fetches data from the 
        database in smaller numbers/amounts. This is suitable 
        when you have thousands of records your application is working with.
        
        The chunk() method accepts two parameters or arguments:
        1.Chunk value: The number of records you want to fetch at a time.
        2.The Callback function.
    */

    public function fetchdataByChunks() {
        $users_query7=DB::table('users')->orderBy('name','ASC')->chunk('5',function($users) {
           foreach($users as $user) {
            dd($user);
           }
        });
        dd($users_query7);
    }

    /* 
        The query builder also provides a variety of methods for 
        retrieving aggregate values like count, max, min, avg, and sum. 
        You may call any of these methods after constructing your query:
    */
   
    public function aggregates() {
        $users_query8 = DB::table('users')->count();
        $users_query9 = DB::table('users')->max('user_id');
        $users_query10 = DB::table('users')->min('user_id');
        $users_query11 = DB::table('users')->avg('user_id');
        dd($users_query11);
    }

    public function selectStatements() {
        $users_query13 = DB::table('users')
        ->select('name','email as $user_email')
        ->get();
        
        $users_query14 = DB::table('users')->distinct()->get(); //Distinct elements only
        dd($users_query14);

        $users_query15 = DB::table('users')->select('name'); //If you already have a query builder 
        $user = $users_query15->addSelect('age')->get();//instance and you wish to add a column to its existing select clause, 
                                                             //you may use the addSelect method:
    }

    public function rawExpressions() {
        $users_query16 = DB::table('users')
             ->select(DB::raw('count(*) as user_count, status'))
             ->where('status', '<>', 1)
             ->groupBy('status')
             ->get();
             dd($users_query16);

    }

}
