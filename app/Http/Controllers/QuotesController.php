<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quote;
class QuotesController extends Controller
{
    public function __construct(){

    }

    public function index(){
      $quotes = json_encode(Quote::all());
      return $quotes;
    }
}
