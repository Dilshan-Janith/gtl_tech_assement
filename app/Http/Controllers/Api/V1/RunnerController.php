<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Http\Resources\V1\RunnerResource as RunnerRES;
use App\Models\Runner;
use App\Models\FormData;
use App\Models\FormLastRunners;

class RunnerController extends Controller
{
    public function runnerFormData (int $runner_id) {
        if (Cache::has('runner-'.$runner_id)) {
            return new RunnerRES(Cache::get('runner-'.$runner_id));
        } else {
            $name = Runner::whereId($runner_id)->first();
            $frm_data = FormData::whereRunnerId($runner_id)->first(['age', 'sex', 'color']);
            $last_runs = FormLastRunners::whereRunnerId($runner_id)->get();
    
            $data = [
                'runner_id' => $name,
                'age' => $frm_data['age'],
                'sex' => $frm_data['sex'],
                'color' => $frm_data['color'],
                'last_runs' => $last_runs
            ];

            Cache::add('runner-'.$runner_id, $data);
    
            return new RunnerRES($data);
        }
    }
}
