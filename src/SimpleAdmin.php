<?php

namespace CUONGNQ\SimpleAdmin;

use Illuminate\Http\Request;

class SimpleAdmin extends Controller
{
    public function __construct() {
        $this->middleware('auth');
      }

      /**
      * Display a listing of the resource.
      *
      * @return Response
      */
      public function index()
      {
        $users = User::all();

        return view('simpleAdmin::admin')->with('users', $users);
      }
}
