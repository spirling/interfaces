<?php


namespace Spirling\Interfaces\Standard;


interface CompilableInterface extends StringableInterface, \Serializable
{

    /**
     * @return object Compiled instance
     */
    public function compile();

}