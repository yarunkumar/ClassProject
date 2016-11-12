<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Image;
use Illuminate\Http\Request;


class ImageController extends Controller
{
    /**
     * Generate Image upload View
     *
     * @return void
     */
    public function dropzone()
    {
        return view('dropzone-view');
    }

    /**
     * Image Upload Code
     *
     * @return void
     */
    public function dropzoneStore(Request $request)
    {
        dd($request);
        $image = $request->file('file');
        $original_name = time().$image->getClientOriginalName();
        $image->move(public_path('images'),$original_name);
        return response()->json(['success'=>original_name]);



    }
//Image::create($request->all());
    /**
     * Remove Vendor from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = Image::findOrFail($id);
        $image->delete();

    }
//    protected $image;
//
//    public function __construct(ImageRepository $imageRepository)
//    {
//        $this->image = $imageRepository;
//    }
//
//    public function getUpload()
//    {
//        return view('pages.upload');
//    }
//
//    public function postUpload()
//    {
//        $photo = Input::all();
//        $response = $this->image->upload($photo);
//        return $response;
//
//    }
//
//    public function deleteUpload()
//    {
//
//        $filename = Input::get('id');
//
//        if(!$filename)
//        {
//            return 0;
//        }
//
//        $response = $this->image->delete( $filename );
//
//        return $response;
//    }
//
//    /**
//     * Part 2 - Display already uploaded images in Dropzone
//     */
//
//    public function getServerImagesPage()
//    {
//        return view('pages.upload-2');
//    }
//
//    public function getServerImages()
//    {
//        $images = Image::get(['original_name', 'filename']);
//
//        $imageAnswer = [];
//
//        foreach ($images as $image) {
//            $imageAnswer[] = [
//                'original' => $image->original_name,
//                'server' => $image->filename,
//                'size' => File::size(public_path('images/full_size/' . $image->filename))
//            ];
//        }
//
//        return response()->json([
//            'images' => $imageAnswer
//        ]);
//    }
}