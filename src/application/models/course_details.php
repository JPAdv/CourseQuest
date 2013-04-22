<?php

class course_details extends CI_Model {

    function insertRow($o){

        $data = array(
            "id" => $o->id,
            "profname" => $o->first_name." ".$o->last_name,
            "profimage" => $o->photo
        );

        $this->db->insert('coursedetails',$data);
        return $this->db->insert_id();

    }

    function emptyTable(){
        $this->db->empty_table('coursedetails');
    }

}