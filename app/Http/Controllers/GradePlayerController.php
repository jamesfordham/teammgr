<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;

class GradePlayerController extends Controller
{


    public function store(Request $request, $gradeId)
    {
        $player = new Player;

        $player->grade_id = $gradeId;
        $player->fname = $request->fname;
        $player->lname = $request->lname;
        $player->email = $request->email;
        $player->phone = $request->phone;
        $player->position = $request->position;
        $player->playernotes = $request->playernotes;

        if (!$player->save() ){
            return redirect()
                ->action('GradeController@show', $gradeId)
                ->with('errors', $player->getErrors())
                ->withInput();
        }

        return redirect()
            ->action('GradeController@show', $gradeId)
            ->with('message', '<div class="alert alert-succes">Player Added to Roster Succesfully</div>');
    }

    public function update(Request $request, $gradeId, $id)
    {
        $player = Player::findOrFail($id);

        $player->fname = $request->fname;
        $player->lname = $request->lname;
        $player->email = $request->email;
        $player->phone = $request->phone;
        $player->position = $request->position;
        $player->playernotes = $request->playernotes;

        if (!$player->save() ){
            return redirect()
                ->action('GradeController@show', $gradeId)
                ->with('errors', $player->getErrors())
                ->withInput();
        }

        //Success action
        return redirect()
            ->action('GradeController@show', $gradeId)
            ->with('message', '<div class="alert alert-success">Player was updated successfully</div>');
    }


    public function destroy($id, $gradeId)
    {
        $player = Player::findOrFail($id);

        $player->delete();

        return redirect()
            ->action('GradeController@show', $gradeId)
            ->with('message', '<div class="alert alert-info">Player was deleted successfully</div>');

    }

}
