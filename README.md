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

## 0.0.207 Add menu support
* Add the function *add_theme_support()* with the *'menus'* parameter in *functions.php*.

## 0.0.208 Display menus
* In the *includes* folder create the file *setup.php*. Create the *lsu_setup_theme* function wherein the primary navigation menu will be registered with *register_nav_menu*, with the *primary* location and the description *Primary Menu*. The double underscore function is used for translating purposes in the text domain of the theme.
* Include *setup.php* in *functions.php*.
* In *functions.php* add an action that calls the hook *after_setup_theme* which calls the function *lsu_setup_theme*.
* In *index.php* use *wp_nav_menu* in the desired position. Configure the parameter array depending on the html code used. For use with bootstrap, the *container* is set to false and *menu_class* is set to the relevant classes, for instance *nav* and *navbar-nav*.
* The menu can be displayed in the website after it is added and configured via the Dashboard.

## 0.0.209 Header and Footer
* Create the *header.php* and *footer.php* files.
* Copy the related content from *index.php* and add *get_header()* and *get_footer()* respectively in its place.

## 0.0.210 Widget areas
* In *functions.php* add the *widgets_init* hook calling the *lsu_widgets* function.
* In the *includes/front* folder create the file *widgets.php* and define the *lsu_widgets* function.
* Include *widgets.php* in *functions.php*.
* In *lsu_widgets* call *register_sidebar*.  
* Create the *sidebar.php* file, check with *is_active_sidebar()* and call *dynamic_sidebar()*.
* Call the *get_sidebar()* function in the html portion where we want it displayed.

## 0.0.211 Format sidebars
* In *register_sidebar()* set the *before_widget* key's value to include placeholders such as *%1$s* and *%2$s* so that other widgets might add own classes there.
* Format the rest of the keys' values with opening and closing tags relative to the html content.

## 0.0.212 Format the search form
* Create *searchform.php*.
* Set *method* to *get*, *id* and *class* to *searchform*.
* Set *action* to the homepage url with *home_url*.
* Set *name* *'s'* to correspond to the loop.
* Set *id* to *search*.
* Set value to the return of the *the_search_query* function.

## 0.0.213 The Loop
* In *functions.php* add support for post thumbnails with *add_theme_support*.
* In *index.php* create the WordPress Loop, using *have_posts()* for checking and looping.
* Use *the_post()* to query the database and get the current post in the loop.

## 0.0.214 Template Tags in the Loop
* Use template tags such as *the_title()*, *the_permalink()*, *the_time()*, *the_category()*, *the_tags()*, *the_post_thumbnail()*, *the_content()* to provide wanted outputs.

## 0.0.214.1 Get the theme images' paths
* In the *src="* portion of the images tags, use *bloginfo('template_url')* in order to access the URL of the active theme’s directory properly and get the correct path to the theme's images.

## 0.0.215 Pagination
* Right after the loop, use the *next_posts_link()* and *previous_posts_link()* functions to add pagination.

## 0.0.216 Template Hierarchy
* To determine which template file to use, WordPress:
    * Matches every query string to a query type to decide which page is being requested (for example, a search page, a category page, etc);
    * Selects the template in the order determined by the template hierarchy;
    * Looks for template files with specific names in the current theme’s directory and uses the first matching template file as specified by the hierarchy.

## 0.0.217 Add the single post template
* Create *single.php*.
* Paste the loop section from *index.php* and edit accordingly.
* The *next_post_link()* and *previous_post_link()* functions are in this case positioned **inside** the loop. The placeholders *%link* and *%title* are used to fetch the relevant data.
* Add the *edit_post_link* function which displays the *"Edit This"* link if an authorized user is logged in.
