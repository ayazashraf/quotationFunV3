<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Author;
use App\Quote;
use DB;

class ShareController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$media,$urlid)
    {
        switch($media)
        {
            case "fb": // Facebook
                $pageURL = env('APP_URL') . '/picture/quote-'. $request->ti.'-'.$urlid;
                $url = "https://www.facebook.com/sharer/sharer.php?u=" . $pageURL;
                return redirect()->away($url);
            break;
            case "tw": // Twitter
                $idarray = explode('-',$urlid);
                $id = $idarray[count($idarray)-1];
                $pageURL = env('APP_URL') . '/picture/quote-'. $request->ti.'-'.$urlid;
                $quote =DB::table('quotes')        
                ->select('Quote')            
                ->where('id','=',$id)->get()->first();                   
                $url = "https://twitter.com/intent/tweet?url=" . $pageURL. '&amp;text='.$quote->Quote;
                return redirect()->away($url);
                
            break;
            case "in": // Linkedin
                //http://www.linkedin.com/shareArticle?mini=true&url=&title=&summary=&source=websiteurl
                $pageURL = env('APP_URL') . '/picture/quote-'. $request->ti.'-'.$urlid;
                $url = "http://www.linkedin.com/shareArticle?mini=true&url=" . $pageURL."&title=".$request->ti. "&summary=".$request->ti."&source=QuotationFun.com";
                return redirect()->away($url);
            break;
            default:
            break;
        }
    }
  
    public function aboutjson(Request $request)
    {
        $about = About::where('id','=',$request->id)
        ->limit(1)->get();                        
        return $this->sendResponse($about,'data received');
    }  

    public function contact()
    {
        return view('contact');
    }
  
    public function submitquote()
    {
        return view('submit_quote');
    }
  
    public function privacy()
    {
        return view('privacy');
    }
  
    public function faqs()
    {
        return view('faqs');
    }
  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
