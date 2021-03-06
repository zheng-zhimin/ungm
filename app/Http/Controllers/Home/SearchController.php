<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Home\Ungmquery;
use App\Models\Home\Queryzhaobiao;

use App\Models\Home\Ungmungmlike;

class SearchController extends Controller
{

//构造查询条件和结果及猜想用户查找了什么关键字
   /* public function query(Request $req)
    {
        $title=$req->title;
        $miaoshu=$req->miaoshu;
        $type=$req->type;
        $title=empty($title) ? '' : $title;
        $miaoshu=empty($miaoshu) ? '' : $miaoshu;
        $type=empty($type) ? '' : $type;


        $starttime= empty($req->starttime) ? '2017-11-01 16:29:08':$req->starttime;
        $endtime=empty($req->endtime) ? '2020-11-01 16:29:08':$req->endtime;

        if(empty($title)&&empty($miaoshu)&&empty($type)&&empty($starttime)&&empty($endtime)){
            return $data=[];
        }

        $data=Selloffer::whereDate('published', '>=',$starttime)->whereDate('deadline', '<=',$endtime)->where('name','like','%'.$title.'%')->where('descript','like','%'.$miaoshu.'%')->where('type','like','%'.$type.'%')->get();
                                return $data;
        

        
    }*/

    public function query(Request $req)
    {

        $title=$req->title;
        $descript=$req->descript;
        $published=$req->published;
        $deadline=$req->deadline;
        if(empty($title)&&empty($descript)&&empty($published)&&empty($deadline)){
            return $data=[];
        }
        $data=Queryzhaobiao::where('title','like','%'.$title.'%')->where('descript','like','%'.$descript.'%')->get();
        return $data;
    }


    public function ungmquery(Request $req)
    {
         $title=$req->title;
        $miaoshu=$req->miaoshu;
        $type=$req->type;

        $starttime=$req->starttime;
        $endtime=$req->endtime;
        
        $organization=$req->organization;
        $country=$req->country;

       //如果参数都为空,显示请添加参数的提示页面
       if(empty($title)&&empty($miaoshu)&&empty($type)&&empty($starttime)&&empty($endtime)&&empty($organization)&&empty($country)){
            return $data=[];
       }

        $title=empty($title) ? '' : $title;
        $miaoshu=empty($miaoshu) ? '' : $miaoshu;
        $type=empty($type) ? '' : $type;
        $organization=empty($organization) ? '' : $organization;
        $country=empty($country) ? '' : $country;


        $starttime= empty($req->starttime) ? '2017-11-01 16:29:08':$req->starttime;
        $endtime=empty($req->endtime) ? '2020-11-01 16:29:08':$req->endtime;

  

        $data=Ungmquery::whereDate('published', '>=',$starttime)->whereDate('deadline', '<=',$endtime)->where('title','like','%'.$title.'%')->where('descript','like','%'.$miaoshu.'%')->where('noticetype','like','%'.$type.'%')->where('organization','like','%'.$organization.'%')->where('country','like','%'.$country.'%')->get();
                                return $data;
       
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function ungmproject(Request $req)
    {
             $id=$req->id;//ungm招标文件的id编号
             $uid=$req->uid;//session中用户的id编号
             $title=$req->title;
             //$id1=Ungmungmlike::where('ungmid',$id)->first();

             $data= new Ungmungmlike;

             $data->uid=$uid;
             $data->ungmid=$id;
             $res=$data->save();

             if($res){
                return $result='已向后台表达了您对'.$title.'项目的兴趣,客服会在1-2个工作日内与您沟通';
             }else{
                return $result='表达兴趣失败';
             }
            //return $uid;
            //

            
           
    }



}
