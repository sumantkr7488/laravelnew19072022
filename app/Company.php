<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['name', 'address', 'email', 'website'];
}

/*
Company::all()
Company::take(3)->get()
Company::first()
Company::find(1)
Company::find([1, 2, 3])
Company::where('website', 'kreiger.net')->first()
Company::whereWebsite('kreiger.net')->first()

# create new record

$company = new Company()
$company->name = "My company"
$company->address = "My Address"
$company->email = "mycompany@test.com"
$company->website = "mywebsite.com"
$company->save()

# update
$company->website = "mywebsitecompany.com"
$company->save()

# delete record
$company = Company::find(1)

$company->delete()
Company::destroy(11)
Company::destroy([7, 8, 9])

# Mass assignment

## create

$data = [
    "name" => "Company 3",
    "address" => "Address company 3",
    "email" => "company3@email.com",
    "website" => "https://company3.com",
    "contact" => "contact company 3"
];
Company::create($data)

## update
$company = Company::first()
$company->update($data)
*/