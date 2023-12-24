<?php

namespace Tests\Feature;

use function Pest\Stressless\stress;

it('landing page', function () {
    $result = stress('http://127.0.0.1:8000')
        ->concurrently(5)
        ->for(10)->seconds();

    expect($result->requests()->failed->count)->toBe(0);

    // expect($result->requests()->duration->med)->toBeLessThan(4);
});
