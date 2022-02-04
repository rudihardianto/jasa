<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
   public function __construct()
   {
      $this->middleware('auth');
   }

   public function index()
   {
      $orders   = Order::where('freelancer_id', Auth::user()->id)->get();
      $progress = Order::where('freelancer_id', Auth::user()->id)
         ->where('order_status_id', 2)
         ->count();
      $completed = Order::where('freelancer_id', Auth::user()->id)
         ->where('order_status_id', 1)
         ->count();
      $freelancer = Order::where('buyer_id', Auth::user()->id)
         ->where('order_status_id', 2)
         ->distinct('freelancer_id')
         ->count();

      return view('pages.dashboard.index', compact('orders', 'progress', 'completed', 'freelancer'));
   }
}