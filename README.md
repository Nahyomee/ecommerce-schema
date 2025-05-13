# 🛒 Multi-Vendor eCommerce Database Schema for Laravel

A lot of times, I do a lot of ecommerce projects and I just thought I should create a ready-to-use database schema to make my work easier. I also thought to share it with others so it can help anyone who needs it. 

This repository contains a ready-to-use database schema for a **multi-vendor eCommerce platform**, built with Laravel migrations. It includes:

- Laravel migration files
- SQL dump
- Entity Relationship Diagram (ERD)
- Setup instructions

---

## 📦 What's Inside
├── database/
│ └── migrations/ # Laravel migrations for all tables
├── sql/
│ └── schema_dump.sql # SQL export of schema
├── erd/
│ └── ecommerce_erd.png # Visual ERD diagram
├── README.md # This file
├── LICENSE

.
└── Edit me to generate/
    ├── a/
    │   └── nice/
    │       └── tree/
    │           ├── diagram!
    │           └── :)
    └── Use indentation/
        ├── to indicate/
        │   ├── file
        │   ├── and
        │   ├── folder
        │   └── nesting.
        └── You can even/
            └── use/
                ├── markdown
                └── bullets!

---

## 🧱 Tables Included

- Users (Admin, Vendor, Customer roles)
- Vendors
- Categories
- Products, Product Images & Product Variants
- Orders & Order Items
- Carts & Cart Items
- Payments
- Reviews
- Customer Addresses

---

## 🚀 Getting Started

1. Clone the repo:
```bash
git clone https://github.com/Nahyomee/ecommerce-schema.git
cd ecommerce-schema   
```
2. Install Laravel dependencies
```bash
composer install
```
3. Setup .env:
```bash
cp .env.example .env
php artisan key:generate
```
4. Run the migrations:
```bash
php artisan migrate
```
## 🧪 Using SQLite for Fast Testing
Instead of MySQL, you can use SQLite by updating .env like so:

```bash
DB_CONNECTION=sqlite
```

## 🎨 ERD Diagram
Visual representation is available in /erd/ecommerce_erd.png.


## ✨ Credits
Created by @Nahyomee. Inspired by real-world eCommerce systems.


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
