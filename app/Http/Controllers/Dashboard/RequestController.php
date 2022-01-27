<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class RequestController extends Controller
{
   public function __construct()
   {
      $this->middleware('auth');
   }

   public function index()
   {
      $orders = Order::where('buyer_id', Auth::user()->id)->orderBy('created_at', 'desc')->get();

      return view('pages.dashboard.request.index', compact('orders'));
   }

   public function show($id)
   {
      //    detail
      $order = Order::where('id', $id)->first();

      return view('pages.dashboard.request.detail', compact('order'));
   }

   //    custom
   public function approve($id)
   {
      $order = Order::where('id', $id)->first();

      //   update order
      $order                  = Order::find($order['id']);
      $order->order_status_id = 1;
      $order->save();

      Alert::success('Data berhasil di HAPUS');

      return redirect()->route('member.request.index');
   }
}
