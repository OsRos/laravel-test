<?php
namespace App\Repository;

use App\Models\Dummy;

class DummyRepository implements IRepository
{

    private $model;
    function __constructor(Dummy $dummy)
    {
        $this->model=$dummy;
    }

    public function find(int $id) : Dummy {
        return Dummy::find($id);
    }

    public function findAll(bool $chunked=true)
     {
        $results = collect([]);
        if ($chunked) {
            //FIXME need to improve avoid chunks 
            Dummy::chunk(2,function($chunks) use (&$results) {
                $results=$results->concat($chunks);
            });
        }
        else {
           $results = Dummy::all();
        }
        return $results;
    }
}
