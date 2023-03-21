<?php

namespace App\Queries;

class CategoryBuilder extends QueryBuilder
{
public function categoryFilter ($categoryFilter){
    $this->whereHas('subcategory.category', function ($q) use ($categoryFilter) {
        $q->where('name', 'LIKE', "%{$categoryFilter}%");
    });
}
}
