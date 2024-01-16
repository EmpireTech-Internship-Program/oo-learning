<?php

class BankRepository extends AbstractRepository
{
    public function __construct(Bank $bank)
    {
        parent::__construct($bank);
    }
}
