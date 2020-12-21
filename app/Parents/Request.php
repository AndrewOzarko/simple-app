<?php


namespace App\Parents;

use Illuminate\Foundation\Http\FormRequest;

class Request extends FormRequest
{

    protected $urlParameters = [];

    /**
     * @param null $keys
     * @return array
     */
    public function all($keys = null)
    {
        $requestData = parent::all($keys);
        $requestData = $this->mergeUrlParametersWithRequestData($requestData);

        return $requestData;
    }

    /**
     * @param array $requestData
     * @return array
     */
    private function mergeUrlParametersWithRequestData(array $requestData)
    {
        if (isset($this->urlParameters) && !empty($this->urlParameters)) {
            foreach ($this->urlParameters as $param) {
                $requestData[$param] = $this->route($param);
            }
        }
        return $requestData;
    }
}
