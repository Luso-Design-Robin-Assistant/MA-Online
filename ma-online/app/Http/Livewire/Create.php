<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;
use App\Models\Post;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;

class Create extends Component
{
    use WithFileUploads;
    public $posts, $title, $body, $post_id, $url, $video, $name;
    public $isOpen = 0;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function render()
    {
        $this->posts = Post::all();
        return view('livewire.create');
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
        $videos = DB::table('posts')
            ->where('id', $id)
            ->get();
        $profilePicture = DB::table('users')
            ->get();
        $units = Post::orderBy('created_at','desc')->take(3)->get();
        return view('posts.video',compact('videos','profilePicture', 'units'));
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
