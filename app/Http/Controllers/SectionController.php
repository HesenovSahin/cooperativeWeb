<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Section;
use App\Http\Requests\SectionRequest;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sections = Section::paginate(5);

        return view('backend.pages.sections.index', compact('sections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.sections.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SectionRequest $request)
    {
        $validated=$request->validated();
        
        if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'), $imageName);
        $validated['image']=$imageName;
        }

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $logoName = time().'.'.$logo->extension();
            $logo->move(public_path('logos'), $logoName);
            $validated['logo']=$logoName;
            }


        Section::create($validated);


        return redirect()->route('section.index')->with('success','Team has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sections = Section::find($id);

        return view('backend.pages.sections.edit', compact('sections'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SectionRequest $request, $id)
    {
        $sections = Section::find($id);

        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('images'), $imageName);
            $validated['image']=$imageName;
            }

            if ($request->hasFile('logo')) {
                $logo = $request->file('logo');
                $logoName = time().'.'.$logo->extension();
                $logo->move(public_path('logos'), $logoName);
                $validated['logo']=$logoName;
                }

        $sections->update($validated);

        return redirect()->route('section.index')->with('message', 'updated successfully');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Section::find($id)->delete();
        return redirect()->route('section.index')->with('message', 'deleted successfully');;
    }
}
