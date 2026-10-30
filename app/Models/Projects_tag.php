<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
class Projects_tag extends Model
{
    //
    use HasUuids;
    protected $table = 'projects_tag';
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = ['Projects_id' , 'tag_id'];
    protected $guarded = ['id'];
}
