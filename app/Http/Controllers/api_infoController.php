<?php

namespace App\Http\Controllers;

use App\api_goods;
use App\api_info;
use App\Info;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class api_infoController extends Controller
{
    public function store(Request $request)
    {
            $file = $request->file('photo');
            $clientName = $file -> getClientOriginalName();
//            echo $clientName;
//            die();

            $path = $file -> move(public_path().'\xml', $clientName);
        $api_info = new api_info;
        $api_info->name = $request->name;
        $api_info->description = $request->description;
        $api_info->wor=1;
//        $api_info->update_id = $request->update_type;
        $api_info->type = $request->API_categrory;
        $api_info->URL =  $path;
        $api_info->save();
        return redirect('API/index');
    }
    public function index(){
        $flights = api_info::where('wor',1)->get();
        return view('API.index', ['flights' => $flights]);
    }
//    public function add($id){
//        //获取文件路径
//        $request=api_info::find($id);
//        $url=$request->URL;
//        //获取文件中的数据并插入数据库中
//        $xmlDoc = new \DOMDocument();
//        $xmlDoc->load( $url);
//        $xmlObject = $xmlDoc->getElementsByTagName('info');
//        $itemCount = $xmlObject->length;
//
//        for ($i=0; $i < $itemCount; $i++) {
//            $info_id = $xmlObject->item($i)->getElementsByTagName('info_id')->item(0)->childNodes->item(0)->nodeValue;
//            $adress= $xmlObject->item($i)->getElementsByTagName('adress')->item(0)->childNodes->item(0)->nodeValue;
//            $time= $xmlObject->item($i)->getElementsByTagName('time')->item(0)->childNodes->item(0)->nodeValue;
//
//            $add=new Info();
//            $add->info_id=$info_id;
//            $add->adress=$adress;
//            $add->time=$time;
//            $add->save();
//        }
//        $request->wor=2;
//        $request->save();
//        return redirect('API/index')->withInfo('制作成功！');
//    }
    public function add(Request $request)
    {

        //获取API的id
        $id = $request->info_id;
        //获取文件路径
        $result = api_info::find($id);

        $url = $result->URL;
        $api_des = new api_des();
        $interface = new Interfaces();
        $interface_info = new Interface_info();
        $data_info = new Data_info();
        $api_des->api_id = $id;
        $api_des->description = $request->api_des;
        $interface->api_id = $id;
        $interface->request_way = $request->request_way;
        $interface->interface_add = $request->interface_add;
        $interface->exam_add = $request->exam_add;
        $interface->return_format = $request->return_format;
        $interface_info->api_id = $id;
        $interface_info->parameter_item = $request->parameter_item;
        $interface_info->parameter_name = $request->parameter_name;
        $interface_info->parameter_type = $request->parameter_type;
        $interface_info->parameter_exam = $request->parameter_exam;
        $data_info->api_id = $id;
        $data_info->item_return = $request->item_return;
        $data_info->item_name = $request->item_name;
        $data_info->item_exam = $request->item_exam;
        $api_des->save();
        $interface->save();
        $interface_info->save();
        $data_info->save();
//        echo $url;
//        die();
        //获取文件中的数据并插入数据库中
        $xmlDoc = new \DOMDocument();
        $xmlDoc->load($url);
        $xmlObject = $xmlDoc->getElementsByTagName('info');
        $itemCount = $xmlObject->length;

        for ($i = 0; $i < $itemCount; $i++) {
            $info_id = $xmlObject->item($i)->getElementsByTagName('info_id')->item(0)->childNodes->item(0)->nodeValue;
            $adress = $xmlObject->item($i)->getElementsByTagName('adress')->item(0)->childNodes->item(0)->nodeValue;
            $time = $xmlObject->item($i)->getElementsByTagName('time')->item(0)->childNodes->item(0)->nodeValue;

            $add = new Info();
            $add->info_id = $info_id;
            $add->adress = $adress;
            $add->api_id = $id;
            $add->time = $time;
            $add->save();
        }
    }
    public function add_info($id){
        return view('API.add_info', ['id' => $id]);

    }
    public function select(Request $request){
//            echo $request->search;
//            die();
            $result = Info::where('info_id', $request->search)->get();

            return view('API/info_show', ['results' => $result,'id'=>$request->search]);

    }
    public function store_rar(Request $request)
    {
        $file1 = $request->file('photo');
        $clientName = $file1 -> getClientOriginalName();
//        echo $clientName;
//        die();

        $obj = new \COM("wscript.shell");
//        die(asset('ddd.txt'));
        $obj->run(asset('rar/Desktop.rar').asset('file'),0,true);
        echo $clientName;

//        $path = $file -> move(public_path().'\rar', $clientName);
//        $api_info = new api_info;
//        $api_info->name = $request->name;
//        $api_info->description = $request->description;
//        $api_info->wor=1;
//        $api_info->update_id = $request->update_type;
//        $api_info->categrory_id = $request->API_categrory;
//        $api_info->URL =  $path;
//        $api_info->save();
//        return redirect('API/index');
    }

    public function show_index(){
        $goods = api_goods::all();
        return view('API.show_index',['goods'=> $goods]);
    }

    public function detail($id)
    {
        $goods=api_goods::find($id);
        return view('API.show_detail',['goodsId'=>$id, 'detail'=>$goods]);
    }

    public function api_search(){
        return view('API.unsearch');
    }
}
