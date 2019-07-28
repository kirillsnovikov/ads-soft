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
        $data = Data::where('id', $id)->first();

        if ($data) {
            if ($data->access) {
                return new DataResource($data);
            }
            return json_encode(['error' => 'Данная запись недоступна для просмотра!']);
        }
        return json_encode(['error' => 'Данной записи нет в таблице']);
    }

}
