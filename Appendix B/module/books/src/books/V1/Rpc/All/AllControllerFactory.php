<?php
namespace books\V1\Rpc\All;

class AllControllerFactory
{
    public function __invoke($controllers)
    {
        return new AllController();
    }
}
