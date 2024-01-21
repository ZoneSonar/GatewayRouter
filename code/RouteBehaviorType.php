<?php
    namespace GatewayRouter;

    
    enum RouteBehaviorType
    {
        case NONE;

        case GET;

        case HEAD;

        case POST;

        case PUT;

        case DELETE;

        case OPTIONS;

        case PATCH;
    }
?>