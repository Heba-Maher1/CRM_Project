<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Contact extends Model
{
    use HasFactory;
    public static string $disk = 'public';


    protected $fillable = [
         'user_id', 'name', 'date_birth' , 'address' , 'phone' , 'company', 'job'  ,'image'
    ];

    public static function uploadImage($file)
    {
        $path = $file->store('/covers', [
            'disk' => static::$disk
        ]);
        return $path;
    }

    public static function deleteImage($path)
    {
        if(!$path || !Storage::disk(static::$disk)->exists($path)){
            return;
        }

        return Storage::disk(static::$disk)->delete($path);
    }
}
