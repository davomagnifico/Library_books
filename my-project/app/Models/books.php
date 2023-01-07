<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    public $id;
    public $title;    
    public $author;
    public $publication_date;
    public $number_of_pages;
    public $dewey_reference;
    public $cover_image;
    public $description;
    public out_on_loan;

    use HasFactory;

    public static function find($book_id) {

    }
}
