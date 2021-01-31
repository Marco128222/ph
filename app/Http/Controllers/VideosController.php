<?php

namespace App\Http\Controllers;

use App\Models\Videos;
use Illuminate\Http\Request;

class VideosController extends Controller
{
    public function getVideoCategory($category)
    {
        switch ($category) {
            case 1:
                return Videos::orderByRaw("col9 desc")->where("col6", 'like', '%' . "teen" . '%')->where("col6", 'like', '%' . "milf" . '%')->where("col6", 'like', '%' . "star" . '%')->paginate(12);
                break;
            case 2:
                return Videos::orderBy("col9", "desc")->paginate(12);
                break;
            case 3:
                return Videos::orderByRaw("col10 desc, col11 asc")->paginate(12);
                break;
            case 4:
                return Videos::orderByRaw("col8 DESC")->where("col9", ">", "50000")->where("col6", 'not like', '%' . "Gay" . '%')->where("col6", 'not like', '%' . "trans" . '%')->paginate(12);
                break;
            default:
                return "404";
                break;
        }
    }

    public function getVideoId($id)
    {
        $video = Videos::where("ID", $id)->get();
        if ($video->count() == 1) {
            return $video;
        } else {
            return "404";
        }
    }
}
