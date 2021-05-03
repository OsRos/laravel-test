<?php
namespace App\Repository;

interface IRepository {
    function find(int $id);
    function findAll();
}
?>