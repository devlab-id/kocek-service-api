<?php

namespace App\Containers\AppSection\Documentation\UI\WEB\Controllers;

use App\Containers\AppSection\Documentation\UI\WEB\Requests\GetPrivateDocumentationRequest;
use App\Containers\AppSection\Documentation\UI\WEB\Requests\GetPublicDocumentationRequest;
use App\Ship\Abstracts\Controllers\WebController as AbstractWebController;

class Controller extends AbstractWebController
{
    public function showPrivateDocs(GetPrivateDocumentationRequest $request)
    {
        return view('appSection@documentation::documentation.private.index');
    }

    public function showPublicDocs(GetPublicDocumentationRequest $request)
    {
        return view('appSection@documentation::documentation.public.index');
    }
}
