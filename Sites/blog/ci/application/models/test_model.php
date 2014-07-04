<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Test_model extends CI_Model {

    /**
     * Identity
     *
     * @var string
     * */
    public $identity;

    function _construct() {
        // Call the Model constructor
        parent::_construct();
    }

    function getRow() {
        $result = $this->db->query("select * from dbo.Users")->result();
        return $result;
    }

}