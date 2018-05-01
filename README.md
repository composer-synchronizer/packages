# Composer synchronizator packages
- Packages in this repository are those whose author didn't add the configuration for
composer-synchronizer into the package and you want to use them anyway.
- You can add the configuration for those packages into this repository via pull request (it will be merged as fast as possible)

## Adding packages
- Create a package directory in the following structure
`<package name>/<version>/<synchronizer versioned name>` (some/package/1.0/nette2)
- Package will be then searched and downloaded
from https://github.com/composer-synchronizer/packages/blob/master/some/package/1.0/nette2

## Note
Requests on remote configuration files are limited by [Github rate limit](https://developer.github.com/v3/rate_limit/).
