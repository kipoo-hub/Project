# Sicepu Project

## Overview
Sicepu is a web application designed to facilitate public complaints and aspirations. It provides a platform for users to submit their feedback, report issues, and track the status of their submissions.

## Features
- **User-Friendly Interface**: Easy navigation and submission process for users.
- **Anonymous Reporting**: Users can submit complaints anonymously.
- **Status Tracking**: Users can check the status of their reports and feedback.
- **Responsive Design**: The application is designed to work on various devices.

## Installation

### Prerequisites
- PHP >= 7.3
- Composer
- Node.js and npm

### Steps
1. Clone the repository:
   ```
   git clone https://github.com/yourusername/sicepu.git
   ```
2. Navigate to the project directory:
   ```
   cd sicepu
   ```
3. Install PHP dependencies:
   ```
   composer install
   ```
4. Install JavaScript dependencies:
   ```
   npm install
   ```
5. Copy the `.env.example` file to `.env` and configure your environment variables:
   ```
   cp .env.example .env
   ```
6. Generate the application key:
   ```
   php artisan key:generate
   ```
7. Run the migrations (if any):
   ```
   php artisan migrate
   ```
8. Start the local development server:
   ```
   php artisan serve
   ```

## Usage
- Access the application in your web browser at `http://localhost:8000`.
- Use the navigation bar to access different pages such as Home, About, Services, Blog, and Contact.
- Submit your complaints or aspirations through the designated forms.

## Contributing
Contributions are welcome! Please open an issue or submit a pull request for any enhancements or bug fixes.

## License
This project is licensed under the MIT License. See the LICENSE file for more details.