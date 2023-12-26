<?php

namespace App\Http\Controllers\API\Project;

use App\Http\Controllers\Controller;
use App\Models\ProjectWork;
use Illuminate\Http\Request;

class ProjectWorkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $numPerPage = 10;
    public function index(Request $request) {
        $query  = ProjectWork::query();

        if ($s = $request->has("s")) {
            $query->where("work_number", "LIKE", "%" . $s . "%");
            $query->where("entry_date", "LIKE", "%" . $s . "%");
        }
        $datas = $query->paginate($this->numPerPage);

        return $this->hasSuccess('Get list successful.',$datas);
    }
}
