<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GoogleCloudVision\GoogleCloudVision;
use GoogleCloudVision\Request\AnnotateImageRequest;
use File;
use Intervention\Image\ImageManager;
use Intervention\Image\ImageManagerStatic as Image;

class VisionController extends Controller
{
    public function annotateImage(Request $request) {
            //convert image to base64
        $public = base_path().'/public/images/';
        $path = $public . $request->proof_image;
        $remote = 'http://localhost:8000/images/proofs/'.$request->proof_image;
        $file = Image::make($path);
        $type = File::mimeType($path);

        $image = base64_encode(file_get_contents($file));
            //prepare request
        $request = new AnnotateImageRequest();
        $request->setImage($image);
        $request->setFeature("TEXT_DETECTION");
        $gcvRequest = new GoogleCloudVision([$request], env('GOOGLE_CLOUD_KEY'));
            //send annotation request
        $response = $gcvRequest->annotate();
            
        echo json_encode(["description" => $response->responses[0]->textAnnotations[0]->description]);

    }
}
