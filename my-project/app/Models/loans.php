<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loans extends Model
{
    public $id;
    public $book_id;
    public $borrower_name;
    public $loan_start;
    public $loan_end;

    use HasFactory;
}
