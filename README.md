
### Adding the README to the repository and committing the changes

1. Create the `README.md` file in the root directory of your project.
2. Add the file to Git, commit, and push the changes.

```bash
echo "# Laravel To-Do App

A simple to-do list application built with Laravel, designed to be used without authentication. The to-do list is stored in the session and will be reset upon closing the browser or after a period of inactivity.

## Features

- Add new to-do items
- Display the list of to-do items
- Reset the to-do list
- Session-based storage with expiration on browser close or inactivity

## Prerequisites

- PHP >= 7.3
- Composer

## Installation

1. **Clone the repository**
   \`\`\`bash
   git clone https://github.com/msolehin/todo-app.git
   cd laravel-todo-app
   \`\`\`

2. **Install PHP dependencies**
   \`\`\`bash
   composer install
   \`\`\`

3. **Set up environment file**
   Copy the example environment file and create a new one:
   \`\`\`bash
   cp .env.example .env
   \`\`\`

4. **Generate application key**
   \`\`\`bash
   php artisan key:generate
   \`\`\`

5. **Configure session settings**
   Ensure the session settings in \`config/session.php\` are set as desired, specifically:
   \`\`\`php
   'lifetime' => 30,
   'expire_on_close' => true,
   \`\`\`

6. **Run the application**
   Start the Laravel development server:
   \`\`\`bash
   php artisan serve
   \`\`\`

7. **Access the application**
   Open your web browser and navigate to:
   \`\`\`
   http://localhost:8000
   \`\`\`

## Usage

- **Add a To-Do Item:**
  - Enter a new to-do item in the input field and click \"Add\".
  - The new item will appear at the top of the list.

- **Reset the To-Do List:**
  - Click the \"Reset List\" button to clear all items.

## Contributing

1. Fork the repository
2. Create your feature branch (\`git checkout -b feature/your-feature\`)
3. Commit your changes (\`git commit -m 'Add some feature'\`)
4. Push to the branch (\`git push origin feature/your-feature\`)
5. Open a pull request

## License

This project is open-source and available under the MIT License.
" > README.md
