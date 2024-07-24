<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'clients';

    protected $primaryKey = 'ID_Client';

    protected $fillable = [
        'Client_Name',
        'Client_Address',
        'Category',
    ];
}
