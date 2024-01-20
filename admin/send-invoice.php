
<head>
    <meta charset="utf-8">
    <title>CargoForceLines - Stepping over the hedge</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


   

</head>
<body>
    
<form action="../generate-pdf.php" method="GET">

<div class="row">
 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="width: 80%; margin: auto">
<div class="card rounded-0 shadow">
    <br>
    <a href="index.php">
    <h4>Dashboard </h4></a>
    <br><br>
    <hr>
 <div class="card-header">
 <h5 class="font-weight-bolder">Sender Information</h5>
 </div>
 <div class="card-body">
 <div class="form-group mb-2">
<label for="sender_name" class="control-label">Full Name</label>
 <input type="text" name="sender_name" id="sender_name" class="form-control form-control-sm form-control-border" value="" required>
 </div>
<div class="form-group mb-2">
      <label for="sender_contact" class="control-label">Email #</label>
      <input type="text" name="sender_contact" id="sender_contact" class="form-control form-control-sm form-control-border" value="" required>
  </div>
        <div class="form-group mb-2">
          <label for="sender_address" class="control-label">Address</label>
           <textarea rows="3" name="sender_address" id="sender_address" class="form-control form-control-sm rounded-0" required></textarea>
   </div>
      
 
      
        <div class="card-header">
           <h5 class="font-weight-bolder">Receiver Information</h5>
       </div>
          <div class="card-body">
              <div class="form-group mb-2">
           <label for="receiver_name" class="control-label">Full Name</label>
        <input type="text" name="receiver_name" id="receiver_name" class="form-control form-control-sm form-control-border" value="" required>
   </div>
          <div class="form-group mb-2">
            <label for="receiver_contact" class="control-label">Email #</label>
         <input type="text" name="receiver_contact" id="receiver_contact" class="form-control form-control-sm form-control-border" value="" required>
          </div>
          <div class="form-group mb-2">
            <label for="receiver_address" class="control-label">Address</label>
         <textarea rows="3" name="receiver_address" id="receiver_address" class="form-control form-control-sm rounded-0" required></textarea>
            </div>

            <div class="form-group mb-2">
            <label for="shipmentorigin" class="control-label">Shipment Origin</label>
         <textarea rows="3" name="shipmentorigin" id="shipmentorigin" class="form-control form-control-sm rounded-0" required></textarea>
            </div>

            <div class="form-group mb-2">
            <label for="shipmentdestination" class="control-label">Shipment Destination</label>
         <textarea rows="3" name="shipmentdestination" id="shipmentdestination" class="form-control form-control-sm rounded-0" required></textarea>
            </div>
            <br>

            <div class="form-group mb-2">
            <label for="shipmenttype" class="control-label">Transport Mode / Shipment Type</label>
            <select name="shipmenttype" id="shipmenttype" class="form-control form-control-sm  form-control-border"  required>
             <option>Air frieght</option>
             <option>Land Transport</option>
             <option>Sea Shipping</option>
            </select>
            <br><br>
										
										
                                       
          <div class="form-group mb-2">
        <label for="receiver_provided_id" class="control-label">Product Item</label>
   <input type="text" name="product-item" id="receiver_provided_id" class="form-control form-control-sm form-control-border" value="" required>
   </div> 

   <div class="form-group mb-2">
        <label for="ref_code" class="control-label">Consignment Number</label>
   <input type="text" name="ref_code" id="ref_code" class="form-control form-control-sm form-control-border" value="" required>
   </div> 


   <hr style="border: 1px solid blue;">
                            <br>
                            <!-- Adding more for Client -->
                            <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-sm-12">
                                <div class="form-group mb-2">
                                    <label for="from_location" class="control-label">Product Category </label>
                                    <textarea name="product_category" id="product_category" class="form-control form-control-sm rounded-0" rows="3" required></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-sm-12">
                                <div class="form-group mb-2">
                                    <label for="total_freight" class="control-label">Total Freight</label>
                                    <textarea name="total_freight" id="total_freight" class="form-control form-control-sm rounded-0" rows="3" required></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-sm-12">
                                <div class="form-group mb-2">
                                    <label for="weight_kg" class="control-label">Weight(kg)</label>
                                    <textarea name="weight_kg" id="weight_kg" class="form-control form-control-sm rounded-0" rows="3" required></textarea>
                                </div>
                            </div>
                            </div>


   <button name="send-invoice" style="width: 100%; border: none; background: #46521e; color: #fff; margin-top: 30px">Send Invoice</button>
 </div>
</div>
 </div>

  </div>
</div>
</div>


  

 </form>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
