<?php

class Kernel
{
    protected $view;
    protected $routes;

    public function __construct($view, $routes)
    {
        $this->view = $view;
        $this->routes = $routes;
    }

    public function handle($request)
    {
        if (!array_key_exists('page', $request->query)) {
            throw new InvalidArgumentException('You should provide "page" parameter like ?page=some-page', 401);
        }

        $this->matchRoute($request->query['page']);
    }

    protected function matchRoute($page)
    {
        if (!array_key_exists($page, $this->routes)) {
            throw new InvalidArgumentException(sprintf('Page %s was not found', $page), 404);
        }

        die('works');
    }
}
