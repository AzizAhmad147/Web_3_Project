


<?php
    require 'db.php';
    
    class db_class extends db_connect{  
        
        public function __construct(){
            $this->connect();
        }
        
        public function create_item($catg,$subcatg,$img,$itemno,$price,$desc,$t){
            $stmt = $this->conn->prepare("INSERT INTO `items` (catg,subcatg,img,itemno,price,description,dat) VALUES ('$catg','$subcatg','$img','$itemno','$price','$desc','$t')") or die($this->conn->error);
            $stmt->bind_param("ss", $firstname, $lastname);
            if($stmt->execute()){
                         mkdir("itempics/");
         $destination= "itempics/".$itemno.".jpg";
          move_uploaded_file($_FILES['file']['tmp_name'],$destination);
                $stmt->close();
                $this->conn->close();
                return true;
            }
        }

        public function read_item($cat,$subcat){
            $stmt = $this->conn->prepare("SELECT * FROM `items` where catg='$cat' and subcatg='$subcat'") or die($this->conn->error);
            if($stmt->execute()){
                $result = $stmt->get_result();
                $stmt->close();
                $this->conn->close();
                return $result;
            }
        }


                public function item_id($item_id){
            $stmt = $this->conn->prepare("SELECT * FROM `items` WHERE `id` = '$item_id'") or die($this->conn->error);
            if($stmt->execute()){
                $result = $stmt->get_result();
                $fetch = $result->fetch_array();
                $stmt->close();
                $this->conn->close();
                return $fetch;
            }
        }

                public function update_item($price, $desc, $item_id){
            $stmt = $this->conn->prepare("UPDATE `items` SET `price` = '$price', `description` = '$desc' WHERE `id` = '$item_id'") or die($this->conn->error);
            if($stmt->execute()){
                $stmt->close();
                $this->conn->close();
                return true;
            }
        }
                public function delete_item($item_id){
            $stmt = $this->conn->prepare("DELETE FROM `items` WHERE `id` = '$item_id'") or die($this->conn->error);
            if($stmt->execute()){
                $stmt->close();
                $this->conn->close();
                return true;
            }
        }
    
}



?>