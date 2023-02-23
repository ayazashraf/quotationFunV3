<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Author;
use App\Quote;
use App\QuoteTopic;
use DB;
use Illuminate\Support\Str;

class AuthorController extends BaseController
{
    /**
     * Today's Birthdays api
     *
     * @return \Illuminate\Http\Response
     */
    public function brithdays(Request $request)
    {
        $authors = Author::where('BornDay','=',date('j'))
        ->select('id','NameDisplayLast','NameDisplayFirst','Occupation','BornYear')                    
        ->where('BornMonth','=',date('n'))
        ->limit(5)->get();                
        foreach($authors as $key=>$author)
        {
            $authors[$key]['fullname'] = $this->cleanAuthorName($author);
            $authors[$key]['fullnameDisplay'] = $this->cleanAuthorNameDisplay($author);
        }
        return $this->sendResponse($authors,'data received');
    }  
    public function birthdaysall(Request $request)
    {
        /*$authors = Author::where('BornDay','=',date('j'))
        ->select('id','NameDisplayLast','NameDisplayFirst','Occupation','BornYear')                    
        ->where('BornMonth','=',date('n'))
        ->limit(5)->get();                
        foreach($authors as $key=>$author)
        {
            $authors[$key]['fullname'] = $this->cleanAuthorName($author);
            $authors[$key]['fullnameDisplay'] = $this->cleanAuthorNameDisplay($author);
        }
        return $this->sendResponse($authors,'data received');
        */        
        return view('all_birthdays');
    }  
    public function todaybirthdays(Request $request)
    {
        /*$authors = Author::where('BornDay','=',date('j'))
        ->select('id','NameDisplayLast','NameDisplayFirst','Occupation','BornYear')                    
        ->where('BornMonth','=',date('n'))
        ->limit(5)->get();                
        foreach($authors as $key=>$author)
        {
            $authors[$key]['fullname'] = $this->cleanAuthorName($author);
            $authors[$key]['fullnameDisplay'] = $this->cleanAuthorNameDisplay($author);
        }
        return $this->sendResponse($authors,'data received');
        */
        return view('birthdays_day_authors_list');
    }  
    public function anniversariesall(Request $request)
    {
        /*
        $authors = Author::where('DiedDay','=',date('j'))
        ->select('id','NameDisplayLast','NameDisplayFirst','Occupation','DiedYear')                    
        ->where('DiedMonth','=',date('n'))
        ->limit(5)->get();                
        foreach($authors as $key=>$author)
        {
            $authors[$key]['fullname'] = $this->cleanAuthorName($author);
            $authors[$key]['fullnameDisplay'] = $this->cleanAuthorNameDisplay($author);
        }
        return $this->sendResponse($authors,'data received');
        */
        return view('all_anniversaries');
    }
    public function todayanniversaries(Request $request)
    {
        /*
        $authors = Author::where('DiedDay','=',date('j'))
        ->select('id','NameDisplayLast','NameDisplayFirst','Occupation','DiedYear')                    
        ->where('DiedMonth','=',date('n'))
        ->limit(5)->get();                
        foreach($authors as $key=>$author)
        {
            $authors[$key]['fullname'] = $this->cleanAuthorName($author);
            $authors[$key]['fullnameDisplay'] = $this->cleanAuthorNameDisplay($author);
        }
        return $this->sendResponse($authors,'data received');
        */
        return view('anniversaries_day_authors_list');
    }
    public function anniversaries(Request $request)
    {
        $authors = Author::where('DiedDay','=',date('j'))
        ->select('id','NameDisplayLast','NameDisplayFirst','Occupation','DiedYear')                    
        ->where('DiedMonth','=',date('n'))
        ->limit(5)->get();                
        foreach($authors as $key=>$author)
        {
            $authors[$key]['fullname'] = $this->cleanAuthorName($author);
            $authors[$key]['fullnameDisplay'] = $this->cleanAuthorNameDisplay($author);
        }
        return $this->sendResponse($authors,'data received');
    }
    public function popular(Request $request)
    {
        $authors = Author::orderby('visits','desc')
        ->select('id','NameDisplayLast','NameDisplayFirst','Occupation')                    
        ->limit(10)->get();                
        foreach($authors as $key=>$author)
        {
            $authors[$key]['fullname'] = $this->cleanAuthorName($author);
            $authors[$key]['fullnameDisplay'] = $this->cleanAuthorNameDisplay($author);
        }
        return $this->sendResponse($authors,'data received');
    }
    public function authorslist(Request $request)
    {
        $authors = Author::where('NameDisplayFirst','Like',$request->q.'%')
        ->select('id','NameDisplayLast','NameDisplayFirst','NameDisplayMiddle','Occupation')                    
        ->limit($request->limit)
        ->get();                
        foreach($authors as $key=>$author)
        {
            $authors[$key]['fullname'] = $this->cleanAuthorName($author);   
            $authors[$key]['fullnameDisplay'] = $this->cleanAuthorNameDisplay($author);                    
        }
        return $this->sendResponse($authors,'data received');
    }    
    public function news(Request $request)
    {
        $authors = Author::where('news','=',1)
        ->select('id','NameDisplayLast','NameDisplayFirst','Occupation')                    
        ->limit(10)->get();                
        foreach($authors as $key=>$author)
        {
            $authors[$key]['fullname'] = $this->cleanAuthorName($author);
            $authors[$key]['fullnameDisplay'] = $this->cleanAuthorNameDisplay($author);
        }
        return $this->sendResponse($authors,'data received');
    }
    public function explore(Request $request)
    {
        $authors = Author::where('explore','=',1)
        ->select('id','NameDisplayLast','NameDisplayFirst','Occupation')                    
        ->limit(40)->get();                
        foreach($authors as $key=>$author)
        {
            $authors[$key]['fullname'] = $this->cleanAuthorName($author);
            $authors[$key]['fullnameDisplay'] = $this->cleanAuthorNameDisplay($author);
        }
        return $this->sendResponse($authors,'data received');
    }
    public function alphabet(Request $request)
    {
        $authors = Author::where('NameDisplayFirst','Like',$request->q.'%')
        ->select('id','NameDisplayLast','NameDisplayFirst','Occupation')                    
        ->get();                
        foreach($authors as $key=>$author)
        {
            $authors[$key]['fullname'] = $this->cleanAuthorName($author);   
            $authors[$key]['fullnameDisplay'] = $this->cleanAuthorNameDisplay($author);                    
        }
        return $this->sendResponse($authors,'data received');
    }
    public function authorQuotes(Request $request)
    {        
        $authorID = $request->id;
        $currentPage = $request->query("page");// isset($request->page)?$request->page:1;        
        //$currentPage = $request->page;
        
        //$quotes = Quote::where('author_id','=',$authorID)->paginate(15);                
        
        $quotes =   DB::table('quotes')
                        //->leftJoin('authors', 'authors.id', '=', 'quotes.author_id')
                        ->where('author_id','=',$authorID)
                        ->paginate(15);
        
        foreach ($quotes as $q) 
        {
            $auth = Author::where('id',$q->author_id)->get()->first();
            $q->fullname = $this->cleanAuthorName($auth);   
            $q->fullnameDisplay = $this->cleanAuthorNameDisplay($auth);                                       
           // $topics = QuoteTopic::where("topic_id","=",$q->id);
            
            
            $topics =DB::table('topics')        
            ->select('topics.Topic')            
            ->where('Topic','LIKE','%'.$q->topic.'%')->get();    
            if($topics->count()>0)
            {
                $topi = "";
                $numItems = $topics->count();
                $i = 0;
                foreach($topics as $key=>$t)
                {
                    if(++$i === $numItems) 
                    {                        
                        $topi .= $t->Topic;
                    }
                    else
                    {
                        $topi .= $t->Topic.",";
                    }
                }
                $q->topics = explode(",", $topi);
            }
            else
            {        
                $count = 1;        
                $topi = explode(",", $q->topic);                
                $to = "";
                foreach($topi as $t)
                {
                    if(strlen($t)>5 && $count < 5 && !stripos($to, $t))
                    {
                        if($count == 4)
                        {
                            $to .= $t;    
                        }
                        else
                        {
                            $to .= $t.",";
                        }                        
                        $count++;
                    }                    
                }
                $q->topics = explode(",", $to);
            }                        
        }        
        $q->topics = array_unique(array_map('trim', array_map( "strtolower", $q->topics )));
        /*
        $topicplurals = array();
        foreach($q->topics as $top)
        {
            $topicplurals[] = Str::plural($top);
        }
        */
        $author = Author::where('id',$authorID)->get()->first();
    
        $author->fullname = $this->cleanAuthorName($author);   
        $author->fullnameDisplay = $this->cleanAuthorNameDisplay($author);                                   
        
        $quotesaboutauthor = DB::table('quotes')        
                            ->where('Quote','Like','%'.$author->NameDisplayLast.'%');        
        if($quotesaboutauthor->count() > 0)
        {
            $aboutauthor = 1;
        }
        else
        {
            $aboutauthor = 0;
        }
        $data = array();
        $data[0] = $author;
        //$data[1] = $quotes;//$author->quotes;
        
        $response = [
            'pagination' => [
                'total' => $quotes->total(),
                'per_page' => $quotes->perPage(),
                'current_page' => $currentPage,
                'last_page' => $quotes->lastPage(),
                'from' => $quotes->firstItem(),
                'to' => $quotes->lastItem()
            ],
            'data' => $data,
            'links' => (string) $quotes->onEachSide(0)->links(),
            'nationality' => $author->nationality,
            'quotes' =>$quotes,
            'aboutauthor' =>$aboutauthor
        ];
        return $this->sendResponse($response,'data received');                          
    }
    public function authorquotespage(Request $request,$data)
    {        
        /*
        $quotes = Quote::where('id','>',0)->get();
        
        foreach($quotes as $key=>$quote)
        {            

            
            $words = preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $quote->Quote);
            $words = preg_split('/[\s]/', preg_replace('/\d+/u', '', $words), null, PREG_SPLIT_NO_EMPTY);
            $ignoreList = array(
                "1" => "one",
                "2" => "at",
                "3" => "two",
                "4" => "the",
                "5" => "and",
                "6" => "we",
                "7" => "are",
                "8" => "the",
                "7" => "all",
                "8" => "that",
                "9" => "those",
                "10" => "i",
                "11" => "you",
                "12" => "do",
                "13" => "as",
                "14" => "a",
                "15" => ",",
                "16" => ".",
                "17" => "'",
            );
       //    echo "<br>".preg_replace('/\b('. implode('|',$ignoreList) .')\b/i', '', $quote->Quote)."<br>";
         //   $arr = implode(", ", $this->extractKeyWords($quote->Quote));
      
      
         $arr = implode(", ", $words);
         
      
      
         //echo "<br>";
            $quote->topics = $arr;
            $quote->save();
        }
        */

        /*
        $page = isset($request->page)?$request->page:0;        
        $lastsegment = explode("-",request()->segment(count(request()->segments())));
        $authorID = $lastsegment[count($lastsegment)-1];
        
        $quotes = Quote::where('author_id','=',$authorID)
        //->select('id','NameDisplayLast','NameDisplayFirst','Occupation')                            
        ->paginate(15);                
        
        //$quotes = $author->quotes()->paginate(5);
        
        $author = Author::where('id',$authorID)->get()->first();
        
        //$author =  $author[0];        
        
        $author->fullname = $this->cleanAuthorName($author);   
        $author->fullnameDisplay = $this->cleanAuthorNameDisplay($author);   
                                
        $data = array();
        $data[0] = $author;
        $data[1] = $author->quotes;
        */
        $page = isset($request->page)?$request->page:1;        
        $lastsegment = explode("-",request()->segment(count(request()->segments())));
        $authorID = $lastsegment[count($lastsegment)-1];
        return view('author_quotes_list',compact('page','authorID'));
        
    }
    public function extract_keywords($text)
    {
        $aStopWords = array ('about', 'all', 'alone', 'also', 'am', 'and', 'as', 'at', 'because', 'before', 'beside', 'besides', 'between', 'but', 'by', 'etc', 'for', 'i', 'of', 'on', 'other', 'others', 'so', 'than', 'that', 'though', 'to', 'too', 'trough', 'until');
        $aWords = array ();
        $aKeywords = array ();

        // total character count
        $iCharCount = strlen($text);

        // remove line breaks
        $sText = preg_replace("[\r\t\n]", ' ', $text);

        // decode UTF-8
        $sText = utf8_decode($sText);

        // convert to lowercase
        $sText = strtolower($sText);

        // remove peculiars
        $sText = preg_replace('/[^a-z0-9äöüß&;#]/', ' ', $sText);
        
        // total word count
        $aWords = explode(" ", $sText);
        $iWordCount = count($aWords);
        $iCharCountWithout = 0;

        // count words
        for ($x = 0; $x < count($aWords); $x++) {
            $iCharCountWithout += strlen($aWords[$x]);
        }

        unset ($aWords);

        // remove stop words
        for ($m = 0; $m < count($aStopWords); $m++) {
            $sText = str_replace(' ' . $aStopWords[$m] . ' ', ' ', $sText);
        }

        // reduce spaces
        $sText = preg_replace('/^\s*$/', ' ', $sText);

        // explode to array of words
        $aWords = explode(" ", $sText);

        // every word
        for ($x = 0; $x < count($aWords); $x++) {
            // if already in array
            if (isset ($aKeywords[$aWords[$x]])) {
                // then increase count of this word
                $aKeywords[$aWords[$x]]++;
            }

            // if not counted yet
            else {
                if (trim($aWords[$x]) != '') {
                    $aKeywords[$aWords[$x]] = 1;
                }
            }
        }

        // sort
        arsort($aKeywords);

        // result
        /*
        echo '<table>';
        echo '<tr><th>Count</th>;
        echo '<th>Percentage</th>;
        echo '<th>Found keyword</th></tr>';

        $x = 0;
        while ($iNumber = current($aKeywords)) {
            $iNumber = intval($iNumber);
            $sKey = key($aKeywords);
            $fQuotient = number_format(round(100 * ($iNumber / $iWordCount), 2), 2);
            echo '<tr><td>' . $iNumber . ' </td>';
            echo '<td>' . $fQuotient . ' %</td>';
            echo '<td>' . $sKey . '</td></tr>';
            $x++;
            next($aKeywords);
        }
        echo '</table>';
        */
        return $aKeywords;
    }
    public function extractKeyWords($string) {
        mb_internal_encoding('UTF-8');
        $stopwords = array();
        $string = preg_replace('/[\pP]/u', '', trim(preg_replace('/\s\s+/iu', '', mb_strtolower($string))));
        $matchWords = array_filter(explode(' ',$string) , function ($item) use ($stopwords) { return !($item == '' || in_array($item, $stopwords) || mb_strlen($item) <= 2 || is_numeric($item));});
        $wordCountArr = array_count_values($matchWords);
        arsort($wordCountArr);
        return array_keys(array_slice($wordCountArr, 0, 10));
      }
    public function authornationalityquotes(Request $request,$author)
    {        
        /*
        $author = Author::where('id','=',$request->authorid)
        ->select('id','NameDisplayLast','NameDisplayFirst','Occupation')                    
        ->get();                
        $author =  $author[0];        
        $author->fullname = $this->cleanAuthorName($author);   
        $author->fullnameDisplay = $this->cleanAuthorNameDisplay($author);                           
        $data = array();
        $data[0] = $author;
        $data[1] = $author->quotes;
        return $this->sendResponse($data,'data received');        
        */
        return view('author_nationality_quotes');
    }
    public function authortop10quotespage(Request $request,$author)
    {        
        /*
         $author = Author::where('id','=',$request->authorid)
        ->select('id','NameDisplayLast','NameDisplayFirst','Occupation')                    
        ->get();                
        $author =  $author[0];        
        $author->fullname = $this->cleanAuthorName($author);   
        $author->fullnameDisplay = $this->cleanAuthorNameDisplay($author);                           
        $data = array();
        $data[0] = $author;
        $data[1] = $author->quotes->skip(0)->take(10);    
        */
        return view('author_top_10_quotes');
    }
    public function authorprofilepage(Request $request,$author)
    {
        return view('author_profile');
    }
    // Author Top 10 Quotes
    public function authorTopQuotes(Request $request)
    {        
        $author = Author::where('id','=',$request->authorid)
        ->select('id','NameDisplayLast','NameDisplayFirst','Occupation')                    
        ->get();                
        $author =  $author[0];        
        $author->fullname = $this->cleanAuthorName($author);   
        $author->fullnameDisplay = $this->cleanAuthorNameDisplay($author);                           
        $data = array();
        $data[0] = $author;
        $data[1] = $author->quotes->skip(0)->take(10);
        return $this->sendResponse($data,'data received');        
    }
    public function cleanAuthorName($author)
    {   
        if($author->NameDisplayFirst == $author->NameDisplayLast)
        {
            $string = $authorFullName = $author->NameDisplayMiddle. ' ' . $author->NameDisplayLast;  
        }
        else
        {
            $string = $authorFullName = $author->NameDisplayFirst. ' '.$author->NameDisplayMiddle. ' ' . $author->NameDisplayLast;  
        }  
        $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
        $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
        $string = strtolower($string); // Convert to lowercase
        $string = str_replace('.', '', $string); // Convert to lowercase  
        $string = str_replace(',', '', $string); // Convert to lowercase  
        $string = str_replace('--', '-', $string); // Convert to lowercase  
        $string = ltrim($string, "! () - ,.' "); // Remove first hyphen 
        
        return strtolower($string);
    }
    public function cleanAuthorNameDisplay($author)
    {   
        // Both strings will match even with different case
        if(strcasecmp($author->NameDisplayFirst, $author->NameDisplayLast) == 0)
        {
           $authorFullNameDisplay = $author->NameDisplayMiddle. ' ' . $author->NameDisplayLast;  
        } else {
            $authorFullNameDisplay = $author->NameDisplayFirst. ' '.$author->NameDisplayMiddle. ' ' . $author->NameDisplayLast;  
        }
        
        return $authorFullNameDisplay;
    }
    public function search(Request $request)
    {   
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
    public function authoraphabet(Request $request,$alphabet)
    {
        $authors = Author::where('NameDisplayFirst', 'LIKE',$alphabet.'%')
        ->get();
        return view('author_list_by_word',$authors);
    }
}
