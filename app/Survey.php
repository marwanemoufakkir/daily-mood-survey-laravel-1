<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
  protected $fillable = [
    'user_id','question_1_response', 'question_2_response', 'question_3_response', 'question_4_response','question_5_response','time_taken'
  ];


  /**
   * Returns the various survey questions to be used in Javascript
   *
   * @return string
   */
  public function question_1_Content()
  {
    return "Select the most suitable for your processes?";
  }

  public function question_2_Content()
  {
    return "Select the most suitable for your processes?";
  }

  public function question_3_Content()
  {
    return "Select the most suitable for your processes?";
  }

  public function question_4_Content()
  {
    return "Select the most suitable for your processes?";
  }
  public function question_5_Content()
  {
    return "Select most suitable for your organisation?";
  }
  public function question_6_Content()
  {
    return "Select most suitable for handling data?";
  }
  public function question_7_Content()
  {
    return "Select most suitable for handling data?";
  }
  public function question_8_Content()
  {
    return "Select most suitable for handling data in terms of infrastructure?";
  }
  public function question_9_Content()
  {
    return "Select most suitable for handling data?";
  }
  public function question_10_Content()
  {
    return "Select most suitable for handling data?";
  }
  public function question_11_Content()
  {
    return "Please, select most relevant?";
  }
  public function question_12_Content()
  {
    return "Please, select most relevant?";
  }
  public function question_13_Content()
  {
    return "Please, select most relevant?";
  }
  public function question_14_Content()
  {
    return "Select most suitable for your organisation?";
  }
  public function question_15_Content()
  {
    return "Select most suitable for your organisation?";
  }
  public function question_16_Content()
  {
    return "Select most suitable for your organisation?";
  }
  public function question_17_Content()
  {
    return "Select most suitable for your organisation?";
  }
  public function question_18_Content()
  {
    return "Select most suitable for your organisation?";
  }
  public function question_19_Content()
  {
    return "Select most suitable for your organisation?";
  }
  public function question_20_Content()
  {
    return "Select most suitable for your organisation?";
  }
  public function question_21_Content()
  {
    return "Select most suitable for your organisation?";
  }
  public function question_22_Content()
  {
    return "Select most suitable for your organisation?";
  }
  public function question_23_Content()
  {
    return "Select most suitable for your organisation?";
  }
  public function question_24_Content()
  {
    return "Select most suitable for your organisation?";
  }
  public function question_25_Content()
  {
    return "Select most suitable for your organisation?";
  }
  public function question_26_Content()
  {
    return "Select most suitable for your organisation?";
  }
  public function question_27_Content()
  {
    return "Select most suitable for your organisation?";
  }
  public function question_28_Content()
  {
    return "Select most suitable for your organisation?";
  }
  public function question_29_Content()
  {
    return "Select most suitable for your organisation?";
  }
  public function question_30_Content()
  {
    return "Select most suitable for your organisation?";
  }
  public function question_31_Content()
  {
    return "Select most suitable for your organisation?";
  }
  public function question_32_Content()
  {
    return "Select most suitable for your organisation?";
  }  
  public function question_33_Content()
  {
    return "Select most suitable for your organisation?";
  }
  /**
   * Returns the user that the survey belongs to
   *
   * @return object
   */
  public function user()
  {
    return $this->belongsTo('App\User');
  }
}
