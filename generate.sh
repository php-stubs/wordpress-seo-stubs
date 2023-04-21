#!/usr/bin/env bash

HEADER=$'/**\n * Generated stub declarations for Yoast.\n * @see https://yoast.com/\n * @see https://github.com/php-stubs/wordpress-seo-stubs\n */'

FILE="wordpress-seo-stubs.php"

set -e

test -f "$FILE"
test -d "source/wordpress-seo"

# Exclude globals.
"$(dirname "$0")/vendor/bin/generate-stubs" \
    --include-inaccessible-class-nodes \
    --force \
    --finder=finder.php \
    --header="$HEADER" \
    --functions \
    --classes \
    --interfaces \
    --traits \
    --out="$FILE"

# Tame wild beasts
# https://github.com/Yoast/wordpress-seo/pull/20190
sed -i -e 's#^\(\s*\*\)\s\+<?php\b.*$#\1#' "$FILE"
sed -i -e 's#^\(\s*\*\)\s\+?>.*$#\1#' "$FILE"

printf '\nnamespace Yoast\\WP\\Free\\Loggers { class Migration_Logger {} }\n' >>"$FILE"

# There are no WC functions to read these constants.
# See define_constants() in includes/class-woocommerce.php
printf '\nnamespace {\n    %s\n}\n' "define('WPSEO_VERSION', '0.0.0');" >>"$FILE"
