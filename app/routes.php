<?php

$app->routes()->add('get', '/{lang}/hello/{name}', 'HelloController@show', 'index');
