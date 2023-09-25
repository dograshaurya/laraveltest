# Laravel Developer Assessment Project

This Laravel project is designed to assess your proficiency in various aspects of Laravel development, including integrating third-party services like Stripe, implementing role-based access control, designing database architectures, and adhering to best practices. Your performance will be evaluated based on code quality, integration, documentation, and system design, as well as UX/UI perfection and content quality.

# Project Overview
This project consists of the following tasks:

**Stripe Integration**: Sign up for a free Stripe developer account and integrate Stripe into a new or existing Laravel project. In the README.md, explain your integration choices.

**Role-Based Access Control**: Implement three distinct roles within the system:

Admin

B2C Customer

B2B Customer

**Product Management and Role Assignment**: Create two products that users can purchase through the system.

If a user purchases the B2C product, assign them the "B2C Customer" role automatically.
If a user purchases the B2B product, assign them the " B2B Customer" role automatically.
Key Pages:

**Purchase Page**: Develop a page where users can view and select products for purchase through Stripe. The page should accept test credit card information and any other necessary registration details.
Login Page: Create a secure login page using Laravel's authentication scaffolding.

Dashboard Page: Build a dashboard that users can access after logging in. Depending on the user's role:

If the user is a B2C customer, display the last 4 digits of the purchased card number under the label "B2C Purchase Details".
If the user is a B2B customer, display the last 4 digits of the purchased card number under the label "B2B Purchase Details".

If the user can cancel their purchase, provide a cancel button on the page.

User Listing: Allow a super admin to view all users and cancel their access.

**Key Actions/Events:**

Purchase: Send an email to the customer about their purchase. Include their name in the email.

Payment Failure: Handle cases where payment can be revoked after purchase.

Access Cancellation: Send an email to the customer if their access is canceled for any reason.

# Steps for installation:

composer install
npm install
npm run dev

**Seeders: **

Roles: php artisan db:seed --class=RolesSeeder 

To create admin user: php artisan db:seed --class=CreateUsersSeeder


**To run: **

php artisan serve
