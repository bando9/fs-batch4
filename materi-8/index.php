<?php 
    echo "halo <br>";

    $role = 'admin';

    switch ($role){
        case "admin":
            echo "halo aku admin<br>";
            break;
        case "cust":
            echo "halo aku pelangganmu<br>";
            break;
        default:
            echo "Akses tidak dikenali. <br>";   

    }


    $message = match($role){
        'admin' => 'Selamat datang admin<br>',
        'cust' => 'Selamat datang, semoga hari Anda menyenangkan',
        default => 'Akses tidak dikenali.',
    };

    echo $message;


    for ($i = 0; $i < 10; $i++){
        echo $i . " ";
    }

    echo "<br>";

    $ii = 0;
    while($ii < 10){
        echo $ii . " ";
        $ii++;
    }

    echo "<br>";

    $iii = 0;
    do {
        echo $iii . " ";
        $iii++;
    }while ($iii < 10) ;

    echo "<br>";

    $array = ["PHP", "Laravel", "CodeIgniter"];
    foreach ($array as $arr){
        echo $arr . " ";
    }


    echo "<br>";

    
    // function
    function tambah($a,$b){
    	return $a+$b;
    }

    echo tambah(3,4);




?>