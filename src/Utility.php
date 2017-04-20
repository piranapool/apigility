<?php
namespace PP\Apigility;

class Utility
{
    /**
     * Define here what this variable is for, do this for every instance variable
     *
     * @var string $m_SampleProperty
     */
    private $m_SampleProperty = '';

    /**
     * Sample method
     *
     * Always create a corresponding docblock for each method, describing what it is for,
     * this helps the phpdocumentator to properly generator the documentation
     *
     * @param string $param1 A string containing the parameter, do this for each parameter to the function, make sure to make it descriptive
     * @return string
     */
    public function func($param)
    {
        return 'Hello World';
    }
}
