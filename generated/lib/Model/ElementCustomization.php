<?php
/**
 * ElementCustomization
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Passage Management API
 *
 * Passage's management API to manage your Passage apps and users.
 *
 * The version of the OpenAPI document: v1
 * Contact: support@passage.id
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * ElementCustomization Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ElementCustomization implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ElementCustomization';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'passage_container_background_color' => 'string',
        'passage_container_max_width' => 'int',
        'passage_input_box_background_color' => 'string',
        'passage_input_box_border_radius' => 'int',
        'passage_header_font_family' => '\OpenAPI\Client\Model\FontFamily',
        'passage_body_font_family' => '\OpenAPI\Client\Model\FontFamily',
        'passage_header_text_color' => 'string',
        'passage_body_text_color' => 'string',
        'passage_primary_button_background_color' => 'string',
        'passage_primary_button_text_color' => 'string',
        'passage_primary_button_hover_color' => 'string',
        'passage_primary_button_border_radius' => 'int',
        'passage_secondary_button_background_color' => 'string',
        'passage_secondary_button_text_color' => 'string',
        'passage_secondary_button_hover_color' => 'string',
        'passage_secondary_button_border_radius' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'passage_container_background_color' => null,
        'passage_container_max_width' => null,
        'passage_input_box_background_color' => null,
        'passage_input_box_border_radius' => null,
        'passage_header_font_family' => null,
        'passage_body_font_family' => null,
        'passage_header_text_color' => null,
        'passage_body_text_color' => null,
        'passage_primary_button_background_color' => null,
        'passage_primary_button_text_color' => null,
        'passage_primary_button_hover_color' => null,
        'passage_primary_button_border_radius' => null,
        'passage_secondary_button_background_color' => null,
        'passage_secondary_button_text_color' => null,
        'passage_secondary_button_hover_color' => null,
        'passage_secondary_button_border_radius' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'passage_container_background_color' => false,
		'passage_container_max_width' => false,
		'passage_input_box_background_color' => false,
		'passage_input_box_border_radius' => false,
		'passage_header_font_family' => false,
		'passage_body_font_family' => false,
		'passage_header_text_color' => false,
		'passage_body_text_color' => false,
		'passage_primary_button_background_color' => false,
		'passage_primary_button_text_color' => false,
		'passage_primary_button_hover_color' => false,
		'passage_primary_button_border_radius' => false,
		'passage_secondary_button_background_color' => false,
		'passage_secondary_button_text_color' => false,
		'passage_secondary_button_hover_color' => false,
		'passage_secondary_button_border_radius' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'passage_container_background_color' => 'passage_container_background_color',
        'passage_container_max_width' => 'passage_container_max_width',
        'passage_input_box_background_color' => 'passage_input_box_background_color',
        'passage_input_box_border_radius' => 'passage_input_box_border_radius',
        'passage_header_font_family' => 'passage_header_font_family',
        'passage_body_font_family' => 'passage_body_font_family',
        'passage_header_text_color' => 'passage_header_text_color',
        'passage_body_text_color' => 'passage_body_text_color',
        'passage_primary_button_background_color' => 'passage_primary_button_background_color',
        'passage_primary_button_text_color' => 'passage_primary_button_text_color',
        'passage_primary_button_hover_color' => 'passage_primary_button_hover_color',
        'passage_primary_button_border_radius' => 'passage_primary_button_border_radius',
        'passage_secondary_button_background_color' => 'passage_secondary_button_background_color',
        'passage_secondary_button_text_color' => 'passage_secondary_button_text_color',
        'passage_secondary_button_hover_color' => 'passage_secondary_button_hover_color',
        'passage_secondary_button_border_radius' => 'passage_secondary_button_border_radius'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'passage_container_background_color' => 'setPassageContainerBackgroundColor',
        'passage_container_max_width' => 'setPassageContainerMaxWidth',
        'passage_input_box_background_color' => 'setPassageInputBoxBackgroundColor',
        'passage_input_box_border_radius' => 'setPassageInputBoxBorderRadius',
        'passage_header_font_family' => 'setPassageHeaderFontFamily',
        'passage_body_font_family' => 'setPassageBodyFontFamily',
        'passage_header_text_color' => 'setPassageHeaderTextColor',
        'passage_body_text_color' => 'setPassageBodyTextColor',
        'passage_primary_button_background_color' => 'setPassagePrimaryButtonBackgroundColor',
        'passage_primary_button_text_color' => 'setPassagePrimaryButtonTextColor',
        'passage_primary_button_hover_color' => 'setPassagePrimaryButtonHoverColor',
        'passage_primary_button_border_radius' => 'setPassagePrimaryButtonBorderRadius',
        'passage_secondary_button_background_color' => 'setPassageSecondaryButtonBackgroundColor',
        'passage_secondary_button_text_color' => 'setPassageSecondaryButtonTextColor',
        'passage_secondary_button_hover_color' => 'setPassageSecondaryButtonHoverColor',
        'passage_secondary_button_border_radius' => 'setPassageSecondaryButtonBorderRadius'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'passage_container_background_color' => 'getPassageContainerBackgroundColor',
        'passage_container_max_width' => 'getPassageContainerMaxWidth',
        'passage_input_box_background_color' => 'getPassageInputBoxBackgroundColor',
        'passage_input_box_border_radius' => 'getPassageInputBoxBorderRadius',
        'passage_header_font_family' => 'getPassageHeaderFontFamily',
        'passage_body_font_family' => 'getPassageBodyFontFamily',
        'passage_header_text_color' => 'getPassageHeaderTextColor',
        'passage_body_text_color' => 'getPassageBodyTextColor',
        'passage_primary_button_background_color' => 'getPassagePrimaryButtonBackgroundColor',
        'passage_primary_button_text_color' => 'getPassagePrimaryButtonTextColor',
        'passage_primary_button_hover_color' => 'getPassagePrimaryButtonHoverColor',
        'passage_primary_button_border_radius' => 'getPassagePrimaryButtonBorderRadius',
        'passage_secondary_button_background_color' => 'getPassageSecondaryButtonBackgroundColor',
        'passage_secondary_button_text_color' => 'getPassageSecondaryButtonTextColor',
        'passage_secondary_button_hover_color' => 'getPassageSecondaryButtonHoverColor',
        'passage_secondary_button_border_radius' => 'getPassageSecondaryButtonBorderRadius'
    ];

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
        return self::$openAPIModelName;
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
        $this->setIfExists('passage_container_background_color', $data ?? [], '#ffffff');
        $this->setIfExists('passage_container_max_width', $data ?? [], 300);
        $this->setIfExists('passage_input_box_background_color', $data ?? [], '#ffffff');
        $this->setIfExists('passage_input_box_border_radius', $data ?? [], 5);
        $this->setIfExists('passage_header_font_family', $data ?? [], null);
        $this->setIfExists('passage_body_font_family', $data ?? [], null);
        $this->setIfExists('passage_header_text_color', $data ?? [], '#000000');
        $this->setIfExists('passage_body_text_color', $data ?? [], '#000000');
        $this->setIfExists('passage_primary_button_background_color', $data ?? [], '#000000');
        $this->setIfExists('passage_primary_button_text_color', $data ?? [], '#ffffff');
        $this->setIfExists('passage_primary_button_hover_color', $data ?? [], '#4d4d4d');
        $this->setIfExists('passage_primary_button_border_radius', $data ?? [], 5);
        $this->setIfExists('passage_secondary_button_background_color', $data ?? [], '#ffffff');
        $this->setIfExists('passage_secondary_button_text_color', $data ?? [], '#000000');
        $this->setIfExists('passage_secondary_button_hover_color', $data ?? [], '#d7d7d7');
        $this->setIfExists('passage_secondary_button_border_radius', $data ?? [], 5);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets passage_container_background_color
     *
     * @return string|null
     */
    public function getPassageContainerBackgroundColor()
    {
        return $this->container['passage_container_background_color'];
    }

    /**
     * Sets passage_container_background_color
     *
     * @param string|null $passage_container_background_color Container background color
     *
     * @return self
     */
    public function setPassageContainerBackgroundColor($passage_container_background_color)
    {
        if (is_null($passage_container_background_color)) {
            throw new \InvalidArgumentException('non-nullable passage_container_background_color cannot be null');
        }
        $this->container['passage_container_background_color'] = $passage_container_background_color;

        return $this;
    }

    /**
     * Gets passage_container_max_width
     *
     * @return int|null
     */
    public function getPassageContainerMaxWidth()
    {
        return $this->container['passage_container_max_width'];
    }

    /**
     * Sets passage_container_max_width
     *
     * @param int|null $passage_container_max_width Maximum width of container (px)
     *
     * @return self
     */
    public function setPassageContainerMaxWidth($passage_container_max_width)
    {
        if (is_null($passage_container_max_width)) {
            throw new \InvalidArgumentException('non-nullable passage_container_max_width cannot be null');
        }
        $this->container['passage_container_max_width'] = $passage_container_max_width;

        return $this;
    }

    /**
     * Gets passage_input_box_background_color
     *
     * @return string|null
     */
    public function getPassageInputBoxBackgroundColor()
    {
        return $this->container['passage_input_box_background_color'];
    }

    /**
     * Sets passage_input_box_background_color
     *
     * @param string|null $passage_input_box_background_color Input box background color (hex)
     *
     * @return self
     */
    public function setPassageInputBoxBackgroundColor($passage_input_box_background_color)
    {
        if (is_null($passage_input_box_background_color)) {
            throw new \InvalidArgumentException('non-nullable passage_input_box_background_color cannot be null');
        }
        $this->container['passage_input_box_background_color'] = $passage_input_box_background_color;

        return $this;
    }

    /**
     * Gets passage_input_box_border_radius
     *
     * @return int|null
     */
    public function getPassageInputBoxBorderRadius()
    {
        return $this->container['passage_input_box_border_radius'];
    }

    /**
     * Sets passage_input_box_border_radius
     *
     * @param int|null $passage_input_box_border_radius Input box border radius (px)
     *
     * @return self
     */
    public function setPassageInputBoxBorderRadius($passage_input_box_border_radius)
    {
        if (is_null($passage_input_box_border_radius)) {
            throw new \InvalidArgumentException('non-nullable passage_input_box_border_radius cannot be null');
        }
        $this->container['passage_input_box_border_radius'] = $passage_input_box_border_radius;

        return $this;
    }

    /**
     * Gets passage_header_font_family
     *
     * @return \OpenAPI\Client\Model\FontFamily|null
     */
    public function getPassageHeaderFontFamily()
    {
        return $this->container['passage_header_font_family'];
    }

    /**
     * Sets passage_header_font_family
     *
     * @param \OpenAPI\Client\Model\FontFamily|null $passage_header_font_family passage_header_font_family
     *
     * @return self
     */
    public function setPassageHeaderFontFamily($passage_header_font_family)
    {
        if (is_null($passage_header_font_family)) {
            throw new \InvalidArgumentException('non-nullable passage_header_font_family cannot be null');
        }
        $this->container['passage_header_font_family'] = $passage_header_font_family;

        return $this;
    }

    /**
     * Gets passage_body_font_family
     *
     * @return \OpenAPI\Client\Model\FontFamily|null
     */
    public function getPassageBodyFontFamily()
    {
        return $this->container['passage_body_font_family'];
    }

    /**
     * Sets passage_body_font_family
     *
     * @param \OpenAPI\Client\Model\FontFamily|null $passage_body_font_family passage_body_font_family
     *
     * @return self
     */
    public function setPassageBodyFontFamily($passage_body_font_family)
    {
        if (is_null($passage_body_font_family)) {
            throw new \InvalidArgumentException('non-nullable passage_body_font_family cannot be null');
        }
        $this->container['passage_body_font_family'] = $passage_body_font_family;

        return $this;
    }

    /**
     * Gets passage_header_text_color
     *
     * @return string|null
     */
    public function getPassageHeaderTextColor()
    {
        return $this->container['passage_header_text_color'];
    }

    /**
     * Sets passage_header_text_color
     *
     * @param string|null $passage_header_text_color Header font colour (hex)
     *
     * @return self
     */
    public function setPassageHeaderTextColor($passage_header_text_color)
    {
        if (is_null($passage_header_text_color)) {
            throw new \InvalidArgumentException('non-nullable passage_header_text_color cannot be null');
        }
        $this->container['passage_header_text_color'] = $passage_header_text_color;

        return $this;
    }

    /**
     * Gets passage_body_text_color
     *
     * @return string|null
     */
    public function getPassageBodyTextColor()
    {
        return $this->container['passage_body_text_color'];
    }

    /**
     * Sets passage_body_text_color
     *
     * @param string|null $passage_body_text_color Body font colour (hex)
     *
     * @return self
     */
    public function setPassageBodyTextColor($passage_body_text_color)
    {
        if (is_null($passage_body_text_color)) {
            throw new \InvalidArgumentException('non-nullable passage_body_text_color cannot be null');
        }
        $this->container['passage_body_text_color'] = $passage_body_text_color;

        return $this;
    }

    /**
     * Gets passage_primary_button_background_color
     *
     * @return string|null
     */
    public function getPassagePrimaryButtonBackgroundColor()
    {
        return $this->container['passage_primary_button_background_color'];
    }

    /**
     * Sets passage_primary_button_background_color
     *
     * @param string|null $passage_primary_button_background_color Primary button background colour (hex)
     *
     * @return self
     */
    public function setPassagePrimaryButtonBackgroundColor($passage_primary_button_background_color)
    {
        if (is_null($passage_primary_button_background_color)) {
            throw new \InvalidArgumentException('non-nullable passage_primary_button_background_color cannot be null');
        }
        $this->container['passage_primary_button_background_color'] = $passage_primary_button_background_color;

        return $this;
    }

    /**
     * Gets passage_primary_button_text_color
     *
     * @return string|null
     */
    public function getPassagePrimaryButtonTextColor()
    {
        return $this->container['passage_primary_button_text_color'];
    }

    /**
     * Sets passage_primary_button_text_color
     *
     * @param string|null $passage_primary_button_text_color Primary button font colour (hex)
     *
     * @return self
     */
    public function setPassagePrimaryButtonTextColor($passage_primary_button_text_color)
    {
        if (is_null($passage_primary_button_text_color)) {
            throw new \InvalidArgumentException('non-nullable passage_primary_button_text_color cannot be null');
        }
        $this->container['passage_primary_button_text_color'] = $passage_primary_button_text_color;

        return $this;
    }

    /**
     * Gets passage_primary_button_hover_color
     *
     * @return string|null
     */
    public function getPassagePrimaryButtonHoverColor()
    {
        return $this->container['passage_primary_button_hover_color'];
    }

    /**
     * Sets passage_primary_button_hover_color
     *
     * @param string|null $passage_primary_button_hover_color Primary button background on hover (hex)
     *
     * @return self
     */
    public function setPassagePrimaryButtonHoverColor($passage_primary_button_hover_color)
    {
        if (is_null($passage_primary_button_hover_color)) {
            throw new \InvalidArgumentException('non-nullable passage_primary_button_hover_color cannot be null');
        }
        $this->container['passage_primary_button_hover_color'] = $passage_primary_button_hover_color;

        return $this;
    }

    /**
     * Gets passage_primary_button_border_radius
     *
     * @return int|null
     */
    public function getPassagePrimaryButtonBorderRadius()
    {
        return $this->container['passage_primary_button_border_radius'];
    }

    /**
     * Sets passage_primary_button_border_radius
     *
     * @param int|null $passage_primary_button_border_radius Primary button border radius (px)
     *
     * @return self
     */
    public function setPassagePrimaryButtonBorderRadius($passage_primary_button_border_radius)
    {
        if (is_null($passage_primary_button_border_radius)) {
            throw new \InvalidArgumentException('non-nullable passage_primary_button_border_radius cannot be null');
        }
        $this->container['passage_primary_button_border_radius'] = $passage_primary_button_border_radius;

        return $this;
    }

    /**
     * Gets passage_secondary_button_background_color
     *
     * @return string|null
     */
    public function getPassageSecondaryButtonBackgroundColor()
    {
        return $this->container['passage_secondary_button_background_color'];
    }

    /**
     * Sets passage_secondary_button_background_color
     *
     * @param string|null $passage_secondary_button_background_color Secondary button background colour (hex)
     *
     * @return self
     */
    public function setPassageSecondaryButtonBackgroundColor($passage_secondary_button_background_color)
    {
        if (is_null($passage_secondary_button_background_color)) {
            throw new \InvalidArgumentException('non-nullable passage_secondary_button_background_color cannot be null');
        }
        $this->container['passage_secondary_button_background_color'] = $passage_secondary_button_background_color;

        return $this;
    }

    /**
     * Gets passage_secondary_button_text_color
     *
     * @return string|null
     */
    public function getPassageSecondaryButtonTextColor()
    {
        return $this->container['passage_secondary_button_text_color'];
    }

    /**
     * Sets passage_secondary_button_text_color
     *
     * @param string|null $passage_secondary_button_text_color Secondary button font colour (hex)
     *
     * @return self
     */
    public function setPassageSecondaryButtonTextColor($passage_secondary_button_text_color)
    {
        if (is_null($passage_secondary_button_text_color)) {
            throw new \InvalidArgumentException('non-nullable passage_secondary_button_text_color cannot be null');
        }
        $this->container['passage_secondary_button_text_color'] = $passage_secondary_button_text_color;

        return $this;
    }

    /**
     * Gets passage_secondary_button_hover_color
     *
     * @return string|null
     */
    public function getPassageSecondaryButtonHoverColor()
    {
        return $this->container['passage_secondary_button_hover_color'];
    }

    /**
     * Sets passage_secondary_button_hover_color
     *
     * @param string|null $passage_secondary_button_hover_color Secondary button background on hover (hex)
     *
     * @return self
     */
    public function setPassageSecondaryButtonHoverColor($passage_secondary_button_hover_color)
    {
        if (is_null($passage_secondary_button_hover_color)) {
            throw new \InvalidArgumentException('non-nullable passage_secondary_button_hover_color cannot be null');
        }
        $this->container['passage_secondary_button_hover_color'] = $passage_secondary_button_hover_color;

        return $this;
    }

    /**
     * Gets passage_secondary_button_border_radius
     *
     * @return int|null
     */
    public function getPassageSecondaryButtonBorderRadius()
    {
        return $this->container['passage_secondary_button_border_radius'];
    }

    /**
     * Sets passage_secondary_button_border_radius
     *
     * @param int|null $passage_secondary_button_border_radius Secondary button border radius (px)
     *
     * @return self
     */
    public function setPassageSecondaryButtonBorderRadius($passage_secondary_button_border_radius)
    {
        if (is_null($passage_secondary_button_border_radius)) {
            throw new \InvalidArgumentException('non-nullable passage_secondary_button_border_radius cannot be null');
        }
        $this->container['passage_secondary_button_border_radius'] = $passage_secondary_button_border_radius;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


