<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="page-content">

    <div class="container-fluid">
        <h3 class="mb-5">Manage Packages</h3>
    
        <div class="row">
            <div class="col-md-8">
                <div class="flex align-items-center mb-4">
                    <div class="flex-1">
                        <b>Search</b>
                    </div>
                    <div class="flex-9">
                        <ul class="list-inline">
                            <li><input type="search" placeholder="Search..." class="form-control search-input" data-table="customers-list"/></li>
                            <li><strong>Filter:</strong> </li>
                            <li><a href="<?= site_url('admin/all/pending_dispatch') ?>" class="badge badge-danger">Pending Dispatch</a></li>
                            <li><a href="<?= site_url('admin/all/dispatched') ?>" class="badge badge-warning">Dispatched</a></li>
                            <li><a href="<?= site_url('admin/all/in_transit') ?>" class="badge badge-warning">In Transit</a></li>
                            <li><a href="<?= site_url('admin/all/delivered') ?>" class="badge badge-success">Delivered</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <table class="table table-striped mt32 customers-list">
            <thead>
                <tr>
                    <th>Deliver to</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Tracking ID</th>
                    <th>Added</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($packages as $pkg) { ?>
                    <tr>
                        <td><?= $pkg['first_name'] ?> <?= $pkg['last_name'] ?></td>
                        <td><?= $pkg['email'] ?></td>
                        <td><?= $pkg['phone'] ?></td>
                        <td><?= $pkg['tracking_id'] ?></td>
                        <td><?= date('F j, Y - h:m a', strtotime($pkg['added'])) ?></td>
                        <td><?php
                                $badge_title = strtolower($delivery_status_titles[$pkg['delivery_status'] - 1]['title']);
                                $badge_type = 'danger';
                                if($badge_title == 'dispatched' || $badge_title == 'in transit')
                                    $badge_type = 'warning';
                                else if($badge_title == 'delivered')
                                    $badge_type = 'success';
                                
                                echo '<span class="badge badge-'.$badge_type.'">' . $badge_title . '</span>'; 
                            ?></td>
                        <td>
                            <a class="btn btn-default btn-sm" href="<?= site_url('admin/package/' . $pkg['tracking_id']) ?>">View</a> 
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <div class="spacer-50"></div>

    </div>

</div>

<script>
    (function(document) {
        'use strict';

        var TableFilter = (function(myArray) {
            var search_input;

            function _onInputSearch(e) {
                search_input = e.target;
                var tables = document.getElementsByClassName(search_input.getAttribute('data-table'));
                myArray.forEach.call(tables, function(table) {
                    myArray.forEach.call(table.tBodies, function(tbody) {
                        myArray.forEach.call(tbody.rows, function(row) {
                            var text_content = row.textContent.toLowerCase();
                            var search_val = search_input.value.toLowerCase();
                            row.style.display = text_content.indexOf(search_val) > -1 ? '' : 'none';
                        });
                    });
                });
            }

            return {
                init: function() {
                    var inputs = document.getElementsByClassName('search-input');
                    myArray.forEach.call(inputs, function(input) {
                        input.oninput = _onInputSearch;
                    });
                }
            };
        })(Array.prototype);

        document.addEventListener('readystatechange', function() {
            if (document.readyState === 'complete') {
                TableFilter.init();
            }
        });

    })(document);
</script>