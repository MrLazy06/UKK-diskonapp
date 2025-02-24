# DiskonApp

DiskonApp is a simple web application for managing product discounts. It allows users to add, edit, delete, and view products in a catalog, calculate discounts, and view transaction history.

## Features

- **Product Catalog**: Add, edit, delete, and view products.
- **Discount Calculation**: Calculate the discounted price of products.
- **Transaction History**: View the history of discount calculations.
- **Responsive Design**: Uses Bootstrap for a responsive and modern UI.


## Installation

1. Clone the repository:
    ```sh
    git clone https://github.com/yourusername/diskonapp.git
    ```
2. Import the database:
    - Open `phpMyAdmin` and create a new database named `diskonapp`.
    - Import the `diskonapp.sql` file into the `diskonapp` database.

3. Configure the database connection:
    - Update the database configuration in `config/database.php` if necessary.

4. Start the web server:
    - Place the project in your web server's root directory (e.g., `htdocs` for XAMPP).
    - Start your web server (e.g., Apache) and navigate to `http://localhost/diskonapp`.

## Usage

- Navigate to the homepage to see the welcome message.
- Use the navigation bar to access the product catalog, calculate discounts, and view transaction history.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.
