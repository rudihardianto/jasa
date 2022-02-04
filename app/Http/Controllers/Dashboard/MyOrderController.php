<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Order\UpdateOrderRequest;
use App\Models\AdvantageService;
use App\Models\AdvantageUser;
use App\Models\Order;
use App\Models\Service;
use App\Models\Tagline;
use App\Models\ThumbnailService;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class MyOrderController extends Controller
{
   public function __construct()
   {
      $this->middleware('auth');
   }

   public function index()
   {
      $orders = Order::where('freelancer_id', Auth::user()->id)->orderBy('created_at', 'desc')->get();

      return view('pages.dashboard.order.index', compact('orders'));
   }

   public function show(Order $order)
   {
      $service           = Service::where('id', $order['service_id'])->first();
      $thumbnail         = ThumbnailService::where('service_id', $order['service_id'])->get();
      $advantage_service = AdvantageService::where('service_id', $order['service_id'])->get();
      $advantage_user    = AdvantageUser::where('service_id', $order['service_id'])->get();
      $tagline           = Tagline::where('service_id', $order['service_id'])->get();

      return view('pages.dashboard.order.detail', compact('order', 'service', 'thumbnail', 'advantage_service', 'advantage_user', 'tagline'));
   }

   public function edit(Order $order)
   {
      return view('pages.dashboard.order.edit', compact('order'));
   }

   public function update(UpdateOrderRequest $request, Order $order)
   {
      $data = $request->all();
      if (isset($data['file'])) {
         $data['file'] = $request->file('file')->store(
            'assets/order/attachment', 'public'
         );
      }

      $order       = Order::find($order->id);
      $order->file = $data['file'];
      $order->note = $data['note'];
      $order->save();

      Alert::success('Order Berhasil');

      return redirect()->route('member.order.index');
   }

   //    custom
   public function accepted($id)
   {
      $order                  = Order::find($id);
      $order->order_status_id = 2;
      $order->save();

      Alert::success('konfirmasi order diterima');

      return back();
   }

   public function rejected($id)
   {
      $order                  = Order::find($id);
      $order->order_status_id = 3;
      $order->save();

      Alert::success('tolak order berhasil');

      return back();
   }

}
