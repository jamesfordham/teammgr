<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grade;


class GradeController extends Controller
{
    public function index()
    {
        $grades = Grade::all();
        $data = array();
        $data ['objects'] = $grades;

        return view('grades.index', $data);
    }

    public function create()
    {
        $grade = new Grade;
        $data = array();
        $data['grade'] = $grade;
        return view('grades.create',$data);
    }

    public function store(Request $request)
    {
        $grade = new Grade;
        $grade->sydgrade = $request->sydgrade;
        $grade->clubgrade = $request->clubgrade;

        //Create new instance to save to DB
        if(!$grade->save()) {
            $errors = $grade->getErrors();
            return redirect()
                ->action('GradeController@create')
                ->with('errors',$errors)
                ->withInput();
        }

        return redirect()
            ->action('GradeController@index')
            ->with('message','<div class="alert alert-success">The new Team was successfully created</div>');
    }

    public function show($id)
    {
       $data = array();
       $grade = Grade::findOrFail($id); //Find all objects with this id from URL
       $data['grade'] = $grade;

        return view('grades/show', $data);
    }

    public function edit($id)
    {
        //displays page
        $grade = Grade::findOrFail($id);
        return view('grades.edit', ['grade' => $grade]);
    }

    public function update(Request $request, $id)
    {
        //comms with DB
        $grade = Grade::findOrFail($id);

        $grade->sydgrade = $request->sydgrade;
        $grade->clubgrade = $request->clubgrade;

        if(!$grade->save()) {
            return redirect()
                ->action('GradeController@edit', $grade->id)
                ->with('errors',$grade->getErrors())
                ->withInput();
        }

        return redirect()
            ->action('GradeController@index')
            ->with('message','<div class="alert alert-success">The existing Team was successfully updated</div>');
    }

    public function destroy($id)
    {
        $grade = Grade::findOrFail($id);

        $grade->delete();

        return redirect()
            ->action('GradeController@index')
            ->with('message','<div class="alert alert-info">The Team was successfully DELETED</div>');
    }
}
