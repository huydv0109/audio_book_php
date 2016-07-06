<?php

/**
 * Created by PhpStorm.
 * User: quyetdd
 * Date: 01/04/2016
 * Time: 2:49 PM
 */
class Base_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }


    public function get_all($id)
    {
        $rs = array();
        $sql = "select * from audio_book where audio_type_id like '%$id%'";
        $query = $this->db->query($sql);
        if($query->num_rows() > 0){
            $rs = $query->result_array();
        }
        return $rs;

    }
}