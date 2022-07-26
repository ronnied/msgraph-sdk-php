<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RoleManagement implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var RbacApplication|null $directory The directory property
    */
    private ?RbacApplication $directory = null;
    
    /**
     * @var RbacApplication|null $entitlementManagement Container for roles and assignments for entitlement management resources.
    */
    private ?RbacApplication $entitlementManagement = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new RoleManagement and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.roleManagement');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RoleManagement
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RoleManagement {
        return new RoleManagement();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the directory property value. The directory property
     * @return RbacApplication|null
    */
    public function getDirectory(): ?RbacApplication {
        return $this->directory;
    }

    /**
     * Gets the entitlementManagement property value. Container for roles and assignments for entitlement management resources.
     * @return RbacApplication|null
    */
    public function getEntitlementManagement(): ?RbacApplication {
        return $this->entitlementManagement;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'directory' => function (ParseNode $n) use ($o) { $o->setDirectory($n->getObjectValue(array(RbacApplication::class, 'createFromDiscriminatorValue'))); },
            'entitlementManagement' => function (ParseNode $n) use ($o) { $o->setEntitlementManagement($n->getObjectValue(array(RbacApplication::class, 'createFromDiscriminatorValue'))); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('directory', $this->directory);
        $writer->writeObjectValue('entitlementManagement', $this->entitlementManagement);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the directory property value. The directory property
     *  @param RbacApplication|null $value Value to set for the directory property.
    */
    public function setDirectory(?RbacApplication $value ): void {
        $this->directory = $value;
    }

    /**
     * Sets the entitlementManagement property value. Container for roles and assignments for entitlement management resources.
     *  @param RbacApplication|null $value Value to set for the entitlementManagement property.
    */
    public function setEntitlementManagement(?RbacApplication $value ): void {
        $this->entitlementManagement = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
