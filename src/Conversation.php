<?php
namespace Kenpingshu\StatePatternExample;
/**
 * User: ken
 * Date: 2020/12/4
 * Time: 上午11:41
 */

class Conversation
{
    const STATE_UNSEEN = 'unseen';

    const STATE_SEEN = 'seen';

    public $state;

    public function __construct()
    {
        $this->state = self::STATE_UNSEEN;
    }

    public function read()
    {

    }

    public function receive()
    {

    }
}
