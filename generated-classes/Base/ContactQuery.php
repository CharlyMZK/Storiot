<?php

namespace Base;

use \Contact as ChildContact;
use \ContactQuery as ChildContactQuery;
use \Exception;
use \PDO;
use Map\ContactTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'contact' table.
 *
 *
 *
 * @method     ChildContactQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildContactQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     ChildContactQuery orderByCategory($order = Criteria::ASC) Order by the category column
 * @method     ChildContactQuery orderBySubject($order = Criteria::ASC) Order by the subject column
 * @method     ChildContactQuery orderByMessage($order = Criteria::ASC) Order by the message column
 * @method     ChildContactQuery orderBySenddate($order = Criteria::ASC) Order by the sendDate column
 *
 * @method     ChildContactQuery groupById() Group by the id column
 * @method     ChildContactQuery groupByEmail() Group by the email column
 * @method     ChildContactQuery groupByCategory() Group by the category column
 * @method     ChildContactQuery groupBySubject() Group by the subject column
 * @method     ChildContactQuery groupByMessage() Group by the message column
 * @method     ChildContactQuery groupBySenddate() Group by the sendDate column
 *
 * @method     ChildContactQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildContactQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildContactQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildContactQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildContactQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildContactQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildContact findOne(ConnectionInterface $con = null) Return the first ChildContact matching the query
 * @method     ChildContact findOneOrCreate(ConnectionInterface $con = null) Return the first ChildContact matching the query, or a new ChildContact object populated from the query conditions when no match is found
 *
 * @method     ChildContact findOneById(int $id) Return the first ChildContact filtered by the id column
 * @method     ChildContact findOneByEmail(string $email) Return the first ChildContact filtered by the email column
 * @method     ChildContact findOneByCategory(string $category) Return the first ChildContact filtered by the category column
 * @method     ChildContact findOneBySubject(string $subject) Return the first ChildContact filtered by the subject column
 * @method     ChildContact findOneByMessage(string $message) Return the first ChildContact filtered by the message column
 * @method     ChildContact findOneBySenddate(string $sendDate) Return the first ChildContact filtered by the sendDate column *

 * @method     ChildContact requirePk($key, ConnectionInterface $con = null) Return the ChildContact by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildContact requireOne(ConnectionInterface $con = null) Return the first ChildContact matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildContact requireOneById(int $id) Return the first ChildContact filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildContact requireOneByEmail(string $email) Return the first ChildContact filtered by the email column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildContact requireOneByCategory(string $category) Return the first ChildContact filtered by the category column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildContact requireOneBySubject(string $subject) Return the first ChildContact filtered by the subject column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildContact requireOneByMessage(string $message) Return the first ChildContact filtered by the message column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildContact requireOneBySenddate(string $sendDate) Return the first ChildContact filtered by the sendDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildContact[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildContact objects based on current ModelCriteria
 * @method     ChildContact[]|ObjectCollection findById(int $id) Return ChildContact objects filtered by the id column
 * @method     ChildContact[]|ObjectCollection findByEmail(string $email) Return ChildContact objects filtered by the email column
 * @method     ChildContact[]|ObjectCollection findByCategory(string $category) Return ChildContact objects filtered by the category column
 * @method     ChildContact[]|ObjectCollection findBySubject(string $subject) Return ChildContact objects filtered by the subject column
 * @method     ChildContact[]|ObjectCollection findByMessage(string $message) Return ChildContact objects filtered by the message column
 * @method     ChildContact[]|ObjectCollection findBySenddate(string $sendDate) Return ChildContact objects filtered by the sendDate column
 * @method     ChildContact[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ContactQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ContactQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'store', $modelName = '\\Contact', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildContactQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildContactQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildContactQuery) {
            return $criteria;
        }
        $query = new ChildContactQuery();
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
     * @return ChildContact|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ContactTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ContactTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildContact A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id, email, category, subject, message, sendDate FROM contact WHERE id = :p0';
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
            /** @var ChildContact $obj */
            $obj = new ChildContact();
            $obj->hydrate($row);
            ContactTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildContact|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildContactQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ContactTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildContactQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ContactTableMap::COL_ID, $keys, Criteria::IN);
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
     * @return $this|ChildContactQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(ContactTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(ContactTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ContactTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the email column
     *
     * Example usage:
     * <code>
     * $query->filterByEmail('fooValue');   // WHERE email = 'fooValue'
     * $query->filterByEmail('%fooValue%', Criteria::LIKE); // WHERE email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $email The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildContactQuery The current query, for fluid interface
     */
    public function filterByEmail($email = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($email)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ContactTableMap::COL_EMAIL, $email, $comparison);
    }

    /**
     * Filter the query on the category column
     *
     * Example usage:
     * <code>
     * $query->filterByCategory('fooValue');   // WHERE category = 'fooValue'
     * $query->filterByCategory('%fooValue%', Criteria::LIKE); // WHERE category LIKE '%fooValue%'
     * </code>
     *
     * @param     string $category The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildContactQuery The current query, for fluid interface
     */
    public function filterByCategory($category = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($category)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ContactTableMap::COL_CATEGORY, $category, $comparison);
    }

    /**
     * Filter the query on the subject column
     *
     * Example usage:
     * <code>
     * $query->filterBySubject('fooValue');   // WHERE subject = 'fooValue'
     * $query->filterBySubject('%fooValue%', Criteria::LIKE); // WHERE subject LIKE '%fooValue%'
     * </code>
     *
     * @param     string $subject The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildContactQuery The current query, for fluid interface
     */
    public function filterBySubject($subject = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($subject)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ContactTableMap::COL_SUBJECT, $subject, $comparison);
    }

    /**
     * Filter the query on the message column
     *
     * Example usage:
     * <code>
     * $query->filterByMessage('fooValue');   // WHERE message = 'fooValue'
     * $query->filterByMessage('%fooValue%', Criteria::LIKE); // WHERE message LIKE '%fooValue%'
     * </code>
     *
     * @param     string $message The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildContactQuery The current query, for fluid interface
     */
    public function filterByMessage($message = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($message)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ContactTableMap::COL_MESSAGE, $message, $comparison);
    }

    /**
     * Filter the query on the sendDate column
     *
     * Example usage:
     * <code>
     * $query->filterBySenddate('2011-03-14'); // WHERE sendDate = '2011-03-14'
     * $query->filterBySenddate('now'); // WHERE sendDate = '2011-03-14'
     * $query->filterBySenddate(array('max' => 'yesterday')); // WHERE sendDate > '2011-03-13'
     * </code>
     *
     * @param     mixed $senddate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildContactQuery The current query, for fluid interface
     */
    public function filterBySenddate($senddate = null, $comparison = null)
    {
        if (is_array($senddate)) {
            $useMinMax = false;
            if (isset($senddate['min'])) {
                $this->addUsingAlias(ContactTableMap::COL_SENDDATE, $senddate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($senddate['max'])) {
                $this->addUsingAlias(ContactTableMap::COL_SENDDATE, $senddate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ContactTableMap::COL_SENDDATE, $senddate, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildContact $contact Object to remove from the list of results
     *
     * @return $this|ChildContactQuery The current query, for fluid interface
     */
    public function prune($contact = null)
    {
        if ($contact) {
            $this->addUsingAlias(ContactTableMap::COL_ID, $contact->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the contact table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ContactTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ContactTableMap::clearInstancePool();
            ContactTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ContactTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ContactTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ContactTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ContactTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ContactQuery
