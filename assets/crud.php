<?php
    include "dbConn.php";
    include "coreFunctions.php";
    
    class CRUD extends Database
    {
        public function createRecord($tableName, $params, $check = false){
            $proceed = true;
            if($check){
                $doCheck = $this->selectRecord($tableName, $check);
                $checkStatus = decodeJSON($doCheck)[0];
                $proceed = ($checkStatus == 300)?true:false;
            }
            if($proceed){
                $queryParam = "INSERT INTO `$tableName` VALUES ($params)";
                $insertQuery = $this->connect()->query($queryParam);
                if($insertQuery){
                    $output = createArray(200, "Record Created Successfully");
                }
                else
                {
                    $output = createArray(404, "Failed to Create new Record");
                }
            }
            else
            {
                $output = createArray(404, "A record exist with specified Check Paramters");
            }
            return encodeJSON($output);
        }

        public function selectRecord($tableName, $params = null){
            $params = ($params)? "WHERE $params":"";
            $queryParam = "SELECT * FROM `$tableName` $params";
            $selectQuery = $this->connect()->query($queryParam);
            $numRows = $selectQuery->num_rows;
            if($numRows > 0){
                while($row = $selectQuery->fetch_assoc()){
                    $data[] = $row;
                }
                $output = createArray(200, array('numRows' => $numRows,
                                                 'response' => $data,
                                                 'message' => "Record Fetched Successfully"));
            }
            else
            {
                $output = createArray(300, "No Record Matches Search Paramter");
            }
            return encodeJSON($output);
        }

        public function updateRecord($tableName, $params){
            $queryParam = "UPDATE `$tableName` SET $params";
            $updateQuery = $this->connect()->query($queryParam);
            if($updateQuery){
                $output = createArray(200, "Record Updated Successfully");
            }
            else
            {
                $output = createArray(404, "Could not Complete Record Updating");
            }
            return encodeJSON($output);
        }

        public function deleteRecord($tableName, $params){
            $queryParam = "DELETE FROM `$tableName` WHERE $params";
            $deleteQuery = $this->connect()->query($queryParam);
            if($deleteQuery){
                $output = createArray(200, "Record Deleted Successfully");
            }
            else
            {
                $output = createArray(404, "Could not Complete Record Erasing");
            }
            return encodeJSON($output);
        }

        public function emptyTable($table){
            if(is_array($table)){
                for($i = 0; $i < count($table); $i++){
                    $queryParam = "TRUNCATE `$table[$i]`";
                    $truncateQuery = $this->connect()->query($queryParam);
                    if($truncateQuery){
                        $output = createArray(200, "Successfully Truncated $table[$i]");
                    }
                    else
                    {
                        $output = createArray(404, "Failed to truncate $table[$i]");
                    }
                    return encodeJSON($output);
                }
            }
            else
            {
                $queryParam = "TRUNCATE `$table`";
                $truncateQuery = $this->connect()->query($queryParam);
                if($truncateQuery){
                    $output = createArray(200, "Success Truncated $table");
                }
                else
                {
                    $output = createArray(404, "Failed to truncate $table");
                }
                return encodeJSON($output);
            }
        }

        public function closeConnection(){
            $closeConn = $this->connect()->close();
            if($closeConn){
                $output = createArray(200, "Database Connection Closed Successfully");
            }
            else
            {
                $output = createArray(404, "Could not Close DATABASE Connection at the moment");
            }
            return encodeJSON($output);
        }
    }  
?>