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
 * 带已执行任务的scenario
 *
 * @method Scenario getScenario() 获取scecario结果
 * @method void setScenario(Scenario $Scenario) 设置scecario结果
 * @method array getJobs() 获取job结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobs(array $Jobs) 设置job结果
注意：此字段可能返回 null，表示取不到有效值。
 */
class ScenarioWithJobs extends AbstractModel
{
    /**
     * @var Scenario scecario结果
     */
    public $Scenario;

    /**
     * @var array job结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Jobs;

    /**
     * @param Scenario $Scenario scecario结果
     * @param array $Jobs job结果
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Scenario",$param) and $param["Scenario"] !== null) {
            $this->Scenario = new Scenario();
            $this->Scenario->deserialize($param["Scenario"]);
        }

        if (array_key_exists("Jobs",$param) and $param["Jobs"] !== null) {
            $this->Jobs = [];
            foreach ($param["Jobs"] as $key => $value){
                $obj = new Job();
                $obj->deserialize($value);
                array_push($this->Jobs, $obj);
            }
        }
    }
}
