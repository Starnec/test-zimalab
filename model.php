<?php

namespace app;

use Db;

abstract class Model
{
    public function __construct(){
        Db::instance();
    }