<?php
	/* Class to parse hg hook-generated files and return revision information. */
	/* Hook should be:
	
		post-update = hg id -n -i > REVISION
	
	*/
	
	class BitbucketRevision
	{
		public $dec, $hex;
		
		public static $filename = 'REVISION';
	
		private static function parse()
		{
			$info = @file(self::$filename);
			
			if (!$info)
			{
				return false;
			}

			$info = array_map(function($str)
			{
				return trim($str, "\n+");
			}, explode(" ", $info[0]));
	
			return array(
				'dec' => $info[1],
				'hex' => $info[0],
			);
		}
		
		public static function format($format_str, $show_if_fail = "")
		{
			$info = self::parse();
			
			if (!$info)
			{
				return $show_if_fail;
			}
			
			$tokens = array(
				"%d" => 'dec',
				"%h" => 'hex'
			);
			
			$tbr = $format_str;
			
			foreach ($tokens as $token => $key)
			{
				$tbr = str_replace($token, $info[$key], $tbr);
			}
			
			return $tbr;
		}
	}