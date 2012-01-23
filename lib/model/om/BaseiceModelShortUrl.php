<?php


/**
 * Base class that represents a row from the 'short_url' table.
 *
 * 
 *
 * @package    propel.generator.plugins.iceShortUrlPlugin.lib.model.om
 */
abstract class BaseiceModelShortUrl extends BaseObject  implements Persistent
{

  /**
   * Peer class name
   */
  const PEER = 'iceModelShortUrlPeer';

  /**
   * The Peer class.
   * Instance provides a convenient way of calling static methods on a class
   * that calling code may not be able to identify.
   * @var        iceModelShortUrlPeer
   */
  protected static $peer;

  /**
   * The value for the id field.
   * @var        int
   */
  protected $id;

  /**
   * The value for the url field.
   * @var        string
   */
  protected $url;

  /**
   * The value for the url_decoded field.
   * @var        string
   */
  protected $url_decoded;

  /**
   * The value for the hash field.
   * @var        string
   */
  protected $hash;

  /**
   * The value for the view_count field.
   * Note: this column has a database default value of: 0
   * @var        int
   */
  protected $view_count;

  /**
   * The value for the is_public field.
   * Note: this column has a database default value of: true
   * @var        boolean
   */
  protected $is_public;

  /**
   * The value for the is_enabled field.
   * Note: this column has a database default value of: true
   * @var        boolean
   */
  protected $is_enabled;

  /**
   * The value for the created_at field.
   * @var        string
   */
  protected $created_at;

  /**
   * The value for the updated_at field.
   * @var        string
   */
  protected $updated_at;

  /**
   * @var        array iceModelShortUrlHit[] Collection to store aggregation of iceModelShortUrlHit objects.
   */
  protected $colliceModelShortUrlHits;

  /**
   * Flag to prevent endless save loop, if this object is referenced
   * by another object which falls in this transaction.
   * @var        boolean
   */
  protected $alreadyInSave = false;

  /**
   * Flag to prevent endless validation loop, if this object is referenced
   * by another object which falls in this transaction.
   * @var        boolean
   */
  protected $alreadyInValidation = false;

  /**
   * Applies default values to this object.
   * This method should be called from the object's constructor (or
   * equivalent initialization method).
   * @see        __construct()
   */
  public function applyDefaultValues()
  {
    $this->view_count = 0;
    $this->is_public = true;
    $this->is_enabled = true;
  }

  /**
   * Initializes internal state of BaseiceModelShortUrl object.
   * @see        applyDefaults()
   */
  public function __construct()
  {
    parent::__construct();
    $this->applyDefaultValues();
  }

  /**
   * Get the [id] column value.
   * 
   * @return     int
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * Get the [url] column value.
   * 
   * @return     string
   */
  public function getUrl()
  {
    return $this->url;
  }

  /**
   * Get the [url_decoded] column value.
   * 
   * @return     string
   */
  public function getUrlDecoded()
  {
    return $this->url_decoded;
  }

  /**
   * Get the [hash] column value.
   * 
   * @return     string
   */
  public function getHash()
  {
    return $this->hash;
  }

  /**
   * Get the [view_count] column value.
   * 
   * @return     int
   */
  public function getViewCount()
  {
    return $this->view_count;
  }

  /**
   * Get the [is_public] column value.
   * 
   * @return     boolean
   */
  public function getIsPublic()
  {
    return $this->is_public;
  }

  /**
   * Get the [is_enabled] column value.
   * 
   * @return     boolean
   */
  public function getIsEnabled()
  {
    return $this->is_enabled;
  }

