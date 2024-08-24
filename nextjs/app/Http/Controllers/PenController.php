<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pen;
use App\Http\Requests\PenStoreRequest;

class PenController extends Controller
{
    // 一覧表示
    public function index() {
        $pens = Pen::paginate(4);
        return response()->json([
            'data' => $pens
        ], 200);
    }
    // 登録
    public function store(PenStoreRequest $request) {
        $pen = new Pen();
        $pen->name = $request->name;
        $pen->price = $request->price;
        $pen->save();
        return response()->json([
            'data' => $pen
        ], 201);
    }
    // 指定のデータのみ取得
    public function edit($id) {
        $pen = Pen::find($id);
        return response()->json([
            'data' => $pen
        ], 200);
    }
    // 更新
    public function update(PenStoreRequest $request, Pen $pen) {
        $pen->fill($request->all());
        $pen->save();
        return response()->json([
            'data' => $pen
        ], 200);
    }
    // 削除
    public function delete(Pen $pen) {
        $pen->delete();
        return response()->json([
            'message' => '無事に削除しました'
        ], 200);
    }
}