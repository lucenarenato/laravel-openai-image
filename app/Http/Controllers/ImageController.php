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
        self::saveImage($url);
        return view('image.show', ['imageUrl' => $url]);
    }

    // Create a function that saves the image url to storage and returns the image path
    public function saveImage($imageUrl)
    {
        // Check if the URL is valid
        if (!filter_var($imageUrl, FILTER_VALIDATE_URL)) {
            throw new \InvalidArgumentException('Invalid URL provided');
        }

        // Extract file name from the URL
        $fileName = basename($imageUrl);
        $fileName = preg_replace('/[^a-zA-Z0-9._-]/', '_', $fileName); // Replace invalid characters with underscores

        $sha256 = hash('sha256', rand(1, 900000000) . date('YmdHis'));

        // Generate a unique filename to avoid conflicts
        $uniqueFileName = md5(uniqid()) . '_' . $sha256;

        // Determine the path to save the image
        $imagePath = storage_path('app/images/' . $uniqueFileName . '.png');

        // Attempt to download and save the image
        $imageData = file_get_contents($imageUrl);
        if ($imageData === false) {
            throw new \RuntimeException('Failed to download the image');
        }

        // Save the image data to storage
        if (file_put_contents($imagePath, $imageData) === false) {
            throw new \RuntimeException('Failed to save the image');
        }

        // Return the path to the saved image
        return $imagePath;
    }
}
