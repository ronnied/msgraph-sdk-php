<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MediaPrompt extends Prompt implements Parsable 
{
    /**
     * @var MediaInfo|null $mediaInfo The mediaInfo property
    */
    private ?MediaInfo $mediaInfo = null;
    
    /**
     * Instantiates a new MediaPrompt and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.mediaPrompt');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MediaPrompt
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MediaPrompt {
        return new MediaPrompt();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'mediaInfo' => function (ParseNode $n) use ($o) { $o->setMediaInfo($n->getObjectValue(array(MediaInfo::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the mediaInfo property value. The mediaInfo property
     * @return MediaInfo|null
    */
    public function getMediaInfo(): ?MediaInfo {
        return $this->mediaInfo;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('mediaInfo', $this->mediaInfo);
    }

    /**
     * Sets the mediaInfo property value. The mediaInfo property
     *  @param MediaInfo|null $value Value to set for the mediaInfo property.
    */
    public function setMediaInfo(?MediaInfo $value ): void {
        $this->mediaInfo = $value;
    }

}
