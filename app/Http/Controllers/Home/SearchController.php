<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Home\Ungmquery;
use App\Models\Home\Queryzhaobiao;
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
        //
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
