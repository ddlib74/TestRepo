<?php

require_once __DIR__ . '/vendor/daveautoload.php';

use Office365dave\Runtime\Auth\ClientCredential;
use Office365dave\SharePoint\ClientContext;

class OaipmhServerdave{
	private string $requestTemplateFiledave;
	private $getMetadataPrefixdave;
	private array $settingsdave; 
	private $responseDatedave;
	private $countItemsdave;
	private $getUntildave;
	private $getFromdave;


	// List returned records
	// private function ListRecords($settings){
		// Set auth method and credential to access SharePoint Online
		// $credentials = new ClientCredential($settings['ClientId'], $settings['ClientSecret']);
		// $siteUrl = $settings['Url'] . "/sites/taughtthesis";
		// $ctx = (new ClientContext($siteUrl))->withCredentials($credentials);  
