<?php

namespace Workup\NovaDetachedFilters\Tests\Fixtures;

use Illuminate\Http\Request;
use Laravel\Nova\Resource;
use Laravel\Nova\Tests\Fixtures\User;
use Workup\NovaDetachedFilters\HasDetachedFilters;
use Workup\NovaDetachedFilters\NovaDetachedFilters;

class UserResource extends Resource
{
    use HasDetachedFilters;

    public static $model = User::class;


    public function cards(Request $request)
    {
        return [
            NovaDetachedFilters::make([
                FirstFilter::make(),
            ]),
        ];
    }

    public function filters(Request $request)
    {
        return [
            SecondFilter::make(),
        ];
    }

    public function fields(Request $request)
    {
        return [];
    }
}
