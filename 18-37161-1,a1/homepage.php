<!DOCTYPE html>
<html>
<style>
table,th,td {
  border : 1px solid black;
  border-collapse: collapse;
}
th,td {
  padding: 70px;
}
</style>
<body>

<h2>Please,select district name</h2>

<form action=""> 
  <select name="Divisions" onchange="showCustomer(this.value)">
    <option value="">Select a Division:</option>
    <option value="Dhaka">Dhaka</option>
    <option value="Chottogram ">Chottogram</option>
    <option value="Khulna">Khulna</option>
    <option value="Sylhet">Sylhet</option>
    <option value="Barisal">Barisal</option>
    <option value="Rajsahi">Rajsahi</option>
    <option value="Rangur">Rangpur</option>
    <option value="Maymenshing">Maymenshing</option>


  </select>
</form>
<br>
<div id="txtHint">District will be listed here...</div>

<script>
function showCustomer(str) {
  var xhttp;  
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "getcustomer.php?q="+str, true);
  xhttp.send();
}
</script>
</body>
</html>
