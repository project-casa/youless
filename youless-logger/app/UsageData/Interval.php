<?php declare(strict_types=1);

namespace Casa\YouLess\UsageData;

use Stellar\Common\Abilities\StringableTrait;
use Stellar\Common\Contracts\ArrayableInterface;
use Stellar\Common\Contracts\StringableInterface;

final class Interval implements ArrayableInterface, StringableInterface
{
    use StringableTrait;

    private $_id;

    private $_name;

    private $_parameter;

    public function __construct(array $record)
    {
        $this->_id = (int) $record['id'];
        $this->_name = $record['name'];
        $this->_parameter = $record['parameter'];
    }

    public function getId() : int
    {
        return $this->_id;
    }

    public function getName() : string
    {
        return $this->_name;
    }

    public function getParameter() : string
    {
        return $this->_parameter;
    }

    public function toArray() : array
    {
        return [
            'id' => $this->_id,
            'name' => $this->_name,
            'parameter' => $this->_parameter,
        ];
    }

    public function __toString() : string
    {
        return $this->_name;
    }
}
