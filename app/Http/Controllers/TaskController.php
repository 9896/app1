<?php

namespace App\Http\Controllers;
use App\Features\AddTaskFeature;
use App\Features\GetTasksFeature;
use Lucid\Units\Controller;

class TaskController extends Controller
{

    /**
     * Store new task
     */
    public function add()
    {

        return $this->serve(AddTaskFeature::class);
    }

    /**
     * Retrieve user tasks
     */
    public function get(){

        return $this->serve(GetTasksFeature::class);
        
    }
}