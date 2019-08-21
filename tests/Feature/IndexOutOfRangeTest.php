<?php

namespace Tests\Feature;

use App\Click;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class IndexOutOfRangeTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function works_with_order_by()
    {
        factory(Click::class, 15)->create();

        $response = $this->get(route('works'));

        $response->assertOk();
    }

    /** @test */
    public function fails_with_order_by_sub()
    {
        $this->withoutExceptionHandling();

        factory(Click::class, 15)->create();

        $response = $this->get(route('fails'));

        $response->assertOk();
    }
}
