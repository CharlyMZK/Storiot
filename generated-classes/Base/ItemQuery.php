<?php

namespace Base;

use \Item as ChildItem;
use \ItemQuery as ChildItemQuery;
use \Exception;
use \PDO;
use Map\ItemTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'item' table.
 *
 *
 *
 * @method     ChildItemQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildItemQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     ChildItemQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     ChildItemQuery orderByAdddate($order = Criteria::ASC) Order by the addDate column
 * @method     ChildItemQuery orderByImage($order = Criteria::ASC) Order by the image column
 * @method     ChildItemQuery orderByPrice($order = Criteria::ASC) Order by the price column
 * @method     ChildItemQuery orderBySize($order = Criteria::ASC) Order by the size column
 * @method     ChildItemQuery orderByWeight($order = Criteria::ASC) Order by the weight column
 *
 * @method     ChildItemQuery groupById() Group by the id column
 * @method     ChildItemQuery groupByName() Group by the name column
 * @method     ChildItemQuery groupByDescription() Group by the description column
 * @method     ChildItemQuery groupByAdddate() Group by the addDate column
 * @method     ChildItemQuery groupByImage() Group by the image column
 * @method     ChildItemQuery groupByPrice() Group by the price column
 * @method     ChildItemQuery groupBySize() Group by the size column
 * @method     ChildItemQuery groupByWeight() Group by the weight column
 *
 * @method     ChildItemQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildItemQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildItemQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildItemQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildItemQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildItemQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildItemQuery leftJoinItemInPackage($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemInPackage relation
 * @method     ChildItemQuery rightJoinItemInPackage($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemInPackage relation
 * @method     ChildItemQuery innerJoinItemInPackage($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemInPackage relation
 *
 * @method     ChildItemQuery joinWithItemInPackage($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemInPackage relation
 *
 * @method     ChildItemQuery leftJoinWithItemInPackage() Adds a LEFT JOIN clause and with to the query using the ItemInPackage relation
 * @method     ChildItemQuery rightJoinWithItemInPackage() Adds a RIGHT JOIN clause and with to the query using the ItemInPackage relation
 * @method     ChildItemQuery innerJoinWithItemInPackage() Adds a INNER JOIN clause and with to the query using the ItemInPackage relation
 *
 * @method     ChildItemQuery leftJoinItemInCart($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemInCart relation
 * @method     ChildItemQuery rightJoinItemInCart($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemInCart relation
 * @method     ChildItemQuery innerJoinItemInCart($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemInCart relation
 *
 * @method     ChildItemQuery joinWithItemInCart($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemInCart relation
 *
 * @method     ChildItemQuery leftJoinWithItemInCart() Adds a LEFT JOIN clause and with to the query using the ItemInCart relation
 * @method     ChildItemQuery rightJoinWithItemInCart() Adds a RIGHT JOIN clause and with to the query using the ItemInCart relation
 * @method     ChildItemQuery innerJoinWithItemInCart() Adds a INNER JOIN clause and with to the query using the ItemInCart relation
 *
 * @method     ChildItemQuery leftJoinItemType($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemType relation
 * @method     ChildItemQuery rightJoinItemType($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemType relation
 * @method     ChildItemQuery innerJoinItemType($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemType relation
 *
 * @method     ChildItemQuery joinWithItemType($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemType relation
 *
 * @method     ChildItemQuery leftJoinWithItemType() Adds a LEFT JOIN clause and with to the query using the ItemType relation
 * @method     ChildItemQuery rightJoinWithItemType() Adds a RIGHT JOIN clause and with to the query using the ItemType relation
 * @method     ChildItemQuery innerJoinWithItemType() Adds a INNER JOIN clause and with to the query using the ItemType relation
 *
 * @method     \ItemInPackageQuery|\ItemInCartQuery|\ItemTypeQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildItem findOne(ConnectionInterface $con = null) Return the first ChildItem matching the query
 * @method     ChildItem findOneOrCreate(ConnectionInterface $con = null) Return the first ChildItem matching the query, or a new ChildItem object populated from the query conditions when no match is found
 *
 * @method     ChildItem findOneById(int $id) Return the first ChildItem filtered by the id column
 * @method     ChildItem findOneByName(string $name) Return the first ChildItem filtered by the name column
 * @method     ChildItem findOneByDescription(string $description) Return the first ChildItem filtered by the description column
 * @method     ChildItem findOneByAdddate(string $addDate) Return the first ChildItem filtered by the addDate column
 * @method     ChildItem findOneByImage(string $image) Return the first ChildItem filtered by the image column
 * @method     ChildItem findOneByPrice(double $price) Return the first ChildItem filtered by the price column
 * @method     ChildItem findOneBySize(double $size) Return the first ChildItem filtered by the size column
 * @method     ChildItem findOneByWeight(double $weight) Return the first ChildItem filtered by the weight column *

 * @method     ChildItem requirePk($key, ConnectionInterface $con = null) Return the ChildItem by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItem requireOne(ConnectionInterface $con = null) Return the first ChildItem matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildItem requireOneById(int $id) Return the first ChildItem filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItem requireOneByName(string $name) Return the first ChildItem filtered by the name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItem requireOneByDescription(string $description) Return the first ChildItem filtered by the description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItem requireOneByAdddate(string $addDate) Return the first ChildItem filtered by the addDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItem requireOneByImage(string $image) Return the first ChildItem filtered by the image column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItem requireOneByPrice(double $price) Return the first ChildItem filtered by the price column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItem requireOneBySize(double $size) Return the first ChildItem filtered by the size column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItem requireOneByWeight(double $weight) Return the first ChildItem filtered by the weight column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildItem[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildItem objects based on current ModelCriteria
 * @method     ChildItem[]|ObjectCollection findById(int $id) Return ChildItem objects filtered by the id column
 * @method     ChildItem[]|ObjectCollection findByName(string $name) Return ChildItem objects filtered by the name column
 * @method     ChildItem[]|ObjectCollection findByDescription(string $description) Return ChildItem objects filtered by the description column
 * @method     ChildItem[]|ObjectCollection findByAdddate(string $addDate) Return ChildItem objects filtered by the addDate column
 * @method     ChildItem[]|ObjectCollection findByImage(string $image) Return ChildItem objects filtered by the image column
 * @method     ChildItem[]|ObjectCollection findByPrice(double $price) Return ChildItem objects filtered by the price column
 * @method     ChildItem[]|ObjectCollection findBySize(double $size) Return ChildItem objects filtered by the size column
 * @method     ChildItem[]|ObjectCollection findByWeight(double $weight) Return ChildItem objects filtered by the weight column
 * @method     ChildItem[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ItemQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ItemQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'store', $modelName = '\\Item', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildItemQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildItemQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildItemQuery) {
            return $criteria;
        }
        $query = new ChildItemQuery();
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
     * @return ChildItem|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ItemTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ItemTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildItem A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id, name, description, addDate, image, price, size, weight FROM item WHERE id = :p0';
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
            /** @var ChildItem $obj */
            $obj = new ChildItem();
            $obj->hydrate($row);
            ItemTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildItem|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildItemQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ItemTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildItemQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ItemTableMap::COL_ID, $keys, Criteria::IN);
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
     * @return $this|ChildItemQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(ItemTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(ItemTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%', Criteria::LIKE); // WHERE name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemTableMap::COL_NAME, $name, $comparison);
    }

    /**
     * Filter the query on the description column
     *
     * Example usage:
     * <code>
     * $query->filterByDescription('fooValue');   // WHERE description = 'fooValue'
     * $query->filterByDescription('%fooValue%', Criteria::LIKE); // WHERE description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $description The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemTableMap::COL_DESCRIPTION, $description, $comparison);
    }

    /**
     * Filter the query on the addDate column
     *
     * Example usage:
     * <code>
     * $query->filterByAdddate('2011-03-14'); // WHERE addDate = '2011-03-14'
     * $query->filterByAdddate('now'); // WHERE addDate = '2011-03-14'
     * $query->filterByAdddate(array('max' => 'yesterday')); // WHERE addDate > '2011-03-13'
     * </code>
     *
     * @param     mixed $adddate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemQuery The current query, for fluid interface
     */
    public function filterByAdddate($adddate = null, $comparison = null)
    {
        if (is_array($adddate)) {
            $useMinMax = false;
            if (isset($adddate['min'])) {
                $this->addUsingAlias(ItemTableMap::COL_ADDDATE, $adddate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($adddate['max'])) {
                $this->addUsingAlias(ItemTableMap::COL_ADDDATE, $adddate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemTableMap::COL_ADDDATE, $adddate, $comparison);
    }

    /**
     * Filter the query on the image column
     *
     * Example usage:
     * <code>
     * $query->filterByImage('fooValue');   // WHERE image = 'fooValue'
     * $query->filterByImage('%fooValue%', Criteria::LIKE); // WHERE image LIKE '%fooValue%'
     * </code>
     *
     * @param     string $image The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemQuery The current query, for fluid interface
     */
    public function filterByImage($image = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($image)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemTableMap::COL_IMAGE, $image, $comparison);
    }

    /**
     * Filter the query on the price column
     *
     * Example usage:
     * <code>
     * $query->filterByPrice(1234); // WHERE price = 1234
     * $query->filterByPrice(array(12, 34)); // WHERE price IN (12, 34)
     * $query->filterByPrice(array('min' => 12)); // WHERE price > 12
     * </code>
     *
     * @param     mixed $price The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemQuery The current query, for fluid interface
     */
    public function filterByPrice($price = null, $comparison = null)
    {
        if (is_array($price)) {
            $useMinMax = false;
            if (isset($price['min'])) {
                $this->addUsingAlias(ItemTableMap::COL_PRICE, $price['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($price['max'])) {
                $this->addUsingAlias(ItemTableMap::COL_PRICE, $price['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemTableMap::COL_PRICE, $price, $comparison);
    }

    /**
     * Filter the query on the size column
     *
     * Example usage:
     * <code>
     * $query->filterBySize(1234); // WHERE size = 1234
     * $query->filterBySize(array(12, 34)); // WHERE size IN (12, 34)
     * $query->filterBySize(array('min' => 12)); // WHERE size > 12
     * </code>
     *
     * @param     mixed $size The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemQuery The current query, for fluid interface
     */
    public function filterBySize($size = null, $comparison = null)
    {
        if (is_array($size)) {
            $useMinMax = false;
            if (isset($size['min'])) {
                $this->addUsingAlias(ItemTableMap::COL_SIZE, $size['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($size['max'])) {
                $this->addUsingAlias(ItemTableMap::COL_SIZE, $size['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemTableMap::COL_SIZE, $size, $comparison);
    }

    /**
     * Filter the query on the weight column
     *
     * Example usage:
     * <code>
     * $query->filterByWeight(1234); // WHERE weight = 1234
     * $query->filterByWeight(array(12, 34)); // WHERE weight IN (12, 34)
     * $query->filterByWeight(array('min' => 12)); // WHERE weight > 12
     * </code>
     *
     * @param     mixed $weight The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemQuery The current query, for fluid interface
     */
    public function filterByWeight($weight = null, $comparison = null)
    {
        if (is_array($weight)) {
            $useMinMax = false;
            if (isset($weight['min'])) {
                $this->addUsingAlias(ItemTableMap::COL_WEIGHT, $weight['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($weight['max'])) {
                $this->addUsingAlias(ItemTableMap::COL_WEIGHT, $weight['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemTableMap::COL_WEIGHT, $weight, $comparison);
    }

    /**
     * Filter the query by a related \ItemInPackage object
     *
     * @param \ItemInPackage|ObjectCollection $itemInPackage the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildItemQuery The current query, for fluid interface
     */
    public function filterByItemInPackage($itemInPackage, $comparison = null)
    {
        if ($itemInPackage instanceof \ItemInPackage) {
            return $this
                ->addUsingAlias(ItemTableMap::COL_ID, $itemInPackage->getItemid(), $comparison);
        } elseif ($itemInPackage instanceof ObjectCollection) {
            return $this
                ->useItemInPackageQuery()
                ->filterByPrimaryKeys($itemInPackage->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByItemInPackage() only accepts arguments of type \ItemInPackage or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ItemInPackage relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildItemQuery The current query, for fluid interface
     */
    public function joinItemInPackage($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ItemInPackage');

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
            $this->addJoinObject($join, 'ItemInPackage');
        }

        return $this;
    }

    /**
     * Use the ItemInPackage relation ItemInPackage object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \ItemInPackageQuery A secondary query class using the current class as primary query
     */
    public function useItemInPackageQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinItemInPackage($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ItemInPackage', '\ItemInPackageQuery');
    }

    /**
     * Filter the query by a related \ItemInCart object
     *
     * @param \ItemInCart|ObjectCollection $itemInCart the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildItemQuery The current query, for fluid interface
     */
    public function filterByItemInCart($itemInCart, $comparison = null)
    {
        if ($itemInCart instanceof \ItemInCart) {
            return $this
                ->addUsingAlias(ItemTableMap::COL_ID, $itemInCart->getItemid(), $comparison);
        } elseif ($itemInCart instanceof ObjectCollection) {
            return $this
                ->useItemInCartQuery()
                ->filterByPrimaryKeys($itemInCart->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByItemInCart() only accepts arguments of type \ItemInCart or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ItemInCart relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildItemQuery The current query, for fluid interface
     */
    public function joinItemInCart($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ItemInCart');

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
            $this->addJoinObject($join, 'ItemInCart');
        }

        return $this;
    }

    /**
     * Use the ItemInCart relation ItemInCart object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \ItemInCartQuery A secondary query class using the current class as primary query
     */
    public function useItemInCartQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinItemInCart($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ItemInCart', '\ItemInCartQuery');
    }

    /**
     * Filter the query by a related \ItemType object
     *
     * @param \ItemType|ObjectCollection $itemType the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildItemQuery The current query, for fluid interface
     */
    public function filterByItemType($itemType, $comparison = null)
    {
        if ($itemType instanceof \ItemType) {
            return $this
                ->addUsingAlias(ItemTableMap::COL_ID, $itemType->getItemid(), $comparison);
        } elseif ($itemType instanceof ObjectCollection) {
            return $this
                ->useItemTypeQuery()
                ->filterByPrimaryKeys($itemType->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByItemType() only accepts arguments of type \ItemType or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ItemType relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildItemQuery The current query, for fluid interface
     */
    public function joinItemType($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ItemType');

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
            $this->addJoinObject($join, 'ItemType');
        }

        return $this;
    }

    /**
     * Use the ItemType relation ItemType object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \ItemTypeQuery A secondary query class using the current class as primary query
     */
    public function useItemTypeQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinItemType($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ItemType', '\ItemTypeQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildItem $item Object to remove from the list of results
     *
     * @return $this|ChildItemQuery The current query, for fluid interface
     */
    public function prune($item = null)
    {
        if ($item) {
            $this->addUsingAlias(ItemTableMap::COL_ID, $item->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the item table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ItemTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ItemTableMap::clearInstancePool();
            ItemTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ItemTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ItemTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ItemTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ItemTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ItemQuery
