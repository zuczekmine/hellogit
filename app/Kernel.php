<?php

class Kernel
{
    public function handle($request)
    {
        if (!array_key_exists($request->query, 'page')) {
            throw new InvalidArgumentException('You should provide "page" parameter', 404);
        }
    }
}
