<?php
function singleImage($image,$dir = null)
{

    $extension = $image->getClientOriginalExtension();
    $name = rand(1000,3000);
    $imageName = $name.'.'.$extension;
    if ($dir)
    {
        $directory =$dir;

    }else
    {
        $directory = "frontend/Allimage/";
    }

    $imageUrl = $directory.$imageName;
    $image->move($directory,$imageName);
    return $imageUrl;

}
