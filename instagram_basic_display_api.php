<?php
    require_once('defines.php');

    Class instagram_basic_display_apo{
        private $_appId = INSTAGRAM_APP_ID;
		private $_appSecret = INSTAGRAM_APP_SECRET;
		private $_redirectUrl = INSTAGRAM_APP_REDIRECT_URI;
        private $_getCode = '';
        private $_apiBaseUrl = 'https://api.instagram.com/';
        
        public $autorizationUrl = '';

        function __construct( $params ) {
			// save instagram code
            $this->_getCode = $params['get_code'];
           
            // get an access token
			$this->_setUserInstagramAccessToken( $params );

			// get authorization url
			$this->_setAuthorizationUrl();
        }

        public function getUserAccessToken() {
			return $this->_userAccessToken;
		}

		public function getUserAccessTokenExpires() {
			return $this->_userAccessTokenExpires;
		}

        private function _setAutorizationUrl(){
            $getVars = array(
                'app_id' => $this->_appId,
				'redirect_uri' => $this->_redirectUrl,
				'scope' => 'user_profile,user_media',
				'response_type' => 'code'
        
            );

            //create url 
            $this -> authorizationUrl = $this -> _apiBaseUrl , 'oauth/authorize?' . http_build_query( $getVars );
        }


    }