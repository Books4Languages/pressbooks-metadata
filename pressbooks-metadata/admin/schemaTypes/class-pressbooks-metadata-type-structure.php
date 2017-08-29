<?php

namespace schemaTypes;

/**
 * File containing an array for loading the types automatically
 *
 * @link       https://github.com/Books4Languages/pressbooks-metadata
 * @since      0.10
 *
 * @package    Pressbooks_Metadata
 * @subpackage Pressbooks_Metadata/admin/schemaTypes
 * @author     Christos Amyrotos <christosv2@hotmail.com>
 */

class Pressbooks_Metadata_Type_Structure{
	public static $allSchemaTypes = array(
		//CreativeWorks
		'schemaTypes\cw\Pressbooks_Metadata_Book',
		'schemaTypes\cw\Pressbooks_Metadata_Blog',
		'schemaTypes\cw\Pressbooks_Metadata_Message',
		//Organization
		'schemaTypes\organization\Pressbooks_Metadata_Airline',
		'schemaTypes\organization\Pressbooks_Metadata_Corporation',
		'schemaTypes\organization\Pressbooks_Metadata_EducationalOrganization',
		'schemaTypes\organization\Pressbooks_Metadata_LocalBusiness',
		'schemaTypes\organization\Pressbooks_Metadata_MedicalOrganization',
		'schemaTypes\organization\Pressbooks_Metadata_SportsOrganization',
		'schemaTypes\organization\Pressbooks_Metadata_PerformingGroup'
	);

	public static $allParents = array(
		'schemaTypes\Pressbooks_Metadata_Thing',
		'schemaTypes\Pressbooks_Metadata_CreativeWork',
		'schemaTypes\Pressbooks_Metadata_Organization'
	);
}