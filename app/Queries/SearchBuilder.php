<?php

namespace App\Queries;

class SearchBuilder extends QueryBuilder
{

    public function categoryFilter ($categoryFilter){
        $this->whereHas('subcategory.category', function ($q) use ($categoryFilter) {
            $q->where('name', 'LIKE', "%{$categoryFilter}%");
        });
    }

}
