<?php
/**
 * OrderLineItemFlat
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Shopware Sales-Channel API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.18
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * OrderLineItemFlat Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderLineItemFlat implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'order_line_item_flat';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'version_id' => 'string',
'order_id' => 'string',
'order_version_id' => 'string',
'product_id' => 'string',
'product_version_id' => 'string',
'parent_id' => 'string',
'parent_version_id' => 'string',
'cover_id' => 'string',
'identifier' => 'string',
'referenced_id' => 'string',
'quantity' => 'int',
'label' => 'string',
'payload' => 'object',
'good' => 'bool',
'removable' => 'bool',
'stackable' => 'bool',
'position' => 'int',
'price' => '\Swagger\Client\Model\OrderFlatShippingCosts',
'price_definition' => 'object',
'unit_price' => 'float',
'total_price' => 'float',
'description' => 'string',
'type' => 'string',
'custom_fields' => 'object',
'created_at' => '\DateTime',
'updated_at' => '\DateTime',
'cover' => '\Swagger\Client\Model\MediaFlat',
'order' => '\Swagger\Client\Model\OrderFlat',
'product' => '\Swagger\Client\Model\ProductFlat',
'order_delivery_positions' => '\Swagger\Client\Model\OrderDeliveryPositionFlat'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
'version_id' => 'uuid',
'order_id' => 'uuid',
'order_version_id' => 'uuid',
'product_id' => 'uuid',
'product_version_id' => 'uuid',
'parent_id' => 'uuid',
'parent_version_id' => 'uuid',
'cover_id' => 'uuid',
'identifier' => null,
'referenced_id' => null,
'quantity' => 'int64',
'label' => null,
'payload' => null,
'good' => null,
'removable' => null,
'stackable' => null,
'position' => 'int64',
'price' => null,
'price_definition' => null,
'unit_price' => 'float',
'total_price' => 'float',
'description' => null,
'type' => null,
'custom_fields' => null,
'created_at' => 'date-time',
'updated_at' => 'date-time',
'cover' => null,
'order' => null,
'product' => null,
'order_delivery_positions' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
'version_id' => 'versionId',
'order_id' => 'orderId',
'order_version_id' => 'orderVersionId',
'product_id' => 'productId',
'product_version_id' => 'productVersionId',
'parent_id' => 'parentId',
'parent_version_id' => 'parentVersionId',
'cover_id' => 'coverId',
'identifier' => 'identifier',
'referenced_id' => 'referencedId',
'quantity' => 'quantity',
'label' => 'label',
'payload' => 'payload',
'good' => 'good',
'removable' => 'removable',
'stackable' => 'stackable',
'position' => 'position',
'price' => 'price',
'price_definition' => 'priceDefinition',
'unit_price' => 'unitPrice',
'total_price' => 'totalPrice',
'description' => 'description',
'type' => 'type',
'custom_fields' => 'customFields',
'created_at' => 'createdAt',
'updated_at' => 'updatedAt',
'cover' => 'cover',
'order' => 'order',
'product' => 'product',
'order_delivery_positions' => 'orderDeliveryPositions'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'version_id' => 'setVersionId',
'order_id' => 'setOrderId',
'order_version_id' => 'setOrderVersionId',
'product_id' => 'setProductId',
'product_version_id' => 'setProductVersionId',
'parent_id' => 'setParentId',
'parent_version_id' => 'setParentVersionId',
'cover_id' => 'setCoverId',
'identifier' => 'setIdentifier',
'referenced_id' => 'setReferencedId',
'quantity' => 'setQuantity',
'label' => 'setLabel',
'payload' => 'setPayload',
'good' => 'setGood',
'removable' => 'setRemovable',
'stackable' => 'setStackable',
'position' => 'setPosition',
'price' => 'setPrice',
'price_definition' => 'setPriceDefinition',
'unit_price' => 'setUnitPrice',
'total_price' => 'setTotalPrice',
'description' => 'setDescription',
'type' => 'setType',
'custom_fields' => 'setCustomFields',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt',
'cover' => 'setCover',
'order' => 'setOrder',
'product' => 'setProduct',
'order_delivery_positions' => 'setOrderDeliveryPositions'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'version_id' => 'getVersionId',
'order_id' => 'getOrderId',
'order_version_id' => 'getOrderVersionId',
'product_id' => 'getProductId',
'product_version_id' => 'getProductVersionId',
'parent_id' => 'getParentId',
'parent_version_id' => 'getParentVersionId',
'cover_id' => 'getCoverId',
'identifier' => 'getIdentifier',
'referenced_id' => 'getReferencedId',
'quantity' => 'getQuantity',
'label' => 'getLabel',
'payload' => 'getPayload',
'good' => 'getGood',
'removable' => 'getRemovable',
'stackable' => 'getStackable',
'position' => 'getPosition',
'price' => 'getPrice',
'price_definition' => 'getPriceDefinition',
'unit_price' => 'getUnitPrice',
'total_price' => 'getTotalPrice',
'description' => 'getDescription',
'type' => 'getType',
'custom_fields' => 'getCustomFields',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt',
'cover' => 'getCover',
'order' => 'getOrder',
'product' => 'getProduct',
'order_delivery_positions' => 'getOrderDeliveryPositions'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['version_id'] = isset($data['version_id']) ? $data['version_id'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['order_version_id'] = isset($data['order_version_id']) ? $data['order_version_id'] : null;
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        $this->container['product_version_id'] = isset($data['product_version_id']) ? $data['product_version_id'] : null;
        $this->container['parent_id'] = isset($data['parent_id']) ? $data['parent_id'] : null;
        $this->container['parent_version_id'] = isset($data['parent_version_id']) ? $data['parent_version_id'] : null;
        $this->container['cover_id'] = isset($data['cover_id']) ? $data['cover_id'] : null;
        $this->container['identifier'] = isset($data['identifier']) ? $data['identifier'] : null;
        $this->container['referenced_id'] = isset($data['referenced_id']) ? $data['referenced_id'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['payload'] = isset($data['payload']) ? $data['payload'] : null;
        $this->container['good'] = isset($data['good']) ? $data['good'] : null;
        $this->container['removable'] = isset($data['removable']) ? $data['removable'] : null;
        $this->container['stackable'] = isset($data['stackable']) ? $data['stackable'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['price_definition'] = isset($data['price_definition']) ? $data['price_definition'] : null;
        $this->container['unit_price'] = isset($data['unit_price']) ? $data['unit_price'] : null;
        $this->container['total_price'] = isset($data['total_price']) ? $data['total_price'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['custom_fields'] = isset($data['custom_fields']) ? $data['custom_fields'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['cover'] = isset($data['cover']) ? $data['cover'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['product'] = isset($data['product']) ? $data['product'] : null;
        $this->container['order_delivery_positions'] = isset($data['order_delivery_positions']) ? $data['order_delivery_positions'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['order_id'] === null) {
            $invalidProperties[] = "'order_id' can't be null";
        }
        if ($this->container['identifier'] === null) {
            $invalidProperties[] = "'identifier' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['label'] === null) {
            $invalidProperties[] = "'label' can't be null";
        }
        if ($this->container['position'] === null) {
            $invalidProperties[] = "'position' can't be null";
        }
        if ($this->container['price'] === null) {
            $invalidProperties[] = "'price' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets version_id
     *
     * @return string
     */
    public function getVersionId()
    {
        return $this->container['version_id'];
    }

    /**
     * Sets version_id
     *
     * @param string $version_id version_id
     *
     * @return $this
     */
    public function setVersionId($version_id)
    {
        $this->container['version_id'] = $version_id;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string $order_id order_id
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets order_version_id
     *
     * @return string
     */
    public function getOrderVersionId()
    {
        return $this->container['order_version_id'];
    }

    /**
     * Sets order_version_id
     *
     * @param string $order_version_id order_version_id
     *
     * @return $this
     */
    public function setOrderVersionId($order_version_id)
    {
        $this->container['order_version_id'] = $order_version_id;

        return $this;
    }

    /**
     * Gets product_id
     *
     * @return string
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param string $product_id product_id
     *
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets product_version_id
     *
     * @return string
     */
    public function getProductVersionId()
    {
        return $this->container['product_version_id'];
    }

    /**
     * Sets product_version_id
     *
     * @param string $product_version_id product_version_id
     *
     * @return $this
     */
    public function setProductVersionId($product_version_id)
    {
        $this->container['product_version_id'] = $product_version_id;

        return $this;
    }

    /**
     * Gets parent_id
     *
     * @return string
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     *
     * @param string $parent_id parent_id
     *
     * @return $this
     */
    public function setParentId($parent_id)
    {
        $this->container['parent_id'] = $parent_id;

        return $this;
    }

    /**
     * Gets parent_version_id
     *
     * @return string
     */
    public function getParentVersionId()
    {
        return $this->container['parent_version_id'];
    }

    /**
     * Sets parent_version_id
     *
     * @param string $parent_version_id parent_version_id
     *
     * @return $this
     */
    public function setParentVersionId($parent_version_id)
    {
        $this->container['parent_version_id'] = $parent_version_id;

        return $this;
    }

    /**
     * Gets cover_id
     *
     * @return string
     */
    public function getCoverId()
    {
        return $this->container['cover_id'];
    }

    /**
     * Sets cover_id
     *
     * @param string $cover_id cover_id
     *
     * @return $this
     */
    public function setCoverId($cover_id)
    {
        $this->container['cover_id'] = $cover_id;

        return $this;
    }

    /**
     * Gets identifier
     *
     * @return string
     */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
     * Sets identifier
     *
     * @param string $identifier identifier
     *
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->container['identifier'] = $identifier;

        return $this;
    }

    /**
     * Gets referenced_id
     *
     * @return string
     */
    public function getReferencedId()
    {
        return $this->container['referenced_id'];
    }

    /**
     * Sets referenced_id
     *
     * @param string $referenced_id referenced_id
     *
     * @return $this
     */
    public function setReferencedId($referenced_id)
    {
        $this->container['referenced_id'] = $referenced_id;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label label
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets payload
     *
     * @return object
     */
    public function getPayload()
    {
        return $this->container['payload'];
    }

    /**
     * Sets payload
     *
     * @param object $payload payload
     *
     * @return $this
     */
    public function setPayload($payload)
    {
        $this->container['payload'] = $payload;

        return $this;
    }

    /**
     * Gets good
     *
     * @return bool
     */
    public function getGood()
    {
        return $this->container['good'];
    }

    /**
     * Sets good
     *
     * @param bool $good good
     *
     * @return $this
     */
    public function setGood($good)
    {
        $this->container['good'] = $good;

        return $this;
    }

    /**
     * Gets removable
     *
     * @return bool
     */
    public function getRemovable()
    {
        return $this->container['removable'];
    }

    /**
     * Sets removable
     *
     * @param bool $removable removable
     *
     * @return $this
     */
    public function setRemovable($removable)
    {
        $this->container['removable'] = $removable;

        return $this;
    }

    /**
     * Gets stackable
     *
     * @return bool
     */
    public function getStackable()
    {
        return $this->container['stackable'];
    }

    /**
     * Sets stackable
     *
     * @param bool $stackable stackable
     *
     * @return $this
     */
    public function setStackable($stackable)
    {
        $this->container['stackable'] = $stackable;

        return $this;
    }

    /**
     * Gets position
     *
     * @return int
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param int $position position
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets price
     *
     * @return \Swagger\Client\Model\OrderFlatShippingCosts
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param \Swagger\Client\Model\OrderFlatShippingCosts $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets price_definition
     *
     * @return object
     */
    public function getPriceDefinition()
    {
        return $this->container['price_definition'];
    }

    /**
     * Sets price_definition
     *
     * @param object $price_definition price_definition
     *
     * @return $this
     */
    public function setPriceDefinition($price_definition)
    {
        $this->container['price_definition'] = $price_definition;

        return $this;
    }

    /**
     * Gets unit_price
     *
     * @return float
     */
    public function getUnitPrice()
    {
        return $this->container['unit_price'];
    }

    /**
     * Sets unit_price
     *
     * @param float $unit_price unit_price
     *
     * @return $this
     */
    public function setUnitPrice($unit_price)
    {
        $this->container['unit_price'] = $unit_price;

        return $this;
    }

    /**
     * Gets total_price
     *
     * @return float
     */
    public function getTotalPrice()
    {
        return $this->container['total_price'];
    }

    /**
     * Sets total_price
     *
     * @param float $total_price total_price
     *
     * @return $this
     */
    public function setTotalPrice($total_price)
    {
        $this->container['total_price'] = $total_price;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets custom_fields
     *
     * @return object
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     *
     * @param object $custom_fields custom_fields
     *
     * @return $this
     */
    public function setCustomFields($custom_fields)
    {
        $this->container['custom_fields'] = $custom_fields;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at created_at
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at updated_at
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets cover
     *
     * @return \Swagger\Client\Model\MediaFlat
     */
    public function getCover()
    {
        return $this->container['cover'];
    }

    /**
     * Sets cover
     *
     * @param \Swagger\Client\Model\MediaFlat $cover cover
     *
     * @return $this
     */
    public function setCover($cover)
    {
        $this->container['cover'] = $cover;

        return $this;
    }

    /**
     * Gets order
     *
     * @return \Swagger\Client\Model\OrderFlat
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param \Swagger\Client\Model\OrderFlat $order order
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets product
     *
     * @return \Swagger\Client\Model\ProductFlat
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param \Swagger\Client\Model\ProductFlat $product product
     *
     * @return $this
     */
    public function setProduct($product)
    {
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets order_delivery_positions
     *
     * @return \Swagger\Client\Model\OrderDeliveryPositionFlat
     */
    public function getOrderDeliveryPositions()
    {
        return $this->container['order_delivery_positions'];
    }

    /**
     * Sets order_delivery_positions
     *
     * @param \Swagger\Client\Model\OrderDeliveryPositionFlat $order_delivery_positions order_delivery_positions
     *
     * @return $this
     */
    public function setOrderDeliveryPositions($order_delivery_positions)
    {
        $this->container['order_delivery_positions'] = $order_delivery_positions;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
