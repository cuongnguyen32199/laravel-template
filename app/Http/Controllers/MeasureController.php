<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\Measure;

class MeasureController extends Controller
{
    public function index(): JsonResponse
    {
        $record = Measure::paginate(10);

        return $this->toJson($record);
    }
}
