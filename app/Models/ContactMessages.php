<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ContactMessages extends Model
{
    use HasFactory;

    protected $attributes = array(
        'replied' => 'false'
    );


    public static function unreplied()
    {
        return ContactMessages::where('replied', false)->get();
    }

    public static function replied()
    {
        return ContactMessages::where('replied', true)->get();
    }
}
