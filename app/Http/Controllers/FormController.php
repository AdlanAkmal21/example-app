<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Form;
use App\Models\Group;
use App\Models\Programme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forms = Form::all();

        return view('form.index', compact('forms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $programmes = Programme::all();
        $groups = Group::all();
        $courses = Course::all();

        return view('form.create', compact('programmes', 'groups', 'courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $coordinator_id = Auth::id();
        $programme_id = $request->get('programme_id');
        $group_id = $request->get('group_id');

        $course_ids = $request->get('course_id');
        $lecture_hours = $request->get('lecture_hour');
        $lecturer_names = $request->get('lecturer_name');


        foreach ($lecturer_names as $key => $lecturer_name) {
            $data = array(
                'coordinator_id'=> $coordinator_id,
                'programme_id'=> $programme_id,
                'group_id'=> $group_id,

                'course_id'=> $course_ids[$key],
                'lecture_hour' => $lecture_hours[$key],
                'lecturer_name' => $lecturer_name,
            );
            Form::insert($data);
        }

        return redirect()->route('forms.index')->with('success', 'Form successfully created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function show(Form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function edit(Form $form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Form $form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $form)
    {
        //
    }
}
