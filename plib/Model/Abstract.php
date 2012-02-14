<?php
/**
 * Abstract Model
 **/
define('MODEL_PATH', realpath(dirname(__FILE__)));

abstract class modules_rmsp_Model_Abstract
{
    protected $_dbh = null;
    const DATABASE_NAME = 'rmsp.db';

    public function __construct()
    {
        $this->_dbh = modules_rmsp_Model_Database::getInstance('sqlite:' . MODEL_PATH
                . DIRECTORY_SEPARATOR . self::DATABASE_NAME);
    }
    
    abstract public function save();
    abstract public function remove();
}