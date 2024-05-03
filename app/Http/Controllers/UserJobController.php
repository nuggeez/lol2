<?php

namespace App\Http\Controllers;

use App\Models\UserJob;
use Illuminate\Http\Response;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use DB; // <-- if you're not using lumen eloquent you can use DB component in lumen

class UserJobController extends Controller {
    use ApiResponser;

    private $request;

    public function __construct(Request $request) {
    $this->request = $request;
    }

    /**
     * Return the list of usersjob
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        $usersjob = UserJob::all();
        return $this->successResponse($usersjob);
    }

    /**
     * Obtains and show one userjob
     * @return Illuminate\Http\Response
     */
    public function show($id)
    {
        $userjob = UserJob::findOrFail($id);
        return $this->successResponse($userjob);
    }
}