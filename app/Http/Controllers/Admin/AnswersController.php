<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Questions;
use App\Models\Answers;
use Illuminate\Http\Request;

class AnswersController extends Controller
{
    public function index($question_id)
    {
        $question = Questions::find($question_id);
        $data['question'] = $question;
        return view('admin.dashboard.answers.list')->with($data);
    }
    public function edit(Answers $answer)
    {
        $data['answer'] = $answer;
        return view('admin.dashboard.answers.edit')->with($data);
    }
    public function update(Answers $answer, Request $request)
    {
        $temp = $request->all();
        $data = array(
            'answer' => $temp['answer'],
        );
        $answer->update($data);
        $request->session()->flash('message', 'answer updated successfully!');
        return $this->index($answer->question_id);
    }


    public function delete(Answers $answer, Request $request)
    {
        $question_id = $answer->question_id;
        $answer->delete();
        $request->session()->flash('message', 'answer deleted successfully!');
        return $this->index($question_id);
    }
}
