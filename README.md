# WordPress Development - Create WordPress Themes and Plugins
#### by [Luis Ramirez Jr](https://www.udemy.com/wordpress-development-create-wordpress-themes-and-plugins/#/instructor-10964188)

## 0.0.201 *style.css* and *index.php*
* Create the required files *style.css* and *index.php*.
* Add a file header with the theme name in *style.css*.

## 0.0.202 *functions.php*
* Create the *functions.php* file.

## 0.0.203 *wp_enqueue_scripts*
* In order to be able to access scripts and styles, the action hook *wp_enqueue_scripts* is added with *add_action* in *functions.php*. It is calling the function *lsu_enqueue*.
* Create the folders *includes/front/* and the file *includes/front/enqueue.php*, where the function *lsu_enqueue* will be defined.
* Include *enqueue.php* in *functions.php*. Use *get_template_directory* to get the correct path.
