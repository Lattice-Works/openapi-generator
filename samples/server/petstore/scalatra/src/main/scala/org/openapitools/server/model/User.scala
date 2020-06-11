/**
 * OpenAPI Petstore
 * This is a sample server Petstore server. For this sample, you can use the api key `special-key` to test the authorization filters.
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: team@openapitools.org
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 */

package org.openapitools.server.model

case class User(
  id: Option[Long],

  username: Option[String],

  firstName: Option[String],

  lastName: Option[String],

  email: Option[String],

  password: Option[String],

  phone: Option[String],

  /* User Status */
  userStatus: Option[Int]

 )
