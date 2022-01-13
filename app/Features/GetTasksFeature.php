<?php

namespace App\Features;

use Illuminate\Http\Request;
use Lucid\Units\Feature;
use App\Domains\Task\Jobs\GetTasksJob;

class GetTasksFeature extends Feature
{
    public function handle(Request $request)
    {
        return $this->run(GetTasksJob::class);
        //return $tasks;
    }
}
