<?php


/**
 * Base class that represents a query for the 'short_url' table.
 *
 * 
 *
 * @method     iceModelShortUrlQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     iceModelShortUrlQuery orderByUrl($order = Criteria::ASC) Order by the url column
 * @method     iceModelShortUrlQuery orderByUrlDecoded($order = Criteria::ASC) Order by the url_decoded column
 * @method     iceModelShortUrlQuery orderByHash($order = Criteria::ASC) Order by the hash column
 * @method     iceModelShortUrlQuery orderByViewCount($order = Criteria::ASC) Order by the view_count column
 * @method     iceModelShortUrlQuery orderByIsPublic($order = Criteria::ASC) Order by the is_public column
 * @method     iceModelShortUrlQuery orderByIsEnabled($order = Criteria::ASC) Order by the is_enabled column
 * @method     iceModelShortUrlQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     iceModelShortUrlQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     iceModelShortUrlQuery groupById() Group by the id column
 * @method     iceModelShortUrlQuery groupByUrl() Group by the url column
 * @method     iceModelShortUrlQuery groupByUrlDecoded() Group by the url_decoded column
 * @method     iceModelShortUrlQuery groupByHash() Group by the hash column
 * @method     iceModelShortUrlQuery groupByViewCount() Group by the view_count column
 * @method     iceModelShortUrlQuery groupByIsPublic() Group by the is_public column
 * @method     iceModelShortUrlQuery groupByIsEnabled() Group by the is_enabled column
 * @method     iceModelShortUrlQuery groupByCreatedAt() Group by the created_at column
 * @method     iceModelShortUrlQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     iceModelShortUrlQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     iceModelShortUrlQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     iceModelShortUrlQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     iceModelShortUrlQuery leftJoiniceModelShortUrlHit($relationAlias = null) Adds a LEFT JOIN clause to the query using the iceModelShortUrlHit relation
 * @method     iceModelShortUrlQuery rightJoiniceModelShortUrlHit($relationAlias = null) Adds a RIGHT JOIN clause to the query using the iceModelShortUrlHit relation
 * @method     iceModelShortUrlQuery innerJoiniceModelShortUrlHit($relationAlias = null) Adds a INNER JOIN clause to the query using the iceModelShortUrlHit relation
 *
 * @method     iceModelShortUrl findOne(PropelPDO $con = null) Return the first iceModelShortUrl matching the query
 * @method     iceModelShortUrl findOneOrCreate(PropelPDO $con = null) Return the first iceModelShortUrl matching the query, or a new iceModelShortUrl object populated from the query conditions when no match is found
 *
 * @method     iceModelShortUrl findOneById(int $id) Return the first iceModelShortUrl filtered by the id column
 * @method     iceModelShortUrl findOneByUrl(string $url) Return the first iceModelShortUrl filtered by the url column
 * @method     iceModelShortUrl findOneByUrlDecoded(string $url_decoded) Return the first iceModelShortUrl filtered by the url_decoded column
 * @method     iceModelShortUrl findOneByHash(string $hash) Return the first iceModelShortUrl filtered by the hash column
 * @method     iceModelShortUrl findOneByViewCount(int $view_count) Return the first iceModelShortUrl filtered by the view_count column
 * @method     iceModelShortUrl findOneByIsPublic(boolean $is_public) Return the first iceModelShortUrl filtered by the is_public column
 * @method     iceModelShortUrl findOneByIsEnabled(boolean $is_enabled) Return the first iceModelShortUrl filtered by the is_enabled column
 * @method     iceModelShortUrl findOneByCreatedAt(string $created_at) Return the first iceModelShortUrl filtered by the created_at column
 * @method     iceModelShortUrl findOneByUpdatedAt(string $updated_at) Return the first iceModelShortUrl filtered by the updated_at column
 *
 * @method     array findById(int $id) Return iceModelShortUrl objects filtered by the id column
 * @method     array findByUrl(string $url) Return iceModelShortUrl objects filtered by the url column
 * @method     array findByUrlDecoded(string $url_decoded) Return iceModelShortUrl objects filtered by the url_decoded column
 * @method     array findByHash(string $hash) Return iceModelShortUrl objects filtered by the hash column
 * @method     array findByViewCount(int $view_count) Return iceModelShortUrl objects filtered by the view_count column
 * @method     array findByIsPublic(boolean $is_public) Return iceModelShortUrl objects filtered by the is_public column
 * @method     array findByIsEnabled(boolean $is_enabled) Return iceModelShortUrl objects filtered by the is_enabled column
 * @method     array findByCreatedAt(string $created_at) Return iceModelShortUrl objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return iceModelShortUrl objects filtered by the updated_at column
 *
 * @package    propel.generator.plugins.iceShortUrlPlugin.lib.model.om
 */
abstract class BaseiceModelShortUrlQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseiceModelShortUrlQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'iceModelShortUrl', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new iceModelShortUrlQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    iceModelShortUrlQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof iceModelShortUrlQuery) {
            return $criteria;
        }
        $query = new iceModelShortUrlQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }
        return $query;
    }

    /**
     * Find object by primary key
     * Use instance pooling to avoid a database query if the object exists
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return    iceModelShortUrl|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = iceModelShortUrlPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
            // the object is alredy in the instance pool
            return $obj;
        } else {
            // the object has not been requested yet, or the formatter is not an object formatter
            $criteria = $this->isKeepQuery() ? clone $this : $this;
            $stmt = $criteria
                ->filterByPrimaryKey($key)
                ->getSelectStatement($con);
            return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
        }
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        return $this
            ->filterByPrimaryKeys($keys)
            ->find($con);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return    iceModelShortUrlQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(iceModelShortUrlPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    iceModelShortUrlQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(iceModelShortUrlPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id > 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelShortUrlQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(iceModelShortUrlPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the url column
     *
     * Example usage:
     * <code>
     * $query->filterByUrl('fooValue');   // WHERE url = 'fooValue'
     * $query->filterByUrl('%fooValue%'); // WHERE url LIKE '%fooValue%'
     * </code>
     *
     * @param     string $url The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelShortUrlQuery The current query, for fluid interface
     */
    public function filterByUrl($url = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($url)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $url)) {
                $url = str_replace('*', '%', $url);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(iceModelShortUrlPeer::URL, $url, $comparison);
    }

    /**
     * Filter the query on the url_decoded column
     *
     * Example usage:
     * <code>
     * $query->filterByUrlDecoded('fooValue');   // WHERE url_decoded = 'fooValue'
     * $query->filterByUrlDecoded('%fooValue%'); // WHERE url_decoded LIKE '%fooValue%'
     * </code>
     *
     * @param     string $urlDecoded The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelShortUrlQuery The current query, for fluid interface
     */
    public function filterByUrlDecoded($urlDecoded = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($urlDecoded)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $urlDecoded)) {
                $urlDecoded = str_replace('*', '%', $urlDecoded);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(iceModelShortUrlPeer::URL_DECODED, $urlDecoded, $comparison);
    }

    /**
     * Filter the query on the hash column
     *
     * Example usage:
     * <code>
     * $query->filterByHash('fooValue');   // WHERE hash = 'fooValue'
     * $query->filterByHash('%fooValue%'); // WHERE hash LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hash The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelShortUrlQuery The current query, for fluid interface
     */
    public function filterByHash($hash = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hash)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $hash)) {
                $hash = str_replace('*', '%', $hash);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(iceModelShortUrlPeer::HASH, $hash, $comparison);
    }

    /**
     * Filter the query on the view_count column
     *
     * Example usage:
     * <code>
     * $query->filterByViewCount(1234); // WHERE view_count = 1234
     * $query->filterByViewCount(array(12, 34)); // WHERE view_count IN (12, 34)
     * $query->filterByViewCount(array('min' => 12)); // WHERE view_count > 12
     * </code>
     *
     * @param     mixed $viewCount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelShortUrlQuery The current query, for fluid interface
     */
    public function filterByViewCount($viewCount = null, $comparison = null)
    {
        if (is_array($viewCount)) {
            $useMinMax = false;
            if (isset($viewCount['min'])) {
                $this->addUsingAlias(iceModelShortUrlPeer::VIEW_COUNT, $viewCount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($viewCount['max'])) {
                $this->addUsingAlias(iceModelShortUrlPeer::VIEW_COUNT, $viewCount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(iceModelShortUrlPeer::VIEW_COUNT, $viewCount, $comparison);
    }

    /**
     * Filter the query on the is_public column
     *
     * Example usage:
     * <code>
     * $query->filterByIsPublic(true); // WHERE is_public = true
     * $query->filterByIsPublic('yes'); // WHERE is_public = true
     * </code>
     *
     * @param     boolean|string $isPublic The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelShortUrlQuery The current query, for fluid interface
     */
    public function filterByIsPublic($isPublic = null, $comparison = null)
    {
        if (is_string($isPublic)) {
            $is_public = in_array(strtolower($isPublic), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(iceModelShortUrlPeer::IS_PUBLIC, $isPublic, $comparison);
    }

    /**
     * Filter the query on the is_enabled column
     *
     * Example usage:
     * <code>
     * $query->filterByIsEnabled(true); // WHERE is_enabled = true
     * $query->filterByIsEnabled('yes'); // WHERE is_enabled = true
     * </code>
     *
     * @param     boolean|string $isEnabled The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelShortUrlQuery The current query, for fluid interface
     */
    public function filterByIsEnabled($isEnabled = null, $comparison = null)
    {
        if (is_string($isEnabled)) {
            $is_enabled = in_array(strtolower($isEnabled), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(iceModelShortUrlPeer::IS_ENABLED, $isEnabled, $comparison);
    }

    /**
     * Filter the query on the created_at column
     *
     * Example usage:
     * <code>
     * $query->filterByCreatedAt('2011-03-14'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt('now'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt(array('max' => 'yesterday')); // WHERE created_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $createdAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelShortUrlQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(iceModelShortUrlPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(iceModelShortUrlPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(iceModelShortUrlPeer::CREATED_AT, $createdAt, $comparison);
    }

    /**
     * Filter the query on the updated_at column
     *
     * Example usage:
     * <code>
     * $query->filterByUpdatedAt('2011-03-14'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt('now'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt(array('max' => 'yesterday')); // WHERE updated_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $updatedAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelShortUrlQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(iceModelShortUrlPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(iceModelShortUrlPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(iceModelShortUrlPeer::UPDATED_AT, $updatedAt, $comparison);
    }

    /**
     * Filter the query by a related iceModelShortUrlHit object
     *
     * @param     iceModelShortUrlHit $iceModelShortUrlHit  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelShortUrlQuery The current query, for fluid interface
     */
    public function filterByiceModelShortUrlHit($iceModelShortUrlHit, $comparison = null)
    {
        if ($iceModelShortUrlHit instanceof iceModelShortUrlHit) {
            return $this
                ->addUsingAlias(iceModelShortUrlPeer::ID, $iceModelShortUrlHit->getShortUrlId(), $comparison);
        } elseif ($iceModelShortUrlHit instanceof PropelCollection) {
            return $this
                ->useiceModelShortUrlHitQuery()
                ->filterByPrimaryKeys($iceModelShortUrlHit->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByiceModelShortUrlHit() only accepts arguments of type iceModelShortUrlHit or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the iceModelShortUrlHit relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    iceModelShortUrlQuery The current query, for fluid interface
     */
    public function joiniceModelShortUrlHit($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('iceModelShortUrlHit');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'iceModelShortUrlHit');
        }

        return $this;
    }

    /**
     * Use the iceModelShortUrlHit relation iceModelShortUrlHit object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    iceModelShortUrlHitQuery A secondary query class using the current class as primary query
     */
    public function useiceModelShortUrlHitQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joiniceModelShortUrlHit($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'iceModelShortUrlHit', 'iceModelShortUrlHitQuery');
    }

    /**
     * Exclude object from result
     *
     * @param     iceModelShortUrl $iceModelShortUrl Object to remove from the list of results
     *
     * @return    iceModelShortUrlQuery The current query, for fluid interface
     */
    public function prune($iceModelShortUrl = null)
    {
        if ($iceModelShortUrl) {
            $this->addUsingAlias(iceModelShortUrlPeer::ID, $iceModelShortUrl->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

  // timestampable behavior
  
  /**
   * Filter by the latest updated
   *
   * @param      int $nbDays Maximum age of the latest update in days
   *
   * @return     iceModelShortUrlQuery The current query, for fluid interface
   */
  public function recentlyUpdated($nbDays = 7)
  {
    return $this->addUsingAlias(iceModelShortUrlPeer::UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
  }
  
  /**
   * Filter by the latest created
   *
   * @param      int $nbDays Maximum age of in days
   *
   * @return     iceModelShortUrlQuery The current query, for fluid interface
   */
  public function recentlyCreated($nbDays = 7)
  {
    return $this->addUsingAlias(iceModelShortUrlPeer::CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
  }
  
  /**
   * Order by update date desc
   *
   * @return     iceModelShortUrlQuery The current query, for fluid interface
   */
  public function lastUpdatedFirst()
  {
    return $this->addDescendingOrderByColumn(iceModelShortUrlPeer::UPDATED_AT);
  }
  
  /**
   * Order by update date asc
   *
   * @return     iceModelShortUrlQuery The current query, for fluid interface
   */
  public function firstUpdatedFirst()
  {
    return $this->addAscendingOrderByColumn(iceModelShortUrlPeer::UPDATED_AT);
  }
  
  /**
   * Order by create date desc
   *
   * @return     iceModelShortUrlQuery The current query, for fluid interface
   */
  public function lastCreatedFirst()
  {
    return $this->addDescendingOrderByColumn(iceModelShortUrlPeer::CREATED_AT);
  }
  
  /**
   * Order by create date asc
   *
   * @return     iceModelShortUrlQuery The current query, for fluid interface
   */
  public function firstCreatedFirst()
  {
    return $this->addAscendingOrderByColumn(iceModelShortUrlPeer::CREATED_AT);
  }

}