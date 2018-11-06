<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Home\Ungmquery;
use App\Models\Admin\Selloffer;
class SearchController extends Controller
{

//构造查询条件和结果及猜想用户查找了什么关键字
    public function query(Request $req)
    {
        $title=$req->title;
        $miaoshu=$req->miaoshu;
        $type=$req->type;
        $starttime=$req->starttime;
        $endtime=$req->endtime;
        /*$data=Selloffer::where('name','like','%'.$title.'%')->where('descript','like','%'.$type.'%')->where('published','like','%'.$starttime.'%')->where('deadline','like','%'.$endtime.'%')->get();*/
        if(empty($title)&&empty($miaoshu)&&empty($type)&&empty($starttime)&&empty($endtime)){
            $data=[];
            return $data;
        }else if(empty($title)&&empty($miaoshu)&&empty($type)){
            $data=Selloffer::whereDate('published', '>=',$starttime)->whereDate('deadline', '<=',$endtime)->get();
          
            return $data;
        }else if (empty($starttime)&&empty($endtime)) {
           $data=Selloffer::where('name','like','%'.$title.'%')->where('descript','like','%'.$type.'%')->get();
           return $data;
        }else if (empty($miaoshu)&&empty($type)&&empty($starttime)&&empty($endtime)) {
           $data=Selloffer::where('name','like','%'.$title.'%')->get();
           return $data;
        }else if (empty($title)&&empty($miaoshu)&&empty($starttime)&&empty($endtime)) {
            $data=Selloffer::where('type','%'.$type.'%')->get();
            return $data;
        }else if (empty($title)&&empty($type)&&empty($starttime)&&empty($endtime)) {
            $data=Selloffer::where('descript','%'.$miaoshu.'%')->get();
            return $data;
        }
      
        //return $data;
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

        
       if(empty($title)&&empty($miaoshu)&&empty($type)&&empty($organization)&&empty($country)){
            $data=Ungmquery::whereDate('published', '>=',$starttime)->whereDate('deadline', '<=',$endtime)->get();
          
            return $data;
        
        }else if (empty($starttime)&&empty($endtime)&&empty($organization)&&empty($country)) {
           $data=Ungmquery::where('title','like','%'.$title.'%')->where('noticetype','like','%'.$type.'%')->get();
           return $data;
        }else if (empty($miaoshu)&&empty($type)&&empty($starttime)&&empty($endtime)&&empty($organization)&&empty($country)) {
           $data=Ungmquery::where('title','like','%'.$title.'%')->get();
           return $data;
        }else if (empty($title)&&empty($miaoshu)&&empty($starttime)&&empty($endtime)&&empty($organization)&&empty($country)) {
            $data=Ungmquery::where('noticetype','%'.$type.'%')->get();
            return $data;
        }else if (empty($title)&&empty($type)&&empty($starttime)&&empty($endtime)&&empty($organization)&&empty($country) ) {
            $data=Ungmquery::where('descript','%'.$miaoshu.'%')->get();
            return $data;
        }else if (empty($title)&&empty($miaoshu)&&empty($type)&&empty($starttime)&&empty($endtime)&&empty($organization)) {
           $data=Ungmquery::where('country','like','%'.$country.'%')->get();
           return $data;
        }else if (empty($title)&&empty($miaoshu)&&empty($type)&&empty($starttime)&&empty($endtime)&&empty($country)) {
           $data=Ungmquery::where('organization','like','%'.$organization.'%')->get();
           return $data;
        }
      
        //return $data;
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
