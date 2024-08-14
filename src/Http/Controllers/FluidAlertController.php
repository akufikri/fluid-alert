<?php

namespace akufikri\Fluidalert\Http\Controllers;

use akufikri\Fluidalert\Events\FluidAlertNew;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FluidAlertController extends Controller
{
      public function send(Request $request)
      {
            event(new FluidAlertNew($request->all()));
            return response()->json(['status' => 'success']);
      }
}