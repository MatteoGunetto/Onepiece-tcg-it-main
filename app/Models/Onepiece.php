<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Onepiece extends Model
{
    use HasFactory;

    protected $fillable = [
        'CardNum',
        'Alt',
        'Card_number',
        'Rarity',
        'Card_Type',
        'Primary_color',
        'Secondary_color',
        'Power',
        'Cost_Life',
        'Name',
        'Effect',
        'Type_1',
        'Type_2',
        'Attribute',
        'Img',
        'TcgPlayer'
    ];
}
