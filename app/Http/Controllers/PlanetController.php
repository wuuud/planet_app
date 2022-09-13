<?php

namespace App\Http\Controllers;

use App\Models\Planet;
use App\Models\Planets;
use Illuminate\Http\Request;

class PlanetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $planets = Planet::all();
        return view('planets.index', ['planets' => $planets]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('planets.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //このクラスは他のアクションにも影響。
        $planet = new Planet;
        //$requireでユーザーからの値をうけとる
        $planet->name = $request->name;
        $planet->enname = $request->enname;
        $planet->radius = $request->radius;
        $planet->weight = $request->weight;
        //インスタンスに値を設定し保存
        $planet->save();
        //登録したら一覧画面(index URL：planets)に戻る
        return redirect('/planets');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $planet = Planet::find($id);
        return view('planets.show', ['planet' => $planet]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $planet = Planet::find($id);
        return view('planets.edit', ['planet' => $planet]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         //このクラスは他のアクションにも影響。
        $planet = Planet::find($id);
        //値の更新
        $planet->name = $request->name;
        $planet->enname = $request->enname;
        $planet->radius = $request->radius;
        $planet->weight = $request->weight;
        //インスタンスに値を設定し保存
        $planet->save();
        //登録したら一覧画面(index URL：planets)に戻る
        return redirect('/planets');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //インスタンス生成
        $planet=Planet::find($id);
        //インスタンスに値を設定し保存
        $planet->delete();
        //削除したら一覧画面(index URL：planets)に戻る
        return redirect('/planets');
    }
}
