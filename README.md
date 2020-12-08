# phpunit-snapshot-assertions
An extension of the spatie/phpunit-snapshot-assertions package. This package adds `assertJsonStructureSnapshot()` method that only compares JSON keys, so the values can be different and the test will still pass.

## Installation
```composer require --dev owowagency/phpunit-snapshot-assertions```

## Usage
```
use OwowAgency\Snapshots\MatchesSnapshots;

class OrderTest
{
    use MatchesSnapshots;

    public function test_it_casts_to_json()
    {
        $order = new Order(1);

        $this->assertJsonStructureSnapshot($order->toJson());
    }
}
```
