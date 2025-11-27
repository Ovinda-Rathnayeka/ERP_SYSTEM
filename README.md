ERP System – PHP and MySQL

This is a simple ERP system created using core PHP and MySQL.
It includes Customer Management, Item Management, Invoice Management and Report pages.
The system was developed for an internship assignment.

Project Features
Customer Module
Add new customer
View customer list
Update customer details
Delete customer
Basic form validation
Item Module
Add new item
View item list
Update item
Delete item
Category and sub category included
Invoice Module
Create invoices
Add multiple items inside one invoice
Auto calculation of totals
View invoice details
Delete invoice
Invoice items are linked using foreign keys
Reports
Invoice report by date range
Invoice item report by date range
Item summary report showing unique items

Assumptions Made

On Delete Cascade is used in the database to avoid foreign key errors
When a customer is deleted, all invoices and invoice items linked to that customer are removed automatically.

When an invoice is deleted, all invoice items connected to that invoice are deleted automatically.

Login or authentication was not required because it was not included in the assignment instructions.

Categories and sub categories are stored inside the items table because the assignment did not request a separate category table.

Basic HTML required attributes were used for form validation.

Absolute paths are used in navigation to prevent broken links when accessing files inside folders.

How To Set Up This Project On Local Computer

Step 1
Install XAMPP on your computer.
This gives Apache server and MySQL database.

Step 2
Open the folder
C:/xampp/htdocs/
Copy the project folder ERP_SYSTEM into htdocs.
You should now have
C:/xampp/htdocs/ERP_SYSTEM/

Step 3
Open XAMPP Control Panel
Start Apache
Start MySQL

Step 4
Open your browser and go to
http://localhost/phpmyadmin

Create a new database named erp_db
Paste the SQL code below into the SQL tab and run it.

Database SQL (handwritten, no comments)

DROP DATABASE IF EXISTS erp_db;
CREATE DATABASE erp_db;
USE erp_db;

CREATE TABLE customers (
id INT AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(10),
fname VARCHAR(50),
lname VARCHAR(50),
contact VARCHAR(15),
district VARCHAR(50)
);

CREATE TABLE items (
id INT AUTO_INCREMENT PRIMARY KEY,
item_code VARCHAR(50),
item_name VARCHAR(100),
category VARCHAR(50),
sub_category VARCHAR(50),
qty INT,
unit_price DECIMAL(10,2)
);

CREATE TABLE invoices (
id INT AUTO_INCREMENT PRIMARY KEY,
invoice_no VARCHAR(20),
date DATE,
customer_id INT,
CONSTRAINT fk_invoice_customer
FOREIGN KEY (customer_id)
REFERENCES customers(id)
ON DELETE CASCADE
ON UPDATE CASCADE
);

CREATE TABLE invoice_items (
id INT AUTO_INCREMENT PRIMARY KEY,
invoice_id INT,
item_id INT,
qty INT,
unit_price DECIMAL(10,2),
total DECIMAL(10,2),
CONSTRAINT fk_invoiceitems_invoice
FOREIGN KEY (invoice_id)
REFERENCES invoices(id)
ON DELETE CASCADE
ON UPDATE CASCADE,
CONSTRAINT fk_invoiceitems_item
FOREIGN KEY (item_id)
REFERENCES items(id)
ON DELETE CASCADE
ON UPDATE CASCADE
);

INSERT INTO customers (title, fname, lname, contact, district) VALUES
('Mr', 'Nimal', 'Perera', '0771234567', 'Colombo'),
('Mrs', 'Sunethra', 'Silva', '0714567890', 'Galle'),
('Miss', 'Kavindi', 'Fernando', '0759876543', 'Kandy'),
('Dr', 'Roshan', 'Wijesinghe', '0775554444', 'Kurunegala'),
('Mr', 'Tharindu', 'Jayasinghe', '0783332222', 'Matara');

INSERT INTO items (item_code, item_name, category, sub_category, qty, unit_price) VALUES
('ITM001', 'Laptop Dell Inspiron', 'Electronics', 'Laptop', 15, 150000.00),
('ITM002', 'Samsung A34 Mobile', 'Electronics', 'Mobile', 30, 87000.00),
('ITM003', 'Wooden Office Table', 'Furniture', 'Table', 10, 25000.00),
('ITM004', 'Plastic Chair', 'Furniture', 'Chair', 50, 3500.00),
('ITM005', 'HP Pavilion Laptop', 'Electronics', 'Laptop', 20, 178000.00);

INSERT INTO invoices (invoice_no, date, customer_id) VALUES
('INV1001', '2025-01-05', 1),
('INV1002', '2025-01-10', 2),
('INV1003', '2025-01-15', 3),
('INV1004', '2025-01-18', 1),
('INV1005', '2025-01-21', 4);

INSERT INTO invoice_items (invoice_id, item_id, qty, unit_price, total) VALUES
(1, 1, 1, 150000.00, 150000.00),
(1, 4, 2, 3500.00, 7000.00),
(2, 2, 1, 87000.00, 87000.00),
(3, 3, 1, 25000.00, 25000.00),
(3, 4, 4, 3500.00, 14000.00),
(4, 5, 1, 178000.00, 178000.00),
(5, 4, 6, 3500.00, 21000.00),
(5, 2, 1, 87000.00, 87000.00);

Step 5
After database import, open this link in your browser
http://localhost/ERP_SYSTEM/

The system will start.

Project Folder Structure

ERP_SYSTEM
config
includes
customers
items
reports
index.php

Technologies Used

PHP
MySQL
Bootstrap
HTML
CSS
JavaScript
