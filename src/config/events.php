<?php
/**
 * 返回注册的事件
 */
return [
    /*
    |--------------------------------------------------------------------------
    | 定义事件触发后需要执行的任务
    |--------------------------------------------------------------------------
    |
    */
    'listen' =>[
        //触发事件后执行被监听的任务
        //第一个参数为执行任务的执行类和方法 执行方法未指定则默认为handle
        //第二个参数设置该任务为同步执行还是异步执行
        //第三个参数为执行任务的优先级，数值越大则越先执行，相同等级则按照顺序执行 默认为0
        //指定参数 queue 对应为该任务异步执行的队列 默认为system_tasks_events
        'test' => [
            ['testSync', 'sync'],
            ['testAsync@test', 'async'],
        ],
    ]
];