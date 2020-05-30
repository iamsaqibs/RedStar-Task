<?php

namespace App\Http\Controllers\Backend;

use App\Challan;
use App\Http\Controllers\Controller;

/**
 * Class DashboardController.
 */
class DashboardController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $challan = Challan::all();
        return view('backend.dashboard', compact('challan'));
    }
}
