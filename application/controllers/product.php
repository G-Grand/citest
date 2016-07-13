<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function articles() {
        $this->load->model("articles_model");
        $data["articles"] = $this->articles_model->getArticles();
        $this->load->view("articles_view",$data);
    }
}
