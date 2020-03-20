<?php
/**
 * MediaFolderConfigurationFlat
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
 * MediaFolderConfigurationFlat Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MediaFolderConfigurationFlat implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'media_folder_configuration_flat';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'create_thumbnails' => 'bool',
'keep_aspect_ratio' => 'bool',
'thumbnail_quality' => 'int',
'private' => 'bool',
'no_association' => 'bool',
'custom_fields' => 'object',
'created_at' => '\DateTime',
'updated_at' => '\DateTime',
'media_folders' => '\Swagger\Client\Model\MediaFolderFlat',
'media_thumbnail_sizes' => '\Swagger\Client\Model\MediaThumbnailSizeFlat'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
'create_thumbnails' => null,
'keep_aspect_ratio' => null,
'thumbnail_quality' => 'int64',
'private' => null,
'no_association' => null,
'custom_fields' => null,
'created_at' => 'date-time',
'updated_at' => 'date-time',
'media_folders' => null,
'media_thumbnail_sizes' => null    ];

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
'create_thumbnails' => 'createThumbnails',
'keep_aspect_ratio' => 'keepAspectRatio',
'thumbnail_quality' => 'thumbnailQuality',
'private' => 'private',
'no_association' => 'noAssociation',
'custom_fields' => 'customFields',
'created_at' => 'createdAt',
'updated_at' => 'updatedAt',
'media_folders' => 'mediaFolders',
'media_thumbnail_sizes' => 'mediaThumbnailSizes'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'create_thumbnails' => 'setCreateThumbnails',
'keep_aspect_ratio' => 'setKeepAspectRatio',
'thumbnail_quality' => 'setThumbnailQuality',
'private' => 'setPrivate',
'no_association' => 'setNoAssociation',
'custom_fields' => 'setCustomFields',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt',
'media_folders' => 'setMediaFolders',
'media_thumbnail_sizes' => 'setMediaThumbnailSizes'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'create_thumbnails' => 'getCreateThumbnails',
'keep_aspect_ratio' => 'getKeepAspectRatio',
'thumbnail_quality' => 'getThumbnailQuality',
'private' => 'getPrivate',
'no_association' => 'getNoAssociation',
'custom_fields' => 'getCustomFields',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt',
'media_folders' => 'getMediaFolders',
'media_thumbnail_sizes' => 'getMediaThumbnailSizes'    ];

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
        $this->container['create_thumbnails'] = isset($data['create_thumbnails']) ? $data['create_thumbnails'] : null;
        $this->container['keep_aspect_ratio'] = isset($data['keep_aspect_ratio']) ? $data['keep_aspect_ratio'] : null;
        $this->container['thumbnail_quality'] = isset($data['thumbnail_quality']) ? $data['thumbnail_quality'] : null;
        $this->container['private'] = isset($data['private']) ? $data['private'] : null;
        $this->container['no_association'] = isset($data['no_association']) ? $data['no_association'] : null;
        $this->container['custom_fields'] = isset($data['custom_fields']) ? $data['custom_fields'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['media_folders'] = isset($data['media_folders']) ? $data['media_folders'] : null;
        $this->container['media_thumbnail_sizes'] = isset($data['media_thumbnail_sizes']) ? $data['media_thumbnail_sizes'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets create_thumbnails
     *
     * @return bool
     */
    public function getCreateThumbnails()
    {
        return $this->container['create_thumbnails'];
    }

    /**
     * Sets create_thumbnails
     *
     * @param bool $create_thumbnails create_thumbnails
     *
     * @return $this
     */
    public function setCreateThumbnails($create_thumbnails)
    {
        $this->container['create_thumbnails'] = $create_thumbnails;

        return $this;
    }

    /**
     * Gets keep_aspect_ratio
     *
     * @return bool
     */
    public function getKeepAspectRatio()
    {
        return $this->container['keep_aspect_ratio'];
    }

    /**
     * Sets keep_aspect_ratio
     *
     * @param bool $keep_aspect_ratio keep_aspect_ratio
     *
     * @return $this
     */
    public function setKeepAspectRatio($keep_aspect_ratio)
    {
        $this->container['keep_aspect_ratio'] = $keep_aspect_ratio;

        return $this;
    }

    /**
     * Gets thumbnail_quality
     *
     * @return int
     */
    public function getThumbnailQuality()
    {
        return $this->container['thumbnail_quality'];
    }

    /**
     * Sets thumbnail_quality
     *
     * @param int $thumbnail_quality thumbnail_quality
     *
     * @return $this
     */
    public function setThumbnailQuality($thumbnail_quality)
    {
        $this->container['thumbnail_quality'] = $thumbnail_quality;

        return $this;
    }

    /**
     * Gets private
     *
     * @return bool
     */
    public function getPrivate()
    {
        return $this->container['private'];
    }

    /**
     * Sets private
     *
     * @param bool $private private
     *
     * @return $this
     */
    public function setPrivate($private)
    {
        $this->container['private'] = $private;

        return $this;
    }

    /**
     * Gets no_association
     *
     * @return bool
     */
    public function getNoAssociation()
    {
        return $this->container['no_association'];
    }

    /**
     * Sets no_association
     *
     * @param bool $no_association no_association
     *
     * @return $this
     */
    public function setNoAssociation($no_association)
    {
        $this->container['no_association'] = $no_association;

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
     * Gets media_folders
     *
     * @return \Swagger\Client\Model\MediaFolderFlat
     */
    public function getMediaFolders()
    {
        return $this->container['media_folders'];
    }

    /**
     * Sets media_folders
     *
     * @param \Swagger\Client\Model\MediaFolderFlat $media_folders media_folders
     *
     * @return $this
     */
    public function setMediaFolders($media_folders)
    {
        $this->container['media_folders'] = $media_folders;

        return $this;
    }

    /**
     * Gets media_thumbnail_sizes
     *
     * @return \Swagger\Client\Model\MediaThumbnailSizeFlat
     */
    public function getMediaThumbnailSizes()
    {
        return $this->container['media_thumbnail_sizes'];
    }

    /**
     * Sets media_thumbnail_sizes
     *
     * @param \Swagger\Client\Model\MediaThumbnailSizeFlat $media_thumbnail_sizes media_thumbnail_sizes
     *
     * @return $this
     */
    public function setMediaThumbnailSizes($media_thumbnail_sizes)
    {
        $this->container['media_thumbnail_sizes'] = $media_thumbnail_sizes;

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
