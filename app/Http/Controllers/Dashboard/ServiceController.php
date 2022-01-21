<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
   public function index()
   {
      return view('pages.dashboard.service.index');
   }

   public function create()
   {
      return view('pages.dashboard.service.create');
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
      return view('pages.dashboard.service.edit');
   }

   public function update(Request $request, $id)
   {
      //
   }

   public function destroy($id)
   {
      //
   }
}