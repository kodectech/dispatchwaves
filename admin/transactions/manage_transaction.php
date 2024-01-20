<?php


if(isset($_GET['id']) && $_GET['id'] > 0){
    $qry = $conn->query("SELECT * from `cargo_list` where id = '{$_GET['id']}' ");
    if($qry->num_rows > 0){
        foreach($qry->fetch_assoc() as $k => $v){
            $$k=$v;
        }
        if(isset($id)){
            $meta_qry = $conn->query("SELECT * FROM `cargo_meta` where cargo_id = '{$id}'");
            while($row = $meta_qry->fetch_assoc()){
                ${$row['meta_field']} = $row['meta_value'];
            }
        }
    }
}
$cargo_type = [];
$cargo_type_qry = $conn->query("SELECT id,`name`, city_price, state_price, country_price FROM `cargo_type_list` where delete_flag = 0 order by `name` asc");
while($row = $cargo_type_qry->fetch_assoc()){
    $cargo_type[$row['id']] = $row;
}
?>
<style>
    img#cimg{
		max-height: 15vh;
		width: 100%;
		object-fit: scale-down;
		object-position: center center;
	}
    
</style>
<div class="content py-3">
    <div class="card card-outline card-primary rounded-0 shadow">
        <div class="card-header">
            <h4 class="card-title"><b><?= isset($id) ? "Register Consignment" : "Enter Consignment Information" ?></b></h4>
        </div>
        <div class="card-body">
            <div class="container-fluid">
                <form action="" id="cargo-form" method="GET">
                    <input type="hidden" name ="id" value="<?php echo isset($id) ? $id : '' ?>">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="card rounded-0 shadow">
                                    <div class="card-header">
                                        <h5 class="font-weight-bolder">Sender Information</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group mb-2">
                                            <label for="sender_name" class="control-label">Full Name</label>
                                            <input type="text" name="sender_name" id="sender_name" class="form-control form-control-sm form-control-border" value="<?= isset($sender_name) ? $sender_name : '' ?>" required>
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="sender_contact" class="control-label">Email #</label>
                                            <input type="text" name="sender_contact" id="sender_contact" class="form-control form-control-sm form-control-border" value="<?= isset($sender_contact) ? $sender_contact : '' ?>" required>
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="sender_address" class="control-label">Address</label>
                                            <textarea rows="3" name="sender_address" id="sender_address" class="form-control form-control-sm rounded-0" required><?= isset($sender_address) ? $sender_address : '' ?></textarea>
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="sender_provided_id_type" class="control-label">Provided ID Type</label>
                                            <input type="text" name="sender_provided_id_type" id="sender_provided_id_type" class="form-control form-control-sm form-control-border" value="<?= isset($sender_provided_id_type) ? $sender_provided_id_type : '' ?>" required>
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="sender_provided_id" class="control-label">Provided ID #/Code</label>
                                            <input type="text" name="sender_provided_id" id="sender_provided_id" class="form-control form-control-sm form-control-border" value="<?= isset($sender_provided_id) ? $sender_provided_id : '' ?>" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="card rounded-0 shadow">
                                    <div class="card-header">
                                        <h5 class="font-weight-bolder">Receiver Information</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group mb-2">
                                            <label for="receiver_name" class="control-label">Full Name</label>
                                            <input type="text" name="receiver_name" id="receiver_name" class="form-control form-control-sm form-control-border" value="<?= isset($receiver_name) ? $receiver_name : '' ?>" required>
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="receiver_contact" class="control-label">Email #</label>
                                            <input type="text" name="receiver_contact" id="receiver_contact" class="form-control form-control-sm form-control-border" value="<?= isset($receiver_contact) ? $receiver_contact : '' ?>" required>
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="receiver_address" class="control-label">Address</label>
                                            <textarea rows="3" name="receiver_address" id="receiver_address" class="form-control form-control-sm rounded-0" required><?= isset($receiver_address) ? $receiver_address : '' ?></textarea>
                                        </div>
										<!-- Our customization starts Here
										<div class="form-group mb-2">
                                            <label for="receiver_email" class="control-label">Email</label>
                                            <input type="email" rows="3" name="receiver_email" id="receiver_address" class="form-control form-control-sm rounded-0" required><?= isset($receiver_email) ? $receiver_email : '' ?>
                                        </div>
										<div class="form-group mb-2">
                                            <label for="receiver_address" class="control-label">Product Item</label>
                                            <textarea rows="3" name="receiver_address" id="receiver_address" class="form-control form-control-sm rounded-0" required><?= isset($receiver_address) ? $receiver_address : '' ?></textarea>
                                        </div> -->
										
										 <!-- <div class="form-group mb-2">
                                            <label for="receiver_provided_id_type" class="control-label">Email</label>
                                            <input type="email" name="receiver_email" id="receiver_email" class="form-control form-control-sm form-control-border" placeholder="e.g Jane@gmail.com" value="<?= isset($receiver_email) ? $receiver_email : '' ?>" required>
                                        </div> -->
										
                                       
                                        <div class="form-group mb-2">
                                            <label for="receiver_provided_id" class="control-label">Product Item</label>
                                            <input type="text" name="receiver_provided_id" id="receiver_provided_id" class="form-control form-control-sm form-control-border" value="<?= isset($receiver_provided_id) ? $receiver_provided_id : '' ?>" required>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-sm-12">
                                <div class="form-group mb-2">
                                    <label for="Carrier" class="control-label">Carrier</label>
                                    <textarea name="Carrier" id="from_location" class="form-control form-control-sm rounded-0" rows="3" required placeholder="DHL, FedEx, etc"><?= isset($Carrier) ? $Carrier : "" ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-sm-12">
                                <div class="form-group mb-2">
                                    <label for="from_location" class="control-label">From Location</label>
                                    <textarea name="from_location" id="from_location" class="form-control form-control-sm rounded-0" rows="3" required><?= isset($from_location) ? $from_location : "" ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-sm-12">
                                <div class="form-group mb-2">
                                    <label for="to_location" class="control-label">To Location</label>
                                    <textarea name="to_location" id="to_location" class="form-control form-control-sm rounded-0" rows="3" required><?= isset($to_location) ? $to_location : "" ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-sm-12">
                                <div class="form-group mb-2">
                                    <label for="shipping_type" class="control-label">Shipping Type</label>
                                    <select name="shipping_type" id="shipping_type" class="form-control form-control-sm  form-control-border"  required>
                                    <option value="1" <?= isset($shipping_type) && $shipping_type == 1 ? 'selected' : "" ?>>Air frieght</option>
                                    <option value="2" <?= isset($shipping_type) && $shipping_type == 2 ? 'selected' : "" ?>>Land Transport</option>
                                    <option value="3" <?= isset($shipping_type) && $shipping_type == 3 ? 'selected' : "" ?>>Sea Shipping</option>
                                    </select>
                                </div>
                            </div>


                            




							<!-- <div class="col-lg-6 col-md-6 col-sm-12 col-sm-12">
                                <div class="form-group mb-2">
                                    <label for="to_location" class="control-label">Carrier</label>
									<select  class="form-control form-control-sm rounded-0" rows="3" required>
									<option>DHL </option>
									<option>USPS</option>
									<option>FedEx</option>
									</select>
                                    
                                </div>
                            </div> -->
                            
                            <!--More Feature -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-sm-12">
                                <div class="form-group mb-2">
                                    <label for="from_location" class="control-label">Arrival Date/Time </label>
                                    <textarea name="arrival_date" id="arrival_date" class="form-control form-control-sm rounded-0" rows="3" required><?= isset($arrival_date) ? $arrival_date : "" ?></textarea>
                                </div>
                            </div>
                            
                            
                        </div>


                        <br><br>
                            <hr style="border: 1px solid blue;">
                            <br>
                            <!-- Adding more for Client -->
                            <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-sm-12">
                                <div class="form-group mb-2">
                                    <label for="from_location" class="control-label">Product Category </label>
                                    <textarea name="product_category" id="product_category" class="form-control form-control-sm rounded-0" rows="3" required><?= isset($product_category) ? $product_category : "" ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-sm-12">
                                <div class="form-group mb-2">
                                    <label for="total_freight" class="control-label">Total Freight</label>
                                    <textarea name="total_freight" id="total_freight" class="form-control form-control-sm rounded-0" rows="3" required><?= isset($total_freight) ? $total_freight : "" ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-sm-12">
                                <div class="form-group mb-2">
                                    <label for="weight_kg" class="control-label">Weight(kg)</label>
                                    <textarea name="weight_kg" id="weight_kg" class="form-control form-control-sm rounded-0" rows="3" required><?= isset($weight_kg) ? $weight_kg : "" ?></textarea>
                                </div>
                            </div>
                            </div>



        <!-- Lets try something -->

                            <br>
                            <hr style="border: 1px solid blue;">
                            <br>
                            <!-- Adding more for Client -->
                            <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-sm-12">
                                <div class="form-group mb-2">
                                    <label for="detail1" class="control-label">Details 1 </label>
                                    <textarea name="detail1" id="detail1" class="form-control form-control-sm rounded-0" rows="3" required><?= isset($detail1) ? $detail1 : "" ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-sm-12">
                                <div class="form-group mb-2">
                                    <label for="current_location1" class="control-label">Current Location 1</label>
                                    <textarea name="current_location1" id="current_location1" class="form-control form-control-sm rounded-0" rows="3" required><?= isset($current_location1) ? $current_location1 : "" ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-sm-12">
                                <div class="form-group mb-2">
                                    <label for="arrival_day1" class="control-label">Arrival Day 1</label>
                                    <textarea name="arrival_day1" id="arrival_day1" class="form-control form-control-sm rounded-0" rows="3" required><?= isset($arrival_day1) ? $arrival_day1 : "" ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-sm-12">
                                <div class="form-group mb-2">
                                    <label for="arrival_date1" class="control-label">Arrival Date 1</label>
                                    <textarea name="arrival_date1" id="arrival_date1" class="form-control form-control-sm rounded-0" rows="3" required><?= isset($arrival_date1) ? $arrival_date1 : "" ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-sm-12">
                                <div class="form-group mb-2">
                                    <label for="arrival_country1" class="control-label">Arrival Country 1</label>
                                    <textarea name="arrival_country1" id="arrival_country1" class="form-control form-control-sm rounded-0" rows="3" required><?= isset($arrival_country1) ? $arrival_country1 : "" ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-sm-12">
                                <div class="form-group mb-2">
                                    <label for="comment1" class="control-label">Comment 1</label>
                                    <textarea name="comment1" id="comment1" class="form-control form-control-sm rounded-0" rows="3" required><?= isset($comment1) ? $comment1 : "" ?></textarea>
                                </div>
                            </div>
                            </div>




                            <br>
                            <hr style="border: 1px solid blue;">
                            <br>
                            <!-- Adding more for Client -->
                            <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-sm-12">
                                <div class="form-group mb-2">
                                    <label for="detail2" class="control-label">Details 2 </label>
                                    <textarea name="detail2" id="detail2" class="form-control form-control-sm rounded-0" rows="3" ><?= isset($detail2) ? $detail2 : "" ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-sm-12">
                                <div class="form-group mb-2">
                                    <label for="current_location2" class="control-label">Current Location 2</label>
                                    <textarea name="current_location2" id="current_location2" class="form-control form-control-sm rounded-0" rows="3" ><?= isset($current_location2) ? $current_location2 : "" ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-sm-12">
                                <div class="form-group mb-2">
                                    <label for="arrival_day2" class="control-label">Arrival Day 2</label>
                                    <textarea name="arrival_day2" id="arrival_day2" class="form-control form-control-sm rounded-0" rows="3" ><?= isset($arrival_day2) ? $arrival_day2 : "" ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-sm-12">
                                <div class="form-group mb-2">
                                    <label for="arrival_date2" class="control-label">Arrival Date 2</label>
                                    <textarea name="arrival_date2" id="arrival_date2" class="form-control form-control-sm rounded-0" rows="3" ><?= isset($arrival_date2) ? $arrival_date2 : "" ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-sm-12">
                                <div class="form-group mb-2">
                                    <label for="arrival_country2" class="control-label">Arrival Country 2</label>
                                    <textarea name="arrival_country2" id="arrival_country2" class="form-control form-control-sm rounded-0" rows="3" ><?= isset($arrival_country2) ? $arrival_country2 : "" ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-sm-12">
                                <div class="form-group mb-2">
                                    <label for="comment2" class="control-label">Comment 2</label>
                                    <textarea name="comment2" id="comment2" class="form-control form-control-sm rounded-0" rows="3" ><?= isset($comment2) ? $comment2 : "" ?></textarea>
                                </div>
                            </div>
                            </div>



                        <!-- Third Details starts Here if needed -->

                            <!-- <br>
                            <hr style="border: 1px solid blue;">
                            <br> -->
                            <!-- Adding more for Client -->
                            <!-- <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-sm-12">
                                <div class="form-group mb-2">
                                    <label for="detail3" class="control-label">Details 3 </label>
                                    <textarea name="detail3" id="detail3" class="form-control form-control-sm rounded-0" rows="3" ><?= isset($detail3) ? $detail3 : "" ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-sm-12">
                                <div class="form-group mb-2">
                                    <label for="current_location3" class="control-label">Current Location 3</label>
                                    <textarea name="current_location3" id="current_location3" class="form-control form-control-sm rounded-0" rows="3" ><?= isset($current_location3) ? $current_location3 : "" ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-sm-12">
                                <div class="form-group mb-2">
                                    <label for="arrival_day3" class="control-label">Arrival Day 3</label>
                                    <textarea name="arrival_day3" id="arrival_day3" class="form-control form-control-sm rounded-0" rows="3" ><?= isset($arrival_day3) ? $arrival_day3 : "" ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-sm-12">
                                <div class="form-group mb-2">
                                    <label for="arrival_date3" class="control-label">Arrival Date 2</label>
                                    <textarea name="arrival_date3" id="arrival_date3" class="form-control form-control-sm rounded-0" rows="3" ><?= isset($arrival_date3) ? $arrival_date3 : "" ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-sm-12">
                                <div class="form-group mb-2">
                                    <label for="arrival_country3" class="control-label">Arrival Country 3</label>
                                    <textarea name="arrival_country3" id="arrival_country3" class="form-control form-control-sm rounded-0" rows="3" ><?= isset($arrival_country3) ? $arrival_country3 : "" ?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-sm-12">
                                <div class="form-group mb-2">
                                    <label for="comment3" class="control-label">Comment 3</label>
                                    <textarea name="comment3" id="comment3" class="form-control form-control-sm rounded-0" rows="3" ><?= isset($comment3) ? $comment3 : "" ?></textarea>
                                </div>
                            </div>
                            </div> -->




        
                        <!-- <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card card-outline card-info shadow rounded0">
                                    <div class="card-header">
                                        <h5 class="card-title"><b>Cargo Items</b></h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-center mb-0 pb-0">
                                            <div class="col-3 border text-center"><b>Package Category</b></div>
                                            <div class="col-3 border text-center"><b>Price</b></div>
                                            <div class="col-3 border text-center"><b>Weight/kg.</b></div>
                                            <div class="col-3 border text-center"><b>Total</b></div>
                                        </div>
                                        <div id="cargo-item-list" class="d-table w-100">
                                        <?php 
                                        if(isset($id)):
                                        $items = $conn->query("SELECT i.*,t.name as cargo_type FROM `cargo_items` i inner join cargo_type_list t on i.cargo_type_id = t.id where i.cargo_id = '{$id}'");
                                        while($row = $items->fetch_array()):
                                        ?>
                                        <div class="d-table-row align-items-center justify-content-center my-0 py-0 cargo-item">
                                            <div class="d-table-cell col-3 px-2 py-1 border text-center">
                                                <input type="hidden" name="price[]" value="<?= $row['price'] ?>">
                                                <input type="hidden" name="total[]" value="<?= $row['total'] ?>">
                                                <select name="cargo_type_id[]" class="form-control form-control-sm form-control-border select2">
                                                    <option value="" disabled='' selected></option>
                                                    <?php 
                                                        foreach($cargo_type as $crow):
                                                    ?>
                                                    <option value="<?= $crow['id'] ?>" <?= $crow['id'] == $row['cargo_type_id'] ? 'selected': ''  ?>><?= $crow['name'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="d-table-cell col-3 px-2 py-1 border text-right"><span class="font-weight-bold price"><?= format_num($row['price']) ?></span></div>
                                            <div class="d-table-cell col-3 px-2 py-1 border text-center"><input type="number" step="any" name="weight[]" class="form-control form-control-sm form-control-border text-right" value="<?= ($row['weight']) ?>"></div>
                                            <div class="d-table-cell col-3 px-2 py-1 border text-right"><span class="font-weight-bold total"><?= format_num($row['total']) ?></span></div>
                                        </div>
                                        <?php endwhile; ?>
                                        <?php endif; ?>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center mb-0 pb-0">
                                            <div class="col-9 border text-center"><b>Total</b></div>
                                            <div class="col-3 border text-center"><b id="gtotal"><?= isset($total_amount) ? format_num($total_amount) : '0.00' ?></b><input type="hidden" name="total_amount" value="<?= isset($total_amount) ? $total_amount : "" ?>"></div>
                                        </div>
                                        <div class="clear-fix my-2"></div>
                                        <div class="text-right">
                                            <button class="btn btn-default border btn-sm btn-flat" id="add_item" type="button"><i class="fa fa-plus"></i> Add Item</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </form>
            </div>
        </div>
        <div class="card-footer text-center">
                <button class="btn btn-sm btn-flat btn-primary" type="submit" form="cargo-form">Save</button>
                <a class="btn btn-sm btn-flat btn-default border" href="./?page=transactions">Cancel</a>
        </div>
    </div>
</div>
<noscript id="cargo-item-clone">
<div class="d-table-row align-items-center justify-content-center my-0 py-0 cargo-item">
    <div class="d-table-cell col-3 px-2 py-1 border text-center">
        <input type="hidden" name="price[]">
        <input type="hidden" name="total[]">
        <select name="cargo_type_id[]" class="form-control form-control-sm form-control-border select2">
            <option value="" disabled='' selected></option>
            <?php 
                foreach($cargo_type as $row):
            ?>
            <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="d-table-cell col-3 px-2 py-1 border text-right"><span class="font-weight-bold price">0.00</span></div>
    <div class="d-table-cell col-3 px-2 py-1 border text-center"><input type="number" step="any" name="weight[]" class="form-control form-control-sm form-control-border text-right"></div>
    <div class="d-table-cell col-3 px-2 py-1 border text-right"><span class="font-weight-bold total">0.00</span></div>
</div>
</noscript>
<script>
    const cargo_type = $.parseJSON('<?= json_encode($cargo_type) ?>');
   
	$(document).ready(function(){
        $('.select2').select2({
            width:"100%",
            placeholder:"Please Select Here"
        })
        $('#add_item').click(function(){
            var item = $($('noscript#cargo-item-clone').html()).clone()
            $('#cargo-item-list').append(item)
            item.find('.select2').select2({
                width:"100%",
                placeholder:"Please Select Here"
            })
            item.find("[name='cargo_type_id[]']").change(function(){
                var id = $(this).val();
                change_price(item, id)
            })
            item.find('[name="weight[]"]').on('input',function(){
                console.log('test')
                calc()
            })
        })
        $("[name='cargo_type_id[]']").change(function(){
            var id = $(this).val();
            change_price(item, id)
        })
        $('[name="weight[]"]').on('input',function(){
            console.log('test')
            calc()
        })
        $('#shipping_type').change(function(){
            $('#cargo-item-list .cargo-item').each(function(){
                var id = $(this).find('[name="cargo_type_id[]"]').val()
                change_price($(this), id)
            })
        })
		$('#cargo-form').submit(function(e){
			// e.preventDefault();
            var _this = $(this)
			 $('.err-msg').remove();
			start_loader();
			$.ajax({
				url:_base_url_+"classes/Master.php?f=save_cargo",
				data: new FormData($(this)[0]),
                cache: false,
                contentType: false,
                processData: false,
                method: 'POST',
                type: 'POST',
                dataType: 'json',
				error:err=>{
					console.log(err)
					alert_toast("An error occured",'error');
					end_loader();
				},
				success:function(resp){
					if(typeof resp =='object' && resp.status == 'success'){
						location.replace("./?page=transactions/view_transaction&id="+resp.cid);
					}else if(resp.status == 'failed' && !!resp.msg){
                        var el = $('<div>')
                            el.addClass("alert alert-danger err-msg").text(resp.msg)
                            _this.prepend(el)
                            el.show('slow')
                            $("html, body").animate({ scrollTop: _this.closest('.card').offset().top }, "fast");
                    }else{
						alert_toast("An error occured",'error');
                        console.log(resp)
					}
					end_loader();
				}
			})
		})

	})
</script>