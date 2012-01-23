<?php


/**
 * Base class that represents a query for the 'short_url_hit' table.
 *
 * 
 *
 * @method     iceModelShortUrlHitQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     iceModelShortUrlHitQuery orderByShortUrlId($order = Criteria::ASC) Order by the short_url_id column
 * @method     iceModelShortUrlHitQuery orderBySessionId($order = Criteria::ASC) Order by the session_id column
 * @method     iceModelShortUrlHitQuery orderByIpAddress($order = Criteria::ASC) Order by the ip_address column
 * @method     iceModelShortUrlHitQuery orderByReferrer($order = Criteria::ASC) Order by the referrer column
 * @method     iceModelShortUrlHitQuery orderByIsMobile($order = Criteria::ASC) Order by the is_mobile column
 * @method     iceModelShortUrlHitQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     iceModelShortUrlHitQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     iceModelShortUrlHitQuery groupById() Group by the id column
 * @method     iceModelShortUrlHitQuery groupByShortUrlId() Group by the short_url_id column
 * @method     iceModelShortUrlHitQuery groupBySessionId() Group by the session_id column
 * @method     iceModelShortUrlHitQuery groupByIpAddress() Group by the ip_address column
 * @method     iceModelShortUrlHitQuery groupByReferrer() Group by the referrer column
 * @method     iceModelShortUrlHitQuery groupByIsMobile() Group by the is_mobile column
 * @method     iceModelShortUrlHitQuery groupByCreatedAt() Group by the created_at column
 * @method     iceModelShortUrlHitQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     iceModelShortUrlHitQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     iceModelShortUrlHitQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     iceModelShortUrlHitQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     iceModelShortUrlHitQuery leftJoiniceModelShortUrl($relationAlias = null) Adds a LEFT JOIN clause to the query using the iceModelShortUrl relation
 * @method     iceModelShortUrlHitQuery rightJoiniceModelShortUrl($relationAlias = null) Adds a RIGHT JOIN clause to the query using the iceModelShortUrl relation
 * @method     iceModelShortUrlHitQuery innerJoiniceModelShortUrl($relationAlias = null) Adds a INNER JOIN clause to the query using the iceModelShortUrl relation
 *
 * @method     iceModelShortUrlHit findOne(PropelPDO $con = null) Return the first iceModelShortUrlHit matching the query
 * @method     iceModelShortUrlHit findOneOrCreate(PropelPDO $con = null) Return the first iceModelShortUrlHit matching the query, or a new iceModelShortUrlHit object populated from the query conditions when no match is found
 *
 * @method     iceModelShortUrlHit findOneById(int $id) Return the first iceModelShortUrlHit filtered by the id column
 * @method     iceModelShortUrlHit findOneByShortUrlId(int $short_url_id) Return the first iceModelShortUrlHit filtered by the short_url_id column
 * @method     iceModelShortUrlHit findOneBySessionId(string $session_id) Return the first iceModelShortUrlHit filtered by the session_id column
 * @method     iceModelShortUrlHit findOneByIpAddress(string $ip_address) Return the first iceModelShortUrlHit filtered by the ip_address column
 * @method     iceModelShortUrlHit findOneByReferrer(string $referrer) Return the first iceModelShortUrlHit filtered by the referrer column
 * @method     iceModelShortUrlHit findOneByIsMobile(boolean $is_mobile) Return the first iceModelShortUrlHit filtered by the is_mobile column
 * @method     iceModelShortUrlHit findOneByCreatedAt(string $created_at) Return the first iceModelShortUrlHit filtered by the created_at column
 * @method     iceModelShortUrlHit findOneByUpdatedAt(string $updated_at) Return the first iceModelShortUrlHit filtered by the updated_at column
 *
 * @method     array findById(int $id) Return iceModelShortUrlHit objects filtered by the id column
 * @method     array findByShortUrlId(int $short_url_id) Return iceModelShortUrlHit objects filtered by the short_url_id column
 * @method     array findBySessionId(string $session_id) Return iceModelShortUrlHit objects filtered by the session_id column
 * @method     array findByIpAddress(string $ip_address) Return iceModelShortUrlHit objects filtered by the ip_address column
 * @method     array findByReferrer(string $referrer) Return iceModelShortUrlHit objects filtered by the referrer column
 * @method     array findByIsMobile(boolean $is_mobile) Return iceModelShortUrlHit objects filtered by the is_mobile column
 * @method     array findByCreatedAt(string $created_at) Return iceModelShortUrlHit objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return iceModelShortUrlHit objects filtered by the updated_at column
 *
 * @package    propel.generator.plugins.iceShortUrlPlugin.lib.model.om
 */
abstract class BaseiceModelShortUrlHitQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseiceModelShortUrlHitQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'iceModelShortUrlHit', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new iceModelShortUrlHitQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    iceModelShortUrlHitQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof iceModelShortUrlHitQuery) {
            return $criteria;
        }
        $query = new iceModelShortUrlHitQuery();
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
     * @return    iceModelShortUrlHit|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = iceModelShortUrlHitPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    iceModelShortUrlHitQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(iceModelShortUrlHitPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    iceModelShortUrlHitQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(iceModelShortUrlHitPeer::ID, $keys, Criteria::IN);
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
     * @return    iceModelShortUrlHitQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(iceModelShortUrlHitPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the short_url_id column
     *
     * Example usage:
     * <code>
     * $query->filterByShortUrlId(1234); // WHERE short_url_id = 1234
     * $query->filterByShortUrlId(array(12, 34)); // WHERE short_url_id IN (12, 34)
     * $query->filterByShortUrlId(array('min' => 12)); // WHERE short_url_id > 12
     * </code>
     *
     * @see       filterByiceModelShortUrl()
     *
     * @param     mixed $shortUrlId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelShortUrlHitQuery The current query, for fluid interface
     */
    public function filterByShortUrlId($shortUrlId = null, $comparison = null)
    {
        if (is_array($shortUrlId)) {
            $useMinMax = false;
            if (isset($shortUrlId['min'])) {
                $this->addUsingAlias(iceModelShortUrlHitPeer::SHORT_URL_ID, $shortUrlId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($shortUrlId['max'])) {
                $this->addUsingAlias(iceModelShortUrlHitPeer::SHORT_URL_ID, $shortUrlId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(iceModelShortUrlHitPeer::SHORT_URL_ID, $shortUrlId, $comparison);
    }

    /**
     * Filter the query on the session_id column
     *
     * Example usage:
     * <code>
     * $query->filterBySessionId('fooValue');   // WHERE session_id = 'fooValue'
     * $query->filterBySessionId('%fooValue%'); // WHERE session_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sessionId The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelShortUrlHitQuery The current query, for fluid interface
     */
    public function filterBySessionId($sessionId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sessionId)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sessionId)) {
                $sessionId = str_replace('*', '%', $sessionId);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(iceModelShortUrlHitPeer::SESSION_ID, $sessionId, $comparison);
    }

    /**
     * Filter the query on the ip_address column
     *
     * Example usage:
     * <code>
     * $query->filterByIpAddress('fooValue');   // WHERE ip_address = 'fooValue'
     * $query->filterByIpAddress('%fooValue%'); // WHERE ip_address LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ipAddress The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelShortUrlHitQuery The current query, for fluid interface
     */
    public function filterByIpAddress($ipAddress = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ipAddress)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ipAddress)) {
                $ipAddress = str_replace('*', '%', $ipAddress);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(iceModelShortUrlHitPeer::IP_ADDRESS, $ipAddress, $comparison);
    }

    /**
     * Filter the query on the referrer column
     *
     * Example usage:
     * <code>
     * $query->filterByReferrer('fooValue');   // WHERE referrer = 'fooValue'
     * $query->filterByReferrer('%fooValue%'); // WHERE referrer LIKE '%fooValue%'
     * </code>
     *
     * @param     string $referrer The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelShortUrlHitQuery The current query, for fluid interface
     */
    public function filterByReferrer($referrer = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($referrer)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $referrer)) {
                $referrer = str_replace('*', '%', $referrer);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(iceModelShortUrlHitPeer::REFERRER, $referrer, $comparison);
    }

    /**
     * Filter the query on the is_mobile column
     *
     * Example usage:
     * <code>
     * $query->filterByIsMobile(true); // WHERE is_mobile = true
     * $query->filterByIsMobile('yes'); // WHERE is_mobile = true
     * </code>
     *
     * @param     boolean|string $isMobile The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelShortUrlHitQuery The current query, for fluid interface
     */
    public function filterByIsMobile($isMobile = null, $comparison = null)
    {
        if (is_string($isMobile)) {
            $is_mobile = in_array(strtolower($isMobile), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(iceModelShortUrlHitPeer::IS_MOBILE, $isMobile, $comparison);
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
     * @return    iceModelShortUrlHitQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(iceModelShortUrlHitPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(iceModelShortUrlHitPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(iceModelShortUrlHitPeer::CREATED_AT, $createdAt, $comparison);
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
     * @return    iceModelShortUrlHitQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(iceModelShortUrlHitPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(iceModelShortUrlHitPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(iceModelShortUrlHitPeer::UPDATED_AT, $updatedAt, $comparison);
    }

    /**
     * Filter the query by a related iceModelShortUrl object
     *
     * @param     iceModelShortUrl|PropelCollection $iceModelShortUrl The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelShortUrlHitQuery The current query, for fluid interface
     */
    public function filterByiceModelShortUrl($iceModelShortUrl, $comparison = null)
    {
        if ($iceModelShortUrl instanceof iceModelShortUrl) {
            return $this
                ->addUsingAlias(iceModelShortUrlHitPeer::SHORT_URL_ID, $iceModelShortUrl->getId(), $comparison);
        } elseif ($iceModelShortUrl instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(iceModelShortUrlHitPeer::SHORT_URL_ID, $iceModelShortUrl->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByiceModelShortUrl() only accepts arguments of type iceModelShortUrl or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the iceModelShortUrl relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    iceModelShortUrlHitQuery The current query, for fluid interface
     */
    public function joiniceModelShortUrl($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('iceModelShortUrl');

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
            $this->addJoinObject($join, 'iceModelShortUrl');
        }

        return $this;
    }

    /**
     * Use the iceModelShortUrl relation iceModelShortUrl object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    iceModelShortUrlQuery A secondary query class using the current class as primary query
     */
    public function useiceModelShortUrlQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joiniceModelShortUrl($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'iceModelShortUrl', 'iceModelShortUrlQuery');
    }

    /**
     * Exclude object from result
     *
     * @param     iceModelShortUrlHit $iceModelShortUrlHit Object to remove from the list of results
     *
     * @return    iceModelShortUrlHitQuery The current query, for fluid interface
     */
    public function prune($iceModelShortUrlHit = null)
    {
        if ($iceModelShortUrlHit) {
            $this->addUsingAlias(iceModelShortUrlHitPeer::ID, $iceModelShortUrlHit->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

  // timestampable behavior
  
  /**
   * Filter by the latest updated
   *
   * @param      int $nbDays Maximum age of the latest update in days
   *
   * @return     iceModelShortUrlHitQuery The current query, for fluid interface
   */
  public function recentlyUpdated($nbDays = 7)
  {
    return $this->addUsingAlias(iceModelShortUrlHitPeer::UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
  }
  
  /**
   * Filter by the latest created
   *
   * @param      int $nbDays Maximum age of in days
   *
   * @return     iceModelShortUrlHitQuery The current query, for fluid interface
   */
  public function recentlyCreated($nbDays = 7)
  {
    return $this->addUsingAlias(iceModelShortUrlHitPeer::CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
  }
  
  /**
   * Order by update date desc
   *
   * @return     iceModelShortUrlHitQuery The current query, for fluid interface
   */
  public function lastUpdatedFirst()
  {
    return $this->addDescendingOrderByColumn(iceModelShortUrlHitPeer::UPDATED_AT);
  }
  
  /**
   * Order by update date asc
   *
   * @return     iceModelShortUrlHitQuery The current query, for fluid interface
   */
  public function firstUpdatedFirst()
  {
    return $this->addAscendingOrderByColumn(iceModelShortUrlHitPeer::UPDATED_AT);
  }
  
  /**
   * Order by create date desc
   *
   * @return     iceModelShortUrlHitQuery The current query, for fluid interface
   */
  public function lastCreatedFirst()
  {
    return $this->addDescendingOrderByColumn(iceModelShortUrlHitPeer::CREATED_AT);
  }
  
  /**
   * Order by create date asc
   *
   * @return     iceModelShortUrlHitQuery The current query, for fluid interface
   */
  public function firstCreatedFirst()
  {
    return $this->addAscendingOrderByColumn(iceModelShortUrlHitPeer::CREATED_AT);
  }

}