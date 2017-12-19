<?php
/**
 * Created by PhpStorm.
 * User: kwilliams
 * Date: 11/27/17
 * Time: 5:32 PM
 */


//each page extends controller and the index.php?page=tasks causes the controller to be called
class tasksController extends http\controller
{
    //each method in the controller is named an action.
    //to call the show function the url is index.php?page=task&action=show
    public static function show()
    {
        //session_start();
        $record = todos::findOne($_REQUEST['id']);
        self::getTemplate('show_task', $record);
    }

    //to call the show function the url is index.php?page=task&action=list_task

    public static function all()
    {
       session_start();

        //print_r($_SESSION);
        //print_r($_SESSION['userID']);
        //print_r($_SESSION['ID']);
       // print_r() ;
       $records = todos::findTasksbyID($_COOKIE['id']);
      


        if($records==false)
        {

          self::getTemplate('create_task');

        }
        else
            {
        self::getTemplate('all_tasks', $records);
        }
    }
    //public static function session()
    //{
      //  session_start();
        //print_r($_SESSION);
    //}
    //to call the show function the url is called with a post to: index.php?page=task&action=create
    //this is a function to create new tasks

    //you should check the notes on the project posted in moodle for how to use active record here

    public static function create()
    {
        //session_start();
        self::getTemplate('create_task');
    }

    //this is the function to view edit record form
    public static function edit()
    {
        //session_start();
        //$record = todos::findOne($_REQUEST['id']);
        $record = todos::findOne($_REQUEST['id']);
        self::getTemplate('edit_task', $record);

        //$result1 = get_object_vars($record);

        //self::getTemplate('edit_task', $result1);

    }


    public static function store()
    {

        session_start();
        $task = new todo();
        //$task->id = $_SESSION['userID'];
        $task->createddate = $_POST['createddate'];
        $task->duedate = $_POST['duedate'];
        $task->message = $_POST['message'];
        $task->isdone = $_POST['isdone'];
        $task->ownerid = $_COOKIE['id'];
        $task->owneremail= $_COOKIE['email'];
        //print_r($task);
        $task->save();
      header("Location: index.php?page=tasks&action=all");


    }

    public static function save() {


        session_start();


        //print_r($_REQUEST);
        $task = new todo();
        $task->id = $_REQUEST['id'];
        $task->createddate = $_POST['createddate'];
        $task->duedate = $_POST['duedate'];
        $task->message = $_POST['message'];
        $task->isdone = $_POST['isdone'];
        $task->ownerid = $_COOKIE['id'];
        $task->owneremail= $_COOKIE['email'];

        //print_r($task);

        $task->save();

       header("Location: index.php?page=tasks&action=all");

    }

    //this is the delete function.  You actually return the edit form and then there should be 2 forms on that.
    //One form is the todo and the other is just for the delete button
    public static function delete()
    {


        
        $record = todos::findOne($_REQUEST['id']);
        $record->delete();
        header("Location: index.php?page=tasks&action=all");


    }
    public static function allTask()
    {

        $records = todos::findAll();

            self::getTemplate('all_tasks', $records);
        }

        public static function action()
        {
            if ($_POST['btSubmit']=='Edit') {

                tasksController::show();



            }
            elseif ($_POST['btSubmit']=='Delete') {

                tasksController::delete();
            }

        }


}