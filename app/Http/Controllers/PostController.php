<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Input;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Post::first()->paginate(5);

        return view('posts.index', compact('data'))
                ->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.create');
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
        $request->validate([
            'ref_id' => 'required',
            'project_id' => 'required',
            'project_category' => 'required',
            'project_description' => 'required',
            'project_faculty' => 'required',
            'project_name_en' => 'required',
            'project_name_th' => 'required',
            'project_keyword' => 'required',
            'project_email_leader' => 'required',
            'project_status_leader' => 'required',
            'project_start_at' => 'required',
            'project_end_at' => 'required',
            'project_duration' => 'required',
            'resource_funds' => 'required',
            'funds_category' => 'required',
            'journal_title' => 'required',
            'project_quartile' =>'required',
            'project_impact_factor' => 'required',
            'student_name' => 'required',
            'student_degree' => 'required',
            'journal_position' => 'required',
            'fund_money' => 'required',
            'db_website' => 'required',
            'project_benefit' => 'required',
            'others_reward' => 'required',
            'project_benefit_description' => 'required',
            'others_reward_description'
        ]);

        Post::create($request->all());
            
        return redirect()->route('posts.index')
                ->with('success','Project created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
        return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
        return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
        $request->validate([
            'ref_id' => 'required',
            'project_id' => 'required',
            'project_category' => 'required',
            'project_description' => 'required',
            'project_faculty' => 'required',
            'project_name_en' => 'required',
            'project_name_th' => 'required',
            'project_keyword' => 'required',
            'project_email_leader' => 'required',
            'project_status_leader' => 'required',
            'project_start_at' => 'required',
            'project_end_at' => 'required',
            'resource_funds' => 'required',
            'funds_category' => 'required',
            'journal_title' => 'required',
            'project_status' => 'required',
            'project_quartile' =>'required',
            'project_impact_factor' => 'required',
            'student_name' => 'required',
        'student_degree' => 'required',
        'journal_position' => 'required',
        'fund_money' => 'required',
        'db_website' => 'required',
        'project_benefit' => 'required',
        'others_reward' => 'required',
        'project_benefit_description' => 'required',
        'others_reward_description'
        ]);

        $post->update($request->all());

        return redirect()->route('posts.index')
                        ->with('success', 'Project updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
        $post->delete();

        return redirect()->route('posts.index')
        ->with('success','Project deleted successfully');
    }

    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
        $data = Post::query()
            ->where('ref_id', 'LIKE', "%{$search}%")
            ->orWhere('resource_funds', 'LIKE', "%{$search}%")
            ->get();
    
        // Return the search view with the resluts compacted
        return view('search', compact('data'));
    }
}
