<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    // 北京
    const BJ = [
        'title' => '北京办公室',
        'alias' => '北京事业部',
        'area' => '北京',
        'description' => '北京艺乡建事业部创立于2010年，总部位于中国北京。“猷光明，合天然”源于对“至善和谐”的发展理念的不渝追求。光合集团开创性的将大设计方法论与国际化的资源相结合，创造了卓尔不凡的光合基因和引领卓越的光合价值。',
        'address' => 'l地址：中国·北京·朝阳区东四环中路大成国际中心写字楼B2-0526',
        'contact' => '电话：010-59626463 18301573107',
        'belongsTo' => '国内办公室'
    ];

    // 湖北
    const HUBEI = [
        'title' => '湖北艺乡建志愿者',
        'alias' => '北京事业部',
        'area' => '湖北',
        'description' => '家园在望，跬步无休——高勇
天行不止，时序如轮，转我去日，周三十春，曰高曰勇，泛泛此身，字子字如，昂昂斯人，青春往日，负笈南都。
黑白坚柔，劳劳一身，春夏冬秋，心疲情逸，志劳思悠，奇山丽水，豁耳盈眸，屋舍荡然，居人去休，墙倾土废，铭内深忧，涓埃有助，聚海可筹，借庄严力，致广大谋，老养幼教，业积室稠，坠绪再起，斯文复遒，家园在望，跬步无休。',
        'address' => 'l地址：中国·北京·朝阳区东四环中路大成国际中心写字楼B2-0526',
        'contact' => '电话：010-59626463 18301573107',
        'belongsTo' => '国内办公室'
    ];
}
