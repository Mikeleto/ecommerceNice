<?php

namespace App\Filters;

use App\Filters\QueryFilter;

class SearchFilter extends QueryFilter
{


    public function rules(): array
    {
        return [
            'search' => 'filled',
            'categoryFilter' => 'filled',

        ];
    }

    public function search($query, $search)
    {
        return $query->where('name' ,'LIKE', "%{$search}%");

    }

    public function categoryFilter($query, $categoryFilter)
    {
        if ($categoryFilter) {
           $query->categoryFilter($categoryFilter);
        }
    }

}
