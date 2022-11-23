<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Blog\Category;
use App\Models\Blog\Post;
use App\Models\Lesson;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LessonController extends Controller
{
    public function index(): Factory|View|Application
    {
        $lessons = Lesson::all();
        return view('pages.lessons.index', compact('lessons'));
    }

    public function create(): Factory|View|Application
    {
        return view('pages.lessons.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $lesson = new Lesson;
        $lesson['number'] = $request->input('number');
        $lesson['title'] = $request->input('title');
        $lesson['description'] = $request->input('description');
        $lesson['html'] = $request->input('html');
        $lesson['css'] = $request->input('css');
//        $lesson['head'] = $request->input('head');
//        $lesson['body'] = $request->input('body');
//        $lesson['foot'] = $request->input('foot');
        $lesson['style'] = $request->boolean('style');
        $lesson->save();
        return redirect()->route('lessons.index');
    }

    public function edit($id): Factory|View|Application
    {
        $lesson = Lesson::find($id);
        return view('pages.lessons.edit', compact('lesson'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $lesson = Lesson::find($id);
        $lesson['number'] = $request->input('number');
        $lesson['title'] = $request->input('title');
        $lesson['description'] = $request->input('description');
        $lesson['html'] = $request->input('html');
        $lesson['css'] = $request->input('css');
        $lesson['style'] = $request->boolean('style');
        $lesson->update();
        return redirect()->route('lessons.index');
    }

    public function delete($id): RedirectResponse
    {
        $lesson = Lesson::find($id);
        $lesson->delete();
        return redirect()->route('lessons.index');
    }
}
