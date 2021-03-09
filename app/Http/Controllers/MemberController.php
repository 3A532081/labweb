<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\MemberRequest;
use App\Http\Requests\PaperRequest;
use App\Member;
use App\Paper;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
/*-------------------------前端的各個頁面------------------------------*/
    public function index()
    {
        return view('index');
    }
    public function about()
    {
        return view('about');
    }
    public function enviro()
    {
        return view('enviro');
    }
    public function members()
    {
        $members = Member::orderBy('created_at','DESC')->get();
        $data = ['members' =>$members];
        return view('member',$data);
    }
    public function paper()
    {
        $papers = Paper::orderBy('created_at','DESC')->get();
        $data = ['papers' =>$papers];
        return view('paper',$data);
    }
    public function paper_yahan()
    {
        $papers = Paper::where('author','雅涵')->get();
        $data = ['papers' =>$papers];
        return view('paper',$data);
    }
    public function paper_peiju()
    {
        $papers = Paper::where('author','珮如')->get();
        $data = ['papers' =>$papers];
        return view('paper',$data);
    }

    public function tech()
    {
        return view('tech');
    }
/*-------------------------前端的各個頁面------------------------------*/

/*-------------------------lab成員的CRUD程式碼------------------------------*/
    public function back_member()
    {
        /*index*/
        $members = Member::orderBy('created_at','DESC')->get();
        $data = ['members' =>$members];
        return view('back.members',$data);
    }
    public function back_member_create()
    {
        /*新增的頁面*/
        return view('back.MembersCreate');
    }
    public function back_member_store(Request $request)
    {
        /*儲存新增的頁面*/
        Member::create([
            'name' => $request['name'],
            'name_en'=>$request['name_en'],
            'year' => $request['year'],
            'class' => $request['class'],
            'skill' => $request['skill'],
            'email' => $request['email'],
        ]);
        return redirect()->route('back.members');
    }
    public function back_member_edit($id)
    {
        /*修改的頁面*/
        $members = Member::find($id);
        $data = ['members' => $members];
        return view('back.MembersEdit', $data);
    }
    public function back_member_update(Request $request, $id)
    {
        /*儲存修改的頁面*/
        $members = Member::find($id);
        $members->update([
            'name' => $request['name'],
            'name_en'=>$request['name_en'],
            'year' => $request['year'],
            'class' => $request['class'],
            'skill' => $request['skill'],
            'email' => $request['email'],
        ]);
        return redirect()->route('back.members');
    }
    public function back_member_destroy($id)
    {
        /*刪除的頁面*/
        Member::destroy($id);
        return redirect()->route('back.members');
    }
/*-------------------------lab成員的CRUD程式碼------------------------------*/

/*-------------------------老師paper的CRUD程式碼------------------------------*/
public function back_papers()
{
    /*index*/
    $papers = Paper::orderBy('created_at','DESC')->get();
    $data = ['papers' =>$papers];
    return view('back.Papers',$data);
}
public function back_papers_create()
{
    /*新增的頁面*/
    return view('back.PapersCreate');
}
public function back_papers_store(Request $request)
{
    /*儲存新增的頁面*/
    Paper::create([
        'name' => $request['name'],
        'year' => $request['year'],
        'author' => $request['author'],
        'type' => $request['type'],
    ]);
    return redirect()->route('back.papers');
}
public function back_papers_edit($id)
{
    /*修改的頁面*/
    $papers = Paper::find($id);
    $data = ['papers' => $papers];
    return view('back.PapersEdit', $data);
}
public function back_papers_update(Request $request, $id)
{
    /*儲存修改的頁面*/
    $papers = Paper::find($id);
    $papers->update([
        'name' => $request['name'],
        'year' => $request['year'],
        'author' => $request['author'],
        'type' => $request['type'],
    ]);
    return redirect()->route('back.papers');
}
public function back_papers_destroy($id)
{
    /*刪除的頁面*/
    Paper::destroy($id);
    return redirect()->route('back.papers');
}
/*-------------------------老師paper的CRUD程式碼------------------------------*/




/*-------------------------沒用到------------------------------*/
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
/*-------------------------沒用到------------------------------*/

}
