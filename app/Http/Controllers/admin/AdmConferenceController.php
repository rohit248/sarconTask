<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdmConferenceController extends Controller
{
    public function list(Request $request)
    {
      return view('admin.conferences');
    }
}
