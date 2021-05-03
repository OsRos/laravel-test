<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dummy;
use Facades\App\Repository\DummyRepository;
use App\Repository\IRepository as RepositoryIRepository;

class HomeController extends Controller
{
    private $repository;
    function __constructor(RepositoryIRepository $repository) {
        $this->repository=$repository;
    }

    function index() {
        return "Hello World";
    }
    
    function store(Request $request) {
        $dummy = new Dummy;
        $dummy->testData = $request->name;
        $dummy->save();
    }

    function get(Dummy $dummy):Dummy {
        return $dummy;
    }

    function getAll() {
        // return DummyRepository::findAll();
        return DummyRepository::findAll();
    }

    // function getDummiesWithVowels() {

    // }
}
