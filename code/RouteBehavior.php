<?php
    namespace GatewayRouter;

    use GatewayRouter\RouteBehaviorType
        as RouteBehaviorType;

    class RouteBehavior
    {
        public function __construct(
            RouteBehaviorType $type
        ){
            $this->setType(
                $type
            );
        }

        private $type = null;

        public function getType(): null
        {
            return $this->type;
        }

        public function setType(
            RouteBehaviorType $type
        ): void
        {
            $this->type = $type;
        }
    }
?>