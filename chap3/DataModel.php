<?php

abstract class DataModel
{
    protected string $tableName = 'table-name';

    public function save()
    {
        print_r('saving data to table: ' . $this->tableName);
    }
}