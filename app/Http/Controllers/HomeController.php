<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){

        $services=DB::table('services')->get();
        $feature1=DB::table('features')->where('feature_category','feature1')->get();
        $feature2=DB::table('features')->where('feature_category','feature2')->get();
        $feature3=DB::table('features')->where('feature_category','feature3')->get();
        $plans=DB::table('plan_category')->get();
        // dd($plans);
        // $plan_subtitle=DB::table('plan_subtitle')->where('plan_category_id',$plans->id)->get();
        // dd($plan_subtitle);
        $questions=DB::table('questions')->get();
        $answers=DB::table('answer')->get();
        $reviews=DB::table('reviews')->get();
        $team=DB::table('team')->get();
        $question1=DB::table('questions')->where('question_category','General Questions')->get();
        $question2=DB::table('questions')->where('question_category','Privacy & Security')->get();
        $confidant=DB::table('confidant')->get();
        return view('home.index',compact('services','feature1','feature2','feature3','plans','questions','answers','reviews','team','question1','question2','confidant'));
    }
}
