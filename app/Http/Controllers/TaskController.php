<?php

namespace App\Http\Controllers;
use App\Features\AddTaskFeature;
use App\Features\GetTasksFeature;
use Lucid\Units\Controller;

class TaskController extends Controller
{

    public function add()
    {

        return $this->serve(AddTaskFeature::class);
    }

    public function get(){

        return $this->serve(GetTasksFeature::class);
        
    }
}