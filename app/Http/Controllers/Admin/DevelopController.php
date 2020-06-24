<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DevelopController extends Controller
{
    public function add() 
    {
        return view('admin.develop.create');
    }
    
    public function create(Request $request)
  {
      // admin/news/createにリダイレクトする
      return redirect('admin/news/create');
  }
}
