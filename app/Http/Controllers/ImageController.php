<?php

namespace App\Http\Controllers;

use OpenAI;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Http;

class ImageController extends Controller
{
    //Generates the image
    public function generate(Request $request)
    {
        // Validation
        $request->validate([
            'description' => 'required|string|max:1000',
            'size' => Rule::in(['sm', 'md', 'lg'])
        ]);

        // Get the description
        $description = $request->description;

        // Set the Size
        switch($request->size){
            case 'lg':
                $size = '1024x1024';
                break;
            case 'md':
                $size = '512x512';
                break;
            case 'sm':
                $size = '256x256';
        }

        // OpenAI
        $client = OpenAI::client(env('OPENAI_API_KEY'));

        $response = $client->images()->create([
            //'model' => 'dall-e-3',
            'prompt' => $description, //'A cute baby sea otter',
            'n' => 1,
            'size' => $size,
            'response_format' => 'url',
        ]);

        \Log::debug(json_encode($response));

        $url = $response->toArray()['data'][0]['url'];

        \Log::debug($url);


        /*foreach ($response->data as $data) {
            $data->url; // 'https://oaidalleapiprodscus.blob.core.windows.net/private/...'
            $data->b64_json; // null
        }*/

        //$response->toArray(); // ['created' => 1589478378, data => ['url' => 'https://oaidalleapiprodscus...', ...]]

        // Fetch the image content
        $imageContent = Http::get($url)->body();

        // Determine the image MIME type using Fileinfo
        $fileInfo = finfo_open(FILEINFO_MIME_TYPE);
        $imageMimeType = finfo_buffer($fileInfo, $imageContent);

        // Return the image as a response
        /*return response($imageContent)
            ->header('Content-Type', $imageMimeType);*/

        return view('image.show', ['imageUrl' => $url]);
    }
}
