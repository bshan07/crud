<html>
<head>
<title>Userform</title>
 <link rel="stylesheet" type="text/css" href="<?php $helper = $this->load->helper('url'); echo base_url(); ?>/bootstrap4/css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="<?php $helper = $this->load->helper('url'); echo base_url(); ?>/bootstrap4/css/mycss.css">
      <script type='text/javascript' src="<?php echo base_url(); ?>/bootstrap4/js/jquery.min.js"></script>

</head>
<body>
<?php 
 
//$errors = str_replace(array("\r", "\n", "<p>", "</p>"),'\n', $errors); 
//echo"<script>alert('$errors');</script>";
?>
<div  >
<?php echo form_open('MyUser_Controller/insert_controller'); ?>
<h1>Enter details</h1><hr/>
<?php if (isset($userdata))
 { 
 	?>
<CENTER><h3 style="color:green;">Data inserted successfully</h3></CENTER><br>

<?php 
} 

?>
<center>
<table  >
<tr>
<td>Username :</td>
<td ><input  type="text" name="username" value="" id="username" size="50" title="Enter 5 to 10 character username" required placeholder="5-10 characters only"/>
<a style="color:red"><?php echo form_error('username') ?></a></td></tr>


<tr>
<td>First Name :</td>
<td><input  type="text" name="first_name" value="" title="First name of the user" id="first_name" size="50" required/>
<a style="color:red"><?php echo form_error('first_name') ?></a></td></tr>


<tr>
<td>Last Name :</td>
<td><input  type="text" name="last_name" title="Last name of the user" value="" id="last_name" size="50" required/>
<a style="color:red"><?php echo form_error('last_name') ?></a></td></tr>



<tr>
<td>Location :</td>
<td><input  type="text" name="location" value="" title="Location name of the user" id="location" size="50" />
<a style="color:red"><?php echo form_error('location') ?></a></td></tr>


<tr>
<td>Email Id:</td>
<td><input  type="email" name="email" value="" title="Email Id of the user" id="email" size="50" placeholder="abc@xyz.com" />
<a style="color:red"><?php echo form_error('email') ?></a></td></tr>


<tr>
<td>Phone Number :</td>
<td><input  type="tel" name="phone" value="" id="phone" title="Phone Number of the user" size="50" placeholder="10 digit number"/>
<a style="color:red"><?php echo form_error('phone') ?></a></td></tr>


<tr><td colspan="2" >
     <input class="info" type="submit" id="submit" name="submit" title="Insert User Data" value="Insert" >
   </td></tr>
<?php echo form_close(); ?><br/>

</table>
</center>
<div >

</div>
</div>


<br />
 

</body>
</html>
