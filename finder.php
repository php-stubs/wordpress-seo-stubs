<?php

return \StubsGenerator\Finder::create()
    ->in('source/wordpress-seo')
    ->notPath('admin')
    ->notPath('cli')
    ->notPath('config')
    ->notPath('deprecated')
    ->notPath('migrations')
    // Assets.
    ->notPath('css')
    ->notPath('images')
    ->notPath('js')
    ->notPath('languages')
    ->sortByName()
;
