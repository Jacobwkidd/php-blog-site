<?php
class PageDataAccess{

}

function getById($postId){
    $qStr = "SELECT * FROM pages where id =" . $postId . "AND published is NOT NULL";
    $result = mysqli_query($this->link, $qStr);
    if(mysqli_num_rows()){
        
    }
}

?>
