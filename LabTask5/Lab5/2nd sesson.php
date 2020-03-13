
<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>

<?php
	$name=$_SESSION["name"];
	$email=$_SESSION["email"];
  $phoneno=$_SESSION["phoneno"];
	$gender=$_SESSION["gender"];
?>

<?php
class Entry {
  private $name;
  private $email;
  private $phoneno;
  private $gender;

  function __construct($name, $email,$phoneno, $gender) {
    $this->name = $name; 
    $this->email = $email;
    $this->phoneno = $phoneno;
    $this->gender = $gender;
  }
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_email($email) {
    $this->email = $email;
  }
  function get_email() {
    return $this->email;
  }
    function set_phoneno($phoneno) {
    $this->phoneno = $phoneno;
  }
  function get_phoneno() {
    return $this->phoneno;
  }
  function set_gender($gender) {
    $this->gender = $gender;
  }
  function get_gender() {
    return $this->gender;
  }
}

$entry = new Entry($name, $email,$phoneno, $gender);

$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
$txt = "Name: ".$entry->get_name()." "."E-mail: ".$entry->get_email().""."Phone Number: ".$entry->get_phoneno().""."Gender: ".$entry->get_gender()."\n";
fwrite($myfile, $txt);
fclose($myfile);

$xmldoc = new DomDocument( '1.0' );
$xmldoc->preserveWhiteSpace = false;
$xmldoc->formatOutput = true;

$name = $entry->get_name();
$email = $entry->get_email();
$phoneno = $entry->get_phoneno();
$gender = $entry->get_gender();

if( $xml = file_get_contents( 'main.xml') ) {
    $xmldoc->loadXML( $xml, LIBXML_NOBLANKS );

    $root = $xmldoc->getElementsByTagName('entries')->item(0);

    $entry = $xmldoc->createElement('entry');
    $entryAttribute = $xmldoc->createAttribute("type");
    $entryAttribute->value = "text";
    $entry->appendChild($entryAttribute);


    $root->insertBefore( $entry, $root->firstChild );

    $nameElement = $xmldoc->createElement('name');
    $entry->appendChild($nameElement);
    $nameText = $xmldoc->createTextNode($name);
    $nameElement->appendChild($nameText);

    $emailElement = $xmldoc->createElement('email');
    $entry->appendChild($emailElement);
    $emailText = $xmldoc->createTextNode($email);
    $emailElement->appendChild($emailText);

    $genderElement = $xmldoc->createElement('gender');
    $entry->appendChild($genderElement);
    $genderText = $xmldoc->createTextNode($gender);
    $genderElement->appendChild($genderText);

    $xmldoc->save('main.xml');

    echo "Data successfully uploaded";
  }

?>


</body>
</html>                                        