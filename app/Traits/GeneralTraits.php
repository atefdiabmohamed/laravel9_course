<?php 
namespace App\Traits;
trait GeneralTraits{

    function upload($folderStoringPath,$image){

        $extension=strtolower($image->extension());
        $filename=time().rand(1,10000).".".$extension;
        $image->move("uploads",$filename);
        return $filename;
        }


}
