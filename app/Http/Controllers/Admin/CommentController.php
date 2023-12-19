<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::latest()->paginate(15);
        return view('admin.comments.index',compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.comments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),[
            'comments' => 'required',
            // 'status' => 'required',
        ]);

        Comment::create([
            'comments' => request()->get('comments'),
            // 'status' => 1,
        ]);
        $notification = [
            'message' => 'Record Inserted Successfully!',
            'alert-type' => 'success',
        ];

        return redirect()->to('admin')->with($notification);
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
        $comments = Comment::find($id);
        return view('admin.comments.edit',compact('comments'));
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
        $this->validate(request(),[
            'comments' => 'required',
            // 'status' => 'required',
        ]);
        $comments = comment::find($id);

        $comments->update([
            'comments' => request()->get('comment'),
            // 'status' => 1,
        ]);
        $notification = [
            'message' => 'Record Inserted Successfully!',
            'alert-type' => 'success',
        ];

        return redirect()->to('admin')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comments = comment::find($id);

        $comments->delete();
        return redirect()->to('admin/comment');
    }
}
