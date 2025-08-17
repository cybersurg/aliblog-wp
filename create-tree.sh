#!/bin/bash

# Create the directory structure
mkdir -p aliblog-wp/theme/ali-child/{src/css,src/js,dist}
mkdir -p aliblog-wp/mu-plugins
mkdir -p aliblog-wp/.github/workflows

# Create all files
touch aliblog-wp/theme/ali-child/header.php
touch aliblog-wp/theme/ali-child/footer.php
touch aliblog-wp/theme/ali-child/front-page.php
touch aliblog-wp/theme/ali-child/functions.php
touch aliblog-wp/theme/ali-child/style.css
touch aliblog-wp/theme/ali-child/tailwind.config.js
touch aliblog-wp/theme/ali-child/package.json
touch aliblog-wp/theme/ali-child/src/css/app.css
touch aliblog-wp/theme/ali-child/src/js/app.js
touch aliblog-wp/mu-plugins/aliblog-core.php
touch aliblog-wp/.github/workflows/deploy.yml
touch aliblog-wp/.gitignore
touch aliblog-wp/README.md

# Verify tree structure
echo "File tree created:"
cmd //c "tree /A /F aliblog-wp | sed 's/\\\\/\\//g'"