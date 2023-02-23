<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;

use App\KeywordIndex;

class KeywordIndexController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function indices(Request $request)
    {
        $indices = KeywordIndex::select('id','letter','tag','index')
        ->orderby('index')
        ->get();                        
        return $this->sendResponse($indices,'data received');
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
     * @param  \App\KeywordIndex  $keywordIndex
     * @return \Illuminate\Http\Response
     */
    public function show(KeywordIndex $keywordIndex)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KeywordIndex  $keywordIndex
     * @return \Illuminate\Http\Response
     */
    public function edit(KeywordIndex $keywordIndex)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\KeywordIndex  $keywordIndex
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KeywordIndex $keywordIndex)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KeywordIndex  $keywordIndex
     * @return \Illuminate\Http\Response
     */
    public function destroy(KeywordIndex $keywordIndex)
    {
        //
    }
}
