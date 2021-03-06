<?php
/**
 * Copyright (c) 2017 Baidu, Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @desc tag类
 **/
namespace Baidu\Duer\Botsdk\Directive\Display\Template\Tag;

class NewTag extends BaseTag{

    const NEW_TYPE = 'NEW';
    const NEW_TEXT = '最新';

    /**
     * BaseTemplate constructor.
     */
    public function __construct() {
        parent::__construct(self::NEW_TYPE, self::NEW_TEXT);
    }

}
 
