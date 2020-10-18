<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\matchs;
use App\Models\Questions;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    public function index($match_id)
    {
        $match = Matchs::find($match_id);
        $data['match'] = $match;
        return view('admin.dashboard.questions.list')->with($data);
    }
    public function create($match_id, Request $request)
    {
        $temp = $request->all();
        $data = array(
            'match_id' => $match_id,
            'question' => $temp['question'],
        );
        Questions::create($data);
        $request->session()->flash('message', 'Question created successfully!');
        return $this->index($match_id);
    }
    public function edit(Questions $question)
    {
        $data['question'] = $question;
        return view('admin.dashboard.questions.edit')->with($data);
    }
    public function update(Questions $question, Request $request)
    {
        $temp = $request->all();
        $data = array(
            'question' => $temp['question'],
        );
        $question->update($data);
        $request->session()->flash('message', 'Question updated successfully!');
        return $this->index($question->match_id);
    }


    public function delete(Questions $question, Request $request)
    {
        $match_id = $question->match_id;
        $question->delete();
        $request->session()->flash('message', 'Question deleted successfully!');
        return $this->index($match_id);
    }
}
