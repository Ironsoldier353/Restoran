# Restoran Management System

A web-based restaurant management system designed for efficient order handling, booking management, and seamless online payments. This project is built using PHP, MySQL, and integrated with PayPal for payment processing.

---

## Table of Contents

- [Features](#features)
- [Technologies Used](#technologies-used)
- [Setup Instructions](#setup-instructions)
- [Usage](#usage)
- [Database Structure](#database-structure)
- [PayPal Integration](#paypal-integration)

---

## Features

- **Admin Panel**: Manage menus, orders, and user information.
- **User Panel**: Browse the menu, place orders, and track order history.
- **Table Booking**: Users can book tables with a specific number of people and time.
- **Cart Functionality**: Add items to the cart and proceed to checkout.
- **Payment Integration**: Sandbox integration with PayPal for testing transactions.
- **Responsive Design**: Optimized for various screen sizes.

---

## Technologies Used

- **Frontend**: HTML, CSS, SCSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL
- **Payment Gateway**: PayPal Sandbox

---

## Setup Instructions

1. **Clone the Repository**
   ```bash
   git clone https://github.com/your-username/restoran-management.git
   cd restoran-management
   
2. **Setup the Database**
   - Import the SQL file located in the `database/restoran.sql` directory into your MySQL server.
   - Ensure the database name is `restoran`.

3. **Configure Environment Variables**
   - Open the `config.php` file and set the following:
     ```php
     define('DB_HOST', 'localhost');
     define('DB_USER', 'root');
     define('DB_PASS', 'yourpassword');
     define('DB_NAME', 'restoran');
     ```

4. **Setup PayPal Sandbox**
   - Log in to [PayPal Developer Dashboard](https://developer.paypal.com/).
   - Obtain your client ID and replace it in the JavaScript SDK script in your project:
     ```html
     <script src="https://www.paypal.com/sdk/js?client-id=YOUR_SANDBOX_CLIENT_ID&currency=INR"></script>
     ```

5. **Run the Project**
   - Start a local server using XAMPP or any other PHP server.
   - Place the project folder inside the server’s `htdocs` directory.
   - Open `http://localhost/restoran-management` in your browser.

---

## Usage

- **Admin Login**
  - URL: `/admin`
  - Credentials:
    - Email: `admin.first@gmail.com`
    - Password: `admin123`
  
- **User Actions**
  - Browse menus and add items to the cart.
  - Book tables for a specified date and time.
  - Make payments via PayPal.

---

## Database Structure

**Tables:**
1. `admins` - Stores admin credentials.
2. `users` - Contains user details.
3. `foods` - Menu items.
4. `bookings` - Table booking information.
5. `cart` - Tracks items added to the cart by users.
6. `orders` - Records completed transactions.
7. `reviews` - Stores customer feedback.

Refer to the `restoran.sql` file for the detailed schema.

---

## PayPal Integration

The payment gateway is integrated using PayPal Sandbox for testing. Follow these steps for testing:
1. Use the `PayPal Sandbox` personal account credentials to simulate payments.
2. Ensure the client ID is correctly set for sandbox transactions.
3. Payments can be viewed on the PayPal Sandbox dashboard.

---

