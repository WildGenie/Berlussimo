<?php

namespace App\Http\Controllers\Legacy;


use App\Http\Requests\Legacy\ListenRequest;

class ListenController extends LegacyController
{
    protected $submenu = '';
    protected $include = 'legacy/options/modules/listen.php';

    public function request(ListenRequest $request)
    {
        return $this->render();
    }
}