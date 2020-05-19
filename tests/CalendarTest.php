<?php

use PHPUnit\Framework\TestCase;

class EventCollectionTest extends TestCase
{
    public function testPush()
    {
        $collection = new \Asdfx\LaravelFullcalendar\EventCollection();
        $this->assertCount(0, $collection->toArray());

        $testEvent = new TestEventClass();
        $testEvent->setStart(\Carbon\Carbon::now());
        $testEvent->setEnd(\Carbon\Carbon::now()->addHour());
        $collection->push($testEvent);

        $this->assertCount(1, $collection->toArray());
    }
}