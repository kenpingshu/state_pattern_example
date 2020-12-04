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

    const STATE_REPLIED = 'replied';

    public $state;

    public function __construct()
    {
        $this->state = self::STATE_UNSEEN;
    }

    public function read()
    {
        if ($this->state == self::STATE_SEEN) {
            //do something

            //change state
            $this->state = self::STATE_SEEN;
        } elseif ($this->state == self::STATE_UNSEEN) {
            //do something

            //change state
            $this->state = self::STATE_SEEN;
        } elseif ($this->state == self::STATE_REPLIED) {
            //do something

            //change state
            $this->state = self::STATE_REPLIED;
        }
    }

    public function receive()
    {
        if ($this->state == self::STATE_SEEN) {
            //do something

            //change state
            $this->state = self::STATE_UNSEEN;
        } elseif ($this->state == self::STATE_UNSEEN) {
            //do something

            //change state
            $this->state = self::STATE_UNSEEN;
        } elseif ($this->state == self::STATE_REPLIED) {
            //do something

            //change state
            $this->state = self::STATE_UNSEEN;
        }
    }

    public function reply()
    {
        if ($this->state == self::STATE_SEEN) {
            //do something

            //change state
            $this->state = self::STATE_UNSEEN;
        } elseif ($this->state == self::STATE_UNSEEN) {
            //do something

            //change state
            $this->state = self::STATE_UNSEEN;
        } elseif ($this->state == self::STATE_REPLIED) {
            //do something

            //change state
            $this->state = self::STATE_REPLIED;
        }
    }
}
