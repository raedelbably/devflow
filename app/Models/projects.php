<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projects extends Model
{
    use HasUuids;
    use HasFactory;
    protected $table = 'projects';
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = ["title" , "author" , 'body'];
    protected $guarded = ['id'];
    function tags(){
    return  $this->belongsToMany(tag::class , "tag_id");
    }
    //
}
