<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Time;

class AvailabilityItem implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var Time|null $endTime The endTime property
    */
    private ?Time $endTime = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $serviceId Indicates the service ID in case of 1:n appointments. If the appointment is of type 1:n, this field will be present, otherwise, null.
    */
    private ?string $serviceId = null;
    
    /**
     * @var Time|null $startTime The startTime property
    */
    private ?Time $startTime = null;
    
    /**
     * @var BookingsAvailabilityStatus|null $status The status of the staff member. Possible values are: available, busy, slotsAvailable, outOfOffice, unknownFutureValue.
    */
    private ?BookingsAvailabilityStatus $status = null;
    
    /**
     * Instantiates a new availabilityItem and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.availabilityItem');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AvailabilityItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AvailabilityItem {
        return new AvailabilityItem();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the endTime property value. The endTime property
     * @return Time|null
    */
    public function getEndTime(): ?Time {
        return $this->endTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'endTime' => function (ParseNode $n) use ($o) { $o->setEndTime($n->getTimeValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'serviceId' => function (ParseNode $n) use ($o) { $o->setServiceId($n->getStringValue()); },
            'startTime' => function (ParseNode $n) use ($o) { $o->setStartTime($n->getTimeValue()); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(BookingsAvailabilityStatus::class)); },
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
     * Gets the serviceId property value. Indicates the service ID in case of 1:n appointments. If the appointment is of type 1:n, this field will be present, otherwise, null.
     * @return string|null
    */
    public function getServiceId(): ?string {
        return $this->serviceId;
    }

    /**
     * Gets the startTime property value. The startTime property
     * @return Time|null
    */
    public function getStartTime(): ?Time {
        return $this->startTime;
    }

    /**
     * Gets the status property value. The status of the staff member. Possible values are: available, busy, slotsAvailable, outOfOffice, unknownFutureValue.
     * @return BookingsAvailabilityStatus|null
    */
    public function getStatus(): ?BookingsAvailabilityStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeTimeValue('endTime', $this->endTime);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('serviceId', $this->serviceId);
        $writer->writeTimeValue('startTime', $this->startTime);
        $writer->writeEnumValue('status', $this->status);
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
     * Sets the endTime property value. The endTime property
     *  @param Time|null $value Value to set for the endTime property.
    */
    public function setEndTime(?Time $value ): void {
        $this->endTime = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the serviceId property value. Indicates the service ID in case of 1:n appointments. If the appointment is of type 1:n, this field will be present, otherwise, null.
     *  @param string|null $value Value to set for the serviceId property.
    */
    public function setServiceId(?string $value ): void {
        $this->serviceId = $value;
    }

    /**
     * Sets the startTime property value. The startTime property
     *  @param Time|null $value Value to set for the startTime property.
    */
    public function setStartTime(?Time $value ): void {
        $this->startTime = $value;
    }

    /**
     * Sets the status property value. The status of the staff member. Possible values are: available, busy, slotsAvailable, outOfOffice, unknownFutureValue.
     *  @param BookingsAvailabilityStatus|null $value Value to set for the status property.
    */
    public function setStatus(?BookingsAvailabilityStatus $value ): void {
        $this->status = $value;
    }

}
