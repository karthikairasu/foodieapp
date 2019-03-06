<html>
 <head>
	 <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
     <title>Dashboard</title>
	 
		 <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<style>
	  .mydiv{
	   min-height:150px;
	   min-width:200px;
	   float:left;
	   padding:10px 10px 0px 10px;
	   margin:5px;
       border-radius:10px;
	   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	  font-size: 17px;
	  font-family:Lobster;
	  }
	  
	  </style>

 </head>
  
  <body>
      <div class="container-fluid">
	    <div class="row">
          <div class="col-sm-8">
		       <?php
			   $conn = mysqli_connect("localhost","root","","foodie_dev");
			   mysqli_set_charset($conn,'utf8');
			   $sql = "select * from foodie_order where restaurent_id = 1 AND branch_id=1 ";
			   $res = mysqli_query($conn,$sql);
			   $previousrowId = 0;
			   $items ="";
			   while($row = mysqli_fetch_object($res))
			   {
				   
				   $currentrowId = $row->main_order_id;
				   if($currentrowId == $previousrowId){
					?>
					 <script>
			document.getElementById("<?php echo $row->main_order_id;?>").innerHTML += '<br><?php echo $row->dish_name; ?>';
			document.getElementById("C<?php echo $row->main_order_id;?>").innerHTML += '<br><?php echo $row->dish_count; ?>';
					 </script>
					 
		<?php
				   }else{
				 $items = "";
				 $previousrowId = $row->main_order_id;
				?>
				 
		    <div class="mydiv"> 
			<div class="panel panel-primary">
			  <div class="panel-heading">
			  <b style="float:left">Order Id:<?php echo"$row->main_order_id"?></b>.
			  <b  style="float:right"></b>
			  </div>
			  <div class="panel-body" style="padding:0px">
			    <table class="table table-hover">
				  <thead>
				    <tr>
					  <th>Dish</th>
					  <th>Qty</th>
					  <th class=""></th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
					<td>
					 <div id="<?php echo $row->main_order_id?>">
					  <?php 
                        $items = "$row->dish_name";
						echo $items;
					  ?>
					 </div>
					 </td>
					 <td id="C<?php echo $row->main_order_id?>">
					  <?php 
                        $counts = "$row->dish_count";
						echo $counts;
					  ?>
					 </td>
				    </tr>
				  </tbody>
				</table>
			  </div>
			</div>
			</div>
			   <?php }}?>
            </div>
		  <div class="col-sm-4" style="position:fixed;right: 0;">
             <table class="table table-bordered bg-info">
    <thead>
      <tr>
        <th>Dish</th>
        <th>New</th>
        <th>In Prep</th>
      </tr>
    </thead>
    <tbody>
	
	   <?php 
	     $sql2 = " select SUM(`dish_count`) as countt, dish_name ,status from foodie_order where restaurent_id = 1 AND branch_id=1 group by dish_name";
		 $res2 = mysqli_query($conn,$sql2);
		while($row2 = mysqli_fetch_object($res2))
			{ ?>
         <tr>
	    
        <td><?php echo"$row2->dish_name"?></td>
        <td>
		  <?php 
		    $status=$row2->status;
		    if($status==0)
			{
			 echo $row2->countt;
			 
		    }else{
		  ?>
		</td>
        <td>
		  <?php
		    
			 echo $row2->countt;
			}
		  ?>
		</td>
      </tr>
       <?php    
			}
		?>
    </tbody>
  </table>
		  </div>
		</div>
	  </div>
  </body>
</html>
