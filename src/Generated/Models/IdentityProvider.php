<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IdentityProvider extends Entity implements Parsable 
{
    /**
     * @var string|null $clientId The client ID for the application obtained when registering the application with the identity provider. This is a required field.  Required. Not nullable.
    */
    private ?string $clientId = null;
    
    /**
     * @var string|null $clientSecret The client secret for the application obtained when registering the application with the identity provider. This is write-only. A read operation will return ****. This is a required field. Required. Not nullable.
    */
    private ?string $clientSecret = null;
    
    /**
     * @var string|null $name The display name of the identity provider. Not nullable.
    */
    private ?string $name = null;
    
    /**
     * Instantiates a new identityProvider and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IdentityProvider
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IdentityProvider {
        return new IdentityProvider();
    }

    /**
     * Gets the clientId property value. The client ID for the application obtained when registering the application with the identity provider. This is a required field.  Required. Not nullable.
     * @return string|null
    */
    public function getClientId(): ?string {
        return $this->clientId;
    }

    /**
     * Gets the clientSecret property value. The client secret for the application obtained when registering the application with the identity provider. This is write-only. A read operation will return ****. This is a required field. Required. Not nullable.
     * @return string|null
    */
    public function getClientSecret(): ?string {
        return $this->clientSecret;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'clientId' => function (ParseNode $n) use ($o) { $o->setClientId($n->getStringValue()); },
            'clientSecret' => function (ParseNode $n) use ($o) { $o->setClientSecret($n->getStringValue()); },
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the name property value. The display name of the identity provider. Not nullable.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('clientId', $this->clientId);
        $writer->writeStringValue('clientSecret', $this->clientSecret);
        $writer->writeStringValue('name', $this->name);
    }

    /**
     * Sets the clientId property value. The client ID for the application obtained when registering the application with the identity provider. This is a required field.  Required. Not nullable.
     *  @param string|null $value Value to set for the clientId property.
    */
    public function setClientId(?string $value ): void {
        $this->clientId = $value;
    }

    /**
     * Sets the clientSecret property value. The client secret for the application obtained when registering the application with the identity provider. This is write-only. A read operation will return ****. This is a required field. Required. Not nullable.
     *  @param string|null $value Value to set for the clientSecret property.
    */
    public function setClientSecret(?string $value ): void {
        $this->clientSecret = $value;
    }

    /**
     * Sets the name property value. The display name of the identity provider. Not nullable.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

}
