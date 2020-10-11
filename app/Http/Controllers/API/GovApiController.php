<?php


namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Governorate;
use  Validator ;


class GovApiController extends BaseController  
{

public function index()
{
    # code...
    $place_category = Governorate::with('archaeology')->get();
    return $this->sendResponse($place_category->toArray(), ' read succesfully');
}
  
}