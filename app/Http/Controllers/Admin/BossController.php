<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Boss;

class BossController extends Controller
{
    public function index(){
        return view('admin/Boss/index')->withBoss(Boss::all());
    }

    public function create(){
        return view('admin/Boss/create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:boss|max:255',
            'Description' => 'required',
            'HP'=>'required',
            'AttackForce'=>'required',
        ]);

        $boss = new Boss;
        $boss->name = $request->get('name');
        $boss->Description = $request->get('Description');
        $boss->HP = $request->get('HP');
        $boss->AttackForce = $request->get('AttackForce');
        $boss->user_id = $request->user()->id;


        if ($boss->save()) {
            return redirect('admin/Bosses');
        } else {
            return redirect()->back()->withInput()->withErrors('保存失败！');
        }
    }

    public function destroy($id){
        Boss::find($id)->delete();
        return redirect()->back()->withInput()->withErrors('Successfully deleted!');
    }



}

