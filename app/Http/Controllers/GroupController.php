<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Programme;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = Group::all();

        return view('group.index', compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $programmes = Programme::all();

        return view('group.create', compact('programmes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $group = new Group();
        $group->group_code = $group_code = $request->get('group_code');
        $group->programme_id = $programme_id = $request->get('programme_id');

        $programme = Programme::where('id', $programme_id)->first();

        $group->group_name = "$programme->programme_code $group_code";
        $group->save();

        return redirect()->route('groups.index')->with('success', 'Group added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        return view('group.show', compact('group'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    {
        $programmes = Programme::all();

        return view('group.edit', compact('programmes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $group)
    {
        $group->group_code = $group_code = $request->get('group_code');
        $group->programme_id = $programme_id = $request->get('programme_id');

        $programme_name = Programme::where('id', $programme_id)->pluck('programme_name');

        $group->group_name = "$group_code $programme_name";
        $group->save();

        return redirect()->route('groups.index')->with('success', 'Group updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
        $group->delete();

        return redirect()->route('groups.index')->with('success', 'Group deleted');
    }
}
