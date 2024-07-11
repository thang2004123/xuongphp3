<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class UserController extends Controller{
    public function listUser(){
       $listUsers = DB::table('users')
       ->join('phongban','users.phongban_id','=','phongban.id')
       ->select('users.id','users.name','users.email','users.phongban_id','phongban.ten_donvi')
       ->get();
       return view('users/listUsers')->with(['listUsers'=> $listUsers]);
    }
   public function addUser(){
   $phongBan = DB::table('phongban')
   ->select('id','ten_donvi')
   ->get();
   return view('users/addUsers  ')->with([
    'phongBan'=> $phongBan
   ]);
   }

   public function addPostUser(Request $req){
    $data = [
        'name' => $req->name,
        'email' => $req->email,
        'phongban_id' => $req->phongban,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
    ];
    DB::table('users')->insert($data);
    return redirect()->route('users.listUser');
   }

   public function deleteUser($userId){
    DB::table('users')->where('id', $userId)->delete();
    return redirect()->route('users.listUser');
   }
  
    public function updateUsers($userId){
        $phongBan = DB::table('phongban')
        ->select('id','ten_donvi')
        ->get();
        $user = DB::table('users')
        ->where('id',$userId)
        ->first();
        return view('users/updateUsers')->with([
            'phongBan' => $phongBan,
            'user' => $user
            ]);
    }

    public function updatePostUsers(request $req){
        $data = [
            'name' => $req->name,
            'email' => $req->email,
            'phongban_id' => $req->phongban,
            'tuoi' =>$req->tuoi,
            'songaynghi'=>$req->songaynghi,
            'updated_at' => Carbon::now()
            ];
            DB::table('users')->where('id',$req->userId)->update($data);
            return redirect()->route('users.listUser');
    }
}
