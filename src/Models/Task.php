<?php 
namespace OliverCharlesLowe\Permission\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Task extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description'];
}