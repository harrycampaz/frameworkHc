<?php 
namespace App\Controllers;
use \Core\View;
/** 
* Home Controller
* PHP -v 7.1.19
*/
class Home extends \Core\Controller {
    /** 
     * Show the index page
     * @return void
    */


    /**
     * Before filter
     *
     * @return void
     */
    protected function before()
    {
        //echo "(before) ";
        //return false;
    }

    /**
     * After filter
     *
     * @return void
     */
    protected function after()
    {
        //echo " (after)";
    }

    public function indexAction(){
        $data = array('name'=> 'Harry ', 'colors' => ['Black', 'Red', 'Blue']);
        View::renderTemplate("Home/index.html", $data);
    }
}