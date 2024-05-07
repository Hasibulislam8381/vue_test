<?php

use App\Models\Area;
use App\Models\Funds;
use App\Models\MutualFund;
use App\Models\PackageCategory;
use App\Models\PhotoGallery;
use Cloudinary\Cloudinary;
use App\Models\RequirementType;
use App\Models\Services;






function cloudUpload($file, $folder, $old)
{
    if ($old) {
        $token = explode('/', $old);
        $token2 = explode('.', end($token));
        cloudinary()->destroy('newFolder/' . $folder . '/' . $token2[0]);
    }

    $resourceType = 'image'; // Default resource type is image

    // Check if the uploaded file is a video based on its MIME type
    if (strpos($file->getMimeType(), 'video') !== false) {
        $resourceType = 'video'; // Set the resource type to video
    }



    $response = cloudinary()->upload($file->getRealPath(), [
        'folder' => 'newFolder/' . $folder,
        'resource_type' => $resourceType, // Set the resource type dynamically
        'transformation' => [
            'quality' => 'auto',
        ]
    ])->getSecurePath();

    return $response;
}


if (!function_exists('mysql_escape')) {
    function mysql_escape($inp)
    {
        if (is_array($inp)) return array_map(__METHOD__, $inp);

        if (!empty($inp) && is_string($inp)) {
            return str_replace(array('\\', "\0", "\n", "\r", "'", '"', "\x1a"), array('\\\\', '\\0', '\\n', '\\r', "\\'", '\\"', '\\Z'), $inp);
        }

        return $inp;
    }
}



function mFundparent($id)
{
    $data = MutualFund::find($id);
    if ($data) {
        return $data->year;
    } else {
        return "";
    }
}
function mFundchild($id)
{
    $data = MutualFund::find($id);
    if ($data) {
        return $data->parent_id;
    } else {
        return "";
    }
}


function getmFundChilds($id)
{
    return MutualFund::where('status', 'publish')->where('parent_id', $id)->orderBy('id', 'desc')->get();
}

function getFundname($id)
{
    $data = Funds::find($id);
    return $data->name;
}
function getServicesName($id)
{
    $data = Services::find($id);
    return $data->title;
}
function getPhotoname($id)
{
    $data = PhotoGallery::find($id);
    return $data->title;
}
function packageCategory($id)
{
    $data = PackageCategory::find($id);
    return $data->name;
}
// function getAreaname($id)
// {
//     $data = Area::find($id);
//     return $data->name;
// }