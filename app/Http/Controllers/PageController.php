<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Item;
use App\Models\Office;
use Inertia\Inertia;

class PageController extends Controller
{

    public function home() {
        return inertia('Home');
    }
    public function employees() {
        $employees = Employee::orderBy('id', 'asc')->get();

        return inertia('Employee',[
            'employees' => $employees
        ]);
    }
    public function offices() {
        $offices = Office::orderBy('id', 'asc')->get();

        return inertia('Office',[
            'offices' => $offices
        ]);
    }
    public function items() {
        $items = Item::with('offices')->get();

        return inertia('Item',[
            'items' => $items
        ]);
    }
}
