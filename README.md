<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

---

# 🛒 Laravel Product Inventory System

A **Product Inventory Management System** built with **Laravel** and **MySQL**.  
This system helps manage products, their details, and customer reviews efficiently.  
It demonstrates **1:1** and **1:N** relationships in Laravel with clean CRUD operations.  

---

## 🚀 Features
- 📦 **Product Management (CRUD)**
- 📝 **Product Details (1:1 Relationship)**
- ⭐ **Customer Reviews (1:N Relationship)**
- 🔍 **Search & Filter** products by name, category, or manufacturer
- 📊 **Pagination** for product listing
- 🗑️ **Cascade Delete** (removes details & reviews when product is deleted)
- 📤 **Optional Export** (CSV / PDF)

---

## 🗄️ Database Schema

### **products**
- `id` (PK)  
- `name` (string)  
- `price` (decimal)  
- `stock` (integer)  
- `category` (string, optional)  
- `timestamps`  

### **product_details** (1:1 with products)
- `id` (PK)  
- `product_id` (FK → products.id, unique)  
- `description` (text)  
- `manufacturer` (string)  
- `warranty` (string)  
- `timestamps`  

### **reviews** (1:N with products)
- `id` (PK)  
- `product_id` (FK → products.id)  
- `customer_name` (string)  
- `rating` (integer, 1–5)  
- `comment` (text)  
- `timestamps`  

---

## 🛠️ Tech Stack
- **Framework:** Laravel 10+  
- **Database:** MySQL  
- **Frontend:** Blade Templates, Bootstrap  
- **Export:** Laravel Excel / DomPDF (optional)  

---

## ⚙️ Installation & Setup

1. **Clone the repository**
   ```bash
   git clone https://github.com/your-username/laravel-product-inventory-system.git
   cd laravel-product-inventory-system
   ```

2. **Install dependencies**
   ```bash
   composer install
   npm install && npm run dev
   ```

3. **Setup environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
   - Update `.env` with your **database credentials**.

4. **Run migrations**
   ```bash
   php artisan migrate
   ```

5. **Serve the app**
   ```bash
   php artisan serve
   ```

---

## 📷 Screenshots (Optional)
![imagealt]()

---

## 🤝 Contributing
Contributions are welcome!  
1. Fork the repo  
2. Create a feature branch (`git checkout -b feature-name`)  
3. Commit changes (`git commit -m 'Add new feature'`)  
4. Push branch (`git push origin feature-name`)  
5. Create a Pull Request  

---

## 📜 License
This project is licensed under the **MIT License** – feel free to use and modify.  

---

## 👨‍💻 Author
**Panchalingam Janarthan**  
🔗 [GitHub](https://github.com/kpj31) | [Portfolio](www.linkedin.com/in/janarthan-panchalingam)  
