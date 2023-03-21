<?php

namespace App\Queries;

class ProductBuilder extends QueryBuilder
{

    public function nameFilter($nameFilter){
        $this->where('name', 'LIKE', "%{$nameFilter}%");
    }

    public function categoryFilter($categoryFilter){
        $this->whereHas('subcategory.category', function ($q) use ($categoryFilter) {
            $q->where('name', 'LIKE', "%{$categoryFilter}%");
        });
    }


    public function brandFilter($brandFilter){
        $this->whereHas('brand', function ($q)  use ($brandFilter) {
            $q->where('name', 'LIKE', "%{$brandFilter}%");
        });
    }

    public function maxPriceFilter($maxPriceFilter){
        $this->where('price', '<=', $maxPriceFilter);
    }

    public function minPriceFilter($minPriceFilter){
        $this->where('price', '>=', $minPriceFilter);
    }

    public function startDateFilter($startDateFilter){
        $this->whereDate('created_at', '<=', $startDateFilter);
    }
    public function endDateFilter($endDateFilter){
        $this->whereDate('created_at', '<=', $endDateFilter);
    }

    public function colorFilter($colorFilter){
        $this->whereHas('sizes.colors', function ($q) use ($colorFilter) {
            $q->where('name', 'LIKE', "%{$colorFilter}%");
        });
    }
    public function colorFilter2($colorFilter2){
        $this->whereHas('color', function ($q) use ($colorFilter2) {
            $q->where('name', 'LIKE', "%{$colorFilter2}%");
        });
    }
    public function sizeFilter($sizeFilter){
        $this->whereHas('sizes', function ($q) use ($sizeFilter) {
            $q->where('name', 'LIKE', "%{$sizeFilter}%");
        });
    }
}
