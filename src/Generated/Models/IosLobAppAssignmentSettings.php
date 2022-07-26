<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IosLobAppAssignmentSettings extends MobileAppAssignmentSettings implements Parsable 
{
    /**
     * @var string|null $vpnConfigurationId The VPN Configuration Id to apply for this app.
    */
    private ?string $vpnConfigurationId = null;
    
    /**
     * Instantiates a new IosLobAppAssignmentSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.iosLobAppAssignmentSettings');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosLobAppAssignmentSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosLobAppAssignmentSettings {
        return new IosLobAppAssignmentSettings();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'vpnConfigurationId' => function (ParseNode $n) use ($o) { $o->setVpnConfigurationId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the vpnConfigurationId property value. The VPN Configuration Id to apply for this app.
     * @return string|null
    */
    public function getVpnConfigurationId(): ?string {
        return $this->vpnConfigurationId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('vpnConfigurationId', $this->vpnConfigurationId);
    }

    /**
     * Sets the vpnConfigurationId property value. The VPN Configuration Id to apply for this app.
     *  @param string|null $value Value to set for the vpnConfigurationId property.
    */
    public function setVpnConfigurationId(?string $value ): void {
        $this->vpnConfigurationId = $value;
    }

}
