<?php
/**
 * Created by PhpStorm.
 * User: paulo.mazzia
 * Date: 06/10/2017
 * Time: 18:19
 */

exec(__DIR__ . '/vendor/bin/phinx rollback');
exec(__DIR__ . '/vendor/bin/phinx migrate');
exec(__DIR__ . '/vendor/bin/phinx seed:run');