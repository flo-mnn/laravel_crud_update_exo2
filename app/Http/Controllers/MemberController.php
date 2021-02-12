<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        return view('welcome', ['members'=> Member::all(), 'looping'=>true]);
    }

    public function show($id)
    {
        return view('pages.show', ['member'=> Member::find($id), 'looping'=>false]);
    }

    public function create()
    {
        return view('pages.create', ['values'=>false]);
    }

    public function store(Request $request)
    {
        $newEntry = new Member();

        $newEntry->nom = $request->nom;
        $newEntry->age = $request->age;
        $newEntry->genre = $request->genre;

        $newEntry->save();

        return redirect()->back();
    }

    public function edit($id)
    {
        return view('pages.edit', ['member'=> Member::find($id), 'values'=>true]);
    }

    public function update(Request $request, $id)
    {
        $update = Member::find($id);

        $update->nom = $request->nom;
        $update->age = $request->age;
        $update->genre = $request->genre;

        $update->save();

        return redirect('/member/show/'.$update->id);
    }

    public function destroy($id){
        if ($id==="all") {
            Member::whereNotNull('id')->delete();
        } else {
            $destroy = Member::find($id);
            $destroy->delete();
        };
        
        return redirect("/");
    }
}
