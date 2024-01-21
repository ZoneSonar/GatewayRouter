<?php
    namespace GatewayRouter;

    use GatewayRouter\RouteBehavior 
        as RouteBehavior;
    
    
    abstract class Route
    {
        private $behavior = RouteBehavior::NONE;    

        public function get_behavior(): RouteBehavior
        {
            return $this->behavior;
        }

        public function set_behavior(
            RouteBehavior $new_behavior
        ){
            return $this->behavior = $new_behavior;
        }
    }
?>