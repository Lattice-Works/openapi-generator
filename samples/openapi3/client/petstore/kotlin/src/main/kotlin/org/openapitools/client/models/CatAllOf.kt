/**
* OpenAPI Petstore
* This spec is mainly for testing Petstore server and contains fake endpoints, models. Please do not use this for any other purpose. Special characters: \" \\
*
* The version of the OpenAPI document: 1.0.0
* 
*
* NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
* https://openapi-generator.tech
* Do not edit the class manually.
*/
package org.openapitools.client.models


import com.squareup.moshi.Json
import java.io.Serializable
/**
 * 
 * @param declawed 
 */

data class CatAllOf (
    @Json(name = "declawed")
    val declawed: kotlin.Boolean? = null
) : Serializable {
    companion object {
        private const val serialVersionUID: Long = 123
    }

}

