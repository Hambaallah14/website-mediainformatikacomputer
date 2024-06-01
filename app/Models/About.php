<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model{
    
    protected $table    = '_about';
    protected $fillable = ['slug', 'nama', 'tanggal_lahir', 'descripsi'];
}
?>