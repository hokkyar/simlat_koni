<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
  use HasFactory;
  protected $table = 'prestasi';
  protected $guarded = ['id'];

  public function cabor()
  {
    return $this->belongsTo(Cabor::class, 'cabor_id', 'id');
  }
}
