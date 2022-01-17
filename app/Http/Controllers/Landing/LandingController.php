<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingController extends Controller
{
   public function index()
   {
      return view('pages.landing.index');
   }

   public function create()
   {
      //
   }

   public function store(Request $request)
   {
      //
   }

   public function show($id)
   {
      //
   }

   public function edit($id)
   {
      //
   }

   public function update(Request $request, $id)
   {
      //
   }

   public function destroy($id)
   {
      //
   }

   //    custom
   public function explore()
   {
      return view('pages.landing.explore');
   }

   public function detail($id)
   {
      return view('pages.landing.detail');
   }

   public function booking($id)
   {
      return view('pages.landing.booking');
   }

   public function detail_booking($id)
   {
      return view('pages.dashboard.order.detail');
   }

}