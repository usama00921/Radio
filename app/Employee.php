<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'EmpName', 'EmpCode','CNIC','UserName','DutyType','Password','Gender','DateofBirth','MartialStatus','RegistrationDate',
        'Religion','RetirementYear','isContract','ContractType','Picture','fkRoleId','Sect','isQuote','QuoteType',
        'birthplace','ServiceStatus','Domicile','personalFileNumber','currentBasicPay','firstjoiningdate'
    ];
}
