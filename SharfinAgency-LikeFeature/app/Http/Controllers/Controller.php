<?php

namespace App\Http\Controllers;

use App\Article;
use App\GuideLine;
use App\Portofolio;
use App\Property;
use App\Review;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use function GuzzleHttp\Promise\all;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    static function getRecommendedProperty()
    {
        return PropertyController::RecommendedProperty();
    }

    static function getNewProperty()
    {
        return Property::orderBy('created_at', 'DESC')->limit(4)->get();
    }

    static function getLatestArticle()
    {
        return Article::orderBy('created_at', 'DESC')->limit(3)->get();
    }

    static function getLatestGuideline()
    {
        return GuideLine::orderBy('created_at', 'ASC')->limit(3)->get();
    }

    static  function getPortofolio()
    {
        return Portofolio::orderBy('created_at','DESC')->limit(1)->get();
    }

    static  function getReview()
    {
        return Review::orderBy('created_at','DESC')->limit(3)->get();
    }

    static function format($angka){
        $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
        return $hasil_rupiah;

    }
}
