<?php

trait MasterTableTrait
{

    protected $primaryKey = 'id';

    protected function insertRecords($table, $array, $ignoreExists)
    {
        foreach ($array as $attributes) {
            $query = DB::table($table);
            if (is_array($this->primaryKey)) {
                foreach ($this->primaryKey as $key) {
                    $query = $query->where($key, $attributes[$key]);
                }
                $isExists = $query->count();
            } else {
                $isExists = $query->where($this->primaryKey, $attributes[$this->primaryKey])->count();
            }

            if (!$isExists) {
                $query->insert($attributes);
            } elseif (!$ignoreExists) {
                $query->update($attributes);
            }
        }
    }

    public function replaceRecords($table, $array)
    {
        $this->insertRecords($table, $array, false);
    }

    public function insertIgnoreRecords($table, $array)
    {
        $this->insertRecords($table, $array, true);
    }
}
