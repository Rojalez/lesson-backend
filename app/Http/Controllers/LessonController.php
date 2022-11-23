<?php

namespace App\Http\Controllers;

use App\Models\Lesson;


class LessonController extends Controller
{
    public function index()
    {
        return Lesson::paginate(1);
    }
}
