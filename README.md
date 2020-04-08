# Revature Terrible User Interface

Create the most mindfully horrible user interface you can construct.

Remember: The goal is to write good code that causes the user to have a bad experience. 

Login capability: an app that allows a user to create an account, log in, and update information

# Instalation

- Clone the repository

    git clone git@github.com:rogerio-pereira/Revature_TerribleUserInterface.git
    
- Copy .env.example File to .env 

- Edit these lines

    DB_CONNECTION=sqlite  
    DB_HOST=127.0.0.1  
    #DB_PORT=3306  
    #DB_DATABASE=laravel  
    #DB_USERNAME=root  
    #DB_PASSWORD=  
    
- Install laravel dependecies

    composer install
    
- Generate encryption key

    php artisan key:generate
    
- Install node dependencies (these project doesn't use any library, but is required to run these commands to compile the frontend)

   npm i  
   npm run dev
   
- Create database file   

    touch database/database.sqlite
    
- Migrate database

    php artisan migrate
    
- Run PHP server

    php artisan serve
    
- Access application with the link http://localhost:8000

