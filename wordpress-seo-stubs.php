<?php
/**
 * Generated stub declarations for WooCommerce.
 * @see https://woocommerce.com
 * @see https://github.com/php-stubs/woocommerce-stubs
 */

namespace {
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Frontend
     */
    /**
     * This class handles the Breadcrumbs generation and display.
     */
    class WPSEO_Breadcrumbs
    {
        /**
         * Instance of this class.
         *
         * @var object
         */
        public static $instance;
        /**
         * Last used 'before' string.
         *
         * @var string
         */
        public static $before = '';
        /**
         * Last used 'after' string.
         *
         * @var string
         */
        public static $after = '';
        /**
         * The date helper.
         *
         * @var WPSEO_Date_Helper
         */
        protected $date;
        /**
         * Blog's show on front setting, 'page' or 'posts'.
         *
         * @var string
         */
        private $show_on_front;
        /**
         * Blog's page for posts setting, page id or false.
         *
         * @var mixed
         */
        private $page_for_posts;
        /**
         * Current post object.
         *
         * @var mixed
         */
        private $post;
        /**
         * HTML wrapper element for a single breadcrumb element.
         *
         * @var string
         */
        private $element = 'span';
        /**
         * Yoast SEO breadcrumb separator.
         *
         * @var string
         */
        private $separator = '';
        /**
         * HTML wrapper element for the Yoast SEO breadcrumbs output.
         *
         * @var string
         */
        private $wrapper = 'span';
        /**
         * Array of crumbs.
         *
         * Each element of the crumbs array can either have one of these keys:
         *    "id"         for post types;
         *    "ptarchive"  for a post type archive;
         *    "term"       for a taxonomy term.
         * OR it consists of a predefined set of 'text', 'url' and 'allow_html'.
         *
         * @var array
         */
        private $crumbs = [];
        /**
         * Count of the elements in the $crumbs property.
         *
         * @var int
         */
        private $crumb_count = 0;
        /**
         * Array of individual (linked) html strings created from crumbs.
         *
         * @var array
         */
        private $links = [];
        /**
         * Breadcrumb html string.
         *
         * @var string
         */
        private $output;
        /**
         * Holds the WooCommerce shop page instance.
         *
         * @var WPSEO_WooCommerce_Shop_Page
         */
        private $woocommerce_shop_page;
        /**
         * Create the breadcrumb.
         */
        protected function __construct()
        {
        }
        /**
         * Get breadcrumb string using the singleton instance of this class.
         *
         * @param string $before  Optional string to prepend.
         * @param string $after   Optional string to append.
         * @param bool   $display Echo or return flag.
         *
         * @return string Returns the breadcrumbs as a string.
         */
        public static function breadcrumb($before = '', $after = '', $display = \true)
        {
        }
        /**
         * Magic method to use in case the class would be send to string.
         *
         * @return string
         */
        public function __toString()
        {
        }
        /**
         * Retrieves an instance of the class.
         *
         * @return WPSEO_Breadcrumbs The instance.
         */
        public static function get_instance()
        {
        }
        /**
         * Returns the collected links for the breadcrumbs.
         *
         * @return array The collected links.
         */
        public function get_links()
        {
        }
        /**
         * Returns the link url for a single id.
         *
         * When the target is private and the user isn't allowed to access it, just return an empty string.
         *
         * @param int $id The target id.
         *
         * @return string Empty string when post isn't accessible. An URL if accessible.
         */
        protected function get_link_url_for_id($id)
        {
        }
        /**
         * Filter: 'wpseo_breadcrumb_single_link_wrapper' - Allows developer to change or wrap each breadcrumb element.
         *
         * @api string $element
         */
        private function filter_element()
        {
        }
        /**
         * Filter: 'wpseo_breadcrumb_separator' - Allow (theme) developer to change the Yoast SEO breadcrumb separator.
         *
         * @api string $breadcrumbs_sep Breadcrumbs separator.
         */
        private function filter_separator()
        {
        }
        /**
         * Filter: 'wpseo_breadcrumb_output_wrapper' - Allow changing the HTML wrapper element for the Yoast SEO breadcrumbs output.
         *
         * @api string $wrapper The wrapper element.
         */
        private function filter_wrapper()
        {
        }
        /**
         * Get a term's parents.
         *
         * @param object $term Term to get the parents for.
         *
         * @return array
         */
        private function get_term_parents($term)
        {
        }
        /**
         * Find the deepest term in an array of term objects.
         *
         * @param array $terms Terms set.
         *
         * @return object
         */
        private function find_deepest_term($terms)
        {
        }
        /**
         * Retrieve the hierachical ancestors for the current 'post'.
         *
         * @return array
         */
        private function get_post_ancestors()
        {
        }
        /**
         * Determine the crumbs which should form the breadcrumb.
         */
        private function set_crumbs()
        {
        }
        /**
         * Determine whether we are on the front page of the site.
         *
         * @return bool
         */
        private function is_front_page()
        {
        }
        /**
         * Add a single id based crumb to the crumbs property.
         *
         * @param int $id Post ID.
         */
        private function add_single_post_crumb($id)
        {
        }
        /**
         * Add a term based crumb to the crumbs property.
         *
         * @param object $term Term data object.
         */
        private function add_term_crumb($term)
        {
        }
        /**
         * Add a ptarchive based crumb to the crumbs property.
         *
         * @param string $pt Post type.
         */
        private function add_ptarchive_crumb($pt)
        {
        }
        /**
         * Add a predefined crumb to the crumbs property.
         *
         * @param string $text       Text string.
         * @param string $url        URL string.
         * @param bool   $allow_html Flag to allow HTML.
         */
        private function add_predefined_crumb($text, $url = '', $allow_html = \false)
        {
        }
        /**
         * Add Homepage crumb to the crumbs property.
         */
        private function maybe_add_home_crumb()
        {
        }
        /**
         * Add Blog crumb to the crumbs property.
         */
        private function add_blog_crumb()
        {
        }
        /**
         * Add Blog crumb to the crumbs property for single posts where Home != blogpage.
         *
         * @return void
         */
        private function maybe_add_blog_crumb()
        {
        }
        /**
         * Add ptarchive crumb to the crumbs property if it can be linked to, for a single post.
         */
        private function maybe_add_pt_archive_crumb_for_post()
        {
        }
        /**
         * Add taxonomy crumbs to the crumbs property for a single post.
         */
        private function maybe_add_taxonomy_crumbs_for_post()
        {
        }
        /**
         * Add hierarchical ancestor crumbs to the crumbs property for a single post.
         */
        private function add_post_ancestor_crumbs()
        {
        }
        /**
         * Add taxonomy parent crumbs to the crumbs property for a taxonomy.
         */
        private function add_crumbs_for_taxonomy()
        {
        }
        /**
         * Adds a page crumb to the visible breadcrumbs.
         *
         * @return void
         */
        private function maybe_add_page_crumb()
        {
        }
        /**
         * Add parent taxonomy crumb based on user defined preference.
         *
         * @param object $term Term data object.
         */
        private function maybe_add_preferred_term_parent_crumb($term)
        {
        }
        /**
         * Add parent taxonomy crumbs to the crumb property for hierachical taxonomy.
         *
         * @param object $term Term data object.
         */
        private function maybe_add_term_parent_crumbs($term)
        {
        }
        /**
         * Add month-year crumb to crumbs property.
         */
        private function add_linked_month_year_crumb()
        {
        }
        /**
         * Add (non-link) month crumb to crumbs property.
         */
        private function add_month_crumb()
        {
        }
        /**
         * Add (non-link) year crumb to crumbs property.
         */
        private function add_year_crumb()
        {
        }
        /**
         * Add (non-link) date crumb to crumbs property.
         */
        private function add_date_crumb()
        {
        }
        /**
         * Take the crumbs array and convert each crumb to a single breadcrumb string.
         *
         * @link http://support.google.com/webmasters/bin/answer.py?hl=en&answer=185417 Google documentation on RDFA
         */
        private function prepare_links()
        {
        }
        /**
         * Retrieve link url and text based on post id.
         *
         * @param int $id Post ID.
         *
         * @return array Array of link text and url.
         */
        private function get_link_info_for_id($id)
        {
        }
        /**
         * Retrieve link url and text based on term object.
         *
         * @param object $term Term object.
         *
         * @return array Array of link text and url.
         */
        private function get_link_info_for_term($term)
        {
        }
        /**
         * Retrieve link url and text based on post type.
         *
         * @param string $pt Post type.
         *
         * @return array Array of link text and url.
         */
        private function get_link_info_for_ptarchive($pt)
        {
        }
        /**
         * Gets the custom set breadcrumb title for the passed post type.
         *
         * @param string $post_type The post type to check.
         *
         * @return string the breadcrumb title.
         */
        private function get_post_type_archive_breadcrumb($post_type)
        {
        }
        /**
         * Gets the breadcrumb for the passed post type if it's a WooCommerce product and has a breadcrumb title set.
         *
         * @param string $post_type The post type to check.
         *
         * @return string The breadcrumb title.
         */
        private function get_woocommerce_breadcrumb($post_type)
        {
        }
        /**
         * Determines the archive title based on the passed post type.
         *
         * @param string $post_type The post type to determine the title for.
         *
         * @return string The archive title.
         */
        private function get_archive_title($post_type)
        {
        }
        /**
         * Create a breadcrumb element string.
         *
         * @todo The `$paged` variable only works for archives, not for paged articles, so this does not work
         * for paged article at this moment.
         *
         * @param  array $link Link info array containing the keys:
         *                     'text'    => (string) link text.
         *                     'url'    => (string) link url.
         *                     (optional) 'title'         => (string) link title attribute text.
         *                     (optional) 'allow_html'    => (bool) whether to (not) escape html in the link text.
         *                     This prevents html stripping from the text strings set in the
         *                     WPSEO -> Internal Links options page.
         * @param  int   $i    Index for the current breadcrumb.
         *
         * @return string
         */
        private function crumb_to_link($link, $i)
        {
        }
        /**
         * Create a complete breadcrumb string from an array of breadcrumb element strings.
         */
        private function links_to_string()
        {
        }
        /**
         * Wrap a complete breadcrumb string in a wrapper.
         */
        private function wrap_breadcrumb()
        {
        }
        /**
         * Retrieves HTML ID attribute.
         *
         * @return string
         */
        private function get_output_id()
        {
        }
        /**
         * Retrieves HTML Class attribute.
         *
         * @return string
         */
        private function get_output_class()
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Frontend
     */
    /**
     * Represents the classifier for determine the type of the currently opened page.
     */
    class WPSEO_Frontend_Page_Type
    {
        /**
         * Checks if the currently opened page is a simple page.
         *
         * @return bool Whether the currently opened page is a simple page.
         */
        public static function is_simple_page()
        {
        }
        /**
         * Returns the id of the currently opened page.
         *
         * @return int The id of the currently opened page.
         */
        public static function get_simple_page_id()
        {
        }
        /**
         * Determine whether this is the homepage and shows posts.
         *
         * @return bool Whether or not the current page is the homepage that displays posts.
         */
        public static function is_home_posts_page()
        {
        }
        /**
         * Determine whether this is the static frontpage.
         *
         * @return bool Whether or not the current page is a static frontpage.
         */
        public static function is_home_static_page()
        {
        }
        /**
         * Determine whether this is the statically set posts page, when it's not the frontpage.
         *
         * @return bool Whether or not it's a non-frontpage, statically set posts page.
         */
        public static function is_posts_page()
        {
        }
    }
    /**
     * Main frontend class for Yoast SEO, responsible for the SEO output as well as removing
     * default WordPress output.
     */
    class WPSEO_Frontend
    {
        /**
         * Instance of this class.
         *
         * @var object
         */
        public static $instance;
        /**
         * Toggle indicating whether output buffering has been started.
         *
         * @var boolean
         */
        private $ob_started = \false;
        /**
         * Holds the canonical URL for the current page.
         *
         * @var string
         */
        private $canonical = \null;
        /**
         * Holds the canonical URL for the current page that cannot be overriden by a manual canonical input.
         *
         * @var string
         */
        private $canonical_no_override = \null;
        /**
         * Holds the canonical URL for the current page without pagination.
         *
         * @var string
         */
        private $canonical_unpaged = \null;
        /**
         * Holds the pages meta description.
         *
         * @var string
         */
        private $metadesc = \null;
        /**
         * Holds the generated title for the page.
         *
         * @var string
         */
        private $title = \null;
        /**
         * An instance of the WPSEO_Frontend_Page_Type class.
         *
         * @var WPSEO_Frontend_Page_Type
         */
        protected $frontend_page_type;
        /**
         * An instance of the WPSEO_WooCommerce_Shop_Page class.
         *
         * @var WPSEO_WooCommerce_Shop_Page
         */
        protected $woocommerce_shop_page;
        /**
         * Default title with replace-vars.
         *
         * @var string
         */
        public static $default_title = '%%title%% %%sep%% %%sitename%%';
        /**
         * Class constructor.
         *
         * Adds and removes a lot of filters.
         */
        protected function __construct()
        {
        }
        /**
         * Initialize the functions that only need to run on the frontpage.
         */
        public function front_page_specific_init()
        {
        }
        /**
         * Resets the entire class so canonicals, titles etc can be regenerated.
         */
        public function reset()
        {
        }
        /**
         * Get the singleton instance of this class.
         *
         * @return WPSEO_Frontend
         */
        public static function get_instance()
        {
        }
        /**
         * Override Woo's title with our own.
         *
         * @param string $title Title string.
         *
         * @return string
         */
        public function fix_woo_title($title)
        {
        }
        /**
         * Used for static home and posts pages as well as singular titles.
         *
         * @param object|null $object If filled, object to get the title for.
         *
         * @return string
         */
        public function get_content_title($object = \null)
        {
        }
        /**
         * Retrieves the SEO title set in the SEO widget.
         *
         * @param null $object Object to retrieve the title from.
         *
         * @return string The SEO title for the specified object, or queried object if not supplied.
         */
        public function get_seo_title($object = \null)
        {
        }
        /**
         * Used for category, tag, and tax titles.
         *
         * @return string
         */
        public function get_taxonomy_title()
        {
        }
        /**
         * Used for author titles.
         *
         * @return string
         */
        public function get_author_title()
        {
        }
        /**
         * Simple function to use to pull data from $options.
         *
         * All titles pulled from options will be run through the $this->replace_vars function.
         *
         * @param string       $index      Name of the page to get the title from the settings for.
         * @param object|array $var_source Possible object to pull variables from.
         *
         * @return string
         */
        public function get_title_from_options($index, $var_source = [])
        {
        }
        /**
         * Get the default title for the current page.
         *
         * This is the fallback title generator used when a title hasn't been set for the specific content, taxonomy, author
         * details, or in the options. It scrubs off any present prefix before or after the title (based on $seplocation) in
         * order to prevent duplicate seperations from appearing in the title (this happens when a prefix is supplied to the
         * wp_title call on singular pages).
         *
         * @param string $sep         The separator used between variables.
         * @param string $seplocation Whether the separator should be left or right.
         * @param string $title       Possible title that's already set.
         *
         * @return string
         */
        public function get_default_title($sep, $seplocation, $title = '')
        {
        }
        /**
         * This function adds paging details to the title.
         *
         * @param string $sep         Separator used in the title.
         * @param string $seplocation Whether the separator should be left or right.
         * @param string $title       The title to append the paging info to.
         *
         * @return string
         */
        public function add_paging_to_title($sep, $seplocation, $title)
        {
        }
        /**
         * Add part to title, while ensuring that the $seplocation variable is respected.
         *
         * @param string $sep         Separator used in the title.
         * @param string $seplocation Whether the separator should be left or right.
         * @param string $title       The title to append the title_part to.
         * @param string $title_part  The part to append to the title.
         *
         * @return string
         */
        public function add_to_title($sep, $seplocation, $title, $title_part)
        {
        }
        /**
         * Main title function.
         *
         * @param string $title              Title that might have already been set.
         * @param string $separator          Separator determined in theme (unused).
         * @param string $separator_location Whether the separator should be left or right.
         *
         * @return string
         */
        public function title($title, $separator = '', $separator_location = '')
        {
        }
        /**
         * Main title generation function.
         *
         * @param string $title              Title that might have already been set.
         * @param string $separator_location Whether the separator should be left or right.
         *
         * @return string
         */
        private function generate_title($title, $separator_location)
        {
        }
        /**
         * Function used when title needs to be force overridden.
         *
         * @return string
         */
        public function force_wp_title()
        {
        }
        /**
         * Outputs or returns the debug marker, which is also used for title replacement when force rewrite is active.
         *
         * @return string The marker that will be echoed.
         */
        public function debug_mark()
        {
        }
        /**
         * Returns the debug marker, which is also used for title replacement when force rewrite is active.
         *
         * @return string The generated marker.
         */
        public function get_debug_mark()
        {
        }
        /**
         * Output Webmaster Tools authentication strings.
         */
        public function webmaster_tools_authentication()
        {
        }
        /**
         * Helper function for authentication.
         *
         * @param string $option_key Option key.
         * @param string $tag_name   The tag name.
         *
         * @return void
         */
        private function webmaster_tools_helper($option_key, $tag_name)
        {
        }
        /**
         * Main wrapper function attached to wp_head. This combines all the output on the frontend of the Yoast SEO plugin.
         */
        public function head()
        {
        }
        /**
         * Retrieves the meta robots value.
         *
         * @return string
         */
        public function get_robots()
        {
        }
        /**
         * Outputs the meta robots value.
         *
         * @return string
         */
        public function robots()
        {
        }
        /**
         * Determine $robots values for a single post.
         *
         * @param array $robots  Robots data array.
         * @param int   $post_id The post ID for which to determine the $robots values, defaults to current post.
         *
         * @return array
         */
        public function robots_for_single_post($robots, $post_id = 0)
        {
        }
        /**
         * This function normally outputs the canonical but is also used in other places to retrieve
         * the canonical URL for the current page.
         *
         * @param bool $echo        Whether or not to output the canonical element.
         * @param bool $un_paged    Whether or not to return the canonical with or without pagination added to the URL.
         * @param bool $no_override Whether or not to return a manually overridden canonical.
         *
         * @return string $canonical
         */
        public function canonical($echo = \true, $un_paged = \false, $no_override = \false)
        {
        }
        /**
         * This function normally outputs the canonical but is also used in other places to retrieve
         * the canonical URL for the current page.
         *
         * @return void
         */
        private function generate_canonical()
        {
        }
        /**
         * Parse the home URL setting to find the base URL for relative URLs.
         *
         * @param string $path Optional path string.
         *
         * @return string
         */
        private function base_url($path = \null)
        {
        }
        /**
         * Adds 'prev' and 'next' links to archives.
         *
         * @link  http://googlewebmastercentral.blogspot.com/2011/09/pagination-with-relnext-and-relprev.html
         * @since 1.0.3
         */
        public function adjacent_rel_links()
        {
        }
        /**
         * Output the rel next/prev links for a single post / page.
         *
         * @return void
         */
        protected function rel_links_single()
        {
        }
        /**
         * Output the rel next/prev links for an archive page.
         */
        protected function rel_links_archive()
        {
        }
        /**
         * Get adjacent pages link for archives.
         *
         * @since 1.0.2
         * @since 7.1    Added $query_arg parameter for single post/page pagination.
         *
         * @param string $rel       Link relationship, prev or next.
         * @param string $url       The un-paginated URL of the current archive.
         * @param string $page      The page number to add on to $url for the $link tag.
         * @param string $query_arg Optional. The argument to use to set for the page to load.
         *
         * @return void
         */
        private function adjacent_rel_link($rel, $url, $page, $query_arg = 'paged')
        {
        }
        /**
         * Return the base for pagination.
         *
         * @return string The pagination base.
         */
        private function get_pagination_base()
        {
        }
        /**
         * Outputs the meta description element or returns the description text.
         *
         * @param bool $echo Echo or return output flag.
         *
         * @return string
         */
        public function metadesc($echo = \true)
        {
        }
        /**
         * Generates the meta description text.
         */
        private function generate_metadesc()
        {
        }
        /**
         * Based on the redirect meta value, this function determines whether it should redirect the current post / page.
         *
         * @return boolean
         */
        public function page_redirect()
        {
        }
        /**
         * Outputs noindex values for the current page.
         */
        public function noindex_page()
        {
        }
        /**
         * Send a Robots HTTP header preventing URL from being indexed in the search results while allowing search engines
         * to follow the links in the object at the URL.
         *
         * @since 1.1.7
         * @return boolean Boolean indicating whether the noindex header was sent.
         */
        public function noindex_robots()
        {
        }
        /**
         * Adds rel="nofollow" to a link, only used for login / registration links.
         *
         * @param string $input The link element as a string.
         *
         * @return string
         */
        public function nofollow_link($input)
        {
        }
        /**
         * When certain archives are disabled, this redirects those to the homepage.
         *
         * @return boolean False when no redirect was triggered.
         */
        public function archive_redirect()
        {
        }
        /**
         * If the option to disable attachment URLs is checked, this performs the redirect to the attachment.
         *
         * @return bool Returns succes status.
         */
        public function attachment_redirect()
        {
        }
        /**
         * Performs the redirect from the attachment page to the image file itself.
         *
         * @param string $attachment_url The attachment image url.
         *
         * @return void
         */
        public function do_attachment_redirect($attachment_url)
        {
        }
        /**
         * Replaces the possible RSS variables with their actual values.
         *
         * @param string $content The RSS content that should have the variables replaced.
         *
         * @return string
         */
        public function rss_replace_vars($content)
        {
        }
        /**
         * Adds the RSS footer (or header) to the full RSS feed item.
         *
         * @param string $content Feed item content.
         *
         * @return string
         */
        public function embed_rssfooter($content)
        {
        }
        /**
         * Adds the RSS footer (or header) to the excerpt RSS feed item.
         *
         * @param string $content Feed item excerpt.
         *
         * @return string
         */
        public function embed_rssfooter_excerpt($content)
        {
        }
        /**
         * Adds the RSS footer and/or header to an RSS feed item.
         *
         * @since 1.4.14
         *
         * @param string $content Feed item content.
         * @param string $context Feed item context, either 'excerpt' or 'full'.
         *
         * @return string
         */
        public function embed_rss($content, $context = 'full')
        {
        }
        /**
         * Used in the force rewrite functionality this retrieves the output, replaces the title with the proper SEO
         * title and then flushes the output.
         */
        public function flush_cache()
        {
        }
        /**
         * Starts the output buffer so it can later be fixed by flush_cache().
         */
        public function force_rewrite_output_buffer()
        {
        }
        /**
         * Get the product name in the head section.
         *
         * @return string
         */
        private function head_product_name()
        {
        }
        /**
         * Check if this plugin is the premium version of WPSEO.
         *
         * @return bool
         */
        protected function is_premium()
        {
        }
        /**
         * Check if term archive query is for multiple terms (/term-1,term2/ or /term-1+term-2/).
         *
         * @return bool
         */
        protected function is_multiple_terms_query()
        {
        }
        /**
         * Wraps wp_safe_redirect to allow testing for redirects.
         *
         * @param string $location The path to redirect to.
         * @param int    $status   Status code to use.
         */
        public function redirect($location, $status = 302)
        {
        }
        /**
         * Checks if the debug mark action has been added.
         *
         * @return bool True when the action exists.
         */
        protected function show_debug_marker()
        {
        }
        /**
         * Shows the closing debug mark.
         *
         * @return string The closing debug mark comment.
         */
        protected function show_closing_debug_mark()
        {
        }
        /**
         * Builds the title for a post type archive.
         *
         * @param string $separator          The title separator.
         * @param string $separator_location The location of the title separator.
         *
         * @return string The title to use on a post type archive.
         */
        protected function get_post_type_archive_title($separator, $separator_location)
        {
        }
        /**
         * Retrieves the WooCommerce title.
         *
         * @return string The WooCommerce title.
         */
        protected function get_woocommerce_title()
        {
        }
        /**
         * Retrieves a template from the options.
         *
         * @param string $template The template to retrieve.
         *
         * @return string The set template.
         */
        protected function get_template($template)
        {
        }
        /**
         * Retrieves the queried post type.
         *
         * @return string The queried post type.
         */
        protected function get_queried_post_type()
        {
        }
        /**
         * Retrieves the SEO Meta value for the supplied key and optional post.
         *
         * @param string $key     The key to retrieve.
         * @param int    $post_id Optional. The post to retrieve the key for.
         *
         * @return string Meta value.
         */
        protected function get_seo_meta_value($key, $post_id = 0)
        {
        }
        /**
         * Replaces the dynamic variables in a string.
         *
         * @param string $string The string to replace the variables in.
         * @param array  $args   The object some of the replacement values might come from,
         *                       could be a post, taxonomy or term.
         * @param array  $omit   Variables that should not be replaced by this function.
         *
         * @return string The replaced string.
         */
        protected function replace_vars($string, $args, $omit = [])
        {
        }
        /**
         * Adds shortcode support to category descriptions.
         *
         * @param string $desc String to add shortcodes in.
         *
         * @return string Content with shortcodes filtered out.
         */
        public function custom_category_descriptions_add_shortcode_support($desc)
        {
        }
        /* ********************* DEPRECATED METHODS ********************* */
        /**
         * Outputs the meta keywords element.
         *
         * @deprecated 6.3
         * @codeCoverageIgnore
         *
         * @return void
         */
        public function metakeywords()
        {
        }
        /**
         * Removes unneeded query variables from the URL.
         *
         * @deprecated 7.0
         * @codeCoverageIgnore
         *
         * @return void
         */
        public function clean_permalink()
        {
        }
        /**
         * Trailing slashes for everything except is_single().
         *
         * @deprecated 7.0
         * @codeCoverageIgnore
         */
        public function add_trailingslash()
        {
        }
        /**
         * Removes the ?replytocom variable from the link, replacing it with a #comment-<number> anchor.
         *
         * @deprecated 7.0
         * @codeCoverageIgnore
         *
         * @param string $link The comment link as a string.
         *
         * @return string The modified link.
         */
        public function remove_reply_to_com($link)
        {
        }
        /**
         * Redirects out the ?replytocom variables.
         *
         * @deprecated 7.0
         * @codeCoverageIgnore
         *
         * @return boolean True when redirect has been done.
         */
        public function replytocom_redirect()
        {
        }
        /**
         * Determine whether this is the homepage and shows posts.
         *
         * @deprecated 7.7
         * @codeCoverageIgnore
         *
         * @return bool Whether or not the current page is the homepage that displays posts.
         */
        public function is_home_posts_page()
        {
        }
        /**
         * Determine whether the this is the static frontpage.
         *
         * @deprecated 7.7
         * @codeCoverageIgnore
         *
         * @return bool Whether or not the current page is a static frontpage.
         */
        public function is_home_static_page()
        {
        }
        /**
         * Determine whether this is the posts page, when it's not the frontpage.
         *
         * @deprecated 7.7
         * @codeCoverageIgnore
         *
         * @return bool Whether or not it's a non-frontpage, posts page.
         */
        public function is_posts_page()
        {
        }
        /**
         * Function used in testing whether the title should be force rewritten or not.
         *
         * @deprecated 9.6
         * @codeCoverageIgnore
         *
         * @param string $title Title string.
         *
         * @return string
         */
        public function title_test_helper($title)
        {
        }
        /**
         * Output the rel=publisher code on every page of the site.
         *
         * @deprecated 10.1.3
         * @codeCoverageIgnore
         *
         * @return boolean Boolean indicating whether the publisher link was printed.
         */
        public function publisher()
        {
        }
    }
    /**
     * An interface for registering integrations with WordPress.
     */
    interface WPSEO_WordPress_Integration
    {
        /**
         * Registers all hooks to WordPress.
         *
         * @return void
         */
        public function register_hooks();
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Frontend
     */
    /**
     * Class WPSEO_Handle_404
     *
     * Handles intercepting requests.
     *
     * @since 9.4
     */
    class WPSEO_Handle_404 implements \WPSEO_WordPress_Integration
    {
        /**
         * Registers all hooks to WordPress.
         *
         * @return void
         */
        public function register_hooks()
        {
        }
        /**
         * Handle the 404 status code.
         *
         * @param bool $handled Whether we've handled the request.
         *
         * @return bool True if it's 404.
         */
        public function handle_404($handled)
        {
        }
        /**
         * If there are no posts in a feed, make it 404 instead of sending an empty RSS feed.
         *
         * @global WP_Query $wp_query
         *
         * @param bool $handled Whether we've handled the request.
         *
         * @return bool True if it's 404.
         */
        protected function is_feed_404($handled)
        {
        }
        /**
         * Sets the 404 status code.
         *
         * @global WP_Query $wp_query
         *
         * @return void
         */
        private function set_404()
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Frontend
     */
    /**
     * Class WPSEO_OpenGraph_Image.
     */
    class WPSEO_OpenGraph_Image
    {
        /**
         * The image ID used when the image is external.
         *
         * @var string
         */
        const EXTERNAL_IMAGE_ID = '-1';
        /**
         * Holds the images that have been put out as OG image.
         *
         * @var array
         */
        protected $images = [];
        /**
         * Holds the WPSEO_OpenGraph instance, so we can call og_tag.
         *
         * @var WPSEO_OpenGraph
         */
        private $opengraph;
        /**
         * Image tags that we output for each image.
         *
         * @var array
         */
        private $image_tags = ['width' => 'width', 'height' => 'height', 'mime-type' => 'type'];
        /**
         * The parameters we have for Facebook images.
         *
         * @var array
         */
        private $image_params = ['min_width' => 200, 'max_width' => 2000, 'min_height' => 200, 'max_height' => 2000];
        /**
         * Image types that are supported by OpenGraph.
         *
         * @var array
         */
        private $valid_image_types = ['image/jpeg', 'image/gif', 'image/png'];
        /**
         * Image extensions that are supported by OpenGraph.
         *
         * @var array
         */
        private $valid_image_extensions = ['jpeg', 'jpg', 'gif', 'png'];
        /**
         * Constructor.
         *
         * @param null|string     $image     Optional. The Image to use.
         * @param WPSEO_OpenGraph $opengraph Optional. The OpenGraph object.
         */
        public function __construct($image = \null, \WPSEO_OpenGraph $opengraph = \null)
        {
        }
        /**
         * Outputs the images.
         *
         * @return void
         */
        public function show()
        {
        }
        /**
         * Output the image metadata.
         *
         * @param array $image_meta Image meta data to output.
         *
         * @return void
         */
        private function show_image_meta($image_meta)
        {
        }
        /**
         * Outputs an image tag based on whether it's https or not.
         *
         * @param string $image_url The image URL.
         *
         * @return void
         */
        private function og_image_tag($image_url)
        {
        }
        /**
         * Return the images array.
         *
         * @return array The images.
         */
        public function get_images()
        {
        }
        /**
         * Check whether we have images or not.
         *
         * @return bool True if we have images, false if we don't.
         */
        public function has_images()
        {
        }
        /**
         * Display an OpenGraph image tag.
         *
         * @param string|array $attachment Attachment array.
         *
         * @return void
         */
        public function add_image($attachment)
        {
        }
        /**
         * Adds an image by ID if possible and by URL if the ID isn't present.
         *
         * @param string   $image_id   The image ID as set in the database.
         * @param string   $image_url  The saved URL for the image.
         * @param callable $on_save_id Function to call to save the ID if it needs to be saved.
         *
         * @return void
         */
        private function add_image_by_id_or_url($image_id, $image_url, $on_save_id)
        {
        }
        /**
         * Saves the ID to the frontpage Open Graph image ID.
         *
         * @param string $attachment_id The ID to save.
         *
         * @return void
         */
        private function save_frontpage_image_id($attachment_id)
        {
        }
        /**
         * If the frontpage image exists, call add_image.
         *
         * @return void
         */
        private function set_front_page_image()
        {
        }
        /**
         * Get the images of the posts page.
         *
         * @return void
         */
        private function set_posts_page_image()
        {
        }
        /**
         * Get the images of the singular post.
         *
         * @param null|int $post_id The post id to get the images for.
         *
         * @return void
         */
        private function set_singular_image($post_id = \null)
        {
        }
        /**
         * Gets the user-defined image of the post.
         *
         * @param null|int $post_id The post id to get the images for.
         *
         * @return void
         */
        private function set_user_defined_image($post_id = \null)
        {
        }
        /**
         * Saves the default image ID for Open Graph images to the database.
         *
         * @param string $attachment_id The ID to save.
         *
         * @return void
         */
        private function save_default_image_id($attachment_id)
        {
        }
        /**
         * Get default image and call add_image.
         *
         * @return void
         */
        private function maybe_set_default_image()
        {
        }
        /**
         * Saves the Open Graph image meta to the database for the current post.
         *
         * @param string $attachment_id The ID to save.
         *
         * @return void
         */
        private function save_opengraph_image_id_meta($attachment_id)
        {
        }
        /**
         * If opengraph-image is set, call add_image and return true.
         *
         * @param int $post_id Optional post ID to use.
         *
         * @return void
         */
        private function set_image_post_meta($post_id = 0)
        {
        }
        /**
         * Check if taxonomy has an image and add this image.
         *
         * @return void
         */
        private function set_taxonomy_image()
        {
        }
        /**
         * If there is a featured image, check image size. If image size is correct, call add_image and return true.
         *
         * @param int $post_id The post ID.
         *
         * @return void
         */
        private function set_featured_image($post_id)
        {
        }
        /**
         * If this is an attachment page, call add_image with the attachment.
         *
         * @return void
         */
        private function set_attachment_page_image()
        {
        }
        /**
         * Adds an image based on a given URL, and attempts to be smart about it.
         *
         * @param string $url The given URL.
         *
         * @return null|number Returns the found attachment ID if it exists. Otherwise -1.
         *                     If the URL is empty we return null.
         */
        public function add_image_by_url($url)
        {
        }
        /**
         * Returns the overridden image size if it has been overridden.
         *
         * @return null|string The overridden image size or null.
         */
        protected function get_overridden_image_size()
        {
        }
        /**
         * Determines if the OpenGraph image size should overridden.
         *
         * @return bool Whether the size should be overridden.
         */
        protected function is_size_overridden()
        {
        }
        /**
         * Adds the possibility to short-circuit all the optimal variation logic with
         * your own size.
         *
         * @param int $attachment_id The attachment ID that is used.
         *
         * @return void
         */
        protected function get_overridden_image($attachment_id)
        {
        }
        /**
         * Adds an image to the list by attachment ID.
         *
         * @param int $attachment_id The attachment ID to add.
         *
         * @return void
         */
        public function add_image_by_id($attachment_id)
        {
        }
        /**
         * Sets the images based on the page type.
         *
         * @return void
         */
        protected function set_images()
        {
        }
        /**
         * Determines whether or not the wanted attachment is considered valid.
         *
         * @param int $attachment_id The attachment ID to get the attachment by.
         *
         * @return bool Whether or not the attachment is valid.
         */
        protected function is_valid_attachment($attachment_id)
        {
        }
        /**
         * Determines whether the passed mime type is a valid image type.
         *
         * @param string $mime_type The detected mime type.
         *
         * @return bool Whether or not the attachment is a valid image type.
         */
        protected function is_valid_image_type($mime_type)
        {
        }
        /**
         * Determines whether the passed URL is considered valid.
         *
         * @param string $url The URL to check.
         *
         * @return bool Whether or not the URL is a valid image.
         */
        protected function is_valid_image_url($url)
        {
        }
        /**
         * Gets the image path from the passed URL.
         *
         * @param string $url The URL to get the path from.
         *
         * @return string The path of the image URL. Returns an empty string if URL parsing fails.
         */
        protected function get_image_url_path($url)
        {
        }
        /**
         * Determines the file extension of the passed URL.
         *
         * @param string $url The URL.
         *
         * @return string The extension.
         */
        protected function get_extension_from_url($url)
        {
        }
        /**
         * Adds the first usable attachment image from the post content.
         *
         * @param int $post_id The post id.
         *
         * @return void
         */
        private function add_first_usable_content_image($post_id)
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Frontend
     */
    /**
     * Class WPSEO_OpenGraph_OEmbed.
     */
    class WPSEO_OpenGraph_OEmbed implements \WPSEO_WordPress_Integration
    {
        /**
         * Registers the hooks.
         */
        public function register_hooks()
        {
        }
        /**
         * Callback function to pass to the oEmbed's response data that will enable
         * support for using the image and title set by the WordPress SEO plugin's fields. This
         * address the concern where some social channels/subscribed use oEmebed data over OpenGraph data
         * if both are present.
         *
         * @param array   $data The oEmbed data.
         * @param WP_Post $post The current Post object.
         *
         * @link https://developer.wordpress.org/reference/hooks/oembed_response_data/ for hook info.
         *
         * @return array $filter_data - An array of oEmbed data with modified values where appropriate.
         */
        public function set_oembed_data($data, $post)
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Frontend
     */
    /**
     * This code adds the OpenGraph output.
     */
    class WPSEO_OpenGraph
    {
        /**
         * The date helper.
         *
         * @var WPSEO_Date_Helper
         */
        protected $date;
        /**
         * Class constructor.
         */
        public function __construct()
        {
        }
        /**
         * Main OpenGraph output.
         */
        public function opengraph()
        {
        }
        /**
         * Internal function to output FB tags. This also adds an output filter to each bit of output based on the property.
         *
         * @param string $property Property attribute value.
         * @param string $content  Content attribute value.
         *
         * @return boolean
         */
        public function og_tag($property, $content)
        {
        }
        /**
         * Filter the Facebook plugins metadata.
         *
         * @param array $meta_tags The array to fix.
         *
         * @return array $meta_tags
         */
        public function facebook_filter($meta_tags)
        {
        }
        /**
         * Outputs the authors FB page.
         *
         * @link https://developers.facebook.com/blog/post/2013/06/19/platform-updates--new-open-graph-tags-for-media-publishers-and-more/
         * @link https://developers.facebook.com/docs/reference/opengraph/object-type/article/
         *
         * @return boolean
         */
        public function article_author_facebook()
        {
        }
        /**
         * Outputs the websites FB page.
         *
         * @link https://developers.facebook.com/blog/post/2013/06/19/platform-updates--new-open-graph-tags-for-media-publishers-and-more/
         * @link https://developers.facebook.com/docs/reference/opengraph/object-type/article/
         *
         * @return boolean
         */
        public function website_facebook()
        {
        }
        /**
         * Outputs the SEO title as OpenGraph title.
         *
         * @link https://developers.facebook.com/docs/reference/opengraph/object-type/article/
         *
         * @param bool $echo Whether or not to echo the output.
         *
         * @return string|boolean
         */
        public function og_title($echo = \true)
        {
        }
        /**
         * Outputs the canonical URL as OpenGraph URL, which consolidates likes and shares.
         *
         * @link https://developers.facebook.com/docs/reference/opengraph/object-type/article/
         *
         * @return boolean
         */
        public function url()
        {
        }
        /**
         * Output the locale, doing some conversions to make sure the proper Facebook locale is outputted.
         *
         * Last update/compare with FB list done on 2015-03-16 by Rarst.
         *
         * @link http://www.facebook.com/translations/FacebookLocales.xml for the list of supported locales.
         * @link https://developers.facebook.com/docs/reference/opengraph/object-type/article/
         *
         * @param bool $echo Whether to echo or return the locale.
         *
         * @return string $locale
         */
        public function locale($echo = \true)
        {
        }
        /**
         * Output the OpenGraph type.
         *
         * @param boolean $echo Whether to echo or return the type.
         *
         * @link https://developers.facebook.com/docs/reference/opengraph/object-type/object/
         *
         * @return string $type
         */
        public function type($echo = \true)
        {
        }
        /**
         * Create new WPSEO_OpenGraph_Image class and get the images to set the og:image.
         *
         * @param string|bool $image Optional. Image URL.
         *
         * @return void
         */
        public function image($image = \false)
        {
        }
        /**
         * Output the OpenGraph description, specific OG description first, if not, grab the meta description.
         *
         * @param bool $echo Whether to echo or return the description.
         *
         * @return string $ogdesc
         */
        public function description($echo = \true)
        {
        }
        /**
         * Output the site name straight from the blog info.
         */
        public function site_name()
        {
        }
        /**
         * Output the article tags as article:tag tags.
         *
         * @link https://developers.facebook.com/docs/reference/opengraph/object-type/article/
         *
         * @return boolean
         */
        public function tags()
        {
        }
        /**
         * Output the article category as an article:section tag.
         *
         * @link https://developers.facebook.com/docs/reference/opengraph/object-type/article/
         *
         * @return boolean;
         */
        public function category()
        {
        }
        /**
         * Output the article publish and last modification date.
         *
         * @link https://developers.facebook.com/docs/reference/opengraph/object-type/article/
         *
         * @return boolean;
         */
        public function publish_date()
        {
        }
        /**
         * Outputs the Facebook app_id.
         *
         * @link https://developers.facebook.com/docs/reference/opengraph/object-type/article/
         *
         * @return void
         */
        public function app_id()
        {
        }
        /* ********************* DEPRECATED METHODS ********************* */
        /**
         * Outputs the site owner.
         *
         * @link https://developers.facebook.com/docs/reference/opengraph/object-type/article/
         *
         * @return void
         *
         * @deprecated 7.1
         * @codeCoverageIgnore
         */
        public function site_owner()
        {
        }
        /**
         * Fallback method for plugins using image_output.
         *
         * @param string|bool $image Image URL.
         *
         * @deprecated 7.4
         * @codeCoverageIgnore
         */
        public function image_output($image = \false)
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Frontend
     */
    /**
     * Adds customizations to the front end for the primary category.
     */
    class WPSEO_Frontend_Primary_Category implements \WPSEO_WordPress_Integration
    {
        /**
         * Registers the hooks necessary for correct primary category behaviour.
         */
        public function register_hooks()
        {
        }
        /**
         * Filters post_link_category to change the category to the chosen category by the user.
         *
         * @param stdClass $category   The category that is now used for the post link.
         * @param array    $categories This parameter is not used.
         * @param WP_Post  $post       The post in question.
         *
         * @return array|null|object|WP_Error The category we want to use for the post link.
         */
        public function post_link_category($category, $categories = \null, $post = \null)
        {
        }
        /**
         * Get the id of the primary category.
         *
         * @param WP_Post $post The post in question.
         *
         * @return int Primary category id.
         */
        protected function get_primary_category($post = \null)
        {
        }
        /**
         * Wrapper for get category to make mocking easier.
         *
         * @param int $primary_category ID of primary category.
         *
         * @return array|null|object|WP_Error
         */
        protected function get_category($primary_category)
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Frontend
     */
    /**
     * Class WPSEO_Remove_Reply_To_Com.
     *
     * @since 7.0
     */
    class WPSEO_Remove_Reply_To_Com implements \WPSEO_WordPress_Integration
    {
        /**
         * Registers the hooks necessary to handle removing ?replytocom.
         *
         * @since 7.0
         *
         * @return void
         */
        public function register_hooks()
        {
        }
        /**
         * Removes the ?replytocom variable from the link, replacing it with a #comment-<number> anchor.
         *
         * @todo Should this function also allow for relative urls ?
         *
         * @param string $link The comment link as a string.
         *
         * @return string The modified link.
         */
        public function remove_reply_to_com($link)
        {
        }
        /**
         * Redirects out the ?replytocom variables.
         *
         * @since 1.4.13
         * @return boolean True when redirect has been done.
         */
        public function replytocom_redirect()
        {
        }
        /**
         * Checks whether we can allow the feature that removes ?replytocom query parameters.
         *
         * @return bool True to remove, false not to remove.
         */
        private function clean_reply_to_com()
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Frontend
     */
    /**
     * This class handles the Twitter card functionality.
     *
     * @link https://dev.twitter.com/docs/cards
     */
    class WPSEO_Twitter
    {
        /**
         * Instance of this class.
         *
         * @var object
         */
        public static $instance;
        /**
         * Images.
         *
         * @var array
         */
        private $images = [];
        /**
         * Images.
         *
         * @var array
         */
        public $shown_images = [];
        /**
         * Will hold the Twitter card type being created.
         *
         * @var string
         */
        private $type;
        /**
         * Card types currently allowed by Twitter.
         *
         * @link https://dev.twitter.com/cards/types
         *
         * @var array
         */
        private $valid_types = ['summary', 'summary_large_image', 'app', 'player'];
        /**
         * Class constructor.
         */
        public function __construct()
        {
        }
        /**
         * Outputs the Twitter Card code on singular pages.
         */
        public function twitter()
        {
        }
        /**
         * Display the Twitter card type.
         *
         * This defaults to summary but can be filtered using the <code>wpseo_twitter_card_type</code> filter.
         *
         * @link https://dev.twitter.com/docs/cards
         */
        protected function type()
        {
        }
        /**
         * Determines the twitter card type for the current page.
         */
        private function determine_card_type()
        {
        }
        /**
         * Determines whether the card type is of a type currently allowed by Twitter.
         *
         * @link https://dev.twitter.com/cards/types
         */
        private function sanitize_card_type()
        {
        }
        /**
         * Output the metatag.
         *
         * @param string $name    Tag name string.
         * @param string $value   Tag value string.
         * @param bool   $escaped Force escape flag.
         */
        private function output_metatag($name, $value, $escaped = \false)
        {
        }
        /**
         * Displays the description for Twitter.
         *
         * Only used when OpenGraph is inactive.
         */
        protected function description()
        {
        }
        /**
         * Returns the description for a singular page.
         *
         * @param int $post_id Post ID.
         *
         * @return string
         */
        private function single_description($post_id = 0)
        {
        }
        /**
         * Getting the description for the taxonomy.
         *
         * @return bool|mixed|string
         */
        private function taxonomy_description()
        {
        }
        /**
         * Returns a fallback description.
         *
         * @return string
         */
        private function fallback_description()
        {
        }
        /**
         * Displays the title for Twitter.
         *
         * Only used when OpenGraph is inactive.
         */
        protected function title()
        {
        }
        /**
         * Returns the Twitter title for a single post.
         *
         * @param int $post_id Post ID.
         *
         * @return string
         */
        private function single_title($post_id = 0)
        {
        }
        /**
         * Getting the title for the taxonomy.
         *
         * @return bool|mixed|string
         */
        private function taxonomy_title()
        {
        }
        /**
         * Returns the Twitter title for any page.
         *
         * @return string
         */
        private function fallback_title()
        {
        }
        /**
         * Displays the Twitter account for the site.
         */
        protected function site_twitter()
        {
        }
        /**
         * Checks if the given id is actually an id or a url and if url, distills the id from it.
         *
         * Solves issues with filters returning urls and theme's/other plugins also adding a user meta
         * twitter field which expects url rather than an id (which is what we expect).
         *
         * @param string $id Twitter ID or url.
         *
         * @return string|bool Twitter ID or false if it failed to get a valid Twitter ID.
         */
        private function get_twitter_id($id)
        {
        }
        /**
         * Displays the image for Twitter.
         *
         * Only used when OpenGraph is inactive or Summary Large Image card is chosen.
         */
        protected function image()
        {
        }
        /**
         * Outputs the first image of a gallery.
         */
        private function gallery_images_output()
        {
        }
        /**
         * Outputs the Twitter image. Using the Facebook image as fallback.
         *
         * @return bool
         */
        private function taxonomy_image_output()
        {
        }
        /**
         * Takes care of image output when we only need to display a single image.
         *
         * @return void
         */
        private function single_image_output()
        {
        }
        /**
         * Show the front page image.
         *
         * @return bool
         */
        private function homepage_image_output()
        {
        }
        /**
         * Show the posts page image.
         *
         * @return bool
         */
        private function posts_page_image_output()
        {
        }
        /**
         * Outputs a Twitter image tag for a given image.
         *
         * @param string $img The source URL to the image.
         *
         * @return bool
         */
        protected function image_output($img)
        {
        }
        /**
         * Retrieve images from the post meta values.
         *
         * @param int $post_id Optional post ID to use.
         *
         * @return bool
         */
        private function image_from_meta_values_output($post_id = 0)
        {
        }
        /**
         * Retrieve an attachment page's attachment.
         *
         * @param string $attachment_id The ID of the attachment for which to retrieve the image.
         *
         * @return bool
         */
        private function image_of_attachment_page_output($attachment_id)
        {
        }
        /**
         * Retrieve the featured image.
         *
         * @param int $post_id Optional post ID to use.
         *
         * @return bool
         */
        private function image_thumbnail_output($post_id = 0)
        {
        }
        /**
         * Retrieve the image from the content.
         *
         * @param int $post_id The post id to extract the images from.
         *
         * @return bool True when images output succeeded.
         */
        private function image_from_content_output($post_id)
        {
        }
        /**
         * Displays the authors Twitter account.
         */
        protected function author()
        {
        }
        /**
         * Get the singleton instance of this class.
         *
         * @return object
         */
        public static function get_instance()
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Frontend
     */
    /**
     * Represents the logic to determine if the current page is a WooCommerce shop page.
     */
    class WPSEO_WooCommerce_Shop_Page implements \WPSEO_WordPress_Integration
    {
        /**
         * Holds the shop page id.
         *
         * @var int
         */
        protected static $shop_page_id;
        /**
         * True when current page is the shop page.
         *
         * @var bool
         */
        protected static $is_shop_page;
        /**
         * Registers the hooks.
         *
         * @return void
         */
        public function register_hooks()
        {
        }
        /**
         * Determines whether or not WooCommerce is active.
         *
         * @return bool True if woocommerce plugin is active.
         */
        private function is_woocommerce_active()
        {
        }
        /**
         * Returns the ID of the WooCommerce shop page when the currently opened page is the shop page.
         *
         * @param int $page_id The page id.
         *
         * @return int The Page ID of the shop.
         */
        public function get_page_id($page_id)
        {
        }
        /**
         * Checks if the current page is the shop page.
         *
         * @return bool Whether the current page is the WooCommerce shop page.
         */
        public function is_shop_page()
        {
        }
        /**
         * Returns the id of the set WooCommerce shop page.
         *
         * @return int The ID of the set page.
         */
        public function get_shop_page_id()
        {
        }
    }
    /**
     * An interface for registering Schema Graph Pieces.
     *
     * @since 10.2
     */
    interface WPSEO_Graph_Piece
    {
        /**
         * Add your piece of the graph.
         *
         * @return array|bool $graph A graph piece on success, false on failure.
         */
        public function generate();
        /**
         * Determines whether or not a piece should be added to the graph.
         *
         * @return bool
         */
        public function is_needed();
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Frontend\Schema
     */
    /**
     * Returns schema Article data.
     *
     * @since 10.2
     */
    class WPSEO_Schema_Article implements \WPSEO_Graph_Piece
    {
        /**
         * The date helper.
         *
         * @var WPSEO_Date_Helper
         */
        protected $date;
        /**
         * A value object with context variables.
         *
         * @var WPSEO_Schema_Context
         */
        private $context;
        /**
         * WPSEO_Schema_Article constructor.
         *
         * @param WPSEO_Schema_Context $context A value object with context variables.
         */
        public function __construct(\WPSEO_Schema_Context $context)
        {
        }
        /**
         * Determines whether or not a piece should be added to the graph.
         *
         * @return bool
         */
        public function is_needed()
        {
        }
        /**
         * Returns Article data.
         *
         * @return array $data Article data.
         */
        public function generate()
        {
        }
        /**
         * Determines whether a given post type should have Article schema.
         *
         * @param string $post_type Post type to check.
         *
         * @return bool True if it has article schema, false if not.
         */
        public static function is_article_post_type($post_type = \null)
        {
        }
        /**
         * Adds tags as keywords, if tags are assigned.
         *
         * @param array $data Article data.
         *
         * @return array $data Article data.
         */
        private function add_keywords($data)
        {
        }
        /**
         * Adds categories as sections, if categories are assigned.
         *
         * @param array $data Article data.
         *
         * @return array $data Article data.
         */
        private function add_sections($data)
        {
        }
        /**
         * Adds a term or multiple terms, comma separated, to a field.
         *
         * @param array  $data     Article data.
         * @param string $key      The key in data to save the terms in.
         * @param string $taxonomy The taxonomy to retrieve the terms from.
         *
         * @return mixed array $data Article data.
         */
        private function add_terms($data, $key, $taxonomy)
        {
        }
        /**
         * Adds an image node if the post has a featured image.
         *
         * @param array $data The Article data.
         *
         * @return array $data The Article data.
         */
        private function add_image($data)
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Frontend\Schema
     */
    /**
     * Returns schema Person data.
     *
     * @since 10.2
     */
    class WPSEO_Schema_Person implements \WPSEO_Graph_Piece
    {
        /**
         * A value object with context variables.
         *
         * @var WPSEO_Schema_Context
         */
        private $context;
        /**
         * Array of the social profiles we display for a Person.
         *
         * @var string[]
         */
        private $social_profiles = ['facebook', 'instagram', 'linkedin', 'pinterest', 'twitter', 'myspace', 'youtube', 'soundcloud', 'tumblr', 'wikipedia'];
        /**
         * The Schema type we use for this class.
         *
         * @var string[]
         */
        protected $type = ['Person', 'Organization'];
        /**
         * The hash used for images.
         *
         * @var string
         */
        protected $image_hash;
        /**
         * WPSEO_Schema_Person constructor.
         *
         * @param WPSEO_Schema_Context $context A value object with context variables.
         */
        public function __construct(\WPSEO_Schema_Context $context)
        {
        }
        /**
         * Determine whether we should return Person schema.
         *
         * @return bool
         */
        public function is_needed()
        {
        }
        /**
         * Returns Person Schema data.
         *
         * @return bool|array Person data on success, false on failure.
         */
        public function generate()
        {
        }
        /**
         * Determines a User ID for the Person data.
         *
         * @return bool|int User ID or false upon return.
         */
        protected function determine_user_id()
        {
        }
        /**
         * Retrieve a list of social profile URLs for Person.
         *
         * @param int $user_id User ID.
         *
         * @return string[] $output A list of social profiles.
         */
        protected function get_social_profiles($user_id)
        {
        }
        /**
         * Builds our array of Schema Person data for a given user ID.
         *
         * @param int $user_id The user ID to use.
         *
         * @return array An array of Schema Person data.
         */
        protected function build_person_data($user_id)
        {
        }
        /**
         * Returns an ImageObject for the persons avatar.
         *
         * @param array    $data      The Person schema.
         * @param \WP_User $user_data User data.
         *
         * @return array $data The Person schema.
         */
        protected function add_image($data, $user_data)
        {
        }
        /**
         * Generate the person image from our settings.
         *
         * @param array  $data      The Person schema.
         * @param string $schema_id The string used in the `@id` for the schema.
         *
         * @return array    $data      The Person schema.
         */
        private function set_image_from_options($data, $schema_id)
        {
        }
        /**
         * Generate the person logo from gravatar.
         *
         * @param array    $data      The Person schema.
         * @param \WP_User $user_data User data.
         * @param string   $schema_id The string used in the `@id` for the schema.
         *
         * @return array    $data      The Person schema.
         */
        private function set_image_from_avatar($data, $user_data, $schema_id)
        {
        }
        /**
         * Returns an author's social site URL.
         *
         * @param string $social_site The social site to retrieve the URL for.
         * @param mixed  $user_id     The user ID to use function outside of the loop.
         *
         * @return string
         */
        protected function url_social_site($social_site, $user_id = \false)
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Frontend\Schema
     */
    /**
     * Returns schema Person data.
     *
     * @since 10.2
     *
     * @property WPSEO_Schema_Context $context A value object with context variables.
     */
    class WPSEO_Schema_Author extends \WPSEO_Schema_Person implements \WPSEO_Graph_Piece
    {
        /**
         * A value object with context variables.
         *
         * @var WPSEO_Schema_Context
         */
        private $context;
        /**
         * The Schema type we use for this class.
         *
         * @var string[]
         */
        protected $type = ['Person'];
        /**
         * WPSEO_Schema_Author constructor.
         *
         * @param WPSEO_Schema_Context $context A value object with context variables.
         */
        public function __construct(\WPSEO_Schema_Context $context)
        {
        }
        /**
         * Determine whether we should return Person schema.
         *
         * @return bool
         */
        public function is_needed()
        {
        }
        /**
         * Returns Person Schema data.
         *
         * @return bool|array Person data on success, false on failure.
         */
        public function generate()
        {
        }
        /**
         * Determine whether the current URL is worthy of Article schema.
         *
         * @return bool
         */
        protected function is_post_author()
        {
        }
        /**
         * Determines a User ID for the Person data.
         *
         * @return bool|int User ID or false upon return.
         */
        protected function determine_user_id()
        {
        }
        /**
         * An author should not have an image from options, this only applies to persons.
         *
         * @param array  $data      The Person schema.
         * @param string $schema_id The string used in the `@id` for the schema.
         *
         * @return array The Person schema.
         */
        private function set_image_from_options($data, $schema_id)
        {
        }
        /**
         * Gets the Schema type we use for this class.
         *
         * @return string[] The schema type.
         */
        public static function get_type()
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Frontend\Schema
     */
    /**
     * Returns schema Breadcrumb data.
     *
     * @since 10.2
     */
    class WPSEO_Schema_Breadcrumb implements \WPSEO_Graph_Piece
    {
        /**
         * A value object with context variables.
         *
         * @var WPSEO_Schema_Context
         */
        private $context;
        /**
         * Current position in the List.
         *
         * @var int
         */
        private $index;
        /**
         * WPSEO_Schema_Breadcrumb constructor.
         *
         * @param WPSEO_Schema_Context $context A value object with context variables.
         */
        public function __construct(\WPSEO_Schema_Context $context)
        {
        }
        /**
         * Determine if we should add a breadcrumb attribute.
         *
         * @return bool
         */
        public function is_needed()
        {
        }
        /**
         * Returns Schema breadcrumb data to allow recognition of page's position in the site hierarchy.
         *
         * @link https://developers.google.com/search/docs/data-types/breadcrumb
         *
         * @return bool|array Array on success, false on failure.
         */
        public function generate()
        {
        }
        /**
         * Returns a breadcrumb array.
         *
         * @param int   $index      The position in the list.
         * @param array $breadcrumb The breadcrumb array.
         *
         * @return array A breadcrumb listItem.
         */
        private function add_breadcrumb($index, $breadcrumb)
        {
        }
        /**
         * Adds the paginated state to the breadcrumb array.
         *
         * @return array A breadcrumb listItem.
         */
        private function add_paginated_state()
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Frontend\Schema
     */
    /**
     * Context variables for Schema generation.
     *
     * @property string $canonical                 The current page's canonical.
     * @property string $company_name              Holds the company name, if the site represents a company.
     * @property int    $company_logo_id           Holds the company logo's ID, if the site represents a company.
     * @property int    $id                        The post ID, if there is one.
     * @property string $site_name                 The site's name.
     * @property string $site_description          The site's tagline.
     * @property string $site_represents           Whether this site represents a `company` or a `person`.
     * @property string $site_url                  The site's URL.
     * @property int    $site_user_id              The site's user ID if a site represents a `person`.
     * @property string $title                     Page title.
     * @property string $description               Page description.
     * @property bool   $breadcrumbs_enabled       Whether or not this site has breadcrumbs enabled.
     * @property array  $site_represents_reference A schema @id reference to the piece the site represents.
     * @property bool   $has_image                 A boolean that determines whether the current URL has a primary image.
     *
     * @since 10.2
     */
    class WPSEO_Schema_Context
    {
        /**
         * The current page's canonical.
         *
         * @var string
         */
        public $canonical;
        /**
         * Holds the company name, if the site represents a company.
         *
         * @var string
         */
        public $company_name;
        /**
         * Holds the company logo's ID, if the site represents a company.
         *
         * @var int
         */
        public $company_logo_id;
        /**
         * The queried object ID, if there is one.
         *
         * @var int
         */
        public $id;
        /**
         * Whether this site represents a `company` or a `person`.
         *
         * @var string
         */
        public $site_represents;
        /**
         * The site's Name.
         *
         * @var string
         */
        public $site_name;
        /**
         * The site's tagline.
         *
         * @var string
         */
        public $site_description;
        /**
         * The site's URL.
         *
         * @var string
         */
        public $site_url;
        /**
         * Page title.
         *
         * @var string
         */
        public $title;
        /**
         * User ID when the site represents a Person.
         *
         * @var int
         */
        public $site_user_id;
        /**
         * Page description.
         *
         * @var string
         */
        public $description;
        /**
         * Whether or not this site has breadcrumbs enabled.
         *
         * @var bool
         */
        public $breadcrumbs_enabled;
        /**
         * A schema @id reference to the piece the site represents.
         *
         * @var array
         */
        public $site_represents_reference;
        /**
         * A boolean that determines whether the current URL has a primary image.
         *
         * @var bool
         */
        public $has_image = \false;
        /**
         * WPSEO_Schema_Context constructor.
         */
        public function __construct()
        {
        }
        /**
         * Builds all the required data for the context object.
         */
        private function build_data()
        {
        }
        /**
         * Retrieves the site's name from settings.
         *
         * @return string
         */
        private function set_site_name()
        {
        }
        /**
         * Sets our site represents reference for easy use.
         */
        private function set_site_represents_reference()
        {
        }
        /**
         * Determines what our site represents, and grabs their values.
         */
        private function set_site_represents_variables()
        {
        }
        /**
         * Determines whether the site uses Yoast SEO breadcrumbs.
         */
        private function set_breadcrumbs_variables()
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Frontend\Schema
     */
    /**
     * Returns a question object for each question in an FAQ block.
     *
     * @since 11.1
     *
     * @property array                   $data   The Schema array.
     * @property WP_Block_Parser_Block[] $blocks The block we're taking the questions out of.
     * @property WPSEO_Schema_Context    context A value object with context variables.
     * @property array                   ids
     * @property int                     count
     */
    class WPSEO_Schema_FAQ_Question_List
    {
        /**
         * The Schema array.
         *
         * @var array
         */
        private $data = [];
        /**
         * All the blocks of this block-type.
         *
         * @var WP_Block_Parser_Block
         */
        private $blocks;
        /**
         * Number of questions on the page.
         *
         * @var int
         */
        private $count;
        /**
         * IDs of the questions on the page.
         *
         * @var array
         */
        private $ids;
        /**
         * WPSEO_Schema_FAQ_Question_List constructor.
         *
         * @param WP_Block_Parser_Block[] $blocks  An array of the FAQ blocks on this page.
         * @param WPSEO_Schema_Context    $context A value object with context variables.
         */
        public function __construct($blocks, $context)
        {
        }
        /**
         * Find an image based on its URL and generate a Schema object for it.
         *
         * @return array The Schema with a question list added.
         */
        public function generate()
        {
        }
        /**
         * Determine whether we're part of an article or a webpage.
         *
         * @return string A reference URL.
         */
        private function get_schema_id()
        {
        }
        /**
         * Loop through the blocks of our type.
         */
        private function prepare_blocks()
        {
        }
        /**
         * Prepare our data.
         *
         * @param WP_Block_Parser_Block[] $block The block to prepare the questions for.
         */
        private function prepare_questions($block)
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Frontend\Schema
     */
    /**
     * Returns a question object for each question in an FAQ block.
     *
     * @since 11.1
     *
     * @property array                 $data     The Schema array.
     * @property WP_Block_Parser_Block $block    The block we're taking the questions out of.
     * @property WPSEO_Schema_Context  $context  A value object with context variables.
     * @property int                   $position The position in the list.
     */
    class WPSEO_Schema_FAQ_Questions
    {
        /**
         * The Schema array.
         *
         * @var array
         */
        private $data;
        /**
         * All the blocks of this block-type.
         *
         * @var WP_Block_Parser_Block
         */
        private $block;
        /**
         * Position in the list.
         *
         * @var int
         */
        private $position;
        /**
         * WPSEO_Schema_FAQ_Questions constructor.
         *
         * @param array                 $data    Our schema graph.
         * @param WP_Block_Parser_Block $block   The FAQ block of this type.
         * @param WPSEO_Schema_Context  $context A value object with context variables.
         */
        public function __construct($data, $block, $context)
        {
        }
        /**
         * Find an image based on its URL and generate a Schema object for it.
         *
         * @return array The Schema with Questions added.
         */
        public function generate()
        {
        }
        /**
         * Generate a Question piece.
         *
         * @param array $question The question to generate schema for.
         *
         * @return array Schema.org Question piece.
         */
        protected function generate_question_block($question)
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Frontend\Schema
     */
    /**
     * Returns schema FAQ data.
     *
     * @since 11.3
     */
    class WPSEO_Schema_FAQ implements \WPSEO_Graph_Piece
    {
        /**
         * Determine whether this graph piece is needed or not.
         *
         * @var bool
         */
        private $is_needed = \false;
        /**
         * The FAQ blocks on the current page.
         *
         * @var array
         */
        private $blocks;
        /**
         * A value object with context variables.
         *
         * @var WPSEO_Schema_Context
         */
        private $context;
        /**
         * WPSEO_Schema_FAQ constructor.
         *
         * @param WPSEO_Schema_Context $context A value object with context variables.
         */
        public function __construct(\WPSEO_Schema_Context $context)
        {
        }
        /**
         * If this fires, we know there's an FAQ block ont he page, so filter the page type.
         *
         * @param array $blocks The blocks of this type on the current page.
         */
        public function prepare_schema($blocks)
        {
        }
        /**
         * Change the page type to an array if it isn't one, include FAQPage.
         *
         * @param array|string $page_type The page type.
         *
         * @return array $page_type The page type that's now an array.
         */
        public function change_schema_page_type($page_type)
        {
        }
        /**
         * Render a list of questions, referencing them by ID.
         *
         * @return array $data Our Schema graph.
         */
        public function generate()
        {
        }
        /**
         * Add the Questions in our FAQ blocks as separate pieces to the graph.
         *
         * @param array                 $graph   Schema data for the current page.
         * @param WP_Block_Parser_Block $block   The block data array.
         * @param WPSEO_Schema_Context  $context A value object with context variables.
         *
         * @return array $data Our Schema graph.
         */
        public function render_schema_questions($graph, $block, $context)
        {
        }
        /**
         * Determines whether or not a piece should be added to the graph.
         *
         * @return bool
         */
        public function is_needed()
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Frontend\Schema
     */
    /**
     * Returns schema HowTo data.
     *
     * @since 11.5
     */
    class WPSEO_Schema_HowTo implements \WPSEO_Graph_Piece
    {
        /**
         * Determine whether this graph piece is needed or not.
         *
         * Always false, because this graph piece adds itself using the filter API.
         *
         * @var bool
         */
        private $is_needed = \false;
        /**
         * The HowTo blocks count on the current page.
         *
         * @var int
         */
        private $counter;
        /**
         * A value object with context variables.
         *
         * @var WPSEO_Schema_Context
         */
        private $context;
        /**
         * Holds the allowed HTML tags for the jsonText.
         *
         * @var string
         */
        private $allowed_json_text_tags = '<h1><h2><h3><h4><h5><h6><br><ol><ul><li><a><p><b><strong><i><em>';
        /**
         * WPSEO_Schema_HowTo constructor.
         *
         * @param WPSEO_Schema_Context $context A value object with context variables.
         *
         * @codeCoverageIgnore
         */
        public function __construct(\WPSEO_Schema_Context $context)
        {
        }
        /**
         * Renders a list of questions, referencing them by ID.
         *
         * @return array $data Our Schema graph.
         */
        public function generate()
        {
        }
        /**
         * Renders the How-To block into our graph.
         *
         * @param array $graph Our Schema data.
         * @param array $block The How-To block content.
         *
         * @return mixed
         */
        public function render($graph, $block)
        {
        }
        /**
         * Adds the duration of the task to the Schema.
         *
         * @param array $data       Our How-To schema data.
         * @param array $attributes The block data attributes.
         *
         * @return array $data Our schema data.
         */
        private function add_duration(&$data, $attributes)
        {
        }
        /**
         * Determines whether we're part of an article or a webpage.
         *
         * @return string A reference URL.
         */
        protected function get_main_schema_id()
        {
        }
        /**
         * Determines whether or not a piece should be added to the graph.
         *
         * @return bool
         */
        public function is_needed()
        {
        }
        /**
         * Adds the steps to our How-To output.
         *
         * @param array $data  Our How-To schema data.
         * @param array $steps Our How-To block's steps.
         */
        private function add_steps(&$data, $steps)
        {
        }
        /**
         * Checks if we have a step description, if we do, add it.
         *
         * @param array $schema_step Our Schema output for the Step.
         * @param array $step        The step block data.
         */
        private function add_step_description(&$schema_step, $step)
        {
        }
        /**
         * Checks if we have a step image, if we do, add it.
         *
         * @param array $schema_step Our Schema output for the Step.
         * @param array $step        The step block data.
         */
        private function add_step_image(&$schema_step, $step)
        {
        }
        /**
         * Generates the image schema from the attachment $url.
         *
         * @param string $url Attachment url.
         *
         * @return array Image schema.
         *
         * @codeCoverageIgnore
         */
        protected function get_image_schema($url)
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Frontend\Schema
     */
    /**
     * Constants used for @id variables.
     *
     * @since 10.2
     */
    class WPSEO_Schema_IDs
    {
        /**
         * Hash used for the Author `@id`.
         */
        const AUTHOR_HASH = '#author';
        /**
         * Hash used for the Author Logo's `@id`.
         */
        const AUTHOR_LOGO_HASH = '#authorlogo';
        /**
         * Hash used for the Breadcrumb's `@id`.
         */
        const BREADCRUMB_HASH = '#breadcrumb';
        /**
         * Hash used for the Person `@id`.
         */
        const PERSON_HASH = '#/schema/person/';
        /**
         * Hash used for the Article `@id`.
         */
        const ARTICLE_HASH = '#article';
        /**
         * Hash used for the Organization `@id`.
         */
        const ORGANIZATION_HASH = '#organization';
        /**
         * Hash used for the Organization `@id`.
         */
        const ORGANIZATION_LOGO_HASH = '#logo';
        /**
         * Hash used for the logo `@id`.
         */
        const PERSON_LOGO_HASH = '#personlogo';
        /**
         * Hash used for an Article's primary image `@id`.
         */
        const PRIMARY_IMAGE_HASH = '#primaryimage';
        /**
         * Hash used for the WebPage's `@id`.
         */
        const WEBPAGE_HASH = '#webpage';
        /**
         * Hash used for the Website's `@id`.
         */
        const WEBSITE_HASH = '#website';
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Frontend\Schema
     */
    /**
     * Returns schema image data.
     *
     * @since 11.1
     *
     * @property string $schema_id      The `@id` to use for the returned image.
     * @property array  $data           The ImageObject Schema array.
     * @property int    $attachment_id  The ID of the attachment used to generate the object.
     */
    class WPSEO_Schema_Image
    {
        /**
         * The `@id` to use for the returned image.
         *
         * @var string
         */
        private $schema_id;
        /**
         * The ImageObject Schema array.
         *
         * @var array
         */
        private $data;
        /**
         * The ID of the attachment used to generate the object.
         *
         * @var int
         */
        private $attachment_id;
        /**
         * WPSEO_Schema_Image constructor.
         *
         * @param string $schema_id The string to use in an image's `@id`.
         */
        public function __construct($schema_id)
        {
        }
        /**
         * Find an image based on its URL and generate a Schema object for it.
         *
         * @param string $url     The image URL to base our object on.
         * @param string $caption An optional caption.
         *
         * @return array Schema ImageObject array.
         */
        public function generate_from_url($url, $caption = '')
        {
        }
        /**
         * Retrieve data about an image from the database and use it to generate a Schema object.
         *
         * @param int    $attachment_id The attachment to retrieve data from.
         * @param string $caption       The caption string, if there is one.
         *
         * @return array Schema ImageObject array.
         */
        public function generate_from_attachment_id($attachment_id, $caption = '')
        {
        }
        /**
         * If we can't find $url in our database, we output a simple ImageObject.
         *
         * @param string $url     The image URL.
         * @param string $caption A caption, if set.
         *
         * @return array $data Schema ImageObject array.
         */
        public function simple_image_object($url, $caption = '')
        {
        }
        /**
         * Retrieves an image's caption if set, or uses the alt tag if that's set.
         *
         * @param string $caption The caption string, if there is one.
         *
         * @return void
         */
        private function add_caption($caption = '')
        {
        }
        /**
         * Generates our bare bone ImageObject.
         *
         * @return void
         */
        private function generate_object()
        {
        }
        /**
         * Adds image's width and height.
         *
         * @return void
         */
        private function add_image_size()
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Frontend\Schema
     */
    /**
     * Returns ImageObject schema data.
     *
     * @since 11.5
     */
    class WPSEO_Schema_MainImage implements \WPSEO_Graph_Piece
    {
        /**
         * A value object with context variables.
         *
         * @var WPSEO_Schema_Context
         */
        private $context;
        /**
         * WPSEO_Schema_WebPage constructor.
         *
         * @codeCoverageIgnore
         *
         * @param WPSEO_Schema_Context $context A value object with context variables.
         */
        public function __construct(\WPSEO_Schema_Context $context)
        {
        }
        /**
         * Determines whether or not a piece should be added to the graph.
         *
         * @return bool
         */
        public function is_needed()
        {
        }
        /**
         * Adds a main image for the current URL to the schema if there is one.
         *
         * This can be either the featured image, or fall back to the first image in the content of the page.
         *
         * @return false|array $data Image Schema.
         */
        public function generate()
        {
        }
        /**
         * Gets the image schema for the web page based on the featured image.
         *
         * @param int    $post_id  The post id.
         * @param string $image_id The image schema id.
         *
         * @return array|null The image schema object or null if there is no featured image.
         */
        private function get_featured_image($post_id, $image_id)
        {
        }
        /**
         * Gets the image schema for the web page based on the first content image image.
         *
         * @param int    $post_id  The post id.
         * @param string $image_id The image schema id.
         *
         * @return array|null The image schema object or null if there is no image in the content.
         */
        private function get_first_content_image($post_id, $image_id)
        {
        }
        /**
         * Gets the post's first usable content image. Null if none is available.
         *
         * @codeCoverageIgnore
         *
         * @param int $post_id The post id.
         *
         * @return string|null The image URL or null if there is no image.
         */
        protected function get_first_usable_content_image_for_post($post_id)
        {
        }
        /**
         * Generates image schema from the attachment id.
         *
         * @codeCoverageIgnore
         *
         * @param string $image_id The image schema id.
         *
         * @return array Schema ImageObject array.
         */
        protected function generate_image_schema_from_attachment_id($image_id)
        {
        }
        /**
         * Generates image schema from the url.
         *
         * @codeCoverageIgnore
         *
         * @param string $image_id  The image schema id.
         * @param string $image_url The image URL.
         *
         * @return array Schema ImageObject array.
         */
        protected function generate_image_schema_from_url($image_id, $image_url)
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Frontend\Schema
     */
    /**
     * Returns schema Organization data.
     *
     * @since 10.2
     */
    class WPSEO_Schema_Organization implements \WPSEO_Graph_Piece
    {
        /**
         * A value object with context variables.
         *
         * @var WPSEO_Schema_Context
         */
        private $context;
        /**
         * WPSEO_Schema_Organization constructor.
         *
         * @param WPSEO_Schema_Context $context A value object with context variables.
         */
        public function __construct(\WPSEO_Schema_Context $context)
        {
        }
        /**
         * Determines whether an Organization graph piece should be added.
         *
         * @return bool
         */
        public function is_needed()
        {
        }
        /**
         * Returns the Organization Schema data.
         *
         * @return array $data The Organization schema.
         */
        public function generate()
        {
        }
        /**
         * Adds a site's logo.
         *
         * @param array $data The Organization schema.
         *
         * @return array $data The Organization schema.
         */
        private function add_logo($data)
        {
        }
        /**
         * Retrieve the social profiles to display in the organization schema.
         *
         * @since 1.8
         *
         * @link  https://developers.google.com/webmasters/structured-data/customize/social-profiles
         *
         * @return array $profiles An array of social profiles.
         */
        private function fetch_social_profiles()
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Frontend\Schema
     */
    /**
     * Schema utility functions.
     *
     * @since 11.6
     */
    class WPSEO_Schema_Utils
    {
        /**
         * Retrieve a users Schema ID.
         *
         * @param int                  $user_id The ID of the User you need a Schema ID for.
         * @param WPSEO_Schema_Context $context A value object with context variables.
         *
         * @return string The user's schema ID.
         */
        public static function get_user_schema_id($user_id, $context)
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Frontend\Schema
     */
    /**
     * Returns schema WebPage data.
     *
     * @since 10.2
     */
    class WPSEO_Schema_WebPage implements \WPSEO_Graph_Piece
    {
        /**
         * The date helper.
         *
         * @var WPSEO_Date_Helper
         */
        protected $date;
        /**
         * A value object with context variables.
         *
         * @var WPSEO_Schema_Context
         */
        private $context;
        /**
         * WPSEO_Schema_WebPage constructor.
         *
         * @param WPSEO_Schema_Context $context A value object with context variables.
         */
        public function __construct(\WPSEO_Schema_Context $context)
        {
        }
        /**
         * Determines whether or not a piece should be added to the graph.
         *
         * @return bool
         */
        public function is_needed()
        {
        }
        /**
         * Returns WebPage schema data.
         *
         * @return array WebPage schema data.
         */
        public function generate()
        {
        }
        /**
         * Adds an author property to the $data if the WebPage is not represented.
         *
         * @param array   $data The WebPage schema.
         * @param WP_Post $post The post the context is representing.
         *
         * @return array The WebPage schema.
         */
        public function add_author($data, $post)
        {
        }
        /**
         * If we have an image, make it the primary image of the page.
         *
         * @param array $data WebPage schema data.
         */
        public function add_image(&$data)
        {
        }
        /**
         * Determine if we should add a breadcrumb attribute.
         *
         * @return bool
         */
        private function add_breadcrumbs()
        {
        }
        /**
         * Determine the page type for the current page.
         *
         * @return string
         */
        private function determine_page_type()
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Frontend\Schema
     */
    /**
     * Returns schema Website data.
     *
     * @since 10.2
     */
    class WPSEO_Schema_Website implements \WPSEO_Graph_Piece
    {
        /**
         * A value object with context variables.
         *
         * @var WPSEO_Schema_Context
         */
        private $context;
        /**
         * WPSEO_Schema_Website constructor.
         *
         * @param WPSEO_Schema_Context $context A value object with context variables.
         */
        public function __construct(\WPSEO_Schema_Context $context)
        {
        }
        /**
         * Determines whether or not a piece should be added to the graph.
         *
         * @return bool
         */
        public function is_needed()
        {
        }
        /**
         * Outputs code to allow recognition of the internal search engine.
         *
         * @since 1.5.7
         *
         * @link  https://developers.google.com/structured-data/site-name
         *
         * @return array Website data blob.
         */
        public function generate()
        {
        }
        /**
         * Returns an alternate name if one was specified in the Yoast SEO settings.
         *
         * @param array $data The website data array.
         *
         * @return array $data
         */
        private function add_alternate_name($data)
        {
        }
        /**
         * Adds the internal search JSON LD code to the homepage if it's not disabled.
         *
         * @link https://developers.google.com/structured-data/slsb-overview
         *
         * @param array $data The website data array.
         *
         * @return array $data
         */
        private function internal_search_section($data)
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Frontend\Schema
     */
    /**
     * Class WPSEO_Schema
     *
     * Outputs schema code specific for Google's JSON LD stuff.
     *
     * @since 1.8
     */
    class WPSEO_Schema implements \WPSEO_WordPress_Integration
    {
        /**
         * Holds the parsed blocks for the current page.
         *
         * @var array
         */
        private $parsed_blocks = [];
        /**
         * Holds context variables about the current page and site.
         *
         * @var WPSEO_Schema_Context
         */
        private $context;
        /**
         * Registers the hooks.
         */
        public function register_hooks()
        {
        }
        /**
         * JSON LD output function that the functions for specific code can hook into.
         *
         * @since 1.8
         */
        public function json_ld()
        {
        }
        /**
         * Outputs the JSON LD code in a valid JSON+LD wrapper.
         *
         * @since 10.2
         *
         * @return void
         */
        public function generate()
        {
        }
        /**
         * Gets all the graph pieces we need.
         *
         * @return array A filtered array of graph pieces.
         */
        private function get_graph_pieces()
        {
        }
        /**
         * Parse the blocks and pass them on to our head.
         */
        private function parse_blocks()
        {
        }
        /**
         * Parse the blocks and loop through them.
         */
        private function get_parsed_blocks()
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Inc
     */
    /**
     * Represents the addon manager.
     */
    class WPSEO_Addon_Manager
    {
        /**
         * Holds the name of the transient.
         *
         * @var string
         */
        const SITE_INFORMATION_TRANSIENT = 'wpseo_site_information';
        /**
         * Holds the slug for YoastSEO free.
         *
         * @var string
         */
        const FREE_SLUG = 'yoast-seo-wordpress';
        /**
         * Holds the slug for YoastSEO Premium.
         *
         * @var string
         */
        const PREMIUM_SLUG = 'yoast-seo-wordpress-premium';
        /**
         * Holds the slug for Yoast News.
         *
         * @var string
         */
        const NEWS_SLUG = 'yoast-seo-news';
        /**
         * Holds the slug for Video.
         *
         * @var string
         */
        const VIDEO_SLUG = 'yoast-seo-video';
        /**
         * Holds the slug for WooCommerce.
         *
         * @var string
         */
        const WOOCOMMERCE_SLUG = 'yoast-seo-woocommerce';
        /**
         * Holds the slug for Local.
         *
         * @var string
         */
        const LOCAL_SLUG = 'yoast-seo-local';
        /**
         * The expected addon data.
         *
         * @var array
         */
        protected static $addons = ['wp-seo-premium.php' => self::PREMIUM_SLUG, 'wpseo-news.php' => self::NEWS_SLUG, 'video-seo.php' => self::VIDEO_SLUG, 'wpseo-woocommerce.php' => self::WOOCOMMERCE_SLUG, 'local-seo.php' => self::LOCAL_SLUG];
        /**
         * Holds the site information data.
         *
         * @var object
         */
        private $site_information;
        /**
         * Hooks into WordPress.
         *
         * @codeCoverageIgnore
         *
         * @return void
         */
        public function register_hooks()
        {
        }
        /**
         * Gets the subscriptions for current site.
         *
         * @return stdClass The subscriptions.
         */
        public function get_subscriptions()
        {
        }
        /**
         * Retrieves the subscription for the given slug.
         *
         * @param string $slug The plugin slug to retrieve.
         *
         * @return stdClass|false Subscription data when found, false when not found.
         */
        public function get_subscription($slug)
        {
        }
        /**
         * Retrieves a list of (subscription) slugs by the active addons.
         *
         * @return array The slugs.
         */
        public function get_subscriptions_for_active_addons()
        {
        }
        /**
         * Retrieves a list of versions for each addon.
         *
         * @return array The addon versions.
         */
        public function get_installed_addons_versions()
        {
        }
        /**
         * Retrieves the plugin information from the subscriptions.
         *
         * @param stdClass|false $data   The result object. Default false.
         * @param string         $action The type of information being requested from the Plugin Installation API.
         * @param stdClass       $args   Plugin API arguments.
         *
         * @return object Extended plugin data.
         */
        public function get_plugin_information($data, $action, $args)
        {
        }
        /**
         * Checks if the subscription for the given slug is valid.
         *
         * @param string $slug The plugin slug to retrieve.
         *
         * @return bool True when the subscription is valid.
         */
        public function has_valid_subscription($slug)
        {
        }
        /**
         * Checks if there are addon updates.
         *
         * @param stdClass|mixed $data The current data for update_plugins.
         *
         * @return stdClass Extended data for update_plugins.
         */
        public function check_for_updates($data)
        {
        }
        /**
         * Checks whether a plugin expiry date has been passed.
         *
         * @param stdClass $subscription Plugin subscription.
         *
         * @return bool Has the plugin expired.
         */
        protected function has_subscription_expired($subscription)
        {
        }
        /**
         * Converts a subscription to plugin based format.
         *
         * @param stdClass $subscription The subscription to convert.
         *
         * @return stdClass The converted subscription.
         */
        protected function convert_subscription_to_plugin($subscription)
        {
        }
        /**
         * Checks if the given plugin_file belongs to a Yoast addon.
         *
         * @param string $plugin_file Path to the plugin.
         *
         * @return bool True when plugin file is for a Yoast addon.
         */
        protected function is_yoast_addon($plugin_file)
        {
        }
        /**
         * Retrieves the addon slug by given plugin file path.
         *
         * @param string $plugin_file The file path to the plugin.
         *
         * @return string The slug when found or empty string when not.
         */
        protected function get_slug_by_plugin_file($plugin_file)
        {
        }
        /**
         * Retrieves the installed Yoast addons.
         *
         * @return array The installed plugins.
         */
        protected function get_installed_addons()
        {
        }
        /**
         * Retrieves a list of active addons.
         *
         * @return array The active addons.
         */
        protected function get_active_addons()
        {
        }
        /**
         * Retrieves the current sites from the API.
         *
         * @codeCoverageIgnore
         *
         * @return bool|stdClass Object when request is successful. False if not.
         */
        protected function request_current_sites()
        {
        }
        /**
         * Retrieves the transient value with the site information.
         *
         * @codeCoverageIgnore
         *
         * @return stdClass|false The transient value.
         */
        protected function get_site_information_transient()
        {
        }
        /**
         * Returns the current page.
         *
         * @codeCoverageIgnore
         *
         * @return string The current page.
         */
        protected function get_current_page()
        {
        }
        /**
         * Sets the site information transient.
         *
         * @codeCoverageIgnore
         *
         * @param stdClass $site_information The site information to save.
         *
         * @return void
         */
        protected function set_site_information_transient($site_information)
        {
        }
        /**
         * Retrieves all installed WordPress plugins.
         *
         * @codeCoverageIgnore
         *
         * @return array The plugins.
         */
        protected function get_plugins()
        {
        }
        /**
         * Checks if the given plugin file belongs to an active plugin.
         *
         * @codeCoverageIgnore
         *
         * @param string $plugin_file The file path to the plugin.
         *
         * @return bool True when plugin is active.
         */
        protected function is_plugin_active($plugin_file)
        {
        }
        /**
         * Returns an object with no subscriptions.
         *
         * @codeCoverageIgnore
         *
         * @return stdClass Site information.
         */
        protected function get_site_information_default()
        {
        }
        /**
         * Checks if there are any installed addons.
         *
         * @return bool True when there are installed Yoast addons.
         */
        protected function has_installed_addons()
        {
        }
        /**
         * Filters the given array by its keys.
         *
         * This method is temporary. When WordPress has minimal PHP 5.6 support we can change this to:
         *
         * array_filter( $array_to_filter, $filter, ARRAY_FILTER_USE_KEY )
         *
         * @codeCoverageIgnore
         *
         * @param array    $array_to_filter The array to filter.
         * @param callable $callback        The filter callback.
         *
         * @return array The filtered array,
         */
        private function filter_by_key($array_to_filter, $callback)
        {
        }
        /**
         * Maps the plugin API response.
         *
         * @param object $site_information Site information as received from the API.
         *
         * @return object Mapped site information.
         */
        protected function map_site_information($site_information)
        {
        }
        /**
         * Maps a plugin subscription.
         *
         * @param object $subscription Subscription information as received from the API.
         *
         * @return object Mapped subscription.
         */
        protected function map_subscription($subscription)
        {
        }
        /**
         * Retrieves the site information.
         *
         * @return stdClass The site information.
         */
        private function get_site_information()
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Inc
     */
    /**
     * Handles requests to MyYoast.
     */
    class WPSEO_MyYoast_Api_Request
    {
        /**
         * The Request URL.
         *
         * @var string
         */
        protected $url;
        /**
         * The request parameters.
         *
         * @var array
         */
        protected $args = ['method' => 'GET', 'timeout' => 5, 'headers' => ['Accept-Encoding' => '*']];
        /**
         * Contains the fetched response.
         *
         * @var stdClass
         */
        protected $response;
        /**
         * Contains the error message when request went wrong.
         *
         * @var string
         */
        protected $error_message = '';
        /**
         * The MyYoast client object.
         *
         * @var WPSEO_MyYoast_Client
         */
        protected $client;
        /**
         * Constructor.
         *
         * @codeCoverageIgnore
         *
         * @param string $url  The request url.
         * @param array  $args The request arguments.
         */
        public function __construct($url, array $args = [])
        {
        }
        /**
         * Fires the request.
         *
         * @return bool True when request is successful.
         */
        public function fire()
        {
        }
        /**
         * Retrieves the error message.
         *
         * @return string The set error message.
         */
        public function get_error_message()
        {
        }
        /**
         * Retrieves the response.
         *
         * @return stdClass The response object.
         */
        public function get_response()
        {
        }
        /**
         * Performs the request using WordPress internals.
         *
         * @codeCoverageIgnore
         *
         * @param string $url               The request URL.
         * @param array  $request_arguments The request arguments.
         *
         * @return string                                 The retrieved body.
         * @throws WPSEO_MyYoast_Authentication_Exception When authentication has failed.
         * @throws WPSEO_MyYoast_Bad_Request_Exception    When request is invalid.
         */
        protected function do_request($url, $request_arguments)
        {
        }
        /**
         * Decodes the JSON encoded response.
         *
         * @param string $response The response to decode.
         *
         * @return stdClass                             The json decoded response.
         * @throws WPSEO_MyYoast_Invalid_JSON_Exception When decoded string is not a JSON object.
         */
        protected function decode_response($response)
        {
        }
        /**
         * Checks if MyYoast tokens are allowed and adds the token to the request body.
         *
         * When tokens are disallowed it will add the url to the request body.
         *
         * @param array $request_arguments The arguments to enrich.
         *
         * @return array The enriched arguments.
         */
        protected function enrich_request_arguments(array $request_arguments)
        {
        }
        /**
         * Retrieves the request body based on URL or access token support.
         *
         * @codeCoverageIgnore
         *
         * @return array The request body.
         */
        public function get_request_body()
        {
        }
        /**
         * Retrieves the access token.
         *
         * @codeCoverageIgnore
         *
         * @return bool|WPSEO_MyYoast_AccessToken_Interface The AccessToken when valid.
         * @throws WPSEO_MyYoast_Bad_Request_Exception      When something went wrong in getting the access token.
         */
        protected function get_access_token()
        {
        }
        /**
         * Retrieves an instance of the MyYoast client.
         *
         * @codeCoverageIgnore
         *
         * @return WPSEO_MyYoast_Client Instance of the client.
         */
        protected function get_client()
        {
        }
        /**
         * Wraps the get current user id function.
         *
         * @codeCoverageIgnore
         *
         * @return int The user id.
         */
        protected function get_current_user_id()
        {
        }
        /**
         * Removes the access token for given user id.
         *
         * @codeCoverageIgnore
         *
         * @param int $user_id The user id.
         *
         * @return void
         */
        protected function remove_access_token($user_id)
        {
        }
        /**
         * Retrieves the installed addons as http headers.
         *
         * @codeCoverageIgnore
         *
         * @return array The installed addon versions.
         */
        protected function get_installed_addon_versions()
        {
        }
        /**
         * Wraps the has_access_token support method.
         *
         * @codeCoverageIgnore
         *
         * @return bool False to disable the support.
         */
        protected function has_oauth_support()
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Inc
     */
    /**
     * Represents the post type utils.
     */
    class WPSEO_Post_Type
    {
        /**
         * Returns an array with the accessible post types.
         *
         * An accessible post type is a post type that is public and isn't set as no-index (robots).
         *
         * @return array Array with all the accessible post_types.
         */
        public static function get_accessible_post_types()
        {
        }
        /**
         * Returns whether the passed post type is considered accessible.
         *
         * @param string $post_type The post type to check.
         *
         * @return bool Whether or not the post type is considered accessible.
         */
        public static function is_post_type_accessible($post_type)
        {
        }
        /**
         * Checks if the request post type is public and indexable.
         *
         * @param string $post_type_name The name of the post type to lookup.
         *
         * @return bool True when post type is set to index.
         */
        public static function is_post_type_indexable($post_type_name)
        {
        }
        /**
         * Filters the attachment post type from an array with post_types.
         *
         * @param array $post_types The array to filter the attachment post type from.
         *
         * @return array The filtered array.
         */
        public static function filter_attachment_post_type(array $post_types)
        {
        }
        /**
         * Checks if the post type is enabled in the REST API.
         *
         * @param string $post_type The post type to check.
         *
         * @return bool Whether or not the post type is available in the REST API.
         */
        public static function is_rest_enabled($post_type)
        {
        }
        /**
         * Checks if the current post type has an archive.
         *
         * Context: The has_archive value can be a string or a boolean. In most case it will be a boolean,
         * but it can be defined as a string. When it is a string the archive_slug will be overwritten to
         * define another endpoint.
         *
         * @param WP_Post_Type $post_type The post type object.
         *
         * @return bool True whether the post type has an archive.
         */
        public static function has_archive($post_type)
        {
        }
        /**
         * Checks if the Yoast Metabox has been enabled for the post type.
         *
         * @param string $post_type The post type name.
         *
         * @return bool True whether the metabox is enabled.
         */
        public static function has_metabox_enabled($post_type)
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Frontend
     */
    /**
     * This code handles the category rewrites.
     */
    class WPSEO_Rewrite
    {
        /**
         * Class constructor.
         */
        public function __construct()
        {
        }
        /**
         * Save an option that triggers a flush on the next init.
         *
         * @since 1.2.8
         */
        public function schedule_flush()
        {
        }
        /**
         * If the flush option is set, flush the rewrite rules.
         *
         * @since 1.2.8
         *
         * @return bool
         */
        public function flush()
        {
        }
        /**
         * Override the category link to remove the category base.
         *
         * @param string $link Unused, overridden by the function.
         *
         * @return string
         */
        public function no_category_base($link)
        {
        }
        /**
         * Update the query vars with the redirect var when stripcategorybase is active.
         *
         * @param array $query_vars Main query vars to filter.
         *
         * @return array
         */
        public function query_vars($query_vars)
        {
        }
        /**
         * Checks whether the redirect needs to be created.
         *
         * @param array $query_vars Query vars to check for existence of redirect var.
         *
         * @return array|void The query vars.
         */
        public function request($query_vars)
        {
        }
        /**
         * This function taken and only slightly adapted from WP No Category Base plugin by Saurabh Gupta.
         *
         * @return array
         */
        public function category_rewrite_rules()
        {
        }
        /**
         * Adds required category rewrites rules.
         *
         * @param array  $rewrites        The current set of rules.
         * @param string $category_name   Category nicename.
         * @param string $blog_prefix     Multisite blog prefix.
         * @param string $pagination_base WP_Query pagination base.
         *
         * @return array The added set of rules.
         */
        protected function add_category_rewrites($rewrites, $category_name, $blog_prefix, $pagination_base)
        {
        }
        /**
         * Walks through category nicename and convert encoded parts
         * into uppercase using $this->encode_to_upper().
         *
         * @param string $name The encoded category URI string.
         *
         * @return string The convered URI string.
         */
        protected function convert_encoded_to_upper($name)
        {
        }
        /**
         * Converts the encoded URI string to uppercase.
         *
         * @param string $encoded The encoded string.
         *
         * @return string The uppercased string.
         */
        public function encode_to_upper($encoded)
        {
        }
        /**
         * Redirect the "old" category URL to the new one.
         *
         * @codeCoverageIgnore
         *
         * @param string $category_redirect The category page to redirect to.
         * @return void
         */
        protected function redirect($category_redirect)
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Admin
     */
    /**
     * Class to load assets required for structured data blocks.
     */
    class WPSEO_Structured_Data_Blocks implements \WPSEO_WordPress_Integration
    {
        /**
         * An instance of the WPSEO_Admin_Asset_Manager class.
         *
         * @var WPSEO_Admin_Asset_Manager
         */
        protected $asset_manager;
        /**
         * Registers hooks for Structured Data Blocks with WordPress.
         */
        public function register_hooks()
        {
        }
        /**
         * Checks whether the Structured Data Blocks are disabled.
         *
         * @return boolean
         */
        private function check_enabled()
        {
        }
        /**
         * Enqueue Gutenberg block assets for backend editor.
         */
        public function enqueue_block_editor_assets()
        {
        }
        /**
         * Adds the structured data blocks category to the Gutenberg categories.
         *
         * @param array $categories The current categories.
         *
         * @return array The updated categories.
         */
        public function add_block_category($categories)
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Internal
     */
    /**
     * This class handles storing the current options for future reference.
     *
     * This should only be used during an upgrade routine.
     */
    class WPSEO_Upgrade_History
    {
        /**
         * Option to use to store/retrieve data from.
         *
         * @var string
         */
        protected $option_name = 'wpseo_upgrade_history';
        /**
         * WPSEO_Upgrade_History constructor.
         *
         * @param null|string $option_name Optional. Custom option to use to store/retrieve history from.
         */
        public function __construct($option_name = \null)
        {
        }
        /**
         * Retrieves the content of the history items currently stored.
         *
         * @return array The contents of the history option.
         */
        public function get()
        {
        }
        /**
         * Adds a new history entry in the storage.
         *
         * @param string $old_version  The version we are upgrading from.
         * @param string $new_version  The version we are upgrading to.
         * @param array  $option_names The options that need to be stored.
         */
        public function add($old_version, $new_version, array $option_names)
        {
        }
        /**
         * Retrieves the data for the specified option names from the database.
         *
         * @param array $option_names The option names to retrieve.
         *
         * @return array
         */
        protected function get_options_data(array $option_names)
        {
        }
        /**
         * Stores the new history state.
         *
         * @param array $data The data to store.
         *
         * @return void
         */
        protected function set(array $data)
        {
        }
        /**
         * Retrieves the WPDB object.
         *
         * @return wpdb The WPDB object to use.
         */
        protected function get_wpdb()
        {
        }
        /**
         * Retrieves the option name to store the history in.
         *
         * @return string The option name to store the history in.
         */
        protected function get_option_name()
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Internal
     */
    /**
     * This code handles the option upgrades.
     */
    class WPSEO_Upgrade
    {
        /**
         * Class constructor.
         */
        public function __construct()
        {
        }
        /**
         * Runs the upgrade routine.
         *
         * @param string $routine         The method to call.
         * @param string $version         The new version.
         * @param string $current_version The current set version.
         *
         * @return void
         */
        protected function run_upgrade_routine($routine, $version, $current_version)
        {
        }
        /**
         * Adds a new upgrade history entry.
         *
         * @param string $current_version The old version from which we are upgrading.
         * @param string $new_version     The version we are upgrading to.
         */
        protected function add_upgrade_history($current_version, $new_version)
        {
        }
        /**
         * Runs the needed cleanup after an update, setting the DB version to latest version, flushing caches etc.
         */
        protected function finish_up()
        {
        }
        /**
         * Run the Yoast SEO 1.5 upgrade routine.
         *
         * @param string $version Current plugin version.
         */
        private function upgrade_15($version)
        {
        }
        /**
         * Moves options that moved position in WPSEO 2.0.
         */
        private function upgrade_20()
        {
        }
        /**
         * Detects if taxonomy terms were split and updates the corresponding taxonomy meta's accordingly.
         */
        private function upgrade_21()
        {
        }
        /**
         * Performs upgrade functions to Yoast SEO 2.2.
         */
        private function upgrade_22()
        {
        }
        /**
         * Schedules upgrade function to Yoast SEO 2.3.
         */
        private function upgrade_23()
        {
        }
        /**
         * Performs upgrade query to Yoast SEO 2.3.
         */
        public function upgrade_23_query()
        {
        }
        /**
         * Performs upgrade functions to Yoast SEO 3.0.
         */
        private function upgrade_30()
        {
        }
        /**
         * Performs upgrade functions to Yoast SEO 3.3.
         */
        private function upgrade_33()
        {
        }
        /**
         * Performs upgrade functions to Yoast SEO 3.6.
         */
        private function upgrade_36()
        {
        }
        /**
         * Removes the about notice when its still in the database.
         */
        private function upgrade_40()
        {
        }
        /**
         * Moves the content-analysis-active and keyword-analysis-acive options from wpseo-titles to wpseo.
         */
        private function upgrade_44()
        {
        }
        /**
         * Renames the meta name for the cornerstone content. It was a public meta field and it has to be private.
         */
        private function upgrade_47()
        {
        }
        /**
         * Removes the 'wpseo-dismiss-about' notice for every user that still has it.
         */
        private function upgrade_49()
        {
        }
        /**
         * Removes the wpseo-dismiss-about notice from a list of notifications.
         *
         * @param Yoast_Notification[] $notifications The notifications to filter.
         *
         * @return Yoast_Notification[] The filtered list of notifications. Excluding the wpseo-dismiss-about notification.
         */
        public function remove_about_notice($notifications)
        {
        }
        /**
         * Adds the yoast_seo_links table to the database.
         */
        private function upgrade_50()
        {
        }
        /**
         * Updates the internal_link_count column to support improved functionality.
         *
         * @param string $version The current version to compare with.
         */
        private function upgrade_50_51($version)
        {
        }
        /**
         * Register new capabilities and roles.
         */
        private function upgrade_55()
        {
        }
        /**
         * Updates legacy license page options to the latest version.
         */
        private function upgrade_56()
        {
        }
        /**
         * Updates the links for the link count when there is a difference between the site and home url.
         * We've used the site url instead of the home url.
         *
         * @return void
         */
        private function upgrade_61()
        {
        }
        /**
         * Removes some no longer used options for noindexing subpages and for meta keywords and its associated templates.
         *
         * @return void
         */
        private function upgrade_63()
        {
        }
        /**
         * Perform the 7.0 upgrade, moves settings around, deletes several options.
         *
         * @return void
         */
        private function upgrade_70()
        {
        }
        /**
         * Perform the 7.1 upgrade.
         *
         * @return void
         */
        private function upgrade_71()
        {
        }
        /**
         * Perform the 7.3 upgrade.
         *
         * @return void
         */
        private function upgrade_73()
        {
        }
        /**
         * Performs the 7.4 upgrade.
         *
         * @return void
         */
        private function upgrade_74()
        {
        }
        /**
         * Performs the 7.5.3 upgrade.
         *
         * When upgrading purging media is potentially relevant.
         *
         * @return void
         */
        private function upgrade_753()
        {
        }
        /**
         * Performs the 7.7 upgrade.
         *
         * @return void
         */
        private function upgrade_77()
        {
        }
        /**
         * Performs the 7.7.2 upgrade.
         *
         * @return void
         */
        private function upgrade_772()
        {
        }
        /**
         * Performs the 9.0 upgrade.
         *
         * @return void
         */
        private function upgrade_90()
        {
        }
        /**
         * Performs the 10.0 upgrade.
         *
         * @return void
         */
        private function upgrade_100()
        {
        }
        /**
         * Performs the 11.1 upgrade.
         *
         * @return void
         */
        private function upgrade_111()
        {
        }
        /**
         * Performs the 12.3 upgrade.
         *
         * Removes the about notice when its still in the database.
         */
        private function upgrade_123()
        {
        }
        /**
         * Performs the 12.4 upgrade.
         *
         * Removes the Google plus defaults from the database.
         */
        private function upgrade_124()
        {
        }
        /**
         * Performs the 12.5 upgrade.
         */
        public function upgrade_125()
        {
        }
        /**
         * Performs the 12.8 upgrade.
         */
        private function upgrade_128()
        {
        }
        /**
         * Removes all notifications saved in the database under 'wp_yoast_notifications'.
         *
         * @return void
         */
        private function clean_all_notifications()
        {
        }
        /**
         * Removes the post meta fields for a given meta key.
         *
         * @param string $meta_key The meta key.
         *
         * @return void
         */
        private function delete_post_meta($meta_key)
        {
        }
        /**
         * Removes all sitemap validators.
         *
         * This should be executed on every upgrade routine until we have removed the sitemap caching in the database.
         *
         * @return void
         */
        private function remove_sitemap_validators()
        {
        }
        /**
         * Retrieves the option value directly from the database.
         *
         * @param string $option_name Option to retrieve.
         *
         * @return array|mixed The content of the option if exists, otherwise an empty array.
         */
        protected function get_option_from_database($option_name)
        {
        }
        /**
         * Cleans the option to make sure only relevant settings are there.
         *
         * @param string $option_name Option name save.
         *
         * @return void
         */
        protected function cleanup_option_data($option_name)
        {
        }
        /**
         * Saves an option setting to where it should be stored.
         *
         * @param array       $source_data    The option containing the value to be migrated.
         * @param string      $source_setting Name of the key in the "from" option.
         * @param string|null $target_setting Name of the key in the "to" option.
         *
         * @return void
         */
        protected function save_option_setting($source_data, $source_setting, $target_setting = \null)
        {
        }
        /**
         * Migrates WooCommerce archive settings to the WooCommerce Shop page meta-data settings.
         *
         * If no Shop page is defined, nothing will be migrated.
         *
         * @return void
         */
        private function migrate_woocommerce_archive_setting_to_shop_page()
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO
     */
    /**
     * WPSEO_Custom_Fields.
     */
    class WPSEO_Custom_Fields
    {
        /**
         * Custom fields cache.
         *
         * @var array
         */
        protected static $custom_fields = \null;
        /**
         * Retrieves the custom field names as an array.
         *
         * @link WordPress core: wp-admin/includes/template.php. Reused query from it.
         *
         * @return array The custom fields.
         */
        public static function get_custom_fields()
        {
        }
        /**
         * Adds the cf_ prefix to a field.
         *
         * @param string $field The field to prefix.
         *
         * @return string The prefixed field.
         */
        private static function add_custom_field_prefix($field)
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO
     */
    /**
     * WPSEO_Custom_Taxonomies.
     */
    class WPSEO_Custom_Taxonomies
    {
        /**
         * Custom taxonomies cache.
         *
         * @var array
         */
        protected static $custom_taxonomies = \null;
        /**
         * Gets the names of the custom taxonomies, prepends 'ct_' and 'ct_desc', and returns them in an array.
         *
         * @return array The custom taxonomy prefixed names.
         */
        public static function get_custom_taxonomies()
        {
        }
        /**
         * Adds the ct_ prefix to a taxonomy.
         *
         * @param string $taxonomy The taxonomy to prefix.
         *
         * @return string The prefixed taxonomy.
         */
        private static function add_custom_taxonomies_prefix($taxonomy)
        {
        }
        /**
         * Adds the ct_desc_ prefix to a taxonomy.
         *
         * @param string $taxonomy The taxonomy to prefix.
         *
         * @return string The prefixed taxonomy.
         */
        private static function add_custom_taxonomies_description_prefix($taxonomy)
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Internals
     */
    /**
     * Class WPSEO_Endpoint_Factory.
     */
    class WPSEO_Endpoint_Factory
    {
        /**
         * The valid HTTP methods.
         *
         * @var array
         */
        private $valid_http_methods = ['GET', 'PATCH', 'POST', 'PUT', 'DELETE'];
        /**
         * The arguments.
         *
         * @var array
         */
        protected $args = [];
        /**
         * The namespace.
         *
         * @var string
         */
        private $namespace;
        /**
         * The endpoint URL.
         *
         * @var string
         */
        private $endpoint;
        /**
         * The callback to execute if the endpoint is called.
         *
         * @var callable
         */
        private $callback;
        /**
         * The permission callback to execute to determine permissions.
         *
         * @var callable
         */
        private $permission_callback;
        /**
         * The HTTP method to use.
         *
         * @var string
         */
        private $method;
        /**
         * WPSEO_Endpoint_Factory constructor.
         *
         * @param string   $namespace           The endpoint's namespace.
         * @param string   $endpoint            The endpoint's URL.
         * @param callable $callback            The callback function to execute.
         * @param callable $permission_callback The permission callback to execute to determine permissions.
         * @param string   $method              The HTTP method to use. Defaults to GET.
         *
         * @throws WPSEO_Invalid_Argument_Exception The invalid argument exception.
         */
        public function __construct($namespace, $endpoint, $callback, $permission_callback, $method = \WP_REST_Server::READABLE)
        {
        }
        /**
         * Gets the associated arguments.
         *
         * @return array The arguments.
         */
        public function get_arguments()
        {
        }
        /**
         * Determines whether or not there are any arguments present.
         *
         * @return bool Whether or not any arguments are present.
         */
        public function has_arguments()
        {
        }
        /**
         * Registers the endpoint with WordPress.
         *
         * @return void
         */
        public function register()
        {
        }
        /**
         * Validates the method parameter.
         *
         * @param string $method The set method parameter.
         *
         * @return string The validated method.
         *
         * @throws WPSEO_Invalid_Argument_Exception The invalid argument exception.
         * @throws InvalidArgumentException         The invalid argument exception.
         */
        protected function validate_method($method)
        {
        }
        /**
         * Adds an argument to the endpoint.
         *
         * @param string $name        The name of the argument.
         * @param string $description The description associated with the argument.
         * @param string $type        The type of value that can be assigned to the argument.
         * @param bool   $required    Whether or not it's a required argument. Defaults to true.
         *
         * @return void
         */
        protected function add_argument($name, $description, $type, $required = \true)
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Internal
     */
    /**
     * Class containing method for WPSEO Features.
     */
    class WPSEO_Features
    {
        /**
         * Checks if the premium constant exists to make sure if plugin is the premium one.
         *
         * @return bool
         */
        public function is_premium()
        {
        }
        /**
         * Checks if using the free version of the plugin.
         *
         * @return bool
         */
        public function is_free()
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO
     */
    /**
     * WPSEO_Image_Utils.
     */
    class WPSEO_Image_Utils
    {
        /**
         * Find an attachment ID for a given URL.
         *
         * @param string $url The URL to find the attachment for.
         *
         * @return int The found attachment ID, or 0 if none was found.
         */
        public static function get_attachment_by_url($url)
        {
        }
        /**
         * Implements the attachment_url_to_postid with use of WP Cache.
         *
         * @param string $url The attachment URL for which we want to know the Post ID.
         *
         * @return int The Post ID belonging to the attachment, 0 if not found.
         */
        protected static function attachment_url_to_postid($url)
        {
        }
        /**
         * Retrieves the image data.
         *
         * @param array $image         Image array with URL and metadata.
         * @param int   $attachment_id Attachment ID.
         *
         * @return false|array $image {
         *     Array of image data
         *
         *     @type string $alt      Image's alt text.
         *     @type string $alt      Image's alt text.
         *     @type int    $width    Width of image.
         *     @type int    $height   Height of image.
         *     @type string $type     Image's MIME type.
         *     @type string $url      Image's URL.
         *     @type int    $filesize The file size in bytes, if already set.
         * }
         */
        public static function get_data($image, $attachment_id)
        {
        }
        /**
         * Checks a size version of an image to see if it's not too heavy.
         *
         * @param array $image Image to check the file size of.
         *
         * @return bool True when the image is within limits, false if not.
         */
        public static function has_usable_file_size($image)
        {
        }
        /**
         * Find the right version of an image based on size.
         *
         * @param int    $attachment_id Attachment ID.
         * @param string $size          Size name.
         *
         * @return array|false Returns an array with image data on success, false on failure.
         */
        public static function get_image($attachment_id, $size)
        {
        }
        /**
         * Returns the image data for the full size image.
         *
         * @param int $attachment_id Attachment ID.
         *
         * @return array|false Array when there is a full size image. False if not.
         */
        protected static function get_full_size_image_data($attachment_id)
        {
        }
        /**
         * Finds the full file path for a given image file.
         *
         * @param string $path The relative file path.
         *
         * @return string The full file path.
         */
        public static function get_absolute_path($path)
        {
        }
        /**
         * Get the relative path of the image.
         *
         * @param string $img Image URL.
         *
         * @return string The expanded image URL.
         */
        public static function get_relative_path($img)
        {
        }
        /**
         * Get the image file size.
         *
         * @param array $image An image array object.
         *
         * @return int The file size in bytes.
         */
        public static function get_file_size($image)
        {
        }
        /**
         * Returns the different image variations for consideration.
         *
         * @param int $attachment_id The attachment to return the variations for.
         *
         * @return array The different variations possible for this attachment ID.
         */
        public static function get_variations($attachment_id)
        {
        }
        /**
         * Check original size of image. If original image is too small, return false, else return true.
         *
         * Filters a list of variations by a certain set of usable dimensions.
         *
         * @param array $usable_dimensions {
         *    The parameters to check against.
         *
         *    @type int    $min_width     Minimum width of image.
         *    @type int    $max_width     Maximum width of image.
         *    @type int    $min_height    Minimum height of image.
         *    @type int    $max_height    Maximum height of image.
         * }
         * @param array $variations        The variations that should be considered.
         *
         * @return array Whether a variation is fit for display or not.
         */
        public static function filter_usable_dimensions($usable_dimensions, $variations)
        {
        }
        /**
         * Filters a list of variations by (disk) file size.
         *
         * @param array $variations The variations to consider.
         *
         * @return array The validations that pass the required file size limits.
         */
        public static function filter_usable_file_size($variations)
        {
        }
        /**
         * Retrieve the internal WP image file sizes.
         *
         * @return array $image_sizes An array of image sizes.
         */
        public static function get_sizes()
        {
        }
        /**
         * Grabs an image alt text.
         *
         * @param int $attachment_id The attachment ID.
         *
         * @return string The image alt text.
         */
        public static function get_alt_tag($attachment_id)
        {
        }
        /**
         * Checks whether an img sizes up to the parameters.
         *
         * @param array $dimensions        The image values.
         * @param array $usable_dimensions The parameters to check against.
         *
         * @return bool True if the image has usable measurements, false if not.
         */
        private static function has_usable_dimensions($dimensions, $usable_dimensions)
        {
        }
        /**
         * Gets the post's first usable content image. Null if none is available.
         *
         * @param int $post_id The post id.
         *
         * @return string|null The image URL.
         */
        public static function get_first_usable_content_image_for_post($post_id = \null)
        {
        }
        /**
         * Gets the term's first usable content image. Null if none is available.
         *
         * @param int $term_id The term id.
         *
         * @return string|null The image URL.
         */
        public static function get_first_content_image_for_term($term_id)
        {
        }
        /**
         * Retrieves an attachment ID for an image uploaded in the settings.
         *
         * Due to self::get_attachment_by_url returning 0 instead of false.
         * 0 is also a possibility when no ID is available.
         *
         * @param string $setting The setting the image is stored in.
         *
         * @return int|bool The attachment id, or false or 0 if no ID is available.
         */
        public static function get_attachment_id_from_settings($setting)
        {
        }
        /**
         * Retrieves the first possible image url from an array of images.
         *
         * @param array $images The array to extract image url from.
         *
         * @return string|null The extracted image url when found, null when not found.
         */
        protected static function get_first_image($images)
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Internals
     * @since   3.6
     */
    /**
     * This class checks if the wpseo option doesn't exists. In the case it doesn't it will set a property that is
     * accessible via a method to check if the installation is fresh.
     */
    class WPSEO_Installation
    {
        /**
         * Checks if Yoast SEO is installed for the first time.
         */
        public function __construct()
        {
        }
        /**
         * When the option doesn't exist, it should be a new install.
         *
         * @return bool
         */
        private function is_first_install()
        {
        }
        /**
         * Sets the options on first install for showing the installation notice and disabling of the settings pages.
         */
        public function set_first_install_options()
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Internals
     * @since   1.5.0
     */
    /**
     * This class implements defaults and value validation for all WPSEO Post Meta values.
     *
     * Some guidelines:
     * - To update a meta value, you can just use update_post_meta() with the full (prefixed) meta key
     *   or the convenience method WPSEO_Meta::set_value() with the internal key.
     *   All updates will be automatically validated.
     *   Meta values will only be saved to the database if they are *not* the same as the default to
     *   keep database load low.
     * - To retrieve a WPSEO meta value, you **must** use WPSEO_Meta::get_value() which will always return a
     *   string value, either the saved value or the default.
     *   This method can also retrieve a complete set of WPSEO meta values for one specific post, see
     *   the method documentation for the parameters.
     *
     * {@internal Unfortunately there isn't a filter available to hook into before returning the results
     *            for get_post_meta(), get_post_custom() and the likes. That would have been the
     *            preferred solution.}}
     *
     * {@internal All WP native get_meta() results get cached internally, so no need to cache locally.}}
     * {@internal Use $key when the key is the WPSEO internal name (without prefix), $meta_key when it
     *            includes the prefix.}}
     */
    class WPSEO_Meta
    {
        /**
         * Prefix for all WPSEO meta values in the database.
         *
         * {@internal If at any point this would change, quite apart from an upgrade routine,
         *            this also will need to be changed in the wpml-config.xml file.}}
         *
         * @var string
         */
        public static $meta_prefix = '_yoast_wpseo_';
        /**
         * Prefix for all WPSEO meta value form field names and ids.
         *
         * @var string
         */
        public static $form_prefix = 'yoast_wpseo_';
        /**
         * Allowed length of the meta description.
         *
         * @var int
         */
        public static $meta_length = 156;
        /**
         * Reason the meta description is not the default length.
         *
         * @var string
         */
        public static $meta_length_reason = '';
        /**
         * Meta box field definitions for the meta box form.
         *
         * {@internal
         * - Titles, help texts, description text and option labels are added via a translate_meta_boxes() method
         *   in the relevant child classes (WPSEO_Metabox and WPSEO_Social_admin) as they are only needed there.
         * - Beware: even though the meta keys are divided into subsets, they still have to be uniquely named!}}
         *
         * @var array $meta_fields
         *            Array format:
         *                (required)       'type'          => (string) field type. i.e. text / textarea / checkbox /
         *                                                    radio / select / multiselect / upload etc.
         *                (required)       'title'         => (string) table row title.
         *                (recommended)    'default_value' => (string|array) default value for the field.
         *                                                    IMPORTANT:
         *                                                    - if the field has options, the default has to be the
         *                                                      key of one of the options.
         *                                                    - if the field is a text field, the default **has** to be
         *                                                      an empty string as otherwise the user can't save
         *                                                      an empty value/delete the meta value.
         *                                                    - if the field is a checkbox, the only valid values
         *                                                      are 'on' or 'off'.
         *                (semi-required)   'options'      => (array) options for used with (multi-)select and radio
         *                                                    fields, required if that's the field type.
         *                                                    key = (string) value which will be saved to db.
         *                                                    value = (string) text label for the option.
         *                (optional)        'autocomplete' => (bool) whether autocomplete is on for text fields,
         *                                                    defaults to true.
         *                (optional)        'class'        => (string) classname(s) to add to the actual <input> tag.
         *                (optional)        'description'  => (string) description to show underneath the field.
         *                (optional)        'expl'         => (string) label for a checkbox.
         *                (optional)        'help'         => (string) help text to show on mouse over ? image.
         *                (optional)        'rows'         => (int) number of rows for a textarea, defaults to 3.
         *                (optional)        'placeholder'  => (string) Currently only used by add-on plugins.
         *                (optional)        'serialized'   => (bool) whether the value is expected to be serialized,
         *                                                     i.e. an array or object, defaults to false.
         *                                                     Currently only used by add-on plugins.
         */
        public static $meta_fields = [
            'general' => ['focuskw' => ['type' => 'hidden', 'title' => ''], 'title' => [
                'type' => 'hidden',
                'title' => '',
                // Translation added later.
                'default_value' => '',
                'description' => '',
                // Translation added later.
                'help' => '',
            ], 'metadesc' => [
                'type' => 'hidden',
                'title' => '',
                // Translation added later.
                'default_value' => '',
                'class' => 'metadesc',
                'rows' => 2,
                'description' => '',
                // Translation added later.
                'help' => '',
            ], 'linkdex' => ['type' => 'hidden', 'title' => 'linkdex', 'default_value' => '0', 'description' => ''], 'content_score' => ['type' => 'hidden', 'title' => 'content_score', 'default_value' => '0', 'description' => ''], 'is_cornerstone' => ['type' => 'hidden', 'title' => 'is_cornerstone', 'default_value' => 'false', 'description' => '']],
            'advanced' => ['meta-robots-noindex' => [
                'type' => 'select',
                'title' => '',
                // Translation added later.
                'default_value' => '0',
                // = post-type default.
                'options' => [
                    '0' => '',
                    // Post type default - translation added later.
                    '2' => '',
                    // Index - translation added later.
                    '1' => '',
                ],
            ], 'meta-robots-nofollow' => [
                'type' => 'radio',
                'title' => '',
                // Translation added later.
                'default_value' => '0',
                // = follow.
                'options' => [
                    '0' => '',
                    // Follow - translation added later.
                    '1' => '',
                ],
            ], 'meta-robots-adv' => [
                'type' => 'multiselect',
                'title' => '',
                // Translation added later.
                'default_value' => '',
                'description' => '',
                // Translation added later.
                'options' => [
                    'noimageindex' => '',
                    // Translation added later.
                    'noarchive' => '',
                    // Translation added later.
                    'nosnippet' => '',
                ],
            ], 'bctitle' => [
                'type' => 'text',
                'title' => '',
                // Translation added later.
                'default_value' => '',
                'description' => '',
            ], 'canonical' => [
                'type' => 'text',
                'title' => '',
                // Translation added later.
                'default_value' => '',
                'description' => '',
            ], 'redirect' => [
                'type' => 'text',
                'title' => '',
                // Translation added later.
                'default_value' => '',
                'description' => '',
            ]],
            'social' => [],
            /* Fields we should validate & save, but not show on any form. */
            'non_form' => ['linkdex' => ['type' => \null, 'default_value' => '0']],
        ];
        /**
         * Helper property - reverse index of the definition array.
         *
         * Format: [full meta key including prefix]    => array
         *         ['subset']    => (string) primary index
         *         ['key']       => (string) internal key
         *
         * @var array
         */
        public static $fields_index = [];
        /**
         * Helper property - array containing only the defaults in the format:
         * [full meta key including prefix]    => (string) default value
         *
         * @var array
         */
        public static $defaults = [];
        /**
         * Helper property to define the social network meta field definitions - networks.
         *
         * @var array
         */
        private static $social_networks = ['opengraph' => 'opengraph', 'twitter' => 'twitter'];
        /**
         * Helper property to define the social network meta field definitions - fields and their type.
         *
         * @var array
         */
        private static $social_fields = ['title' => 'text', 'description' => 'textarea', 'image' => 'upload', 'image-id' => 'hidden'];
        /**
         * Register our actions and filters.
         *
         * @return void
         */
        public static function init()
        {
        }
        /**
         * Retrieve the meta box form field definitions for the given tab and post type.
         *
         * @param string $tab       Tab for which to retrieve the field definitions.
         * @param string $post_type Post type of the current post.
         *
         * @return array Array containing the meta box field definitions.
         */
        public static function get_meta_field_defs($tab, $post_type = 'post')
        {
        }
        /**
         * Validate the post meta values.
         *
         * @param mixed  $meta_value The new value.
         * @param string $meta_key   The full meta key (including prefix).
         *
         * @return string Validated meta value.
         */
        public static function sanitize_post_meta($meta_value, $meta_key)
        {
        }
        /**
         * Validate a meta-robots-adv meta value.
         *
         * @todo [JRF => Yoast] Verify that this logic for the prioritisation is correct.
         *
         * @param array|string $meta_value The value to validate.
         *
         * @return string Clean value.
         */
        public static function validate_meta_robots_adv($meta_value)
        {
        }
        /**
         * Prevent saving of default values and remove potential old value from the database if replaced by a default.
         *
         * @param bool   $check      The current status to allow updating metadata for the given type.
         * @param int    $object_id  ID of the current object for which the meta is being updated.
         * @param string $meta_key   The full meta key (including prefix).
         * @param string $meta_value New meta value.
         * @param string $prev_value The old meta value.
         *
         * @return null|bool True = stop saving, null = continue saving.
         */
        public static function remove_meta_if_default($check, $object_id, $meta_key, $meta_value, $prev_value = '')
        {
        }
        /**
         * Prevent adding of default values to the database.
         *
         * @param bool   $check      The current status to allow adding metadata for the given type.
         * @param int    $object_id  ID of the current object for which the meta is being added.
         * @param string $meta_key   The full meta key (including prefix).
         * @param string $meta_value New meta value.
         *
         * @return null|bool True = stop saving, null = continue saving.
         */
        public static function dont_save_meta_if_default($check, $object_id, $meta_key, $meta_value)
        {
        }
        /**
         * Is the given meta value the same as the default value ?
         *
         * @param string $meta_key   The full meta key (including prefix).
         * @param mixed  $meta_value The value to check.
         *
         * @return bool
         */
        public static function meta_value_is_default($meta_key, $meta_value)
        {
        }
        /**
         * Get a custom post meta value.
         *
         * Returns the default value if the meta value has not been set.
         *
         * {@internal Unfortunately there isn't a filter available to hook into before returning
         *            the results for get_post_meta(), get_post_custom() and the likes. That
         *            would have been the preferred solution.}}
         *
         * @param string $key    Internal key of the value to get (without prefix).
         * @param int    $postid Post ID of the post to get the value for.
         *
         * @return string All 'normal' values returned from get_post_meta() are strings.
         *                Objects and arrays are possible, but not used by this plugin
         *                and therefore discarted (except when the special 'serialized' field def
         *                value is set to true - only used by add-on plugins for now).
         *                Will return the default value if no value was found.
         *                Will return empty string if no default was found (not one of our keys) or
         *                if the post does not exist.
         */
        public static function get_value($key, $postid = 0)
        {
        }
        /**
         * Update a meta value for a post.
         *
         * @param string $key        The internal key of the meta value to change (without prefix).
         * @param mixed  $meta_value The value to set the meta to.
         * @param int    $post_id    The ID of the post to change the meta for.
         *
         * @return bool Whether the value was changed.
         */
        public static function set_value($key, $meta_value, $post_id)
        {
        }
        /**
         * Deletes a meta value for a post.
         *
         * @param string $key     The internal key of the meta value to change (without prefix).
         * @param int    $post_id The ID of the post to change the meta for.
         *
         * @return bool Whether the value was changed.
         */
        public static function delete($key, $post_id)
        {
        }
        /**
         * Used for imports, this functions imports the value of $old_metakey into $new_metakey for those post
         * where no WPSEO meta data has been set.
         * Optionally deletes the $old_metakey values.
         *
         * @param string $old_metakey The old key of the meta value.
         * @param string $new_metakey The new key, usually the WPSEO meta key (including prefix).
         * @param bool   $delete_old  Whether to delete the old meta key/value-sets.
         *
         * @return void
         */
        public static function replace_meta($old_metakey, $new_metakey, $delete_old = \false)
        {
        }
        /**
         * General clean-up of the saved meta values.
         * - Remove potentially lingering old meta keys;
         * - Remove all default and invalid values.
         *
         * @return void
         */
        public static function clean_up()
        {
        }
        /**
         * Recursively merge a variable number of arrays, using the left array as base,
         * giving priority to the right array.
         *
         * Difference with native array_merge_recursive():
         * array_merge_recursive converts values with duplicate keys to arrays rather than
         * overwriting the value in the first array with the duplicate value in the second array.
         *
         * array_merge_recursive_distinct does not change the data types of the values in the arrays.
         * Matching keys' values in the second array overwrite those in the first array, as is the
         * case with array_merge.
         *
         * Freely based on information found on http://www.php.net/manual/en/function.array-merge-recursive.php
         *
         * {@internal Should be moved to a general utility class.}}
         *
         * @return array
         */
        public static function array_merge_recursive_distinct()
        {
        }
        /**
         * Counts the total of all the keywords being used for posts except the given one.
         *
         * @param string  $keyword The keyword to be counted.
         * @param integer $post_id The is of the post to which the keyword belongs.
         *
         * @return array
         */
        public static function keyword_usage($keyword, $post_id)
        {
        }
        /* ********************* DEPRECATED METHODS ********************* */
        /**
         * Get a value from $_POST for a given key.
         *
         * Returns the $_POST value if exists, returns an empty string if key does not exist.
         *
         * @deprecated 9.6
         * @codeCoverageIgnore
         *
         * @param string $key Key of the value to get from $_POST.
         *
         * @return string Returns $_POST value, which will be a string the majority of the time.
         *                Will return empty string if key does not exists in $_POST.
         */
        public static function get_post_value($key)
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO
     */
    /**
     * Represents a post's primary term.
     */
    class WPSEO_Primary_Term
    {
        /**
         * Taxonomy name for the term.
         *
         * @var string
         */
        protected $taxonomy_name;
        /**
         * Post ID for the term.
         *
         * @var int
         */
        protected $post_ID;
        /**
         * The taxonomy this term is part of.
         *
         * @param string $taxonomy_name Taxonomy name for the term.
         * @param int    $post_id       Post ID for the term.
         */
        public function __construct($taxonomy_name, $post_id)
        {
        }
        /**
         * Returns the primary term ID.
         *
         * @return int|bool
         */
        public function get_primary_term()
        {
        }
        /**
         * Sets the new primary term ID.
         *
         * @param int $new_primary_term New primary term ID.
         */
        public function set_primary_term($new_primary_term)
        {
        }
        /**
         * Get the terms for the current post ID.
         * When $terms is not an array, set $terms to an array.
         *
         * @return array
         */
        protected function get_terms()
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Internals
     */
    /**
     * Holder for SEO Rank information.
     */
    class WPSEO_Rank
    {
        /**
         * Constant used for determining a bad SEO rating.
         *
         * @var string
         */
        const BAD = 'bad';
        /**
         * Constant used for determining an OK SEO rating.
         *
         * @var string
         */
        const OK = 'ok';
        /**
         * Constant used for determining a good SEO rating.
         *
         * @var string
         */
        const GOOD = 'good';
        /**
         * Constant used for determining that no focus keyphrase is set.
         *
         * @var string
         */
        const NO_FOCUS = 'na';
        /**
         * Constant used for determining that this content is not indexed.
         *
         * @var string
         */
        const NO_INDEX = 'noindex';
        /**
         * All possible ranks.
         *
         * @var array
         */
        protected static $ranks = [self::BAD, self::OK, self::GOOD, self::NO_FOCUS, self::NO_INDEX];
        /**
         * Holds the translation from seo score slug to actual score range.
         *
         * @var array
         */
        protected static $ranges = [self::NO_FOCUS => ['start' => 0, 'end' => 0], self::BAD => ['start' => 1, 'end' => 40], self::OK => ['start' => 41, 'end' => 70], self::GOOD => ['start' => 71, 'end' => 100]];
        /**
         * The current rank.
         *
         * @var int
         */
        protected $rank;
        /**
         * WPSEO_Rank constructor.
         *
         * @param int $rank The actual rank.
         */
        public function __construct($rank)
        {
        }
        /**
         * Returns the saved rank for this rank.
         *
         * @return string
         */
        public function get_rank()
        {
        }
        /**
         * Returns a CSS class for this rank.
         *
         * @return string
         */
        public function get_css_class()
        {
        }
        /**
         * Returns a label for this rank.
         *
         * @return string
         */
        public function get_label()
        {
        }
        /**
         * Returns a label for use in a drop down.
         *
         * @return mixed
         */
        public function get_drop_down_label()
        {
        }
        /**
         * Gets the drop down labels for the readability score.
         *
         * @return string The readability rank label.
         */
        public function get_drop_down_readability_labels()
        {
        }
        /**
         * Get the starting score for this rank.
         *
         * @return int The start score.
         */
        public function get_starting_score()
        {
        }
        /**
         * Get the ending score for this rank.
         *
         * @return int The end score.
         */
        public function get_end_score()
        {
        }
        /**
         * Returns a rank for a specific numeric score.
         *
         * @param int $score The score to determine a rank for.
         *
         * @return self
         */
        public static function from_numeric_score($score)
        {
        }
        /**
         * Returns a list of all possible SEO Ranks.
         *
         * @return WPSEO_Rank[]
         */
        public static function get_all_ranks()
        {
        }
        /**
         * Returns a list of all possible Readability Ranks.
         *
         * @return WPSEO_Rank[]
         */
        public static function get_all_readability_ranks()
        {
        }
        /**
         * Converts a numeric rank into a WPSEO_Rank object, for use in functional array_* functions.
         *
         * @param string $rank SEO Rank.
         *
         * @return WPSEO_Rank
         */
        private static function create_rank($rank)
        {
        }
    }
    /**
     * Class: WPSEO_Replace_Vars.
     *
     * This class implements the replacing of `%%variable_placeholders%%` with their real value based on the current
     * requested page/post/cpt/etc in text strings.
     */
    class WPSEO_Replace_Vars
    {
        /**
         * Default post/page/cpt information.
         *
         * @var array
         */
        protected $defaults = ['ID' => '', 'name' => '', 'post_author' => '', 'post_content' => '', 'post_date' => '', 'post_excerpt' => '', 'post_modified' => '', 'post_title' => '', 'taxonomy' => '', 'term_id' => '', 'term404' => ''];
        /**
         * Current post/page/cpt information.
         *
         * @var object
         */
        protected $args;
        /**
         * The date helper.
         *
         * @var WPSEO_Date_Helper
         */
        protected $date;
        /**
         * Help texts for use in WPSEO -> Search appearance tabs.
         *
         * @var array
         */
        protected static $help_texts = [];
        /**
         * Register of additional variable replacements registered by other plugins/themes.
         *
         * @var array
         */
        protected static $external_replacements = [];
        /**
         * Constructor.
         *
         * @return \WPSEO_Replace_Vars
         */
        public function __construct()
        {
        }
        /**
         * Setup the help texts and external replacements as statics so they will be available to all instances.
         */
        public static function setup_statics_once()
        {
        }
        /**
         * Register new replacement %%variables%%.
         * For use by other plugins/themes to register extra variables.
         *
         * @see wpseo_register_var_replacement() for a usage example.
         *
         * @param string $var              The name of the variable to replace, i.e. '%%var%%'.
         *                                 Note: the surrounding %% are optional.
         * @param mixed  $replace_function Function or method to call to retrieve the replacement value for the variable.
         *                                 Uses the same format as add_filter/add_action function parameter and
         *                                 should *return* the replacement value. DON'T echo it.
         * @param string $type             Type of variable: 'basic' or 'advanced', defaults to 'advanced'.
         * @param string $help_text        Help text to be added to the help tab for this variable.
         *
         * @return bool Whether the replacement function was succesfully registered.
         */
        public static function register_replacement($var, $replace_function, $type = 'advanced', $help_text = '')
        {
        }
        /**
         * Replace `%%variable_placeholders%%` with their real value based on the current requested page/post/cpt/etc.
         *
         * @param string $string The string to replace the variables in.
         * @param array  $args   The object some of the replacement values might come from,
         *                       could be a post, taxonomy or term.
         * @param array  $omit   Variables that should not be replaced by this function.
         *
         * @return string
         */
        public function replace($string, $args, $omit = [])
        {
        }
        /**
         * Retrieve the replacements for the variables found.
         *
         * @param array $matches Variables found in the original string - regex result.
         * @param array $omit    Variables that should not be replaced by this function.
         *
         * @return array Retrieved replacements - this might be a smaller array as some variables
         *               may not yield a replacement in certain contexts.
         */
        private function set_up_replacements($matches, $omit)
        {
        }
        /* *********************** BASIC VARIABLES ************************** */
        /**
         * Retrieve the post/cpt categories (comma separated) for use as replacement string.
         *
         * @return string|null
         */
        private function retrieve_category()
        {
        }
        /**
         * Retrieve the category description for use as replacement string.
         *
         * @return string|null
         */
        private function retrieve_category_description()
        {
        }
        /**
         * Retrieve the date of the post/page/cpt for use as replacement string.
         *
         * @return string|null
         */
        private function retrieve_date()
        {
        }
        /**
         * Retrieve the post/page/cpt excerpt for use as replacement string.
         * The excerpt will be auto-generated if it does not exist.
         *
         * @return string|null
         */
        private function retrieve_excerpt()
        {
        }
        /**
         * Retrieve the post/page/cpt excerpt for use as replacement string (without auto-generation).
         *
         * @return string|null
         */
        private function retrieve_excerpt_only()
        {
        }
        /**
         * Retrieve the title of the parent page of the current page/cpt for use as replacement string.
         * Only applicable for hierarchical post types.
         *
         * @todo Check: shouldn't this use $this->args as well ?
         *
         * @return string|null
         */
        private function retrieve_parent_title()
        {
        }
        /**
         * Retrieve the current search phrase for use as replacement string.
         *
         * @return string|null
         */
        private function retrieve_searchphrase()
        {
        }
        /**
         * Retrieve the separator for use as replacement string.
         *
         * @return string
         */
        private function retrieve_sep()
        {
        }
        /**
         * Retrieve the site's tag line / description for use as replacement string.
         *
         * @return string|null
         */
        private function retrieve_sitedesc()
        {
        }
        /**
         * Retrieve the site's name for use as replacement string.
         *
         * @return string|null
         */
        private function retrieve_sitename()
        {
        }
        /**
         * Retrieve the current tag/tags for use as replacement string.
         *
         * @return string|null
         */
        private function retrieve_tag()
        {
        }
        /**
         * Retrieve the tag description for use as replacement string.
         *
         * @return string|null
         */
        private function retrieve_tag_description()
        {
        }
        /**
         * Retrieve the term description for use as replacement string.
         *
         * @return string|null
         */
        private function retrieve_term_description()
        {
        }
        /**
         * Retrieve the term name for use as replacement string.
         *
         * @return string|null
         */
        private function retrieve_term_title()
        {
        }
        /**
         * Retrieve the title of the post/page/cpt for use as replacement string.
         *
         * @return string|null
         */
        private function retrieve_title()
        {
        }
        /**
         * Retrieve primary category for use as replacement string.
         *
         * @return bool|int|null
         */
        private function retrieve_primary_category()
        {
        }
        /**
         * Retrieve the string generated by get_the_archive_title().
         *
         * @return string|null
         */
        private function retrieve_archive_title()
        {
        }
        /* *********************** ADVANCED VARIABLES ************************** */
        /**
         * Determine the page numbering of the current post/page/cpt.
         *
         * @param string $request Either 'nr'|'max' - whether to return the page number or the max number of pages.
         *
         * @return int|null
         */
        private function determine_pagenumbering($request = 'nr')
        {
        }
        /**
         * Determine the post type names for the current post/page/cpt.
         *
         * @param string $request Either 'single'|'plural' - whether to return the single or plural form.
         *
         * @return string|null
         */
        private function determine_pt_names($request = 'single')
        {
        }
        /**
         * Retrieve the attachment caption for use as replacement string.
         *
         * @return string|null
         */
        private function retrieve_caption()
        {
        }
        /**
         * Retrieve a post/page/cpt's custom field value for use as replacement string.
         *
         * @param string $var The complete variable to replace which includes the name of
         *                    the custom field which value is to be retrieved.
         *
         * @return string|null
         */
        private function retrieve_cf_custom_field_name($var)
        {
        }
        /**
         * Retrieve a post/page/cpt's custom taxonomies for use as replacement string.
         *
         * @param string $var    The complete variable to replace which includes the name of
         *                       the custom taxonomy which value(s) is to be retrieved.
         * @param bool   $single Whether to retrieve only the first or all values for the taxonomy.
         *
         * @return string|null
         */
        private function retrieve_ct_custom_tax_name($var, $single = \false)
        {
        }
        /**
         * Retrieve a post/page/cpt's custom taxonomies description for use as replacement string.
         *
         * @param string $var The complete variable to replace which includes the name of
         *                    the custom taxonomy which description is to be retrieved.
         *
         * @return string|null
         */
        private function retrieve_ct_desc_custom_tax_name($var)
        {
        }
        /**
         * Retrieve the current date for use as replacement string.
         *
         * @return string The formatted current date.
         */
        private function retrieve_currentdate()
        {
        }
        /**
         * Retrieve the current day for use as replacement string.
         *
         * @return string The current day.
         */
        private function retrieve_currentday()
        {
        }
        /**
         * Retrieve the current month for use as replacement string.
         *
         * @return string The current month.
         */
        private function retrieve_currentmonth()
        {
        }
        /**
         * Retrieve the current time for use as replacement string.
         *
         * @return string The formatted current time.
         */
        private function retrieve_currenttime()
        {
        }
        /**
         * Retrieve the current year for use as replacement string.
         *
         * @return string The current year.
         */
        private function retrieve_currentyear()
        {
        }
        /**
         * Retrieve the post/page/cpt's focus keyword for use as replacement string.
         *
         * @return string|null
         */
        private function retrieve_focuskw()
        {
        }
        /**
         * Retrieve the post/page/cpt ID for use as replacement string.
         *
         * @return string|null
         */
        private function retrieve_id()
        {
        }
        /**
         * Retrieve the post/page/cpt modified time for use as replacement string.
         *
         * @return string|null
         */
        private function retrieve_modified()
        {
        }
        /**
         * Retrieve the post/page/cpt author's "nice name" for use as replacement string.
         *
         * @return string|null
         */
        private function retrieve_name()
        {
        }
        /**
         * Retrieve the post/page/cpt author's users description for use as a replacement string.
         *
         * @return null|string
         */
        private function retrieve_user_description()
        {
        }
        /**
         * Retrieve the current page number with context (i.e. 'page 2 of 4') for use as replacement string.
         *
         * @return string
         */
        private function retrieve_page()
        {
        }
        /**
         * Retrieve the current page number for use as replacement string.
         *
         * @return string|null
         */
        private function retrieve_pagenumber()
        {
        }
        /**
         * Retrieve the current page total for use as replacement string.
         *
         * @return string|null
         */
        private function retrieve_pagetotal()
        {
        }
        /**
         * Retrieve the post type plural label for use as replacement string.
         *
         * @return string|null
         */
        private function retrieve_pt_plural()
        {
        }
        /**
         * Retrieve the post type single label for use as replacement string.
         *
         * @return string|null
         */
        private function retrieve_pt_single()
        {
        }
        /**
         * Retrieve the slug which caused the 404 for use as replacement string.
         *
         * @return string|null
         */
        private function retrieve_term404()
        {
        }
        /**
         * Retrieve the post/page/cpt author's user id for use as replacement string.
         *
         * @return string
         */
        private function retrieve_userid()
        {
        }
        /* *********************** HELP TEXT RELATED ************************** */
        /**
         * Set the help text for a user/plugin/theme defined extra variable.
         *
         * @param string                     $type                 Type of variable: 'basic' or 'advanced'.
         * @param WPSEO_Replacement_Variable $replacement_variable The replacement variable to register.
         */
        private static function register_help_text($type, \WPSEO_Replacement_Variable $replacement_variable)
        {
        }
        /**
         * Generates a list of replacement variables based on the help texts.
         *
         * @return array List of replace vars.
         */
        public function get_replacement_variables_list()
        {
        }
        /**
         * Creates a merged associative array of both the basic and advanced help texts.
         *
         * @return array Array with the replacement variables.
         */
        private function get_replacement_variables()
        {
        }
        /**
         * Checks whether the replacement variable contains a `ct_` or `cf_` prefix, because they follow different logic.
         *
         * @param string $replacement_variable The replacement variable.
         *
         * @return bool True when the replacement variable is not prefixed.
         */
        private function is_not_prefixed($replacement_variable)
        {
        }
        /**
         * Strip the prefix from a replacement variable name.
         *
         * @param string $replacement_variable The replacement variable.
         *
         * @return string The replacement variable name without the prefix.
         */
        private function strip_prefix($replacement_variable)
        {
        }
        /**
         * Gets the prefix from a replacement variable name.
         *
         * @param string $replacement_variable The replacement variable.
         *
         * @return string The prefix of the replacement variable.
         */
        private function get_prefix($replacement_variable)
        {
        }
        /**
         * Strips 'desc_' if present, and appends ' description' at the end.
         *
         * @param string $label The replacement variable.
         *
         * @return string The altered replacement variable name.
         */
        private function handle_description($label)
        {
        }
        /**
         * Creates a label for prefixed replacement variables that matches the format in the editors.
         *
         * @param string $replacement_variable The replacement variable.
         *
         * @return string The replacement variable label.
         */
        private function get_label($replacement_variable)
        {
        }
        /**
         * Formats the replacement variables.
         *
         * @param string $replacement_variable The replacement variable to format.
         *
         * @return array The formatted replacement variable.
         */
        private function format_replacement_variable($replacement_variable)
        {
        }
        /**
         * Retrieves the custom field names as an array.
         *
         * @link WordPress core: wp-admin/includes/template.php. Reused query from it.
         *
         * @return array The custom fields.
         */
        private function get_custom_fields()
        {
        }
        /**
         * Adds the cf_ prefix to a field.
         *
         * @param string $field The field to prefix.
         *
         * @return string The prefixed field.
         */
        private function add_custom_field_prefix($field)
        {
        }
        /**
         * Gets the names of the custom taxonomies, prepends 'ct_' and 'ct_desc', and returns them in an array.
         *
         * @return array The custom taxonomy prefixed names.
         */
        private function get_custom_taxonomies()
        {
        }
        /**
         * Set/translate the help texts for the WPSEO standard basic variables.
         */
        private static function set_basic_help_texts()
        {
        }
        /**
         * Set/translate the help texts for the WPSEO standard advanced variables.
         */
        private static function set_advanced_help_texts()
        {
        }
        /* *********************** GENERAL HELPER METHODS ************************** */
        /**
         * Remove the '%%' delimiters from a variable string.
         *
         * @param string $string Variable string to be cleaned.
         *
         * @return string
         */
        private static function remove_var_delimiter($string)
        {
        }
        /**
         * Add the '%%' delimiters to a variable string.
         *
         * @param string $string Variable string to be delimited.
         *
         * @return string
         */
        private static function add_var_delimiter($string)
        {
        }
        /**
         * Retrieve a post's terms, comma delimited.
         *
         * @param int    $id            ID of the post to get the terms for.
         * @param string $taxonomy      The taxonomy to get the terms for this post from.
         * @param bool   $return_single If true, return the first term.
         *
         * @return string Either a single term or a comma delimited string of terms.
         */
        public function get_terms($id, $taxonomy, $return_single = \false)
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Internals
     * @since   7.7
     */
    /**
     * Class WPSEO_Replacement_Variable.
     *
     * This class stores the data of a single snippet variable.
     */
    class WPSEO_Replacement_Variable
    {
        /**
         * The variable to use.
         *
         * @var string
         */
        protected $variable;
        /**
         * The label of the replacement variable.
         *
         * @var string
         */
        protected $label;
        /**
         * The description of the replacement variable.
         *
         * @var string
         */
        protected $description;
        /**
         * WPSEO_Replacement_Variable constructor.
         *
         * @param string $variable    The variable that is replaced.
         * @param string $label       The label of the replacement variable.
         * @param string $description The description of the replacement variable.
         *
         * @return \WPSEO_Replacement_Variable
         */
        public function __construct($variable, $label, $description)
        {
        }
        /**
         * Returns the variable to use.
         *
         * @return string
         */
        public function get_variable()
        {
        }
        /**
         * Returns the label of the replacement variable.
         *
         * @return string
         */
        public function get_label()
        {
        }
        /**
         * Returns the description of the replacement variable.
         *
         * @return string
         */
        public function get_description()
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO
     */
    /**
     * Helps with creating shortlinks in the plugin.
     */
    class WPSEO_Shortlinker
    {
        /**
         * Collects the additional data necessary for the shortlink.
         *
         * @return array The shortlink data.
         */
        protected function collect_additional_shortlink_data()
        {
        }
        /**
         * Builds a URL to use in the plugin as shortlink.
         *
         * @param string $url The URL to build upon.
         *
         * @return string The final URL.
         */
        public function build_shortlink($url)
        {
        }
        /**
         * Returns a version of the URL with a utm_content with the current version.
         *
         * @param string $url The URL to build upon.
         *
         * @return string The final URL.
         */
        public static function get($url)
        {
        }
        /**
         * Echoes a version of the URL with a utm_content with the current version.
         *
         * @param string $url The URL to build upon.
         */
        public static function show($url)
        {
        }
        /**
         * Gets the shortlink's query params.
         *
         * @return array The shortlink's query params.
         */
        public static function get_query_params()
        {
        }
        /**
         * Gets the current site's PHP version, without the extra info.
         *
         * @return string The PHP version.
         */
        private function get_php_version()
        {
        }
        /**
         * Get our software and whether it's active or not.
         *
         * @return string The software name + activation state.
         */
        private function get_software()
        {
        }
        /**
         * Gets the number of days the plugin has been active.
         *
         * @return int The number of days the plugin is active.
         */
        private function get_days_active()
        {
        }
        /**
         * Gets the user's language.
         *
         * @return string The user's language.
         */
        private function get_user_language()
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Internals
     */
    /**
     * Class that generates interesting statistics about things.
     */
    class WPSEO_Statistics
    {
        /**
         * Returns the post count for a certain SEO rank.
         *
         * @todo Merge/DRY this with the logic virtually the same in WPSEO_Metabox::column_sort_orderby().
         *
         * @param WPSEO_Rank $rank The SEO rank to get the post count for.
         *
         * @return int
         */
        public function get_post_count($rank)
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Internals
     * @since   1.8.0
     */
    /**
     * Group of utility methods for use by WPSEO.
     * All methods are static, this is just a sort of namespacing class wrapper.
     */
    class WPSEO_Utils
    {
        /**
         * Whether the PHP filter extension is enabled.
         *
         * @since 1.8.0
         *
         * @var bool $has_filters
         */
        public static $has_filters;
        /**
         * Notifications to be shown in the JavaScript console.
         *
         * @since 3.3.2
         *
         * @var array
         */
        protected static $console_notifications = [];
        /**
         * Check whether the current user is allowed to access the configuration.
         *
         * @since 1.8.0
         *
         * @return boolean
         */
        public static function grant_access()
        {
        }
        /**
         * Check whether file editing is allowed for the .htaccess and robots.txt files.
         *
         * {@internal current_user_can() checks internally whether a user is on wp-ms and adjusts accordingly.}}
         *
         * @since 1.8.0
         *
         * @return bool
         */
        public static function allow_system_file_edit()
        {
        }
        /**
         * Check if the web server is running on Apache.
         *
         * @since 1.8.0
         *
         * @return bool
         */
        public static function is_apache()
        {
        }
        /**
         * Check if the web server is running on Nginx.
         *
         * @since 1.8.0
         *
         * @return bool
         */
        public static function is_nginx()
        {
        }
        /**
         * Register a notification to be shown in the JavaScript console.
         *
         * @since 3.3.2
         *
         * @param string $identifier    Notification identifier.
         * @param string $message       Message to be shown.
         * @param bool   $one_time_only Only show once (if added multiple times).
         */
        public static function javascript_console_notification($identifier, $message, $one_time_only = \false)
        {
        }
        /**
         * Localize the console notifications to JavaScript.
         *
         * @since 3.3.2
         */
        public static function localize_console_notices()
        {
        }
        /**
         * Check whether a url is relative.
         *
         * @since 1.8.0
         *
         * @param string $url URL string to check.
         *
         * @return bool
         */
        public static function is_url_relative($url)
        {
        }
        /**
         * List all the available user roles.
         *
         * @since 1.8.0
         *
         * @return array $roles
         */
        public static function get_roles()
        {
        }
        /**
         * Standardize whitespace in a string.
         *
         * Replace line breaks, carriage returns, tabs with a space, then remove double spaces.
         *
         * @since 1.8.0
         *
         * @param string $string String input to standardize.
         *
         * @return string
         */
        public static function standardize_whitespace($string)
        {
        }
        /**
         * First strip out registered and enclosing shortcodes using native WordPress strip_shortcodes function.
         * Then strip out the shortcodes with a filthy regex, because people don't properly register their shortcodes.
         *
         * @since 1.8.0
         *
         * @param string $text Input string that might contain shortcodes.
         *
         * @return string $text String without shortcodes.
         */
        public static function strip_shortcode($text)
        {
        }
        /**
         * Recursively trim whitespace round a string value or of string values within an array.
         * Only trims strings to avoid typecasting a variable (to string).
         *
         * @since 1.8.0
         *
         * @param mixed $value Value to trim or array of values to trim.
         *
         * @return mixed Trimmed value or array of trimmed values.
         */
        public static function trim_recursive($value)
        {
        }
        /**
         * Translates a decimal analysis score into a textual one.
         *
         * @since 1.8.0
         *
         * @param int  $val       The decimal score to translate.
         * @param bool $css_value Whether to return the i18n translated score or the CSS class value.
         *
         * @return string
         */
        public static function translate_score($val, $css_value = \true)
        {
        }
        /**
         * Emulate the WP native sanitize_text_field function in a %%variable%% safe way.
         *
         * @link https://core.trac.wordpress.org/browser/trunk/src/wp-includes/formatting.php for the original.
         *
         * Sanitize a string from user input or from the db.
         *
         * - Check for invalid UTF-8;
         * - Convert single < characters to entity;
         * - Strip all tags;
         * - Remove line breaks, tabs and extra white space;
         * - Strip octets - BUT DO NOT REMOVE (part of) VARIABLES WHICH WILL BE REPLACED.
         *
         * @since 1.8.0
         *
         * @param string $value String value to sanitize.
         *
         * @return string
         */
        public static function sanitize_text_field($value)
        {
        }
        /**
         * Sanitize a url for saving to the database.
         * Not to be confused with the old native WP function.
         *
         * @todo [JRF => whomever] Check/improve url verification.
         *
         * @since 1.8.0
         *
         * @param string $value             String URL value to sanitize.
         * @param array  $allowed_protocols Optional set of allowed protocols.
         *
         * @return string
         */
        public static function sanitize_url($value, $allowed_protocols = ['http', 'https'])
        {
        }
        /**
         * Validate a value as boolean.
         *
         * @since 1.8.0
         *
         * @param mixed $value Value to validate.
         *
         * @return bool
         */
        public static function validate_bool($value)
        {
        }
        /**
         * Cast a value to bool.
         *
         * @since 1.8.0
         *
         * @param mixed $value Value to cast.
         *
         * @return bool
         */
        public static function emulate_filter_bool($value)
        {
        }
        /**
         * Validate a value as integer.
         *
         * @since 1.8.0
         *
         * @param mixed $value Value to validate.
         *
         * @return int|bool Int or false in case of failure to convert to int.
         */
        public static function validate_int($value)
        {
        }
        /**
         * Cast a value to integer.
         *
         * @since 1.8.0
         *
         * @param mixed $value Value to cast.
         *
         * @return int|bool
         */
        public static function emulate_filter_int($value)
        {
        }
        /**
         * Clears the WP or W3TC cache depending on which is used.
         *
         * @since 1.8.0
         */
        public static function clear_cache()
        {
        }
        /**
         * Flush W3TC cache after succesfull update/add of taxonomy meta option.
         *
         * @since 1.8.0
         */
        public static function flush_w3tc_cache()
        {
        }
        /**
         * Clear rewrite rules.
         *
         * @since 1.8.0
         */
        public static function clear_rewrites()
        {
        }
        /**
         * Do simple reliable math calculations without the risk of wrong results.
         *
         * @link http://floating-point-gui.de/
         * @link http://php.net/language.types.float.php See the big red warning.
         *
         * In the rare case that the bcmath extension would not be loaded, it will return the normal calculation results.
         *
         * @since 1.5.0
         * @since 1.8.0 Moved from stand-alone function to this class.
         *
         * @param mixed  $number1   Scalar (string/int/float/bool).
         * @param string $action    Calculation action to execute. Valid input:
         *                          '+' or 'add' or 'addition',
         *                          '-' or 'sub' or 'subtract',
         *                          '*' or 'mul' or 'multiply',
         *                          '/' or 'div' or 'divide',
         *                          '%' or 'mod' or 'modulus'
         *                          '=' or 'comp' or 'compare'.
         * @param mixed  $number2   Scalar (string/int/float/bool).
         * @param bool   $round     Whether or not to round the result. Defaults to false.
         *                          Will be disregarded for a compare operation.
         * @param int    $decimals  Decimals for rounding operation. Defaults to 0.
         * @param int    $precision Calculation precision. Defaults to 10.
         *
         * @return mixed Calculation Result or false if either or the numbers isn't scalar or
         *               an invalid operation was passed.
         *               - For compare the result will always be an integer.
         *               - For all other operations, the result will either be an integer (preferred)
         *                 or a float.
         */
        public static function calc($number1, $action, $number2, $round = \false, $decimals = 0, $precision = 10)
        {
        }
        /**
         * Trim whitespace and NBSP (Non-breaking space) from string.
         *
         * @since 2.0.0
         *
         * @param string $string String input to trim.
         *
         * @return string
         */
        public static function trim_nbsp_from_string($string)
        {
        }
        /**
         * Check if a string is a valid datetime.
         *
         * @since 2.0.0
         *
         * @param string $datetime String input to check as valid input for DateTime class.
         *
         * @return bool
         */
        public static function is_valid_datetime($datetime)
        {
        }
        /**
         * Format the URL to be sure it is okay for using as a redirect url.
         *
         * This method will parse the URL and combine them in one string.
         *
         * @since 2.3.0
         *
         * @param string $url URL string.
         *
         * @return mixed
         */
        public static function format_url($url)
        {
        }
        /**
         * Get plugin name from file.
         *
         * @since 2.3.3
         *
         * @param string $plugin Plugin path relative to plugins directory.
         *
         * @return string|bool
         */
        public static function get_plugin_name($plugin)
        {
        }
        /**
         * Retrieves the sitename.
         *
         * @since 3.0.0
         *
         * @return string
         */
        public static function get_site_name()
        {
        }
        /**
         * Retrieves the title separator.
         *
         * @since 3.0.0
         *
         * @return string
         */
        public static function get_title_separator()
        {
        }
        /**
         * Check if the current opened page is a Yoast SEO page.
         *
         * @since 3.0.0
         *
         * @return bool
         */
        public static function is_yoast_seo_page()
        {
        }
        /**
         * Check if the current opened page belongs to Yoast SEO Free.
         *
         * @since 3.3.0
         *
         * @param string $current_page The current page the user is on.
         *
         * @return bool
         */
        public static function is_yoast_seo_free_page($current_page)
        {
        }
        /**
         * Checks if we are in the premium or free plugin.
         *
         * @return bool True when we are in the premium plugin.
         */
        public static function is_yoast_seo_premium()
        {
        }
        /**
         * Determine if Yoast SEO is in development mode?
         *
         * Inspired by JetPack (https://github.com/Automattic/jetpack/blob/master/class.jetpack.php#L1383-L1406).
         *
         * @since 3.0.0
         *
         * @return bool
         */
        public static function is_development_mode()
        {
        }
        /**
         * Retrieve home URL with proper trailing slash.
         *
         * @since 3.3.0
         *
         * @param string      $path   Path relative to home URL.
         * @param string|null $scheme Scheme to apply.
         *
         * @return string Home URL with optional path, appropriately slashed if not.
         */
        public static function home_url($path = '', $scheme = \null)
        {
        }
        /**
         * Returns a base64 URL for the svg for use in the menu.
         *
         * @since 3.3.0
         *
         * @param bool $base64 Whether or not to return base64'd output.
         *
         * @return string
         */
        public static function get_icon_svg($base64 = \true)
        {
        }
        /**
         * Returns the SVG for the traffic light in the metabox.
         *
         * @return string
         */
        public static function traffic_light_svg()
        {
        }
        /**
         * Checks if the WP-REST-API is available.
         *
         * @since 3.6
         * @since 3.7 Introduced the $minimum_version parameter.
         *
         * @param string $minimum_version The minimum version the API should be.
         *
         * @return bool Returns true if the API is available.
         */
        public static function is_api_available($minimum_version = '2.0')
        {
        }
        /**
         * Determine whether or not the metabox should be displayed for a post type.
         *
         * @param string|null $post_type Optional. The post type to check the visibility of the metabox for.
         *
         * @return bool Whether or not the metabox should be displayed.
         */
        protected static function display_post_type_metabox($post_type = \null)
        {
        }
        /**
         * Determine whether or not the metabox should be displayed for a taxonomy.
         *
         * @param string|null $taxonomy Optional. The post type to check the visibility of the metabox for.
         *
         * @return bool Whether or not the metabox should be displayed.
         */
        protected static function display_taxonomy_metabox($taxonomy = \null)
        {
        }
        /**
         * Determines whether the metabox is active for the given identifier and type.
         *
         * @param string $identifier The identifier to check for.
         * @param string $type       The type to check for.
         *
         * @return bool Whether or not the metabox is active.
         */
        public static function is_metabox_active($identifier, $type)
        {
        }
        /**
         * Determines whether or not WooCommerce is active.
         *
         * @return bool Whether or not WooCommerce is active.
         */
        public static function is_woocommerce_active()
        {
        }
        /**
         * Determines whether the plugin is active for the entire network.
         *
         * @return bool Whether or not the plugin is network-active.
         */
        public static function is_plugin_network_active()
        {
        }
        /**
         * Getter for the Adminl10n array. Applies the wpseo_admin_l10n filter.
         *
         * @return array The Adminl10n array.
         */
        public static function get_admin_l10n()
        {
        }
        /**
         * Retrieves the analysis worker log level. Defaults to errors only.
         *
         * Uses bool YOAST_SEO_DEBUG as flag to enable logging. Off equals ERROR.
         * Uses string YOAST_SEO_DEBUG_ANALYSIS_WORKER as log level for the Analysis
         * Worker. Defaults to INFO.
         * Can be: TRACE, DEBUG, INFO, WARN or ERROR.
         *
         * @return string The log level to use.
         */
        public static function get_analysis_worker_log_level()
        {
        }
        /**
         * Returns the home url with the following modifications:
         *
         * In case of a multisite setup we return the network_home_url.
         * In case of no multisite setup we return the home_url while overriding the WPML filter.
         *
         * @codeCoverageIgnore
         *
         * @return string The home url.
         */
        public static function get_home_url()
        {
        }
        /**
         * Returns the original URL instead of the language-enriched URL.
         * This method gets automatically triggered by the wpml_get_home_url filter.
         *
         * @codeCoverageIgnore
         *
         * @param string $home_url The url altered by WPML. Unused.
         * @param string $url      The url that isn't altered by WPML.
         *
         * @return string The original url.
         */
        public static function wpml_get_home_url($home_url, $url)
        {
        }
        /**
         * Checks if the current installation supports MyYoast access tokens.
         *
         * @codeCoverageIgnore
         *
         * @return bool True if access_tokens are supported.
         */
        public static function has_access_token_support()
        {
        }
        /**
         * Prepares data for outputting as JSON.
         *
         * @param array $data The data to format.
         *
         * @return false|string The prepared JSON string.
         */
        public static function format_json_encode($data)
        {
        }
        /**
         * Output a Schema blob.
         *
         * @param array  $graph The Schema graph array to output.
         * @param string $class The (optional) class to add to the script tag.
         *
         * @return bool
         */
        public static function schema_output($graph, $class = 'yoast-schema-graph')
        {
        }
        /**
         * Returns a script tag with Schema blob.
         *
         * @param array  $graph The Schema graph array to output.
         * @param string $class The (optional) class to add to the script tag.
         *
         * @return false|string A schema blob with script tags.
         */
        public static function schema_tag($graph, $class = 'yoast-schema-graph')
        {
        }
        /**
         * Extends the allowed post tags with accessibility-related attributes.
         *
         * @param array $allowed_post_tags The allowed post tags.
         * @codeCoverageIgnore
         *
         * @return array The allowed tags including post tags, input tags and select tags.
         */
        public static function extend_kses_post_with_a11y($allowed_post_tags)
        {
        }
        /**
         * Extends the allowed post tags with input, select and option tags.
         *
         * @param array $allowed_post_tags The allowed post tags.
         * @codeCoverageIgnore
         *
         * @return array The allowed tags including post tags, input tags, select tags and option tags.
         */
        public static function extend_kses_post_with_forms($allowed_post_tags)
        {
        }
        /**
         * Gets an array of enabled features.
         *
         * @return string[] The array of enabled features.
         */
        public static function retrieve_enabled_features()
        {
        }
        /* ********************* DEPRECATED METHODS ********************* */
        /**
         * Returns the language part of a given locale, defaults to english when the $locale is empty.
         *
         * @see WPSEO_Language_Utils::get_language()
         *
         * @deprecated 9.5
         * @codeCoverageIgnore
         *
         * @param string $locale The locale to get the language of.
         *
         * @return string The language part of the locale.
         */
        public static function get_language($locale)
        {
        }
        /**
         * Returns the user locale for the language to be used in the admin.
         *
         * WordPress 4.7 introduced the ability for users to specify an Admin language
         * different from the language used on the front end. This checks if the feature
         * is available and returns the user's language, with a fallback to the site's language.
         * Can be removed when support for WordPress 4.6 will be dropped, in favor
         * of WordPress get_user_locale() that already fallbacks to the site's locale.
         *
         * @see WPSEO_Language_Utils::get_user_locale()
         *
         * @deprecated 9.5
         * @codeCoverageIgnore
         *
         * @return string The locale.
         */
        public static function get_user_locale()
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Internals
     */
    /**
     * Class WPSEO_Validator.
     */
    class WPSEO_Validator
    {
        /**
         * Validates whether the passed variable is a boolean.
         *
         * @param mixed $variable The variable to validate.
         *
         * @return bool Whether or not the passed variable is a valid boolean.
         */
        public static function is_boolean($variable)
        {
        }
        /**
         * Validates whether the passed variable is a string.
         *
         * @param mixed $variable The variable to validate.
         *
         * @return bool Whether or not the passed variable is a string.
         */
        public static function is_string($variable)
        {
        }
        /**
         * Validates whether the passed variable is a non-empty string.
         *
         * @param mixed $variable The variable to validate.
         *
         * @return bool Whether or not the passed value is a non-empty string.
         */
        public static function is_non_empty_string($variable)
        {
        }
        /**
         * Validates whether the passed variable is an integer.
         *
         * @param mixed $variable The variable to validate.
         *
         * @return bool Whether or not the passed variable is an integer.
         */
        public static function is_integer($variable)
        {
        }
        /**
         * Determines whether a particular key exists within the passed dataset.
         *
         * @param array  $data The dataset to search through.
         * @param string $key  The key to search for.
         *
         * @return bool Whether or not the key exists.
         */
        public static function key_exists(array $data, $key)
        {
        }
    }
    /**
     * Date helper class.
     *
     * @package WPSEO\Internals
     */
    /**
     * Class WPSEO_Date_Helper
     *
     * Note: Move this class with namespace to the src/helpers directory and add a class_alias for BC.
     */
    class WPSEO_Date_Helper
    {
        /**
         * Formats a given date in UTC TimeZone format.
         *
         * @param string $date   String representing the date / time.
         * @param string $format The format that the passed date should be in.
         *
         * @return string The formatted date.
         */
        public function format($date, $format = \DATE_W3C)
        {
        }
        /**
         * Formats the given timestamp to the needed format.
         *
         * @param int    $timestamp The timestamp to use for the formatting.
         * @param string $format    The format that the passed date should be in.
         *
         * @return string The formatted date.
         */
        public function format_timestamp($timestamp, $format = \DATE_W3C)
        {
        }
        /**
         * Formats a given date in UTC TimeZone format and translate it to the set language.
         *
         * @param string $date   String representing the date / time.
         * @param string $format The format that the passed date should be in.
         *
         * @return string The formatted and translated date.
         */
        public function format_translated($date, $format = \DATE_W3C)
        {
        }
        /**
         * Check if a string is a valid datetime.
         *
         * @param string $datetime String input to check as valid input for DateTime class.
         *
         * @return bool True when datatime is valid.
         */
        public function is_valid_datetime($datetime)
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Endpoint
     */
    /**
     * Represents an implementation of the WPSEO_Endpoint interface to register one or multiple endpoints.
     */
    class WPSEO_Endpoint_MyYoast_Connect implements \WPSEO_Endpoint
    {
        /**
         * The namespace to use.
         *
         * @var string
         */
        const REST_NAMESPACE = 'yoast/v1/myyoast';
        /**
         * Registers the REST routes that are available on the endpoint.
         *
         * @codeCoverageIgnore
         *
         * @return void
         */
        public function register()
        {
        }
        /**
         * Determines whether or not data can be retrieved for the registered endpoints.
         *
         * @param WP_REST_Request $request The current request.
         *
         * @return WP_REST_Response The response.
         */
        public function handle_request(\WP_REST_Request $request)
        {
        }
        /**
         * Determines whether or not data can be retrieved for the registered endpoints.
         *
         * @return bool Whether or not data can be retrieved.
         */
        public function can_retrieve_data()
        {
        }
        /**
         * Saves the client secret.
         *
         * @codeCoverageIgnore
         *
         * @param string $client_secret The secret to save.
         *
         * @return void
         */
        protected function save_secret($client_secret)
        {
        }
        /**
         * Retrieves the current client ID.
         *
         * @codeCoverageIgnore
         *
         * @return array The client ID.
         */
        protected function get_client_id()
        {
        }
        /**
         * Retrieves an instance of the client.
         *
         * @codeCoverageIgnore
         *
         * @return WPSEO_MyYoast_Client Instance of client.
         */
        protected function get_client()
        {
        }
        /**
         * Wraps the method for retrieving the home URL.
         *
         * @codeCoverageIgnore
         *
         * @return string Home URL.
         */
        protected function get_home_url()
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Internals
     */
    /**
     * Class WPSEO_Invalid_Argument_Exception.
     */
    class WPSEO_Invalid_Argument_Exception extends \InvalidArgumentException
    {
        /**
         * Creates an invalid empty parameter exception.
         *
         * @param string $name The name of the parameter.
         *
         * @return WPSEO_Invalid_Argument_Exception The exception.
         */
        public static function empty_parameter($name)
        {
        }
        /**
         * Creates an invalid parameter exception.
         *
         * @param mixed  $parameter The parameter value of the field.
         * @param string $name      The name of the field.
         * @param string $expected  The expected type.
         *
         * @return WPSEO_Invalid_Argument_Exception The exception.
         */
        public static function invalid_parameter_type($parameter, $name, $expected)
        {
        }
        /**
         * Creates an invalid integer parameter exception.
         *
         * @param mixed  $parameter The parameter value of the field.
         * @param string $name      The name of the field.
         *
         * @return WPSEO_Invalid_Argument_Exception The exception.
         */
        public static function invalid_integer_parameter($parameter, $name)
        {
        }
        /**
         * Creates an invalid string parameter exception.
         *
         * @param mixed  $parameter The parameter value of the field.
         * @param string $name      The name of the field.
         *
         * @return WPSEO_Invalid_Argument_Exception The exception.
         */
        public static function invalid_string_parameter($parameter, $name)
        {
        }
        /**
         * Creates an invalid boolean parameter exception.
         *
         * @param mixed  $parameter The parameter value of the field.
         * @param string $name      The name of the field.
         *
         * @return WPSEO_Invalid_Argument_Exception The exception.
         */
        public static function invalid_boolean_parameter($parameter, $name)
        {
        }
        /**
         * Creates an invalid callable parameter exception.
         *
         * @param mixed  $parameter The parameter value of the field.
         * @param string $name      The name of the field.
         *
         * @return WPSEO_Invalid_Argument_Exception The exception.
         */
        public static function invalid_callable_parameter($parameter, $name)
        {
        }
        /**
         * Creates an invalid object type exception.
         *
         * @param string $type The type of the field.
         *
         * @return WPSEO_Invalid_Argument_Exception The exception.
         */
        public static function invalid_type($type)
        {
        }
        /**
         * Creates an invalid object subtype exception.
         *
         * @param string $subtype The invalid subtype.
         * @param string $type    The parent type of the subtype.
         *
         * @return WPSEO_Invalid_Argument_Exception The exception.
         */
        public static function invalid_subtype($subtype, $type)
        {
        }
        /**
         * Creates an unknown object exception.
         *
         * @param int    $id   The ID that was searched for.
         * @param string $type The type of object that was being searched for.
         *
         * @return WPSEO_Invalid_Argument_Exception The exception.
         */
        public static function unknown_object($id, $type)
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Internals
     */
    /**
     * Class WPSEO_Invalid_Indexable_Exception.
     */
    class WPSEO_Invalid_Indexable_Exception extends \InvalidArgumentException
    {
        /**
         * Creates an invalid indexable exception.
         *
         * @param int $id The ID that was passed.
         *
         * @return WPSEO_Invalid_Indexable_Exception The exception.
         */
        public static function non_existing_indexable($id)
        {
        }
        /**
         * Creates an invalid POST request exception.
         *
         * @param int $id The ID that was passed.
         *
         * @return WPSEO_Invalid_Indexable_Exception The exception.
         */
        public static function invalid_post_request($id)
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Internals
     */
    /**
     * Class WPSEO_MyYoast_Bad_Request_Exception.
     */
    class WPSEO_MyYoast_Bad_Request_Exception extends \Exception
    {
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Internals
     */
    /**
     * Class WPSEO_MyYoast_Authentication_Exception.
     */
    class WPSEO_MyYoast_Authentication_Exception extends \WPSEO_MyYoast_Bad_Request_Exception
    {
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Internals
     */
    /**
     * Class WPSEO_REST_Request_Exception.
     */
    class WPSEO_REST_Request_Exception extends \Exception
    {
        /**
         * Creates a patch failure exception.
         *
         * @param string $object_type The name of the parameter.
         * @param string $object_id   The ID of the parameter.
         *
         * @return WPSEO_REST_Request_Exception The exception.
         */
        public static function patch($object_type, $object_id)
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Internals
     */
    /**
     * Represents the abstract class for the health check.
     */
    abstract class WPSEO_Health_Check
    {
        /**
         * The health check section in which 'good' results should be shown.
         *
         * @var string
         */
        const STATUS_GOOD = 'good';
        /**
         * The health check section in which 'recommended' results should be shown.
         *
         * @var string
         */
        const STATUS_RECOMMENDED = 'recommended';
        /**
         * The health check section in which 'critical' results should be shown.
         *
         * @var string
         */
        const STATUS_CRITICAL = 'critical';
        /**
         * The value of the section header in the Health check.
         *
         * @var string
         */
        protected $label = '';
        /**
         * Section the result should be displayed in.
         *
         * @var string
         */
        protected $status = '';
        /**
         * What the badge should say with a color.
         *
         * @var array
         */
        protected $badge = ['label' => '', 'color' => ''];
        /**
         * Additional details about the results of the test.
         *
         * @var string
         */
        protected $description = '';
        /**
         * A link or button to allow the end user to take action on the result.
         *
         * @var string
         */
        protected $actions = '';
        /**
         * The name of the test.
         *
         * @var string
         */
        protected $test = '';
        /**
         * Whether or not the test should be ran on AJAX as well.
         *
         * @var bool True when is async, default false.
         */
        protected $async = \false;
        /**
         * Runs the test and returns the result.
         */
        public abstract function run();
        /**
         * Registers the test to WordPress.
         */
        public function register_test()
        {
        }
        /**
         * Runs the test.
         *
         * @param array $tests Array with the current tests.
         *
         * @return array The extended array.
         */
        public function add_test($tests)
        {
        }
        /**
         * Runs the test in async mode.
         *
         * @param array $tests Array with the current tests.
         *
         * @return array The extended array.
         */
        public function add_async_test($tests)
        {
        }
        /**
         * Formats the test result as an array.
         *
         * @return array The formatted test result.
         */
        public function get_test_result()
        {
        }
        /**
         * Formats the test result as an array.
         */
        public function get_async_test_result()
        {
        }
        /**
         * Retrieves the badge and ensure usable values are set.
         *
         * @return array The proper formatted badge.
         */
        protected function get_badge()
        {
        }
        /**
         * WordPress converts the underscores to dashes. To prevent issues we have
         * to do it as well.
         *
         * @return string The formatted testname.
         */
        protected function get_test_name()
        {
        }
        /**
         * Checks if the health check is async.
         *
         * @return bool True when check is async.
         */
        protected function is_async()
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Internals
     */
    /**
     * Represents the health check for paginated comments.
     */
    class WPSEO_Health_Check_Page_Comments extends \WPSEO_Health_Check
    {
        /**
         * The name of the test.
         *
         * @var string
         */
        protected $test = 'yoast-health-check-page-comments';
        /**
         * Runs the test.
         */
        public function run()
        {
        }
        /**
         * Are page comments enabled.
         *
         * @return bool True when page comments are enabled.
         */
        protected function has_page_comments()
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Indexables
     */
    /**
     * Class WPSEO_Indexable.
     */
    abstract class WPSEO_Indexable
    {
        /**
         * The updateable fields.
         *
         * @var array
         */
        protected $updateable_fields = [];
        /**
         * The indexable's data.
         *
         * @var array
         */
        protected $data;
        /**
         * The available validators to run.
         *
         * @var array
         */
        protected $validators = ['WPSEO_Object_Type_Validator', 'WPSEO_Link_Validator', 'WPSEO_Keyword_Validator', 'WPSEO_Meta_Values_Validator', 'WPSEO_OpenGraph_Validator', 'WPSEO_Robots_Validator', 'WPSEO_Twitter_Validator'];
        /**
         * Indexable constructor.
         *
         * @param array $data The data to use to construct the indexable.
         */
        public function __construct($data)
        {
        }
        /**
         * Converts the meta value to a boolean value.
         *
         * @param string $value The value to convert.
         *
         * @return bool|null The converted value.
         */
        protected static function get_robots_noindex_value($value)
        {
        }
        /**
         * Determines whether the advanced robot metas value contains the passed value.
         *
         * @param int    $object_id The ID of the object to check.
         * @param string $value     The name of the advanced robots meta value to look for.
         *
         * @return bool Whether or not the advanced robots meta values contains the passed string.
         */
        protected static function has_advanced_meta_value($object_id, $value)
        {
        }
        /**
         * Validates the data.
         *
         * @param array $data The data to validate.
         *
         * @return bool True if all validators have successfully validated.
         */
        protected function validate_data($data)
        {
        }
        /**
         * Updates the data and returns a new instance.
         *
         * @param array $data The data to update into a new instance.
         *
         * @return WPSEO_Indexable A new instance with the updated data.
         */
        public abstract function update($data);
        /**
         * Filters out data that isn't considered updateable and returns a valid dataset.
         *
         * @param array $data The dataset to filter.
         *
         * @return array The updateable dataset.
         */
        public function filter_updateable_data($data)
        {
        }
        /**
         * Returns the data as an array.
         *
         * @return array The data as an array.
         */
        public function to_array()
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Indexables
     */
    /**
     * Class WPSEO_Post_Indexable.
     */
    abstract class WPSEO_Object_Type
    {
        /**
         * The ID of the object.
         *
         * @var int
         */
        protected $id;
        /**
         * The type of the object.
         *
         * @var string
         */
        protected $type;
        /**
         * The subtype of the object.
         *
         * @var string
         */
        protected $sub_type;
        /**
         * The permalink of the object.
         *
         * @var string
         */
        protected $permalink;
        /**
         * WPSEO_Object_Type constructor.
         *
         * @param int    $id        The ID of the object.
         * @param string $type      The type of object.
         * @param string $subtype   The subtype of the object.
         * @param string $permalink The permalink of the object.
         */
        public function __construct($id, $type, $subtype, $permalink)
        {
        }
        /**
         * Gets the ID.
         *
         * @return int The ID.
         */
        public function get_id()
        {
        }
        /**
         * Gets the type.
         *
         * @return string The type.
         */
        public function get_type()
        {
        }
        /**
         * Gets the subtype.
         *
         * @return string The subtype.
         */
        public function get_subtype()
        {
        }
        /**
         * Gets the permalink.
         *
         * @return string The permalink.
         */
        public function get_permalink()
        {
        }
        /**
         * Determines whether the passed type is equal to the object's type.
         *
         * @param string $type The type to check.
         *
         * @return bool Whether or not the passed type is equal.
         */
        public function is_type($type)
        {
        }
        /**
         * Determines whether the passed subtype is equal to the object's subtype.
         *
         * @param string $sub_type The subtype to check.
         *
         * @return bool Whether or not the passed subtype is equal.
         */
        public function is_subtype($sub_type)
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Indexables
     */
    /**
     * Class WPSEO_Post_Indexable.
     */
    class WPSEO_Post_Indexable extends \WPSEO_Indexable
    {
        /**
         * The updateable fields.
         *
         * @var array
         */
        protected $updateable_fields = ['canonical', 'title', 'description', 'breadcrumb_title', 'og_title', 'og_description', 'og_image', 'twitter_title', 'twitter_description', 'twitter_image', 'is_robots_noindex', 'is_robots_nofollow', 'is_robots_noarchive', 'is_robots_noimageindex', 'is_robots_nosnippet', 'primary_focus_keyword', 'primary_focus_keyword', 'primary_focus_keyword_score', 'readability_score', 'is_cornerstone'];
        /**
         * Creates a new Indexable from a passed object.
         *
         * @param int $object_id The object ID to create the object for.
         *
         * @return WPSEO_Indexable The indexable.
         *
         * @throws WPSEO_Invalid_Argument_Exception Thrown if the passed ID is not for an object of type 'post'.
         */
        public static function from_object($object_id)
        {
        }
        /**
         * Updates the data and returns a new instance.
         *
         * @param array $data The data to update into a new instance.
         *
         * @return WPSEO_Indexable A new instance with the updated data.
         */
        public function update($data)
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Indexables
     */
    /**
     * Class WPSEO_Post_Object_Type.
     */
    class WPSEO_Post_Object_Type extends \WPSEO_Object_Type
    {
        /**
         * Creates a new instance based on the passed object ID.
         *
         * @param int $object_id The object ID to base the object on.
         *
         * @return WPSEO_Post_Object_Type The class instance.
         *
         * @throws WPSEO_Invalid_Argument_Exception Thrown if the post is null.
         */
        public static function from_object($object_id)
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Indexables
     */
    /**
     * Class WPSEO_Term_Indexable.
     */
    class WPSEO_Term_Indexable extends \WPSEO_Indexable
    {
        /**
         * The updateable fields.
         *
         * @var array
         */
        protected $updateable_fields = ['canonical', 'title', 'description', 'breadcrumb_title', 'og_title', 'og_description', 'og_image', 'twitter_title', 'twitter_description', 'twitter_image', 'is_robots_noindex', 'primary_focus_keyword', 'primary_focus_keyword', 'primary_focus_keyword_score', 'readability_score'];
        /**
         * Creates a new Indexable from a passed object.
         *
         * @param int $object_id The object ID to create the object for.
         *
         * @return WPSEO_Indexable The indexable.
         *
         * @throws WPSEO_Invalid_Argument_Exception Thrown if the passed ID is not for an object of type 'term'.
         */
        public static function from_object($object_id)
        {
        }
        /**
         * Updates the data and returns a new instance.
         *
         * @param array $data The data to update into a new instance.
         *
         * @return WPSEO_Indexable A new instance with the updated data.
         */
        public function update($data)
        {
        }
        /**
         * Returns the needed term meta field.
         *
         * @param string                 $field The requested field.
         * @param WPSEO_Term_Object_Type $term  The term object.
         *
         * @return bool|mixed The value of the requested field.
         */
        protected static function get_meta_value($field, $term)
        {
        }
        /**
         * Converts the meta value to a boolean value.
         *
         * @param string $value The value to convert.
         *
         * @return bool|null The converted value.
         */
        protected static function get_robots_noindex_value($value)
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Indexables
     */
    /**
     * Class WPSEO_Term_Object_Type.
     */
    class WPSEO_Term_Object_Type extends \WPSEO_Object_Type
    {
        /**
         * Creates a new instance based on the passed object ID.
         *
         * @param int $object_id The object ID to base the object on.
         *
         * @return WPSEO_Term_Object_Type The class instance.
         *
         * @throws WPSEO_Invalid_Argument_Exception Thrown if the term is null or if a WordPress error is thrown.
         */
        public static function from_object($object_id)
        {
        }
    }
    /**
     * WPSEO interface file.
     *
     * @package WPSEO\Indexables
     */
    /**
     * Interface WPSEO_Endpoint_Validator.
     */
    interface WPSEO_Endpoint_Validator
    {
        /**
         * Validates the passed request data.
         *
         * @param array $request_data The request data to validate.
         *
         * @return void
         */
        public function validate($request_data);
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Indexables
     */
    /**
     * Class WPSEO_Keyword_Validator.
     */
    class WPSEO_Keyword_Validator implements \WPSEO_Endpoint_Validator
    {
        /**
         * Validates the keyword-related data.
         *
         * @param array $request_data The request data to validate.
         *
         * @throws WPSEO_Invalid_Argument_Exception Thrown if the keyword or the score is of an invalid value type.
         */
        public function validate($request_data)
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Indexables
     */
    /**
     * Class WPSEO_Link_Validator.
     */
    class WPSEO_Link_Validator implements \WPSEO_Endpoint_Validator
    {
        /**
         * Validates the link-related data.
         *
         * @param array $request_data The request data to validate.
         *
         * @throws WPSEO_Invalid_Argument_Exception Thrown if the link-data count or incoming count is of an invalid value type.
         */
        public function validate($request_data)
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Indexables
     */
    /**
     * Class WPSEO_Meta_Values_Validator.
     */
    class WPSEO_Meta_Values_Validator implements \WPSEO_Endpoint_Validator
    {
        /**
         * Validates the meta values data.
         *
         * @param array $request_data The request data to validate.
         *
         * @return void
         *
         * @throws WPSEO_Invalid_Argument_Exception Thrown if a field from the request data is of an invalid value type.
         */
        public function validate($request_data)
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Indexables
     */
    /**
     * Class WPSEO_Object_Type_Validator.
     */
    class WPSEO_Object_Type_Validator implements \WPSEO_Endpoint_Validator
    {
        /**
         * Validates the object_type parameter.
         *
         * @param string $object_type The object type to validate.
         *
         * @return void
         *
         * @throws WPSEO_Invalid_Argument_Exception Thrown is the object type is invalid.
         */
        private static function validate_type($object_type)
        {
        }
        /**
         * Validates whether the passed subtype is valid or not.
         *
         * @param string $type    The type to validate.
         * @param string $subtype The subtype to validate.
         *
         * @return void
         *
         * @throws WPSEO_Invalid_Argument_Exception Thrown if the subtype doesn't exist for the given type.
         */
        private static function validate_subtype($type, $subtype)
        {
        }
        /**
         * Validates the object type-related data.
         *
         * @param array $request_data The request data to validate.
         *
         * @return void
         *
         * @throws WPSEO_Invalid_Argument_Exception Thrown if the type or subtype are invalid.
         */
        public function validate($request_data)
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Indexables
     */
    /**
     * Class WPSEO_OpenGraph_Validator.
     */
    class WPSEO_OpenGraph_Validator implements \WPSEO_Endpoint_Validator
    {
        /**
         * Validates the OpenGraph-related data.
         *
         * @param array $request_data The request data to validate.
         *
         * @return void
         *
         * @throws WPSEO_Invalid_Argument_Exception Thrown if one of the OpenGraph properties is of an invalid value type.
         */
        public function validate($request_data)
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Indexables
     */
    /**
     * Class WPSEO_Robots_Validator.
     */
    class WPSEO_Robots_Validator implements \WPSEO_Endpoint_Validator
    {
        /**
         * The robots keys to validate.
         *
         * @var array
         */
        private $robots_to_validate = ['is_robots_nofollow', 'is_robots_noarchive', 'is_robots_noimageindex', 'is_robots_nosnippet', 'is_robots_noindex'];
        /**
         * Validates the passed request data.
         *
         * @param array $request_data The request data to validate.
         *
         * @return void
         *
         * @throws WPSEO_Invalid_Argument_Exception Thrown if the robots values are not a boolean type.
         */
        public function validate($request_data)
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Indexables
     */
    /**
     * Class WPSEO_Twitter_Validator.
     */
    class WPSEO_Twitter_Validator implements \WPSEO_Endpoint_Validator
    {
        /**
         * Validates the Twitter-related data.
         *
         * @param array $request_data The request data to validate.
         *
         * @return void
         *
         * @throws WPSEO_Invalid_Argument_Exception Thrown if one of the Twitter properties is of an invalid value type.
         */
        public function validate($request_data)
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO
     */
    /**
     * An interface for registering AJAX integrations with WordPress.
     */
    interface WPSEO_WordPress_AJAX_Integration
    {
        /**
         * Registers all AJAX hooks to WordPress.
         *
         * @return void
         */
        public function register_ajax_hooks();
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Internals
     * @since   5.9.0
     */
    /**
     * Group of language utility methods for use by WPSEO.
     * All methods are static, this is just a sort of namespacing class wrapper.
     */
    class WPSEO_Language_Utils
    {
        /**
         * Returns the language part of a given locale, defaults to english when the $locale is empty.
         *
         * @param string $locale The locale to get the language of.
         *
         * @return string The language part of the locale.
         */
        public static function get_language($locale = \null)
        {
        }
        /**
         * Returns the user locale for the language to be used in the admin.
         *
         * WordPress 4.7 introduced the ability for users to specify an Admin language
         * different from the language used on the front end. This checks if the feature
         * is available and returns the user's language, with a fallback to the site's language.
         * Can be removed when support for WordPress 4.6 will be dropped, in favor
         * of WordPress get_user_locale() that already fallbacks to the site's locale.
         *
         * @return string The locale.
         */
        public static function get_user_locale()
        {
        }
        /**
         * Returns the full name for the sites' language.
         *
         * @return string The language name.
         */
        public static function get_site_language_name()
        {
        }
        /**
         * Returns the l10n array for the knowledge graph company info missing.
         *
         * @return array The l10n array.
         */
        public static function get_knowledge_graph_company_info_missing_l10n()
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Internals\Options
     */
    /**
     * This abstract class and it's concrete classes implement defaults and value validation for
     * all WPSEO options and subkeys within options.
     *
     * Some guidelines:
     * [Retrieving options]
     * - Use the normal get_option() to retrieve an option. You will receive a complete array for the option.
     *   Any subkeys which were not set, will have their default values in place.
     * - In other words, you will normally not have to check whether a subkey isset() as they will *always* be set.
     *   They will also *always* be of the correct variable type.
     *   The only exception to this are the options with variable option names based on post_type or taxonomy
     *   as those will not always be available before the taxonomy/post_type is registered.
     *   (they will be available if a value was set, they won't be if it wasn't as the class won't know
     *   that a default needs to be injected).
     *
     * [Updating/Adding options]
     * - For multisite site_options, please use the WPSEO_Options::update_site_option() method.
     * - For normal options, use the normal add/update_option() functions. As long a the classes here
     *   are instantiated, validation for all options and their subkeys will be automatic.
     * - On (succesfull) update of a couple of options, certain related actions will be run automatically.
     *   Some examples:
     *   - on change of wpseo[yoast_tracking], the cron schedule will be adjusted accordingly
     *   - on change of wpseo and wpseo_title, some caches will be cleared
     *
     * [Important information about add/updating/changing these classes]
     * - Make sure that option array key names are unique across options. The WPSEO_Options::get_all()
     *   method merges most options together. If any of them have non-unique names, even if they
     *   are in a different option, they *will* overwrite each other.
     * - When you add a new array key in an option: make sure you add proper defaults and add the key
     *   to the validation routine in the proper place or add a new validation case.
     *   You don't need to do any upgrading as any option returned will always be merged with the
     *   defaults, so new options will automatically be available.
     *   If the default value is a string which need translating, add this to the concrete class
     *   translate_defaults() method.
     * - When you remove an array key from an option: if it's important that the option is really removed,
     *   add the WPSEO_Option::clean_up( $option_name ) method to the upgrade run.
     *   This will re-save the option and automatically remove the array key no longer in existance.
     * - When you rename a sub-option: add it to the clean_option() routine and run that in the upgrade run.
     * - When you change the default for an option sub-key, make sure you verify that the validation routine will
     *   still work the way it should.
     *   Example: changing a default from '' (empty string) to 'text' with a validation routine with tests
     *   for an empty string will prevent a user from saving an empty string as the real value. So the
     *   test for '' with the validation routine would have to be removed in that case.
     * - If an option needs specific actions different from defined in this abstract class, you can just overrule
     *   a method by defining it in the concrete class.
     *
     * @todo [JRF => testers] Double check that validation will not cause errors when called
     *       from upgrade routine (some of the WP functions may not yet be available).
     */
    abstract class WPSEO_Option
    {
        /**
         * Prefix for override option keys that allow or disallow the option key of the same name.
         *
         * @var string
         */
        const ALLOW_KEY_PREFIX = 'allow_';
        /**
         * Option name - MUST be set in concrete class and set to public.
         *
         * @var string
         */
        protected $option_name;
        /**
         * Option group name for use in settings forms.
         *
         * Will be set automagically if not set in concrete class (i.e.
         * if it confirm to the normal pattern 'yoast' . $option_name . 'options',
         * only set in conrete class if it doesn't).
         *
         * @var string
         */
        public $group_name;
        /**
         * Whether to include the option in the return for WPSEO_Options::get_all().
         *
         * Also determines which options are copied over for ms_(re)set_blog().
         *
         * @var bool
         */
        public $include_in_all = \true;
        /**
         * Whether this option is only for when the install is multisite.
         *
         * @var bool
         */
        public $multisite_only = \false;
        /**
         * Array of defaults for the option - MUST be set in concrete class.
         *
         * Shouldn't be requested directly, use $this->get_defaults();
         *
         * @var array
         */
        protected $defaults;
        /**
         * Array of variable option name patterns for the option - if any -.
         *
         * Set this when the option contains array keys which vary based on post_type
         * or taxonomy.
         *
         * @var array
         */
        protected $variable_array_key_patterns;
        /**
         * Array of sub-options which should not be overloaded with multi-site defaults.
         *
         * @var array
         */
        public $ms_exclude = [];
        /**
         * Name for an option higher in the hierarchy to override setting access.
         *
         * @var string
         */
        protected $override_option_name;
        /**
         * Instance of this class.
         *
         * @var object
         */
        protected static $instance;
        /* *********** INSTANTIATION METHODS *********** */
        /**
         * Add all the actions and filters for the option.
         *
         * @return \WPSEO_Option
         */
        protected function __construct()
        {
        }
        // @codingStandardsIgnoreStart
        /**
         * All concrete classes *must* contain the get_instance method.
         *
         * {@internal Unfortunately I can't define it as an abstract as it also *has* to be static...}}
         */
        // abstract protected static function get_instance();
        /**
         * Concrete classes *may* contain a translate_defaults method.
         */
        // abstract public function translate_defaults();
        /**
         * Concrete classes *may* contain a enrich_defaults method to add additional defaults once
         * all post_types and taxonomies have been registered.
         */
        // abstract public function enrich_defaults();
        /* *********** METHODS INFLUENCING get_option() *********** */
        /**
         * Add filters to make sure that the option default is returned if the option is not set.
         *
         * @return void
         */
        public function add_default_filters()
        {
        }
        // @codingStandardsIgnoreStart
        /**
         * Validate webmaster tools & Pinterest verification strings.
         *
         * @param string $key   Key to check, by type of service.
         * @param array  $dirty Dirty data with the new values.
         * @param array  $old   Old data.
         * @param array  $clean Clean data by reference, normally the default values.
         */
        public function validate_verification_string($key, $dirty, $old, &$clean)
        {
        }
        /**
         * Validates an option as a valid URL. Prints out a WordPress settings error
         * notice if the URL is invalid.
         *
         * @param string $key   Key to check, by type of URL setting.
         * @param array  $dirty Dirty data with the new values.
         * @param array  $old   Old data.
         * @param array  $clean Clean data by reference, normally the default values.
         */
        public function validate_url($key, $dirty, $old, &$clean)
        {
        }
        /**
         * Validates a Facebook App ID.
         *
         * @param string $key   Key to check, in this case: the Facebook App ID field name.
         * @param array  $dirty Dirty data with the new values.
         * @param array  $old   Old data.
         * @param array  $clean Clean data by reference, normally the default values.
         */
        public function validate_facebook_app_id($key, $dirty, $old, &$clean)
        {
        }
        /**
         * Remove the default filters.
         * Called from the validate() method to prevent failure to add new options.
         *
         * @return void
         */
        public function remove_default_filters()
        {
        }
        /**
         * Get the enriched default value for an option.
         *
         * Checks if the concrete class contains an enrich_defaults() method and if so, runs it.
         *
         * {@internal The enrich_defaults method is used to set defaults for variable array keys
         *            in an option, such as array keys depending on post_types and/or taxonomies.}}
         *
         * @return array
         */
        public function get_defaults()
        {
        }
        /**
         * Add filters to make sure that the option is merged with its defaults before being returned.
         *
         * @return void
         */
        public function add_option_filters()
        {
        }
        /**
         * Remove the option filters.
         * Called from the clean_up methods to make sure we retrieve the original old option.
         *
         * @return void
         */
        public function remove_option_filters()
        {
        }
        /**
         * Merge an option with its default values.
         *
         * This method should *not* be called directly!!! It is only meant to filter the get_option() results.
         *
         * @param mixed $options Option value.
         *
         * @return mixed Option merged with the defaults for that option.
         */
        public function get_option($options = \null)
        {
        }
        /* *********** METHODS influencing add_uption(), update_option() and saving from admin pages. *********** */
        /**
         * Register (whitelist) the option for the configuration pages.
         * The validation callback is already registered separately on the sanitize_option hook,
         * so no need to double register.
         *
         * @return void
         */
        public function register_setting()
        {
        }
        /**
         * Validate the option
         *
         * @param mixed $option_value The unvalidated new value for the option.
         *
         * @return array Validated new value for the option.
         */
        public function validate($option_value)
        {
        }
        /**
         * Checks whether a specific option key is disabled.
         *
         * This is determined by whether an override option is available with a key that equals the given key prefixed
         * with 'allow_'.
         *
         * @param string $key Option key.
         *
         * @return bool True if option key is disabled, false otherwise.
         */
        public function is_disabled($key)
        {
        }
        /**
         * All concrete classes must contain a validate_option() method which validates all
         * values within the option.
         *
         * @param array $dirty New value for the option.
         * @param array $clean Clean value for the option, normally the defaults.
         * @param array $old   Old value of the option.
         */
        protected abstract function validate_option($dirty, $clean, $old);
        /* *********** METHODS for ADDING/UPDATING/UPGRADING the option. *********** */
        /**
         * Retrieve the real old value (unmerged with defaults).
         *
         * @return array|bool The original option value (which can be false if the option doesn't exist).
         */
        protected function get_original_option()
        {
        }
        /**
         * Add the option if it doesn't exist for some strange reason.
         *
         * @uses WPSEO_Option::get_original_option()
         *
         * @return void
         */
        public function maybe_add_option()
        {
        }
        /**
         * Update a site_option.
         *
         * {@internal This special method is only needed for multisite options, but very needed indeed there.
         *            The order in which certain functions and hooks are run is different between
         *            get_option() and get_site_option() which means in practice that the removing
         *            of the default filters would be done too late and the re-adding of the default
         *            filters might not be done at all.
         *            Aka: use the WPSEO_Options::update_site_option() method (which calls this method)
         *            for safely adding/updating multisite options.}}
         *
         * @param mixed $value The new value for the option.
         *
         * @return bool Whether the update was succesfull.
         */
        public function update_site_option($value)
        {
        }
        /**
         * Retrieve the real old value (unmerged with defaults), clean and re-save the option.
         *
         * @uses WPSEO_Option::get_original_option()
         * @uses WPSEO_Option::import()
         *
         * @param string $current_version Optional. Version from which to upgrade, if not set,
         *                                version specific upgrades will be disregarded.
         *
         * @return void
         */
        public function clean($current_version = \null)
        {
        }
        /**
         * Clean and re-save the option.
         *
         * @uses clean_option() method from concrete class if it exists.
         *
         * @todo [JRF/whomever] Figure out a way to show settings error during/after the upgrade - maybe
         * something along the lines of:
         * -> add them to a property in this class
         * -> if that property isset at the end of the routine and add_settings_error function does not exist,
         *    save as transient (or update the transient if one already exists)
         * -> next time an admin is in the WP back-end, show the errors and delete the transient or only delete it
         *    once the admin has dismissed the message (add ajax function)
         * Important: all validation routines which add_settings_errors would need to be changed for this to work
         *
         * @param array  $option_value          Option value to be imported.
         * @param string $current_version       Optional. Version from which to upgrade, if not set,
         *                                      version specific upgrades will be disregarded.
         * @param array  $all_old_option_values Optional. Only used when importing old options to
         *                                      have access to the real old values, in contrast to
         *                                      the saved ones.
         *
         * @return void
         */
        public function import($option_value, $current_version = \null, $all_old_option_values = \null)
        {
        }
        /**
         * Returns the variable array key patterns for an options class.
         *
         * @return array
         */
        public function get_patterns()
        {
        }
        /**
         * Retrieves the option name.
         *
         * @return string The set option name.
         */
        public function get_option_name()
        {
        }
        /**
         * Concrete classes *may* contain a clean_option method which will clean out old/renamed
         * values within the option.
         */
        // abstract public function clean_option( $option_value, $current_version = null, $all_old_option_values = null );
        /* *********** HELPER METHODS for internal use. *********** */
        /**
         * Helper method - Combines a fixed array of default values with an options array
         * while filtering out any keys which are not in the defaults array.
         *
         * @todo [JRF] - shouldn't this be a straight array merge ? at the end of the day, the validation
         * removes any invalid keys on save.
         *
         * @param array $options Optional. Current options. If not set, the option defaults
         *                       for the $option_key will be returned.
         *
         * @return array Combined and filtered options array.
         */
        protected function array_filter_merge($options = \null)
        {
        }
        /**
         * Sets updated values for variables that are disabled via the override option back to their previous values.
         *
         * @param array $updated Updated option value.
         * @param array $old     Old option value.
         *
         * @return array Updated option value, with all disabled variables set to their old values.
         */
        protected function prevent_disabled_options_update($updated, $old)
        {
        }
        /**
         * Retrieves the value of the override option, if available.
         *
         * An override option contains values that may determine access to certain sub-variables
         * of this option.
         *
         * Only regular options in multisite can have override options, which in that case
         * would be network options.
         *
         * @return array Override option value, or empty array if unavailable.
         */
        protected function get_override_option()
        {
        }
        /**
         * Make sure that any set option values relating to post_types and/or taxonomies are retained,
         * even when that post_type or taxonomy may not yet have been registered.
         *
         * {@internal The wpseo_titles concrete class overrules this method. Make sure that any
         *            changes applied here, also get ported to that version.}}
         *
         * @param array $dirty Original option as retrieved from the database.
         * @param array $clean Filtered option where any options which shouldn't be in our option
         *                     have already been removed and any options which weren't set
         *                     have been set to their defaults.
         *
         * @return array
         */
        protected function retain_variable_keys($dirty, $clean)
        {
        }
        /**
         * Check whether a given array key conforms to one of the variable array key patterns for this option.
         *
         * @usedby validate_option() methods for options with variable array keys.
         *
         * @param string $key Array key to check.
         *
         * @return string Pattern if it conforms, original array key if it doesn't or if the option
         *                does not have variable array keys.
         */
        protected function get_switch_key($key)
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Internals\Options
     */
    /**
     * Site option for Multisite installs only
     *
     * Overloads a number of methods of the abstract class to ensure the use of the correct site_option
     * WP functions.
     */
    class WPSEO_Option_MS extends \WPSEO_Option
    {
        /**
         * Option name.
         *
         * @var string
         */
        public $option_name = 'wpseo_ms';
        /**
         * Option group name for use in settings forms.
         *
         * @var string
         */
        public $group_name = 'yoast_wpseo_multisite_options';
        /**
         * Whether to include the option in the return for WPSEO_Options::get_all().
         *
         * @var bool
         */
        public $include_in_all = \false;
        /**
         * Whether this option is only for when the install is multisite.
         *
         * @var bool
         */
        public $multisite_only = \true;
        /**
         * Array of defaults for the option.
         *
         * Shouldn't be requested directly, use $this->get_defaults();
         *
         * @var array
         */
        protected $defaults = [];
        /**
         * Available options for the 'access' setting. Used for input validation.
         *
         * {@internal Important: Make sure the options added to the array here are in line
         *            with the keys for the options set for the select box in the
         *            admin/pages/network.php file.}}
         *
         * @var array
         */
        public static $allowed_access_options = ['admin', 'superadmin'];
        /**
         * Get the singleton instance of this class.
         *
         * @return object
         */
        public static function get_instance()
        {
        }
        /**
         * Only run parent constructor in multisite context.
         */
        public function __construct()
        {
        }
        /**
         * Add filters to make sure that the option default is returned if the option is not set
         *
         * @return void
         */
        public function add_default_filters()
        {
        }
        /**
         * Remove the default filters.
         * Called from the validate() method to prevent failure to add new options.
         *
         * @return void
         */
        public function remove_default_filters()
        {
        }
        /**
         * Add filters to make sure that the option is merged with its defaults before being returned.
         *
         * @return void
         */
        public function add_option_filters()
        {
        }
        /**
         * Remove the option filters.
         * Called from the clean_up methods to make sure we retrieve the original old option.
         *
         * @return void
         */
        public function remove_option_filters()
        {
        }
        /* *********** METHODS influencing add_uption(), update_option() and saving from admin pages *********** */
        /**
         * Validate the option.
         *
         * @param array $dirty New value for the option.
         * @param array $clean Clean value for the option, normally the defaults.
         * @param array $old   Old value of the option.
         *
         * @return array Validated clean value for the option to be saved to the database.
         */
        protected function validate_option($dirty, $clean, $old)
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Internals\Options
     */
    /**
     * Option: wpseo_social.
     */
    class WPSEO_Option_Social extends \WPSEO_Option
    {
        /**
         * Option name.
         *
         * @var string
         */
        public $option_name = 'wpseo_social';
        /**
         * Array of defaults for the option.
         *
         * Shouldn't be requested directly, use $this->get_defaults();
         *
         * @var array
         */
        protected $defaults = [
            // Form fields.
            'facebook_site' => '',
            // Text field.
            'instagram_url' => '',
            'linkedin_url' => '',
            'myspace_url' => '',
            'og_default_image' => '',
            // Text field.
            'og_default_image_id' => '',
            'og_frontpage_title' => '',
            // Text field.
            'og_frontpage_desc' => '',
            // Text field.
            'og_frontpage_image' => '',
            // Text field.
            'og_frontpage_image_id' => '',
            'opengraph' => \true,
            'pinterest_url' => '',
            'pinterestverify' => '',
            'twitter' => \true,
            'twitter_site' => '',
            // Text field.
            'twitter_card_type' => 'summary_large_image',
            'youtube_url' => '',
            'wikipedia_url' => '',
            // Form field, but not always available.
            'fbadminapp' => '',
        ];
        /**
         * Array of sub-options which should not be overloaded with multi-site defaults.
         *
         * @var array
         */
        public $ms_exclude = [
            /* Privacy. */
            'pinterestverify',
            'fbadminapp',
        ];
        /**
         * Array of allowed twitter card types.
         *
         * While we only have the options summary and summary_large_image in the
         * interface now, we might change that at some point.
         *
         * {@internal Uncomment any of these to allow them in validation *and* automatically
         *            add them as a choice in the options page.}}
         *
         * @var array
         */
        public static $twitter_card_types = ['summary' => '', 'summary_large_image' => ''];
        /**
         * Add the actions and filters for the option.
         */
        protected function __construct()
        {
        }
        /**
         * Get the singleton instance of this class.
         *
         * @return object
         */
        public static function get_instance()
        {
        }
        /**
         * Translate/set strings used in the option defaults.
         *
         * @return void
         */
        public function translate_defaults()
        {
        }
        /**
         * Validate the option.
         *
         * @param array $dirty New value for the option.
         * @param array $clean Clean value for the option, normally the defaults.
         * @param array $old   Old value of the option.
         *
         * @return array Validated clean value for the option to be saved to the database.
         */
        protected function validate_option($dirty, $clean, $old)
        {
        }
        /**
         * Clean a given option value.
         *
         * @param array  $option_value          Old (not merged with defaults or filtered) option value to
         *                                      clean according to the rules for this option.
         * @param string $current_version       Optional. Version from which to upgrade, if not set,
         *                                      version specific upgrades will be disregarded.
         * @param array  $all_old_option_values Optional. Only used when importing old options to have
         *                                      access to the real old values, in contrast to the saved ones.
         *
         * @return array Cleaned option.
         */
        protected function clean_option($option_value, $current_version = \null, $all_old_option_values = \null)
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Internals\Options
     */
    /**
     * Option: wpseo_titles.
     */
    class WPSEO_Option_Titles extends \WPSEO_Option
    {
        /**
         * Option name.
         *
         * @var string
         */
        public $option_name = 'wpseo_titles';
        /**
         * Array of defaults for the option.
         *
         * Shouldn't be requested directly, use $this->get_defaults();
         *
         * {@internal Note: Some of the default values are added via the translate_defaults() method.}}
         *
         * @var array
         */
        protected $defaults = [
            // Non-form fields, set via (ajax) function.
            'title_test' => 0,
            // Form fields.
            'forcerewritetitle' => \false,
            'separator' => 'sc-dash',
            'title-home-wpseo' => '%%sitename%% %%page%% %%sep%% %%sitedesc%%',
            // Text field.
            'title-author-wpseo' => '',
            // Text field.
            'title-archive-wpseo' => '%%date%% %%page%% %%sep%% %%sitename%%',
            // Text field.
            'title-search-wpseo' => '',
            // Text field.
            'title-404-wpseo' => '',
            // Text field.
            'metadesc-home-wpseo' => '',
            // Text area.
            'metadesc-author-wpseo' => '',
            // Text area.
            'metadesc-archive-wpseo' => '',
            // Text area.
            'rssbefore' => '',
            // Text area.
            'rssafter' => '',
            // Text area.
            'noindex-author-wpseo' => \false,
            'noindex-author-noposts-wpseo' => \true,
            'noindex-archive-wpseo' => \true,
            'disable-author' => \false,
            'disable-date' => \false,
            'disable-post_format' => \false,
            'disable-attachment' => \true,
            'is-media-purge-relevant' => \false,
            'breadcrumbs-404crumb' => '',
            // Text field.
            'breadcrumbs-display-blog-page' => \true,
            'breadcrumbs-boldlast' => \false,
            'breadcrumbs-archiveprefix' => '',
            // Text field.
            'breadcrumbs-enable' => \false,
            'breadcrumbs-home' => '',
            // Text field.
            'breadcrumbs-prefix' => '',
            // Text field.
            'breadcrumbs-searchprefix' => '',
            // Text field.
            'breadcrumbs-sep' => '&raquo;',
            // Text field.
            'website_name' => '',
            'person_name' => '',
            'person_logo' => '',
            'person_logo_id' => 0,
            'alternate_website_name' => '',
            'company_logo' => '',
            'company_logo_id' => 0,
            'company_name' => '',
            'company_or_person' => 'company',
            'company_or_person_user_id' => \false,
            'stripcategorybase' => \false,
        ];
        /**
         * Used for "caching" during pageload.
         *
         * @var array
         */
        protected $enriched_defaults = \null;
        /**
         * Array of variable option name patterns for the option.
         *
         * @var array
         */
        protected $variable_array_key_patterns = ['title-', 'metadesc-', 'noindex-', 'showdate-', 'display-metabox-pt-', 'bctitle-ptarchive-', 'post_types-', 'taxonomy-'];
        /**
         * Array of sub-options which should not be overloaded with multi-site defaults.
         *
         * @var array
         */
        public $ms_exclude = [
            /* Theme dependent. */
            'title_test',
            'forcerewritetitle',
        ];
        /**
         * Add the actions and filters for the option.
         *
         * @todo [JRF => testers] Check if the extra actions below would run into problems if an option
         * is updated early on and if so, change the call to schedule these for a later action on add/update
         * instead of running them straight away.
         */
        protected function __construct()
        {
        }
        /**
         * Make sure we can recognize the right action for the double cleaning.
         */
        public function end_of_init()
        {
        }
        /**
         * Get the singleton instance of this class.
         *
         * @return self
         */
        public static function get_instance()
        {
        }
        /**
         * Get the available separator options.
         *
         * @return array
         */
        public function get_separator_options()
        {
        }
        /**
         * Get the available separator options aria-labels.
         *
         * @return array Array with the separator options aria-labels.
         */
        public function get_separator_options_for_display()
        {
        }
        /**
         * Translate strings used in the option defaults.
         *
         * @return void
         */
        public function translate_defaults()
        {
        }
        /**
         * Add dynamically created default options based on available post types and taxonomies.
         *
         * @return  void
         */
        public function enrich_defaults()
        {
        }
        /**
         * Invalidates enrich_defaults() cache.
         *
         * Called from actions:
         * - (un)registered_post_type
         * - (un)registered_taxonomy
         *
         * @return void
         */
        public function invalidate_enrich_defaults_cache()
        {
        }
        /**
         * Validate the option.
         *
         * @param array $dirty New value for the option.
         * @param array $clean Clean value for the option, normally the defaults.
         * @param array $old   Old value of the option.
         *
         * @return array Validated clean value for the option to be saved to the database.
         */
        protected function validate_option($dirty, $clean, $old)
        {
        }
        /**
         * Retrieve a list of the allowed post types as breadcrumb parent for a taxonomy.
         * Helper method for validation.
         *
         * {@internal Don't make static as new types may still be registered.}}
         *
         * @return array
         */
        protected function get_allowed_post_types()
        {
        }
        /**
         * Clean a given option value.
         *
         * @param array  $option_value          Old (not merged with defaults or filtered) option value to
         *                                      clean according to the rules for this option.
         * @param string $current_version       Optional. Version from which to upgrade, if not set,
         *                                      version specific upgrades will be disregarded.
         * @param array  $all_old_option_values Optional. Only used when importing old options to have
         *                                      access to the real old values, in contrast to the saved ones.
         *
         * @return array Cleaned option.
         */
        protected function clean_option($option_value, $current_version = \null, $all_old_option_values = \null)
        {
        }
        /**
         * Make sure that any set option values relating to post_types and/or taxonomies are retained,
         * even when that post_type or taxonomy may not yet have been registered.
         *
         * {@internal Overrule the abstract class version of this to make sure one extra renamed
         *            variable key does not get removed. IMPORTANT: keep this method in line with
         *            the parent on which it is based!}}
         *
         * @param array $dirty Original option as retrieved from the database.
         * @param array $clean Filtered option where any options which shouldn't be in our option
         *                     have already been removed and any options which weren't set
         *                     have been set to their defaults.
         *
         * @return array
         */
        protected function retain_variable_keys($dirty, $clean)
        {
        }
        /**
         * Retrieves a list of separator options.
         *
         * @return array An array of the separator options.
         */
        protected static function get_separator_option_list()
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Internals\Options
     */
    /**
     * Option: wpseo.
     */
    class WPSEO_Option_Wpseo extends \WPSEO_Option
    {
        /**
         * Option name.
         *
         * @var string
         */
        public $option_name = 'wpseo';
        /**
         * Array of defaults for the option.
         *
         * {@internal Shouldn't be requested directly, use $this->get_defaults();}}
         *
         * @var array
         */
        protected $defaults = [
            // Non-form fields, set via (ajax) function.
            'ms_defaults_set' => \false,
            // Non-form field, should only be set via validation routine.
            'version' => '',
            // Leave default as empty to ensure activation/upgrade works.
            // Form fields.
            'disableadvanced_meta' => \true,
            'onpage_indexability' => \true,
            'baiduverify' => '',
            // Text field.
            'googleverify' => '',
            // Text field.
            'msverify' => '',
            // Text field.
            'yandexverify' => '',
            'site_type' => '',
            // List of options.
            'has_multiple_authors' => '',
            'environment_type' => '',
            'content_analysis_active' => \true,
            'keyword_analysis_active' => \true,
            'enable_admin_bar_menu' => \true,
            'enable_cornerstone_content' => \true,
            'enable_xml_sitemap' => \true,
            'enable_text_link_counter' => \true,
            'show_onboarding_notice' => \false,
            'first_activated_on' => \false,
            'myyoast-oauth' => ['config' => ['clientId' => \null, 'secret' => \null], 'access_tokens' => []],
        ];
        /**
         * Sub-options which should not be overloaded with multi-site defaults.
         *
         * @var array
         */
        public $ms_exclude = [
            /* Privacy. */
            'baiduverify',
            'googleverify',
            'msverify',
            'yandexverify',
        ];
        /**
         * Possible values for the site_type option.
         *
         * @var array
         */
        protected $site_types = ['', 'blog', 'shop', 'news', 'smallBusiness', 'corporateOther', 'personalOther'];
        /**
         * Possible environment types.
         *
         * @var array
         */
        protected $environment_types = ['', 'production', 'staging', 'development'];
        /**
         * Possible has_multiple_authors options.
         *
         * @var array
         */
        protected $has_multiple_authors_options = ['', \true, \false];
        /**
         * Name for an option higher in the hierarchy to override setting access.
         *
         * @var string
         */
        protected $override_option_name = 'wpseo_ms';
        /**
         * Add the actions and filters for the option.
         *
         * @todo [JRF => testers] Check if the extra actions below would run into problems if an option
         * is updated early on and if so, change the call to schedule these for a later action on add/update
         * instead of running them straight away.
         *
         * @return \WPSEO_Option_Wpseo
         */
        protected function __construct()
        {
        }
        /**
         * Get the singleton instance of this class.
         *
         * @return object
         */
        public static function get_instance()
        {
        }
        /**
         * Add filters to make sure that the option is merged with its defaults before being returned.
         *
         * @return void
         */
        public function add_option_filters()
        {
        }
        /**
         * Remove the option filters.
         * Called from the clean_up methods to make sure we retrieve the original old option.
         *
         * @return void
         */
        public function remove_option_filters()
        {
        }
        /**
         * Add filters to make sure that the option default is returned if the option is not set.
         *
         * @return void
         */
        public function add_default_filters()
        {
        }
        /**
         * Remove the default filters.
         * Called from the validate() method to prevent failure to add new options.
         *
         * @return void
         */
        public function remove_default_filters()
        {
        }
        /**
         * Validate the option.
         *
         * @param array $dirty New value for the option.
         * @param array $clean Clean value for the option, normally the defaults.
         * @param array $old   Old value of the option.
         *
         * @return array Validated clean value for the option to be saved to the database.
         */
        protected function validate_option($dirty, $clean, $old)
        {
        }
        /**
         * Verifies that the feature variables are turned off if the network is configured so.
         *
         * @param mixed $options Value of the option to be returned. Typically an array.
         *
         * @return mixed Filtered $options value.
         */
        public function verify_features_against_network($options = [])
        {
        }
        /**
         * Gets the filter hook name and callback for adjusting the retrieved option value
         * against the network-allowed features.
         *
         * @return array Array where the first item is the hook name, the second is the hook callback,
         *               and the third is the hook priority.
         */
        protected function get_verify_features_option_filter_hook()
        {
        }
        /**
         * Gets the filter hook name and callback for adjusting the default option value against the network-allowed features.
         *
         * @return array Array where the first item is the hook name, the second is the hook callback,
         *               and the third is the hook priority.
         */
        protected function get_verify_features_default_option_filter_hook()
        {
        }
        /**
         * Clean a given option value.
         *
         * @param array  $option_value          Old (not merged with defaults or filtered) option value to
         *                                      clean according to the rules for this option.
         * @param string $current_version       Optional. Version from which to upgrade, if not set,
         *                                      version specific upgrades will be disregarded.
         * @param array  $all_old_option_values Optional. Only used when importing old options to have
         *                                      access to the real old values, in contrast to the saved ones.
         *
         * @return array Cleaned option.
         */
        protected function clean_option($option_value, $current_version = \null, $all_old_option_values = \null)
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Internals\Options
     */
    /**
     * Overal Option Management class.
     *
     * Instantiates all the options and offers a number of utility methods to work with the options.
     */
    class WPSEO_Options
    {
        /**
         * The option values.
         *
         * @var null
         */
        protected static $option_values = \null;
        /**
         * Options this class uses.
         *
         * @var array Array format: (string) option_name  => (string) name of concrete class for the option.
         */
        public static $options = ['wpseo' => 'WPSEO_Option_Wpseo', 'wpseo_titles' => 'WPSEO_Option_Titles', 'wpseo_social' => 'WPSEO_Option_Social', 'wpseo_ms' => 'WPSEO_Option_MS', 'wpseo_taxonomy_meta' => 'WPSEO_Taxonomy_Meta'];
        /**
         * Array of instantiated option objects.
         *
         * @var array
         */
        protected static $option_instances = [];
        /**
         * Array with the option names.
         *
         * @var array
         */
        protected static $option_names = [];
        /**
         * Instance of this class.
         *
         * @var object
         */
        protected static $instance;
        /**
         * Instantiate all the WPSEO option management classes.
         */
        protected function __construct()
        {
        }
        /**
         * Register our hooks.
         */
        public function register_hooks()
        {
        }
        /**
         * Get the singleton instance of this class.
         *
         * @return object
         */
        public static function get_instance()
        {
        }
        /**
         * Registers an option to the options list.
         *
         * @param WPSEO_Option $option_instance Instance of the option.
         */
        public static function register_option(\WPSEO_Option $option_instance)
        {
        }
        /**
         * Get the group name of an option for use in the settings form.
         *
         * @param string $option_name The option for which you want to retrieve the option group name.
         *
         * @return string|bool
         */
        public static function get_group_name($option_name)
        {
        }
        /**
         * Get a specific default value for an option.
         *
         * @param string $option_name The option for which you want to retrieve a default.
         * @param string $key         The key within the option who's default you want.
         *
         * @return mixed
         */
        public static function get_default($option_name, $key)
        {
        }
        /**
         * Update a site_option.
         *
         * @param string $option_name The option name of the option to save.
         * @param mixed  $value       The new value for the option.
         *
         * @return bool
         */
        public static function update_site_option($option_name, $value)
        {
        }
        /**
         * Get the instantiated option instance.
         *
         * @param string $option_name The option for which you want to retrieve the instance.
         *
         * @return object|bool
         */
        public static function get_option_instance($option_name)
        {
        }
        /**
         * Retrieve an array of the options which should be included in get_all() and reset().
         *
         * @return array Array of option names.
         */
        public static function get_option_names()
        {
        }
        /**
         * Retrieve all the options for the SEO plugin in one go.
         *
         * @return array Array combining the values of all the options.
         */
        public static function get_all()
        {
        }
        /**
         * Retrieve one or more options for the SEO plugin.
         *
         * @param array $option_names An array of option names of the options you want to get.
         *
         * @return array Array combining the values of the requested options.
         */
        public static function get_options(array $option_names)
        {
        }
        /**
         * Retrieve a single option for the SEO plugin.
         *
         * @param string $option_name The name of the option you want to get.
         *
         * @return array Array containing the requested option.
         */
        public static function get_option($option_name)
        {
        }
        /**
         * Retrieve a single field from any option for the SEO plugin. Keys are always unique.
         *
         * @param string $key     The key it should return.
         * @param mixed  $default The default value that should be returned if the key isn't set.
         *
         * @return mixed|null Returns value if found, $default if not.
         */
        public static function get($key, $default = \null)
        {
        }
        /**
         * Resets the cache to null.
         */
        public static function clear_cache()
        {
        }
        /**
         * Primes our cache.
         */
        private static function prime_cache()
        {
        }
        /**
         * Retrieve a single field from an option for the SEO plugin.
         *
         * @param string $key   The key to set.
         * @param mixed  $value The value to set.
         *
         * @return mixed|null Returns value if found, $default if not.
         */
        public static function set($key, $value)
        {
        }
        /**
         * Get an option only if it's been auto-loaded.
         *
         * @param string     $option  The option to retrieve.
         * @param bool|mixed $default A default value to return.
         *
         * @return bool|mixed
         */
        public static function get_autoloaded_option($option, $default = \false)
        {
        }
        /**
         * Run the clean up routine for one or all options.
         *
         * @param array|string $option_name     Optional. the option you want to clean or an array of
         *                                      option names for the options you want to clean.
         *                                      If not set, all options will be cleaned.
         * @param string       $current_version Optional. Version from which to upgrade, if not set,
         *                                      version specific upgrades will be disregarded.
         *
         * @return void
         */
        public static function clean_up($option_name = \null, $current_version = \null)
        {
        }
        /**
         * Check that all options exist in the database and add any which don't.
         *
         * @return void
         */
        public static function ensure_options_exist()
        {
        }
        /**
         * Initialize some options on first install/activate/reset.
         *
         * @return void
         */
        public static function initialize()
        {
        }
        /**
         * Reset all options to their default values and rerun some tests.
         *
         * @return void
         */
        public static function reset()
        {
        }
        /**
         * Initialize default values for a new multisite blog.
         *
         * @param bool $force_init Whether to always do the initialization routine (title/desc test).
         *
         * @return void
         */
        public static function maybe_set_multisite_defaults($force_init = \false)
        {
        }
        /**
         * Reset all options for a specific multisite blog to their default values based upon a
         * specified default blog if one was chosen on the network page or the plugin defaults if it was not.
         *
         * @param int|string $blog_id Blog id of the blog for which to reset the options.
         *
         * @return void
         */
        public static function reset_ms_blog($blog_id)
        {
        }
        /**
         * Saves the option to the database.
         *
         * @param string $wpseo_options_group_name The name for the wpseo option group in the database.
         * @param string $option_name              The name for the option to set.
         * @param mixed  $option_value             The value for the option.
         *
         * @return boolean Returns true if the option is successfully saved in the database.
         */
        public static function save_option($wpseo_options_group_name, $option_name, $option_value)
        {
        }
        /**
         * Adds the multisite options to the option stack if relevant.
         *
         * @param array $option The currently present options settings.
         *
         * @return array Options possibly including multisite.
         */
        protected static function add_ms_option($option)
        {
        }
        /**
         * Checks if installation is multisite.
         *
         * @return bool True when is multisite.
         */
        protected static function is_multisite()
        {
        }
        /**
         * Retrieves a lookup table to find in which option_group a key is stored.
         *
         * @return array The lookup table.
         */
        private static function get_lookup_table()
        {
        }
        /**
         * Retrieves a lookup table to find in which option_group a key is stored.
         *
         * @return array The lookup table.
         */
        private static function get_pattern_table()
        {
        }
        /* ********************* DEPRECATED METHODS ********************* */
        /**
         * Fills our option cache.
         *
         * @deprecated  12.8.1
         */
        public static function fill_cache()
        {
        }
        /**
         * Correct the inadvertent removal of the fallback to default values from the breadcrumbs.
         *
         * @since 1.5.2.3
         *
         * @deprecated 7.0
         * @codeCoverageIgnore
         */
        public static function bring_back_breadcrumb_defaults()
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\Internals\Options
     */
    /**
     * Option: wpseo_taxonomy_meta.
     */
    class WPSEO_Taxonomy_Meta extends \WPSEO_Option
    {
        /**
         * Option name.
         *
         * @var string
         */
        public $option_name = 'wpseo_taxonomy_meta';
        /**
         * Whether to include the option in the return for WPSEO_Options::get_all().
         *
         * @var bool
         */
        public $include_in_all = \false;
        /**
         * Array of defaults for the option.
         *
         * Shouldn't be requested directly, use $this->get_defaults();
         *
         * {@internal Important: in contrast to most defaults, the below array format is
         *            very bare. The real option is in the format [taxonomy_name][term_id][...]
         *            where [...] is any of the $defaults_per_term options shown below.
         *            This is of course taken into account in the below methods.}}
         *
         * @var array
         */
        protected $defaults = [];
        /**
         * Option name - same as $option_name property, but now also available to static methods.
         *
         * @var string
         */
        public static $name;
        /**
         * Array of defaults for individual taxonomy meta entries.
         *
         * @var array
         */
        public static $defaults_per_term = [
            'wpseo_title' => '',
            'wpseo_desc' => '',
            'wpseo_canonical' => '',
            'wpseo_bctitle' => '',
            'wpseo_noindex' => 'default',
            'wpseo_focuskw' => '',
            'wpseo_linkdex' => '',
            'wpseo_content_score' => '',
            'wpseo_focuskeywords' => '[]',
            'wpseo_keywordsynonyms' => '[]',
            // Social fields.
            'wpseo_opengraph-title' => '',
            'wpseo_opengraph-description' => '',
            'wpseo_opengraph-image' => '',
            'wpseo_opengraph-image-id' => '',
            'wpseo_twitter-title' => '',
            'wpseo_twitter-description' => '',
            'wpseo_twitter-image' => '',
            'wpseo_twitter-image-id' => '',
        ];
        /**
         * Available index options.
         *
         * Used for form generation and input validation.
         *
         * {@internal Labels (translation) added on admin_init via WPSEO_Taxonomy::translate_meta_options().}}
         *
         * @var array
         */
        public static $no_index_options = ['default' => '', 'index' => '', 'noindex' => ''];
        /**
         * Add the actions and filters for the option.
         *
         * @todo [JRF => testers] Check if the extra actions below would run into problems if an option
         * is updated early on and if so, change the call to schedule these for a later action on add/update
         * instead of running them straight away.
         *
         * @return \WPSEO_Taxonomy_Meta
         */
        protected function __construct()
        {
        }
        /**
         * Get the singleton instance of this class.
         *
         * @return object
         */
        public static function get_instance()
        {
        }
        /**
         * Add extra default options received from a filter.
         */
        public function enrich_defaults()
        {
        }
        /**
         * Helper method - Combines a fixed array of default values with an options array
         * while filtering out any keys which are not in the defaults array.
         *
         * @param string $option_key Option name of the option we're doing the merge for.
         * @param array  $options    Optional. Current options. If not set, the option defaults
         *                           for the $option_key will be returned.
         *
         * @return array Combined and filtered options array.
         */
        /*
        Public function array_filter_merge( $option_key, $options = null ) {
        
        		$defaults = $this->get_defaults( $option_key );
        
        		if ( ! isset( $options ) || $options === false ) {
        			return $defaults;
        		}
        
        		/ *
        		{@internal Adding the defaults to all taxonomy terms each time the option is retrieved
        		will be quite inefficient if there are a lot of taxonomy terms.
        		As long as taxonomy_meta is only retrieved via methods in this class, we shouldn't need this.}}
        
        		$options  = (array) $options;
        		$filtered = array();
        
        		if ( $options !== array() ) {
        			foreach ( $options as $taxonomy => $terms ) {
        				if ( is_array( $terms ) && $terms !== array() ) {
        					foreach ( $terms as $id => $term_meta ) {
        						foreach ( self::$defaults_per_term as $name => $default ) {
        							if ( isset( $options[ $taxonomy ][ $id ][ $name ] ) ) {
        								$filtered[ $taxonomy ][ $id ][ $name ] = $options[ $taxonomy ][ $id ][ $name ];
        							}
        							else {
        								$filtered[ $name ] = $default;
        							}
        						}
        					}
        				}
        			}
        			unset( $taxonomy, $terms, $id, $term_meta, $name, $default );
        		}
        		// end of may be remove.
        
        		return $filtered;
        		* /
        
        		return (array) $options;
        	}
        */
        /**
         * Validate the option.
         *
         * @param array $dirty New value for the option.
         * @param array $clean Clean value for the option, normally the defaults.
         * @param array $old   Old value of the option.
         *
         * @return array Validated clean value for the option to be saved to the database.
         */
        protected function validate_option($dirty, $clean, $old)
        {
        }
        /**
         * Validate the meta data for one individual term and removes default values (no need to save those).
         *
         * @param array $meta_data New values.
         * @param array $old_meta  The original values.
         *
         * @return array Validated and filtered value.
         */
        public static function validate_term_meta_data($meta_data, $old_meta)
        {
        }
        /**
         * Clean a given option value.
         * - Convert old option values to new
         * - Fixes strings which were escaped (should have been sanitized - escaping is for output)
         *
         * @param array  $option_value          Old (not merged with defaults or filtered) option value to
         *                                      clean according to the rules for this option.
         * @param string $current_version       Optional. Version from which to upgrade, if not set,
         *                                      version specific upgrades will be disregarded.
         * @param array  $all_old_option_values Optional. Only used when importing old options to have
         *                                      access to the real old values, in contrast to the saved ones.
         *
         * @return array Cleaned option.
         */
        protected function clean_option($option_value, $current_version = \null, $all_old_option_values = \null)
        {
        }
        /**
         * Retrieve a taxonomy term's meta value(s).
         *
         * @param mixed  $term     Term to get the meta value for
         *                         either (string) term name, (int) term id or (object) term.
         * @param string $taxonomy Name of the taxonomy to which the term is attached.
         * @param string $meta     Optional. Meta value to get (without prefix).
         *
         * @return mixed|bool Value for the $meta if one is given, might be the default.
         *                    If no meta is given, an array of all the meta data for the term.
         *                    False if the term does not exist or the $meta provided is invalid.
         */
        public static function get_term_meta($term, $taxonomy, $meta = \null)
        {
        }
        /**
         * Get the current queried object and return the meta value.
         *
         * @param string $meta The meta field that is needed.
         *
         * @return bool|mixed
         */
        public static function get_meta_without_term($meta)
        {
        }
        /**
         * Saving the values for the given term_id.
         *
         * @param int    $term_id     ID of the term to save data for.
         * @param string $taxonomy    The taxonomy the term belongs to.
         * @param array  $meta_values The values that will be saved.
         */
        public static function set_values($term_id, $taxonomy, array $meta_values)
        {
        }
        /**
         * Setting a single value to the term meta.
         *
         * @param int    $term_id    ID of the term to save data for.
         * @param string $taxonomy   The taxonomy the term belongs to.
         * @param string $meta_key   The target meta key to store the value in.
         * @param string $meta_value The value of the target meta key.
         */
        public static function set_value($term_id, $taxonomy, $meta_key, $meta_value)
        {
        }
        /**
         * Find the keyword usages in the metas for the taxonomies/terms.
         *
         * @param string $keyword          The keyword to look for.
         * @param string $current_term_id  The current term id.
         * @param string $current_taxonomy The current taxonomy name.
         *
         * @return array
         */
        public static function get_keyword_usage($keyword, $current_term_id, $current_taxonomy)
        {
        }
        /**
         * Saving the values for the given term_id.
         *
         * @param int    $term_id  ID of the term to save data for.
         * @param string $taxonomy The taxonomy the term belongs to.
         * @param array  $clean    Array with clean values.
         */
        private static function save_clean_values($term_id, $taxonomy, array $clean)
        {
        }
        /**
         * Getting the meta from the options.
         *
         * @return void|array
         */
        private static function get_tax_meta()
        {
        }
        /**
         * Saving the tax meta values to the database.
         *
         * @param array $tax_meta Array with the meta values for taxonomy.
         */
        private static function save_tax_meta($tax_meta)
        {
        }
        /**
         * Getting the taxonomy meta for the given term_id and taxonomy.
         *
         * @param int    $term_id  The id of the term.
         * @param string $taxonomy Name of the taxonomy to which the term is attached.
         *
         * @return array
         */
        private static function get_term_tax_meta($term_id, $taxonomy)
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\XML_Sitemaps
     */
    /**
     * Sitemap Provider interface.
     */
    interface WPSEO_Sitemap_Provider
    {
        /**
         * Check if provider supports given item type.
         *
         * @param string $type Type string to check for.
         *
         * @return boolean
         */
        public function handles_type($type);
        /**
         * Get set of sitemaps index link data.
         *
         * @param int $max_entries Entries per sitemap.
         *
         * @return array
         */
        public function get_index_links($max_entries);
        /**
         * Get set of sitemap link data.
         *
         * @param string $type         Sitemap type.
         * @param int    $max_entries  Entries per sitemap.
         * @param int    $current_page Current page of the sitemap.
         *
         * @return array
         */
        public function get_sitemap_links($type, $max_entries, $current_page);
    }
    /**
     * Sitemap provider for author archives.
     */
    class WPSEO_Author_Sitemap_Provider implements \WPSEO_Sitemap_Provider
    {
        /**
         * The date helper.
         *
         * @var WPSEO_Date_Helper
         */
        protected $date;
        /**
         * WPSEO_Author_Sitemap_Provider constructor.
         */
        public function __construct()
        {
        }
        /**
         * Check if provider supports given item type.
         *
         * @param string $type Type string to check for.
         *
         * @return boolean
         */
        public function handles_type($type)
        {
        }
        /**
         * Get the links for the sitemap index.
         *
         * @param int $max_entries Entries per sitemap.
         *
         * @return array
         */
        public function get_index_links($max_entries)
        {
        }
        /**
         * Retrieve users, taking account of all necessary exclusions.
         *
         * @param array $arguments Arguments to add.
         *
         * @return array
         */
        protected function get_users($arguments = [])
        {
        }
        /**
         * Get set of sitemap link data.
         *
         * @param string $type         Sitemap type.
         * @param int    $max_entries  Entries per sitemap.
         * @param int    $current_page Current page of the sitemap.
         *
         * @throws OutOfBoundsException When an invalid page is requested.
         *
         * @return array
         */
        public function get_sitemap_links($type, $max_entries, $current_page)
        {
        }
        /**
         * Update any users that don't have last profile update timestamp.
         *
         * @return int Count of users updated.
         */
        protected function update_user_meta()
        {
        }
        /**
         * Wrap legacy filter to deduplicate calls.
         *
         * @param array $users Array of user objects to filter.
         *
         * @return array
         */
        protected function exclude_users($users)
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\XML_Sitemaps
     */
    /**
     * Sitemap provider for author archives.
     */
    class WPSEO_Post_Type_Sitemap_Provider implements \WPSEO_Sitemap_Provider
    {
        /**
         * Holds image parser instance.
         *
         * @var WPSEO_Sitemap_Image_Parser
         */
        protected static $image_parser;
        /**
         * Holds instance of classifier for a link.
         *
         * @var object
         */
        protected static $classifier;
        /**
         * Determines whether images should be included in the XML sitemap.
         *
         * @var bool
         */
        private $include_images;
        /**
         * Set up object properties for data reuse.
         */
        public function __construct()
        {
        }
        /**
         * Get the Image Parser.
         *
         * @return WPSEO_Sitemap_Image_Parser
         */
        protected function get_image_parser()
        {
        }
        /**
         * Get the Classifier for a link.
         *
         * @return WPSEO_Link_Type_Classifier
         */
        protected function get_classifier()
        {
        }
        /**
         * Check if provider supports given item type.
         *
         * @param string $type Type string to check for.
         *
         * @return boolean
         */
        public function handles_type($type)
        {
        }
        /**
         * Retrieves the sitemap links.
         *
         * @param int $max_entries Entries per sitemap.
         *
         * @return array
         */
        public function get_index_links($max_entries)
        {
        }
        /**
         * Get set of sitemap link data.
         *
         * @param string $type         Sitemap type.
         * @param int    $max_entries  Entries per sitemap.
         * @param int    $current_page Current page of the sitemap.
         *
         * @throws OutOfBoundsException When an invalid page is requested.
         *
         * @return array
         */
        public function get_sitemap_links($type, $max_entries, $current_page)
        {
        }
        /**
         * Check for relevant post type before invalidation.
         *
         * @param int $post_id Post ID to possibly invalidate for.
         */
        public function save_post($post_id)
        {
        }
        /**
         * Check if post type should be present in sitemaps.
         *
         * @param string $post_type Post type string to check for.
         *
         * @return bool
         */
        public function is_valid_post_type($post_type)
        {
        }
        /**
         * Retrieves a list with the excluded post ids.
         *
         * @param string $post_type Post type.
         *
         * @return array Array with post ids to exclude.
         */
        protected function get_excluded_posts($post_type)
        {
        }
        /**
         * Get count of posts for post type.
         *
         * @param string $post_type Post type to retrieve count for.
         *
         * @return int
         */
        protected function get_post_type_count($post_type)
        {
        }
        /**
         * Produces set of links to prepend at start of first sitemap page.
         *
         * @param string $post_type Post type to produce links for.
         *
         * @return array
         */
        protected function get_first_links($post_type)
        {
        }
        /**
         * Get URL for a post type archive.
         *
         * @since 5.3
         *
         * @param string $post_type Post type.
         *
         * @return string|bool URL or false if it should be excluded.
         */
        protected function get_post_type_archive_link($post_type)
        {
        }
        /**
         * Determines whether a post type archive is indexable.
         *
         * @since 11.5
         *
         * @param string $post_type       Post type.
         * @param int    $archive_page_id The page id.
         *
         * @return bool True when post type archive is indexable.
         */
        protected function is_post_type_archive_indexable($post_type, $archive_page_id = -1)
        {
        }
        /**
         * Retrieve set of posts with optimized query routine.
         *
         * @param string $post_type Post type to retrieve.
         * @param int    $count     Count of posts to retrieve.
         * @param int    $offset    Starting offset.
         *
         * @return object[]
         */
        protected function get_posts($post_type, $count, $offset)
        {
        }
        /**
         * Constructs an SQL where clause for a given post type.
         *
         * @param string $post_type Post type slug.
         *
         * @return string
         */
        protected function get_sql_where_clause($post_type)
        {
        }
        /**
         * Produce array of URL parts for given post object.
         *
         * @param object $post Post object to get URL parts for.
         *
         * @return array|bool
         */
        protected function get_url($post)
        {
        }
        /* ********************* DEPRECATED METHODS ********************* */
        /**
         * Get all the options.
         *
         * @deprecated 7.0
         * @codeCoverageIgnore
         */
        protected function get_options()
        {
        }
        /**
         * Get Home URL.
         *
         * @deprecated 11.5
         * @codeCoverageIgnore
         *
         * @return string
         */
        protected function get_home_url()
        {
        }
        /**
         * Get front page ID.
         *
         * @deprecated 11.5
         * @codeCoverageIgnore
         *
         * @return int
         */
        protected function get_page_on_front_id()
        {
        }
        /**
         * Get page for posts ID.
         *
         * @deprecated 11.5
         * @codeCoverageIgnore
         *
         * @return int
         */
        protected function get_page_for_posts_id()
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\XML_Sitemaps
     */
    /**
     * Cache Data interface.
     */
    interface WPSEO_Sitemap_Cache_Data_Interface
    {
        /**
         * Status for normal, usable sitemap.
         *
         * @var string
         */
        const OK = 'ok';
        /**
         * Status for unusable sitemap.
         *
         * @var string
         */
        const ERROR = 'error';
        /**
         * Status for unusable sitemap because it cannot be identified.
         *
         * @var string
         */
        const UNKNOWN = 'unknown';
        /**
         * Set the content of the sitemap.
         *
         * @param string $sitemap The XML content of the sitemap.
         *
         * @return void
         */
        public function set_sitemap($sitemap);
        /**
         * Set the status of the sitemap.
         *
         * @param bool|string $usable True/False or 'ok'/'error' for status.
         *
         * @return void
         */
        public function set_status($usable);
        /**
         * Builds the sitemap.
         *
         * @return string The XML content of the sitemap.
         */
        public function get_sitemap();
        /**
         * Get the status of this sitemap.
         *
         * @return string Status 'ok', 'error' or 'unknown'.
         */
        public function get_status();
        /**
         * Is the sitemap content usable ?
         *
         * @return bool True if the sitemap is usable, False if not.
         */
        public function is_usable();
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\XML_Sitemaps
     */
    /**
     * Sitemap Cache Data object, manages sitemap data stored in cache.
     */
    class WPSEO_Sitemap_Cache_Data implements \WPSEO_Sitemap_Cache_Data_Interface, \Serializable
    {
        /**
         * Sitemap XML data.
         *
         * @var string
         */
        private $sitemap = '';
        /**
         * Status of the sitemap, usable or not.
         *
         * @var string
         */
        private $status = self::UNKNOWN;
        /**
         * Set the sitemap XML data
         *
         * @param string $sitemap XML Content of the sitemap.
         */
        public function set_sitemap($sitemap)
        {
        }
        /**
         * Set the status of the sitemap, is it usable.
         *
         * @param bool|string $valid Is the sitemap valid or not.
         *
         * @return void
         */
        public function set_status($valid)
        {
        }
        /**
         * Is the sitemap usable.
         *
         * @return bool True if usable, False if bad or unknown.
         */
        public function is_usable()
        {
        }
        /**
         * Get the XML content of the sitemap.
         *
         * @return string The content of the sitemap.
         */
        public function get_sitemap()
        {
        }
        /**
         * Get the status of the sitemap.
         *
         * @return string Status of the sitemap, 'ok'/'error'/'unknown'.
         */
        public function get_status()
        {
        }
        /**
         * String representation of object.
         *
         * @link http://php.net/manual/en/serializable.serialize.php
         *
         * @since 5.1.0
         *
         * @return string The string representation of the object or null.
         */
        public function serialize()
        {
        }
        /**
         * Constructs the object.
         *
         * @link http://php.net/manual/en/serializable.unserialize.php
         *
         * @since 5.1.0
         *
         * @param string $serialized The string representation of the object.
         *
         * @return void
         */
        public function unserialize($serialized)
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\XML_Sitemaps
     */
    /**
     * Parses images from the given post.
     */
    class WPSEO_Sitemap_Image_Parser
    {
        /**
         * Holds the home_url() value to speed up loops.
         *
         * @var string
         */
        protected $home_url = '';
        /**
         * Holds site URL hostname.
         *
         * @var string
         */
        protected $host = '';
        /**
         * Holds site URL protocol.
         *
         * @var string
         */
        protected $scheme = 'http';
        /**
         * Cached set of attachments for multiple posts.
         *
         * @var array
         */
        protected $attachments = [];
        /**
         * Holds blog charset value for use in DOM parsing.
         *
         * @var string
         */
        protected $charset = 'UTF-8';
        /**
         * Set up URL properties for reuse.
         */
        public function __construct()
        {
        }
        /**
         * Get set of image data sets for the given post.
         *
         * @param object $post Post object to get images for.
         *
         * @return array
         */
        public function get_images($post)
        {
        }
        /**
         * Get the images in the term description.
         *
         * @param object $term Term to get images from description for.
         *
         * @return array
         */
        public function get_term_images($term)
        {
        }
        /**
         * Parse `<img />` tags in content.
         *
         * @param string $content Content string to parse.
         *
         * @return array
         */
        private function parse_html_images($content)
        {
        }
        /**
         * Parse gallery shortcodes in a given content.
         *
         * @param string $content Content string.
         * @param int    $post_id Optional. ID of post being parsed.
         *
         * @return array Set of attachment objects.
         */
        protected function parse_galleries($content, $post_id = 0)
        {
        }
        /**
         * Retrieves galleries from the passed content.
         *
         * Forked from core to skip executing shortcodes for performance.
         *
         * @param string $content Content to parse for shortcodes.
         *
         * @return array A list of arrays, each containing gallery data.
         */
        protected function get_content_galleries($content)
        {
        }
        /**
         * Get image item array with filters applied.
         *
         * @param WP_Post $post  Post object for the context.
         * @param string  $src   Image URL.
         * @param string  $title Optional image title.
         * @param string  $alt   Optional image alt text.
         *
         * @return array
         */
        protected function get_image_item($post, $src, $title = '', $alt = '')
        {
        }
        /**
         * Get attached image URL with filters applied. Adapted from core for speed.
         *
         * @param int $post_id ID of the post.
         *
         * @return string
         */
        private function image_url($post_id)
        {
        }
        /**
         * Make absolute URL for domain or protocol-relative one.
         *
         * @param string $src URL to process.
         *
         * @return string
         */
        protected function get_absolute_url($src)
        {
        }
        /**
         * Returns the attachments for a gallery.
         *
         * @param int   $id      The post ID.
         * @param array $gallery The gallery config.
         *
         * @return array The selected attachments.
         */
        protected function get_gallery_attachments($id, $gallery)
        {
        }
        /**
         * Returns the attachments for the given ID.
         *
         * @param int   $id      The post ID.
         * @param array $gallery The gallery config.
         *
         * @return array The selected attachments.
         */
        protected function get_gallery_attachments_for_parent($id, $gallery)
        {
        }
        /**
         * Returns an array with attachments for the post IDs that will be included.
         *
         * @param array $include Array with IDs to include.
         *
         * @return array The found attachments.
         */
        protected function get_gallery_attachments_for_included($include)
        {
        }
        /**
         * Returns the attachments.
         *
         * @param array $args Array with query args.
         *
         * @return array The found attachments.
         */
        protected function get_attachments($args)
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\XML_Sitemaps
     */
    /**
     * Handles storage keys for sitemaps caching and invalidation.
     *
     * @since 3.2
     */
    class WPSEO_Sitemaps_Cache_Validator
    {
        /**
         * Prefix of the transient key for sitemap caches.
         *
         * @var string
         */
        const STORAGE_KEY_PREFIX = 'yst_sm_';
        /**
         * Name of the option that holds the global validation value.
         *
         * @var string
         */
        const VALIDATION_GLOBAL_KEY = 'wpseo_sitemap_cache_validator_global';
        /**
         * The format which creates the key of the option that holds the type validation value.
         *
         * @var string
         */
        const VALIDATION_TYPE_KEY_FORMAT = 'wpseo_sitemap_%s_cache_validator';
        /**
         * Get the cache key for a certain type and page.
         *
         * A type of cache would be something like 'page', 'post' or 'video'.
         *
         * Example key format for sitemap type "post", page 1: wpseo_sitemap_post_1:akfw3e_23azBa .
         *
         * @since 3.2
         *
         * @param null|string $type The type to get the key for. Null or self::SITEMAP_INDEX_TYPE for index cache.
         * @param int         $page The page of cache to get the key for.
         *
         * @return bool|string The key where the cache is stored on. False if the key could not be generated.
         */
        public static function get_storage_key($type = \null, $page = 1)
        {
        }
        /**
         * If the type is over length make sure we compact it so we don't have any database problems.
         *
         * When there are more 'extremely long' post types, changes are they have variations in either the start or ending.
         * Because of this, we cut out the excess in the middle which should result in less chance of collision.
         *
         * @since 3.2
         *
         * @param string $type    The type of sitemap to be used.
         * @param string $prefix  The part before the type in the cache key. Only the length is used.
         * @param string $postfix The part after the type in the cache key. Only the length is used.
         *
         * @return string The type with a safe length to use
         *
         * @throws OutOfRangeException When there is less than 15 characters of space for a key that is originally longer.
         */
        public static function truncate_type($type, $prefix = '', $postfix = '')
        {
        }
        /**
         * Invalidate sitemap cache.
         *
         * @since 3.2
         *
         * @param null|string $type The type to get the key for. Null for all caches.
         *
         * @return void
         */
        public static function invalidate_storage($type = \null)
        {
        }
        /**
         * Cleanup invalidated database cache.
         *
         * @since 3.2
         *
         * @param null|string $type      The type of sitemap to clear cache for.
         * @param null|string $validator The validator to clear cache of.
         *
         * @return void
         */
        public static function cleanup_database($type = \null, $validator = \null)
        {
        }
        /**
         * Get the current cache validator.
         *
         * Without the type the global validator is returned.
         * This can invalidate -all- keys in cache at once.
         *
         * With the type parameter the validator for that specific type can be invalidated.
         *
         * @since 3.2
         *
         * @param string $type Provide a type for a specific type validator, empty for global validator.
         *
         * @return null|string The validator for the supplied type.
         */
        public static function get_validator($type = '')
        {
        }
        /**
         * Get the cache validator option key for the specified type.
         *
         * @since 3.2
         *
         * @param string $type Provide a type for a specific type validator, empty for global validator.
         *
         * @return string Validator to be used to generate the cache key.
         */
        public static function get_validator_key($type = '')
        {
        }
        /**
         * Refresh the cache validator value.
         *
         * @since 3.2
         *
         * @param string $type Provide a type for a specific type validator, empty for global validator.
         *
         * @return bool True if validator key has been saved as option.
         */
        public static function create_validator($type = '')
        {
        }
        /**
         * Encode to base61 format.
         *
         * @since 3.2
         *
         * This is base64 (numeric + alpha + alpha upper case) without the 0.
         *
         * @param int $base10 The number that has to be converted to base 61.
         *
         * @return string Base 61 converted string.
         *
         * @throws InvalidArgumentException When the input is not an integer.
         */
        public static function convert_base10_to_base61($base10)
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\XML_Sitemaps
     */
    /**
     * Handles sitemaps caching and invalidation.
     *
     * @since 3.2
     */
    class WPSEO_Sitemaps_Cache
    {
        /**
         * Holds the options that, when updated, should cause the cache to clear.
         *
         * @var array
         */
        protected static $cache_clear = [];
        /**
         * Mirror of enabled status for static calls.
         *
         * @var bool
         */
        protected static $is_enabled = \false;
        /**
         * Holds the flag to clear all cache.
         *
         * @var bool
         */
        protected static $clear_all = \false;
        /**
         * Holds the array of types to clear.
         *
         * @var array
         */
        protected static $clear_types = [];
        /**
         * Hook methods for invalidation on necessary events.
         */
        public function __construct()
        {
        }
        /**
         * Setup context for static calls.
         */
        public function init()
        {
        }
        /**
         * If cache is enabled.
         *
         * @since 3.2
         *
         * @return boolean
         */
        public function is_enabled()
        {
        }
        /**
         * Retrieve the sitemap page from cache.
         *
         * @since 3.2
         *
         * @param string $type Sitemap type.
         * @param int    $page Page number to retrieve.
         *
         * @return string|boolean
         */
        public function get_sitemap($type, $page)
        {
        }
        /**
         * Get the sitemap that is cached.
         *
         * @param string $type Sitemap type.
         * @param int    $page Page number to retrieve.
         *
         * @return null|WPSEO_Sitemap_Cache_Data Null on no cache found otherwise object containing sitemap and meta data.
         */
        public function get_sitemap_data($type, $page)
        {
        }
        /**
         * Store the sitemap page from cache.
         *
         * @since 3.2
         *
         * @param string $type    Sitemap type.
         * @param int    $page    Page number to store.
         * @param string $sitemap Sitemap body to store.
         * @param bool   $usable  Is this a valid sitemap or a cache of an invalid sitemap.
         *
         * @return bool
         */
        public function store_sitemap($type, $page, $sitemap, $usable = \true)
        {
        }
        /**
         * Delete cache transients for index and specific type.
         *
         * Always deletes the main index sitemaps cache, as that's always invalidated by any other change.
         *
         * @since 1.5.4
         * @since 3.2   Changed from function wpseo_invalidate_sitemap_cache() to method in this class.
         *
         * @param string $type Sitemap type to invalidate.
         *
         * @return void
         */
        public static function invalidate($type)
        {
        }
        /**
         * Helper to invalidate in hooks where type is passed as second argument.
         *
         * @since 3.2
         *
         * @param int    $unused Unused term ID value.
         * @param string $type   Taxonomy to invalidate.
         *
         * @return void
         */
        public static function invalidate_helper($unused, $type)
        {
        }
        /**
         * Invalidate sitemap cache for authors.
         *
         * @param int $user_id User ID.
         *
         * @return bool True if the sitemap was properly invalidated. False otherwise.
         */
        public static function invalidate_author($user_id)
        {
        }
        /**
         * Invalidate sitemap cache for the post type of a post.
         *
         * Don't invalidate for revisions.
         *
         * @since 1.5.4
         * @since 3.2   Changed from function wpseo_invalidate_sitemap_cache_on_save_post() to method in this class.
         *
         * @param int $post_id Post ID to invalidate type for.
         *
         * @return void
         */
        public static function invalidate_post($post_id)
        {
        }
        /**
         * Delete cache transients for given sitemaps types or all by default.
         *
         * @since 1.8.0
         * @since 3.2   Moved from WPSEO_Utils to this class.
         *
         * @param array $types Set of sitemap types to delete cache transients for.
         *
         * @return void
         */
        public static function clear($types = [])
        {
        }
        /**
         * Invalidate storage for cache types queued to clear.
         */
        public static function clear_queued()
        {
        }
        /**
         * Adds a hook that when given option is updated, the cache is cleared.
         *
         * @since 3.2
         *
         * @param string $option Option name.
         * @param string $type   Sitemap type.
         */
        public static function register_clear_on_option_update($option, $type = '')
        {
        }
        /**
         * Clears the transient cache when a given option is updated, if that option has been registered before.
         *
         * @since 3.2
         *
         * @param string $option The option name that's being updated.
         *
         * @return void
         */
        public static function clear_on_option_update($option)
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\XML_Sitemaps
     */
    /**
     * Renders XML output for sitemaps.
     */
    class WPSEO_Sitemaps_Renderer
    {
        /**
         * XSL stylesheet for styling a sitemap for web browsers.
         *
         * @var string
         */
        protected $stylesheet = '';
        /**
         * Holds the get_bloginfo( 'charset' ) value to reuse for performance.
         *
         * @var string
         */
        protected $charset = 'UTF-8';
        /**
         * Holds charset of output, might be converted.
         *
         * @var string
         */
        protected $output_charset = 'UTF-8';
        /**
         * If data encoding needs to be converted for output.
         *
         * @var bool
         */
        protected $needs_conversion = \false;
        /**
         * The date helper.
         *
         * @var WPSEO_Date_Helper
         */
        protected $date;
        /**
         * Set up object properties.
         */
        public function __construct()
        {
        }
        /**
         * Builds the sitemap index.
         *
         * @param array $links Set of sitemaps index links.
         *
         * @return string
         */
        public function get_index($links)
        {
        }
        /**
         * Builds the sitemap.
         *
         * @param array  $links        Set of sitemap links.
         * @param string $type         Sitemap type.
         * @param int    $current_page Current sitemap page number.
         *
         * @return string
         */
        public function get_sitemap($links, $type, $current_page)
        {
        }
        /**
         * Produce final XML output with debug information.
         *
         * @param string  $sitemap   Sitemap XML.
         * @param boolean $transient Transient cache flag.
         *
         * @return string
         */
        public function get_output($sitemap, $transient)
        {
        }
        /**
         * Get charset for the output.
         *
         * @return string
         */
        public function get_output_charset()
        {
        }
        /**
         * Set a custom stylesheet for this sitemap. Set to empty to just remove the default stylesheet.
         *
         * @param string $stylesheet Full XML-stylesheet declaration.
         */
        public function set_stylesheet($stylesheet)
        {
        }
        /**
         * Build the `<sitemap>` tag for a given URL.
         *
         * @param array $url Array of parts that make up this entry.
         *
         * @return string
         */
        protected function sitemap_index_url($url)
        {
        }
        /**
         * Build the `<url>` tag for a given URL.
         *
         * Public access for backwards compatibility reasons.
         *
         * @param array $url Array of parts that make up this entry.
         *
         * @return string
         */
        public function sitemap_url($url)
        {
        }
        /**
         * Apply some best effort conversion to comply with RFC3986.
         *
         * @param string $url URL to encode.
         *
         * @return string
         */
        protected function encode_url_rfc3986($url)
        {
        }
        /**
         * Retrieves the XSL URL that should be used in the current environment
         *
         * When home_url and site_url are not the same, the home_url should be used.
         * This is because the XSL needs to be served from the same domain, protocol and port
         * as the XML file that is loading it.
         *
         * @return string The XSL URL that needs to be used.
         */
        protected function get_xsl_url()
        {
        }
        /**
         * Adds debugging information to the output.
         *
         * @param bool $transient Transient cache was used or not.
         *
         * @return string Information about the functionality used to build the sitemap.
         */
        protected function get_debug($transient)
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\XML_Sitemaps
     */
    /**
     * Rewrite setup and handling for sitemaps functionality.
     */
    class WPSEO_Sitemaps_Router
    {
        /**
         * Sets up init logic.
         */
        public function __construct()
        {
        }
        /**
         * Sets up rewrite rules.
         */
        public function init()
        {
        }
        /**
         * Stop trailing slashes on sitemap.xml URLs.
         *
         * @param string $redirect The redirect URL currently determined.
         *
         * @return bool|string $redirect
         */
        public function redirect_canonical($redirect)
        {
        }
        /**
         * Redirects sitemap.xml to sitemap_index.xml.
         */
        public function template_redirect()
        {
        }
        /**
         * Checks whether the current request needs to be redirected to sitemap_index.xml.
         *
         * @global WP_Query $wp_query Current query.
         *
         * @return bool True if redirect is needed, false otherwise.
         */
        public function needs_sitemap_index_redirect()
        {
        }
        /**
         * Create base URL for the sitemap.
         *
         * @param string $page Page to append to the base URL.
         *
         * @return string base URL (incl page)
         */
        public static function get_base_url($page)
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\XML_Sitemaps
     */
    /**
     * Class WPSEO_Sitemaps.
     *
     * @todo This class could use a general description with some explanation on sitemaps. OR.
     */
    class WPSEO_Sitemaps
    {
        /**
         * Sitemap index identifier.
         *
         * @var string
         */
        const SITEMAP_INDEX_TYPE = '1';
        /**
         * Content of the sitemap to output.
         *
         * @var string
         */
        protected $sitemap = '';
        /**
         * Flag to indicate if this is an invalid or empty sitemap.
         *
         * @var bool
         */
        public $bad_sitemap = \false;
        /**
         * Whether or not the XML sitemap was served from a transient or not.
         *
         * @var bool
         */
        private $transient = \false;
        /**
         * HTTP protocol to use in headers.
         *
         * @since 3.2
         *
         * @var string
         */
        protected $http_protocol = 'HTTP/1.1';
        /**
         * Holds the n variable.
         *
         * @var int
         */
        private $current_page = 1;
        /**
         * The sitemaps router.
         *
         * @since 3.2
         *
         * @var WPSEO_Sitemaps_Router
         */
        public $router;
        /**
         * The sitemap renderer.
         *
         * @since 3.2
         *
         * @var WPSEO_Sitemaps_Renderer
         */
        public $renderer;
        /**
         * The sitemap cache.
         *
         * @since 3.2
         *
         * @var WPSEO_Sitemaps_Cache
         */
        public $cache;
        /**
         * The sitemap providers.
         *
         * @since 3.2
         *
         * @var WPSEO_Sitemap_Provider[]
         */
        public $providers;
        /**
         * The date helper.
         *
         * @var WPSEO_Date_Helper
         */
        protected $date;
        /**
         * Class constructor.
         */
        public function __construct()
        {
        }
        /**
         * Initialize sitemap providers classes.
         *
         * @since 5.3
         */
        public function init_sitemaps_providers()
        {
        }
        /**
         * Check the current request URI, if we can determine it's probably an XML sitemap, kill loading the widgets.
         */
        public function reduce_query_load()
        {
        }
        /**
         * Register your own sitemap. Call this during 'init'.
         *
         * @param string   $name     The name of the sitemap.
         * @param callback $function Function to build your sitemap.
         * @param string   $rewrite  Optional. Regular expression to match your sitemap with.
         */
        public function register_sitemap($name, $function, $rewrite = '')
        {
        }
        /**
         * Register your own XSL file. Call this during 'init'.
         *
         * @since 1.4.23
         *
         * @param string   $name     The name of the XSL file.
         * @param callback $function Function to build your XSL file.
         * @param string   $rewrite  Optional. Regular expression to match your sitemap with.
         */
        public function register_xsl($name, $function, $rewrite = '')
        {
        }
        /**
         * Set the sitemap current page to allow creating partial sitemaps with WP-CLI
         * in a one-off process.
         *
         * @param integer $current_page The part that should be generated.
         */
        public function set_n($current_page)
        {
        }
        /**
         * Set the sitemap content to display after you have generated it.
         *
         * @param string $sitemap The generated sitemap to output.
         */
        public function set_sitemap($sitemap)
        {
        }
        /**
         * Set as true to make the request 404. Used stop the display of empty sitemaps or invalid requests.
         *
         * @param bool $bool Is this a bad request. True or false.
         */
        public function set_bad_sitemap($bool)
        {
        }
        /**
         * Prevent stupid plugins from running shutdown scripts when we're obviously not outputting HTML.
         *
         * @since 1.4.16
         */
        public function sitemap_close()
        {
        }
        /**
         * Hijack requests for potential sitemaps and XSL files.
         *
         * @param \WP_Query $query Main query instance.
         */
        public function redirect($query)
        {
        }
        /**
         * Try to get the sitemap from cache.
         *
         * @param string $type        Sitemap type.
         * @param int    $page_number The page number to retrieve.
         *
         * @return bool If the sitemap has been retrieved from cache.
         */
        private function get_sitemap_from_cache($type, $page_number)
        {
        }
        /**
         * Build and save sitemap to cache.
         *
         * @param string $type        Sitemap type.
         * @param int    $page_number The page number to save to.
         *
         * @return bool
         */
        private function refresh_sitemap_cache($type, $page_number)
        {
        }
        /**
         * Attempts to build the requested sitemap.
         *
         * Sets $bad_sitemap if this isn't for the root sitemap, a post type or taxonomy.
         *
         * @param string $type The requested sitemap's identifier.
         */
        public function build_sitemap($type)
        {
        }
        /**
         * Build the root sitemap (example.com/sitemap_index.xml) which lists sub-sitemaps for other content types.
         */
        public function build_root_map()
        {
        }
        /**
         * Spits out the XSL for the XML sitemap.
         *
         * @param string $type Type to output.
         *
         * @since 1.4.13
         */
        public function xsl_output($type)
        {
        }
        /**
         * Spit out the generated sitemap.
         */
        public function output()
        {
        }
        /**
         * Makes a request to the sitemap index to cache it before the arrival of the search engines.
         *
         * @return void
         */
        public function hit_sitemap_index()
        {
        }
        /**
         * Get the GMT modification date for the last modified post in the post type.
         *
         * @since 3.2
         *
         * @param string|array $post_types Post type or array of types.
         * @param bool         $return_all Flag to return array of values.
         *
         * @return string|array|false
         */
        public static function get_last_modified_gmt($post_types, $return_all = \false)
        {
        }
        /**
         * Get the modification date for the last modified post in the post type.
         *
         * @param array $post_types Post types to get the last modification date for.
         *
         * @return string
         */
        public function get_last_modified($post_types)
        {
        }
        /**
         * Notify search engines of the updated sitemap.
         *
         * @param string|null $url Optional URL to make the ping for.
         */
        public static function ping_search_engines($url = \null)
        {
        }
        /**
         * Get the maximum number of entries per XML sitemap.
         *
         * @return int The maximum number of entries.
         */
        protected function get_entries_per_page()
        {
        }
        /**
         * Get post statuses for post_type or the root sitemap.
         *
         * @param string $type Provide a type for a post_type sitemap, SITEMAP_INDEX_TYPE for the root sitemap.
         *
         * @since 10.2
         *
         * @return array List of post statuses.
         */
        public static function get_post_statuses($type = self::SITEMAP_INDEX_TYPE)
        {
        }
        /**
         * Sends all the required HTTP Headers.
         */
        private function send_headers()
        {
        }
    }
    /**
     * WPSEO plugin file.
     *
     * @package WPSEO\XML_Sitemaps
     */
    /**
     * Sitemap provider for author archives.
     */
    class WPSEO_Taxonomy_Sitemap_Provider implements \WPSEO_Sitemap_Provider
    {
        /**
         * Holds image parser instance.
         *
         * @var WPSEO_Sitemap_Image_Parser
         */
        protected static $image_parser;
        /**
         * Determines whether images should be included in the XML sitemap.
         *
         * @var bool
         */
        private $include_images;
        /**
         * Set up object properties for data reuse.
         */
        public function __construct()
        {
        }
        /**
         * Check if provider supports given item type.
         *
         * @param string $type Type string to check for.
         *
         * @return boolean
         */
        public function handles_type($type)
        {
        }
        /**
         * Retrieves the links for the sitemap.
         *
         * @param int $max_entries Entries per sitemap.
         *
         * @return array
         */
        public function get_index_links($max_entries)
        {
        }
        /**
         * Get set of sitemap link data.
         *
         * @param string $type         Sitemap type.
         * @param int    $max_entries  Entries per sitemap.
         * @param int    $current_page Current page of the sitemap.
         *
         * @throws OutOfBoundsException When an invalid page is requested.
         *
         * @return array
         */
        public function get_sitemap_links($type, $max_entries, $current_page)
        {
        }
        /**
         * Check if taxonomy by name is valid to appear in sitemaps.
         *
         * @param string $taxonomy_name Taxonomy name to check.
         *
         * @return bool
         */
        public function is_valid_taxonomy($taxonomy_name)
        {
        }
        /**
         * Get the Image Parser.
         *
         * @return WPSEO_Sitemap_Image_Parser
         */
        protected function get_image_parser()
        {
        }
        /* ********************* DEPRECATED METHODS ********************* */
        /**
         * Get all the options.
         *
         * @deprecated 7.0
         * @codeCoverageIgnore
         */
        protected function get_options()
        {
        }
    }
}
namespace Yoast\WP\Free\Builders {
    /**
     * Formats the term meta to indexable format.
     */
    class Indexable_Author_Builder
    {
        /**
         * Formats the data.
         *
         * @param int                             $user_id   The user to retrieve the indexable for.
         * @param \Yoast\WP\Free\Models\Indexable $indexable The indexable to format.
         *
         * @return \Yoast\WP\Free\Models\Indexable The extended indexable.
         */
        public function build($user_id, $indexable)
        {
        }
        /**
         * Retrieves the meta data for this indexable.
         *
         * @param int $user_id The user to retrieve the meta data for.
         *
         * @return array List of meta entries.
         */
        protected function get_meta_data($user_id)
        {
        }
        /**
         * Retrieves the author meta.
         *
         * @param int    $user_id The user to retrieve the indexable for.
         * @param string $key     The meta entry to retrieve.
         *
         * @return string The value of the meta field.
         */
        protected function get_author_meta($user_id, $key)
        {
        }
    }
    /**
     * Formats the post meta to indexable format.
     */
    class Indexable_Post_Builder
    {
        /**
         * @var \Yoast\WP\Free\Repositories\SEO_Meta_Repository
         */
        protected $seo_meta_repository;
        /**
         * Indexable_Post_Builder constructor.
         *
         * @param \Yoast\WP\Free\Repositories\SEO_Meta_Repository $seo_meta_repository The SEO Meta repository.
         */
        public function __construct(\Yoast\WP\Free\Repositories\SEO_Meta_Repository $seo_meta_repository)
        {
        }
        /**
         * Formats the data.
         *
         * @param int                             $post_id   The post ID to use.
         * @param \Yoast\WP\Free\Models\Indexable $indexable The indexable to format.
         *
         * @return \Yoast\WP\Free\Models\Indexable The extended indexable.
         */
        public function build($post_id, $indexable)
        {
        }
        /**
         * Converts the meta robots noindex value to the indexable value.
         *
         * @param int $value Meta value to convert.
         *
         * @return bool|null True for noindex, false for index, null for default of parent/type.
         */
        protected function get_robots_noindex($value)
        {
        }
        /**
         * Retrieves the robot options to search for.
         *
         * @return array List of robots values.
         */
        protected function get_robots_options()
        {
        }
        /**
         * Determines the focus keyword score.
         *
         * @param string $keyword The focus keyword that is set.
         * @param int    $score   The score saved on the meta data.
         *
         * @return null|int Score to use.
         */
        protected function get_keyword_score($keyword, $score)
        {
        }
        /**
         * Retrieves the lookup table.
         *
         * @return array Lookup table for the indexable fields.
         */
        protected function get_indexable_lookup()
        {
        }
        /**
         * Updates the link count from existing data.
         *
         * @param int                             $post_id   The post ID to use.
         * @param \Yoast\WP\Free\Models\Indexable $indexable The indexable to extend.
         *
         * @return \Yoast\WP\Free\Models\Indexable The extended indexable.
         */
        protected function set_link_count($post_id, $indexable)
        {
        }
        /**
         * Retrieves the current value for the meta field.
         *
         * @param int    $post_id  The post ID to use.
         * @param string $meta_key Meta key to fetch.
         *
         * @return mixed The value of the indexable entry to use.
         */
        protected function get_meta_value($post_id, $meta_key)
        {
        }
    }
    /**
     * Formats the term meta to indexable format.
     */
    class Indexable_Term_Builder
    {
        /**
         * Formats the data.
         *
         * @param int                             $term_id   ID of the term to save data for.
         * @param \Yoast\WP\Free\Models\Indexable $indexable The indexable to format.
         *
         * @return \Yoast\WP\Free\Models\Indexable The extended indexable.
         */
        public function build($term_id, $indexable)
        {
        }
        /**
         * Converts the meta noindex value to the indexable value.
         *
         * @param string $meta_value Term meta to base the value on.
         *
         * @return bool|null
         */
        protected function get_noindex_value($meta_value)
        {
        }
        /**
         * Determines the focus keyword score.
         *
         * @param string $keyword The focus keyword that is set.
         * @param int    $score   The score saved on the meta data.
         *
         * @return null|int Score to use.
         */
        protected function get_keyword_score($keyword, $score)
        {
        }
        /**
         * Retrieves the lookup table.
         *
         * @return array Lookup table for the indexable fields.
         */
        protected function get_indexable_lookup()
        {
        }
        /**
         * Retrieves a meta value from the given meta data.
         *
         * @param string $meta_key  The key to extract.
         * @param array  $term_meta The meta data.
         *
         * @return null|string The meta value.
         */
        protected function get_meta_value($meta_key, $term_meta)
        {
        }
    }
}
namespace Yoast\WP\Free\Conditionals {
    /**
     * Conditional interface, used to prevent integrations from loading.
     *
     * @package Yoast\WP\Free\Conditionals
     */
    interface Conditional
    {
        /**
         * Returns whether or not this conditional is met.
         *
         * @return boolean Whether or not the conditional is met.
         */
        public function is_met();
    }
    /**
     * Abstract class for creating conditionals based on feature flags.
     */
    abstract class Feature_Flag_Conditional implements \Yoast\WP\Free\Conditionals\Conditional
    {
        /**
         * Returns whether or not this conditional is met.
         *
         * @return boolean Whether or not the conditional is met.
         */
        public function is_met()
        {
        }
        /**
         * Returns the name of the feature flag.
         * 'YOAST_SEO_' is automatically prepended to it and it will be uppercased.
         *
         * @return string the name of the feature flag.
         */
        protected abstract function get_feature_flag();
    }
    /**
     * Conditional for the indexables feature flag.
     */
    class Indexables_Feature_Flag_Conditional extends \Yoast\WP\Free\Conditionals\Feature_Flag_Conditional
    {
        /**
         * @inheritdoc
         */
        protected function get_feature_flag()
        {
        }
    }
    /**
     * Trait for integrations that do not have any conditionals.
     */
    trait No_Conditionals
    {
        /**
         * Returns an empty array, meaning no conditionals are required to load whatever uses this trait.
         *
         * @return array The conditionals that must be met to load this.
         */
        public static function get_conditionals()
        {
        }
    }
}
namespace Yoast\WP\Free\WordPress {
    /**
     * An interface for registering integrations with WordPress
     */
    interface Loadable
    {
        /**
         * Returns the conditionals based in which this loadable should be active.
         *
         * @return array
         */
        public static function get_conditionals();
    }
    /**
     * An interface for registering integrations with WordPress
     */
    interface Initializer extends \Yoast\WP\Free\WordPress\Loadable
    {
        /**
         * Runs this initializer.
         *
         * @return void
         */
        public function initialize();
    }
}
namespace Yoast\WP\Free\Database {
    /**
     * Configures the ORM with the database credentials.
     */
    class Database_Setup implements \Yoast\WP\Free\WordPress\Initializer
    {
        use \Yoast\WP\Free\Conditionals\No_Conditionals;
        /**
         * The logger object.
         *
         * @var \Psr\Log\LoggerInterface
         */
        protected $logger;
        /**
         * Database_Setup constructor.
         *
         * @param \Yoast\WP\Free\Loggers\Logger $logger The logger.
         */
        public function __construct(\Yoast\WP\Free\Loggers\Logger $logger)
        {
        }
        /**
         * Initializes the database setup.
         */
        public function initialize()
        {
        }
    }
    /**
     * Triggers database migrations and handles results.
     */
    class Migration_Runner implements \Yoast\WP\Free\WordPress\Initializer
    {
        /**
         * Retrieves the conditionals for the migrations.
         *
         * @return array The conditionals.
         */
        public static function get_conditionals()
        {
        }
        /**
         * The value for a migration success state.
         *
         * @var int
         */
        const MIGRATION_STATE_SUCCESS = 0;
        /**
         * The value for a migration state error.
         *
         * @var int
         */
        const MIGRATION_STATE_ERROR = 1;
        /**
         * The value that communicates a migration problem.
         *
         * @var string
         */
        const MIGRATION_ERROR_TRANSIENT_KEY = 'yoast_migration_problem_';
        /**
         * The Ruckusing framework runner.
         *
         * @var \Yoast\WP\Free\Database\Ruckusing_Framework
         */
        protected $framework;
        /**
         * The logger object.
         *
         * @var \Yoast\WP\Free\Loggers\Logger
         */
        protected $logger;
        /**
         * Migrations constructor.
         *
         * @param \Yoast\WP\Free\Database\Ruckusing_Framework $framework The Ruckusing framework runner.
         * @param \Yoast\WP\Free\Loggers\Logger               $logger    A PSR compatible logger.
         */
        public function __construct(\Yoast\WP\Free\Database\Ruckusing_Framework $framework, \Yoast\WP\Free\Loggers\Logger $logger)
        {
        }
        /**
         * Runs this initializer.
         *
         * @throws \Exception When a migration errored.
         *
         * @return void
         */
        public function initialize()
        {
        }
        /**
         * Initializes the migrations.
         *
         * @param string $name                  The name of the migration.
         * @param string $migrations_table_name The migrations table name.
         * @param string $migrations_directory  The migrations directory.
         *
         * @return bool True on success, false on failure.
         * @throws \Exception If the migration fails and YOAST_ENVIRONMENT is not production.
         */
        public function run_migrations($name, $migrations_table_name, $migrations_directory)
        {
        }
        /**
         * Retrieves the state of the migrations.
         *
         * @param string $name The name of the migration.
         *
         * @return bool True if migrations have completed successfully.
         */
        public function is_usable($name)
        {
        }
        /**
         * Retrieves the state of the migrations.
         *
         * @param string $name The name of the migration.
         *
         * @return bool True if migrations have completed successfully.
         */
        public function has_migration_error($name)
        {
        }
        /**
         * Handles state persistence for a failed migration environment.
         *
         * @param string $name    The name of the migration.
         * @param string $message Message explaining the reason for the failed state.
         *
         * @return void
         */
        protected function set_failed_state($name, $message)
        {
        }
        /**
         * Removes the problem state from the system.
         *
         * @param string $name The name of the migration.
         *
         * @return void
         */
        protected function set_success_state($name)
        {
        }
        /**
         * Retrieves the current migration state.
         *
         * @param string $name The name of the migration.
         *
         * @return int|null Migration state.
         */
        protected function get_migration_state($name)
        {
        }
        /**
         * Retrieves the error state transient key to use.
         *
         * @param string $name The name of the migration.
         *
         * @return string The transient key to use for storing the error state.
         */
        protected function get_error_transient_key($name)
        {
        }
    }
    /**
     * Class Ruckusing_Framework
     */
    class Ruckusing_Framework
    {
        /**
         * The database object.
         *
         * @var \wpdb
         */
        protected $wpdb;
        /**
         * The dependency management checker.
         *
         * @var \Yoast\WP\Free\Config\Dependency_Management
         */
        protected $dependency_management;
        /**
         * The migration logger object.
         *
         * @var \Yoast\WP\Free\Loggers\Migration_Logger
         */
        protected $migration_logger;
        /**
         * Ruckusing_Framework constructor.
         *
         * @param \wpdb                                       $wpdb                  The wpdb instance.
         * @param \Yoast\WP\Free\Config\Dependency_Management $dependency_management The dependency management checker.
         * @param \Yoast\WP\Free\Loggers\Migration_Logger     $migration_logger      The migration logger, extends the
         *                                                                           Ruckusing logger.
         */
        public function __construct(\wpdb $wpdb, \Yoast\WP\Free\Config\Dependency_Management $dependency_management, \Yoast\WP\Free\Loggers\Migration_Logger $migration_logger)
        {
        }
        /**
         * Gets the ruckusing framework runner.
         *
         * @param string $migrations_table_name The migrations table name.
         * @param string $migrations_directory  The migrations directory.
         *
         * @return \Ruckusing_FrameworkRunner The framework runner.
         */
        public function get_framework_runner($migrations_table_name, $migrations_directory)
        {
        }
        /**
         * Gets the ruckusing framework task manager.
         *
         * @param \Ruckusing_Adapter_MySQL_Base $adapter               The MySQL adapter.
         * @param string                                        $migrations_table_name The migrations table name.
         * @param string                                        $migrations_directory  The migrations directory.
         *
         * @return \Ruckusing_Task_Manager The task manager.
         * @throws \Ruckusing_Exception If any of the arguments are invalid.
         */
        public function get_framework_task_manager($adapter, $migrations_table_name, $migrations_directory)
        {
        }
        /**
         * Returns the framework configuration for a given migrations table name and directory.
         *
         * @param string $migrations_table_name The migrations table name.
         * @param string $migrations_directory  The migrations directory.
         *
         * @return array The configuration
         */
        public function get_configuration($migrations_table_name, $migrations_directory)
        {
        }
        /**
         * Sets the constant required by the ruckusing framework.
         *
         * @return bool Whether or not the constant is now the correct value.
         */
        public function maybe_set_constant()
        {
        }
    }
}
namespace Yoast\WP\Free\Exceptions {
    /**
     * The exception when a method does not exists.
     */
    class Missing_Method extends \Exception
    {
        /**
         * Creates exception for a method that does not exists in a class.
         *
         * @param string $method     The method that does not exists.
         * @param string $class_name The class name.
         *
         * @return static Instance of the exception.
         */
        public static function for_class($method, $class_name)
        {
        }
    }
}
namespace Yoast\WP\Free\Generated {
    /**
     * This class has been auto-generated
     * by the Symfony Dependency Injection Component.
     *
     * @final since Symfony 3.3
     */
    class Cached_Container extends \Symfony\Component\DependencyInjection\Container
    {
        private $parameters;
        private $targetDirs = [];
        public function __construct()
        {
        }
        public function getRemovedIds()
        {
        }
        public function compile()
        {
        }
        public function isCompiled()
        {
        }
        public function isFrozen()
        {
        }
        /**
         * Gets the public 'Yoast\WP\Free\Conditionals\Admin_Conditional' shared autowired service.
         *
         * @return \Yoast\WP\Free\Conditionals\Admin_Conditional
         */
        protected function getAdminConditionalService()
        {
        }
        /**
         * Gets the public 'Yoast\WP\Free\Conditionals\Indexables_Feature_Flag_Conditional' shared autowired service.
         *
         * @return \Yoast\WP\Free\Conditionals\Indexables_Feature_Flag_Conditional
         */
        protected function getIndexablesFeatureFlagConditionalService()
        {
        }
        /**
         * Gets the public 'Yoast\WP\Free\Database\Database_Setup' shared autowired service.
         *
         * @return \Yoast\WP\Free\Database\Database_Setup
         */
        protected function getDatabaseSetupService()
        {
        }
        /**
         * Gets the public 'Yoast\WP\Free\Database\Migration_Runner' shared autowired service.
         *
         * @return \Yoast\WP\Free\Database\Migration_Runner
         */
        protected function getMigrationRunnerService()
        {
        }
        /**
         * Gets the public 'Yoast\WP\Free\Loader' shared autowired service.
         *
         * @return \Yoast\WP\Free\Loader
         */
        protected function getLoaderService()
        {
        }
        /**
         * Gets the public 'Yoast\WP\Free\Watchers\Indexable_Author_Watcher' shared autowired service.
         *
         * @return \Yoast\WP\Free\Watchers\Indexable_Author_Watcher
         */
        protected function getIndexableAuthorWatcherService()
        {
        }
        /**
         * Gets the public 'Yoast\WP\Free\Watchers\Indexable_Post_Watcher' shared autowired service.
         *
         * @return \Yoast\WP\Free\Watchers\Indexable_Post_Watcher
         */
        protected function getIndexablePostWatcherService()
        {
        }
        /**
         * Gets the public 'Yoast\WP\Free\Watchers\Indexable_Term_Watcher' shared autowired service.
         *
         * @return \Yoast\WP\Free\Watchers\Indexable_Term_Watcher
         */
        protected function getIndexableTermWatcherService()
        {
        }
        /**
         * Gets the public 'Yoast\WP\Free\Watchers\Primary_Term_Watcher' shared autowired service.
         *
         * @return \Yoast\WP\Free\Watchers\Primary_Term_Watcher
         */
        protected function getPrimaryTermWatcherService()
        {
        }
        /**
         * Gets the private 'Yoast\WP\Free\Builders\Indexable_Author_Builder' shared autowired service.
         *
         * @return \Yoast\WP\Free\Builders\Indexable_Author_Builder
         */
        protected function getIndexableAuthorBuilderService()
        {
        }
        /**
         * Gets the private 'Yoast\WP\Free\Builders\Indexable_Post_Builder' shared autowired service.
         *
         * @return \Yoast\WP\Free\Builders\Indexable_Post_Builder
         */
        protected function getIndexablePostBuilderService()
        {
        }
        /**
         * Gets the private 'Yoast\WP\Free\Builders\Indexable_Term_Builder' shared autowired service.
         *
         * @return \Yoast\WP\Free\Builders\Indexable_Term_Builder
         */
        protected function getIndexableTermBuilderService()
        {
        }
        /**
         * Gets the private 'Yoast\WP\Free\Loggers\Logger' shared autowired service.
         *
         * @return \Yoast\WP\Free\Loggers\Logger
         */
        protected function getLoggerService()
        {
        }
        /**
         * Gets the private 'Yoast\WP\Free\Repositories\Indexable_Repository' shared autowired service.
         *
         * @return \Yoast\WP\Free\Repositories\Indexable_Repository
         */
        protected function getIndexableRepositoryService()
        {
        }
        /**
         * Gets the private 'Yoast\WP\Free\Repositories\Primary_Term_Repository' shared autowired service.
         *
         * @return \Yoast\WP\Free\Repositories\Primary_Term_Repository
         */
        protected function getPrimaryTermRepositoryService()
        {
        }
        /**
         * Gets the private 'Yoast\WP\Free\Repositories\SEO_Links_Repository' shared autowired service.
         *
         * @return \Yoast\WP\Free\Repositories\SEO_Links_Repository
         */
        protected function getSEOLinksRepositoryService()
        {
        }
        /**
         * Gets the private 'Yoast\WP\Free\Repositories\SEO_Meta_Repository' shared autowired service.
         *
         * @return \Yoast\WP\Free\Repositories\SEO_Meta_Repository
         */
        protected function getSEOMetaRepositoryService()
        {
        }
        /**
         * Gets the private 'wp_query' shared service.
         *
         * @return \WP_Query
         */
        protected function getWpQueryService()
        {
        }
        /**
         * Gets the private 'wpdb' shared service.
         *
         * @return \wpdb
         */
        protected function getWpdbService()
        {
        }
    }
}
namespace Yoast\WP\Free\Helpers {
    /**
     * Class Author_Archive_Helper
     */
    class Author_Archive_Helper
    {
        /**
         * Gets the array of post types that are shown on an author's archive.
         *
         * @return array The post types that are shown on an author's archive.
         */
        public function get_author_archive_post_types()
        {
        }
    }
    /**
     * Class Home_Url_Helper
     */
    class Home_Url_Helper
    {
        /**
         * The home url.
         *
         * @var string
         */
        protected static $home_url;
        /**
         * The parsed home url.
         *
         * @var array
         */
        protected static $parsed_home_url;
        /**
         * Retrieves the home url.
         *
         * @return string The home url.
         */
        public function get()
        {
        }
        /**
         * Retrieves the home url that has been parsed.
         *
         * @return array The parsed url.
         */
        public function get_parsed()
        {
        }
    }
}
namespace Yoast\WP\Free {
    /**
     * Class that manages loading integrations if and only if all their conditionals are met.
     */
    class Loader
    {
        /**
         * The registered integrations.
         *
         * @var \Yoast\WP\Free\WordPress\Integration[]
         */
        protected $integrations = [];
        /**
         * The registered initializer.
         *
         * @var \Yoast\WP\Free\WordPress\Initializer[]
         */
        protected $initializers = [];
        /**
         * The dependency injection container.
         *
         * @var \Symfony\Component\DependencyInjection\ContainerInterface
         */
        protected $container;
        /**
         * Loader constructor.
         *
         * @param \Symfony\Component\DependencyInjection\ContainerInterface $container The dependency injection container.
         */
        public function __construct(\Symfony\Component\DependencyInjection\ContainerInterface $container)
        {
        }
        /**
         * Registers an integration.
         *
         * @param string $class The class name of the integration to be loaded.
         *
         * @return void
         */
        public function register_integration($class)
        {
        }
        /**
         * Registers a initializer.
         *
         * @param string $class The class name of the initializer to be loaded.
         *
         * @return void
         */
        public function register_initializer($class)
        {
        }
        /**
         * Loads all registered classes if their conditionals are met.
         *
         * @return void
         */
        public function load()
        {
        }
        /**
         * Loads all registered initializers if their conditionals are met.
         *
         * @return void
         */
        protected function load_initializers()
        {
        }
        /**
         * Loads all registered integrations if their conditionals are met.
         *
         * @return void
         */
        protected function load_integrations()
        {
        }
        /**
         * Checks if all conditionals of a given integration are met.
         *
         * @param \Yoast\WP\Free\WordPress\Integration $class The class name of the integration.
         *
         * @return bool Whether or not all conditionals of the integration are met.
         */
        protected function conditionals_are_met($class)
        {
        }
    }
}
namespace Yoast\WP\Free\Loggers {
    /**
     * Creates an instance of a logger object.
     */
    class Logger implements \Psr\Log\LoggerInterface
    {
        use \Psr\Log\LoggerTrait;
        /**
         * The logger object.
         *
         * @var \Psr\Log\LoggerInterface
         */
        protected $wrapped_logger;
        /**
         * Logger constructor.
         */
        public function __construct()
        {
        }
        /**
         * Logs with an arbitrary level.
         *
         * @param mixed  $level   The log level.
         * @param string $message The log message.
         * @param array  $context The log context.
         *
         * @return void
         */
        public function log($level, $message, array $context = [])
        {
        }
    }
    /**
     * Logger to make sure the output is not written into a file.
     */
    class Migration_Logger extends \Ruckusing_Util_Logger
    {
        /**
         * The logger object.
         *
         * @var \Yoast\WP\Free\Loggers\Logger
         */
        protected $logger;
        /**
         * Creates an instance of Ruckusing_Util_Logger.
         *
         * @codeCoverageIgnore
         *
         * @param \Yoast\WP\Free\Loggers\Logger $logger The logger to wrap.
         */
        public function __construct(\Yoast\WP\Free\Loggers\Logger $logger)
        {
        }
        /**
         * Logs a message.
         *
         * @codeCoverageIgnore
         *
         * @param string $msg Message to log.
         *
         * @return void
         */
        public function log($msg)
        {
        }
        /**
         * Close the log file handler.
         *
         * @codeCoverageIgnore
         *
         * @return void
         */
        public function close()
        {
        }
    }
}
namespace Yoast\WP\Free\ORM {
    /**
     * Make Model compatible with WordPress.
     *
     * Model base class. Your model objects should extend
     * this class. A minimal subclass would look like:
     *
     * class Widget extends Model {
     * }
     *
     * The methods documented below are magic methods that conform to PSR-1.
     * This documentation exposes these methods to doc generators and IDEs.
     *
     * @link http://www.php-fig.org/psr/psr-1/
     *
     * @method void setOrm($orm)
     * @method $this setExpr($property, $value = null)
     * @method bool isDirty($property)
     * @method bool isNew()
     * @method Array asArray()
     */
    class Yoast_Model
    {
        /**
         * Default ID column for all models. Can be overridden by adding
         * a public static $id_column property to your model classes.
         *
         * @var string
         */
        const DEFAULT_ID_COLUMN = 'id';
        /**
         * Default foreign key suffix used by relationship methods.
         *
         * @var string
         */
        const DEFAULT_FOREIGN_KEY_SUFFIX = '_id';
        /**
         * Set a prefix for model names. This can be a namespace or any other
         * abitrary prefix such as the PEAR naming convention.
         *
         * @example Model::$auto_prefix_models = 'MyProject_MyModels_'; //PEAR
         * @example Model::$auto_prefix_models = '\MyProject\MyModels\'; //Namespaces
         *
         * @var string $auto_prefix_models
         */
        public static $auto_prefix_models = '\\Yoast\\WP\\Free\\Models\\';
        /**
         * Set a logger to use for all models.
         *
         * @var \Psr\Log\LoggerInterface $logger
         */
        public static $logger;
        /**
         * Set true to to ignore namespace information when computing table names
         * from class names.
         *
         * @example Model::$short_table_names = true;
         * @example Model::$short_table_names = false; // default
         *
         * @var bool $short_table_names
         */
        public static $short_table_names = false;
        /**
         * The ORM instance used by this model instance to communicate with the database.
         *
         * @var \ORM $orm
         */
        public $orm;
        /**
         * The table name for the implemented Model.
         *
         * @var string
         */
        public static $table;
        /**
         * Whether or not this model uses timestamps.
         *
         * @var bool
         */
        protected $uses_timestamps = false;
        /**
         * Hacks around the Model to provide WordPress prefix to tables.
         *
         * @param string $class_name   Type of Model to load.
         * @param bool   $yoast_prefix Optional. True to prefix the table name with the Yoast prefix.
         *
         * @return \Yoast\WP\Free\ORM\ORMWrapper Wrapper to use.
         */
        public static function of_type($class_name, $yoast_prefix = true)
        {
        }
        /**
         * Creates a model without the Yoast prefix.
         *
         * @param string $class_name Type of Model to load.
         *
         * @return \Yoast\WP\Free\ORM\ORMWrapper
         */
        public static function of_wp_type($class_name)
        {
        }
        /**
         * Exposes method to get the table name to use.
         *
         * @param string $table_name   Simple table name.
         * @param bool   $yoast_prefix Optional. True to prefix the table name with the Yoast prefix.
         *
         * @return string Prepared full table name.
         */
        public static function get_table_name($table_name, $yoast_prefix = true)
        {
        }
        /**
         * Sets the table name for the given class name.
         *
         * @param string $class_name The class to set the table name for.
         *
         * @return void
         */
        protected function set_table_name($class_name)
        {
        }
        /**
         * Retrieve the value of a static property on a class. If the
         * class or the property does not exist, returns the default
         * value supplied as the third argument (which defaults to null).
         *
         * @param string      $class_name The target class name.
         * @param string      $property   The property to get the value for.
         * @param null|string $default    Default value when property does not exist.
         *
         * @return string The value of the property.
         */
        protected static function get_static_property($class_name, $property, $default = null)
        {
        }
        /**
         * Static method to get a table name given a class name.
         * If the supplied class has a public static property
         * named $table, the value of this property will be
         * returned.
         *
         * If not, the class name will be converted using
         * the class_name_to_table_name() method.
         *
         * If Model::$short_table_names == true or public static
         * property $table_use_short_name == true then $class_name passed
         * to class_name_to_table_name() is stripped of namespace information.
         *
         * @param string $class_name The class name to get the table name for.
         *
         * @return string The table name.
         */
        protected static function get_table_name_for_class($class_name)
        {
        }
        /**
         * Should short table names, disregarding class namespaces, be computed?
         *
         * $class_property overrides $global_option, unless $class_property is null.
         *
         * @param string $class_name The class name to get short name for.
         *
         * @return bool True when short table name should be used.
         */
        protected static function use_short_table_name($class_name)
        {
        }
        /**
         * Convert a namespace to the standard PEAR underscore format.
         *
         * Then convert a class name in CapWords to a table name in
         * lowercase_with_underscores.
         *
         * Finally strip doubled up underscores.
         *
         * For example, CarTyre would be converted to car_tyre. And
         * Project\Models\CarTyre would be project_models_car_tyre.
         *
         * @param string $class_name The class name to get the table name for.
         *
         * @return string The table name.
         */
        protected static function class_name_to_table_name($class_name)
        {
        }
        /**
         * Return the ID column name to use for this class. If it is
         * not set on the class, returns null.
         *
         * @param string $class_name The class name to get the ID column for.
         *
         * @return string|null The ID column name.
         */
        protected static function get_id_column_name($class_name)
        {
        }
        /**
         * Build a foreign key based on a table name. If the first argument
         * (the specified foreign key column name) is null, returns the second
         * argument (the name of the table) with the default foreign key column
         * suffix appended.
         *
         * @param string $specified_foreign_key_name The keyname to build.
         * @param string $table_name                 The table name to build the key name for.
         *
         * @return string The built foreign key name.
         */
        protected static function build_foreign_key_name($specified_foreign_key_name, $table_name)
        {
        }
        /**
         * Factory method used to acquire instances of the given class.
         * The class name should be supplied as a string, and the class
         * should already have been loaded by PHP (or a suitable autoloader
         * should exist). This method actually returns a wrapped ORM object
         * which allows a database query to be built. The wrapped ORM object is
         * responsible for returning instances of the correct class when
         * its find_one or find_many methods are called.
         *
         * @param string      $class_name      The target class name.
         * @param null|string $connection_name The name of the connection.
         *
         * @return \Yoast\WP\Free\ORM\ORMWrapper Instance of the ORM wrapper.
         */
        public static function factory($class_name, $connection_name = null)
        {
        }
        /**
         * Internal method to construct the queries for both the has_one and
         * has_many methods. These two types of association are identical; the
         * only difference is whether find_one or find_many is used to complete
         * the method chain.
         *
         * @param string      $associated_class_name                    The associated class name.
         * @param null|string $foreign_key_name                         The foreign key name in the associated table.
         * @param null|string $foreign_key_name_in_current_models_table The foreign key in the current models table.
         * @param null|string $connection_name                          The name of the connection.
         *
         * @return \Yoast\WP\Free\ORM\ORMWrapper
         * @throws \Exception When ID of current model has a null value.
         */
        protected function has_one_or_many($associated_class_name, $foreign_key_name = null, $foreign_key_name_in_current_models_table = null, $connection_name = null)
        {
        }
        /**
         * Helper method to manage one-to-one relations where the foreign
         * key is on the associated table.
         *
         * @param string      $associated_class_name                    The associated class name.
         * @param null|string $foreign_key_name                         The foreign key name in the associated table.
         * @param null|string $foreign_key_name_in_current_models_table The foreign key in the current models table.
         * @param null|string $connection_name                          The name of the connection.
         *
         * @return \Yoast\WP\Free\ORM\ORMWrapper Instance of the ORM.
         * @throws \Exception  When ID of current model has a null value.
         */
        protected function has_one($associated_class_name, $foreign_key_name = null, $foreign_key_name_in_current_models_table = null, $connection_name = null)
        {
        }
        /**
         * Helper method to manage one-to-many relations where the foreign
         * key is on the associated table.
         *
         * @param string      $associated_class_name                    The associated class name.
         * @param null|string $foreign_key_name                         The foreign key name in the associated table.
         * @param null|string $foreign_key_name_in_current_models_table The foreign key in the current models table.
         * @param null|string $connection_name                          The name of the connection.
         *
         * @return \Yoast\WP\Free\ORM\ORMWrapper Instance of the ORM.
         * @throws \Exception When ID has a null value.
         */
        protected function has_many($associated_class_name, $foreign_key_name = null, $foreign_key_name_in_current_models_table = null, $connection_name = null)
        {
        }
        /**
         * Helper method to manage one-to-one and one-to-many relations where
         * the foreign key is on the base table.
         *
         * @param string      $associated_class_name                       The associated class name.
         * @param null|string $foreign_key_name                            The foreign key in the current models table.
         * @param null|string $foreign_key_name_in_associated_models_table The foreign key in the associated table.
         * @param null|string $connection_name                             The name of the connection.
         *
         * @return $this|null Instance of the foreign model.
         */
        protected function belongs_to($associated_class_name, $foreign_key_name = null, $foreign_key_name_in_associated_models_table = null, $connection_name = null)
        {
        }
        /**
         * Helper method to manage many-to-many relationships via an intermediate model. See
         * README for a full explanation of the parameters.
         *
         * @param string      $associated_class_name   The associated class name.
         * @param null|string $join_class_name         The class name to join.
         * @param null|string $key_to_base_table       The key to the the current models table.
         * @param null|string $key_to_associated_table The key to the associated table.
         * @param null|string $key_in_base_table       The key in the current models table.
         * @param null|string $key_in_associated_table The key in the associated table.
         * @param null|string $connection_name         The name of the connection.
         *
         * @return \Yoast\WP\Free\ORM\ORMWrapper Instance of the ORM.
         */
        protected function has_many_through($associated_class_name, $join_class_name = null, $key_to_base_table = null, $key_to_associated_table = null, $key_in_base_table = null, $key_in_associated_table = null, $connection_name = null)
        {
        }
        /**
         * Set the wrapped ORM instance associated with this Model instance.
         *
         * @param \ORM $orm The ORM instance to set.
         *
         * @return void
         */
        public function set_orm($orm)
        {
        }
        /**
         * Magic getter method, allows $model->property access to data.
         *
         * @param string $property The property to get.
         *
         * @return null|string The value of the property
         */
        public function __get($property)
        {
        }
        /**
         * Magic setter method, allows $model->property = 'value' access to data.
         *
         * @param string $property The property to set.
         * @param string $value    The value to set.
         *
         * @return void
         */
        public function __set($property, $value)
        {
        }
        /**
         * Magic unset method, allows unset($model->property)
         *
         * @param string $property The property to unset.
         *
         * @return void
         */
        public function __unset($property)
        {
        }
        /**
         * Magic isset method, allows isset($model->property) to work correctly.
         *
         * @param string $property The property to check.
         *
         * @return bool True when value is set.
         */
        public function __isset($property)
        {
        }
        /**
         * Getter method, allows $model->get('property') access to data
         *
         * @param string $property The property to get.
         *
         * @return string The value of a property.
         */
        public function get($property)
        {
        }
        /**
         * Setter method, allows $model->set('property', 'value') access to data.
         *
         * @param string|array $property The property to set.
         * @param string|null  $value    The value to give.
         *
         * @return static Current object.
         */
        public function set($property, $value = null)
        {
        }
        /**
         * Setter method, allows $model->set_expr('property', 'value') access to data.
         *
         * @param string|array $property The property to set.
         * @param string|null  $value    The value to give.
         *
         * @return static Current object.
         */
        public function set_expr($property, $value = null)
        {
        }
        /**
         * Check whether the given property has changed since the object was created or saved.
         *
         * @param string $property The property to check.
         *
         * @return bool True when field is changed.
         */
        public function is_dirty($property)
        {
        }
        /**
         * Check whether the model was the result of a call to create() or not.
         *
         * @return bool True when is new.
         */
        public function is_new()
        {
        }
        /**
         * Wrapper for Idiorm's as_array method.
         *
         * @return array The models data as array.
         */
        public function as_array()
        {
        }
        /**
         * Save the data associated with this model instance to the database.
         *
         * @return null Nothing.
         */
        public function save()
        {
        }
        /**
         * Delete the database row associated with this model instance.
         *
         * @return null Nothing.
         */
        public function delete()
        {
        }
        /**
         * Get the database ID of this model instance.
         *
         * @return int The database ID of the models instance.
         * @throws \Exception When the ID is a null value.
         */
        public function id()
        {
        }
        /**
         * Hydrate this model instance with an associative array of data.
         * WARNING: The keys in the array MUST match with columns in the
         * corresponding database table. If any keys are supplied which
         * do not match up with columns, the database will throw an error.
         *
         * @param array $data The data to pass to the ORM.
         *
         * @return void
         */
        public function hydrate($data)
        {
        }
        /**
         * Calls static methods directly on the ORMWrapper
         *
         * @param string $method    The method to call.
         * @param array  $arguments The arguments to use.
         *
         * @return array Result of the static call.
         */
        public static function __callStatic($method, $arguments)
        {
        }
        /**
         * Magic method to capture calls to undefined class methods.
         * In this case we are attempting to convert camel case formatted
         * methods into underscore formatted methods.
         *
         * This allows us to call methods using camel case and remain
         * backwards compatible.
         *
         * @param string $name      The method to call.
         * @param array  $arguments The arguments to use.
         *
         * @throws \Yoast\WP\Free\Exceptions\Missing_Method When the method does not exist.
         *
         * @return bool|\Yoast\WP\Free\ORMWrapper Result of the call.
         */
        public function __call($name, $arguments)
        {
        }
    }
}
namespace Yoast\WP\Free\Models {
    /**
     * Abstract class for indexable extensions.
     */
    abstract class Indexable_Extension extends \Yoast\WP\Free\ORM\Yoast_Model
    {
        /**
         * @var \Yoast\WP\Free\Models\Indexable
         */
        protected $indexable = null;
        /**
         * Returns the indexable this extension belongs to.
         *
         * @return \Yoast\WP\Free\Models\Indexable The indexable.
         */
        public function indexable()
        {
        }
    }
    /**
     * Indexable table definition.
     *
     * @property int     $id
     * @property int     $object_id
     * @property string  $object_type
     * @property string  $object_sub_type
     *
     * @property string  $created_at
     * @property string  $updated_at
     *
     * @property string  $permalink
     * @property string  $permalink_hash
     * @property string  $canonical
     * @property int     $content_score
     *
     * @property boolean $is_robots_noindex
     * @property boolean $is_robots_nofollow
     * @property boolean $is_robots_noarchive
     * @property boolean $is_robots_noimageindex
     * @property boolean $is_robots_nosnippet
     *
     * @property string  $title
     * @property string  $description
     * @property string  $breadcrumb_title
     *
     * @property boolean $is_cornerstone
     *
     * @property string  $primary_focus_keyword
     * @property int     $primary_focus_keyword_score
     *
     * @property int     $readability_score
     *
     * @property int     $link_count
     * @property int     $incoming_link_count
     *
     * @property string  $og_title
     * @property string  $og_description
     * @property string  $og_image
     *
     * @property string  $twitter_title
     * @property string  $twitter_description
     * @property string  $twitter_image
     */
    class Indexable extends \Yoast\WP\Free\ORM\Yoast_Model
    {
        /**
         * Whether nor this model uses timestamps.
         *
         * @var bool
         */
        protected $uses_timestamps = true;
        /**
         * The loaded indexable extensions.
         *
         * @var \Yoast\WP\Free\Models\Indexable_Extension[]
         */
        protected $loaded_extensions = [];
        /**
         * Returns an Indexable_Extension by it's name.
         *
         * @param string $class_name The class name of the extension to load.
         *
         * @return \Yoast\WP\Free\Models\Indexable_Extension|bool The extension.
         */
        public function get_extension($class_name)
        {
        }
        /**
         * Enhances the save method.
         *
         * @return boolean True on succes.
         */
        public function save()
        {
        }
    }
    /**
     * Primary Term model definition.
     *
     * @property int    $id       Identifier.
     * @property int    $post_id  Post ID.
     * @property int    $term_id  Term ID.
     * @property string $taxonomy Taxonomy.
     *
     * @property string $created_at
     * @property string $updated_at
     */
    class Primary_Term extends \Yoast\WP\Free\ORM\Yoast_Model
    {
        /**
         * Whether nor this model uses timestamps.
         *
         * @var bool
         */
        protected $uses_timestamps = true;
    }
    /**
     * Table definition for the SEO Meta table.
     *
     * @property int    $id
     * @property string $url
     * @property int    $post_id
     * @property int    $target_post_id
     * @property string $type
     */
    class SEO_Links extends \Yoast\WP\Free\ORM\Yoast_Model
    {
    }
    /**
     * Table definition for the SEO Meta table.
     *
     * @property int $object_id
     * @property int $internal_link_count
     * @property int $incoming_link_count
     */
    class SEO_Meta extends \Yoast\WP\Free\ORM\Yoast_Model
    {
        /**
         * Overwrites the default ID column name.
         *
         * @var string
         */
        public static $id_column = 'object_id';
    }
}
namespace Yoast\WP\Free\ORM {
    /**
     * Subclass of Idiorm's ORM class that supports
     * returning instances of a specified class rather
     * than raw instances of the ORM class.
     *
     * You shouldn't need to interact with this class
     * directly. It is used internally by the Model base
     * class.
     *
     * The methods documented below are magic methods that conform to PSR-1.
     * This documentation exposes these methods to doc generators and IDEs.
     *
     * @link http://www.php-fig.org/psr/psr-1/
     *
     * @method void setClassName($class_name)
     * @method static \Yoast\WP\Free\ORM\ORMWrapper forTable($table_name, $connection_name = parent::DEFAULT_CONNECTION)
     * @method \Yoast\WP\Free\ORM\\Model findOne($id=null)
     * @method Array|\IdiormResultSet findMany()
     */
    class ORMWrapper extends \ORM
    {
        /**
         * Contains the repositories.
         *
         * @var array
         */
        public static $repositories = [];
        /**
         * The wrapped find_one and find_many classes will return an instance or
         * instances of this class.
         *
         * @var string
         */
        protected $class_name;
        /**
         * Set the name of the class which the wrapped methods should return
         * instances of.
         *
         * @param string $class_name The classname to set.
         *
         * @return void
         */
        public function set_class_name($class_name)
        {
        }
        /**
         * Add a custom filter to the method chain specified on the model class.
         * This allows custom queries to be added to models. The filter should take
         * an instance of the ORM wrapper as its first argument and return an
         * instance of the ORM wrapper. Any arguments passed to this method after
         * the name of the filter will be passed to the called filter function as
         * arguments after the ORM class.
         *
         * @return \Yoast\WP\Free\ORM\ORMWrapper Instance of the ORM wrapper.
         */
        public function filter()
        {
        }
        /**
         * Factory method, return an instance of this class bound to the supplied
         * table name.
         *
         * A repeat of content in parent::for_table, so that created class is
         * ORMWrapper, not ORM.
         *
         * @param string $table_name      The table to create instance for.
         * @param string $connection_name The connection name.
         *
         * @return \Yoast\WP\Free\ORM\ORMWrapper Instance of the ORM wrapper.
         */
        public static function for_table($table_name, $connection_name = parent::DEFAULT_CONNECTION)
        {
        }
        /**
         * Method to create an instance of the model class associated with this
         * wrapper and populate it with the supplied Idiorm instance.
         *
         * @param \Yoast\WP\Free\ORM\ORMWrapper|\ORM $orm The ORM used by model.
         *
         * @return bool|\Yoast\WP\Free\ORM\Yoast_Model Instance of the model class.
         */
        protected function create_model_instance($orm)
        {
        }
        /**
         * Wrap Idiorm's find_one method to return an instance of the class
         * associated with this wrapper instead of the raw ORM class.
         *
         * @param null|integer $id The ID to lookup.
         *
         * @return \Yoast\WP\Free\ORM\Yoast_Model Instance of the model.
         */
        public function find_one($id = null)
        {
        }
        /**
         * Wrap Idiorm's find_many method to return an array of instances of the
         * class associated with this wrapper instead of the raw ORM class.
         *
         * @return array The found results.
         */
        public function find_many()
        {
        }
        /**
         * Wrap Idiorm's create method to return an empty instance of the class
         * associated with this wrapper instead of the raw ORM class.
         *
         * @param null|mixed $data The data to pass.
         *
         * @return \Yoast\WP\Free\ORM\Yoast_Model|bool Instance of the ORM.
         */
        public function create($data = null)
        {
        }
    }
}
namespace Yoast\WP\Free\Repositories {
    /**
     * Class Indexable_Repository
     *
     * @package Yoast\WP\Free\ORM\Repositories
     */
    class Indexable_Repository extends \Yoast\WP\Free\ORM\ORMWrapper
    {
        /**
         * @var \Yoast\WP\Free\Builders\Indexable_Author_Builder
         */
        protected $author_builder;
        /**
         * @var \Yoast\WP\Free\Builders\Indexable_Post_Builder
         */
        protected $post_builder;
        /**
         * @var \Yoast\WP\Free\Builders\Indexable_Term_Builder
         */
        protected $term_builder;
        /**
         * @var \Psr\Log\LoggerInterface
         */
        protected $logger;
        /**
         * Returns the instance of this class constructed through the ORM Wrapper.
         *
         * @param \Yoast\WP\Free\Builders\Indexable_Author_Builder $author_builder The author builder for creating missing indexables.
         * @param \Yoast\WP\Free\Builders\Indexable_Post_Builder   $post_builder   The post builder for creating missing indexables.
         * @param \Yoast\WP\Free\Builders\Indexable_Term_Builder   $term_builder   The term builder for creating missing indexables.
         * @param \Yoast\WP\Free\Loggers\Logger                    $logger         The logger.
         *
         * @return \Yoast\WP\Free\Repositories\Indexable_Repository
         */
        public static function get_instance(\Yoast\WP\Free\Builders\Indexable_Author_Builder $author_builder, \Yoast\WP\Free\Builders\Indexable_Post_Builder $post_builder, \Yoast\WP\Free\Builders\Indexable_Term_Builder $term_builder, \Yoast\WP\Free\Loggers\Logger $logger)
        {
        }
        /**
         * Retrieves an indexable by it's URL.
         *
         * @param string $url The indexable url.
         */
        public function find_by_url($url)
        {
        }
        /**
         * Retrieves an indexable by its ID and type.
         *
         * @param int    $object_id   The indexable object ID.
         * @param string $object_type The indexable object type.
         * @param bool   $auto_create Optional. Create the indexable if it does not exist.
         *
         * @return bool|\Yoast\WP\Free\Models\Indexable Instance of indexable.
         */
        public function find_by_id_and_type($object_id, $object_type, $auto_create = true)
        {
        }
        /**
         * Retrieves multiple indexables at once by their IDs and type.
         *
         * @param int[]  $object_ids  The array of indexable object IDs.
         * @param string $object_type The indexable object type.
         * @param bool   $auto_create Optional. Create the indexable if it does not exist.
         *
         * @return \Yoast\WP\Free\Models\Indexable[] An array of indexables.
         */
        public function find_by_multiple_ids_and_type($object_ids, $object_type, $auto_create = true)
        {
        }
        /**
         * Creates an indexable by its ID and type.
         *
         * @param int    $object_id   The indexable object ID.
         * @param string $object_type The indexable object type.
         *
         * @return bool|\Yoast\WP\Free\Models\Indexable Instance of indexable.
         */
        public function create_for_id_and_type($object_id, $object_type)
        {
        }
    }
    /**
     * Class Primary_Term_Repository
     *
     * @package Yoast\WP\Free\ORM\Repositories
     */
    class Primary_Term_Repository extends \Yoast\WP\Free\ORM\ORMWrapper
    {
        /**
         * Returns the instance of this class constructed through the ORM Wrapper.
         *
         * @return \Yoast\WP\Free\Repositories\Primary_Term_Repository
         */
        public static function get_instance()
        {
        }
        /**
         * Retrieves an indexable by a post ID and taxonomy.
         *
         * @param int    $post_id     The post the indexable is based upon.
         * @param string $taxonomy    The taxonomy the indexable belongs to.
         * @param bool   $auto_create Optional. Creates an indexable if it does not exist yet.
         *
         * @return bool|\Yoast\WP\Free\Models\Indexable Instance of indexable.
         */
        public function find_by_postid_and_taxonomy($post_id, $taxonomy, $auto_create = true)
        {
        }
    }
    /**
     * Class SEO_Links_Repository
     *
     * WARNING: This class merely exists for type hints and dependency injection.
     * Instances of this class will actually be instances of ORMWrapper and any functions and/or methods here will not be represented.
     *
     * @package Yoast\WP\Free\ORM\Repositories
     */
    class SEO_Links_Repository extends \Yoast\WP\Free\ORM\ORMWrapper
    {
        /**
         * Returns the instance of this class constructed through the ORM Wrapper.
         *
         * @return \Yoast\WP\Free\Repositories\SEO_Links_Repository
         */
        public static function get_instance()
        {
        }
    }
    /**
     * Class SEO_Meta_Repository
     *
     * @package Yoast\WP\Free\ORM\Repositories
     */
    class SEO_Meta_Repository extends \Yoast\WP\Free\ORM\ORMWrapper
    {
        /**
         * Returns the instance of this class constructed through the ORM Wrapper.
         *
         * @return \Yoast\WP\Free\Repositories\SEO_Meta_Repository
         */
        public static function get_instance()
        {
        }
        /**
         * Finds the SEO meta for given post.
         *
         * @param int $post_id The post ID.
         *
         * @return \Yoast\WP\Free\Models\SEO_Meta The SEO meta.
         */
        public function find_by_post_id($post_id)
        {
        }
    }
}
namespace Yoast\WP\Free\WordPress {
    /**
     * An interface for registering integrations with WordPress
     */
    interface Integration extends \Yoast\WP\Free\WordPress\Loadable
    {
        /**
         * Initializes the integration.
         *
         * This is the place to register hooks and filters.
         *
         * @return void
         */
        public function register_hooks();
    }
}
namespace Yoast\WP\Free\Watchers {
    /**
     * Watches an Author to save the meta information when updated.
     */
    class Indexable_Author_Watcher implements \Yoast\WP\Free\WordPress\Integration
    {
        /**
         * @inheritdoc
         */
        public static function get_conditionals()
        {
        }
        /**
         * @var \Yoast\WP\Free\Repositories\Indexable_Repository
         */
        protected $repository;
        /**
         * @var \Yoast\WP\Free\Builders\Indexable_Author_Builder
         */
        protected $builder;
        /**
         * Indexable_Author_Watcher constructor.
         *
         * @param \Yoast\WP\Free\Repositories\Indexable_Repository $repository The repository to use.
         * @param \Yoast\WP\Free\Builders\Indexable_Author_Builder $builder    The post builder to use.
         */
        public function __construct(\Yoast\WP\Free\Repositories\Indexable_Repository $repository, \Yoast\WP\Free\Builders\Indexable_Author_Builder $builder)
        {
        }
        /**
         * @inheritdoc
         */
        public function register_hooks()
        {
        }
        /**
         * Deletes user meta.
         *
         * @param int $user_id User ID to delete the metadata of.
         *
         * @return void
         */
        public function delete_indexable($user_id)
        {
        }
        /**
         * Saves user meta.
         *
         * @param int $user_id User ID.
         *
         * @return void
         */
        public function build_indexable($user_id)
        {
        }
    }
    /**
     * Fills the Indexable according to Post data.
     */
    class Indexable_Post_Watcher implements \Yoast\WP\Free\WordPress\Integration
    {
        /**
         * @inheritdoc
         */
        public static function get_conditionals()
        {
        }
        /**
         * @var \Yoast\WP\Free\Repositories\Indexable_Repository
         */
        protected $repository;
        /**
         * @var \Yoast\WP\Free\Builders\Indexable_Post_Builder
         */
        protected $builder;
        /**
         * Indexable_Post_Watcher constructor.
         *
         * @param \Yoast\WP\Free\Repositories\Indexable_Repository $repository The repository to use.
         * @param \Yoast\WP\Free\Builders\Indexable_Post_Builder   $builder    The post builder to use.
         */
        public function __construct(\Yoast\WP\Free\Repositories\Indexable_Repository $repository, \Yoast\WP\Free\Builders\Indexable_Post_Builder $builder)
        {
        }
        /**
         * @inheritdoc
         */
        public function register_hooks()
        {
        }
        /**
         * Deletes the meta when a post is deleted.
         *
         * @param int $post_id Post ID.
         *
         * @return void
         */
        public function delete_indexable($post_id)
        {
        }
        /**
         * Saves post meta.
         *
         * @param int $post_id Post ID.
         *
         * @return void
         */
        public function build_indexable($post_id)
        {
        }
        /**
         * Determines if the post can be indexed.
         *
         * @param int $post_id Post ID to check.
         *
         * @return bool True if the post can be indexed.
         */
        protected function is_post_indexable($post_id)
        {
        }
    }
    /**
     * Watcher for terms to fill the related Indexable.
     */
    class Indexable_Term_Watcher implements \Yoast\WP\Free\WordPress\Integration
    {
        /**
         * @inheritdoc
         */
        public static function get_conditionals()
        {
        }
        /**
         * @var \Yoast\WP\Free\Repositories\Indexable_Repository
         */
        protected $repository;
        /**
         * @var \Yoast\WP\Free\Builders\Indexable_Term_Builder
         */
        protected $builder;
        /**
         * Indexable_Term_Watcher constructor.
         *
         * @param \Yoast\WP\Free\Repositories\Indexable_Repository $repository The repository to use.
         * @param \Yoast\WP\Free\Builders\Indexable_Term_Builder   $builder    The post builder to use.
         */
        public function __construct(\Yoast\WP\Free\Repositories\Indexable_Repository $repository, \Yoast\WP\Free\Builders\Indexable_Term_Builder $builder)
        {
        }
        /**
         * @inheritdoc
         */
        public function register_hooks()
        {
        }
        /**
         * Deletes a term from the index.
         *
         * @param int $term_id The Term ID to delete.
         *
         * @return void
         */
        public function delete_indexable($term_id)
        {
        }
        /**
         * Update the taxonomy meta data on save.
         *
         * Note: This method is missing functionality to update internal links and incoming links.
         *       As this functionality is currently not available for terms, it has not been added in this
         *       class yet.
         *
         * @param int $term_id ID of the term to save data for.
         *
         * @return void
         */
        public function build_indexable($term_id)
        {
        }
    }
    /**
     * Watches Posts to save the primary term when set.
     */
    class Primary_Term_Watcher implements \Yoast\WP\Free\WordPress\Integration
    {
        /**
         * @inheritdoc
         */
        public static function get_conditionals()
        {
        }
        /**
         * @var \Yoast\WP\Free\Repositories\Primary_Term_Repository
         */
        protected $repository;
        /**
         * Primary_Term_Watcher constructor.
         *
         * @param \Yoast\WP\Free\Repositories\Primary_Term_Repository $repository The primary term repository.
         */
        public function __construct(\Yoast\WP\Free\Repositories\Primary_Term_Repository $repository)
        {
        }
        /**
         * @inheritdoc
         */
        public function register_hooks()
        {
        }
        /**
         * Deletes primary terms for a post.
         *
         * @param int $post_id The post to delete the terms of.
         *
         * @return void
         */
        public function delete_primary_terms($post_id)
        {
        }
        /**
         * Saves the primary terms for a post.
         *
         * @param int $post_id Post ID to save the primary terms for.
         *
         * @return void
         */
        public function save_primary_terms($post_id)
        {
        }
        /**
         * Save the primary term for a specific taxonomy.
         *
         * @param int    $post_id  Post ID to save primary term for.
         * @param string $taxonomy Taxonomy to save primary term for.
         *
         * @return void
         */
        protected function save_primary_term($post_id, $taxonomy)
        {
        }
        /**
         * Returns all the taxonomies for which the primary term selection is enabled.
         *
         * @param int $post_id Default current post ID.
         *
         * @return array The taxonomies.
         */
        protected function get_primary_term_taxonomies($post_id = null)
        {
        }
        /**
         * Generate the primary term taxonomies.
         *
         * @param int $post_id ID of the post.
         *
         * @return array The taxonomies.
         */
        protected function generate_primary_term_taxonomies($post_id)
        {
        }
        /**
         * Returns whether or not a taxonomy is hierarchical
         *
         * @param \stdClass $taxonomy Taxonomy object.
         *
         * @return bool True for hierarchical taxonomy.
         */
        protected function filter_hierarchical_taxonomies($taxonomy)
        {
        }
        /**
         * Checks if the request is a post request.
         *
         * @return bool Whether the method is a post request.
         */
        protected function is_post_request()
        {
        }
        /**
         * Retrieves the posted term ID based on the given taxonomy.
         *
         * @param string $taxonomy The taxonomy to check.
         *
         * @return int The term ID.
         */
        protected function get_posted_term_id($taxonomy)
        {
        }
        /**
         * Checks if the referer is valid for given taxonomy.
         *
         * @param string $taxonomy The taxonomy to validate.
         *
         * @return bool Whether the referer is valid.
         */
        protected function is_referer_valid($taxonomy)
        {
        }
    }
}
namespace Yoast\WP\Free\WordPress {
    /**
     * Wrapper class for WordPress globals.
     * This consists of factory functions to inject WP globals into the dependency container.
     */
    class Wrapper
    {
        /**
         * Wrapper method for returning the wpdb object for use in dependency injection.
         *
         * @return \wpdb The wpdb global.
         */
        public static function get_wpdb()
        {
        }
        /**
         * Wrapper method for returning the wp_query object for use in dependency injection.
         *
         * @return \WP_Query The wp_query global.
         */
        public static function get_wp_query()
        {
        }
    }
}
namespace {
    /**
     * Wraps frontend class.
     */
    function initialize_wpseo_front()
    {
    }
    /**
     * Template tag for breadcrumbs.
     *
     * @param string $before  What to show before the breadcrumb.
     * @param string $after   What to show after the breadcrumb.
     * @param bool   $display Whether to display the breadcrumb (true) or return it (false).
     *
     * @return string
     */
    function yoast_breadcrumb($before = '', $after = '', $display = \true)
    {
    }
    /**
     * Get the primary term ID.
     *
     * @param string           $taxonomy Optional. The taxonomy to get the primary term ID for. Defaults to category.
     * @param null|int|WP_Post $post     Optional. Post to get the primary term ID for.
     *
     * @return bool|int
     */
    function yoast_get_primary_term_id($taxonomy = 'category', $post = \null)
    {
    }
    /**
     * Get the primary term name.
     *
     * @param string           $taxonomy Optional. The taxonomy to get the primary term for. Defaults to category.
     * @param null|int|WP_Post $post     Optional. Post to get the primary term for.
     *
     * @return string Name of the primary term.
     */
    function yoast_get_primary_term($taxonomy = 'category', $post = \null)
    {
    }
    /**
     * Replace `%%variable_placeholders%%` with their real value based on the current requested page/post/cpt.
     *
     * @param string $string The string to replace the variables in.
     * @param object $args   The object some of the replacement values might come from,
     *                       could be a post, taxonomy or term.
     * @param array  $omit   Variables that should not be replaced by this function.
     *
     * @return string
     */
    function wpseo_replace_vars($string, $args, $omit = [])
    {
    }
    /**
     * Register a new variable replacement.
     *
     * This function is for use by other plugins/themes to easily add their own additional variables to replace.
     * This function should be called from a function on the 'wpseo_register_extra_replacements' action hook.
     * The use of this function is preferred over the older 'wpseo_replacements' filter as a way to add new replacements.
     * The 'wpseo_replacements' filter should still be used to adjust standard WPSEO replacement values.
     * The function can not be used to replace standard WPSEO replacement value functions and will thrown a warning
     * if you accidently try.
     * To avoid conflicts with variables registered by WPSEO and other themes/plugins, try and make the
     * name of your variable unique. Variable names also can not start with "%%cf_" or "%%ct_" as these are reserved
     * for the standard WPSEO variable variables 'cf_<custom-field-name>', 'ct_<custom-tax-name>' and
     * 'ct_desc_<custom-tax-name>'.
     * The replacement function will be passed the undelimited name (i.e. stripped of the %%) of the variable
     * to replace in case you need it.
     *
     * Example code:
     * <code>
     * <?php
     * function retrieve_var1_replacement( $var1 ) {
     *        return 'your replacement value';
     * }
     *
     * function register_my_plugin_extra_replacements() {
     *        wpseo_register_var_replacement( '%%myvar1%%', 'retrieve_var1_replacement', 'advanced', 'this is a help text for myvar1' );
     *        wpseo_register_var_replacement( 'myvar2', array( 'class', 'method_name' ), 'basic', 'this is a help text for myvar2' );
     * }
     * add_action( 'wpseo_register_extra_replacements', 'register_my_plugin_extra_replacements' );
     * ?>
     * </code>
     *
     * @since 1.5.4
     *
     * @param string $var              The name of the variable to replace, i.e. '%%var%%'.
     *                                 Note: the surrounding %% are optional, name can only contain [A-Za-z0-9_-].
     * @param mixed  $replace_function Function or method to call to retrieve the replacement value for the variable.
     *                                 Uses the same format as add_filter/add_action function parameter and
     *                                 should *return* the replacement value. DON'T echo it.
     * @param string $type             Type of variable: 'basic' or 'advanced', defaults to 'advanced'.
     * @param string $help_text        Help text to be added to the help tab for this variable.
     *
     * @return bool Whether the replacement function was successfully registered.
     */
    function wpseo_register_var_replacement($var, $replace_function, $type = 'advanced', $help_text = '')
    {
    }
    /**
     * WPML plugin support: Set titles for custom types / taxonomies as translatable.
     *
     * It adds new keys to a wpml-config.xml file for a custom post type title, metadesc,
     * title-ptarchive and metadesc-ptarchive fields translation.
     * Documentation: http://wpml.org/documentation/support/language-configuration-files/
     *
     * @global $sitepress
     *
     * @param array $config WPML configuration data to filter.
     *
     * @return array
     */
    function wpseo_wpml_config($config)
    {
    }
    /**
     * Yoast SEO breadcrumb shortcode.
     * [wpseo_breadcrumb]
     *
     * @return string
     */
    function wpseo_shortcode_yoast_breadcrumb()
    {
    }
    /**
     * Makes sure the taxonomy meta is updated when a taxonomy term is split.
     *
     * @link https://make.wordpress.org/core/2015/02/16/taxonomy-term-splitting-in-4-2-a-developer-guide/ Article explaining the taxonomy term splitting in WP 4.2.
     *
     * @param string $old_term_id      Old term id of the taxonomy term that was splitted.
     * @param string $new_term_id      New term id of the taxonomy term that was splitted.
     * @param string $term_taxonomy_id Term taxonomy id for the taxonomy that was affected.
     * @param string $taxonomy         The taxonomy that the taxonomy term was splitted for.
     */
    function wpseo_split_shared_term($old_term_id, $new_term_id, $term_taxonomy_id, $taxonomy)
    {
    }
    /**
     * Get all WPSEO related capabilities.
     *
     * @since 8.3
     * @return array
     */
    function wpseo_get_capabilities()
    {
    }
    /**
     * Initializes the admin bar.
     *
     * @return void
     */
    function wpseo_initialize_admin_bar()
    {
    }
    /**
     * Allows editing of the meta fields through weblog editors like Marsedit.
     *
     * @param array $required_capabilities Capabilities that must all be true to allow action.
     * @param array $capabilities          Array of capabilities to be checked, unused here.
     * @param array $args                  List of arguments for the specific capabilities to be checked.
     *
     * @return array $required_capabilities Filtered capabilities.
     */
    function allow_custom_field_edits($required_capabilities, $capabilities, $args)
    {
    }
    /* ********************* DEPRECATED FUNCTIONS ********************* */
    /**
     * Adds an SEO admin bar menu to the site admin, with several options.
     *
     * If the current user is an admin they can also go straight to several settings menus from here.
     *
     * @deprecated 7.9 Use WPSEO_Admin_Bar_Menu::add_menu() instead.
     * @codeCoverageIgnore
     *
     * @return void
     */
    function wpseo_admin_bar_menu()
    {
    }
    /**
     * Returns the SEO score element for the admin bar.
     *
     * @deprecated 7.9
     * @codeCoverageIgnore
     *
     * @return string
     */
    function wpseo_adminbar_seo_score()
    {
    }
    /**
     * Returns the content score element for the adminbar.
     *
     * @deprecated 7.9
     * @codeCoverageIgnore
     *
     * @return string
     */
    function wpseo_adminbar_content_score()
    {
    }
    /**
     * Returns the SEO score element for the adminbar.
     *
     * @deprecated 7.9
     * @codeCoverageIgnore
     *
     * @return string
     */
    function wpseo_tax_adminbar_seo_score()
    {
    }
    /**
     * Returns the Content score element for the adminbar.
     *
     * @deprecated 7.9
     * @codeCoverageIgnore
     *
     * @return string
     */
    function wpseo_tax_adminbar_content_score()
    {
    }
    /**
     * Takes The SEO score and makes the score icon for the adminbar with it.
     *
     * @deprecated 7.9
     * @codeCoverageIgnore
     *
     * @param int $score The 0-100 rating of the score. Can be either SEO score or content score.
     *
     * @return string $score_adminbar_element
     */
    function wpseo_adminbar_score($score)
    {
    }
    /**
     * Enqueue CSS to format the Yoast SEO adminbar item.
     *
     * @deprecated 7.9 Use WPSEO_Admin_Bar_Menu::enqueue_assets() instead.
     * @codeCoverageIgnore
     */
    function wpseo_admin_bar_style()
    {
    }
    /**
     * Detects if the advanced settings are enabled.
     *
     * @deprecated 7.0
     * @codeCoverageIgnore
     */
    function wpseo_advanced_settings_enabled()
    {
    }
    /* ***************************** CLASS AUTOLOADING *************************** */
    /**
     * Autoload our class files.
     *
     * @param string $class Class name.
     *
     * @return void
     */
    function wpseo_auto_load($class)
    {
    }
    /* ***************************** PLUGIN (DE-)ACTIVATION *************************** */
    /**
     * Run single site / network-wide activation of the plugin.
     *
     * @param bool $networkwide Whether the plugin is being activated network-wide.
     */
    function wpseo_activate($networkwide = \false)
    {
    }
    /**
     * Run single site / network-wide de-activation of the plugin.
     *
     * @param bool $networkwide Whether the plugin is being de-activated network-wide.
     */
    function wpseo_deactivate($networkwide = \false)
    {
    }
    /**
     * Run network-wide (de-)activation of the plugin.
     *
     * @param bool $activate True for plugin activation, false for de-activation.
     */
    function wpseo_network_activate_deactivate($activate = \true)
    {
    }
    /**
     * Runs on activation of the plugin.
     */
    function _wpseo_activate()
    {
    }
    /**
     * On deactivation, flush the rewrite rules so XML sitemaps stop working.
     */
    function _wpseo_deactivate()
    {
    }
    /**
     * Run wpseo activation routine on creation / activation of a multisite blog if WPSEO is activated
     * network-wide.
     *
     * Will only be called by multisite actions.
     *
     * {@internal Unfortunately will fail if the plugin is in the must-use directory.
     *            {@link https://core.trac.wordpress.org/ticket/24205} }}
     *
     * @param int|WP_Site $blog_id Blog ID.
     */
    function wpseo_on_activate_blog($blog_id)
    {
    }
    /* ***************************** PLUGIN LOADING *************************** */
    /**
     * Load translations.
     */
    function wpseo_load_textdomain()
    {
    }
    /**
     * On plugins_loaded: load the minimum amount of essential files for this plugin.
     */
    function wpseo_init()
    {
    }
    /**
     * Loads the rest api endpoints.
     */
    function wpseo_init_rest_api()
    {
    }
    /**
     * Used to load the required files on the plugins_loaded hook, instead of immediately.
     */
    function wpseo_frontend_init()
    {
    }
    /**
     * Instantiate the different social classes on the frontend.
     */
    function wpseo_frontend_head_init()
    {
    }
    /**
     * Used to load the required files on the plugins_loaded hook, instead of immediately.
     */
    function wpseo_admin_init()
    {
    }
    /**
     * Initialize the WP-CLI integration.
     *
     * The WP-CLI integration needs PHP 5.3 support, which should be automatically
     * enforced by the check for the WP_CLI constant. As WP-CLI itself only runs
     * on PHP 5.3+, the constant should only be set when requirements are met.
     */
    function wpseo_cli_init()
    {
    }
    /**
     * Wraps for notifications center class.
     */
    function load_yoast_notifications()
    {
    }
    /**
     * Throw an error if the PHP SPL extension is disabled (prevent white screens) and self-deactivate plugin.
     *
     * @since 1.5.4
     *
     * @return void
     */
    function yoast_wpseo_missing_spl()
    {
    }
    /**
     * Returns the notice in case of missing spl extension.
     */
    function yoast_wpseo_missing_spl_notice()
    {
    }
    /**
     * Throw an error if the Composer autoload is missing and self-deactivate plugin.
     *
     * @return void
     */
    function yoast_wpseo_missing_autoload()
    {
    }
    /**
     * Returns the notice in case of missing Composer autoload.
     */
    function yoast_wpseo_missing_autoload_notice()
    {
    }
    /**
     * Throw an error if the filter extension is disabled (prevent white screens) and self-deactivate plugin.
     *
     * @since 2.0
     *
     * @return void
     */
    function yoast_wpseo_missing_filter()
    {
    }
    /**
     * Returns the notice in case of missing filter extension.
     */
    function yoast_wpseo_missing_filter_notice()
    {
    }
    /**
     * Echo's the Activation failed notice with any given message.
     *
     * @param string $message Message string.
     */
    function yoast_wpseo_activation_failed_notice($message)
    {
    }
    /**
     * The method will deactivate the plugin, but only once, done by the static $is_deactivated.
     */
    function yoast_wpseo_self_deactivate()
    {
    }
    /**
     * Excludes specific files from php-compatibility-checker.
     *
     * @since 9.4
     *
     * @param array $ignored Array of ignored directories/files.
     *
     * @return array Array of ignored directories/files.
     */
    function yoast_free_phpcompat_whitelist($ignored)
    {
    }
}
namespace {
    define('WPSEO_VERSION', '0.0.0');
}
