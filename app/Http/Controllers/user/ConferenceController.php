<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConferenceController extends Controller
{
  public function list(Request $request)
  {
    return view('user.conferences');
  }
}