  /**
   * Get the [optionally formatted] temporal [created_at] column value.
   * 
   *
   * @param      string $format The date/time format string (either date()-style or strftime()-style).
   *              If format is NULL, then the raw DateTime object will be returned.
   * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
   * @throws     PropelException - if unable to parse/validate the date/time value.
   */
  public function getCreatedAt($format = 'Y-m-d H:i:s')
  {
    if ($this->created_at === null)
    {
      return null;
    }


    if ($this->created_at === '0000-00-00 00:00:00')
    {
      // while technically this is not a default value of NULL,
      // this seems to be closest in meaning.
      return null;
    }
    else
    {
      try
      {
        $dt = new DateTime($this->created_at);
      }
      catch (Exception $x)
      {
        throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->created_at, true), $x);
      }
    }

    if ($format === null)
    {
      // Because propel.useDateTimeClass is TRUE, we return a DateTime object.
      return $dt;
    }
    elseif (strpos($format, '%') !== false)
    {
      return strftime($format, $dt->format('U'));
    }
    else
    {
      return $dt->format($format);
    }
  }

  /**
   * Get the [optionally formatted] temporal [updated_at] column value.
   * 
   *
   * @param      string $format The date/time format string (either date()-style or strftime()-style).
   *              If format is NULL, then the raw DateTime object will be returned.
   * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
   * @throws     PropelException - if unable to parse/validate the date/time value.
   */
  public function getUpdatedAt($format = 'Y-m-d H:i:s')
  {
    if ($this->updated_at === null)
    {
      return null;
    }


    if ($this->updated_at === '0000-00-00 00:00:00')
    {
      // while technically this is not a default value of NULL,
      // this seems to be closest in meaning.
      return null;
    }
    else
    {
      try
      {
        $dt = new DateTime($this->updated_at);
      }
      catch (Exception $x)
      {
        throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->updated_at, true), $x);
      }
    }

    if ($format === null)
    {
      // Because propel.useDateTimeClass is TRUE, we return a DateTime object.
      return $dt;
    }
    elseif (strpos($format, '%') !== false)
    {
      return strftime($format, $dt->format('U'));
    }
    else
    {
      return $dt->format($format);
    }
  }

  /**
   * Set the value of [id] column.
   * 
   * @param      int $v new value
   * @return     iceModelShortUrl The current object (for fluent API support)
   */
  public function setId($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->id !== $v)
    {
      $this->id = $v;
      $this->modifiedColumns[] = iceModelShortUrlPeer::ID;
    }

    return $this;
  }

  /**
   * Set the value of [url] column.
   * 
   * @param      string $v new value
   * @return     iceModelShortUrl The current object (for fluent API support)
   */
  public function setUrl($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->url !== $v)
    {
      $this->url = $v;
      $this->modifiedColumns[] = iceModelShortUrlPeer::URL;
    }

    return $this;
  }

  /**
   * Set the value of [url_decoded] column.
   * 
   * @param      string $v new value
   * @return     iceModelShortUrl The current object (for fluent API support)
   */
  public function setUrlDecoded($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->url_decoded !== $v)
    {
      $this->url_decoded = $v;
      $this->modifiedColumns[] = iceModelShortUrlPeer::URL_DECODED;
    }

    return $this;
  }

  /**
   * Set the value of [hash] column.
   * 
   * @param      string $v new value
   * @return     iceModelShortUrl The current object (for fluent API support)
   */
  public function setHash($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->hash !== $v)
    {
      $this->hash = $v;
      $this->modifiedColumns[] = iceModelShortUrlPeer::HASH;
    }

    return $this;
  }

  /**
   * Set the value of [view_count] column.
   * 
   * @param      int $v new value
   * @return     iceModelShortUrl The current object (for fluent API support)
   */
  public function setViewCount($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->view_count !== $v)
    {
      $this->view_count = $v;
      $this->modifiedColumns[] = iceModelShortUrlPeer::VIEW_COUNT;
    }

    return $this;
  }

  /**
   * Sets the value of the [is_public] column.
   * Non-boolean arguments are converted using the following rules:
   *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
   *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
   * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
   * 
   * @param      boolean|integer|string $v The new value
   * @return     iceModelShortUrl The current object (for fluent API support)
   */
  public function setIsPublic($v)
  {
    if ($v !== null)
    {
      if (is_string($v))
      {
        $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
      }
      else
      {
        $v = (boolean) $v;
      }
    }

    if ($this->is_public !== $v)
    {
      $this->is_public = $v;
      $this->modifiedColumns[] = iceModelShortUrlPeer::IS_PUBLIC;
    }

    return $this;
  }

  /**
   * Sets the value of the [is_enabled] column.
   * Non-boolean arguments are converted using the following rules:
   *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
   *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
   * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
   * 
   * @param      boolean|integer|string $v The new value
   * @return     iceModelShortUrl The current object (for fluent API support)
   */
  public function setIsEnabled($v)
  {
    if ($v !== null)
    {
      if (is_string($v))
      {
        $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
      }
      else
      {
        $v = (boolean) $v;
      }
    }

    if ($this->is_enabled !== $v)
    {
      $this->is_enabled = $v;
      $this->modifiedColumns[] = iceModelShortUrlPeer::IS_ENABLED;
    }

    return $this;
  }

  /**
   * Sets the value of [created_at] column to a normalized version of the date/time value specified.
   * 
   * @param      mixed $v string, integer (timestamp), or DateTime value.
   *               Empty strings are treated as NULL.
   * @return     iceModelShortUrl The current object (for fluent API support)
   */
  public function setCreatedAt($v)
  {
    $dt = PropelDateTime::newInstance($v, null, 'DateTime');
    if ($this->created_at !== null || $dt !== null)
    {
      $currentDateAsString = ($this->created_at !== null && $tmpDt = new DateTime($this->created_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
      $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
      if ($currentDateAsString !== $newDateAsString)
      {
        $this->created_at = $newDateAsString;
        $this->modifiedColumns[] = iceModelShortUrlPeer::CREATED_AT;
      }
    }

    return $this;
  }

  /**
   * Sets the value of [updated_at] column to a normalized version of the date/time value specified.
   * 
   * @param      mixed $v string, integer (timestamp), or DateTime value.
   *               Empty strings are treated as NULL.
   * @return     iceModelShortUrl The current object (for fluent API support)
   */
  public function setUpdatedAt($v)
  {
    $dt = PropelDateTime::newInstance($v, null, 'DateTime');
    if ($this->updated_at !== null || $dt !== null)
    {
      $currentDateAsString = ($this->updated_at !== null && $tmpDt = new DateTime($this->updated_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
      $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
      if ($currentDateAsString !== $newDateAsString)
      {
        $this->updated_at = $newDateAsString;
        $this->modifiedColumns[] = iceModelShortUrlPeer::UPDATED_AT;
      }
    }

    return $this;
  }

  /**
   * Indicates whether the columns in this object are only set to default values.
   *
   * This method can be used in conjunction with isModified() to indicate whether an object is both
   * modified _and_ has some values set which are non-default.
   *
   * @return     boolean Whether the columns in this object are only been set with default values.
   */
  public function hasOnlyDefaultValues()
  {
      if ($this->view_count !== 0)
      {
        return false;
      }

      if ($this->is_public !== true)
      {
        return false;
      }

      if ($this->is_enabled !== true)
      {
        return false;
      }

    // otherwise, everything was equal, so return TRUE
    return true;
  }

  /**
   * Hydrates (populates) the object variables with values from the database resultset.
   *
   * An offset (0-based "start column") is specified so that objects can be hydrated
   * with a subset of the columns in the resultset rows.  This is needed, for example,
   * for results of JOIN queries where the resultset row includes columns from two or
   * more tables.
   *
   * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
   * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
   * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
   * @return     int next starting column
   * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
   */
  public function hydrate($row, $startcol = 0, $rehydrate = false)
  {
    try
    {

      $this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
      $this->url = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
      $this->url_decoded = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
      $this->hash = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
      $this->view_count = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
      $this->is_public = ($row[$startcol + 5] !== null) ? (boolean) $row[$startcol + 5] : null;
      $this->is_enabled = ($row[$startcol + 6] !== null) ? (boolean) $row[$startcol + 6] : null;
      $this->created_at = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
      $this->updated_at = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
      $this->resetModified();

      $this->setNew(false);

      if ($rehydrate)
      {
        $this->ensureConsistency();
      }

      return $startcol + 9; // 9 = iceModelShortUrlPeer::NUM_HYDRATE_COLUMNS.

    }
    catch (Exception $e)
    {
      throw new PropelException("Error populating iceModelShortUrl object", $e);
    }
  }

  /**
   * Checks and repairs the internal consistency of the object.
   *
   * This method is executed after an already-instantiated object is re-hydrated
   * from the database.  It exists to check any foreign keys to make sure that
   * the objects related to the current object are correct based on foreign key.
   *
   * You can override this method in the stub class, but you should always invoke
   * the base method from the overridden method (i.e. parent::ensureConsistency()),
   * in case your model changes.
   *
   * @throws     PropelException
   */
  public function ensureConsistency()
  {

  }

  /**
   * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
   *
   * This will only work if the object has been saved and has a valid primary key set.
   *
   * @param      boolean $deep (optional) Whether to also de-associated any related objects.
   * @param      PropelPDO $con (optional) The PropelPDO connection to use.
   * @return     void
   * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
   */
  public function reload($deep = false, PropelPDO $con = null)
  {
    if ($this->isDeleted())
    {
      throw new PropelException("Cannot reload a deleted object.");
    }

    if ($this->isNew())
    {
      throw new PropelException("Cannot reload an unsaved object.");
    }

    if ($con === null)
    {
      $con = Propel::getConnection(iceModelShortUrlPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    // We don't need to alter the object instance pool; we're just modifying this instance
    // already in the pool.

    $stmt = iceModelShortUrlPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
    $row = $stmt->fetch(PDO::FETCH_NUM);
    $stmt->closeCursor();
    if (!$row)
    {
      throw new PropelException('Cannot find matching row in the database to reload object values.');
    }
    $this->hydrate($row, 0, true); // rehydrate

    if ($deep) {  // also de-associate any related objects?

      $this->colliceModelShortUrlHits = null;

    }
  }

  /**
   * Removes this object from datastore and sets delete attribute.
   *
   * @param      PropelPDO $con
   * @return     void
   * @throws     PropelException
   * @see        BaseObject::setDeleted()
   * @see        BaseObject::isDeleted()
   */
  public function delete(PropelPDO $con = null)
  {
    if ($this->isDeleted())
    {
      throw new PropelException("This object has already been deleted.");
    }

    if ($con === null)
    {
      $con = Propel::getConnection(iceModelShortUrlPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    try
    {
      $deleteQuery = iceModelShortUrlQuery::create()
        ->filterByPrimaryKey($this->getPrimaryKey());
      $ret = $this->preDelete($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseiceModelShortUrl:delete:pre') as $callable)
      {
        if (call_user_func($callable, $this, $con))
        {
          $con->commit();
          return;
        }
      }

      if ($ret)
      {
        $deleteQuery->delete($con);
        $this->postDelete($con);
        // symfony_behaviors behavior
        foreach (sfMixer::getCallables('BaseiceModelShortUrl:delete:post') as $callable)
        {
          call_user_func($callable, $this, $con);
        }

        $con->commit();
        $this->setDeleted(true);
      }
      else
      {
        $con->commit();
      }
    }
    catch (PropelException $e)
    {
      $con->rollBack();
      throw $e;
    }
  }

  /**
   * Persists this object to the database.
   *
   * If the object is new, it inserts it; otherwise an update is performed.
   * All modified related objects will also be persisted in the doSave()
   * method.  This method wraps all precipitate database operations in a
   * single transaction.
   *
   * @param      PropelPDO $con
   * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
   * @throws     PropelException
   * @see        doSave()
   */
  public function save(PropelPDO $con = null)
  {
    if ($this->isDeleted())
    {
      throw new PropelException("You cannot save an object that has been deleted.");
    }

    if ($con === null)
    {
      $con = Propel::getConnection(iceModelShortUrlPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    $isInsert = $this->isNew();
    try
    {
      $ret = $this->preSave($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseiceModelShortUrl:save:pre') as $callable)
      {
        if (is_integer($affectedRows = call_user_func($callable, $this, $con)))
        {
          $con->commit();
          return $affectedRows;
        }
      }

      if ($isInsert)
      {
        $ret = $ret && $this->preInsert($con);
        // timestampable behavior
        if (!$this->isColumnModified(iceModelShortUrlPeer::CREATED_AT))
        {
          $this->setCreatedAt(time());
        }
        if (!$this->isColumnModified(iceModelShortUrlPeer::UPDATED_AT))
        {
          $this->setUpdatedAt(time());
        }
      }
      else
      {
        $ret = $ret && $this->preUpdate($con);
        // timestampable behavior
        if ($this->isModified() && !$this->isColumnModified(iceModelShortUrlPeer::UPDATED_AT))
        {
          $this->setUpdatedAt(time());
        }
      }
      if ($ret)
      {
        $affectedRows = $this->doSave($con);
        if ($isInsert)
        {
          $this->postInsert($con);
        }
        else
        {
          $this->postUpdate($con);
        }
        $this->postSave($con);
        // symfony_behaviors behavior
        foreach (sfMixer::getCallables('BaseiceModelShortUrl:save:post') as $callable)
        {
          call_user_func($callable, $this, $con, $affectedRows);
        }

        iceModelShortUrlPeer::addInstanceToPool($this);
      }
      else
      {
        $affectedRows = 0;
      }
      $con->commit();
      return $affectedRows;
    }
    catch (PropelException $e)
    {
      $con->rollBack();
      throw $e;
    }
  }

  /**
   * Performs the work of inserting or updating the row in the database.
   *
   * If the object is new, it inserts it; otherwise an update is performed.
   * All related objects are also updated in this method.
   *
   * @param      PropelPDO $con
   * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
   * @throws     PropelException
   * @see        save()
   */
  protected function doSave(PropelPDO $con)
  {
    $affectedRows = 0; // initialize var to track total num of affected rows
    if (!$this->alreadyInSave)
    {
      $this->alreadyInSave = true;

      if ($this->isNew() )
      {
        $this->modifiedColumns[] = iceModelShortUrlPeer::ID;
      }

      // If this object has been modified, then save it to the database.
      if ($this->isModified())
      {
        if ($this->isNew())
        {
          $criteria = $this->buildCriteria();
          if ($criteria->keyContainsValue(iceModelShortUrlPeer::ID) )
          {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.iceModelShortUrlPeer::ID.')');
          }

          $pk = BasePeer::doInsert($criteria, $con);
          $affectedRows = 1;
          $this->setId($pk);  //[IMV] update autoincrement primary key
          $this->setNew(false);
        }
        else
        {
          $affectedRows = iceModelShortUrlPeer::doUpdate($this, $con);
        }

        $this->resetModified(); // [HL] After being saved an object is no longer 'modified'
      }

      if ($this->colliceModelShortUrlHits !== null)
      {
        foreach ($this->colliceModelShortUrlHits as $referrerFK)
        {
          if (!$referrerFK->isDeleted())
          {
            $affectedRows += $referrerFK->save($con);
          }
        }
      }

      $this->alreadyInSave = false;

    }
    return $affectedRows;
  }

  /**
   * Array of ValidationFailed objects.
   * @var        array ValidationFailed[]
   */
  protected $validationFailures = array();

  /**
   * Gets any ValidationFailed objects that resulted from last call to validate().
   *
   *
   * @return     array ValidationFailed[]
   * @see        validate()
   */
  public function getValidationFailures()
  {
    return $this->validationFailures;
  }

  /**
   * Validates the objects modified field values and all objects related to this table.
   *
   * If $columns is either a column name or an array of column names
   * only those columns are validated.
   *
   * @param      mixed $columns Column name or an array of column names.
   * @return     boolean Whether all columns pass validation.
   * @see        doValidate()
   * @see        getValidationFailures()
   */
  public function validate($columns = null)
  {
    $res = $this->doValidate($columns);
    if ($res === true)
    {
      $this->validationFailures = array();
      return true;
    }
    else
    {
      $this->validationFailures = $res;
      return false;
    }
  }

  /**
   * This function performs the validation work for complex object models.
   *
   * In addition to checking the current object, all related objects will
   * also be validated.  If all pass then <code>true</code> is returned; otherwise
   * an aggreagated array of ValidationFailed objects will be returned.
   *
   * @param      array $columns Array of column names to validate.
   * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
   */
  protected function doValidate($columns = null)
  {
    if (!$this->alreadyInValidation)
    {
      $this->alreadyInValidation = true;
      $retval = null;

      $failureMap = array();


      if (($retval = iceModelShortUrlPeer::doValidate($this, $columns)) !== true)
      {
        $failureMap = array_merge($failureMap, $retval);
      }


        if ($this->colliceModelShortUrlHits !== null)
        {
          foreach ($this->colliceModelShortUrlHits as $referrerFK)
          {
            if (!$referrerFK->validate($columns))
            {
              $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
            }
          }
        }


      $this->alreadyInValidation = false;
    }

    return (!empty($failureMap) ? $failureMap : true);
  }

  /**
   * Retrieves a field from the object by name passed in as a string.
   *
   * @param      string $name name
   * @param      string $type The type of fieldname the $name is of:
   *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
   *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
   * @return     mixed Value of field.
   */
  public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
  {
    $pos = iceModelShortUrlPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
    $field = $this->getByPosition($pos);
    return $field;
  }

  /**
   * Retrieves a field from the object by Position as specified in the xml schema.
   * Zero-based.
   *
   * @param      int $pos position in xml schema
   * @return     mixed Value of field at $pos
   */
  public function getByPosition($pos)
  {
    switch($pos)
    {
      case 0:
        return $this->getId();
        break;
      case 1:
        return $this->getUrl();
        break;
      case 2:
        return $this->getUrlDecoded();
        break;
      case 3:
        return $this->getHash();
        break;
      case 4:
        return $this->getViewCount();
        break;
      case 5:
        return $this->getIsPublic();
        break;
      case 6:
        return $this->getIsEnabled();
        break;
      case 7:
        return $this->getCreatedAt();
        break;
      case 8:
        return $this->getUpdatedAt();
        break;
      default:
        return null;
        break;
    }
  }

  /**
   * Exports the object as an array.
   *
   * You can specify the key type of the array by passing one of the class
   * type constants.
   *
   * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
   *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
   *                    Defaults to BasePeer::TYPE_PHPNAME.
   * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
   * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
   * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
   *
   * @return    array an associative array containing the field names (as keys) and field values
   */
  public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
  {
    if (isset($alreadyDumpedObjects['iceModelShortUrl'][$this->getPrimaryKey()]))
    {
      return '*RECURSION*';
    }
    $alreadyDumpedObjects['iceModelShortUrl'][$this->getPrimaryKey()] = true;
    $keys = iceModelShortUrlPeer::getFieldNames($keyType);
    $result = array(
      $keys[0] => $this->getId(),
      $keys[1] => $this->getUrl(),
      $keys[2] => $this->getUrlDecoded(),
      $keys[3] => $this->getHash(),
      $keys[4] => $this->getViewCount(),
      $keys[5] => $this->getIsPublic(),
      $keys[6] => $this->getIsEnabled(),
      $keys[7] => $this->getCreatedAt(),
      $keys[8] => $this->getUpdatedAt(),
    );
    if ($includeForeignObjects)
    {
      if (null !== $this->colliceModelShortUrlHits)
      {
        $result['iceModelShortUrlHits'] = $this->colliceModelShortUrlHits->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
      }
    }
    return $result;
  }

  /**
   * Sets a field from the object by name passed in as a string.
   *
   * @param      string $name peer name
   * @param      mixed $value field value
   * @param      string $type The type of fieldname the $name is of:
   *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
   *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
   * @return     void
   */
  public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
  {
    $pos = iceModelShortUrlPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
    return $this->setByPosition($pos, $value);
  }

  /**
   * Sets a field from the object by Position as specified in the xml schema.
   * Zero-based.
   *
   * @param      int $pos position in xml schema
   * @param      mixed $value field value
   * @return     void
   */
  public function setByPosition($pos, $value)
  {
    switch($pos)
    {
      case 0:
        $this->setId($value);
        break;
      case 1:
        $this->setUrl($value);
        break;
      case 2:
        $this->setUrlDecoded($value);
        break;
      case 3:
        $this->setHash($value);
        break;
      case 4:
        $this->setViewCount($value);
        break;
      case 5:
        $this->setIsPublic($value);
        break;
      case 6:
        $this->setIsEnabled($value);
        break;
      case 7:
        $this->setCreatedAt($value);
        break;
      case 8:
        $this->setUpdatedAt($value);
        break;
    }
  }

  /**
   * Populates the object using an array.
   *
   * This is particularly useful when populating an object from one of the
   * request arrays (e.g. $_POST).  This method goes through the column
   * names, checking to see whether a matching key exists in populated
   * array. If so the setByName() method is called for that column.
   *
   * You can specify the key type of the array by additionally passing one
   * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
   * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
   * The default key type is the column's phpname (e.g. 'AuthorId')
   *
   * @param      array  $arr     An array to populate the object from.
   * @param      string $keyType The type of keys the array uses.
   * @return     void
   */
  public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
  {
    $keys = iceModelShortUrlPeer::getFieldNames($keyType);

    if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
    if (array_key_exists($keys[1], $arr)) $this->setUrl($arr[$keys[1]]);
    if (array_key_exists($keys[2], $arr)) $this->setUrlDecoded($arr[$keys[2]]);
    if (array_key_exists($keys[3], $arr)) $this->setHash($arr[$keys[3]]);
    if (array_key_exists($keys[4], $arr)) $this->setViewCount($arr[$keys[4]]);
    if (array_key_exists($keys[5], $arr)) $this->setIsPublic($arr[$keys[5]]);
    if (array_key_exists($keys[6], $arr)) $this->setIsEnabled($arr[$keys[6]]);
    if (array_key_exists($keys[7], $arr)) $this->setCreatedAt($arr[$keys[7]]);
    if (array_key_exists($keys[8], $arr)) $this->setUpdatedAt($arr[$keys[8]]);
  }

  /**
   * Build a Criteria object containing the values of all modified columns in this object.
   *
   * @return     Criteria The Criteria object containing all modified values.
   */
  public function buildCriteria()
  {
    $criteria = new Criteria(iceModelShortUrlPeer::DATABASE_NAME);

    if ($this->isColumnModified(iceModelShortUrlPeer::ID)) $criteria->add(iceModelShortUrlPeer::ID, $this->id);
    if ($this->isColumnModified(iceModelShortUrlPeer::URL)) $criteria->add(iceModelShortUrlPeer::URL, $this->url);
    if ($this->isColumnModified(iceModelShortUrlPeer::URL_DECODED)) $criteria->add(iceModelShortUrlPeer::URL_DECODED, $this->url_decoded);
    if ($this->isColumnModified(iceModelShortUrlPeer::HASH)) $criteria->add(iceModelShortUrlPeer::HASH, $this->hash);
    if ($this->isColumnModified(iceModelShortUrlPeer::VIEW_COUNT)) $criteria->add(iceModelShortUrlPeer::VIEW_COUNT, $this->view_count);
    if ($this->isColumnModified(iceModelShortUrlPeer::IS_PUBLIC)) $criteria->add(iceModelShortUrlPeer::IS_PUBLIC, $this->is_public);
    if ($this->isColumnModified(iceModelShortUrlPeer::IS_ENABLED)) $criteria->add(iceModelShortUrlPeer::IS_ENABLED, $this->is_enabled);
    if ($this->isColumnModified(iceModelShortUrlPeer::CREATED_AT)) $criteria->add(iceModelShortUrlPeer::CREATED_AT, $this->created_at);
    if ($this->isColumnModified(iceModelShortUrlPeer::UPDATED_AT)) $criteria->add(iceModelShortUrlPeer::UPDATED_AT, $this->updated_at);

    return $criteria;
  }

  /**
   * Builds a Criteria object containing the primary key for this object.
   *
   * Unlike buildCriteria() this method includes the primary key values regardless
   * of whether or not they have been modified.
   *
   * @return     Criteria The Criteria object containing value(s) for primary key(s).
   */
  public function buildPkeyCriteria()
  {
    $criteria = new Criteria(iceModelShortUrlPeer::DATABASE_NAME);
    $criteria->add(iceModelShortUrlPeer::ID, $this->id);

    return $criteria;
  }

  /**
   * Returns the primary key for this object (row).
   * @return     int
   */
  public function getPrimaryKey()
  {
    return $this->getId();
  }

  /**
   * Generic method to set the primary key (id column).
   *
   * @param      int $key Primary key.
   * @return     void
   */
  public function setPrimaryKey($key)
  {
    $this->setId($key);
  }

  /**
   * Returns true if the primary key for this object is null.
   * @return     boolean
   */
  public function isPrimaryKeyNull()
  {
    return null === $this->getId();
  }

  /**
   * Sets contents of passed object to values from current object.
   *
   * If desired, this method can also make copies of all associated (fkey referrers)
   * objects.
   *
   * @param      object $copyObj An object of iceModelShortUrl (or compatible) type.
   * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
   * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
   * @throws     PropelException
   */
  public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
  {
    $copyObj->setUrl($this->getUrl());
    $copyObj->setUrlDecoded($this->getUrlDecoded());
    $copyObj->setHash($this->getHash());
    $copyObj->setViewCount($this->getViewCount());
    $copyObj->setIsPublic($this->getIsPublic());
    $copyObj->setIsEnabled($this->getIsEnabled());
    $copyObj->setCreatedAt($this->getCreatedAt());
    $copyObj->setUpdatedAt($this->getUpdatedAt());

    if ($deepCopy)
    {
      // important: temporarily setNew(false) because this affects the behavior of
      // the getter/setter methods for fkey referrer objects.
      $copyObj->setNew(false);

      foreach ($this->geticeModelShortUrlHits() as $relObj)
      {
        if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
          $copyObj->addiceModelShortUrlHit($relObj->copy($deepCopy));
        }
      }

    }

    if ($makeNew)
    {
      $copyObj->setNew(true);
      $copyObj->setId(NULL); // this is a auto-increment column, so set to default value
    }
  }

  /**
   * Makes a copy of this object that will be inserted as a new row in table when saved.
   * It creates a new object filling in the simple attributes, but skipping any primary
   * keys that are defined for the table.
   *
   * If desired, this method can also make copies of all associated (fkey referrers)
   * objects.
   *
   * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
   * @return     iceModelShortUrl Clone of current object.
   * @throws     PropelException
   */
  public function copy($deepCopy = false)
  {
    // we use get_class(), because this might be a subclass
    $clazz = get_class($this);
    $copyObj = new $clazz();
    $this->copyInto($copyObj, $deepCopy);
    return $copyObj;
  }

  /**
   * Returns a peer instance associated with this om.
   *
   * Since Peer classes are not to have any instance attributes, this method returns the
   * same instance for all member of this class. The method could therefore
   * be static, but this would prevent one from overriding the behavior.
   *
   * @return     iceModelShortUrlPeer
   */
  public function getPeer()
  {
    if (self::$peer === null)
    {
      self::$peer = new iceModelShortUrlPeer();
    }
    return self::$peer;
  }


  /**
   * Initializes a collection based on the name of a relation.
   * Avoids crafting an 'init[$relationName]s' method name
   * that wouldn't work when StandardEnglishPluralizer is used.
   *
   * @param      string $relationName The name of the relation to initialize
   * @return     void
   */
  public function initRelation($relationName)
  {
    if ('iceModelShortUrlHit' == $relationName)
    {
      return $this->initiceModelShortUrlHits();
    }
  }

  /**
   * Clears out the colliceModelShortUrlHits collection
   *
   * This does not modify the database; however, it will remove any associated objects, causing
   * them to be refetched by subsequent calls to accessor method.
   *
   * @return     void
   * @see        addiceModelShortUrlHits()
   */
  public function cleariceModelShortUrlHits()
  {
    $this->colliceModelShortUrlHits = null; // important to set this to NULL since that means it is uninitialized
  }

  /**
   * Initializes the colliceModelShortUrlHits collection.
   *
   * By default this just sets the colliceModelShortUrlHits collection to an empty array (like clearcolliceModelShortUrlHits());
   * however, you may wish to override this method in your stub class to provide setting appropriate
   * to your application -- for example, setting the initial array to the values stored in database.
   *
   * @param      boolean $overrideExisting If set to true, the method call initializes
   *                                        the collection even if it is not empty
   *
   * @return     void
   */
  public function initiceModelShortUrlHits($overrideExisting = true)
  {
    if (null !== $this->colliceModelShortUrlHits && !$overrideExisting)
    {
      return;
    }
    $this->colliceModelShortUrlHits = new PropelObjectCollection();
    $this->colliceModelShortUrlHits->setModel('iceModelShortUrlHit');
  }

  /**
   * Gets an array of iceModelShortUrlHit objects which contain a foreign key that references this object.
   *
   * If the $criteria is not null, it is used to always fetch the results from the database.
   * Otherwise the results are fetched from the database the first time, then cached.
   * Next time the same method is called without $criteria, the cached collection is returned.
   * If this iceModelShortUrl is new, it will return
   * an empty collection or the current collection; the criteria is ignored on a new object.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @return     PropelCollection|array iceModelShortUrlHit[] List of iceModelShortUrlHit objects
   * @throws     PropelException
   */
  public function geticeModelShortUrlHits($criteria = null, PropelPDO $con = null)
  {
    if(null === $this->colliceModelShortUrlHits || null !== $criteria)
    {
      if ($this->isNew() && null === $this->colliceModelShortUrlHits)
      {
        // return empty collection
        $this->initiceModelShortUrlHits();
      }
      else
      {
        $colliceModelShortUrlHits = iceModelShortUrlHitQuery::create(null, $criteria)
          ->filterByiceModelShortUrl($this)
          ->find($con);
        if (null !== $criteria)
        {
          return $colliceModelShortUrlHits;
        }
        $this->colliceModelShortUrlHits = $colliceModelShortUrlHits;
      }
    }
    return $this->colliceModelShortUrlHits;
  }

  /**
   * Returns the number of related iceModelShortUrlHit objects.
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct
   * @param      PropelPDO $con
   * @return     int Count of related iceModelShortUrlHit objects.
   * @throws     PropelException
   */
  public function counticeModelShortUrlHits(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
  {
    if(null === $this->colliceModelShortUrlHits || null !== $criteria)
    {
      if ($this->isNew() && null === $this->colliceModelShortUrlHits)
      {
        return 0;
      }
      else
      {
        $query = iceModelShortUrlHitQuery::create(null, $criteria);
        if($distinct)
        {
          $query->distinct();
        }
        return $query
          ->filterByiceModelShortUrl($this)
          ->count($con);
      }
    }
    else
    {
      return count($this->colliceModelShortUrlHits);
    }
  }

  /**
   * Method called to associate a iceModelShortUrlHit object to this object
   * through the iceModelShortUrlHit foreign key attribute.
   *
   * @param      iceModelShortUrlHit $l iceModelShortUrlHit
   * @return     iceModelShortUrl The current object (for fluent API support)
   */
  public function addiceModelShortUrlHit(iceModelShortUrlHit $l)
  {
    if ($this->colliceModelShortUrlHits === null)
    {
      $this->initiceModelShortUrlHits();
    }
    if (!$this->colliceModelShortUrlHits->contains($l)) { // only add it if the **same** object is not already associated
      $this->colliceModelShortUrlHits[]= $l;
      $l->seticeModelShortUrl($this);
    }

    return $this;
  }

  /**
   * Clears the current object and sets all attributes to their default values
   */
  public function clear()
  {
    $this->id = null;
    $this->url = null;
    $this->url_decoded = null;
    $this->hash = null;
    $this->view_count = null;
    $this->is_public = null;
    $this->is_enabled = null;
    $this->created_at = null;
    $this->updated_at = null;
    $this->alreadyInSave = false;
    $this->alreadyInValidation = false;
    $this->clearAllReferences();
    $this->applyDefaultValues();
    $this->resetModified();
    $this->setNew(true);
    $this->setDeleted(false);
  }

  /**
   * Resets all references to other model objects or collections of model objects.
   *
   * This method is a user-space workaround for PHP's inability to garbage collect
   * objects with circular references (even in PHP 5.3). This is currently necessary
   * when using Propel in certain daemon or large-volumne/high-memory operations.
   *
   * @param      boolean $deep Whether to also clear the references on all referrer objects.
   */
  public function clearAllReferences($deep = false)
  {
    if ($deep)
    {
      if ($this->colliceModelShortUrlHits)
      {
        foreach ($this->colliceModelShortUrlHits as $o)
        {
          $o->clearAllReferences($deep);
        }
      }
    }

    if ($this->colliceModelShortUrlHits instanceof PropelCollection)
    {
      $this->colliceModelShortUrlHits->clearIterator();
    }
    $this->colliceModelShortUrlHits = null;
  }

  /**
   * Return the string representation of this object
   *
   * @return string The value of the 'hash' column
   */
  public function __toString()
  {
    return (string) $this->getHash();
  }

  // timestampable behavior
  
  /**
   * Mark the current object so that the update date doesn't get updated during next save
   *
   * @return     iceModelShortUrl The current object (for fluent API support)
   */
  public function keepUpdateDateUnchanged()
  {
    $this->modifiedColumns[] = iceModelShortUrlPeer::UPDATED_AT;
    return $this;
  }

  /**
   * Catches calls to virtual methods
   */
  public function __call($name, $params)
  {
    
    // symfony_behaviors behavior
    if ($callable = sfMixer::getCallable('BaseiceModelShortUrl:' . $name))
    {
      array_unshift($params, $this);
      return call_user_func_array($callable, $params);
    }

    return parent::__call($name, $params);
  }

}
