<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function viewId($id) {
        return " $id";
}
public function viewDays ($days_ago=0) {
    return "This post was made $days_ago days ago";
}
}
