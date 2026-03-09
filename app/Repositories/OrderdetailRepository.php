<?php

namespace App\Repositories;

use App\Models\Orderdetail;
use App\Repositories\BaseRepository;

/**
 * Class OrderdetailRepository
 * @package App\Repositories
 * @version March 9, 2026, 3:27 pm UTC
*/

class OrderdetailRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'productid',
        'orderid',
        'quantity',
        'subtotal'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Orderdetail::class;
    }
}
