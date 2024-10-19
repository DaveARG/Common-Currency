# 🌍 World Common_Currencies Dataset

This repository contains a comprehensive list of world Common_Currencies in various formats for ease of integration and use in different environments. The dataset includes essential information such as currency symbols, names, codes, and other related attributes.

## 🗂 Available Formats

-   **CSV** - Simple and easy-to-read format, ideal for data manipulation and analysis.
-   **JSON** - Lightweight format for web development and API integration.
-   **SQL** - Pre-built SQL queries for direct database insertion.
-   **PHP** - Array format for quick usage in PHP-based applications.
-   **Laravel** - Seed data for seamless integration in Laravel projects.

## 📄 Dataset Details

Each currency entry includes the following fields:

-   `symbol` - The currency symbol.
-   `name` - Full name of the currency.
-   `symbol_native` - The currency symbol in its native form.
-   `decimal_digits` - Number of decimal digits used in the currency.
-   `rounding` - Information on rounding rules.
-   `code` - ISO 4217 currency code.
-   `name_plural` - Plural form of the currency name.

Example:

```json
{
    "symbol": "$",
    "name": "US Dollar",
    "symbol_native": "$",
    "decimal_digits": 2,
    "rounding": 0,
    "code": "USD",
    "name_plural": "US dollars"
}
```

## 🚀 Usage

### CSV

You can easily import the `.csv` file into any spreadsheet software or use it with Python (e.g., `pandas`), R, or any data analysis tool.

### JSON

Use the `.json` file for web development, JavaScript applications, or API consumption.

```js
fetch('Common_Currencies.json')
    .then(response => response.json())
    .then(data => console.log(data))
```

### SQL

Directly import the `.sql` file into your database:

```bash
mysql -u your_username -p your_database < Common_Currencies.sql
```

### PHP

The dataset is available as a PHP array for easy integration:

```php
$currencies = include 'Common_Currencies.php';
```

### Laravel

For Laravel projects:

1. Run the migration:

    ```bash
    php artisan migrate --path=/database/migrations/0000_01_01_000090_create_common_currencies_table.php
    ```

2. Run the seeder:
    ```bash
    php artisan db:seed --class=CommonCurrencySeeder
    ```

## 💡 Contributing

Feel free to contribute! If you find any missing currencies or have suggestions for improvements, you can:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature/your-feature`).
3. Commit your changes (`git commit -m 'Add some feature'`).
4. Push to the branch (`git push origin feature/your-feature`).
5. Open a pull request.

## 📜 License

This project is open-source and available under the [MIT License](LICENSE).

---

Thank you for using this dataset! 🌍💸
