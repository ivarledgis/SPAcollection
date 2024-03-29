<?php

namespace App\Http\Controllers;
use App\Quote;
use JWTAuth;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
   	public function postQuote(Request $request)
   	{
         
         $user = JWTAuth::parseToken()->toUser();
   		$quote = new Quote();
   		$quote->content = $request->input('content');
   		$quote->save();
   		return response()->json(['quote' => $quote, 'user' => $user], 201);
   	}

   	public function getQuotes()
   	{
   		$quotes=Quote::all();
   		$response = [    //this is same as inline of respone of postQuote (alternative)
   			'quotes' => $quotes
   		];
   		return response()->json($response, 200);
   	}

   	public function putQuote(Request $request, $id)
   	{
   		$quote = Quote::find($id);
   		if(!$quote){
   			return response()->json(['message' => 'Document not found'], 400);
   		}

         $quoteupdate = Quote::where('id',$id)
                  ->update([
                     'content' => $request->input('content')
                  ]);
         $quote=Quote::find($id);
   		// $quote->content = $request->input('content');
   		// $quote->save();
   		return response()->json(['quote' => $quote], 200);
   	}

   	public function deleteQuote($id)
   	{
   		$quote = Quote::find($id);
   		$quote->delete();
   		return response()->json(['mesasge' => 'Quote Delete'], 200);
   	}
}
