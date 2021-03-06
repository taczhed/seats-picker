![seats-picker](./img/logo.png)

Simple application for booking seats in the cinema with login and register auth.


## Installation

1. Clone:

```sh
git clone https://github.com/taczhed/seats-picker.git
```

2. Change default path in xampp `httpd.conf` and run apache server into `seats-picker` directory:

```sh
path/xampp/apache/conf/httpd.conf
```

```diff
-       DocumentRoot "default_path/xampp/htdocs"
-       <Directory "default_path/xampp/htdocs">

+       DocumentRoot "path_to_your_project/seats-picker"
+       <Directory "path_to_your_project/seats-picker">
```

After open [http://localhost/](http://localhost:80) to view project in the browser.

## Assumptions
- Working without any JavaScript framework (React, Vue, Angular etc.)
- Using only PHP and MySQL

## Tools

- [php](https://www.php.net/)
- [MySQL](https://www.mysql.com/)
- [Bulma](https://bulma.io/)
- [Font Awesome](https://fontawesome.com/)

author `taczhed`