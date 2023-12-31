<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
  use HasFactory;
  protected $table = 'program';
  protected $guarded = ['id'];

  public function cabor()
  {
    return $this->belongsTo(Cabor::class, 'cabor_id', 'id');
  }
}
