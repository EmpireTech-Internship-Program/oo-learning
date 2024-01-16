<?php

interface Repository
{
    public function create($data): Model;
}