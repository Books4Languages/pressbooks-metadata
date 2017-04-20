<?php


require_once plugin_dir_path( __FILE__ )
. '../class-pressbooks-metadata-plugin-metadata.php';

/**
 * The General Book Information metadata used by this plugin.
 *
 * @since      0.4
 *
 * @package    Pressbooks_Metadata
 * @subpackage Pressbooks_Metadata/includes/metadata/actual-metadata/concrete-metadata
 * @author     Vasilis Georgoudis <vasilios.georgoudis@gmail.com>
 */
class Pressbooks_Metadata_Book_Metadata extends Pressbooks_Metadata_Plugin_Metadata {

	/**
	 * The class instance.
	 *
	 * @since  0.4
	 * @access private
	 * @var    Pressbooks_Metadata_Plugin_Metadata $instance The class instance.
	 */
	private static $instance = NULL;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since  0.4
	 */
	protected function __construct() {

		parent::__construct();

		// Preexisting meta-box
		$g_b_info = new Pressbooks_Metadata_Meta_Box(
			'General Book Information', '',
			'general-book-information', true );
		$g_b_info->add_post_type( 'metadata' );


		$g_b_info->add_field( new Pressbooks_Metadata_Text_Field( 'Illustrator',
			'The illustrator of the book.', 'illustrator', '', '', '', false, '',
			'illustrator' ) );

		$g_b_info->add_field( new Pressbooks_Metadata_Text_Field(
			'Book Edition',
			'The edition of the book.',
			'edition',
			'', '', '', false, '',
			'bookEdition' ) );


		$this->add_component( $g_b_info );

	}

	/**
	 * Returns the class instance.
	 *
	 * @since  0.4
	 * @return Pressbooks_Metadata_Book_Metadata The class instance.
	 */
	public static function get_instance() {

		if ( NULL == Pressbooks_Metadata_Book_Metadata::$instance ) {
			Pressbooks_Metadata_Book_Metadata::$instance
				= new Pressbooks_Metadata_Book_Metadata();
		}
		return Pressbooks_Metadata_Book_Metadata::$instance;

	}


}

