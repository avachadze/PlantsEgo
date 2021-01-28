<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactReply extends Model
{
    use HasFactory;

    public function contactMessage()
    {
        return $this->belongsTo(ContactMessages::class);
    }

    public static function saveReply(\Illuminate\Http\Request $request, $id)
    {
        $toSave= new ContactReply();
        $toSave->subject= $request->input('form-Subject');
        $toSave->msg= $request->input('msg');
        $toSave->msgId= $id;
        $toSave->save();
    }
}
