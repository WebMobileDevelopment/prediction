<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banners;
use Illuminate\Http\Request;

class BannersController extends Controller
{
    public function index()
    {
        $banners = Banners::orderBy('created_at','desc')->get();
        return view('admin.dashboard.banners.list')->with(['banners' => $banners]);
    }
    public function create(Request $request)
    {
        $banner = $request->all();
        Banners::create([
            'title' => $banner['title'],
            'description' => $banner['description'],
            'base64_img' => $banner['base64_img'],
        ]);
        $request->session()->flash('message', 'New banner type created successfully!');
        return $this->index();
    }
    public function edit(Banners $banner)
    {
        return view('admin.dashboard.banners.edit')->with(['banner' => $banner]);
    }
    public function update(Banners $banner, Request $request)
    {
        $temp = $request->all();
        $data = array(
            'title' => $temp['title'],
            'description' => $temp['description'],
            'base64_img' => $temp['base64_img']
        );
        $banner->update($data);
        $request->session()->flash('message', 'banner updated successfully!');
        return $this->index();
    }
    public function delete(Banners $banner, Request $request)
    {
        $banner->delete();
        $request->session()->flash('message', 'banner deleted successfully!');
        return $this->index();
    }
}
