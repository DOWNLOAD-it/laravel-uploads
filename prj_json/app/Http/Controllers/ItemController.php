<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\json_data;

class ItemController extends Controller
{
    public function index(){
        $data=[
            'title'=>'json test',
            'data'=>[
                'test one'=>'one 1',
                'test two'=>'two 2',
                'test three'=>'three 3'
            ]
            ];

        $item = json_data::create($data);

        dd($item->data);
    }
}
