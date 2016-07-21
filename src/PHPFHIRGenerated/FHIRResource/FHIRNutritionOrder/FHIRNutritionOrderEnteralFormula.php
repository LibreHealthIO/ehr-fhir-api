<?php namespace PHPFHIRGenerated\FHIRResource\FHIRNutritionOrder;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 7th, 2016
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016 Daniel Carbone (daniel.p.carbone@gmail.com)
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *        http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 *
 * FHIR Copyright Notice:
 *
 *   Copyright (c) 2011+, HL7, Inc.
 *   All rights reserved.
 * 
 *   Redistribution and use in source and binary forms, with or without modification,
 *   are permitted provided that the following conditions are met:
 * 
 *    * Redistributions of source code must retain the above copyright notice, this
 *      list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright notice,
 *      this list of conditions and the following disclaimer in the documentation
 *      and/or other materials provided with the distribution.
 *    * Neither the name of HL7 nor the names of its contributors may be used to
 *      endorse or promote products derived from this software without specific
 *      prior written permission.
 * 
 *   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *   IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 *   INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *   NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 *   PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *   WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *   POSSIBILITY OF SUCH DAMAGE.
 * 
 * 
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;
use PHPFHIRGenerated\JsonSerializable;

/**
 * A request to supply a diet, formula feeding (enteral) or oral nutritional supplement to a patient/resident.
 */
class FHIRNutritionOrderEnteralFormula extends FHIRBackboneElement implements JsonSerializable
{
    /**
     * The type of enteral or infant formula such as an adult standard formula with fiber or a soy-based infant formula.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $baseFormulaType = null;

    /**
     * The product or brand name of the enteral or infant formula product such as "ACME Adult Standard Formula".
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $baseFormulaProductName = null;

    /**
     * Indicates the type of modular component such as protein, carbohydrate, fat or fiber to be provided in addition to or mixed with the base formula.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $additiveType = null;

    /**
     * The product or brand name of the type of modular component to be added to the formula.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $additiveProductName = null;

    /**
     * The amount of energy (Calories) that the formula should provide per specified volume, typically per mL or fluid oz.  For example, an infant may require a formula that provides 24 Calories per fluid ounce or an adult may require an enteral formula that provides 1.5 Calorie/mL.
     * @var \PHPFHIRGenerated\FHIRSimpleQuantity
     */
    public $caloricDensity = null;

    /**
     * The route or physiological path of administration into the patient's gastrointestinal  tract for purposes of providing the formula feeding, e.g. nasogastric tube.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $routeofAdministration = null;

    /**
     * Formula administration instructions as structured data.  This repeating structure allows for changing the administration rate or volume over time for both bolus and continuous feeding.  An example of this would be an instruction to increase the rate of continuous feeding every 2 hours.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRNutritionOrder\FHIRNutritionOrderAdministration[]
     */
    public $administration = array();

    /**
     * The maximum total quantity of formula that may be administered to a subject over the period of time, e.g. 1440 mL over 24 hours.
     * @var \PHPFHIRGenerated\FHIRSimpleQuantity
     */
    public $maxVolumeToDeliver = null;

    /**
     * Free text formula administration, feeding instructions or additional instructions or information.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $administrationInstruction = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'NutritionOrder.EnteralFormula';

    /**
     * The type of enteral or infant formula such as an adult standard formula with fiber or a soy-based infant formula.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getBaseFormulaType()
    {
        return $this->baseFormulaType;
    }

    /**
     * The type of enteral or infant formula such as an adult standard formula with fiber or a soy-based infant formula.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $baseFormulaType
     * @return $this
     */
    public function setBaseFormulaType($baseFormulaType)
    {
        $this->baseFormulaType = $baseFormulaType;
        return $this;
    }

    /**
     * The product or brand name of the enteral or infant formula product such as "ACME Adult Standard Formula".
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getBaseFormulaProductName()
    {
        return $this->baseFormulaProductName;
    }

    /**
     * The product or brand name of the enteral or infant formula product such as "ACME Adult Standard Formula".
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $baseFormulaProductName
     * @return $this
     */
    public function setBaseFormulaProductName($baseFormulaProductName)
    {
        $this->baseFormulaProductName = $baseFormulaProductName;
        return $this;
    }

    /**
     * Indicates the type of modular component such as protein, carbohydrate, fat or fiber to be provided in addition to or mixed with the base formula.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getAdditiveType()
    {
        return $this->additiveType;
    }

    /**
     * Indicates the type of modular component such as protein, carbohydrate, fat or fiber to be provided in addition to or mixed with the base formula.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $additiveType
     * @return $this
     */
    public function setAdditiveType($additiveType)
    {
        $this->additiveType = $additiveType;
        return $this;
    }

    /**
     * The product or brand name of the type of modular component to be added to the formula.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getAdditiveProductName()
    {
        return $this->additiveProductName;
    }

    /**
     * The product or brand name of the type of modular component to be added to the formula.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $additiveProductName
     * @return $this
     */
    public function setAdditiveProductName($additiveProductName)
    {
        $this->additiveProductName = $additiveProductName;
        return $this;
    }

    /**
     * The amount of energy (Calories) that the formula should provide per specified volume, typically per mL or fluid oz.  For example, an infant may require a formula that provides 24 Calories per fluid ounce or an adult may require an enteral formula that provides 1.5 Calorie/mL.
     * @return \PHPFHIRGenerated\FHIRSimpleQuantity
     */
    public function getCaloricDensity()
    {
        return $this->caloricDensity;
    }

