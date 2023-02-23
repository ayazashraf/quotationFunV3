<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Topic;
use DB;
use App\Quote;

class QuoteController extends BaseController
{
    /**
     * Quotes for Home Page API
     *
     * @return \Illuminate\Http\Response
     */
      
    public function randomQuotesHome(Request $request)
    {        
        $quotes = Quote::select('quotes.id','Quote','authors.id as aid','background','NameDisplayLast','NameDisplayFirst')                    
        ->join('authors','authors.id','quotes.author_id')
        ->whereRaw('LENGTH(Quote) <100')
        ->inRandomOrder()->limit(4)        
        ->get();             
    
        return $this->sendResponse($quotes,'data received');                
    }

        /**
     * Display a listing of some authors with all letters.
     *
     * @return \Illuminate\Http\Response
     */
    public function authors(Request $request)
    {
        return view('authors');
    }

    /**
     * Display a listing of quotevideos
     *
     * @return \Illuminate\Http\Response
     */
    public function quotevideos(Request $request)
    {
        return view('quote_videos');
    }

    /**
     * Display a listing of picturequotes
     *
     * @return \Illuminate\Http\Response
     */
    public function picturequotes(Request $request)
    {
        return view('quote_pictures');
    }
    /**
     * Quotes for Home Page API
     *
     * @return \Illuminate\Http\Response
     */
      
    public function top100quotes(Request $request)
    {
        return view('top_100_quotes');
    }
    /**
     * Quotes for Home Page API
     *
     * @return \Illuminate\Http\Response
     */
      
    public function quoteoftheday(Request $request)
    {
        return view('quote_of_the_day');
    }
    /**
     * Quotes for Home Page API
     *
     * @return \Illuminate\Http\Response
     */
      
    public function search(Request $request)
    {   
        /*
        if(strlen($request->keyword) > 1)
        {
            $authors = Author::where('NameDisplayFirst','LIKE','%'.$request->keyword.'%')        
            ->orWhere('NameDisplayLast','LIKE','%'.$request->keyword.'%')       
            ->orWhere(DB::raw("CONCAT(NameDisplayFirst,' ',NameDisplayLast)"),'LIKE', '%'.$request->keyword.'%')        
            ->select('id','NameDisplayLast','NameDisplayFirst','Occupation')        
            ->limit(8)
            ->get();

            if(count($authors) > 0)
            {
                foreach($authors as $key=>$author)
                {
                    $authors[$key]['fullname'] = $this->cleanAuthorName($author);
                    $authors[$key]['fullnameDisplay'] = $this->cleanAuthorNameDisplay($author);
                }
                return $this->sendResponse($authors,'resutls');
            }        
            else
            {
                return $this->sendError('No results found');
            }
        }        
        else
        {
            return $this->sendError('No results found');
        }        
        */
        return view('search');
    }     

}