<?php

namespace ZigKart\Http\Controllers\Dealer;

use Illuminate\Http\Request;
use ZigKart\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use ZigKart\Models\Pages;
use ZigKart\Models\Settings;
use ZigKart\Models\Product;
use ZigKart\Models\Members;
use ZigKart\Models\Category;
use ZigKart\Models\Causes;
use Auth;
use Mail;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
		
    }
    public function admin()
    {
	  $total_products = 0;// Product::gettotalProducts();
	  $total_orders = 0; // Product::totalCheckout();
		
		$approved = Product::itemapprovedCheck(1);
		$unapproved = Product::itemapprovedCheck(0);	 
	  
	  $data = array('total_products' => $total_products, 'total_orders' => $total_orders, 'approved' => $approved, 'unapproved' => $unapproved);
	  return view('dealer.index')->with($data);		
    }
}
