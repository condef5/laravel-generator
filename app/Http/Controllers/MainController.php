<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ponencia;

class MainController extends Controller
{
	public function index()
	{
		$ponencias = Ponencia::all();
		return view('main', compact('ponencias'));
	}
}
