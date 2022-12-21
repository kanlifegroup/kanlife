<?php

namespace ZigKart\Http\Controllers\Admin;

use Illuminate\Http\Request;
use ZigKart\Http\Controllers\Controller;
use Session;
use ZigKart\Models\Testimonial;
use ZigKart\Models\Settings;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Auth;

class TestimonialController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
	
	/* Testimonial */
	
	public function view_testimonial()
  {
		$testimonialData['view'] = Testimonial::allTestimonial();
		return view('admin.testimonials',[ 'testimonialData' => $testimonialData]);
  }
	
	public function add_testimonial()
	{
    return view('admin.add-testimonial');
	}
	
	public function save_testimonial(Request $request)
	{
    $name = $request->input('name');
    $designation = $request->input('designation');
    $description = $request->input('description');
    $request->validate([
      'name' => 'required',
      'description' => 'required',
      'image' => 'mimes:jpeg,jpg,png'        
    ]);
    $rules = array(
      'name' => ['required'],
      'description' => ['required'],
      'image' => ['mimes:jpeg,jpg,png'],
    );
    $messsages = array();
		 
		$validator = Validator::make($request->all(), $rules,$messsages);
		
		if ($validator->fails()) 
		{
		 $failedRules = $validator->failed();
		 return back()->withInput()->withErrors($validator);
		} 
		else
		{
      if ($request->hasFile('image')) 
      {		   
        $_image = $request->file('image');
        $img_name = time() . '1.'.$_image->getClientOriginalExtension();
        $destinationPath = public_path('/storage/testimonial');
        $imagePath = $destinationPath. "/".  $img_name;
        $_image->move($destinationPath, $img_name);
        $image = $img_name;
		  }
		  else
		  {
        $image = "";
		  }
      $data = array('name' => $name, 'designation' => $designation, 'description' => $description, 'image' => $image);
      Testimonial::insertTestimonial($data);
      return redirect('/admin/testimonials')->with('success', 'Insert successfully.');
    }    
  }
  
  
  public function delete_testimonial($id)
  {     
    $id = base64_decode($id);
    Testimonial::deleteTestimonial($id);
	  return redirect()->back()->with('success', 'Delete successfully.');
  }  
  
  public function edit_testimonial($id)
	{
	   $id = base64_decode($id);
	   $edit['value'] = Testimonial::editTestimonial($id);
	   return view('admin.edit-testimonial', [ 'edit' => $edit]);
	}
	
	public function update_testimonial(Request $request)
	{	
    $name = $request->input('name');
    $designation = $request->input('designation');
    $description = $request->input('description');
    $id = base64_decode($request->input('id'));
    
    $request->validate([
      'name' => 'required',
      'description' => 'required', 
      'image' => 'mimes:jpeg,jpg,png'                
    ]);
    $rules = array(
      'name' => ['required'],
      'description' => ['required'],
      'image' => ['mimes:jpeg,jpg,png'],
    );		 
    $messsages = array();
		 
		$validator = Validator::make($request->all(), $rules,$messsages);
		
		if ($validator->fails()) 
		{
		 $failedRules = $validator->failed();
		 return back()->withInput()->withErrors($validator);
		} 
		else
		{
      if ($request->hasFile('image') && !empty($request->file('image'))) 
      {
        $_image = $request->file('image');
        $img_name = time() . '1.'.$_image->getClientOriginalExtension();
        $destinationPath = public_path('/storage/testimonial');
        $imagePath = $destinationPath. "/".  $img_name;
        $_image->move($destinationPath, $img_name);
        $image = $img_name;
		  }
      $data = array('name' => $name, 'designation' => $designation, 'description' => $description);
      if(isset($image))
      $data['image'] = $image;
      Testimonial::updateTestimonial($id, $data);
      return redirect('/admin/testimonials')->with('success', 'Update successfully.');
    }
	}
		
	/* Testimonial */
	
}
