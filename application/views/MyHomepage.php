<html>
    <head>
        <title>HomePage</title>
        <link rel="stylesheet" type="text/css" href="<?php $helper = $this->load->helper('url'); echo base_url(); ?>/bootstrap4/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<?php $helper = $this->load->helper('url'); echo base_url(); ?>/bootstrap4/css/mycss.css">
        <script type='text/javascript' src="<?php echo base_url(); ?>/bootstrap4/js/jquery.min.js"></script>
    </head>
    
    <body  >
        
        <div  >
            <div class="container-fluid">
                <a class="title1" href="#">Crud_Example</a>
                <a class="title2" href="#" >@CodeIgniter</a>
                
            </div> <br/>
            <center>
             <div ps>
               <a class="btn info" href="http://[::1]/CRUD_Example/index.php/MyUser_Controller/show_data" target="iframe">Show Previous Records</a>
                <a class="btn info" href="http://localhost/CRUD_Example/index.php/MyUser_Controller/insert_controller" target="iframe">Insert New Record</a>
<!--                <a class="btn info" href="" target="iframe">Update Data</a>
                <a class="btn info" href="#">Delete Data</a>-->
                <a class="btn info"  href="#" target="iframe">Recently Deleted Records</a>
            </div><br/>
            </center>
            <div>
                <iframe width="100%" height="100%" name="iframe">aaaa</iframe>
            </div>
            <div class="container-fluid footer" >
                <h6>Bhushan</h6>
            </div>
        </div>
       
    </body>
</html>