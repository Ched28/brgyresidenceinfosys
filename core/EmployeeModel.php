<?php

namespace app\core;

abstract class EmployeeModel extends DbModel
{
    abstract public function getDisplayName() : string;
}