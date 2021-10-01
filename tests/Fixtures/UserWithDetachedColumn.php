<?php

namespace Workup\NovaDetachedFilters\Tests\Fixtures;

use Illuminate\Http\Request;
use Workup\NovaDetachedFilters\DetachedFilterColumn;
use Workup\NovaDetachedFilters\NovaDetachedFilters;

class UserWithDetachedColumn extends UserResource
{
    public function cards(Request $request)
    {
        return [
            NovaDetachedFilters::make([
                FirstFilter::make(),
                DetachedFilterColumn::make([
                    ThirdFilter::make(),
                ]),
            ]),
        ];
    }
}
