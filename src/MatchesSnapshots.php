<?php

namespace OwowAgency\Snapshots;

use Illuminate\Foundation\Testing\TestResponse;
use OwowAgency\Snapshots\Drivers\JsonStructureDriver;
use Spatie\Snapshots\MatchesSnapshots as BaseMatchesSnapshots;

trait MatchesSnapshots
{
    use BaseMatchesSnapshots;

    /**
     * Asserts the json structure of the provided value with a snapshot.
     *
     * @param  mixed  $actual
     * @return void
     */
    public function assertJsonStructureSnapshot($actual): void
    {
        $json = $actual instanceof TestResponse
            ? $actual->json()
            : $actual;

        $this->assertMatchesSnapshot($json, new JsonStructureDriver());
    }
}
