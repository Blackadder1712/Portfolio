<?php

  if(isset($_POST['submit'])) //check if form submitted
     {
         include_once '../db/connect.php';

         $fname = $_POST["client_fname"];//one of these for each input
         $lname = $_POST["client_lname"];
         $email = $_POST["client_email"];
         $message = $_POST["client_message"];

    
         if(empty($fname) || empty($lname)|| empty($email)||  empty($message)) //error handling , if user misses input
         {
            header("Location: ../contact.php?signup=empty");// tells page what to do 
            exit();//if not go back to main index  ,? placeholder 
         }

         else
        {
            if(!preg_match("/^[a-zA-Z- ]*$/", $fname, $lname))//check if name is legit 
            {
                header("Location: ../contact.php?signup=char&client_email=$email&client_message=$message"); //only get rid of incorrect input 
                exit();
            }

               
            if(!filter_var($email, FILTER_VALIDATE_EMAIL))//check if email is legit 
            {
                header("Location: ../contact.php?signup=email&client_fname=$fname&client_lname=$lname&message=$message"); //only get rid of incorrect input 
                exit();
             
            }
            else
            {

                $values = array();

                $values["client_fname"] = $fname;
                $values["client_lname"] = $lname;
                $values["client_email"] = $email;
                $values["client_message"] = $message;

                function info($values, $db)
                {
                 try
                    {
                        $results = $db->prepare(
                        "INSERT INTO client_form(`client_fname`,`client_lname`, `client_email`,`client_message`) 
                        VALUES(?,  ?,  ?,  ?,  ?, ?)
                        ");
               
                        $results->bindParam(1, $values["client_fname"], PDO::PARAM_STR);
                        $results->bindParam(2, $values["client_lname"], PDO::PARAM_STR);
                        $results->bindParam(3, $values["client_email"], PDO::PARAM_STR);
                        $results->bindParam(6, $values["client_message"], PDO::PARAM_STR);
                    
                        $results->execute();
                        $_SESSION['success'] = true;
                    }
                 catch  (Exception $e)
                    {
                      
                        {
                          echo $e->getMessage();
                          $_SESSION['success']=false;
                        }
                    }
                };

                info($values, $db);

                header("Location: ../index.php?signup=success");
                exit();
                }
            };
            
       
      
        }
         
       