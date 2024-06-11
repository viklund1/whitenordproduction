<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Screen\AsSource;

class News extends Model
{
    use HasFactory, AsSource, Attachable;

    protected $fillable = ['title', 'text', 'image'];

    //protected $sortable =
}
