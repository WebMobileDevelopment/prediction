<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Matchs;
use Illuminate\Http\Request;

class MatchsController extends Controller
{
    public function index()
    {
        $matchs = Matchs::orderBy('view_order')->get();
        return view('dashboard.admin.matchs.list')->with(['matchs' => $matchs]);
    }
    public function create(Request $request)
    {

        $match = $request->all();
        Matchs::create([
            'name' => $match['name'],
            'active_avatar' => $match['base64_img'][0],
            'inactive_avatar' => $match['base64_img'][1],
        ]);
        return $this->index();
    }
    public function edit(Matchs $match)
    {
        return view('dashboard.admin.matchs.edit')->with(['match' => $match]);
    }

    public function update(Matchs $match, Request $request)
    {
        $temp = $request->all();
        $data = array(
            'name' => $temp['name'],
            'description' => $temp['description'],
            'view_order' => $temp['view_order']
        );
        if (!is_null($temp['base64_img'][0])) $data['active_avatar'] = $temp['base64_img'][0];
        if (!is_null($temp['base64_img'][1])) $data['inactive_avatar'] = $temp['base64_img'][0];
        $match->update($data);
        $request->session()->flash('message', 'match updated successfully!');
        return $this->index();
    }
    public function delete(Matchs $match, Request $request)
    {
        $match->delete();
        $request->session()->flash('message', 'match deleted successfully!');
        return $this->index();
    }
}
