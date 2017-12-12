<?php
namespace Gap\Open\Dto;

class DtoBase
{
    public function __construct(array $data = [])
    {
        $this->init();
        $this->load($data);
    }

    public function jsonSerialize(): array
    {
        return get_object_vars($this);
    }

    public function getData(): array
    {
        return get_object_vars($this);
    }


    public function __set($key, $val): void
    {
        if ($flagPos = strpos($key, '_')) {
            $subKey = substr($key, $flagPos + 1);

            $dtoName = substr($key, 0, $flagPos);
            if ($this->$dtoName) {
                $this->$dtoName->$subKey = $val;
                return;
            }
        }
        throw new \OutOfBoundsException('Cannot find ' . $key . ' in ' . static::class);
    }

    public function load($data = []): void
    {
        foreach ($data as $key => $val) {
            if (is_array($val) &&
                property_exists($this, $key) &&
                $this->$key instanceof self
            ) {
                $this->$key->load($val);
                continue;
            }

            $this->$key = $val;
        }
    }

    protected function init(): void
    {
    }
}
