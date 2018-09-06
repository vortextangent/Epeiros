<?php

namespace Epeiros\Http;

interface RequestHandler
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function handle(Request $request);
}
