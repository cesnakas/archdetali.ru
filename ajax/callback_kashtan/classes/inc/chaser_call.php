<?php





class ChaserApi {
    private $apiUrl = "http://api.chaser.ru/v1/";
    private $client_id;
    private $private_key;
    
    /**
     * конструктор
     * @param int $client_id   идентификатор клиента в базе чейзера
     * @param string $private_key ключ доступа к api чейзера
     */
    public function __construct($client_id, $private_key) {
        $this->client_id = $client_id;
        $this->private_key = $private_key;
    }

    public function get($method, $params = array()) {
        return $this->_request("GET", $method, $params);
    }

    public function post($method, $params = array()) {
        return $this->_request("POST", $method, $params);
    }

    public function delete($method, $params = array()) {
        return $this->_request("DELETE", $method, $params);
    }

    private function _request($request, $method, $params) {
        $params["client_id"] = $this->client_id;
        $params["SecurityKey"] = md5(http_build_query($params)."&PrivateSecurityKey=".$this->private_key);

        $answer = array();

        $ch = curl_init();

        $opt[CURLOPT_URL] = $this->apiUrl . $method;
        $opt[CURLOPT_HEADER] = FALSE;
        $opt[CURLOPT_RETURNTRANSFER] = TRUE;
        $opt[CURLOPT_FOLLOWLOCATION] = FALSE;

        switch ($request) {
            case "GET":
                $opt[CURLOPT_URL] = $this->apiUrl . $method . "?" . http_build_query($params);
                break;
            case "POST":
                $opt[CURLOPT_POST] = TRUE;
                $opt[CURLOPT_POSTFIELDS] = http_build_query($params);
                break;
            case "PUT":
            case "DELETE":
                $opt[CURLOPT_CUSTOMREQUEST] = $request;
                $opt[CURLOPT_POSTFIELDS] = http_build_query($params);
                break;
        }
        
        curl_setopt_array($ch, $opt);
        
        $result = curl_exec($ch);
        
        if (!$result) {
            $answer = array(
                'status' => FALSE,
                'errno' => curl_errno($ch),
                'error' => curl_error($ch)
            );
        } else {
            $answer = array(
                'status' => TRUE,
                'data' => $result
            );
        }
        
        curl_close($ch);
        
        return $answer;
    }
}

