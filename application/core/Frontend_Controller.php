<?php defined('BASEPATH') or exit('No direct script access allowed');

class FrontendController extends MY_Controller
{
    //
    public $CI;

    /**
     * An array of variables to be passed through to the
     * view, layout, ....
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

        // CI Profiler for debugging
        $this->output->enable_profiler(true);

        // This function returns the main CodeIgniter object.
        // Normally, to call any of the available CodeIgniter object or pre defined library classes then you need to declare.
        $CI =& get_instance();

        // Example data
        // Site name
        $this->data['sitename'] = 'CodeIgniter-HMVC';

        // Example data
        // Browser tab
        $this->data['site_title'] = ucfirst('Frontend');
    }
}
