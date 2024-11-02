<?php
namespace App\Filters\V1;
use App\Filters\ApiFilter;
use Illuminate\http\request;

class CustomersFilter extends ApiFilter {

    protected $safeParms = [
        'postalCode' => ['eq', 'gt', 'ls'],
        'type' => ['eq'],
        'email' => ['eq'],
        'address' => ['eq'],
        'city' => ['eq'],
        'state' => ['eq'],
        'name' => ['eq']
    ];

    protected $columnMap = [
      'postalCode' => 'postal_code'
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'gt' => '>',
        'gte' => '>=',
        'lte' => '<=',
    ];
}
