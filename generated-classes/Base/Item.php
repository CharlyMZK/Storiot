<?php

namespace Base;

use \Item as ChildItem;
use \ItemInCart as ChildItemInCart;
use \ItemInCartQuery as ChildItemInCartQuery;
use \ItemInPackage as ChildItemInPackage;
use \ItemInPackageQuery as ChildItemInPackageQuery;
use \ItemQuery as ChildItemQuery;
use \ItemType as ChildItemType;
use \ItemTypeQuery as ChildItemTypeQuery;
use \DateTime;
use \Exception;
use \PDO;
use Map\ItemInCartTableMap;
use Map\ItemInPackageTableMap;
use Map\ItemTableMap;
use Map\ItemTypeTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveRecord\ActiveRecordInterface;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\BadMethodCallException;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Parser\AbstractParser;
use Propel\Runtime\Util\PropelDateTime;

/**
 * Base class that represents a row from the 'item' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class Item implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\ItemTableMap';


    /**
     * attribute to determine if this object has previously been saved.
     * @var boolean
     */
    protected $new = true;

    /**
     * attribute to determine whether this object has been deleted.
     * @var boolean
     */
    protected $deleted = false;

    /**
     * The columns that have been modified in current object.
     * Tracking modified columns allows us to only update modified columns.
     * @var array
     */
    protected $modifiedColumns = array();

    /**
     * The (virtual) columns that are added at runtime
     * The formatters can add supplementary columns based on a resultset
     * @var array
     */
    protected $virtualColumns = array();

    /**
     * The value for the id field.
     *
     * @var        int
     */
    protected $id;

    /**
     * The value for the name field.
     *
     * @var        string
     */
    protected $name;

    /**
     * The value for the description field.
     *
     * @var        string
     */
    protected $description;

    /**
     * The value for the adddate field.
     *
     * @var        DateTime
     */
    protected $adddate;

    /**
     * The value for the image field.
     *
     * @var        string
     */
    protected $image;

    /**
     * The value for the price field.
     *
     * @var        double
     */
    protected $price;

    /**
     * The value for the size field.
     *
     * @var        double
     */
    protected $size;

    /**
     * The value for the weight field.
     *
     * @var        double
     */
    protected $weight;

    /**
     * @var        ObjectCollection|ChildItemInPackage[] Collection to store aggregation of ChildItemInPackage objects.
     */
    protected $collItemInPackages;
    protected $collItemInPackagesPartial;

    /**
     * @var        ObjectCollection|ChildItemInCart[] Collection to store aggregation of ChildItemInCart objects.
     */
    protected $collItemInCarts;
    protected $collItemInCartsPartial;

    /**
     * @var        ObjectCollection|ChildItemType[] Collection to store aggregation of ChildItemType objects.
     */
    protected $collItemTypes;
    protected $collItemTypesPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildItemInPackage[]
     */
    protected $itemInPackagesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildItemInCart[]
     */
    protected $itemInCartsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildItemType[]
     */
    protected $itemTypesScheduledForDeletion = null;

    /**
     * Initializes internal state of Base\Item object.
     */
    public function __construct()
    {
    }

    /**
     * Returns whether the object has been modified.
     *
     * @return boolean True if the object has been modified.
     */
    public function isModified()
    {
        return !!$this->modifiedColumns;
    }

    /**
     * Has specified column been modified?
     *
     * @param  string  $col column fully qualified name (TableMap::TYPE_COLNAME), e.g. Book::AUTHOR_ID
     * @return boolean True if $col has been modified.
     */
    public function isColumnModified($col)
    {
        return $this->modifiedColumns && isset($this->modifiedColumns[$col]);
    }

    /**
     * Get the columns that have been modified in this object.
     * @return array A unique list of the modified column names for this object.
     */
    public function getModifiedColumns()
    {
        return $this->modifiedColumns ? array_keys($this->modifiedColumns) : [];
    }

    /**
     * Returns whether the object has ever been saved.  This will
     * be false, if the object was retrieved from storage or was created
     * and then saved.
     *
     * @return boolean true, if the object has never been persisted.
     */
    public function isNew()
    {
        return $this->new;
    }

    /**
     * Setter for the isNew attribute.  This method will be called
     * by Propel-generated children and objects.
     *
     * @param boolean $b the state of the object.
     */
    public function setNew($b)
    {
        $this->new = (boolean) $b;
    }

    /**
     * Whether this object has been deleted.
     * @return boolean The deleted state of this object.
     */
    public function isDeleted()
    {
        return $this->deleted;
    }

    /**
     * Specify whether this object has been deleted.
     * @param  boolean $b The deleted state of this object.
     * @return void
     */
    public function setDeleted($b)
    {
        $this->deleted = (boolean) $b;
    }

    /**
     * Sets the modified state for the object to be false.
     * @param  string $col If supplied, only the specified column is reset.
     * @return void
     */
    public function resetModified($col = null)
    {
        if (null !== $col) {
            if (isset($this->modifiedColumns[$col])) {
                unset($this->modifiedColumns[$col]);
            }
        } else {
            $this->modifiedColumns = array();
        }
    }

    /**
     * Compares this with another <code>Item</code> instance.  If
     * <code>obj</code> is an instance of <code>Item</code>, delegates to
     * <code>equals(Item)</code>.  Otherwise, returns <code>false</code>.
     *
     * @param  mixed   $obj The object to compare to.
     * @return boolean Whether equal to the object specified.
     */
    public function equals($obj)
    {
        if (!$obj instanceof static) {
            return false;
        }

        if ($this === $obj) {
            return true;
        }

        if (null === $this->getPrimaryKey() || null === $obj->getPrimaryKey()) {
            return false;
        }

        return $this->getPrimaryKey() === $obj->getPrimaryKey();
    }

    /**
     * Get the associative array of the virtual columns in this object
     *
     * @return array
     */
    public function getVirtualColumns()
    {
        return $this->virtualColumns;
    }

    /**
     * Checks the existence of a virtual column in this object
     *
     * @param  string  $name The virtual column name
     * @return boolean
     */
    public function hasVirtualColumn($name)
    {
        return array_key_exists($name, $this->virtualColumns);
    }

    /**
     * Get the value of a virtual column in this object
     *
     * @param  string $name The virtual column name
     * @return mixed
     *
     * @throws PropelException
     */
    public function getVirtualColumn($name)
    {
        if (!$this->hasVirtualColumn($name)) {
            throw new PropelException(sprintf('Cannot get value of inexistent virtual column %s.', $name));
        }

        return $this->virtualColumns[$name];
    }

    /**
     * Set the value of a virtual column in this object
     *
     * @param string $name  The virtual column name
     * @param mixed  $value The value to give to the virtual column
     *
     * @return $this|Item The current object, for fluid interface
     */
    public function setVirtualColumn($name, $value)
    {
        $this->virtualColumns[$name] = $value;

        return $this;
    }

    /**
     * Logs a message using Propel::log().
     *
     * @param  string  $msg
     * @param  int     $priority One of the Propel::LOG_* logging levels
     * @return boolean
     */
    protected function log($msg, $priority = Propel::LOG_INFO)
    {
        return Propel::log(get_class($this) . ': ' . $msg, $priority);
    }

    /**
     * Export the current object properties to a string, using a given parser format
     * <code>
     * $book = BookQuery::create()->findPk(9012);
     * echo $book->exportTo('JSON');
     *  => {"Id":9012,"Title":"Don Juan","ISBN":"0140422161","Price":12.99,"PublisherId":1234,"AuthorId":5678}');
     * </code>
     *
     * @param  mixed   $parser                 A AbstractParser instance, or a format name ('XML', 'YAML', 'JSON', 'CSV')
     * @param  boolean $includeLazyLoadColumns (optional) Whether to include lazy load(ed) columns. Defaults to TRUE.
     * @return string  The exported data
     */
    public function exportTo($parser, $includeLazyLoadColumns = true)
    {
        if (!$parser instanceof AbstractParser) {
            $parser = AbstractParser::getParser($parser);
        }

        return $parser->fromArray($this->toArray(TableMap::TYPE_PHPNAME, $includeLazyLoadColumns, array(), true));
    }

    /**
     * Clean up internal collections prior to serializing
     * Avoids recursive loops that turn into segmentation faults when serializing
     */
    public function __sleep()
    {
        $this->clearAllReferences();

        $cls = new \ReflectionClass($this);
        $propertyNames = [];
        $serializableProperties = array_diff($cls->getProperties(), $cls->getProperties(\ReflectionProperty::IS_STATIC));

        foreach($serializableProperties as $property) {
            $propertyNames[] = $property->getName();
        }

        return $propertyNames;
    }

    /**
     * Get the [id] column value.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the [name] column value.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the [description] column value.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Get the [optionally formatted] temporal [adddate] column value.
     *
     *
     * @param      string $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getAdddate($format = NULL)
    {
        if ($format === null) {
            return $this->adddate;
        } else {
            return $this->adddate instanceof \DateTimeInterface ? $this->adddate->format($format) : null;
        }
    }

    /**
     * Get the [image] column value.
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Get the [price] column value.
     *
     * @return double
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Get the [size] column value.
     *
     * @return double
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Get the [weight] column value.
     *
     * @return double
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set the value of [id] column.
     *
     * @param int $v new value
     * @return $this|\Item The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[ItemTableMap::COL_ID] = true;
        }

        return $this;
    } // setId()

    /**
     * Set the value of [name] column.
     *
     * @param string $v new value
     * @return $this|\Item The current object (for fluent API support)
     */
    public function setName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->name !== $v) {
            $this->name = $v;
            $this->modifiedColumns[ItemTableMap::COL_NAME] = true;
        }

        return $this;
    } // setName()

    /**
     * Set the value of [description] column.
     *
     * @param string $v new value
     * @return $this|\Item The current object (for fluent API support)
     */
    public function setDescription($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->description !== $v) {
            $this->description = $v;
            $this->modifiedColumns[ItemTableMap::COL_DESCRIPTION] = true;
        }

        return $this;
    } // setDescription()

    /**
     * Sets the value of [adddate] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\Item The current object (for fluent API support)
     */
    public function setAdddate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->adddate !== null || $dt !== null) {
            if ($this->adddate === null || $dt === null || $dt->format("Y-m-d") !== $this->adddate->format("Y-m-d")) {
                $this->adddate = $dt === null ? null : clone $dt;
                $this->modifiedColumns[ItemTableMap::COL_ADDDATE] = true;
            }
        } // if either are not null

        return $this;
    } // setAdddate()

    /**
     * Set the value of [image] column.
     *
     * @param string $v new value
     * @return $this|\Item The current object (for fluent API support)
     */
    public function setImage($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->image !== $v) {
            $this->image = $v;
            $this->modifiedColumns[ItemTableMap::COL_IMAGE] = true;
        }

        return $this;
    } // setImage()

    /**
     * Set the value of [price] column.
     *
     * @param double $v new value
     * @return $this|\Item The current object (for fluent API support)
     */
    public function setPrice($v)
    {
        if ($v !== null) {
            $v = (double) $v;
        }

        if ($this->price !== $v) {
            $this->price = $v;
            $this->modifiedColumns[ItemTableMap::COL_PRICE] = true;
        }

        return $this;
    } // setPrice()

    /**
     * Set the value of [size] column.
     *
     * @param double $v new value
     * @return $this|\Item The current object (for fluent API support)
     */
    public function setSize($v)
    {
        if ($v !== null) {
            $v = (double) $v;
        }

        if ($this->size !== $v) {
            $this->size = $v;
            $this->modifiedColumns[ItemTableMap::COL_SIZE] = true;
        }

        return $this;
    } // setSize()

    /**
     * Set the value of [weight] column.
     *
     * @param double $v new value
     * @return $this|\Item The current object (for fluent API support)
     */
    public function setWeight($v)
    {
        if ($v !== null) {
            $v = (double) $v;
        }

        if ($this->weight !== $v) {
            $this->weight = $v;
            $this->modifiedColumns[ItemTableMap::COL_WEIGHT] = true;
        }

        return $this;
    } // setWeight()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
        // otherwise, everything was equal, so return TRUE
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array   $row       The row returned by DataFetcher->fetch().
     * @param int     $startcol  0-based offset column which indicates which restultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @param string  $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                  One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                            TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false, $indexType = TableMap::TYPE_NUM)
    {
        try {

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : ItemTableMap::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)];
            $this->id = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : ItemTableMap::translateFieldName('Name', TableMap::TYPE_PHPNAME, $indexType)];
            $this->name = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : ItemTableMap::translateFieldName('Description', TableMap::TYPE_PHPNAME, $indexType)];
            $this->description = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : ItemTableMap::translateFieldName('Adddate', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00') {
                $col = null;
            }
            $this->adddate = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : ItemTableMap::translateFieldName('Image', TableMap::TYPE_PHPNAME, $indexType)];
            $this->image = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : ItemTableMap::translateFieldName('Price', TableMap::TYPE_PHPNAME, $indexType)];
            $this->price = (null !== $col) ? (double) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : ItemTableMap::translateFieldName('Size', TableMap::TYPE_PHPNAME, $indexType)];
            $this->size = (null !== $col) ? (double) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : ItemTableMap::translateFieldName('Weight', TableMap::TYPE_PHPNAME, $indexType)];
            $this->weight = (null !== $col) ? (double) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 8; // 8 = ItemTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\Item'), 0, $e);
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
     * @throws PropelException
     */
    public function ensureConsistency()
    {
    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param      boolean $deep (optional) Whether to also de-associated any related objects.
     * @param      ConnectionInterface $con (optional) The ConnectionInterface connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ItemTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildItemQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collItemInPackages = null;

            $this->collItemInCarts = null;

            $this->collItemTypes = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see Item::setDeleted()
     * @see Item::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(ItemTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildItemQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $this->setDeleted(true);
            }
        });
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param      ConnectionInterface $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see doSave()
     */
    public function save(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($this->alreadyInSave) {
            return 0;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(ItemTableMap::DATABASE_NAME);
        }

        return $con->transaction(function () use ($con) {
            $ret = $this->preSave($con);
            $isInsert = $this->isNew();
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                ItemTableMap::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }

            return $affectedRows;
        });
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param      ConnectionInterface $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see save()
     */
    protected function doSave(ConnectionInterface $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                    $affectedRows += 1;
                } else {
                    $affectedRows += $this->doUpdate($con);
                }
                $this->resetModified();
            }

            if ($this->itemInPackagesScheduledForDeletion !== null) {
                if (!$this->itemInPackagesScheduledForDeletion->isEmpty()) {
                    \ItemInPackageQuery::create()
                        ->filterByPrimaryKeys($this->itemInPackagesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->itemInPackagesScheduledForDeletion = null;
                }
            }

            if ($this->collItemInPackages !== null) {
                foreach ($this->collItemInPackages as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->itemInCartsScheduledForDeletion !== null) {
                if (!$this->itemInCartsScheduledForDeletion->isEmpty()) {
                    \ItemInCartQuery::create()
                        ->filterByPrimaryKeys($this->itemInCartsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->itemInCartsScheduledForDeletion = null;
                }
            }

            if ($this->collItemInCarts !== null) {
                foreach ($this->collItemInCarts as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->itemTypesScheduledForDeletion !== null) {
                if (!$this->itemTypesScheduledForDeletion->isEmpty()) {
                    \ItemTypeQuery::create()
                        ->filterByPrimaryKeys($this->itemTypesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->itemTypesScheduledForDeletion = null;
                }
            }

            if ($this->collItemTypes !== null) {
                foreach ($this->collItemTypes as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param      ConnectionInterface $con
     *
     * @throws PropelException
     * @see doSave()
     */
    protected function doInsert(ConnectionInterface $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[ItemTableMap::COL_ID] = true;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ItemTableMap::COL_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ItemTableMap::COL_ID)) {
            $modifiedColumns[':p' . $index++]  = 'id';
        }
        if ($this->isColumnModified(ItemTableMap::COL_NAME)) {
            $modifiedColumns[':p' . $index++]  = 'name';
        }
        if ($this->isColumnModified(ItemTableMap::COL_DESCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = 'description';
        }
        if ($this->isColumnModified(ItemTableMap::COL_ADDDATE)) {
            $modifiedColumns[':p' . $index++]  = 'addDate';
        }
        if ($this->isColumnModified(ItemTableMap::COL_IMAGE)) {
            $modifiedColumns[':p' . $index++]  = 'image';
        }
        if ($this->isColumnModified(ItemTableMap::COL_PRICE)) {
            $modifiedColumns[':p' . $index++]  = 'price';
        }
        if ($this->isColumnModified(ItemTableMap::COL_SIZE)) {
            $modifiedColumns[':p' . $index++]  = 'size';
        }
        if ($this->isColumnModified(ItemTableMap::COL_WEIGHT)) {
            $modifiedColumns[':p' . $index++]  = 'weight';
        }

        $sql = sprintf(
            'INSERT INTO item (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'id':
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case 'name':
                        $stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
                        break;
                    case 'description':
                        $stmt->bindValue($identifier, $this->description, PDO::PARAM_STR);
                        break;
                    case 'addDate':
                        $stmt->bindValue($identifier, $this->adddate ? $this->adddate->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'image':
                        $stmt->bindValue($identifier, $this->image, PDO::PARAM_STR);
                        break;
                    case 'price':
                        $stmt->bindValue($identifier, $this->price, PDO::PARAM_STR);
                        break;
                    case 'size':
                        $stmt->bindValue($identifier, $this->size, PDO::PARAM_STR);
                        break;
                    case 'weight':
                        $stmt->bindValue($identifier, $this->weight, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), 0, $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', 0, $e);
        }
        $this->setId($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param      ConnectionInterface $con
     *
     * @return Integer Number of updated rows
     * @see doSave()
     */
    protected function doUpdate(ConnectionInterface $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();

        return $selectCriteria->doUpdate($valuesCriteria, $con);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param      string $name name
     * @param      string $type The type of fieldname the $name is of:
     *                     one of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                     TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                     Defaults to TableMap::TYPE_PHPNAME.
     * @return mixed Value of field.
     */
    public function getByName($name, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = ItemTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param      int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getId();
                break;
            case 1:
                return $this->getName();
                break;
            case 2:
                return $this->getDescription();
                break;
            case 3:
                return $this->getAdddate();
                break;
            case 4:
                return $this->getImage();
                break;
            case 5:
                return $this->getPrice();
                break;
            case 6:
                return $this->getSize();
                break;
            case 7:
                return $this->getWeight();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME,
     *                    TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                    Defaults to TableMap::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = TableMap::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {

        if (isset($alreadyDumpedObjects['Item'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Item'][$this->hashCode()] = true;
        $keys = ItemTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getName(),
            $keys[2] => $this->getDescription(),
            $keys[3] => $this->getAdddate(),
            $keys[4] => $this->getImage(),
            $keys[5] => $this->getPrice(),
            $keys[6] => $this->getSize(),
            $keys[7] => $this->getWeight(),
        );
        if ($result[$keys[3]] instanceof \DateTimeInterface) {
            $result[$keys[3]] = $result[$keys[3]]->format('c');
        }

        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collItemInPackages) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'itemInPackages';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'itemInPackages';
                        break;
                    default:
                        $key = 'ItemInPackages';
                }

                $result[$key] = $this->collItemInPackages->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collItemInCarts) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'itemInCarts';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'itemInCarts';
                        break;
                    default:
                        $key = 'ItemInCarts';
                }

                $result[$key] = $this->collItemInCarts->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collItemTypes) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'itemTypes';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'itemTypes';
                        break;
                    default:
                        $key = 'ItemTypes';
                }

                $result[$key] = $this->collItemTypes->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param  string $name
     * @param  mixed  $value field value
     * @param  string $type The type of fieldname the $name is of:
     *                one of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                Defaults to TableMap::TYPE_PHPNAME.
     * @return $this|\Item
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = ItemTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\Item
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setId($value);
                break;
            case 1:
                $this->setName($value);
                break;
            case 2:
                $this->setDescription($value);
                break;
            case 3:
                $this->setAdddate($value);
                break;
            case 4:
                $this->setImage($value);
                break;
            case 5:
                $this->setPrice($value);
                break;
            case 6:
                $this->setSize($value);
                break;
            case 7:
                $this->setWeight($value);
                break;
        } // switch()

        return $this;
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
     * of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME,
     * TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     * The default key type is the column's TableMap::TYPE_PHPNAME.
     *
     * @param      array  $arr     An array to populate the object from.
     * @param      string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = TableMap::TYPE_PHPNAME)
    {
        $keys = ItemTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setId($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setName($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setDescription($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setAdddate($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setImage($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setPrice($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setSize($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setWeight($arr[$keys[7]]);
        }
    }

     /**
     * Populate the current object from a string, using a given parser format
     * <code>
     * $book = new Book();
     * $book->importFrom('JSON', '{"Id":9012,"Title":"Don Juan","ISBN":"0140422161","Price":12.99,"PublisherId":1234,"AuthorId":5678}');
     * </code>
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME,
     * TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     * The default key type is the column's TableMap::TYPE_PHPNAME.
     *
     * @param mixed $parser A AbstractParser instance,
     *                       or a format name ('XML', 'YAML', 'JSON', 'CSV')
     * @param string $data The source data to import from
     * @param string $keyType The type of keys the array uses.
     *
     * @return $this|\Item The current object, for fluid interface
     */
    public function importFrom($parser, $data, $keyType = TableMap::TYPE_PHPNAME)
    {
        if (!$parser instanceof AbstractParser) {
            $parser = AbstractParser::getParser($parser);
        }

        $this->fromArray($parser->toArray($data), $keyType);

        return $this;
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ItemTableMap::DATABASE_NAME);

        if ($this->isColumnModified(ItemTableMap::COL_ID)) {
            $criteria->add(ItemTableMap::COL_ID, $this->id);
        }
        if ($this->isColumnModified(ItemTableMap::COL_NAME)) {
            $criteria->add(ItemTableMap::COL_NAME, $this->name);
        }
        if ($this->isColumnModified(ItemTableMap::COL_DESCRIPTION)) {
            $criteria->add(ItemTableMap::COL_DESCRIPTION, $this->description);
        }
        if ($this->isColumnModified(ItemTableMap::COL_ADDDATE)) {
            $criteria->add(ItemTableMap::COL_ADDDATE, $this->adddate);
        }
        if ($this->isColumnModified(ItemTableMap::COL_IMAGE)) {
            $criteria->add(ItemTableMap::COL_IMAGE, $this->image);
        }
        if ($this->isColumnModified(ItemTableMap::COL_PRICE)) {
            $criteria->add(ItemTableMap::COL_PRICE, $this->price);
        }
        if ($this->isColumnModified(ItemTableMap::COL_SIZE)) {
            $criteria->add(ItemTableMap::COL_SIZE, $this->size);
        }
        if ($this->isColumnModified(ItemTableMap::COL_WEIGHT)) {
            $criteria->add(ItemTableMap::COL_WEIGHT, $this->weight);
        }

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @throws LogicException if no primary key is defined
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = ChildItemQuery::create();
        $criteria->add(ItemTableMap::COL_ID, $this->id);

        return $criteria;
    }

    /**
     * If the primary key is not null, return the hashcode of the
     * primary key. Otherwise, return the hash code of the object.
     *
     * @return int Hashcode
     */
    public function hashCode()
    {
        $validPk = null !== $this->getId();

        $validPrimaryKeyFKs = 0;
        $primaryKeyFKs = [];

        if ($validPk) {
            return crc32(json_encode($this->getPrimaryKey(), JSON_UNESCAPED_UNICODE));
        } elseif ($validPrimaryKeyFKs) {
            return crc32(json_encode($primaryKeyFKs, JSON_UNESCAPED_UNICODE));
        }

        return spl_object_hash($this);
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getId();
    }

    /**
     * Generic method to set the primary key (id column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
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
     * @param      object $copyObj An object of \Item (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setName($this->getName());
        $copyObj->setDescription($this->getDescription());
        $copyObj->setAdddate($this->getAdddate());
        $copyObj->setImage($this->getImage());
        $copyObj->setPrice($this->getPrice());
        $copyObj->setSize($this->getSize());
        $copyObj->setWeight($this->getWeight());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getItemInPackages() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addItemInPackage($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getItemInCarts() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addItemInCart($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getItemTypes() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addItemType($relObj->copy($deepCopy));
                }
            }

        } // if ($deepCopy)

        if ($makeNew) {
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
     * @param  boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return \Item Clone of current object.
     * @throws PropelException
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
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param      string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('ItemInPackage' == $relationName) {
            $this->initItemInPackages();
            return;
        }
        if ('ItemInCart' == $relationName) {
            $this->initItemInCarts();
            return;
        }
        if ('ItemType' == $relationName) {
            $this->initItemTypes();
            return;
        }
    }

    /**
     * Clears out the collItemInPackages collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addItemInPackages()
     */
    public function clearItemInPackages()
    {
        $this->collItemInPackages = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collItemInPackages collection loaded partially.
     */
    public function resetPartialItemInPackages($v = true)
    {
        $this->collItemInPackagesPartial = $v;
    }

    /**
     * Initializes the collItemInPackages collection.
     *
     * By default this just sets the collItemInPackages collection to an empty array (like clearcollItemInPackages());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initItemInPackages($overrideExisting = true)
    {
        if (null !== $this->collItemInPackages && !$overrideExisting) {
            return;
        }

        $collectionClassName = ItemInPackageTableMap::getTableMap()->getCollectionClassName();

        $this->collItemInPackages = new $collectionClassName;
        $this->collItemInPackages->setModel('\ItemInPackage');
    }

    /**
     * Gets an array of ChildItemInPackage objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildItem is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildItemInPackage[] List of ChildItemInPackage objects
     * @throws PropelException
     */
    public function getItemInPackages(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collItemInPackagesPartial && !$this->isNew();
        if (null === $this->collItemInPackages || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collItemInPackages) {
                // return empty collection
                $this->initItemInPackages();
            } else {
                $collItemInPackages = ChildItemInPackageQuery::create(null, $criteria)
                    ->filterByItem($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collItemInPackagesPartial && count($collItemInPackages)) {
                        $this->initItemInPackages(false);

                        foreach ($collItemInPackages as $obj) {
                            if (false == $this->collItemInPackages->contains($obj)) {
                                $this->collItemInPackages->append($obj);
                            }
                        }

                        $this->collItemInPackagesPartial = true;
                    }

                    return $collItemInPackages;
                }

                if ($partial && $this->collItemInPackages) {
                    foreach ($this->collItemInPackages as $obj) {
                        if ($obj->isNew()) {
                            $collItemInPackages[] = $obj;
                        }
                    }
                }

                $this->collItemInPackages = $collItemInPackages;
                $this->collItemInPackagesPartial = false;
            }
        }

        return $this->collItemInPackages;
    }

    /**
     * Sets a collection of ChildItemInPackage objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $itemInPackages A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildItem The current object (for fluent API support)
     */
    public function setItemInPackages(Collection $itemInPackages, ConnectionInterface $con = null)
    {
        /** @var ChildItemInPackage[] $itemInPackagesToDelete */
        $itemInPackagesToDelete = $this->getItemInPackages(new Criteria(), $con)->diff($itemInPackages);


        $this->itemInPackagesScheduledForDeletion = $itemInPackagesToDelete;

        foreach ($itemInPackagesToDelete as $itemInPackageRemoved) {
            $itemInPackageRemoved->setItem(null);
        }

        $this->collItemInPackages = null;
        foreach ($itemInPackages as $itemInPackage) {
            $this->addItemInPackage($itemInPackage);
        }

        $this->collItemInPackages = $itemInPackages;
        $this->collItemInPackagesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ItemInPackage objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related ItemInPackage objects.
     * @throws PropelException
     */
    public function countItemInPackages(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collItemInPackagesPartial && !$this->isNew();
        if (null === $this->collItemInPackages || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collItemInPackages) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getItemInPackages());
            }

            $query = ChildItemInPackageQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByItem($this)
                ->count($con);
        }

        return count($this->collItemInPackages);
    }

    /**
     * Method called to associate a ChildItemInPackage object to this object
     * through the ChildItemInPackage foreign key attribute.
     *
     * @param  ChildItemInPackage $l ChildItemInPackage
     * @return $this|\Item The current object (for fluent API support)
     */
    public function addItemInPackage(ChildItemInPackage $l)
    {
        if ($this->collItemInPackages === null) {
            $this->initItemInPackages();
            $this->collItemInPackagesPartial = true;
        }

        if (!$this->collItemInPackages->contains($l)) {
            $this->doAddItemInPackage($l);

            if ($this->itemInPackagesScheduledForDeletion and $this->itemInPackagesScheduledForDeletion->contains($l)) {
                $this->itemInPackagesScheduledForDeletion->remove($this->itemInPackagesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildItemInPackage $itemInPackage The ChildItemInPackage object to add.
     */
    protected function doAddItemInPackage(ChildItemInPackage $itemInPackage)
    {
        $this->collItemInPackages[]= $itemInPackage;
        $itemInPackage->setItem($this);
    }

    /**
     * @param  ChildItemInPackage $itemInPackage The ChildItemInPackage object to remove.
     * @return $this|ChildItem The current object (for fluent API support)
     */
    public function removeItemInPackage(ChildItemInPackage $itemInPackage)
    {
        if ($this->getItemInPackages()->contains($itemInPackage)) {
            $pos = $this->collItemInPackages->search($itemInPackage);
            $this->collItemInPackages->remove($pos);
            if (null === $this->itemInPackagesScheduledForDeletion) {
                $this->itemInPackagesScheduledForDeletion = clone $this->collItemInPackages;
                $this->itemInPackagesScheduledForDeletion->clear();
            }
            $this->itemInPackagesScheduledForDeletion[]= clone $itemInPackage;
            $itemInPackage->setItem(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Item is new, it will return
     * an empty collection; or if this Item has previously
     * been saved, it will retrieve related ItemInPackages from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Item.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildItemInPackage[] List of ChildItemInPackage objects
     */
    public function getItemInPackagesJoinPackage(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildItemInPackageQuery::create(null, $criteria);
        $query->joinWith('Package', $joinBehavior);

        return $this->getItemInPackages($query, $con);
    }

    /**
     * Clears out the collItemInCarts collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addItemInCarts()
     */
    public function clearItemInCarts()
    {
        $this->collItemInCarts = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collItemInCarts collection loaded partially.
     */
    public function resetPartialItemInCarts($v = true)
    {
        $this->collItemInCartsPartial = $v;
    }

    /**
     * Initializes the collItemInCarts collection.
     *
     * By default this just sets the collItemInCarts collection to an empty array (like clearcollItemInCarts());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initItemInCarts($overrideExisting = true)
    {
        if (null !== $this->collItemInCarts && !$overrideExisting) {
            return;
        }

        $collectionClassName = ItemInCartTableMap::getTableMap()->getCollectionClassName();

        $this->collItemInCarts = new $collectionClassName;
        $this->collItemInCarts->setModel('\ItemInCart');
    }

    /**
     * Gets an array of ChildItemInCart objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildItem is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildItemInCart[] List of ChildItemInCart objects
     * @throws PropelException
     */
    public function getItemInCarts(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collItemInCartsPartial && !$this->isNew();
        if (null === $this->collItemInCarts || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collItemInCarts) {
                // return empty collection
                $this->initItemInCarts();
            } else {
                $collItemInCarts = ChildItemInCartQuery::create(null, $criteria)
                    ->filterByItem($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collItemInCartsPartial && count($collItemInCarts)) {
                        $this->initItemInCarts(false);

                        foreach ($collItemInCarts as $obj) {
                            if (false == $this->collItemInCarts->contains($obj)) {
                                $this->collItemInCarts->append($obj);
                            }
                        }

                        $this->collItemInCartsPartial = true;
                    }

                    return $collItemInCarts;
                }

                if ($partial && $this->collItemInCarts) {
                    foreach ($this->collItemInCarts as $obj) {
                        if ($obj->isNew()) {
                            $collItemInCarts[] = $obj;
                        }
                    }
                }

                $this->collItemInCarts = $collItemInCarts;
                $this->collItemInCartsPartial = false;
            }
        }

        return $this->collItemInCarts;
    }

    /**
     * Sets a collection of ChildItemInCart objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $itemInCarts A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildItem The current object (for fluent API support)
     */
    public function setItemInCarts(Collection $itemInCarts, ConnectionInterface $con = null)
    {
        /** @var ChildItemInCart[] $itemInCartsToDelete */
        $itemInCartsToDelete = $this->getItemInCarts(new Criteria(), $con)->diff($itemInCarts);


        $this->itemInCartsScheduledForDeletion = $itemInCartsToDelete;

        foreach ($itemInCartsToDelete as $itemInCartRemoved) {
            $itemInCartRemoved->setItem(null);
        }

        $this->collItemInCarts = null;
        foreach ($itemInCarts as $itemInCart) {
            $this->addItemInCart($itemInCart);
        }

        $this->collItemInCarts = $itemInCarts;
        $this->collItemInCartsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ItemInCart objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related ItemInCart objects.
     * @throws PropelException
     */
    public function countItemInCarts(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collItemInCartsPartial && !$this->isNew();
        if (null === $this->collItemInCarts || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collItemInCarts) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getItemInCarts());
            }

            $query = ChildItemInCartQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByItem($this)
                ->count($con);
        }

        return count($this->collItemInCarts);
    }

    /**
     * Method called to associate a ChildItemInCart object to this object
     * through the ChildItemInCart foreign key attribute.
     *
     * @param  ChildItemInCart $l ChildItemInCart
     * @return $this|\Item The current object (for fluent API support)
     */
    public function addItemInCart(ChildItemInCart $l)
    {
        if ($this->collItemInCarts === null) {
            $this->initItemInCarts();
            $this->collItemInCartsPartial = true;
        }

        if (!$this->collItemInCarts->contains($l)) {
            $this->doAddItemInCart($l);

            if ($this->itemInCartsScheduledForDeletion and $this->itemInCartsScheduledForDeletion->contains($l)) {
                $this->itemInCartsScheduledForDeletion->remove($this->itemInCartsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildItemInCart $itemInCart The ChildItemInCart object to add.
     */
    protected function doAddItemInCart(ChildItemInCart $itemInCart)
    {
        $this->collItemInCarts[]= $itemInCart;
        $itemInCart->setItem($this);
    }

    /**
     * @param  ChildItemInCart $itemInCart The ChildItemInCart object to remove.
     * @return $this|ChildItem The current object (for fluent API support)
     */
    public function removeItemInCart(ChildItemInCart $itemInCart)
    {
        if ($this->getItemInCarts()->contains($itemInCart)) {
            $pos = $this->collItemInCarts->search($itemInCart);
            $this->collItemInCarts->remove($pos);
            if (null === $this->itemInCartsScheduledForDeletion) {
                $this->itemInCartsScheduledForDeletion = clone $this->collItemInCarts;
                $this->itemInCartsScheduledForDeletion->clear();
            }
            $this->itemInCartsScheduledForDeletion[]= clone $itemInCart;
            $itemInCart->setItem(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Item is new, it will return
     * an empty collection; or if this Item has previously
     * been saved, it will retrieve related ItemInCarts from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Item.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildItemInCart[] List of ChildItemInCart objects
     */
    public function getItemInCartsJoinCart(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildItemInCartQuery::create(null, $criteria);
        $query->joinWith('Cart', $joinBehavior);

        return $this->getItemInCarts($query, $con);
    }

    /**
     * Clears out the collItemTypes collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addItemTypes()
     */
    public function clearItemTypes()
    {
        $this->collItemTypes = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collItemTypes collection loaded partially.
     */
    public function resetPartialItemTypes($v = true)
    {
        $this->collItemTypesPartial = $v;
    }

    /**
     * Initializes the collItemTypes collection.
     *
     * By default this just sets the collItemTypes collection to an empty array (like clearcollItemTypes());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initItemTypes($overrideExisting = true)
    {
        if (null !== $this->collItemTypes && !$overrideExisting) {
            return;
        }

        $collectionClassName = ItemTypeTableMap::getTableMap()->getCollectionClassName();

        $this->collItemTypes = new $collectionClassName;
        $this->collItemTypes->setModel('\ItemType');
    }

    /**
     * Gets an array of ChildItemType objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildItem is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildItemType[] List of ChildItemType objects
     * @throws PropelException
     */
    public function getItemTypes(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collItemTypesPartial && !$this->isNew();
        if (null === $this->collItemTypes || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collItemTypes) {
                // return empty collection
                $this->initItemTypes();
            } else {
                $collItemTypes = ChildItemTypeQuery::create(null, $criteria)
                    ->filterByItem($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collItemTypesPartial && count($collItemTypes)) {
                        $this->initItemTypes(false);

                        foreach ($collItemTypes as $obj) {
                            if (false == $this->collItemTypes->contains($obj)) {
                                $this->collItemTypes->append($obj);
                            }
                        }

                        $this->collItemTypesPartial = true;
                    }

                    return $collItemTypes;
                }

                if ($partial && $this->collItemTypes) {
                    foreach ($this->collItemTypes as $obj) {
                        if ($obj->isNew()) {
                            $collItemTypes[] = $obj;
                        }
                    }
                }

                $this->collItemTypes = $collItemTypes;
                $this->collItemTypesPartial = false;
            }
        }

        return $this->collItemTypes;
    }

    /**
     * Sets a collection of ChildItemType objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $itemTypes A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildItem The current object (for fluent API support)
     */
    public function setItemTypes(Collection $itemTypes, ConnectionInterface $con = null)
    {
        /** @var ChildItemType[] $itemTypesToDelete */
        $itemTypesToDelete = $this->getItemTypes(new Criteria(), $con)->diff($itemTypes);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->itemTypesScheduledForDeletion = clone $itemTypesToDelete;

        foreach ($itemTypesToDelete as $itemTypeRemoved) {
            $itemTypeRemoved->setItem(null);
        }

        $this->collItemTypes = null;
        foreach ($itemTypes as $itemType) {
            $this->addItemType($itemType);
        }

        $this->collItemTypes = $itemTypes;
        $this->collItemTypesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ItemType objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related ItemType objects.
     * @throws PropelException
     */
    public function countItemTypes(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collItemTypesPartial && !$this->isNew();
        if (null === $this->collItemTypes || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collItemTypes) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getItemTypes());
            }

            $query = ChildItemTypeQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByItem($this)
                ->count($con);
        }

        return count($this->collItemTypes);
    }

    /**
     * Method called to associate a ChildItemType object to this object
     * through the ChildItemType foreign key attribute.
     *
     * @param  ChildItemType $l ChildItemType
     * @return $this|\Item The current object (for fluent API support)
     */
    public function addItemType(ChildItemType $l)
    {
        if ($this->collItemTypes === null) {
            $this->initItemTypes();
            $this->collItemTypesPartial = true;
        }

        if (!$this->collItemTypes->contains($l)) {
            $this->doAddItemType($l);

            if ($this->itemTypesScheduledForDeletion and $this->itemTypesScheduledForDeletion->contains($l)) {
                $this->itemTypesScheduledForDeletion->remove($this->itemTypesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildItemType $itemType The ChildItemType object to add.
     */
    protected function doAddItemType(ChildItemType $itemType)
    {
        $this->collItemTypes[]= $itemType;
        $itemType->setItem($this);
    }

    /**
     * @param  ChildItemType $itemType The ChildItemType object to remove.
     * @return $this|ChildItem The current object (for fluent API support)
     */
    public function removeItemType(ChildItemType $itemType)
    {
        if ($this->getItemTypes()->contains($itemType)) {
            $pos = $this->collItemTypes->search($itemType);
            $this->collItemTypes->remove($pos);
            if (null === $this->itemTypesScheduledForDeletion) {
                $this->itemTypesScheduledForDeletion = clone $this->collItemTypes;
                $this->itemTypesScheduledForDeletion->clear();
            }
            $this->itemTypesScheduledForDeletion[]= clone $itemType;
            $itemType->setItem(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Item is new, it will return
     * an empty collection; or if this Item has previously
     * been saved, it will retrieve related ItemTypes from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Item.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildItemType[] List of ChildItemType objects
     */
    public function getItemTypesJoinType(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildItemTypeQuery::create(null, $criteria);
        $query->joinWith('Type', $joinBehavior);

        return $this->getItemTypes($query, $con);
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        $this->id = null;
        $this->name = null;
        $this->description = null;
        $this->adddate = null;
        $this->image = null;
        $this->price = null;
        $this->size = null;
        $this->weight = null;
        $this->alreadyInSave = false;
        $this->clearAllReferences();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references and back-references to other model objects or collections of model objects.
     *
     * This method is used to reset all php object references (not the actual reference in the database).
     * Necessary for object serialisation.
     *
     * @param      boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep) {
            if ($this->collItemInPackages) {
                foreach ($this->collItemInPackages as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collItemInCarts) {
                foreach ($this->collItemInCarts as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collItemTypes) {
                foreach ($this->collItemTypes as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collItemInPackages = null;
        $this->collItemInCarts = null;
        $this->collItemTypes = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ItemTableMap::DEFAULT_STRING_FORMAT);
    }

    /**
     * Code to be run before persisting the object
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preSave(ConnectionInterface $con = null)
    {
        if (is_callable('parent::preSave')) {
            return parent::preSave($con);
        }
        return true;
    }

    /**
     * Code to be run after persisting the object
     * @param ConnectionInterface $con
     */
    public function postSave(ConnectionInterface $con = null)
    {
        if (is_callable('parent::postSave')) {
            parent::postSave($con);
        }
    }

    /**
     * Code to be run before inserting to database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preInsert(ConnectionInterface $con = null)
    {
        if (is_callable('parent::preInsert')) {
            return parent::preInsert($con);
        }
        return true;
    }

    /**
     * Code to be run after inserting to database
     * @param ConnectionInterface $con
     */
    public function postInsert(ConnectionInterface $con = null)
    {
        if (is_callable('parent::postInsert')) {
            parent::postInsert($con);
        }
    }

    /**
     * Code to be run before updating the object in database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preUpdate(ConnectionInterface $con = null)
    {
        if (is_callable('parent::preUpdate')) {
            return parent::preUpdate($con);
        }
        return true;
    }

    /**
     * Code to be run after updating the object in database
     * @param ConnectionInterface $con
     */
    public function postUpdate(ConnectionInterface $con = null)
    {
        if (is_callable('parent::postUpdate')) {
            parent::postUpdate($con);
        }
    }

    /**
     * Code to be run before deleting the object in database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preDelete(ConnectionInterface $con = null)
    {
        if (is_callable('parent::preDelete')) {
            return parent::preDelete($con);
        }
        return true;
    }

    /**
     * Code to be run after deleting the object in database
     * @param ConnectionInterface $con
     */
    public function postDelete(ConnectionInterface $con = null)
    {
        if (is_callable('parent::postDelete')) {
            parent::postDelete($con);
        }
    }


    /**
     * Derived method to catches calls to undefined methods.
     *
     * Provides magic import/export method support (fromXML()/toXML(), fromYAML()/toYAML(), etc.).
     * Allows to define default __call() behavior if you overwrite __call()
     *
     * @param string $name
     * @param mixed  $params
     *
     * @return array|string
     */
    public function __call($name, $params)
    {
        if (0 === strpos($name, 'get')) {
            $virtualColumn = substr($name, 3);
            if ($this->hasVirtualColumn($virtualColumn)) {
                return $this->getVirtualColumn($virtualColumn);
            }

            $virtualColumn = lcfirst($virtualColumn);
            if ($this->hasVirtualColumn($virtualColumn)) {
                return $this->getVirtualColumn($virtualColumn);
            }
        }

        if (0 === strpos($name, 'from')) {
            $format = substr($name, 4);

            return $this->importFrom($format, reset($params));
        }

        if (0 === strpos($name, 'to')) {
            $format = substr($name, 2);
            $includeLazyLoadColumns = isset($params[0]) ? $params[0] : true;

            return $this->exportTo($format, $includeLazyLoadColumns);
        }

        throw new BadMethodCallException(sprintf('Call to undefined method: %s.', $name));
    }

}
