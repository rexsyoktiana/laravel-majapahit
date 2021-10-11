<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        if ($request->method() == "POST") {
            $checkProfile = Profile::where('user_id', '=', Auth::user()->id)->first();
            if (empty($checkProfile)) {
                $data = [
                    'nama'  =>  $request->nama,
                    'alamat'    =>  $request->alamat,
                    'pekerjaan' =>  $request->pekerjaan,
                    'pendidikan_terakhir'   =>  $request->pendidikan,
                    'no_telpon' =>  $request->no,
                    'user_id'   =>  Auth::user()->id,
                ];

                Profile::create($data);
            } else {
                $data = [
                    'nama'  =>  $request->nama,
                    'alamat'    =>  $request->alamat,
                    'pekerjaan' =>  $request->pekerjaan,
                    'pendidikan_terakhir'   =>  $request->pendidikan,
                    'no_telpon' =>  $request->no,
                ];

                Profile::where('user_id', '=', Auth::user()->id)->update($data);

            }
            return redirect()->route('profile');
        } else {
            $data = [
                'profile'   => Profile::where('user_id', '=', Auth::user()->id)->first(),
            ];
            return view('profile', $data);
        }
    }
}
