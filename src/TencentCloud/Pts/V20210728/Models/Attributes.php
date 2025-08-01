<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 采样日志附带属性
 *
 * @method string getStatus() 获取采用请求返回码
 * @method void setStatus(string $Status) 设置采用请求返回码
 * @method string getResult() 获取采样请求结果码
 * @method void setResult(string $Result) 设置采样请求结果码
 * @method string getService() 获取采样请求API
 * @method void setService(string $Service) 设置采样请求API
 * @method string getMethod() 获取采样请求调用方法
 * @method void setMethod(string $Method) 设置采样请求调用方法
 * @method string getDuration() 获取采样请求延时时间
 * @method void setDuration(string $Duration) 设置采样请求延时时间
 */
class Attributes extends AbstractModel
{
    /**
     * @var string 采用请求返回码
     */
    public $Status;

    /**
     * @var string 采样请求结果码
     */
    public $Result;

    /**
     * @var string 采样请求API
     */
    public $Service;

    /**
     * @var string 采样请求调用方法
     */
    public $Method;

    /**
     * @var string 采样请求延时时间
     */
    public $Duration;

    /**
     * @param string $Status 采用请求返回码
     * @param string $Result 采样请求结果码
     * @param string $Service 采样请求API
     * @param string $Method 采样请求调用方法
     * @param string $Duration 采样请求延时时间
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = $param["Service"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }
    }
}
