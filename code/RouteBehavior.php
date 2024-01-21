<?php
    namespace GatewayRouter;

    
    enum RouteBehavior 
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