<?php

namespace SimpleBus\AsynchronousBundle\Tests\Functional;

use SimpleBus\Asynchronous\Publisher\Publisher;
use SimpleBus\Message\Message;

class PublisherSpy implements Publisher
{
    private $publishedMessages = [];

    public function publish($message)
    {
        $this->publishedMessages[] = $message;
    }

    public function publishedMessages()
    {
        return $this->publishedMessages;
    }
}
