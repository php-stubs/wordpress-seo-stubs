<?php

return \StubsGenerator\Finder::create()
    ->in('source/wordpress-seo')
    ->notPath('cli')
    ->notPath('config/composer')
    ->notPath('config/php-codeshift')
    ->notPath('deprecated')
    ->notPath('migrations')
    // Uses ruckusing/ruckusing-migrations.
    ->notPath('src/loggers/migration-logger.php')
    // Assets.
    ->notPath('css')
    ->notPath('images')
    ->notPath('js')
    ->notPath('languages')
    ->sortByName()
;
