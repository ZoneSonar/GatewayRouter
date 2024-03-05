<?php
    namespace GatewayRouter;

    use GatewayRouter\RoutePathValueType
        as RoutePathValueType;


    abstract class Route
    {
        public function __construct()
        {
            $this->setValuePathType(
                RoutePathValueType::NONE
            );
        }

        private $path = '*';

        private $value_path_type = null;

        public function getValuePathType(): RoutePathValueType
        {
            return $this->value_path_type;
        }

        public function setValuePathType(
            RoutePathValueType $value
        ){
            $this->value_path_type = $value;
        }

        public function getPath(): string
        {
            return $this->path;
        }

        public function setPath(
            string $path
        ){
            $this->path = $path;
        }
    }
?>