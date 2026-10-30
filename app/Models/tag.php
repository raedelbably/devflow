<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    //
    use HasUuids;
    use HasFactory;
    protected $table = 'tag';
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = ['name'];
    protected $guarded = ['id'];
    function projects(){
    return  $this->belongsToMany(projects::class, 'projects_id');
    }
}
