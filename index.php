<?php

//PHPObject
class Student
{
    public$name;
    public$intCredits;
    public$floatGPA;

    public function __construct($name,$intCredits,$floatGPA)
    {
    $this->name=$name;
    $this->intCredits=$intCredits;
    $this->floatGPA=$floatGPA;
}

    public function studentStatus($intCredits)
    {
if ($intCredits==0) {
    echo"You are not a student currently";
}elseif($intCredits<12){
    echo"you are a Part-Time Student";
}else{
    echo"you are a Full-TimeStudent";
}

}

public function screenReader()
{
return "Hello".$this->name." ! You have a current GPA of ".$this->floatGPA." and are taking".$this->intCredits." credits,meaning you are a".$this->studentStatus($this->intCredits)."!";
}
}

$myStudent = new Student("Ochanya","15","3.0");

//Usevardump
$welcomeBanner="Welcome to my Page";
echo$welcomeBanner;
echo"<br>";
echo"<br>";



echo$myStudent->screenReader();
echo"<br>";
echo"<br>";


var_dump($myStudent);
echo"<br>";
echo"<br>";

var_dump($welcomeBanner);
//Filename
echo"TheFileName";
echo"<br>";
echo$_SERVER['PHP_SELF'];
echo"<br>";

//ServerSoftware
echo"ServerSoftware";
echo"<br>";
echo$_SERVER['HTTP_USER_AGENT'];
echo"<br>";

//HostIPAddress
echo"HostIPAddress";
echo"<br>";
echo$_SERVER['HTTP_REFERER'];
echo"<br>";

//NameofBrowser
echo"BrowserName";
echo"<br>";
echo$_SERVER['HTTP_USER_AGENT'];
echo"<br>";

?>
