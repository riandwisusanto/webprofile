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
        $web = portofolioModel::where(['tipe' => 'web'])->get();
        return view('home', compact('web', 'tim')); 
    }

    public function portofolioapp()
    {
        $tim = timModel::all();
        $web = portofolioModel::where(['tipe' => 'web'])->get();
        $app = portofolioModel::where(['tipe' => 'mobile'])->get();
        return view('home', compact('app','web', 'tim'));   
    }

    public function portofoliodesk()
    {
        $tim = timModel::all();
        $web = portofolioModel::where(['tipe' => 'web'])->get();
        $app = portofolioModel::where(['tipe' => 'mobile'])->get();
        $desk = portofolioModel::where(['tipe' => 'mobile'])->get();
        return view('home', compact('app','web', 'tim', 'desk'));   
    }

    public function portofoliodetail($id){
        $port = portofolioModel::where(['id' => $id])->get();
        return view('portofolio', compact('port'));
    }
}