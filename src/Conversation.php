<?php
namespace Kenpingshu\StatePatternExample;
/**
 * User: ken
 * Date: 2020/12/4
 * Time: 上午11:41
 */

class Conversation
{


    /**
     * @var IConversationState
     */
    private $state;

    public function __construct(IConversationState $InitState)
    {
        $this->state = $InitState;
    }

    public function read()
    {
        $this->state->read($this);
    }

    public function receive()
    {
        $this->state->receive($this);
    }

    public function reply()
    {
        $this->state->reply($this);
    }

    public function transitionTo(IConversationState $state)
    {
        $this->state = $state;
    }

    public function getState()
    {
        return $this->state->toString();
    }

}
