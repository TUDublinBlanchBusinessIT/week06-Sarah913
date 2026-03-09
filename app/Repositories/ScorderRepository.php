<?php

namespace App\Repositories;

use App\Models\Scorder;
use App\Repositories\BaseRepository;

/**
 * Class ScorderRepository
 * @package App\Repositories
 * @version March 9, 2026, 3:26 pm UTC
*/

class ScorderRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'orderdate',
        'deliverystreet',
        'deliverycity',
        'deliverycounty',
        'ordertotal'
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
        return Scorder::class;
    }
}
