<?php

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UIElementsController extends Controller
{
    public function buttons()
    {
        return view('ui.buttons');
    }

    public function grid()
    {
        return view('ui.grid');
    }

    public function modal()
    {
        return view('ui.modal');
    }

    public function notificationAlert()
    {
        return view('ui.notification-alert');
    }

    public function progressBar()
    {
        return view('ui.progress-bar');
    }

    public function uiTab()
    {
        return view('ui.ui-tab');
    }

    public function uiWidget()
    {
        return view('ui.ui-widget');
    }
}
