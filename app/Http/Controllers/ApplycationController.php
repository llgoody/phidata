<?php

namespace App\Http\Controllers;
use App\data_package;
use App\DataPackage;
use App\Goods;
use App\GoodsDataPackage;
use App\users;
use DB;
use App\Dp_request;
use App\application;
use App\application_data_package;
use Illuminate\Http\Request;
use App\grate;
use App\UserMessage;

use App\Http\Requests;
use Illuminate\Mail\Message;

class ApplycationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $application = application::where('status',2)->get();
        foreach($application as $result)
        {
            $result=$result->application_data_package;
            $id=$result->data_package_id;
            $result->data_package_name=data_package::find($id)->name;
        }
        return view('Application.index',['applications'=>  $application]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $category = new application_data_package();
//        $category->name = $request->name;
//        $category->parent_id = 1;
//        try{
//            $category->save();
//            return redirect('category')->withInfo('成功添加商品分类！');
//        }catch (\Exception $e){
//            return redirect()->back()->withErrors($e->getMessage());
//        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $appl = application::find($id);
        if(!$appl){
            return redirect()->back()->withInfo('该申请不存在！');
        }
        $request=data_package::find($appl->application_data_package->data_package_id);
        return view('Application.show',['data_package'=>  $request]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//        \DB::beginTransaction();
        try {
            $result = application::find($id);
            $result->status = 1;
            $result->save();

            $package = DataPackage::find($result->application_data_package->data_package_id);
            $goods = new Goods;
            $goods->name = $package->name;
            $goods->price = $package->price;
            $goods->type = 'package';
            $goods->status = 1;
            $goods->goods_category_id = 1;  //TO DO
            $goods->save();

            $goodsDataPackage = new GoodsDataPackage;
            $goodsDataPackage->data_package_id = $package->id;
            $goodsDataPackage->goods_id = $goods->id;
            $goodsDataPackage->save();
//            die('here');

//            \DB::commit();
            $dp_request = DB::table('dp_request')->where('key', $goods->name)->first();
//            dump($dp_request);die();
            if($dp_request!=null){

                $user=$dp_request->user_id;

                $userMessage=new UserMessage();
                $userMessage->user_id=$user;
                $userMessage->message_id="1";

                try{
                    $userMessage->save();
                }catch (\Exception $e){
                    return redirect()->back()->withInfo('数据请求匹配失败');
                }
                return redirect('Apply')->withInfo('成功通过审核！');
            }

        }catch (\Exception $e){
//            \DB::rollback();
        }

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id=$request->id;
        $result=application::find($id);
        $result->status=3;
        $result->reject_reason=$request->reason;
        $result->save();
        return redirect('Apply')->withInfo('拒绝成功！');
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
    }
}
