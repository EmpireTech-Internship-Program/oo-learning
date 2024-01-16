<?php

abstract class AbstractRepository implements Repository
{

    protected Model $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function create($data): Model
    {
        $this->model->create($data);
        return $this->model;
    }
}