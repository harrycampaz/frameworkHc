<?php
namespace App\Controllers;
use \Core\View;
/** 
*Posts Controller
* PHP -v 7.1.19
*/
class Posts extends \Core\Controller {

 
    /**
    * Show the index page
    * @return void
    */
    public function addNewAction(){
        echo 'Hola desde el metodo addNew in el metoo';
    }

     /**
     * Show the edit page
     *
     * @return void
     */
    public function editAction()
    {
        View::renderTemplate('Posts/index.html');
    }

       /**
    * Show the index page
    * @return void
    */
    public function indexAction(){
        View::renderTemplate('Posts/index.html');
    }

}