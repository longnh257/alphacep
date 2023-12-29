<?php

namespace App\Http\Controllers\API\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MUser;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $numPerPage = 10;
    public function index(Request $request)
    {
        $query  = MUser::query();
        if ($s = $request->has("s")) {
            $query->where("name", "LIKE", "%" . $s . "%");
            $query->where("email", "LIKE", "%" . $s . "%");
        }
        $datas = $query->where('id', '!=', 1);
        $datas = $query->with('customer')->paginate($this->numPerPage);

        return $this->hasSuccess('Get list user successful.', $datas);
    }
}
