<div class="page-content">
    <div class="container">
        
        <h4 class="mb-4">
            Edit User - <?= $user[0]['username'] ?> 
            <?php 
                if($user[0]['access'] == 1) {
                    echo '<span class="badge badge-warning">Mod</span>';
                } else if($user[0]['access'] > 1) {
                    echo '<span class="badge badge-success">Admin</span>';
                }
            ?>
        </h4>

        <form action="<?= site_url('admin/user/'.$user[0]['id']) ?>" method="POST">

            <?php if(isset($_SESSION['result'])) echo '<div class="alert alert-danger">'.$_SESSION['result'].'</div>'; ?>

            <input type="hidden" name="user_id" value="<?= $user[0]['id'] ?>">

            <div class="form-group">
                <div class="row">
                    <div class="col-sm-4">
                        <?php echo form_error('username'); ?>
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" readonly value="<?= $user[0]['username'] ?>" required>
                    </div>
                    <div class="col-sm-4">
                        <?php echo form_error('email'); ?>
                        <label for="email">Email Address</label>
                        <input type="text" name="email" class="form-control" value="<?= $user[0]['email'] ?>" required>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-2">
                        <label for="title">Title</label>
                        <span class="form-error"><?php echo form_error('title'); ?></span>
                        <select class="form-control" name="title" required>
                            <option value="Mr.">Mr</option>
                            <option value="Ms.">Ms</option>
                            <option value="Mrs.">Mrs</option>
                            <option value="Other">Other</option>
                        </select> 
                    </div>
                    <div class="col-md-4">
                        <label for="first_name">First Name</label>
                        <?php echo form_error('first_name'); ?>
                        <input type="text" name="first_name" class="form-control" value="<?= $user[0]['first_name'] ?>" required>
                    </div>
                    <div class="col-md-4">
                        <label for="last_name">Last Name</label>
                        <?php echo form_error('last_name'); ?>
                        <input type="text" name="last_name" class="form-control" value="<?= $user[0]['last_name'] ?>" required>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <label for="email">Phone</label>
                        <?php echo form_error('phone'); ?>
                        <input type="tel" name="phone" class="form-control" value="<?= $user[0]['phone'] ?>" required>
                    </div>
                    <div class="col-md-4">
                        <label for="email">Company</label>
                        <?php echo form_error('company'); ?>
                        <input type="text" name="company" class="form-control" value="<?= $user[0]['company'] ?>" required>
                    </div>
                </div>
            </div>

            <div class="spacer-50"></div>

            <div class="row">
                <div class="col-md-8">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="email">Street Address</label>
                            <?php echo form_error('address'); ?>
                            <input type="text" name="address" class="form-control" value="<?= $address[0]['address'] ?>" required>
                        </div>
                        <div class="col-md-6">
                            <label for="zip">Zipcode</label>
                            <?php echo form_error('zip'); ?>
                            <input type="text" name="zip" class="form-control" value="<?= $address[0]['zip_code'] ?>" required>
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="email">Country</label>
                                <?php echo form_error('country'); ?>
                                <span id="inter_origin" style="display: block;"> 
                                <select onchange="print_state('state', this.selectedIndex);" id="country" required  name ="country" class="fa-glass booking_form_dropdown form-control"></select> </span> 											
                                <script language="javascript">print_country("country");</script>	
                            </div>
                            <div class="col-md-6">
                                <label for="email">Province/State</label>
                                <?php echo form_error('state'); ?>
                                <select  name ="state" required  id ="state" class="fa-glass booking_form_dropdown form-control" required>
                                    <option value="">Select state</option>
                                </select>
                            </div>
                            
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="email">City</label>
                                <?php echo form_error('city'); ?>
                                <input type="text" name="city" class="form-control" value="<?= $address[0]['city'] ?>" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="gutter">
                        <div><b>Deliver To:</b>&nbsp; <?= $address[0]['deliver_to'] ?></div>
                        <div><b>Street:</b>&nbsp; <?= $address[0]['address'] ?></div>
                        <div><b>City:</b>&nbsp; <?= $address[0]['city'] ?></div>
                        <div><b>Province:</b>&nbsp; <?= $address[0]['province'] ?></div>
                        <div><b>Country:</b>&nbsp; <?= $address[0]['country'] ?></div>
                        <div><b>Zip:</b>&nbsp; <?= $address[0]['zip_code'] ?></div>
                    </div>
                </div>
            </div>

            <button class="btn btn-default mt-4 mb-4" type="submit">Update</button>
        </form>

        <div class="spacer-50"></div>

    </div>
</div>