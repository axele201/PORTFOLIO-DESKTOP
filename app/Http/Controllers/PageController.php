<?php

namespace App\Http\Controllers;

use App\Models\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Profile;
use App\Models\Skills;

class PageController extends Controller
{
    public function index()
    {
        $profiles = Profile::first();
        $forums = Mail::all();
        $datas = [
            'profiles' => $profiles,
            'forums' => $forums,
        ];
        return view('index', $datas);
    }
    public function admin()
    {
        $date = Carbon::now('Asia/Jakarta');
        $formattedDate = $date->format('d M Y, H:i:s T');
        $data = [
            'content'=>'ADMIN.POST-LAY.dashboard',
            'formattedDate' => $formattedDate
        ];
        return view('ADMIN.PEMBUNGKUS-ADM.wrapper', $data);
    }
    public function profile()
    {
        $profiles = Profile::first();
        $date = Carbon::now('Asia/Jakarta');
        $formattedDate = $date->format('d M Y, H:i:s T');
        $data = [
            'content'=>'ADMIN.POST-LAY.profile',
            'formattedDate' => $formattedDate,
            'profiles' => $profiles,
        ];
        return view('ADMIN.PEMBUNGKUS-ADM.wrapper', $data);
    }
    public function NewProfile()
    {
        $date = Carbon::now('Asia/Jakarta');
        $formattedDate = $date->format('d M Y, H:i:s T');
        $data = [
            'content'=>'ADMIN.POST-LAY.addNewProfile',
            'formattedDate' => $formattedDate
        ];
        return view('ADMIN.PEMBUNGKUS-ADM.wrapper', $data);
    }
    public function skills()
{
    $date = Carbon::now('Asia/Jakarta');
    $formattedDate = $date->format('d M Y, H:i:s T');
    $data = [
        'content' => 'ADMIN.POST-LAY.skills',
        'formattedDate' => $formattedDate,
    ];
    return view('ADMIN.PEMBUNGKUS-ADM.wrapper', $data);
}
    public function addNewSkills()
    {
        $date = Carbon::now('Asia/Jakarta');
        $formattedDate = $date->format('d M Y, H:i:s T');
        $data = [
            'content'=>'ADMIN.POST-LAY.addNewSkills',
            'formattedDate' => $formattedDate
        ];
        return view('ADMIN.PEMBUNGKUS-ADM.wrapper', $data);
    }
    public function contact()
    {
        return view('POST.contact');
    }
    
}
