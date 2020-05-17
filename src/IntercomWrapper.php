<?php

namespace LiranCo\LaravelIntercom;

class IntercomWrapper
{
    protected $intercom;

    public function __construct($intercom)
    {
        $this->intercom = $intercom;
    }

    public function __call($method, array $args)
    {
        if (method_exists($this->intercom, $method)) {
            return call_user_func_array([$this->intercom, $method], $args);
        }
        
        return $this->intercom->{$method};
    }
}