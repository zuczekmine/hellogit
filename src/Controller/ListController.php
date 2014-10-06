<?php

class ListController
{
    public function listAction($request)
    {
        return array(
            'template' => 'list',
            'data' => array(
                'var1', 'var2'
            )
        );
    }
}
