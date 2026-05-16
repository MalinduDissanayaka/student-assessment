# Student Marks Calculator - Laravel Assessment 01

This is a simple Laravel-based application developed as part of a technical assessment. The primary goal is to calculate student performance based on their marks in three subjects.

## 🚀 Features
* **Student Data Entry:** A form to capture the student's name and marks for three subjects.
* **Server-side Validation:** Ensures all fields are filled and properly validated using Laravel's validation logic.
* **Automated Calculations:**
    * **Total Marks:** Sum of all three subjects.
    * **Average:** Calculated from the total marks.
* **Pass/Fail Status:** Automatically determines status where an average of 50 or above is a "Pass".
* **Result Display:** Results are displayed instantly on the screen after form submission.

## 🛠️ Technical Stack
* **Framework:** PHP Laravel
* **Frontend:** Blade Templating Engine
* **Logic:** Controller-driven structure with proper Routing
* **Styling:** Designed with a "Clean UI" for better presentation

## 📂 Project Structure
* **Routes:** `routes/web.php` - Manages the URLs for the form and calculation logic.
* **Controller:** `app/Http/Controllers/StudentController.php` - Contains reusable logic for calculations and validation.
* **View:** `resources/views/calculator.blade.php` - The Blade file for the user interface.

## ⚙️ Setup and Installation

Follow these steps to get the project running locally:

1. **Clone the project:**
   ```bash
   git clone [https://github.com/MalinduDissanayaka/student-assessment.git](https://github.com/MalinduDissanayaka/student-assessment.git)
   cd student-assessment
2. **Install dependencies:**
   ```bash
   composer install
3. **Configure Environment:**
    ```bash
    cp .env.example .env
    php artisan key:generate
4. **Launch the application:**
    ```bash
    php artisan serve
4. **Access the system:**
    Open your browser and go to: http://127.0.0.1:8000/calculator

    
   
