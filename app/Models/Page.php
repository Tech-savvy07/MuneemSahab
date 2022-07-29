<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = "page";
    use HasFactory;
    public function getPageByPageName($page_name)
    {
        return Page::where(['page_url'=> $page_name,'is_active'=>1])->first();;
    }
  
}
