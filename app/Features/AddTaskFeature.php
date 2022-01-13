<?php

namespace App\Features;

use Illuminate\Http\Request;
use Lucid\Units\Feature;
use App\Domains\Task\Jobs\SaveTaskJob;
use App\Domains\Task\Requests\AddTask;

class AddTaskFeature extends Feature
{
    public function handle(AddTask $request)
    {
        $this->run(SaveTaskJob::class, [
            'title' => $request->title,
            'description' => $request->description,
        ]);
    }
}
