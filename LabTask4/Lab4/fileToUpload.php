<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
class User
 {
  
  public $name;
  public $gender;
  
  public $email;
  
  
   function __construct($name,$email,$gender) 
   {
     
    $this->name = $name;
  
  $this->email = $email;
  
  $this->gender = $gender;
  
    
  
   }
  

  
  function set_name($name) {
    $this->name = $name;
  }
  
  function get_name() 
  {
    return $this->name;
  }
   function set_email($email)
   {
    $this->email = $email;
  }
  function get_email()
  {
    return $this->email;
  }
  function set_gender($gender)
  {
    $this->gender = $gender;
  }
  function get_gender()
  {
    return $this->gender;
  }
  
  
}
?>


<?php
$nameErr = $emailErr = $genderErr ="";
$name = $email = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["name"]))
  {
    $nameErr = "Name is required";
  }
  else
  {
    $name = $_POST["name"];
  }
  
  if (empty($_POST["email"]))
  {
    $emailErr = "Email is required";
  }
  else
  {
    $email = $_POST["email"];
  }
    
  

  if (empty($_POST["gender"]))
  {
    $genderErr = "Gender is required";
  }
  else 
  {
    $gender = $_POST["gender"];
  }
  if (empty($_POST["blood"])) 
  {
    $bloodErr = "blood is required";
  } 
  else
  {
    $blood = $_POST["blood"];
  }
}


?>

<h2>My Form </h2>
<p><span class="error">*Please fill up the form</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>

  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  
  
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>"." data for : ".$name.":</h2>";

$user = new User($name,$email,$gender);

echo $user->get_name();

echo "<br>";

echo $user->get_email();

echo "<br>";


echo $user->get_gender();

echo "<br>";


?>

<?php

$file = fopen("save.txt", "w") or die("Unable to open file!");

$data = $user->get_name()."\n";

fwrite($file, $data);

$data = $user->get_email()."\n";

fwrite($file, $data);


$data = $user->get_gender()."\n";

fwrite($file, $data);

fclose($file);


?>




</body>
</html>

<?php

  $dom = new DOMDocument();

    $dom->encoding = 'utf-8';

    $dom->xmlVersion = '1.0';

    $dom->formatOutput = true;

  $xml_file_name = 'html.xml';

    $root = $dom->createElement('Users');

    $user_node = $dom->createElement('User');

    $attr_name = new DOMAttr('Name', $user->name);

    $user_node->setAttributeNode($attr_name);

  $child_node_email = $dom->createElement('Email',$user->email);

    $user_node->appendChild($child_node_email);
    
    $child_node_gender = $dom->createElement('Gender',$user->gender);

    $user_node->appendChild($child_node_gender);

    
    $root->appendChild($user_node);

    $dom->appendChild($root);

  $dom->save($xml_file_name);

  echo "$xml_file_name has been successfully created";
?>

