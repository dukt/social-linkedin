Changelog
=========

## Unreleased

### Added
- Added `dukt\social\linkedin\loginproviders\Linkedin::getDefaultUserFieldMapping()`.

### Changed
- Changed `dukt\social\linkedin\loginproviders\Linkedin::getOauthProvider()` method’s visibility to `public`.
- Renamed `dukt\social\linkedin\loginproviders\Linkedin::getDefaultScope()` to `dukt\social\linkedin\loginproviders\Linkedin::getDefaultOauthScope()`.
- Removed `dukt\social\linkedin\loginproviders\Linkedin::getProfile()`.
- Removed `dukt\social\linkedin\loginproviders\Linkedin::getRemoteProfile()`.
- Removed `dukt\social\linkedin\loginproviders\Linkedin::getClient()`.
- Updated `dukt\social\linkedin\loginproviders\Linkedin::getOauthProvider()` to take into account the new OAuth provider config introduced in Social 2.0.0-beta.10.
- Updated `dukt/social` composer dependency to `^2.0.0-beta.10`.

## 3.0.2 - 2018-05-18

### Changed
- Typed `dukt\social\github\loginproviders\Github::getName()`’s return to string.

## 3.0.1 - 2017-12-17

### Changed
- Updated to require craftcms/cms `^3.0.0-RC1`.
- Updated plugin icon.

### Fixed
- Fixed plugin name.

## 3.0.0 - 2017-10-01

### Added
- Added Social 2 compatibility.
- Added Craft 3 compatibility.