<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Traits\Seedable;

class BadasoDeploymentOrchestratorSeeder extends Seeder
{
    use Seedable;

    protected $seedersPath = 'database/seeders/Badaso/CRUD/';

    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        
        
        $this->seed(ServicesCRUDDataTypeAdded::class);
        $this->seed(ServicesCRUDDataRowAdded::class);
        
        
        $this->seed(ReviewsCRUDDataTypeAdded::class);
        $this->seed(ReviewsCRUDDataRowAdded::class);
        $this->seed(BookingsCRUDDataDeleted::class);
        
        
        $this->seed(RoomsCRUDDataDeleted::class);
        
        
        
        
        $this->seed(RoomsCRUDDataTypeAdded::class);
        $this->seed(RoomsCRUDDataRowAdded::class);
        $this->seed(BookingsCRUDDataTypeAdded::class);
        $this->seed(BookingsCRUDDataRowAdded::class);
    }
}
