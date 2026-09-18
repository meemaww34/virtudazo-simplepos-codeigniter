<section class="hero">
    <div class="container hero-layout">
        <div class="hero-content">
            <p class="eyebrow">Simple and organized</p>

            <h1>Manage your store accounts in one place.</h1>

            <p class="hero-description">
                SimplePOS is a beginner-friendly Point-of-Sale
                foundation created with CodeIgniter 4. View customer
                and staff information through a clean and simple
                interface.
            </p>

            <div class="hero-buttons">
                <a
                    href="<?= base_url('customers') ?>"
                    class="button primary-button"
                >
                    View Customers
                </a>

                <a
                    href="<?= base_url('users') ?>"
                    class="button secondary-button"
                >
                    View Users
                </a>
            </div>
        </div>

        <div class="summary-card">
            <div class="summary-icon">POS</div>

            <h2>Store Overview</h2>

            <p>Quickly access the account list you need.</p>

            <div class="summary-row">
                <span>Customer records</span>
                <strong>5</strong>
            </div>

            <div class="summary-row">
                <span>User records</span>
                <strong>5</strong>
            </div>
        </div>
    </div>
</section>

<section class="features-section">
    <div class="container">
        <div class="section-heading">
            <p class="eyebrow">Main pages</p>
            <h2>What you can view</h2>
        </div>

        <div class="feature-grid">
            <article class="feature-card">
                <span class="feature-number">01</span>

                <h3>Customer Accounts</h3>

                <p>
                    View each customer's full name, email address,
                    and phone number.
                </p>

                <a href="<?= base_url('customers') ?>">
                    Open customer list &rarr;
                </a>
            </article>

            <article class="feature-card">
                <span class="feature-number">02</span>

                <h3>User Accounts</h3>

                <p>
                    View staff usernames, complete names, and
                    assigned store roles.
                </p>

                <a href="<?= base_url('users') ?>">
                    Open user list &rarr;
                </a>
            </article>

            <article class="feature-card">
                <span class="feature-number">03</span>

                <h3>About the System</h3>

                <p>
                    Learn the purpose of this first version of the
                    POS application.
                </p>

                <a href="<?= base_url('about') ?>">
                    Read about SimplePOS &rarr;
                </a>
            </article>
        </div>
    </div>
</section>