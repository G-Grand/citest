<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Articles_model extends CI_Model {

        function getArticles() {
//            $this->db->where("id", 2);
            $this->db->order_by("id", "asc");
            var_dump($this->db->get("article")->result("array"));
        }

    }