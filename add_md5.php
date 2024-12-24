<?php

    $spacial_str = "!@#$%^&*()_+|~-=\`{}[]:”;'<>?,./)";
    $number_str = "123456789";
    $eng_big_str = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $eng_small_str = "abcdefghijklmnopqrstuvwxyz";

    $st_num = "";
    $st_eng_bg = "";
    $st_eng_sm = "";

    $str_encode = "";
    $str_temp = "";
    

    // for($sp_length = 0; $sp_length <= strlen($spacial_str); $sp_length++) {
    //     echo "spacial_str :: ".$spacial_str[$sp_length];

    //     echo "<br>";
    // }

    // for($num_length = 0; $num_length <= strlen($number_str)-1; $num_length++) {
    //     $md5_hash = md5($number_str[$num_length]);

    //     echo $number_str[$num_length]." MD5 :: ".$md5_hash;

    //     echo "<br>";
    // }

    // for($eng_sm_length = 0; $eng_sm_length <= strlen($eng_small_str)-1; $eng_sm_length++) {
    //     $md5_hash = md5($eng_small_str[$eng_sm_length]);

    //     echo $eng_small_str[$eng_sm_length]." MD5 :: ".$md5_hash;

    //     echo "<br>";
    // }

    // for($eng_bg_length = 0; $eng_bg_length <= strlen($eng_big_str)-1; $eng_bg_length++) {
    //     $md5_hash = md5($eng_big_str[$eng_bg_length]);

    //     echo $eng_big_str[$eng_bg_length]." MD5 :: ".$md5_hash;

    //     echo "<br>";
    // }



    for($round2 = 0; $round2 <= 10; $round2++) {
        for($round1 = 0; $round1 <= strlen($eng_small_str); $round1++) {
            for($eng_sm_length = 0; $eng_sm_length <= strlen($eng_small_str)-1; $eng_sm_length++) {

                $str_encode = $str_temp.$eng_small_str[$eng_sm_length];
                $md5_hash = md5($eng_small_str[$eng_sm_length]);
                
                echo $str_encode." MD5 :: ".$md5_hash;
                echo "<br>";
            }
            echo "-- DEV :: R2";
            echo "<br>";
            if($round2 == 0){
                $str_temp = $eng_small_str[$round1];
            }
            
        }
    //     echo "-- DEV :: R1";
    //     echo "<br>";
    //     $str_temp = $str_temp.$eng_small_str[$round2].$eng_small_str[$round1]."999";
        if($round1 > strlen($eng_small_str)){
            $round2 = 0;
            $round1 = 0;
        }
        
        $str_temp = $eng_small_str[$round2].$eng_small_str[$round1];
        echo "round2 : ".$round2;
        echo "  round1 : ".$round1;
        echo "  str_temp : ".$str_temp;
        echo "<br>";

        if($round1 == 2){ break;}
    }
    



?>

<!-- Save data PHP -->
<?php
    include 'connect.php';
    //print_r($_POST);
    // $first_name = $_POST['first_name'];
    // $last_name = $_POST['last_name'];
    // $email = $_POST['email'];
    // $phones = $_POST['phone'];

    // $sql = "INSERT INTO person (firstname, lastname, email, phone)
    //         VALUES ('$first_name','$last_name','$email','$phones')";

    // if ($conn->query($sql) === TRUE) {
    //     echo "<p>Add member successfully</p>";
    //     echo "<a href='from.php'>Back</a>";
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }
    
    // $conn->close();

?>