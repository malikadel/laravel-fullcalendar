<?php


class TestEventClass implements \Asdfx\LaravelFullcalendar\Event
{
    private $title;
    private $start;
    private $end;
    private $allDay;

    public function setTitle(string $title)
    {
        $this->title = $title;
        return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setAllDay(bool $allDay)
    {
        $this->allDay = $allDay;
    }

    public function isAllDay()
    {
        return $this->allDay;
    }

    public function getStart()
    {
        return $this->start;
    }

    public function getEnd()
    {
        return $this->end;
    }

    public function setStart(\Carbon\Carbon $start)
    {
        $this->start = $start;
        return $this;
    }

    public function setEnd(\Carbon\Carbon $end)
    {
        $this->end = $end;
        return $this;
    }
}