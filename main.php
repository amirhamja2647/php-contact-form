<?php 

$con = mysqli_connect('localhost','root');

if ($con) {
	echo "successful";
}
else{
	echo "unsuccessfull";
}

mysqli_select_db($con,'amir');
        

                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $phone = $_POST['phone'];
                        $massege = $_POST['massege'];

                        $query = "INSERT INTO amir (name, email, phone, massege) VALUES ($name,$email,$phone,$massege)";

                        
            

                        mysqli_query($con, $query);








