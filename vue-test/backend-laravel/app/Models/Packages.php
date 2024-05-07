<?php

namespace App\Models;

use App\Models\RequestMessage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Packages extends Model
{
    use HasFactory, SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = ['id'];

    public function RequestMessage()
    {
        return $this->hasMany(RequestMessage::class);
    }
    public function packageType()
    {
        return $this->belongsTo(PackageType::class);
    }
    public function packageCategory()
    {
        return $this->belongsTo(PackageCategory::class);
    }
}
