<?php

namespace Dinushchathurya\NationalityList\Http\Controllers;

use App\Http\Controllers\Controller;
use Dinushchathurya\NationalityList\Models\NationalityList;

class NationalityListController extends Controller
{

    public function nationality()
    {
        return NationalityList::pluck('name', 'id');
    }
}
