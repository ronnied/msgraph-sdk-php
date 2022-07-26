<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageAssignmentPolicy extends Entity implements Parsable 
{
    /**
     * @var AccessPackage|null $accessPackage The access package with this policy. Read-only. Nullable. Supports $expand.
    */
    private ?AccessPackage $accessPackage = null;
    
    /**
     * @var AllowedTargetScope|null $allowedTargetScope Principals that can be assigned the access package through this policy. The possible values are: notSpecified, specificDirectoryUsers, specificConnectedOrganizationUsers, specificDirectoryServicePrincipals, allMemberUsers, allDirectoryUsers, allDirectoryServicePrincipals, allConfiguredConnectedOrganizationUsers, allExternalUsers, unknownFutureValue.
    */
    private ?AllowedTargetScope $allowedTargetScope = null;
    
    /**
     * @var AccessPackageAutomaticRequestSettings|null $automaticRequestSettings The automaticRequestSettings property
    */
    private ?AccessPackageAutomaticRequestSettings $automaticRequestSettings = null;
    
    /**
     * @var AccessPackageCatalog|null $catalog Catalog of the access package containing this policy. Read-only.
    */
    private ?AccessPackageCatalog $catalog = null;
    
    /**
     * @var DateTime|null $createdDateTime The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $description The description of the policy.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName The display name of the policy. Supports $filter (eq).
    */
    private ?string $displayName = null;
    
    /**
     * @var ExpirationPattern|null $expiration The expiration date for assignments created in this policy.
    */
    private ?ExpirationPattern $expiration = null;
    
    /**
     * @var DateTime|null $modifiedDateTime The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    */
    private ?DateTime $modifiedDateTime = null;
    
    /**
     * @var AccessPackageAssignmentApprovalSettings|null $requestApprovalSettings Who must approve requests for access package in this policy.
    */
    private ?AccessPackageAssignmentApprovalSettings $requestApprovalSettings = null;
    
    /**
     * @var AccessPackageAssignmentRequestorSettings|null $requestorSettings Who can request this access package from this policy.
    */
    private ?AccessPackageAssignmentRequestorSettings $requestorSettings = null;
    
    /**
     * @var AccessPackageAssignmentReviewSettings|null $reviewSettings Settings for access reviews of assignments through this policy.
    */
    private ?AccessPackageAssignmentReviewSettings $reviewSettings = null;
    
    /**
     * @var array<SubjectSet>|null $specificAllowedTargets The principals that can be assigned access from an access package through this policy.
    */
    private ?array $specificAllowedTargets = null;
    
    /**
     * Instantiates a new accessPackageAssignmentPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.accessPackageAssignmentPolicy');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageAssignmentPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageAssignmentPolicy {
        return new AccessPackageAssignmentPolicy();
    }

    /**
     * Gets the accessPackage property value. The access package with this policy. Read-only. Nullable. Supports $expand.
     * @return AccessPackage|null
    */
    public function getAccessPackage(): ?AccessPackage {
        return $this->accessPackage;
    }

    /**
     * Gets the allowedTargetScope property value. Principals that can be assigned the access package through this policy. The possible values are: notSpecified, specificDirectoryUsers, specificConnectedOrganizationUsers, specificDirectoryServicePrincipals, allMemberUsers, allDirectoryUsers, allDirectoryServicePrincipals, allConfiguredConnectedOrganizationUsers, allExternalUsers, unknownFutureValue.
     * @return AllowedTargetScope|null
    */
    public function getAllowedTargetScope(): ?AllowedTargetScope {
        return $this->allowedTargetScope;
    }

    /**
     * Gets the automaticRequestSettings property value. The automaticRequestSettings property
     * @return AccessPackageAutomaticRequestSettings|null
    */
    public function getAutomaticRequestSettings(): ?AccessPackageAutomaticRequestSettings {
        return $this->automaticRequestSettings;
    }

    /**
     * Gets the catalog property value. Catalog of the access package containing this policy. Read-only.
     * @return AccessPackageCatalog|null
    */
    public function getCatalog(): ?AccessPackageCatalog {
        return $this->catalog;
    }

    /**
     * Gets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the description property value. The description of the policy.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The display name of the policy. Supports $filter (eq).
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the expiration property value. The expiration date for assignments created in this policy.
     * @return ExpirationPattern|null
    */
    public function getExpiration(): ?ExpirationPattern {
        return $this->expiration;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessPackage' => function (ParseNode $n) use ($o) { $o->setAccessPackage($n->getObjectValue(array(AccessPackage::class, 'createFromDiscriminatorValue'))); },
            'allowedTargetScope' => function (ParseNode $n) use ($o) { $o->setAllowedTargetScope($n->getEnumValue(AllowedTargetScope::class)); },
            'automaticRequestSettings' => function (ParseNode $n) use ($o) { $o->setAutomaticRequestSettings($n->getObjectValue(array(AccessPackageAutomaticRequestSettings::class, 'createFromDiscriminatorValue'))); },
            'catalog' => function (ParseNode $n) use ($o) { $o->setCatalog($n->getObjectValue(array(AccessPackageCatalog::class, 'createFromDiscriminatorValue'))); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'expiration' => function (ParseNode $n) use ($o) { $o->setExpiration($n->getObjectValue(array(ExpirationPattern::class, 'createFromDiscriminatorValue'))); },
            'modifiedDateTime' => function (ParseNode $n) use ($o) { $o->setModifiedDateTime($n->getDateTimeValue()); },
            'requestApprovalSettings' => function (ParseNode $n) use ($o) { $o->setRequestApprovalSettings($n->getObjectValue(array(AccessPackageAssignmentApprovalSettings::class, 'createFromDiscriminatorValue'))); },
            'requestorSettings' => function (ParseNode $n) use ($o) { $o->setRequestorSettings($n->getObjectValue(array(AccessPackageAssignmentRequestorSettings::class, 'createFromDiscriminatorValue'))); },
            'reviewSettings' => function (ParseNode $n) use ($o) { $o->setReviewSettings($n->getObjectValue(array(AccessPackageAssignmentReviewSettings::class, 'createFromDiscriminatorValue'))); },
            'specificAllowedTargets' => function (ParseNode $n) use ($o) { $o->setSpecificAllowedTargets($n->getCollectionOfObjectValues(array(SubjectSet::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the modifiedDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getModifiedDateTime(): ?DateTime {
        return $this->modifiedDateTime;
    }

    /**
     * Gets the requestApprovalSettings property value. Who must approve requests for access package in this policy.
     * @return AccessPackageAssignmentApprovalSettings|null
    */
    public function getRequestApprovalSettings(): ?AccessPackageAssignmentApprovalSettings {
        return $this->requestApprovalSettings;
    }

    /**
     * Gets the requestorSettings property value. Who can request this access package from this policy.
     * @return AccessPackageAssignmentRequestorSettings|null
    */
    public function getRequestorSettings(): ?AccessPackageAssignmentRequestorSettings {
        return $this->requestorSettings;
    }

    /**
     * Gets the reviewSettings property value. Settings for access reviews of assignments through this policy.
     * @return AccessPackageAssignmentReviewSettings|null
    */
    public function getReviewSettings(): ?AccessPackageAssignmentReviewSettings {
        return $this->reviewSettings;
    }

    /**
     * Gets the specificAllowedTargets property value. The principals that can be assigned access from an access package through this policy.
     * @return array<SubjectSet>|null
    */
    public function getSpecificAllowedTargets(): ?array {
        return $this->specificAllowedTargets;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('accessPackage', $this->accessPackage);
        $writer->writeEnumValue('allowedTargetScope', $this->allowedTargetScope);
        $writer->writeObjectValue('automaticRequestSettings', $this->automaticRequestSettings);
        $writer->writeObjectValue('catalog', $this->catalog);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeObjectValue('expiration', $this->expiration);
        $writer->writeDateTimeValue('modifiedDateTime', $this->modifiedDateTime);
        $writer->writeObjectValue('requestApprovalSettings', $this->requestApprovalSettings);
        $writer->writeObjectValue('requestorSettings', $this->requestorSettings);
        $writer->writeObjectValue('reviewSettings', $this->reviewSettings);
        $writer->writeCollectionOfObjectValues('specificAllowedTargets', $this->specificAllowedTargets);
    }

    /**
     * Sets the accessPackage property value. The access package with this policy. Read-only. Nullable. Supports $expand.
     *  @param AccessPackage|null $value Value to set for the accessPackage property.
    */
    public function setAccessPackage(?AccessPackage $value ): void {
        $this->accessPackage = $value;
    }

    /**
     * Sets the allowedTargetScope property value. Principals that can be assigned the access package through this policy. The possible values are: notSpecified, specificDirectoryUsers, specificConnectedOrganizationUsers, specificDirectoryServicePrincipals, allMemberUsers, allDirectoryUsers, allDirectoryServicePrincipals, allConfiguredConnectedOrganizationUsers, allExternalUsers, unknownFutureValue.
     *  @param AllowedTargetScope|null $value Value to set for the allowedTargetScope property.
    */
    public function setAllowedTargetScope(?AllowedTargetScope $value ): void {
        $this->allowedTargetScope = $value;
    }

    /**
     * Sets the automaticRequestSettings property value. The automaticRequestSettings property
     *  @param AccessPackageAutomaticRequestSettings|null $value Value to set for the automaticRequestSettings property.
    */
    public function setAutomaticRequestSettings(?AccessPackageAutomaticRequestSettings $value ): void {
        $this->automaticRequestSettings = $value;
    }

    /**
     * Sets the catalog property value. Catalog of the access package containing this policy. Read-only.
     *  @param AccessPackageCatalog|null $value Value to set for the catalog property.
    */
    public function setCatalog(?AccessPackageCatalog $value ): void {
        $this->catalog = $value;
    }

    /**
     * Sets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the description property value. The description of the policy.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The display name of the policy. Supports $filter (eq).
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the expiration property value. The expiration date for assignments created in this policy.
     *  @param ExpirationPattern|null $value Value to set for the expiration property.
    */
    public function setExpiration(?ExpirationPattern $value ): void {
        $this->expiration = $value;
    }

    /**
     * Sets the modifiedDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the modifiedDateTime property.
    */
    public function setModifiedDateTime(?DateTime $value ): void {
        $this->modifiedDateTime = $value;
    }

    /**
     * Sets the requestApprovalSettings property value. Who must approve requests for access package in this policy.
     *  @param AccessPackageAssignmentApprovalSettings|null $value Value to set for the requestApprovalSettings property.
    */
    public function setRequestApprovalSettings(?AccessPackageAssignmentApprovalSettings $value ): void {
        $this->requestApprovalSettings = $value;
    }

    /**
     * Sets the requestorSettings property value. Who can request this access package from this policy.
     *  @param AccessPackageAssignmentRequestorSettings|null $value Value to set for the requestorSettings property.
    */
    public function setRequestorSettings(?AccessPackageAssignmentRequestorSettings $value ): void {
        $this->requestorSettings = $value;
    }

    /**
     * Sets the reviewSettings property value. Settings for access reviews of assignments through this policy.
     *  @param AccessPackageAssignmentReviewSettings|null $value Value to set for the reviewSettings property.
    */
    public function setReviewSettings(?AccessPackageAssignmentReviewSettings $value ): void {
        $this->reviewSettings = $value;
    }

    /**
     * Sets the specificAllowedTargets property value. The principals that can be assigned access from an access package through this policy.
     *  @param array<SubjectSet>|null $value Value to set for the specificAllowedTargets property.
    */
    public function setSpecificAllowedTargets(?array $value ): void {
        $this->specificAllowedTargets = $value;
    }

}
