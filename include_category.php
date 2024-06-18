<?php 

 ///////////////////////////////////////////////////////////////////////

  // Function to add category
  function addCategory($title) {
    //create insert statement
    $sql = "insert into category_table values(".(getMaxCategoryID()+1).", \"".$title."\");";

    //open connection
    $connection = createConnection();

    //Execute SQL
    $connection->query($sql);

    //close connection
    $connection->close();
  }

  ///////////////////////////////////////////////////////////////////////

  // Function to get max category ID
  function getMaxCategoryID() {
    //set default max cid
    $maxCid=0;

    //create SQL statement
    $sql = "select max(category_id) as cid from category_table;";

    //open connection
    $connection = createConnection();

    //Execute SQL to get results
    $result = $connection->query($sql);

    //Check if results have any rows
    if ($result->num_rows > 0) {
        //get first row
        $row = $result->fetch_assoc();
        //read variable
        $maxCid = $row["cid"];
    }

    //close connection
    $connection->close();
    
    return $maxCid;
  }

  ///////////////////////////////////////////////////////////////////////

    // Function to get category list
    function getCategoryList() {
        //open connection
        $connection = createConnection();

        //create SQL statement
        $sql = "SELECT category_id, category_name FROM category_table";
    
        //Execute SQL to get results
        $db_records = $connection->query($sql);

        //close connection
        $connection->close();

        return $db_records;
    }
    ///////////////////////////////////////////////////////////////////////

    // Function to get category 
    function getCategoryNameById($cid) {
        //create SQL statement
        $sql = "SELECT category_id, category_name FROM category_table where category_id=".$cid;
        $category_name="";
        //open connection
        $connection = createConnection();

        //Execute SQL to get results
        $db_record = $connection->query($sql);

        //Check if results have any rows
        if ($db_record->num_rows > 0) {
            //get first row
            $row = $db_record->fetch_assoc();
            //read variable
            $category_name = $row["category_name"];
        }

        //close connection
        $connection->close();

        return $category_name;
    }
    ///////////////////////////////////////////////////////////////////////

    //Function to edit existing category
    function editCategory($l_cid, $l_catName){
        //create edit statement
        $sql = "UPDATE category_table set category_name =\"".$l_catName."\" where category_id=".$l_cid;

        //open connection
        $connection = createConnection();

        //Execute SQL
        $connection->query($sql);

        //close connection
        $connection->close();
    }
    ///////////////////////////////////////////////////////////////////////

    function deleteCategory($l_cid){
        //create edit statement
        $sql = "DELETE from category_table where category_id=".$l_cid;

        //open connection
        $connection = createConnection();

        //Execute SQL
        $connection->query($sql);

        //close connection
        $connection->close();
    }
    ///////////////////////////////////////////////////////////////////////
?>