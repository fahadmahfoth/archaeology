<?php


namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Archaeology;
use  Validator ;


class ArchApiController extends BaseController  
{

public function index()
{
    # code...
    $place_category = Archaeology::all();
    return $this->sendResponse($place_category->toArray(), ' read succesfully');
}
  
}