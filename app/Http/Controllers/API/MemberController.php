<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Model\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index(){
        $member=Member::all();
        $data=[
            "msg"=>'all member record',
            'status'=> 200,
            'data'=> $member
        ];
        return response()->json($data);
    }

    public function show($id){
        $member= Member::find($id);
        $data=[
            "msg"=>'one member record',
            'status'=> 201,
            'data'=> $member
        ];
        return response()->json($data);
    }
}
