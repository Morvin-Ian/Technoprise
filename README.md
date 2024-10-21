# Task Management API

This is a simple RESTful API built with Laravel that allows users to manage tasks.

## Requirements
- PHP 8.0 or higher
- Laravel 11
- PostgreSQL database

## Installation

1. Clone the repository:
```
git clone git@github.com:Morvin-Ian/Technoprise.git
```

2. Install the dependencies:
```
composer install
```

3. Create a new PostgreSQL database and update the database connection details in the `.env` file.

4. Run the database migrations:
```
php artisan migrate
```

5. Start the development server:
```
php artisan serve
```

The API will be available at `http://localhost:8000/api/`.

## API Endpoints

### Tasks

- `GET /api/tasks`: Get all tasks (with optional filtering and search)
- `GET /api/tasks/{id}`: Get a specific task
- `POST /api/tasks`: Create a new task
- `PUT /api/tasks/{id}`: Update an existing task
- `DELETE /api/tasks/{id}`: Delete a task

#### Filtering and Search

- `GET /api/tasks?status={status}`: Filter tasks by status (pending or completed)
- `GET /api/tasks?due_date={due_date}`: Filter tasks by due date
- `GET /api/tasks?search={title}`: Search tasks by title

### Responses

- Successful responses will return a JSON object with the requested data.
- Error responses will return a JSON object with an error message and the appropriate HTTP status code.
