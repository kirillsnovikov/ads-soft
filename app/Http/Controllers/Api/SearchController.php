<?php

namespace App\Http\Controllers\Api;

use App\Data;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Data as DataResource;

class SearchController extends Controller
{

    public function search($id)
    {
//        $id = $request->id;
//        dd($id);
        if (!empty($id)) {
            $data = Data::where('id', $id)->get();
//            dd($data);
//            $data = DataResource::collection($data);
//            dd($data->resource);
            return DataResource::collection($data);
        }
    }

}
