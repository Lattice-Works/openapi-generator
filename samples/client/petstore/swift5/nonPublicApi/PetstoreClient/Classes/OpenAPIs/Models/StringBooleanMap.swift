//
// StringBooleanMap.swift
//
// Generated by openapi-generator
// https://openapi-generator.tech
//

import Foundation


internal struct StringBooleanMap: Codable { 



    internal var additionalProperties: [String:Bool] = [:]

    internal subscript(key: String) -> Bool? {
        get {
            if let value = additionalProperties[key] {
                return value
            }
            return nil
        }

        set {
            additionalProperties[key] = newValue
        }
    }

    // Encodable protocol methods

    internal func encode(to encoder: Encoder) throws {

        var container = encoder.container(keyedBy: String.self)

        try container.encodeMap(additionalProperties)
    }

    // Decodable protocol methods

    internal init(from decoder: Decoder) throws {
        let container = try decoder.container(keyedBy: String.self)

        var nonAdditionalPropertyKeys = Set<String>()
        additionalProperties = try container.decodeMap(Bool.self, excludedKeys: nonAdditionalPropertyKeys)
    }


}
