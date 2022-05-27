<?php defined('BASEPATH') or exit('No direct script access allowed');

// load the MX_Loader class
require APPPATH."third_party/MX/Loader.php";

class MY_Loader extends MX_Loader
{
    //
    public $CI;

    /**
     * An array of variables to be passed through to the
     * view, layout,....
     */
    protected $data = array();

    /**
     * [__construct description]
     *
     * @method __construct
     */
    public function __construct()
    {
        // To inherit directly the attributes of the parent class.
        parent::__construct();

        //
        $CI = & get_instance();
    }
}
