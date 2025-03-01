# DiskonApp

DiskonApp is a simple PHP-based web application designed for calculating discounts on items. It features a complete CRUD system for managing a product catalog where each product has a preset discount value. Users can calculate the final price based on the selected product’s price and its associated discount, and all transactions are recorded in a history log.

## Features

- **Product Catalog (Katalog):**  
  - Add, edit, update, and delete catalog items.  
  - Each product includes a name, price, and discount percentage.

- **Discount Calculation (Hitung Diskon):**  
  - Select a product from the catalog.
  - Automatically apply the preset discount.
  - Display the final price after discount.

- **Transaction History (Riwayat Transaksi):**  
  - Save each discount calculation as a transaction.
  - View and manage a history of all discount transactions.

- **Responsive Design:**  
  - Built with Bootstrap and custom CSS for an attractive and modern look.

## Folder Structure

```
diskon_app/
├── config/
│   └── database.php         # Database connection settings
├── includes/
│   ├── header.php           # Header with navbar (common to all pages)
│   └── footer.php           # Footer (common to all pages)
├── katalog/
│   ├── index.php            # List of catalog items (CRUD interface)
│   ├── tambah.php           # Add new catalog item
│   ├── edit.php             # Edit existing catalog item
│   └── hapus.php            # Delete a catalog item
├── diskon/
│   ├── hitung.php           # Discount calculation page
│   ├── riwayat.php          # Transaction history page
│   └── hapus.php            # Delete a transaction
├── assets/
│   └── css/
│       └── style.css        # Custom CSS styling
├── index.php                # Home page
└── db.sql                   # SQL script to create and initialize the database
```

## Installation

1. **Clone or Download the Repository:**  
   Place the project in your local web server's root directory (e.g., using Laragon, XAMPP, etc.).

2. **Database Setup:**  
   - Create a database by importing the `db.sql` file.
   - Update your database credentials in `config/database.php` if necessary.

3. **Run the Application:**  
   - If using Laragon or XAMPP, access the application by navigating to:  
     `http://localhost/diskon_app/`

## Usage

1. **Home Page:**  
   - Access the home page to get an overview of the application.

2. **Manage Catalog:**  
   - Use the **Katalog** section (accessible via the navbar) to add, edit, or delete catalog items.
   - Each catalog item includes a name, price, and discount percentage.

3. **Calculate Discount:**  
   - Navigate to the **Hitung Diskon** page, select a product, and view the calculated price after the discount is applied.
   - Each calculation is saved as a transaction.

4. **View Transaction History:**  
   - Check the **Riwayat Transaksi** page to see a list of all discount transactions.
   - You can also delete individual transactions if needed.

## Customization

- **CSS Styling:**  
  - Modify the file at `assets/css/style.css` to adjust colors, fonts, or layout as needed.
  
- **PHP Logic:**  
  - The core business logic for the catalog and discount calculation is in the PHP files under the `katalog/` and `diskon/` directories.

## Requirements

- PHP 7.0 or later
- MySQL or MariaDB
- Apache web server (or any server supporting PHP)
- [Bootstrap 5](https://getbootstrap.com/) (included via CDN)

## License

This project is open source and available under the [MIT License](LICENSE).

## Contact

For issues, feature requests, or contributions, please open an issue or submit a pull request on the project's repository.
