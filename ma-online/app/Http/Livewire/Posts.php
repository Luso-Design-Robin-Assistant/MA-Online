<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\Post;

class Posts extends Component
{
    public $posts,$post, $title, $body, $post_id, $url, $video, $videoFilename;
    public $isOpen = 0;

    function index(){
        $data = array(
            'list'=> DB::table('posts')->get()
        );

        return view('posts.index', $data);
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function render()
    {
        $this->posts = Post::all();
        return view('livewire.posts');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function openModal()
    {
        $this->isOpen = true;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function closeModal()
    {
        $this->isOpen = false;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields(){
        $this->title = '';
        $this->body = '';
        $this->post_id = '';
        $this->url = '';
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store(Request $request)
    {
        $this->validate([
            'title' => 'required',
            'body' => 'required',
            'url' => 'required',
            'video' => 'required'
        ]);
        $videoFilename = $this->video->store('upload', 'public');
        // Saving the file to the storage
        Post::updateOrCreate(['id' => $this->post_id], [
            'title' => $this->title,
            'body' => $this->body,
            'url' => $this->url,
            'video' => $videoFilename,
        ]);
        redirect('/dashboard');
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public function show($id) {
        $post = Post::find($id);
        return view('posts.video', ['video' => $post]);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $this->post_id = $id;
        $this->title = $post->title;
        $this->body = $post->body;
        $this->url = $post->url;
        $this->openModal();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Post::find($id)->delete();
        session()->flash('message', 'Post Deleted Successfully.');
    }
}


