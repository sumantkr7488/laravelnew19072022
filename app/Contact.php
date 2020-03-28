<?php

namespace App;

use App\Scopes\FilterSearchScope;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use FilterSearchScope;
    
    protected $fillable = ['first_name', 'last_name', 'email', 'phone', 'address', 'company_id', 'user_id'];

    public $filterColumns = ['company_id'];
    
    public $searchColumns = ['first_name', 'last_name', 'email', 'company.name'];

    public function company()
    {
        return $this->belongsTo(Company::class)->withoutGlobalScopes();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeLatestFirst($query)
    {
        return $query->orderBy('id', 'desc');
    }
}