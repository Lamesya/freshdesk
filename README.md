# Freshdesk API PHP

## Installation
Requires PHP 8.1

You can install the package via `composer require` command:

```shell
composer require lamesya/freshdesk
```

Or simply add it to your composer.json dependences and run `composer update`:

```json
"require": {
    "lamesya/freshdesk": "^1.0"
}
```

# Usage

### Using API Token
```php
$token = "XXXXXXXXXXXXXXXXXXX";
$domain = "sample";
$freshdesk = new Freshdesk($token, $domain);
```

## Available resources
| Resource                  | Methods implemented       | Notes         |
|:--------------------------|:--------------------------|:--------------|
| Agent                     | :white_check_mark: 2/5    |               |
| Contact                   | :white_check_mark: 2/5    |               |
| ContactField              | :white_check_mark: 2/5    |               |
| Group                     | :white_check_mark: 2/5    |               |
| Role                      | :white_check_mark: 2/5    |               |
| SlaPolicies               | :white_check_mark: 2/5    |               |
| Ticket                    | :white_check_mark: 2/5    |               |
| TicketField               | :white_check_mark: 2/5    |               |
| TicketForm                | :white_check_mark: 2/5    |               |
| TimeEntry                 | :white_check_mark: 2/5    |               |