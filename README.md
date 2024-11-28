# Car Selling Website  
<p align="justify">
This project is a fully functional **Car Selling Website** designed to provide a seamless platform for buying and selling cars. Users can browse a wide range of vehicles with advanced filtering options like make, model, release year, price, and car type, and view detailed pages featuring images, descriptions, and features. Buyers can contact sellers directly, while sellers can easily sign up or log in via email or social accounts (Google/Facebook) to list their cars, upload images, and publish ads. The project emphasizes fundamental web development concepts and delivers a practical, user-friendly solution for car trading.
</p>  

## 🚀 Project Setup  
Follow these steps to set up the project locally:  
### 1️⃣ Clone the Repository  
```bash  
git clone https://github.com/therohanparmar/car-selling-laravel.git  
```  
### 2️⃣ Navigate to the Project Directory  
```bash  
cd car-selling-laravel  
```  
### 3️⃣ Configure DDEV  
```bash  
ddev config  
```  
### 4️⃣ Get PHPMyAdmin Container
```bash  
ddev get ddev/ddev-phpmyadmin  
```  
### 5️⃣ Install Dependencies  
```bash  
ddev composer update  
```  
### 6️⃣ Run Migrations (Set up Laravel's default tables)  
```bash  
ddev exec php artisan migrate  
```  
### 7️⃣ Generate Application Key
```bash  
ddev exec php artisan key:generate  
```  
### 8️⃣ Restart DDEV
```bash  
ddev restart  
```  

## 🤝 Contributing  
We love your interest in contributing to this project! 🎉  
Please check out our [**CONTRIBUTING.md**](./CONTRIBUTING.md) for detailed guidelines on how to get started, submit changes, and collaborate with others.  
Thank you for helping us make this project better! 🚀  