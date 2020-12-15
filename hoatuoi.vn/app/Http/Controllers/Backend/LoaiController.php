<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Loai;
use Carbon\Carbon;
use Validator;
use App\Http\Requests\LoaiCreateRequest;
use Illuminate\Support\Facades\Session;

class LoaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dsLoai = Loai::all();
        return view('backend.loai.index')
            ->with('dsLoai', $dsLoai);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.loai.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LoaiCreateRequest $request)
    {
        //
        // Kiểm tra ràng buộc dữ liệu (validation)
        // $validator = Validator::make($request->all(), [
        //     'l_ten' => 'required|min:3|max:50|unique:cusc_loai',
        //     'l_trangThai' => 'required',
        // ]);

        // // Nếu kiểm tra ràng buộc dữ liệu thất bại -> tức là dữ liệu không hợp lệ
        // // Chuyển hướng về view "Thêm mới" với,
        // // - Thông báo lỗi vi phạm các quy luật.
        // // - Dữ liệu cũ (người dùng đã nhập).
        // if ($validator->fails()) {
        //     return redirect(route('admin.loai.create'))
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }
        $loai_sp = new Loai();

        $loai_sp->l_ten = $request->l_ten;
        $loai_sp->l_trangThai = $request->l_trangThai;
        $loai_sp->l_taoMoi = Carbon::now();
        $loai_sp->l_capNhat = Carbon::now();
        $loai_sp->save();

        return redirect(route('admin.loai.index'));
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
        //
        $loai = Loai::find($id);

        return view('backend.loai.edit')
                ->with('loai', $loai);
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
        //
        $loai_sp = Loai::where("l_ma",  $id)->first();

        $loai_sp->l_ten = $request->l_ten;
        $loai_sp->l_trangThai = $request->l_trangThai;
        $loai_sp->l_taoMoi = Carbon::now();
        $loai_sp->l_capNhat = Carbon::now();
        $loai_sp->save();

        return redirect(route('admin.loai.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $loai_sp = Loai::where("l_ma",  $id)->first();

        $loai_sp->delete();

        Session::flash('alert-info', 'Xóa loại sản phẩm thành công ^^~!!!');
        return redirect()->route('admin.loai.index');
    }
}
