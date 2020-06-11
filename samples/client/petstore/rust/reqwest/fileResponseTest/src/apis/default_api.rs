/*
 * File Response Test
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 */

#[allow(unused_imports)]
use std::rc::Rc;
use std::borrow::Borrow;
use std::option::Option;

use reqwest;

use super::{Error, configuration};

pub struct DefaultApiClient {
    configuration: Rc<configuration::Configuration>,
}

impl DefaultApiClient {
    pub fn new(configuration: Rc<configuration::Configuration>) -> DefaultApiClient {
        DefaultApiClient {
            configuration,
        }
    }
}


pub trait DefaultApi {
    fn fileresponsetest(&self, ) -> Result<std::path::PathBuf, Error>;
}

impl DefaultApi for DefaultApiClient {
    fn fileresponsetest(&self, ) -> Result<std::path::PathBuf, Error> {
        let configuration: &configuration::Configuration = self.configuration.borrow();
        let client = &configuration.client;

        let uri_str = format!("{}/tests/fileResponse", configuration.base_path);
        let mut req_builder = client.get(uri_str.as_str());

        if let Some(ref user_agent) = configuration.user_agent {
            req_builder = req_builder.header(reqwest::header::USER_AGENT, user_agent.clone());
        }

        let req = req_builder.build()?;
        Ok(client.execute(req)?.error_for_status()?.json()?)
    }

}
