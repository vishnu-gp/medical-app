
# Laravel Medical App

Laravel based medical app to monitor blood pressure readings of patients. 


## Installation

Clone the repository
```
git clone https://github.com/vishnu-gp/medical-app
```

Create a local environment and update the variables
```
cp .env.example .env
```

Start docker containers
```
./vendor/bin/sail up
```
Install  dependencies and key generate
```
sail composer install
sail npm install
sail artisan key:generate
```
Run all migrations and seed database
```
sail artisan migrate
sail artisan db:seed
```
Run all tests
```
sail test
```