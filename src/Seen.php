<?php
/**
 * User: ken
 * Date: 2020/12/4
 * Time: 下午2:35
 */

namespace Kenpingshu\StatePatternExample;


class Seen implements IConversationState
{

    public function read(Conversation $context)
    {
        //do something

        //change state
        $context->transitionTo(new Seen());
    }

    public function receive(Conversation $context)
    {
        //do something

        //change state
        $context->transitionTo(new UnSeen());
    }

    public function reply(Conversation $context)
    {
        //do something
        echo 'user reply'.PHP_EOL;
        //change state
        $context->transitionTo(new Replied());
    }

    public function toString()
    {
        // TODO: Implement toString() method.
        return 'seen';
    }
}
