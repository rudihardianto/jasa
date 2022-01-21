<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyOrderController extends Controller
{
   public function index()
   {
      return view('pages.dashboard.order.index');
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
      return view('pages.dashboard.order.detail');
   }

   public function edit($id)
   {
      return view('pages.dashboard.order.edit');
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
   public function accepted($id)
   {
      ;
   }

   public function rejected($id)
   {
      ;
   }

}