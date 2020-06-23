 <?php
   
        $name = $age = $address = '';

        if (isset($_POST['name'])) {
            $name = $_POST['name'];
        }
        if (isset($_POST['age'])) {
            $age = $_POST['age'];
        }
        if (isset($_POST['address'])) {
            $address = $_POST['address'];
        }

        if ($name != '' && $age != '' && $address != '') {
            $sql= " INSERT INTO student(name, age, address) VALUES ('$name','$age','$address')";
            insert_remove($sql);
        }
    
