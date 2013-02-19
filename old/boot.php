<?php
/*
Perform all of your bootstrap operations here in this file.
That includes loading Routers and other resources (database connections, etc.).
*/

/* ----------------------------------------------------------- */
// Set the web root path
Backbone::$root = "/sites/jamesatracy.com/";

/* ----------------------------------------------------------- */
// Load routers
Backbone::loadRouter("MainRouter");

?>