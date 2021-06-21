<?php


$host = "localhost"; // الخاص بالسيرفر ip اسم السيرفر أو 
$username = "root";    // اسم المستخدم الخاص بقاعدة البيانات
$password = "";  // كلمة المرور الخاصة بقاعدة البيانات
$dbname = "control-interface"; // إسم قاعدة البيانات الخاصة بك 

// انشاء الاتصال
$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error)
{
    echo "Connection failed! " . $conn->connect_error;
}
else
{
  echo "Connected successfully....";
}

/*******************************************************************************/

// تخزين وإرسال البيانات إلى قاعدة البيانات الخاصة بك 


        
    $Motor1 = $_POST['Motor1'];
    $Motor2 = $_POST['Motor2'];
    $Motor3 = $_POST['Motor3'];
    $Motor4 = $_POST['Motor4'];
    $Motor5 = $_POST['Motor5'];
    $Motor6 = $_POST['Motor6'];
    $On     = $_POST['On_value'];
    $Off    = $_POST['Off_value'];

    
    if(isset($_POST['submit'])){  //  عند الضغط على زر الإرسال سيتم تخزين البيانات فقط 

        $my_query = "select * from motors_values  ";
        $result = mysqli_query($conn, $my_query);
    
        $my_query = "INSERT INTO datamotor (Motor1,Motor2,Motor3,Motor4,Motor5,Motor6)
        VALUES ('$Motor1', '$Motor2', '$Motor3', '$Motor4', '$Motor5', '$Motor6')";
        
        
        $result = mysqli_query($conn, $my_query);
        if($result)
        {
            echo "The data has been stored successfully...";
        }
        else{
            echo "An error occurred!!!, please check the code and try again. <br>";
        }
    }else if(isset($_POST['run'])) { // عند الضغط على زر التشغيل سيتم تشغيل ذراع الروبوت 
    
    
        $my_query = "select * from  datamotor";
        $result = mysqli_query($conn, $my_query);
    
        $my_query = "INSERT INTO datamotor (Motor1,Motor2,Motor3,Motor4,Motor5,Motor6,On_value)
        VALUES ('$Motor1', '$Motor2', '$Motor3', '$Motor4', '$Motor5', '$Motor6' , 1)";
        $result = mysqli_query($conn, $my_query);
        if($result)
        {
            echo "The robot arm has been successfully operated...";
        }
        else{
            echo "An error occurred!!!, please try again.<br>";
        }
    
    }else if(isset($_POST['stop'])) { // عند الضغط على زر إيقاف سيتم إيقاف ذراع الروبوت عن الحركة 
    
    
        $my_query = "select * from  datamotor ";
        $result = mysqli_query($conn, $my_query);
    
        $my_query = "INSERT INTO datamotor (Motor1,Motor2,Motor3,Motor4,Motor5,Motor6,Off_value)
        VALUES ('$Motor1', '$Motor2', '$Motor3', '$Motor4', '$Motor5', '$Motor6' , 1)";
        $result = mysqli_query($conn, $my_query);
        if($result)
        {
            echo "The robot arm has been stopped successfully...";
        }
        else{
            echo "A stopping error occurred!!!, please try again.<br>";
        }
    
    }
    

$conn->close(); // إغلاق الإتصال 


?>
