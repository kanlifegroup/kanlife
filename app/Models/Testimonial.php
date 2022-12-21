<?php

namespace ZigKart\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Testimonial extends Model
{
	/* testimonials */	
	
	public static function allTestimonial()
  {
    $value=DB::table('testimonials')->orderBy('id', 'desc')->get(); 
    return $value;	
  }
  
  public static function getTestimonial($id)
  {
    $value=DB::table('testimonials')->where('id','=',$id)->get(); 
    return $value;	
  }
  
  public static function insertTestimonial($data)
  {   
    DB::table('testimonials')->insert($data); 
  }
  
  public static function deleteTestimonial($id)
  {	
	  DB::table('testimonials')->where('id', '=', $id)->delete();
  }    
  
  public static function editTestimonial($id)
  {
    $value = DB::table('testimonials')
      ->where('id', '=', $id)
      ->first();
	  return $value;
  }  
  
  public static function updateTestimonial($id, $data)
  {
    DB::table('testimonials')
      ->where('id', '=', $id)
      ->update($data);
  }
  
  public static function getlatestData($take=6)
  {
    $value=DB::table('testimonials')->orderBy('id', 'desc')->take($take)->get(); 
    return $value;
	}

  /* testimonials */
  
  
  
	
	
	
	
	
  
  
  
  
}
