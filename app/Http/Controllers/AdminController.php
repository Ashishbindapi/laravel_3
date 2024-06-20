<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function store()
    {
        $data = [
            "first_name" => "Ashish Bindra",
            "last_name" => "Ji",
            "email" => "ashishbindra@gmail.com",
            "mo_no" => 9044046526,
            "gender" => "male",
            "city_id" => 3,
            "address" => "Mirzapur",
            "type" => 0,
            "is_active" => 1,
        ];

        DB::table('admins')->insert($data);
        dd("Admin created Successfully", $data);
    }

    public function list()
    {
        $admins = DB::table('admins')->get();
        foreach($admins as $admin){
            dump($admin);
        }
        // dd($admins->toArray());
        // dd($admins[1], $admins[0]->email);
    }

    public function update()
    {
        $id = 1;
        $email = "ashishbindra648@gmail.com";
        $data = [
            "first_name" => "Ashish",
            "last_name" => "Bindra Ji",
            "email" => "ashishbindra@gmail.com",
            "mo_no" => 9044046526,
            "gender" => "male",
            "city_id" => 2,
            "address" => "Mirzapur",
            "type" => 0,
            "is_active" => 1,
            "created_at" => now(),
            "updated_at" => now()
        ];

        DB::table('admins')->where('email', $email)->update($data);
        dd("Admin Updated Successfully", $data);
    }

    public function delete()
    {
        $id = 1;
        DB::table('admins')->where('id',$id)->delete();
        dd("Admin Deleted Successfully");
    }
}
