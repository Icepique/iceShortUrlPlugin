<?php



/**
 * This class defines the structure of the 'short_url' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.plugins.iceShortUrlPlugin.lib.model.map
 */
class iceModelShortUrlTableMap extends TableMap
{

  /**
   * The (dot-path) name of this class
   */
  const CLASS_NAME = 'plugins.iceShortUrlPlugin.lib.model.map.iceModelShortUrlTableMap';

  /**
   * Initialize the table attributes, columns and validators
   * Relations are not initialized by this method since they are lazy loaded
   *
   * @return     void
   * @throws     PropelException
   */
  public function initialize()
  {
    // attributes
    $this->setName('short_url');
    $this->setPhpName('iceModelShortUrl');
    $this->setClassname('iceModelShortUrl');
    $this->setPackage('plugins.iceShortUrlPlugin.lib.model');
    $this->setUseIdGenerator(true);
    // columns
    $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
    $this->addColumn('URL', 'Url', 'LONGVARCHAR', false, null, null);
    $this->addColumn('URL_DECODED', 'UrlDecoded', 'LONGVARCHAR', false, null, null);
    $this->addColumn('HASH', 'Hash', 'VARCHAR', false, 8, null);
    $this->getColumn('HASH', false)->setPrimaryString(true);
    $this->addColumn('VIEW_COUNT', 'ViewCount', 'INTEGER', false, null, 0);
    $this->addColumn('IS_PUBLIC', 'IsPublic', 'BOOLEAN', true, 1, true);
    $this->addColumn('IS_ENABLED', 'IsEnabled', 'BOOLEAN', true, 1, true);
    $this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
    $this->addColumn('UPDATED_AT', 'UpdatedAt', 'TIMESTAMP', false, null, null);
    // validators
  }

  /**
   * Build the RelationMap objects for this table relationships
   */
  public function buildRelations()
  {
    $this->addRelation('iceModelShortUrlHit', 'iceModelShortUrlHit', RelationMap::ONE_TO_MANY, array('id' => 'short_url_id', ), 'CASCADE', null, 'iceModelShortUrlHits');
  }

  /**
   *
   * Gets the list of behaviors registered for this table
   *
   * @return array Associative array (name => parameters) of behaviors
   */
  public function getBehaviors()
  {
    return array(
      'timestampable' => array('create_column' => 'created_at', 'update_column' => 'updated_at', ),
      'symfony' => array('form' => 'true', 'filter' => 'true', ),
      'symfony_behaviors' => array(),
      'alternative_coding_standards' => array('brackets_newline' => 'true', 'remove_closing_comments' => 'true', 'use_whitespace' => 'true', 'tab_size' => '2', 'strip_comments' => 'false', ),
    );
  }

}
