<?php

class Auth extends BackendController {
    function index() {
        echo $this->db->get('base_url');
    }
}