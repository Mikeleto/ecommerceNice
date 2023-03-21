<?php

namespace App\Filters;

use App\Filters\QueryFilter;
use App\Models\ColorProduct;
class ProductFilter extends QueryFilter
{


    public function rules(): array
    {
        return [

            'search' => 'filled',
            'nameFilter' => 'filled',
            'categoryFilter' => 'filled',
            'brandFilter' => 'filled',
            'colorFilter' => 'filled',
            'colorFilter2' => 'filled',
            'sizeFilter' => 'filled',
            'maxPriceFilter' => 'filled',
            'minPriceFilter' => 'filled',
            'startDateFilter' => 'filled',
            'endDateFilter' => 'filled',


        ];
    }



    public function search($query, $search)
    {
        return $query->where('name' ,'LIKE', "%{$search}%");

    }

    public function nameFilter($query, $nameFilter)
    {
        if ($nameFilter) {
            $query->nameFilter($nameFilter);
        }
    }
    public function categoryFilter($query, $categoryFilter)
    {

        if ($categoryFilter) {
         $query->categoryFilter($categoryFilter);
        }
    }

    public function brandFilter($query, $brandFilter)
    {
        if ($brandFilter) {
            $query->brandFilter($brandFilter);
        }
    }

    public function maxPriceFilter($query, $maxPriceFilter)
    {
        if ($maxPriceFilter) {
            $query->maxPriceFilter($maxPriceFilter);
        }
    }

    public function minPriceFilter($query, $minPriceFilter)
    {
        if($minPriceFilter){
            $query->minPriceFilter($minPriceFilter);
        }

    }
    public function startDateFilter($query, $startDateFilter)
    {

        if ($startDateFilter) {
            $query->startDateFilter( $startDateFilter);
        }
    }
    public function endDateFilter($query, $endDateFilter)
    {
        if ($endDateFilter) {
            $query->endDateFilter($endDateFilter);
        }
    }

    public function colorFilter($query, $colorFilter)
    {
        if ($colorFilter) {
        $query->colorFilter($colorFilter);
        }

    }

    public function colorFilter2($query, $colorFilter2)
    {
        if ($colorFilter2) {
          $query->colorFilter2($colorFilter2);
        }
    }
    public function sizeFilter($query, $sizeFilter)
    {
        if ($sizeFilter) {
            $query->sizeFilter($sizeFilter);
        }
    }


}
