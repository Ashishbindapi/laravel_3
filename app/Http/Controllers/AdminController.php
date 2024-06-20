<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function store()
    {
        $data = [
            "first_name" => "Ashish",
            "last_name" => "Bindra",
            "email" => "Bindra@gmail.com",
            "mo_no" => 9044046526,
            "gender" => "male",
            "city_id" => 3,
            "address" => "Mirzapur",
            "type" => 1,
            "is_active" => 1,
        ];

        DB::table('admins')->insert($data);
        dd("Admin created Successfully", $data);
    }
}
