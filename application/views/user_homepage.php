<html xmlns="http://www.w3.org/1999/xhtml">  
   <head>  
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
      <title>Untitled Document</title>  
      <link rel="stylesheet" type="text/css" href="<?php $helper = $this->load->helper('url'); echo base_url(); ?>/bootstrap4/css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="<?php $helper = $this->load->helper('url'); echo base_url(); ?>/bootstrap4/css/mycss.css">
      <script type='text/javascript' src="<?php echo base_url(); ?>/bootstrap4/js/jquery.min.js"></script>
   </head>  

<div >
   <table  class="table " >  
      <tbody > 
         
          
          
          
          <tr class="success">  
            
            <td>Username</td>
            
            <td>First Name</td>
            <td>Last Name</td>
            <td>Location</td>
            <td>Email</td>
            <td>Phone Number</td> 
            <td  colspan="2">Operations</td>
         </tr>  
          

         <?php  
         
         foreach ($userdata as $row)  
         {  

         ?>


            <tr>  
               
            <td><?php echo $row->username;?></td>  
            <td><?php echo $row->first_name;?></td>
            <td><?php echo $row->last_name;?></td>
            <td><?php echo $row->location;?></td> 
            <td><?php echo $row->email;?></td>
            <td><?php echo $row->phone;?></td> 
            <td>
            <a href="<?php $this->load->helper('url'); echo base_url() ."index.php/MyUser_Controller/index/" . $row->id; ?>">Update</a>
            <!-- <?php //echo base_url()."user_control/delete_user/{$row->username}" ?> -->
            </td>
            <td>
            <a href="<?php $this->load->helper('url'); echo base_url() ."index.php/MyUser_Controller/delete_user/" . $row->id; ?>">Delete</a>
            <!--<?php// echo base_url()."MyUser_Controller/dummy_deleteuser/{$row->id}" ?> -->
            </td>
            </tr>  
         

         <?php
		 }  
         ?>  


      </tbody>  
   </table> 
</div>
 <br />


<body>  
</body>  
</html>  