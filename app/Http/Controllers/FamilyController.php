<?php

namespace App\Http\Controllers;

use App\Family;
use Illuminate\Http\Request;

class FamilyController extends Controller
{
  public function index(){
    $family = Family::all();

    return view('family/index', [
      'family' => $family
    ]);
  }
}
