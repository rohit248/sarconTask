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


    public function changeSessionState(Request $request, $conference_id, $session_id)
    {
      $validated = $request->validate([
          'state' => 'required|in:0,1',
      ]);

      //TODO DB update Here

      $data = [
        'session_id' => $session_id,
        'conference_id' => $conference_id,
        'state' => $request->get('state')
      ];

      //dispatch event
  

      return $data;
    }
}
