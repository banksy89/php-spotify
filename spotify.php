<?php

class Spotify 
{
	static $base_url = 'http://ws.spotify.com';

	public function tracks($string)
	{
		$result = self::fetch(self::build_url($string));
		
		return $result->tracks;
	}

	public function albums($string)
	{
		$result = self::fetch(self::build_url($string), 'album');
		
		return $result->albums;	
	}

	private function build_url($string, $type='track') 
	{
		return self::$base_url.'/search/1/'.$type.'.json?q='.urlencode($string);
	}

	private function fetch($query)
	{
		$result = file_get_contents($query);

		return json_decode($result);
	}
}

?>