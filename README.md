StriideDebugBundle
==================

The intent with this bundle is to provide tools for debugging while developing your apps.

Currently there are twig extensions:

* {{ fooObject | var_dump }}
* {{ fooObject | print_r }}

Routing
-------

StriideDebugBundle:
    resource: "@StriideDebugBundle/Resources/config/routing.yml"
    prefix:   /
