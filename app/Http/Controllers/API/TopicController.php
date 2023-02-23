<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Topic;
use DB;
use App\Keyword;
use App\KeywordIndex;
use App\Quote;

class TopicController extends BaseController
{
    /**
     * Popular Topics api
     *
     * @return \Illuminate\Http\Response
     */
    public function popular(Request $request)
    {
        $topics = Topic::select('id','Topic','visits')
        ->orderby('visits','desc')
        ->limit(10)->get();                        
        return $this->sendResponse($topics,'data received');
    }  
    public function topics(Request $request)
    {
        $topics = Topic::select('id','Topic','visits')
        ->orderby('Topic')
        ->get();                        
        return $this->sendResponse($topics,'data received');
    }      
    public function topicQuotes(Request $request)
    {        
        $topic = Topic::where('topic','LIKE','%'.$request->topic.'%')
        ->select('id','topic')                    
        ->get()->first();             
    
        /*
        $topic = Topic::where('topic','LIKE','%'.$request->topic.'%')
        ->join('quote_topic','quote_topic.topic_id','topics.id')
        ->join('quotes','quotes.id','quote_topic.quote_id')
        ->join('authors','authors.id','quotes.author_id')
        ->select('topics.id','topic','quote')                    
        ->get();             
        */
        
        return $this->sendResponse($topic->quotes,'data received');                
    }
    public function topicspage(Request $request)
    {
        return view('topics');
    }
    public function topicindices(Request $request,$index)
    {
        return view('topic_indices',compact('index'));
    }    
    public function keywords(Request $request)
    {
        // my sql query  Select LEFT(Quote,LOCATE(' ',Quote) - 1)
        // This algorithm generates the KeywordIndices from the Keywords table.         
        foreach(range('a','z') as $f)
        { 
            foreach(range('a','z') as $v)
            {        
                $keywords = Keyword::where('tag', 'LIKE', $f.$v.'%')->get();        
                if(count($keywords)>0)
                {
                    $kindex = new KeywordIndex;
                    $kindex->letter = $f;
                    $kindex->tag = $f.$v;
                    if(count($keywords)==1)
                    {
                        $kindex->index = $keywords[0]->tag;                
                    }
                    else
                    {
                        $kindex->index = $keywords[0]->tag.'-'.$keywords[count($keywords)-1]->tag;                
                    }                    
                    $kindex->save();
                }
            }
        }
    }   
    public function topicquotespage(Request $request)
    {        
        /*
        // Query 1 
        $topic = Topic::where('topic','LIKE','%'.$request->topic.'%')
        ->select('id','topic')                    
        ->get()->first();             
        */
        
        /*
        // Query 2 
        $topic = Topic::where('topic','LIKE','%'.$request->topic.'%')
        ->join('quote_topic','quote_topic.topic_id','topics.id')
        ->join('quotes','quotes.id','quote_topic.quote_id')
        ->join('authors','authors.id','quotes.author_id')
        ->select('topics.id','topic','quote')                    
        ->get();             
        */
        
        //return $this->sendResponse($topic->quotes,'data received');                
        
        return view('topic_quotes');
    }
    

}