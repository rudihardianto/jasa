<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\AdvantageService;
use App\Models\AdvantageUser;
use App\Models\Order;
use App\Models\Service;
use App\Models\Tagline;
use App\Models\ThumbnailService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use RealRashid\SweetAlert\Facades\Alert;

class LandingController extends Controller
{
   public function index()
   {
      $services = Service::orderBy('created_at', 'desc')->get();

      return view('pages.landing.index', compact('services'));
   }

   //    custom
   public function explore()
   {
      $services = Service::orderBy('created_at', 'desc')->get();

      return view('pages.landing.explore', compact('services'));
   }

   public function detail($id)
   {
      $service           = Service::orderBy('id', $id)->first();
      $thumbnail         = ThumbnailService::where('service_id', $id)->get();
      $advantage_user    = AdvantageUser::where('service_id', $id)->get();
      $advantage_service = AdvantageService::where('service_id', $id)->get();
      $tagline           = Tagline::where('service_id', $id)->get();

      return view('pages.landing.detail', compact('service', 'thumbnail', 'advantage_user', 'advantage_service', 'tagline'));
   }

   public function booking($id)
   {
      $service    = Service::where('id', $id)->first();
      $user_buyer = Auth::user()->id;

      //   validasi booking
      if ($service->users_id == $user_buyer) {
         Alert::warning('Tidak bisa order service sendiri');

         return back();
      }

      $order                = new Order();
      $order->buyer_id      = $user_buyer;
      $order->freelancer_id = $service->user->id;
      $order->service_id    = $service->id;
      $order->file          = null;
      $order->note          = null;
      $order->expired       = Date('y-m-d', strtotime('+3 Days'));
      $order->status_id     = 4;
      $order->save();

      $order_detail = Order::where('id', $order->id)->first();

      return redirect()->route('detail_booking.landing', $order_detail);
   }

   public function detail_booking($id)
   {
      $order = Order::where('id', $id)->first();

      return view('pages.landing.booking', compact('order'));
   }

}