    /**
     * The amount of energy (Calories) that the formula should provide per specified volume, typically per mL or fluid oz.  For example, an infant may require a formula that provides 24 Calories per fluid ounce or an adult may require an enteral formula that provides 1.5 Calorie/mL.
     * @param \PHPFHIRGenerated\FHIRSimpleQuantity $caloricDensity
     * @return $this
     */
    public function setCaloricDensity($caloricDensity)
    {
        $this->caloricDensity = $caloricDensity;
        return $this;
    }

    /**
     * The route or physiological path of administration into the patient's gastrointestinal  tract for purposes of providing the formula feeding, e.g. nasogastric tube.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getRouteofAdministration()
    {
        return $this->routeofAdministration;
    }

    /**
     * The route or physiological path of administration into the patient's gastrointestinal  tract for purposes of providing the formula feeding, e.g. nasogastric tube.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $routeofAdministration
     * @return $this
     */
    public function setRouteofAdministration($routeofAdministration)
    {
        $this->routeofAdministration = $routeofAdministration;
        return $this;
    }

    /**
     * Formula administration instructions as structured data.  This repeating structure allows for changing the administration rate or volume over time for both bolus and continuous feeding.  An example of this would be an instruction to increase the rate of continuous feeding every 2 hours.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRNutritionOrder\FHIRNutritionOrderAdministration[]
     */
    public function getAdministration()
    {
        return $this->administration;
    }

    /**
     * Formula administration instructions as structured data.  This repeating structure allows for changing the administration rate or volume over time for both bolus and continuous feeding.  An example of this would be an instruction to increase the rate of continuous feeding every 2 hours.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRNutritionOrder\FHIRNutritionOrderAdministration[] $administration
     * @return $this
     */
    public function addAdministration($administration)
    {
        $this->administration[] = $administration;
        return $this;
    }

    /**
     * The maximum total quantity of formula that may be administered to a subject over the period of time, e.g. 1440 mL over 24 hours.
     * @return \PHPFHIRGenerated\FHIRSimpleQuantity
     */
    public function getMaxVolumeToDeliver()
    {
        return $this->maxVolumeToDeliver;
    }

    /**
     * The maximum total quantity of formula that may be administered to a subject over the period of time, e.g. 1440 mL over 24 hours.
     * @param \PHPFHIRGenerated\FHIRSimpleQuantity $maxVolumeToDeliver
     * @return $this
     */
    public function setMaxVolumeToDeliver($maxVolumeToDeliver)
    {
        $this->maxVolumeToDeliver = $maxVolumeToDeliver;
        return $this;
    }

    /**
     * Free text formula administration, feeding instructions or additional instructions or information.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getAdministrationInstruction()
    {
        return $this->administrationInstruction;
    }

    /**
     * Free text formula administration, feeding instructions or additional instructions or information.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $administrationInstruction
     * @return $this
     */
    public function setAdministrationInstruction($administrationInstruction)
    {
        $this->administrationInstruction = $administrationInstruction;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName()
    {
        return $this->_fhirElementName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        if (null !== $this->baseFormulaType) $json['baseFormulaType'] = $this->baseFormulaType->jsonSerialize();
        if (null !== $this->baseFormulaProductName) $json['baseFormulaProductName'] = $this->baseFormulaProductName->jsonSerialize();
        if (null !== $this->additiveType) $json['additiveType'] = $this->additiveType->jsonSerialize();
        if (null !== $this->additiveProductName) $json['additiveProductName'] = $this->additiveProductName->jsonSerialize();
        if (null !== $this->caloricDensity) $json['caloricDensity'] = $this->caloricDensity->jsonSerialize();
        if (null !== $this->routeofAdministration) $json['routeofAdministration'] = $this->routeofAdministration->jsonSerialize();
        if (0 < count($this->administration)) {
            $json['administration'] = array();
            foreach($this->administration as $administration) {
                $json['administration'][] = $administration->jsonSerialize();
            }
        }
        if (null !== $this->maxVolumeToDeliver) $json['maxVolumeToDeliver'] = $this->maxVolumeToDeliver->jsonSerialize();
        if (null !== $this->administrationInstruction) $json['administrationInstruction'] = $this->administrationInstruction->jsonSerialize();
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<NutritionOrderEnteralFormula xmlns="http://hl7.org/fhir"></NutritionOrderEnteralFormula>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->baseFormulaType) $this->baseFormulaType->xmlSerialize(true, $sxe->addChild('baseFormulaType'));
        if (null !== $this->baseFormulaProductName) $this->baseFormulaProductName->xmlSerialize(true, $sxe->addChild('baseFormulaProductName'));
        if (null !== $this->additiveType) $this->additiveType->xmlSerialize(true, $sxe->addChild('additiveType'));
        if (null !== $this->additiveProductName) $this->additiveProductName->xmlSerialize(true, $sxe->addChild('additiveProductName'));
        if (null !== $this->caloricDensity) $this->caloricDensity->xmlSerialize(true, $sxe->addChild('caloricDensity'));
        if (null !== $this->routeofAdministration) $this->routeofAdministration->xmlSerialize(true, $sxe->addChild('routeofAdministration'));
        if (0 < count($this->administration)) {
            foreach($this->administration as $administration) {
                $administration->xmlSerialize(true, $sxe->addChild('administration'));
            }
        }
        if (null !== $this->maxVolumeToDeliver) $this->maxVolumeToDeliver->xmlSerialize(true, $sxe->addChild('maxVolumeToDeliver'));
        if (null !== $this->administrationInstruction) $this->administrationInstruction->xmlSerialize(true, $sxe->addChild('administrationInstruction'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}