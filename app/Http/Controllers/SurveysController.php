<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\Survey;
use Carbon\Carbon;

class SurveysController extends Controller
{
    /**
     * Retreives the current user's average survey responses as index page
     *
     */
    public function index()
    {
      $user = \Auth::user();
      $surveyAverages = $user->getSurveyAverages();

      return $surveyAverages;
    }

    /**
     * Instantiates a new survey to programmatically pass survey questions to Javascript
     *
     */
    public function newSurvey()
    {
      $survey = new Survey();
      for ($i=1; $i < 34; $i++) { 
        $funcname = "question_".$i."_Content";
        $survey['question_'.$i]=$survey->$funcname();
      }
      
      return $survey;
    }

    /**
     * Takes form input to create new survey for current user
     *
     */
    public function create()
    {
      $input = Request::all();
      $input['user_id'] = \Auth::user()->id;
      $input['time_taken'] = Carbon::now();

      $survey = Survey::create($input);

      return $survey;
    }

    /**
     * Retreives the current user's survey based on id
     *
     */
    public function show($id)
    {
      $survey = Survey::find($id);

      return $survey;
    }
}
