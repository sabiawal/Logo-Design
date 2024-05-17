<?php class JSON_RPC_Client {
	private $auth;
	private $url;
	private $curl = NULL;

	function __construct($url) {
		$this->url = $url;
	}

	public function set_auth_credentials($login, $password) {
		$this->auth = "{$login}:{$password}";
	}

	public function call() {
		$params = func_get_args();
		$method = array_shift($params);
		$request = $this->_create_request($method, $params);
		$data = $this->_send_request($request);
		$response = $this->_parse_response($data, $error);
		if ($error) {
			throw new Exception('JSON-RPC error: '.$response->message, $response->code); // use custom Exception
		}
		return $response;
	}

	/* private methods */
	private function _send_request($request) {
		if ($this->curl !== NULL) {
			curl_close($this->curl);
		}
		$this->curl = curl_init($this->url);
		$headers = array(
			'Expect:', // avoid lighttpd bug
			'Content-Type: application/json-rpc; charset=utf-8',
		);
		curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($this->curl, CURLOPT_FORBID_REUSE, TRUE);
		curl_setopt($this->curl, CURLOPT_FRESH_CONNECT, TRUE);
		curl_setopt($this->curl, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($this->curl, CURLOPT_POST, TRUE);
		curl_setopt($this->curl, CURLOPT_POSTFIELDS, json_encode($request));
		curl_setopt($this->curl, CURLOPT_SSL_VERIFYPEER, FALSE);
		if (!empty($this->auth)) {
			curl_setopt($this->curl, CURLOPT_USERPWD, $this->auth);
		}
		$data = curl_exec($this->curl);
		if ($data === FALSE) {
			error_log("[".curl_errno($this->curl)."] ".curl_error($this->curl));
		}
		return $data;
	}

	private function _create_request($method, $params) {
		$request = new stdClass;
		$request->id = 42; // or use a random id
		$request->jsonrpc = '2.0';
		$request->method = $method;
		$request->params = $params;
		return $request;
	}

	private function _parse_response($data, &$error) {
		if ($data === FALSE) {
			throw new Exception('cURL error ['.curl_errno($this->curl).'] '.curl_error($this->curl));
		}
		$data = json_decode($data);
		if (!is_object($data)) {
			throw new Exception('Parse error: result is not an object.');
		}
		if (!property_exists($data, 'result') && !property_exists($data, 'error')) {
			throw new Exception('Parse error: missing property');
		}
		if (property_exists($data, 'error')) {
			$error = TRUE;
			return $data->error;
		}
		return $data->result;
	}

}

	?>