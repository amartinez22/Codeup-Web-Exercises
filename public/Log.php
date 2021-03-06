<?php

class Log
{
	private $filename;
	private $handle;


	protected function logMessage($logLevel,$message)
	{

		$stringToWrite = date('Y-m-d h:i:s') . ' ' . $logLevel . ' ' . $message . PHP_EOL;

		fwrite($this->handle, $stringToWrite);

	}

	public function info($message)
	{
		$this->logMessage("INFO", $message);
	}

	public function error($message)
	{
		$this->logMessage("ERROR", $message);
	}

	//Take in a parameter called $prefix. If nothing is passed to the constructor, 
	// the $prefix should default to 'log'
	public function __construct($prefix = 'log')
	{
	
		$this->filename = $prefix . '-' . date("Y-m-d") . ".log";
	//Open the $filename for appending and assign the file pointer to the property $handle.
		$this->handle = fopen($this->filename, 'a');
	}

	public function getFileName()
	{
		return $this->filename = $filename;
	}
	

	public function getHandle()
	{
		return $this->handle = $handle;
	}

	public function setFileName($filename)
	{
		if (!is_string($prefix)){
			$prefix = 'log';
		}

		$this->filename = $prefix . '-' . date("Y-m-d") . ".log";
		$this->handle = fopen($this->filename, 'a');
	
	}

	public function setHandle($handle)
	{

	}

	public function __deconstruct()
	{
		fclose($this->handle);
	}



}

?>