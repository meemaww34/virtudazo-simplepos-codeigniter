<?php

/** @var array $customers */

?>
<section class="page-banner compact-banner">
    <div class="container banner-layout">
        <div>
            <p class="eyebrow">Account directory</p>

            <h1>Customer Accounts</h1>

            <p class="banner-description">
                Contact information for the store's sample customers.
            </p>
        </div>

        <div class="record-count">
            <strong><?= count($customers) ?></strong>
            <span>Total customers</span>
        </div>
    </div>
</section>

<section class="content-section">
    <div class="container">
        <div class="table-card">
            <div class="table-heading">
                <h2>Customer List</h2>

                <p>
                    The records are currently stored in a static
                    PHP array.
                </p>
            </div>

            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Full Name</th>
                            <th>Email Address</th>
                            <th>Phone Number</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($customers as $index => $customer): ?>
                            <tr>
                                <td><?= $index + 1 ?></td>

                                <td class="name-cell">
                                    <?= esc($customer['full_name']) ?>
                                </td>

                                <td>
                                    <?= esc($customer['email']) ?>
                                </td>

                                <td>
                                    <?= esc($customer['phone']) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>