<?php
/**
 *  Copyright 2014 Taxamo, Ltd.
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 * $model.description$
 *
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 *
 */
class CalculateTaxLocationOut {

  static $swaggerTypes = array(
      'tax_country_code' => 'string',
      'tax_deducted' => 'bool',
      'tax_supported' => 'bool',
      'countries' => 'countries',
      'buyer_ip' => 'string',
      'billing_country_code' => 'string',
      'buyer_credit_card_prefix' => 'string',
      'evidence' => 'evidence'

    );

  /**
  * Two-letter ISO country code, e.g. FR. This code applies to detected/set country for transaction, but can be set using manual mode.
  */
  public $tax_country_code; // string
  /**
  * If the transaction is in a country supported by Taxamo, but the tax is not calculated due to merchant settings or EU B2B transaction for example.
  */
  public $tax_deducted; // bool
  /**
  * Is tax calculation supported for a detected tax location?
  */
  public $tax_supported; // bool
  /**
  * Map of countries calculated from evidence provided. This value is not stored and is available only upon tax calculation.
  */
  public $countries; // countries
  /**
  * IP address of the buyer in dotted decimal (IPv4) or text format (IPv6).
  */
  public $buyer_ip; // string
  /**
  * Billing two letter ISO country code.
  */
  public $billing_country_code; // string
  /**
  * Buyer's credit card prefix.
  */
  public $buyer_credit_card_prefix; // string
  /**
  * Tax country of residence evidence.
  */
  public $evidence; // evidence
  }
