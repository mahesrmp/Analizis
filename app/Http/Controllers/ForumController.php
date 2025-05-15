<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use App\Models\Discussion;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index()
    {
        $discussions = Discussion::withCount('replies')->latest()->get();
        return view('forum.index', compact('discussions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'title' => 'required',
            'content' => 'required',
        ]);

        Discussion::create([
            'user_id' => auth()->id(),
            'category' => $request->category,
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('forum.index')->with('success', 'Diskusi berhasil ditambahkan.');
    }

    public function show($id)
    {
        $discussion = Discussion::with('replies')->findOrFail($id);
        return view('forum.show', compact('discussion'));
    }

    public function reply(Request $request, $id)
    {
        $request->validate([
            'content' => 'required',
        ]);

        Reply::create([
            'discussion_id' => $id,
            'user_id' => auth()->id(),
            'content' => $request->content,
        ]);

        return back()->with('success', 'Balasan berhasil ditambahkan.');
    }
}
