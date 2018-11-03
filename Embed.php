<?php

namespace alex290\embed;

use alex290\embed\VideoEmbed;
use yii\helpers\Html;

// alex290\embed\VideoEmbed Object
// (
//     [url] => https://www.youtube.com/watch?v=Pwe-pA6TaZk
//     [html] => <iframe width="480" height="270" src="https://www.youtube.com/embed/Pwe-pA6TaZk?feature=oembed" frameborder="0" allowfullscreen></iframe>
//     [width] => 480
//     [height] => 270
//     [duration] => 
//     [title] => Where the Hell is Matt? 2012
//     [description] => 
//     [thumbnail] => Array
//         (
//             [url] => https://i.ytimg.com/vi/Pwe-pA6TaZk/hqdefault.jpg
//             [width] => 480
//             [height] => 360
//         )
//     [author] => Array
//         (
//             [name] => Matt Harding
//             [url] => https://www.youtube.com/user/mattharding2718
//         )
//     [provider] => Array
//         (
//             [name] => YouTube
//             [url] => https://www.youtube.com/
//         )
//     [rawResponse] => {"html": "\u003ciframe width=\"480\" height=\"270\" ...
// )

// $videoEmbed->setSize(800, 600); // will set a new width and height in the video html code


class Embed extends \yii\base\Widget
{
    public $url;
    public $type = 'video';

    public function run()
    {
        $url = Html::encode($this->url);
        $videoEmbed = new VideoEmbed($url);
        
        $type = $this->type;
        if ($type == 'thumbnail') {
            $img = $videoEmbed->thumbnail;
            $data = $img['url'];
        } elseif ($type == 'video') {
            $data = $videoEmbed->html;
        } else {
            $data = null;
        }
        
        

        return $data;
    }

}