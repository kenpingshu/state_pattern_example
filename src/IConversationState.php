<?php
/**
 * User: ken
 * Date: 2020/12/4
 * Time: 下午2:32
 */

namespace Kenpingshu\StatePatternExample;


interface IConversationState
{
    public function read(Conversation $context);

    public function receive(Conversation $context);

    public function reply(Conversation $context);

    public function toString();
}
