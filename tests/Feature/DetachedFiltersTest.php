<?php

namespace Workup\NovaDetachedFilters\Tests\Feature;

use Workup\NovaDetachedFilters\NovaDetachedFilters;
use Workup\NovaDetachedFilters\Tests\Fixtures\FirstFilter;
use Workup\NovaDetachedFilters\Tests\Fixtures\SecondFilter;
use Workup\NovaDetachedFilters\Tests\Fixtures\ThirdFilter;
use Workup\NovaDetachedFilters\Tests\Fixtures\User;
use Workup\NovaDetachedFilters\Tests\Fixtures\UserResource;
use Workup\NovaDetachedFilters\Tests\TestCase;

class DetachedFiltersTest extends TestCase
{
    public function test_the_card_can_serialize_filters()
    {
        $testFilters = collect([
            (new FirstFilter())->jsonSerialize(),
            (new SecondFilter())->jsonSerialize(),
            (new ThirdFilter())->jsonSerialize(),
        ]);

        $card = NovaDetachedFilters::make([
            FirstFilter::make(),
            SecondFilter::make(),
            ThirdFilter::make(),
        ]);

        $this->assertEquals($testFilters, $card->jsonSerialize()['filters']);
    }

    public function test_the_card_can_have_resource_per_page_option()
    {
        $user = new User;
        $resource = new UserResource($user);
        $card = NovaDetachedFilters::make([])->withPerPage($resource::perPageOptions());

        $this->assertEquals(['25', '50', '100'], $card->jsonSerialize()['perPageOptions']);
    }
}
