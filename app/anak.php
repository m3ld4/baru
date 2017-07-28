<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anak extends Model
{
    protected $table = 'anaks';
        protected $fillable =['nama','keluarga_id','umur','alamat'];
        protected $visible=['nama','keluarga_id','umur','alamat'];
        public $timestamps=true;

        public function keluarga()
        {
        		return$this->belongsto('App\keluarga', 'keluarga_id');
        }
}
