<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class LinkController extends Controller
{
    use AuthorizesRequests;

    public function index(Request $request)
    {

        if (Auth::check()) {

            $links = Auth::user()->links;
            $template = $request->input('template', 'template1');

            return view('links.index', compact('links', 'template'));
        }


        return redirect()->route('login');
    }

    public function store(Request $request)
    {
        $content = $request->validate([
            'link_title' => 'required',
            'link_url' => 'required|url'
        ]);

        Link::create([
            'title' => $content['link_title'],
            'url' => $content['link_url'],
            'user_id' => Auth::id()
        ]);

        $template = $request->input('template', 'template1');

        return redirect()->route('links.index', ['template' => $template])->with('success', 'Link created successfully!');
    }

    public function edit(Link $link, Request $request)
    {
        $this->authorize('update', $link);
        $template = $request->input('template', 'template1');

        return view('links.edit', compact('link', 'template'));
    }

    public function update(Request $request, Link $link)
    {
        $this->authorize('update', $link);
        $request->validate([
            'title' => 'required',
            'url' => 'required|url'
        ]);

        $link->update($request->only('title', 'url'));

        $template = $request->input('template', 'template1');

        return redirect()->route('links.index', ['template' => $template])->with('success', 'Link updated successfully!');
    }

    public function destroy(Link $link, Request $request)
    {
        $this->authorize('delete', $link);
        $link->delete();

        $template = $request->input('template', 'template1'); 

        return redirect()->route('links.index', ['template' => $template])->with('success', 'Link deleted successfully!');
    }
}
