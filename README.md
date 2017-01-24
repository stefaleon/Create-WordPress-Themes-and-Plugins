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

## 0.0.204 Register and enqueue styles
* Create an *assets* folder which may contain html templates, styles, scripts etc.
* In *lsu_enqueue* register the used styles with *wp_register_style*.
* Make the styles loadable by enqueueing them with *wp_enqueue_style*.
* Declare the spot for the styles to be enqueued by using the *wp_head()* function inside *index.php*.

## 0.0.205 Register and enqueue scripts
* Call the *wp_footer()* at the bottom of *index.php* to declare the spot for the scripts to be enqueued.
* By default, WordPress bundles [many popular scripts](https://developer.wordpress.org/reference/functions/wp_register_script/#core-registered-scripts) commonly used by web developers besides the scripts used by core itself. These should not be re-registered and can be directly enqueued with the handle provided by WordPress.
* In *lsu_enqueue* register the not bundled and the custom scripts with *wp_register_script*. The fifth parameter is set to true so that the scripts are loaded in the footer area, in the end if the html code.
* In *lsu_enqueue* use *wp_enqueue_script* to enqueue bundled scripts, such as jQuery with the handle *jquery*.
* Enqueue the rest of the registered scripts with their assigned handles.
