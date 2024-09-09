<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(Request $request)
    {
        $search = $request->get('q');

        $jobs = Job::query()
            ->with(['employer', 'tags'])
            ->where('title', 'LIKE', "%{$search}%")
            ->get();

        return view('results', ['jobs' => $jobs]);
    }
}
