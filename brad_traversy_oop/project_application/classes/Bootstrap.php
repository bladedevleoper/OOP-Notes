<?php

class Bootstrap
{
    private $controller;
    private $action;
    private $request;

    public function __construct($request){
        $this->request = $request;

        //Here we are checking if the controller is empty, if it is then set controller to 'home
        //if the URL is blank then return home controller else return the controller. checks the following url localhost/controllername
        if($this->request['controller'] == ""){
            $this->controller = 'home';
        } else {
            $this->controller = $this->request['controller'];
        }

        //Create the action method, which controls the views.
        //this will check the method for example localhost/user/register. register being the name of the method(action).
        if($this->request['action'] == ""){
            //if null then return set action property to 'index'
            $this->action = 'index';
        } else {
            $this->action = $this->request['action'];
        }

    
        //test to see if the __construct() works
        // echo $this->controller;
}

public function createController()
{       
    //this method basically instantites the controller that is typed into the URL

    //once we know which controller we want, we are going to check for the class
    //if the class exists, then we will create a variable
    if(class_exists($this->controller)){
        
        //set the variable to class_parents array and pass it the controller property
        $parents = class_parents($this->controller);
        //check extends
            if(in_array("Controller", $parents)){
            //this then checks the method exists
                        if(method_exists($this->controller, $this->action)){
                            //if true, then instantiates a new controller
                                return new $this->controller($this->action, $this->request);
                        } else {
                            //inform the user the method does not exist
                            echo '<h1>Method does not exist</h1>';
                            return;
                        }
            } else {
                //inform the user the base controller is not found
                echo '<h1>Base Controller not found</h1>';
                return;
            }
        } else {
            //inform the user the controller class does not exist
            echo '<h1>Controller class does not exist</h1>';
            return;
        }
}

}
