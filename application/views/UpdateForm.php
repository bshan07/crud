<html>
<head>
<title>Update Data In Database Using CodeIgniter</title>

 <link rel="stylesheet" type="text/css" href="<?php $helper = $this->load->helper('url'); echo base_url(); ?>/bootstrap4/css/bootstrap.css">
      <!--<link rel="stylesheet" type="text/css" href="<?php //$helper = $this->load->helper('url'); echo base_url(); ?>/bootstrap4/css/mycss.css">-->
      <script type='text/javascript' src="<?php echo base_url(); ?>/bootstrap4/js/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php $helper = $this->load->helper('url'); echo base_url(); ?>/bootstrap4/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="<?php $helper = $this->load->helper('url'); echo base_url(); ?>/bootstrap4/js/bootstrap.min.js">

</head>
<body>
<div >
<div >
<h3>Update Data  </h3><p>Edit Detail & Click Update Button</p><hr/>


<div  class="container">

<!-- Fetching All Details of Selected Student From Database And Showing In a Form -->
<?php foreach($userdata as $row): ?>

<form class="form-horizontal" method="post" action="<?php  $helper = $this->load->helper('url'); echo base_url() . "index.php/MyUser_Controller/update_user_id1"?>">

<div class="form-group" >
    
<div><label class="control-label col-sm-2" id="hide">Id :</label></div>
<div class="col-sm-6"><input type="text" class="form-control" size="50" id="hide" name="id" value="<?php echo $row->id; ?>"></div> 
</div>

    
<div class="form-group">
<label class="control-label col-sm-2" >Username :</label>
<div class="col-sm-6">
    <input type="text" class="form-control" size="50"  name="username" value="<?php echo $row->username; ?>">
</div>
</div>   
    
    
<div class="form-group">
<label class="control-label col-sm-2" >First Name :</label>
<div class="col-sm-6">
    <input type="text" class="form-control" size="50"  name="first_name" value="<?php echo $row->first_name; ?>">
</div>
</div> 
    
<div class="form-group">
<label class="control-label col-sm-2" >Last Name :</label>
<div class="col-sm-6">
    <input type="text" class="form-control" size="50"  name="last_name" value="<?php echo $row->last_name; ?>">
</div>
</div>
      
<div class="form-group">
<label class="control-label col-sm-2" >Location :</label>
<div class="col-sm-6">
    <input type="text" class="form-control" size="50"  name="location" value="<?php echo $row->location; ?>">
</div>
</div>
    

<div class="form-group">
<label class="control-label col-sm-2" >Phone Number :</label>
<div class="col-sm-6">
    <input type="text" class="form-control" size="50"  name="phone" value="<?php echo $row->phone; ?>">
</div>
</div>
    
<div class="form-group">
<label class="control-label col-sm-2" >Email Id :</label>
<div class="col-sm-6">
    <input type="text" class="form-control" size="50"  name="email" value="<?php echo $row->email; ?>">
</div>
</div>
    

<input type="submit" id="submit" name="dsubmit" value="Update">
</form>
<?php endforeach; ?>
<br/><br/>
</div>

</div>
</div>
</body>
</html>