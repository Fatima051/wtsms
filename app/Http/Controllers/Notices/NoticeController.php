<?php

namespace App\Http\Controllers\Notices;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function index()
    {
        return view('notices.index');
    }

    public function board()
    {
        return view('notices.board');
    }
}
