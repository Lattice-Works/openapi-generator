=begin
#OpenAPI Petstore

#This spec is mainly for testing Petstore server and contains fake endpoints, models. Please do not use this for any other purpose. Special characters: \" \\

The version of the OpenAPI document: 1.0.0

Generated by: https://openapi-generator.tech
OpenAPI Generator version: 5.0.0-SNAPSHOT

=end

require 'spec_helper'
require 'json'
require 'date'

# Unit tests for Petstore::ReadOnlyFirst
# Automatically generated by openapi-generator (https://openapi-generator.tech)
# Please update as you see appropriate
describe 'ReadOnlyFirst' do
  before do
    # run before each test
    @instance = Petstore::ReadOnlyFirst.new
  end

  after do
    # run after each test
  end

  describe 'test an instance of ReadOnlyFirst' do
    it 'should create an instance of ReadOnlyFirst' do
      expect(@instance).to be_instance_of(Petstore::ReadOnlyFirst)
    end
  end
  describe 'test attribute "bar"' do
    it 'should work' do
      # assertion here. ref: https://www.relishapp.com/rspec/rspec-expectations/docs/built-in-matchers
    end
  end

  describe 'test attribute "baz"' do
    it 'should work' do
      # assertion here. ref: https://www.relishapp.com/rspec/rspec-expectations/docs/built-in-matchers
    end
  end

end
