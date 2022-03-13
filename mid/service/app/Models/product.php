<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
   
    protected $table='products';
    public $timestamps = false;

    public function assignedteacher()
    {
        
        return orderdetail::where('orderid', $this->id)->get();
    }
}
