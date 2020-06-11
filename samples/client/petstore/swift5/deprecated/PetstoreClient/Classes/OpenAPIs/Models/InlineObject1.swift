//
// InlineObject1.swift
//
// Generated by openapi-generator
// https://openapi-generator.tech
//

import Foundation


public struct InlineObject1: Codable { 


    /** Additional data to pass to server */
    public var additionalMetadata: String?
    /** file to upload */
    public var file: URL?

    public init(additionalMetadata: String?, file: URL?) {
        self.additionalMetadata = additionalMetadata
        self.file = file
    }

}
