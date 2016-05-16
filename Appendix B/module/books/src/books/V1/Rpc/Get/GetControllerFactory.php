<?php
namespace books\V1\Rpc\Get;

class GetControllerFactory
{
    public function __invoke($controllers)
    {
        return new GetController();
    }
}
