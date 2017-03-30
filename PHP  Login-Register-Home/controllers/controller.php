<?php
	
	class Controller{
		
		protected $currentPage;
		
		function __construct() {
			$this->currentPage = 'login.php';
		}
		
		/**
		 * @Return $currentPage, the current page (the current view)
		 */
		public function getCurrentPage() {
			$this->requestMapping();
			return $this->currentPage;
		}
		
		/**
		 * @Param $page, the new page to set (the new view)
		 */
		public function setCurrentPage($page) {
			$this->currentPage = $page;
		}
		
		/**
		 * Get the user's query and set the current page (view) accordingly
		 */
		public function requestMapping() {
			if(isset($_GET['dw_url'])) {
				$url = trim($_GET['dw_url'], '/');
				$url = explode('/', $url);
				switch($url[0]) {
					case 'register':
						$this->setCurrentPage('register.php');
						break;
					case 'welcome':
						$this->setCurrentPage('home.php');
						break;
					default:
						$this->setCurrentPage('login.php');
				}

			}
		}
		
	}
	
	
	
?>