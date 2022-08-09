<?php include_once "porterheader.php" ?>

<div class="container">
    <h1 class="mt-4 mb-3">
      <small>Contact Messages</small>
    </h1>
    <div class="row">
        <div class="col-sm-9">
            <?php
      if (isset($_REQUEST['m'])) {
      
      ?>
        <div class="alert alert-success">

        <?php echo $_REQUEST['m']; ?>
        </div>

        <?php  }?>


        <?php
      if (isset($_REQUEST['info'])) {
       
      ?>
        <div class="alert alert-info">

        <?php echo $_REQUEST['info']; ?>
        </div>

        <?php  }?>


        <?php
      if (isset($_REQUEST['err'])) {
      
      ?>
        <div class="alert alert-danger">

        <?php echo $_REQUEST['err']; ?>
        </div>

        <?php  }?>

            <table class="table table-hover table-bordered table-striped">
                <thead>
                    <th>#</th>
                    <th>Contact Name</th>
                    <th>Message</th>
                    <th>Contact Date</th>
                    
                   
                  
                </thead>
                <tbody>
                <?php
                #include class

                include_once('bonds/user.php');

                #create  object
                $msgobj = new User();
                
                $output = $msgobj->contactMsgList();

                // echo "<pre>";
                // print_r($output);
                // echo "</pre>";


                if (count($output)>0) {

                    foreach($output as $key => $value){
                        $contactid = $value['contactid'];

                    
                ?>
                    <tr>
                        <td> <?php echo $contactid ?></td>
                        <td><?php echo $value ['contact_name'] ?></td>
                        <td><?php echo $value ['contact_message'] ?></td>
                        
                        <td><?php echo  date('l jS F',
                            strtotime($value['created_at'])) ?>
                        </td>
                        
                            
                    </tr>
                 
                    <?php }
                        
                        
                    }

                
                ?>

                </tbody>

            </table>
        </div>
    </div>
</div>

<?php include_once "porterfooter.php" ?>