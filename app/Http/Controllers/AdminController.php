<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admin::paginate(4);

        return view('backend.pages.admins.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.admins.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminRequest $request)
    {

        Admin::create($request->validated());

        return redirect()->route('admin.index')->with('success','Company has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//        $admin = User::orderBy('id','DESC')->first();
//        DB::table('users')->where('id',$id)->get();
//        User::where('id',$id)->get();
        $admin = Admin::find($id);
        $password = $admin->password;
//        dd($admin);
        return view('backend.pages.admins.edit', compact('admin','password'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminRequest $request,$id)
    {
        $user = Admin::find($id);

        $validated = $request->validated();

        if(!empty($request->password)){

            $validated['password']=Hash::make($request->password);
            $user->update($validated);
        }else{
            $validated['password']=$user->password;
            $user->update($validated);
        }

        return redirect()->route('admin.index')->with('message', 'Register Success');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Admin::find($id)->delete();
        return redirect()->route('admin.index')->with('message', 'Register Success');;

    }
}
