<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MessageBoard extends Model
{
    protected $table = 'message_boards';
    protected $primaryKey = 'id';

    protected $fillable = ['user_id', 'username', 'email', 'mobile', 'content', 'user_ip', 'device'];
}
