<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="page-content">

    <div class="container-fluid">

        <div class="spacer-10"></div>

        <div class="row">
            <div class="col-md-8">
                <div class="gutter">
                    <h5 class="text-uppercase mb-4">Packages In Transit</h5>

                    <?php
                        if(isset($packages) && sizeof($packages) > 0) { 
                            foreach($packages as $pkg) {
                    ?>
                        <div class="box">
                            <h6><?= $pkg['title'] ?> - <span class="badge badge-default"><?= $delivery_status_titles[$pkg['delivery_status'] - 1]['title'] ?></span></h6>
                            <p class="text-muted"> <?= $pkg['details'] ?> </p>
                            <div>
                                <div class="float-right text-muted"><small><?= date('F j, Y | h:m a', strtotime($pkg['added'])) ?></small></div>
                                <a class="bold" href="<?= site_url('dashboard/track/') . $pkg['tracking_id'] ?>">Track Package</a>
                            </div>
                        </div>

                    <?php 
                            }
                        } else { 
                    ?>

                    <div class="mt-5 mb-5 text-center text-muted">
                        <i class="fas fa-box"></i> <br>
                        You currently do not have any packages in transit.
                    </div>
                    <?php } ?>

                </div>

                <div class="spacer-20"></div>

                <div class="gutter">
                    <h5 class="text-uppercase mb-4">Recent Packages <span class="text-muted">(Delivered)</span></h5>
                    
                    <?php
                        if(count($delivered) > 0) {
                            foreach($delivered as $del) {
                    ?>
                        <div class="box">
                            <h6><?= $del['title'] ?> - <span class="badge badge-default"><?= $delivery_status_titles[$del['delivery_status'] - 1]['title'] ?></span></h6>
                            <p class="text-muted"> <?= $del['details'] ?> </p>
                            <div>
                                <div class="float-right text-muted"><small><?= date('F j, Y | h:m a', strtotime($del['added'])) ?></small></div>
                                <a class="bold" href="<?= site_url('dashboard/track/') . $del['tracking_id'] ?>">Details</a>
                            </div>
                        </div>

                    <?php 
                            }
                        } else { 
                    ?>
                        <div class="mt-5 mb-5 text-center text-muted">
                            <i class="fas fa-box"></i> <br>
                            You currently do not have any recent packages.
                        </div>
                    <?php } ?>
                </div>

                <div class="spacer-20"></div>
            </div>

            <div class="col-md-4">
                <div class="gutter">
                    <div class="dashboard-sidebar-content">
                        <h5 class="text-uppercase">My Shipping Address</h5>
                        <div class="spacer-20"></div>

                        <ul class="basic no-padding mb-3">
                            <li><b>Full Name</b>: <?= $user_address[0]["deliver_to"] ?></li>
                            <li><b>Address Line 1</b>: <?= $user_address[0]["address"] ?></li>
                            <li><b>City</b>: <?= $user_address[0]["city"] ?></li>
                            <li><b>Province</b>: <?= $user_address[0]["province"] ?></li>
                            <li><b>ZIP Code</b>: <?= $user_address[0]["zip_code"] ?></li>
                            <li><b>Country</b>: <?= $user_address[0]["country"] ?></li>
                        </ul>

                        <button class="btn btn-primary btn-sm btn-full" data-target="#updateAddressModal" data-toggle="modal">Update Address</button>

                    </div>
                </div>

                <div class="spacer-20"></div>

                <div class="gutter">
                    <div class="dashboard-sidebar-content">
                        <h5 class="title text-uppercase mb-3">Settings</h5>
                        <div class="spacer-20"></div>
                        <ul class="basic no-padding">
                            <li>
                                <a type="button" data-toggle="modal" data-target="#changePasswordModal" class=""><i class="fas fa-key text-warning"></i> &nbsp;&nbsp;Password</a>
                            </li>
                            <li>
                                <a type="button" data-toggle="modal" data-target="#changePasswordModal" class="mt-3"><i class="fas fa-clipboard text-warning"></i> &nbsp;&nbsp;Account Details</a>
                            </li>
                            <li>
                                <a type="button" data-toggle="modal" data-target="#notificationsModal" class="mt-3"><i class="fas fa-bell text-warning"></i> &nbsp;&nbsp;Notifications</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="spacer-50"></div>

<div class="modal fade" id="updateAddressModal" tabindex="-1" role="dialog" aria-labelledby="updateAddressModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Shipping Address</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="updateAddressForm">
                    <div id="address_notification"></div>

                    <div class="form-group">
                        <label for="deliver_to">Full Name</label>
                        <input type="text" id="deliver_to" name="deliver_to" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label for="address">Address Line 1</label>
                        <input type="text" id="address" name="address" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <span id="inter_origin" style="display: block;">
                        <label for="country">Country</label>
                        <select onchange="print_state('state', this.selectedIndex);" id="country" required  name ="country" class="fa-glass booking_form_dropdown form-control"></select> </span> 											
                        <script language="javascript">print_country("country");</script>	
                    </div>
                    <div class="form-group">
                        <label for="confirm-password">State</label>
                        <select  name ="state" required  id ="state" class="fa-glass booking_form_dropdown form-control"><option value="">Select state</option></select>    
                        <span class="field-validation-valid text-danger" ></span>
                    </div>
                    <div class="form-group">
                        <label for="address">City</label>
                        <input type="text" id="city" name="city" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label for="zip">Zip Code</label>
                        <input type="text" id="zip_code" name="zip_code" class="form-control" required="required">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" form="updateAddressForm" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="changePasswordModal" tabindex="-1" role="dialog" aria-labelledby="changePasswordModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Change Your Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="changePasswordForm">
                    <div id="pwd_notification"></div>
                    <div class="form-group">
                        <label for="old-password">Old Password</label>
                        <input type="password" id="old_password" name="old_password" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label for="new-password">New Password</label>
                        <input type="password" id="new_password" name="new_password" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label for="confirm-password">Confirm New Password</label>
                        <input type="password" id="confirm_password" name="confirm_password" class="form-control" required="required">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" form="changePasswordForm" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="notificationsModal" tabindex="-1" role="dialog" aria-labelledby="notificationsModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Change Your Notifications Settings</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="updateNotificationsForm" method="POST" action="<?php base_url('dashboard/update_notifications') ?>">
                    <div id="notifications_notification"></div>
                    <div class="custom-control custom-switch ml-5">
                        <input type="checkbox" class="custom-control-input" id="sms_notifications_switch" name="sms_notifications_switch" <?php if($user[0]['sms_notifications'] == 1) { ?> checked <?php } ?>>
                        <label class="custom-control-label" for="sms_notifications_switch">SMS Notifications</label>
                        <div class="text-muted">SMS messages are sent when package statuses is updated.</div>
                    </div>
                    <div class="custom-control custom-switch ml-5 mt-3">
                        <input type="checkbox" class="custom-control-input" id="email_notifications_switch" name="email_notifications_switch" <?php if($user[0]['email_notifications'] == 1) { ?> checked <?php } ?>>
                        <label class="custom-control-label" for="email_notifications_switch">Email Notifications</label>
                        <div class="text-muted">Emails about your package statuses.</div>
                    </div>
                    <div class="custom-control custom-switch ml-5 mt-3">
                        <input type="checkbox" class="custom-control-input" id="deals_notifications_switch" name="deals_notifications_switch" <?php if($user[0]['deals_notifications'] == 1) { ?> checked <?php } ?>>
                        <label class="custom-control-label" for="deals_notifications_switch">Deals Notifications</label>
                        <div class="text-muted">Emails about deals available for your account.</div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" form="updateNotificationsForm" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>