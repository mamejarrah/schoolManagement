<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable =['name' , 'email' , 'phone' , 'section' , 'image','filieres'];
    
    
   // public function filieres()
//{ 
    
    
    //return $this->belongsTo(Filiere::class); 
//}



}