<?php

namespace OwowAgency\Snapshots;

use Illuminate\Foundation\Testing\TestResponse;
use OwowAgency\Snapshots\Drivers\JsonStructureDriver;
use Spatie\Snapshots\MatchesSnapshots as BaseMatchesSnapshots;

trait MatchesSnapshots
{
    use BaseMatchesSnapshots;

    /**
     * Asserts the structure of the response json with a snapshot.
     *
     * @param  \Illuminate\Foundation\Testing\TestResponse  $response
     * @return void
     */
    public function assertJsonStructureSnapshot(TestResponse $response): void
    {
        $this->assertMatchesSnapshot(
            $response->json(),
            new JsonStructureDriver()
        );
    }
}
