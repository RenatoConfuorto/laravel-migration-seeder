<?php

namespace App\Http\Controllers;

use App\Train;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function index(){
        $train_column_list = Train::getTableColumns('trains');
        $train_list = Train::all();
        $ignore_list = [
            'id',
            'created_at',
            'updated_at'
        ];
        $data = [
            'train_column_list' => $train_column_list,
            'train_list' => $train_list,
            'ignore_list' => $ignore_list,
        ];

        return view('home', compact('data'));
    }
    
    function today_s(){
        $today = Carbon::now()->toDateString();
        // dd($today);
        $train_column_list = Train::getTableColumns('trains');
        $train_list = Train::where('data_di_partenza', $today)->get();
        // dd($train_list);
        $ignore_list = [
            'id',
            'created_at',
            'updated_at'
        ];
        $data = [
            'train_column_list' => $train_column_list,
            'train_list' => $train_list,
            'ignore_list' => $ignore_list,
        ];

        return view('todayTrains', compact('data'));
    }

}