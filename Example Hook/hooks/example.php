<?php

	class ExampleHook
	{
        
        public $database;
        
		public function __construct($database)
		{
            $this->database = $database;
		}
        
        public function onHTMLSitemap()
        {
            echo '<p><a href="'. Core::route("index.php?component=example&controller=category") .'">Example Hook Link</a></p>';
        }
	}

?>