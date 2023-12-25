<?php

namespace App\Http\Controllers\API\VisitGuidanceRecord;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VisitGuidanceRecord;


class VisitGuidanceRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $numPerPage = 10;
    public function index(Request $request)
    {
        $query  = VisitGuidanceRecord::query();

        if ($s = $request->has("s")) {
            $query->where("trainee_number", "LIKE", "%" . $s . "%");
            $query->where("entry_date", "LIKE", "%" . $s . "%");
        }

        $datas = $query->paginate($this->numPerPage);

        return $this->hasSuccess('Get list Visit Guidance Record successful.', $datas);
    }
}
