<?php

namespace App\Http\Controllers;
use App\Features\AddTaskFeature;
use Lucid\Units\Controller;

class TaskController extends Controller
{

    public function add()
    {
        /**
         * Save task to database
         * 
         */
        //return "hello from controller";
        $this->serve(AddTaskFeature::class);
        return redirect()->route('tasklist');
    }
}