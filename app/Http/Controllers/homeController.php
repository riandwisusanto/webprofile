<?php

namespace App\Http\Controllers;

use App\timModel;
use App\portofolioModel;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function loadTim()
    {
    	$tim = timModel::all();
    	return view('home', compact('tim'));
    }

    public function portofolioweb()
    {
    	$tim = timModel::all();
    	$web = portofolioModel::where(['id' => 'web'])->get();
    	return view('home', compact('web', 'tim'));	
    }

    public function portofolioapp()
    {
    	$tim = timModel::all();
    	$web = portofolioModel::where(['id' => 'web'])->get();
    	$app = portofolioModel::where(['id' => 'mobile'])->get();
    	return view('home', compact('app','web', 'tim'));	
    }
}