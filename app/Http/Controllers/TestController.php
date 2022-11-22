<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
   public function index()
   {
      $datas = Test::all();
      return response()->json([
         'datas' => $datas,
      ]);
   }
}
