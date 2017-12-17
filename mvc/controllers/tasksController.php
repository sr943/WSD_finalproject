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
        $record = todos::findOne($_REQUEST['id']);
        
        //print_r($_REQUEST['id']);
        //$record = todos::findtodo($_REQUEST['id']);
        //print_r($record);
        //print utility\htmlTable::genarateTableFromMultiArray($record);
        self::getTemplate('show_task', $record);
    }

    public static function userTask()
    {
        if (session_status()== PHP_SESSION_NONE) {
            session_start();
        }


                $_SESSION["userID"];
                $record = todos::findtodo($_SESSION["userID"]);
                //print_r($record);
                self::getTemplate('all_tasks',$record);
    }
    

    //to call the show function the url is index.php?page=task&action=list_task

    public static function all()
    {
        $records = todos::findAll();
        /*session_start();
           if(key_exists('userID',$_SESSION)) {
               $userID = $_SESSION['userID'];
           } else {

               echo 'you must be logged in to view tasks';
           }
        $userID = $_SESSION['userID'];

        $records = todos::findTasksbyID($userID);
        */
        self::getTemplate('all_tasks', $records);

    }

public static function insertTask() {
        $user = new todo();

        
        $user->owneremail = $_POST['mail'];
        $user->ownerid = $_POST['oid'];
        $user->createddate = $_POST['createdate'];
        $user->duedate = $_POST['duedate'];
        $user->message = $_POST['message'];
        $user->isdone = $_POST['isdone'];
        session_start();
      
        $user->userid=$_SESSION['userID'];
       
        $user->save();
        header("Location: index.php?page=tasks&action=userTask");


    }   

    //to call the show function the url is called with a post to: index.php?page=task&action=create
    //this is a function to create new tasks

    //you should check the notes on the project posted in moodle for how to use active record here

    public static function create()
    {
        print_r($_POST);
    }

    //this is the function to view edit record form
    public static function edit()
    {
        $record = todos::findOne($_REQUEST['id']);

        self::getTemplate('edit_task', $record);

    }

    //this would be for the post for sending the task edit form
    public static function store()
    {


        $record = todos::findOne($_REQUEST['id']);
        $record->body = $_REQUEST['body'];
        $record->save();
        print_r($_POST);

    }

    public static function save() {
        $user = todos::findOne($_REQUEST['id']);

        
        $user->owneremail = $_POST['mail'];
        $user->ownerid = $_POST['oid'];
        $user->createddate = $_POST['createdate'];
        $user->duedate = $_POST['duedate'];
        $user->message = $_POST['message'];
        $user->isdone = $_POST['isdone'];
        $user->userid = $_SESSION['userid'];
        $user->save();
        header("Location: index.php?page=tasks&action=all");


    }

    

    //this is the delete function.  You actually return the edit form and then there should be 2 forms on that.
    //One form is the todo and the other is just for the delete button
    public static function delete()
    {
        $record = todos::findOne($_REQUEST['id']);
        $record->delete();
        header("Location: index.php?page=tasks&action=userTask");
        print_r("Deleted");
        


    }

}