<?php

namespace OwowAgency\Snapshots;

use Illuminate\Testing\TestResponse;
use OwowAgency\Snapshots\Drivers\JsonStructureDriver;
use Spatie\Snapshots\MatchesSnapshots as BaseMatchesSnapshots;

trait MatchesSnapshots
{
    use BaseMatchesSnapshots;

    /**
     * Asserts the json structure of the provided value with a snapshot.
     *
     * @param  mixed  $actual
     * @param  bool  $ignoreIds
     * @return void
     */
    public function assertJsonStructureSnapshot($actual, bool $ignoreIds = false): void
    {
        $json = $actual instanceof TestResponse
            ? $actual->getContent()
            : $actual;

        $this->assertMatchesSnapshot($json, new JsonStructureDriver());
    }
}
