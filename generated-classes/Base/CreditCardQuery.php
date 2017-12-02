<?php

namespace Base;

use \CreditCard as ChildCreditCard;
use \CreditCardQuery as ChildCreditCardQuery;
use \Exception;
use \PDO;
use Map\CreditCardTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'creditcard' table.
 *
 *
 *
 * @method     ChildCreditCardQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildCreditCardQuery orderByReference($order = Criteria::ASC) Order by the reference column
 * @method     ChildCreditCardQuery orderByCsv($order = Criteria::ASC) Order by the csv column
 * @method     ChildCreditCardQuery orderByExpiremonth($order = Criteria::ASC) Order by the expireMonth column
 * @method     ChildCreditCardQuery orderByExpireyear($order = Criteria::ASC) Order by the expireYear column
 * @method     ChildCreditCardQuery orderByHolder($order = Criteria::ASC) Order by the holder column
 * @method     ChildCreditCardQuery orderByUserid($order = Criteria::ASC) Order by the userId column
 *
 * @method     ChildCreditCardQuery groupById() Group by the id column
 * @method     ChildCreditCardQuery groupByReference() Group by the reference column
 * @method     ChildCreditCardQuery groupByCsv() Group by the csv column
 * @method     ChildCreditCardQuery groupByExpiremonth() Group by the expireMonth column
 * @method     ChildCreditCardQuery groupByExpireyear() Group by the expireYear column
 * @method     ChildCreditCardQuery groupByHolder() Group by the holder column
 * @method     ChildCreditCardQuery groupByUserid() Group by the userId column
 *
 * @method     ChildCreditCardQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCreditCardQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCreditCardQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCreditCardQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCreditCardQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCreditCardQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCreditCardQuery leftJoinUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the User relation
 * @method     ChildCreditCardQuery rightJoinUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the User relation
 * @method     ChildCreditCardQuery innerJoinUser($relationAlias = null) Adds a INNER JOIN clause to the query using the User relation
 *
 * @method     ChildCreditCardQuery joinWithUser($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the User relation
 *
 * @method     ChildCreditCardQuery leftJoinWithUser() Adds a LEFT JOIN clause and with to the query using the User relation
 * @method     ChildCreditCardQuery rightJoinWithUser() Adds a RIGHT JOIN clause and with to the query using the User relation
 * @method     ChildCreditCardQuery innerJoinWithUser() Adds a INNER JOIN clause and with to the query using the User relation
 *
 * @method     \UserQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildCreditCard findOne(ConnectionInterface $con = null) Return the first ChildCreditCard matching the query
 * @method     ChildCreditCard findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCreditCard matching the query, or a new ChildCreditCard object populated from the query conditions when no match is found
 *
 * @method     ChildCreditCard findOneById(int $id) Return the first ChildCreditCard filtered by the id column
 * @method     ChildCreditCard findOneByReference(string $reference) Return the first ChildCreditCard filtered by the reference column
 * @method     ChildCreditCard findOneByCsv(string $csv) Return the first ChildCreditCard filtered by the csv column
 * @method     ChildCreditCard findOneByExpiremonth(int $expireMonth) Return the first ChildCreditCard filtered by the expireMonth column
 * @method     ChildCreditCard findOneByExpireyear(int $expireYear) Return the first ChildCreditCard filtered by the expireYear column
 * @method     ChildCreditCard findOneByHolder(string $holder) Return the first ChildCreditCard filtered by the holder column
 * @method     ChildCreditCard findOneByUserid(int $userId) Return the first ChildCreditCard filtered by the userId column *

 * @method     ChildCreditCard requirePk($key, ConnectionInterface $con = null) Return the ChildCreditCard by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCreditCard requireOne(ConnectionInterface $con = null) Return the first ChildCreditCard matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCreditCard requireOneById(int $id) Return the first ChildCreditCard filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCreditCard requireOneByReference(string $reference) Return the first ChildCreditCard filtered by the reference column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCreditCard requireOneByCsv(string $csv) Return the first ChildCreditCard filtered by the csv column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCreditCard requireOneByExpiremonth(int $expireMonth) Return the first ChildCreditCard filtered by the expireMonth column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCreditCard requireOneByExpireyear(int $expireYear) Return the first ChildCreditCard filtered by the expireYear column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCreditCard requireOneByHolder(string $holder) Return the first ChildCreditCard filtered by the holder column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCreditCard requireOneByUserid(int $userId) Return the first ChildCreditCard filtered by the userId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCreditCard[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCreditCard objects based on current ModelCriteria
 * @method     ChildCreditCard[]|ObjectCollection findById(int $id) Return ChildCreditCard objects filtered by the id column
 * @method     ChildCreditCard[]|ObjectCollection findByReference(string $reference) Return ChildCreditCard objects filtered by the reference column
 * @method     ChildCreditCard[]|ObjectCollection findByCsv(string $csv) Return ChildCreditCard objects filtered by the csv column
 * @method     ChildCreditCard[]|ObjectCollection findByExpiremonth(int $expireMonth) Return ChildCreditCard objects filtered by the expireMonth column
 * @method     ChildCreditCard[]|ObjectCollection findByExpireyear(int $expireYear) Return ChildCreditCard objects filtered by the expireYear column
 * @method     ChildCreditCard[]|ObjectCollection findByHolder(string $holder) Return ChildCreditCard objects filtered by the holder column
 * @method     ChildCreditCard[]|ObjectCollection findByUserid(int $userId) Return ChildCreditCard objects filtered by the userId column
 * @method     ChildCreditCard[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CreditCardQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\CreditCardQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'store', $modelName = '\\CreditCard', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCreditCardQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCreditCardQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCreditCardQuery) {
            return $criteria;
        }
        $query = new ChildCreditCardQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildCreditCard|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CreditCardTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CreditCardTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
            // the object is already in the instance pool
            return $obj;
        }

        return $this->findPkSimple($key, $con);
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildCreditCard A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id, reference, csv, expireMonth, expireYear, holder, userId FROM creditcard WHERE id = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildCreditCard $obj */
            $obj = new ChildCreditCard();
            $obj->hydrate($row);
            CreditCardTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @return ChildCreditCard|array|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, ConnectionInterface $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($dataFetcher);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     ConnectionInterface $con an optional connection object
     *
     * @return ObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getReadConnection($this->getDbName());
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($dataFetcher);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildCreditCardQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CreditCardTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCreditCardQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CreditCardTableMap::COL_ID, $keys, Criteria::IN);
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
     * @return $this|ChildCreditCardQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CreditCardTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CreditCardTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CreditCardTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the reference column
     *
     * Example usage:
     * <code>
     * $query->filterByReference('fooValue');   // WHERE reference = 'fooValue'
     * $query->filterByReference('%fooValue%', Criteria::LIKE); // WHERE reference LIKE '%fooValue%'
     * </code>
     *
     * @param     string $reference The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCreditCardQuery The current query, for fluid interface
     */
    public function filterByReference($reference = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($reference)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CreditCardTableMap::COL_REFERENCE, $reference, $comparison);
    }

    /**
     * Filter the query on the csv column
     *
     * Example usage:
     * <code>
     * $query->filterByCsv('fooValue');   // WHERE csv = 'fooValue'
     * $query->filterByCsv('%fooValue%', Criteria::LIKE); // WHERE csv LIKE '%fooValue%'
     * </code>
     *
     * @param     string $csv The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCreditCardQuery The current query, for fluid interface
     */
    public function filterByCsv($csv = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($csv)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CreditCardTableMap::COL_CSV, $csv, $comparison);
    }

    /**
     * Filter the query on the expireMonth column
     *
     * Example usage:
     * <code>
     * $query->filterByExpiremonth(1234); // WHERE expireMonth = 1234
     * $query->filterByExpiremonth(array(12, 34)); // WHERE expireMonth IN (12, 34)
     * $query->filterByExpiremonth(array('min' => 12)); // WHERE expireMonth > 12
     * </code>
     *
     * @param     mixed $expiremonth The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCreditCardQuery The current query, for fluid interface
     */
    public function filterByExpiremonth($expiremonth = null, $comparison = null)
    {
        if (is_array($expiremonth)) {
            $useMinMax = false;
            if (isset($expiremonth['min'])) {
                $this->addUsingAlias(CreditCardTableMap::COL_EXPIREMONTH, $expiremonth['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expiremonth['max'])) {
                $this->addUsingAlias(CreditCardTableMap::COL_EXPIREMONTH, $expiremonth['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CreditCardTableMap::COL_EXPIREMONTH, $expiremonth, $comparison);
    }

    /**
     * Filter the query on the expireYear column
     *
     * Example usage:
     * <code>
     * $query->filterByExpireyear(1234); // WHERE expireYear = 1234
     * $query->filterByExpireyear(array(12, 34)); // WHERE expireYear IN (12, 34)
     * $query->filterByExpireyear(array('min' => 12)); // WHERE expireYear > 12
     * </code>
     *
     * @param     mixed $expireyear The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCreditCardQuery The current query, for fluid interface
     */
    public function filterByExpireyear($expireyear = null, $comparison = null)
    {
        if (is_array($expireyear)) {
            $useMinMax = false;
            if (isset($expireyear['min'])) {
                $this->addUsingAlias(CreditCardTableMap::COL_EXPIREYEAR, $expireyear['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expireyear['max'])) {
                $this->addUsingAlias(CreditCardTableMap::COL_EXPIREYEAR, $expireyear['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CreditCardTableMap::COL_EXPIREYEAR, $expireyear, $comparison);
    }

    /**
     * Filter the query on the holder column
     *
     * Example usage:
     * <code>
     * $query->filterByHolder('fooValue');   // WHERE holder = 'fooValue'
     * $query->filterByHolder('%fooValue%', Criteria::LIKE); // WHERE holder LIKE '%fooValue%'
     * </code>
     *
     * @param     string $holder The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCreditCardQuery The current query, for fluid interface
     */
    public function filterByHolder($holder = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($holder)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CreditCardTableMap::COL_HOLDER, $holder, $comparison);
    }

    /**
     * Filter the query on the userId column
     *
     * Example usage:
     * <code>
     * $query->filterByUserid(1234); // WHERE userId = 1234
     * $query->filterByUserid(array(12, 34)); // WHERE userId IN (12, 34)
     * $query->filterByUserid(array('min' => 12)); // WHERE userId > 12
     * </code>
     *
     * @see       filterByUser()
     *
     * @param     mixed $userid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCreditCardQuery The current query, for fluid interface
     */
    public function filterByUserid($userid = null, $comparison = null)
    {
        if (is_array($userid)) {
            $useMinMax = false;
            if (isset($userid['min'])) {
                $this->addUsingAlias(CreditCardTableMap::COL_USERID, $userid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userid['max'])) {
                $this->addUsingAlias(CreditCardTableMap::COL_USERID, $userid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CreditCardTableMap::COL_USERID, $userid, $comparison);
    }

    /**
     * Filter the query by a related \User object
     *
     * @param \User|ObjectCollection $user The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildCreditCardQuery The current query, for fluid interface
     */
    public function filterByUser($user, $comparison = null)
    {
        if ($user instanceof \User) {
            return $this
                ->addUsingAlias(CreditCardTableMap::COL_USERID, $user->getId(), $comparison);
        } elseif ($user instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CreditCardTableMap::COL_USERID, $user->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByUser() only accepts arguments of type \User or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the User relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildCreditCardQuery The current query, for fluid interface
     */
    public function joinUser($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('User');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'User');
        }

        return $this;
    }

    /**
     * Use the User relation User object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \UserQuery A secondary query class using the current class as primary query
     */
    public function useUserQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinUser($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'User', '\UserQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCreditCard $creditCard Object to remove from the list of results
     *
     * @return $this|ChildCreditCardQuery The current query, for fluid interface
     */
    public function prune($creditCard = null)
    {
        if ($creditCard) {
            $this->addUsingAlias(CreditCardTableMap::COL_ID, $creditCard->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the creditcard table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CreditCardTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CreditCardTableMap::clearInstancePool();
            CreditCardTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    /**
     * Performs a DELETE on the database based on the current ModelCriteria
     *
     * @param ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CreditCardTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CreditCardTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CreditCardTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CreditCardTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CreditCardQuery
