<?php

/** @var array $users */

?>
<section class="page-banner compact-banner">
    <div class="container banner-layout">
        <div>
            <p class="eyebrow">Staff directory</p>

            <h1>User Accounts</h1>

            <p class="banner-description">
                Account and role information for the store's sample
                staff.
            </p>
        </div>

        <div class="record-count">
            <strong><?= count($users) ?></strong>
            <span>Total users</span>
        </div>
    </div>
</section>

<section class="content-section">
    <div class="container">
        <div class="table-card">
            <div class="table-heading">
                <h2>User List</h2>

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
                            <th>Username</th>
                            <th>Full Name</th>
                            <th>Role</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($users as $index => $user): ?>
                            <tr>
                                <td><?= $index + 1 ?></td>

                                <td>
                                    <span class="username">
                                        <?= esc($user['username']) ?>
                                    </span>
                                </td>

                                <td class="name-cell">
                                    <?= esc($user['full_name']) ?>
                                </td>

                                <td>
                                    <?= esc($user['role']) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>