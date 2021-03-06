[View the live A-Z Database page.](https://we247.org/databases/)

When I first created a website for the library using WordPress, I added all the databases as regular posts.  I assumed that I would sort them using categories.  This managed to work well enough but has some limitations.  I wanted to have more control over our databases.  I noticed that a number of libraries list their databases on a single page in alphabetical order with the additional option of sorting the databases by topic.  

Originally I assumed I would have to cobble something together by creating a database in MySQL and using PHP to display the results.  I had no idea that this type of functionality was built into WordPress with the ability to create custom post types!

After discovering this very basic feature, I spent sometime thinking about the kind of information that I wanted tied to my database content.  Here is list of what I wanted to include:

* Name of database
* Organization that provides our access to the database
* Access Restrictions
* Topic or category of database
* URL for accessing the database
I decided it would be best to create custom taxonomies for access restrictions, topics, and organization. The URL would be supplied using a custom field (external_url).

Below is list of steps to follow in order to implement a custom post type & taxonomy in your website.  These steps and instructions are only an abbreviated version of what is required.  For a full understanding of how this works, I highly recommend watching the following tutorial: [WordPress: Custom Post Types & Taxonomies](https://www.lynda.com/WordPress-tutorials/WordPress-Custom-Post-Types-Taxonomies/163113-2.html).

## STEP 1: Create a plugin  to register the post type & taxonomy (it is easier than it seems)
[Custom Post Type & Taxonomy Code](http://melanieawilson.com/melanieawilson/wp-content/uploads/2016/07/posttypes.pdf)

## STEP 2: Edit and create new templates so that the custom post types and taxonomies display properly throughout your website.
If you haven’t already created a child theme for your website, do that now.  All the templates described below will be stored within the child theme folder.  We’ll be creating or editing 7 files total:

1. single-databases.php
2. content-databases.php
3. taxonomy.php
4. content.php
5. archive-database.php
6. functions.php (optional – see step 3)
7. styles.css (optional)

Brief instructions and code snippets are provided [here](http://melanieawilson.com/melanieawilson/wp-content/uploads/2016/07/InstructionsforCustompostype.pdf).

## STEP 3: Linking to an External URL
If you are interested in having your database post name link directly to an external URL, follow the steps in this article: [How to Link to External Links from the Post Title in WordPress](https://www.wpbeginner.com/wp-tutorials/how-to-link-to-external-links-from-the-post-title-in-wordpress/)

## STEP 4: Sorting the databases in alphabetical order
If you would like your new custom post type to display in alphabetical order, add this code to the function.php page:

```
PHP
function owd_post_order( $query ) {
if ( $query->is_post_type_archive(‘databases’) && $query->is_main_query() ) {
$query->set( ‘orderby’, ‘title’ );
$query->set( ‘order’, ‘ASC’ );
}
}
add_action( ‘pre_get_posts’, ‘owd_post_order’ );
```

“The more you know the more you realize you don’t know” is what truly intimidates me about web development but also inspires me to dive into the rabbit hole and learn more (so much more!).

Below are the steps and resources that I followed and used to implement custom post types.

----
### Resources:
[WordPress: Custom Post Types & Taxonomies (Lynda.com – Paid resource)](https://www.lynda.com/WordPress-tutorials/WordPress-Custom-Post-Types-Taxonomies/163113-2.html)

[How to Link to External Links from the Post Title in WordPress (WPBeginner.com)](https://www.wpbeginner.com/wp-tutorials/how-to-link-to-external-links-from-the-post-title-in-wordpress/)

[Creating an Alphabetical Glossary of Posts in WordPress (Kathy is Awesome)](https://www.kathyisawesome.com/alphabetical-posts-glossary/)

[Listing Custom Taxonomy Terms](https://wordpress.org/support/topic/listing-custom-taxonomy-terms/)

[Order Custom Post Types Alphabetically (One Website Design)](https://www.onewebsitedesign.co.uk/wordpress-tips/order-wordpress-custom-post-type-alphabetically/)
