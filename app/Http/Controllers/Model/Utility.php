<?php namespace App\Http\Controllers\Model;

use Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Input;
use Image;
use Carbon\Carbon;


class Utility{

/*
    上傳多個圖檔，壓縮圖片檔案，並在本地端移動到upload資料夾，並複製一份到full/upload資料夾
    $request 使用的request方法
    $picName 圖片欄位名稱
    $width 寬度
    $height 高度
    $isResize 是否要resize
  */
  public static function picsUpload(Request $request , $picsName = 'image')
  {
    // getting all of the post data
      $files = Input::file($picsName);
      // dd($files);
      // Making counting of uploaded images
      $file_count = count($files);
      // dd($file_count);
      // start count how many uploaded
      $uploadcount = 0;
      $fileNames = array();
      foreach($files as $file) {
        $destinationPath = 'upload/';
        $extension = $file->getClientOriginalExtension(); // getting image extension
        $fileName = Utility::randomFileName(12) .'.' . $extension;// renameing image
        // dd($fileName);
        // dd(Utility::randomFileName(12)); 
        $file->move($destinationPath, $fileName); // uploading file to given path
        $fileNames[] = 'upload/' . $fileName;
        $uploadcount ++;

      }
      if($uploadcount == $file_count){ 
        return $fileNames;
      }else{
        return null;
      }
  }



    /*
    *  生成隨機的檔名
    *  $qty 可傳入檔名的長度
    */
  public static function randomFileName($qty)
  {
    $ran_chars = '1234567890abcdefghijklmnopqrstuvwxyz';
    $ran_string = '';
    for($i = 0; $i < $qty; $i++){
      $ran_string .= $ran_chars[rand(0, 35)];
    }
    // dd('random');
    return $ran_string;
  }

  }