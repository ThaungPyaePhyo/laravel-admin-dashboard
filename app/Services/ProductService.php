<?php

namespace App\Services;

use App\Models\Product;

class ProductService
{
    public function connection()
    {
        return new Product();
    }
    public function makeCollection()
    {
        $searchValue = request()->input('search.value');
        $query = $this->connection()->query()->orderBy('id','desc');
        if ($searchValue) {
            $query->where('title', 'LIKE', '%' . $searchValue . '%')
                    ->orWhere('size', 'LIKE' , '%' .$searchValue . '%');
        }
        $recordsFiltered = $query->count();
        $start = request('start', 0);
        $length = request('length', 10);
        $query->skip($start)->take($length);

        $data = $query->get();
        $totalCount = $data->count();

        $rowId = $start + 1;
        foreach ($data as $record) {
            $record['row_id'] = $rowId++;
        }
        return [
            'recordsTotal' => $totalCount,
            'draw' => request('draw'),
            'recordsFiltered' => $recordsFiltered,
            'data' => $data,
        ];
    }

    public function getDataById($id)
    {
        return $this->connection()->find($id);
    }

    public function update($data,$id)
    {
        return $this->getDataById($id)->update($data);
    }
}
